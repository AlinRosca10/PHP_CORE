<?php
    $array1=array(132,232,23,423,3433,423,2343,10,22,10,16,19,20,10);
    sort($array1);
    print_r($array1);//ascending order
    echo "<br>";

    rsort($array1);
    print_r($array1);//descending order
    echo "<br>";

    asort($array1);
    print_r($array1);//pastreaza cheile cu sortare crescatoare
    echo "<br>";

    arsort($array1);
    print_r($array1);//pastreaza cheile cu sortare descrescatoare
    echo "<br>";

    $array1=array_unique($array1);
    sort($array1);
    print_r($array1);
    echo "<br>";

    $array1=array_unique($array1);
    rsort($array1);
    print_r($array1);
    echo "<br>";

    $length=count($array1);
    print_r($length);
    echo "<br>";
    for($i=0;$i<$length;$i++)
    {
        for($j= 0;$j<$length-$i-1;$j++)
        {
            if($array1[$j]>$array1[$j+1])//sortare manuala crescatoare
            {
                $temp=$array1[$j];
                $array1[$j]=$array1[$j+1];
                $array1[$j+1]=$temp;
            }
        }
    }
    print_r($array1);
    echo "<br>";

    echo 'Alin esti cel mai bun programator din toate timpurile!!!';
    echo "<br>";

    for($i=0;$i<$length;$i++)
    {
        for($j= 0;$j<$length-$i-1;$j++)
        {
            if($array1[$j]<$array1[$j+1])//sortare manuala descrescatoare
            {
                $temp=$array1[$j];
                $array1[$j]=$array1[$j+1];
                $array1[$j+ 1]=$temp;
            }
        }
    }
    print_r($array1);
    echo "<br>";

    foreach($array1 as $i=>$value)
    {
        $minIndex=$i;
        foreach($array1 as $j=>$value2)
        {
            if($j>=$i && $array1[$j]<$value2[$minIndex])//ordonare crescatoare
            {
                $minIndex=$j;
            }
        }
        if($minIndex!== 0)
        {
            $temp=$array1[$i];
            $array1[$i]=$array1[$minIndex];
            $array1[$minIndex]=$temp;
        }
    }
    print_r($array1);
  
    foreach($array1 as $i=>$value)
    {
        $maxIndex=$i;
        foreach($array1 as $j=>$value2)
        {
            if($j<=$i && $array1[$j]>$value2[$maxIndex])//ordonare descrescatoare
            {
                $maxIndex=$j;
            }
        }
        if($maxIndex!== 0)
        {
            $temp=$array1[$i];
            $array1[$i]=$array1[$maxIndex];
            $array1[$maxIndex]=$temp;
        }
    }
    print_r($array1);
?>