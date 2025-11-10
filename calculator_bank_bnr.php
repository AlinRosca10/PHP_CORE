<?php
    //XML download function directly from the BNR
    function getBnrExchangeRates() {
        $url = "https://www.bnr.ro/nbrfxrates.xml";
        $xml = @simplexml_load_file($url);

        if (!$xml) {
            return null;
        }

        $date = (string) $xml->Body->Cube->attributes()->date;
        $currencies =[];

        foreach ($xml->Body->Cube->Rate as $rate) {
            $currency = (string)$rate['currency'];
            $value= (float)$rate;
            $currencies[$currency] = $value;
        }

        //Adding manual RON
        $currencies['RON'] = 1.0000;

        return [
            'date' => $date,
            'currencies' => $currencies
        ];
    }

    //Function for live update
    function getLiveExchangeRates($source = "bnr") {
        if ($source === 'bnr') {
            return loadExchangeRatesCached();
        } else {
            $url = "https://api.exchangerate.host/latest?base=RON";
            $json = @file_get_contents($url);
            $data = json_decode($json, true);

            if ($data && isset($data['rates'])) {
                return [
                    'date' => $data['date'],
                    'currencies' => $data['rates']
                ];
            }
            return null;
        }
    }

    //Function for local cache (24h)
    function loadExchangeRatesCached() {
        $cacheFile = __DIR__ . '/bnr_rates_cache.json';
        $cacheTTL = 24 * 60 * 60; //24 hours

        if (file_exists($cacheFile)) {
            $age = time() - filemtime($cacheFile);
            $content = json_decode(file_get_contents($cacheFile), true);
            if($age < $cacheTTL && $content) {
                return $content;
            }
        }

        $data = getBnrExchangeRates();
        if($data) {
            file_put_contents($cacheFile, json_encode($data, JSON_PRETTY_PRINT));
        }
        return $data;
    }

    //Getting courses from cache or online
    $bnr = getLiveExchangeRates() ?? ['currencies' => ['RON' => 1], 'date' => 'Unavailable'];
    $rates = $bnr ? $bnr['currencies'] : ["RON" => 1];
    $rate_date = $bnr ? $bnr['date'] : "Unavailable";

    //Interest calculation + conversion
    $result = "";
    if (isset($_POST['bank_interest'])) {
        $initial_submission = (float)$_POST['initial_submission'];
        $monthly_deposit = (float)$_POST['monthly_deposit'];
        $interest = (float)$_POST['interest'] / 100;
        $years = (int)$_POST['years'];
        $currency = htmlspecialchars($_POST['currency']);

        if(!array_key_exists($currency,$rates)) {
            $currency = "RON";
        }

        $compounding_rate = 12;
        $monthly_interest = $interest / $compounding_rate;
        $balance = $initial_submission;

        $output = "<h3>Balance evolution for $years years ($currency):</h3><ul>";

        for ($year = 1; $year <= $years; $year++)
        {
            for($month = 1; $month <= 12; $month++) {
                $balance = ($balance + $monthly_deposit) * (1 + $monthly_interest);
            }
            $output .= "<li>Year $year: <strong>" . number_format($balance, 2) . " " . $currency . "</strong></li>";
        }
        $output .= "</ul>";

        //Conversion in RON according to BNR exchange rate 
        $exchange_rate = $rates[$currency] ?? 1;
        $balance_in_ron = $balance * $exchange_rate;

        $output .= "<p><strong>Final balance:</strong> " . number_format($balance, 2) . " $currency</p>";
        $output .= "<p>Exchange rate ($currency → RON) on $rate_date: <strong>$exchange_rate</strong></p>";
        $output .= "<p><strong>Equivalent in RON:</strong> " . number_format($balance_in_ron, 2) . " RON</p>";

        $result = $output;
    } 
?>