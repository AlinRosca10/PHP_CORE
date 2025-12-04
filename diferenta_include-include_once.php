<?php
    // Demonstrating the difference between include and include_once in PHP

    echo "<h2>Using include_once:</h2>";
    // include_once will include the file only once, even if called multiple times
    include_once 'included_file.php';
    include_once 'included_file.php';
    include_once 'included_file.php';

    echo "<h2>Using include:</h2>";
    // include will include the file every time it's called
    include 'included_file.php';
    include 'included_file.php';
    include 'included_file.php';

    echo "<p>As you can see, 'include_once' executes the file only once, while 'include' executes it multiple times.</p>";

    echo "<hr>";
    echo "End of demonstration.";

    echo "<br><a href='index.php' style='color: blue;'>Back to Index</a>";

    echo "<br><a href='https://www.php.net/manual/en/function.include.php' target='_blank' style='color: blue;'>PHP include() Documentation</a>";

    echo "<hr style='border-top: 2px solid #ff0000;'>";
    echo "<h2>Demonstration of include behavior:</h2>";

    echo "<br />";
    echo "pas1";
    echo "<br />";
    include "teste.php"; // include normal prima oara
    echo "<br />";

    echo "<br />";
    echo "pas2";
    echo "<br />";
    include "teste.php"; // include normal si a doua oara acelasi fisier
    echo "<br />";

    echo "<br />";
    echo "pas3";
    echo "<br />";
    include "teste.php"; // include normal si a treia oara acelasi fisier
    echo "<br />";

    echo "<hr style='border-top: 2px solid #ff0000;'>";

    echo "<hr style='border-top: 2px solid #ff0000;'>";
    echo "<h2>Demonstration of include_once behavior:</h2>";

    echo "<br />";
    echo "pas1";
    echo "<br />";
    include_once "teste.php"; // include_once prima oara
    echo "<br />";
    
    echo "<br />";
    echo "pas2";
    echo "<br />";
    include_once "teste.php"; // include_once a doua oara acelasi fisier
    echo "<br />";

    echo "<br />";
    echo "pas3";
    echo "<br />";
    include_once "teste.php"; // include_once a treia oara acelasi fisier
    echo "<br />";
    echo "<hr style='border-top: 2px solid #ff0000;'>";

    echo "<hr>";
    echo "<h2>Server and Environment Information:</h2>";
    echo "<hr>";

    echo "Script executed on " . date("Y-m-d H:i:s");
    echo "<br>Current PHP version: " . phpversion();
    echo "<br>Server Software: " . $_SERVER['SERVER_SOFTWARE'];
    echo "<br>Document Root: " . $_SERVER['DOCUMENT_ROOT'];
    echo "<br>Client IP Address: " . $_SERVER['REMOTE_ADDR'];
    echo "<br>Server Name: " . $_SERVER['SERVER_NAME'];
    echo "<br>Request Method: " . $_SERVER['REQUEST_METHOD'];
    echo "<br>Script Filename: " . $_SERVER['SCRIPT_FILENAME'];
    echo "<br>User Agent: " . $_SERVER['HTTP_USER_AGENT'];
    echo "<br>Referer: " . (isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : 'N/A');
    echo "<br>Connection Type: " . (isset($_SERVER['HTTP_CONNECTION']) ? $_SERVER['HTTP_CONNECTION'] : 'N/A');
    echo "<br>Accept Language: " . (isset($_SERVER['HTTP_ACCEPT_LANGUAGE']) ? $_SERVER['HTTP_ACCEPT_LANGUAGE'] : 'N/A');
    echo "<br>Host: " . (isset($_SERVER['HTTP_HOST']) ? $_SERVER['HTTP_HOST'] : 'N/A');
    echo "<br>Accept Encoding: " . (isset($_SERVER['HTTP_ACCEPT_ENCODING']) ? $_SERVER['HTTP_ACCEPT_ENCODING'] : 'N/A');
    echo "<br>Accept: " . (isset($_SERVER['HTTP_ACCEPT']) ? $_SERVER['HTTP_ACCEPT'] : 'N/A');
    echo "<br>Connection: " . (isset($_SERVER['HTTP_CONNECTION']) ? $_SERVER['HTTP_CONNECTION'] : 'N/A');
    echo "<br>Cache Control: " . (isset($_SERVER['HTTP_CACHE_CONTROL']) ? $_SERVER['HTTP_CACHE_CONTROL'] : 'N/A');
    echo "<br>Upgrade Insecure Requests: " . (isset($_SERVER['HTTP_UPGRADE_INSECURE_REQUESTS']) ? $_SERVER['HTTP_UPGRADE_INSECURE_REQUESTS'] : 'N/A');
    echo "<br>Sec Fetch User: " . (isset($_SERVER['HTTP_SEC_FETCH_USER']) ? $_SERVER['HTTP_SEC_FETCH_USER'] : 'N/A');
    echo "<br>Sec Fetch Site: " . (isset($_SERVER['HTTP_SEC_FETCH_SITE']) ? $_SERVER['HTTP_SEC_FETCH_SITE'] : 'N/A');
    echo "<br>Sec Fetch Mode: " . (isset($_SERVER['HTTP_SEC_FETCH_MODE']) ? $_SERVER['HTTP_SEC_FETCH_MODE'] : 'N/A');
    echo "<br>Sec Fetch Dest: " . (isset($_SERVER['HTTP_SEC_FETCH_DEST']) ? $_SERVER['HTTP_SEC_FETCH_DEST'] : 'N/A');
    echo "<br>TE: " . (isset($_SERVER['HTTP_TE']) ? $_SERVER['HTTP_TE'] : 'N/A');
    echo "<br>X Powered By: " . (isset($_SERVER['HTTP_X_POWERED_BY']) ? $_SERVER['HTTP_X_POWERED_BY'] : 'N/A');
    echo "<br>PHP Self: " . $_SERVER['PHP_SELF'];
    echo "<br>Gateway Interface: " . $_SERVER['GATEWAY_INTERFACE'];
    echo "<br>Server Protocol: " . $_SERVER['SERVER_PROTOCOL'];
    echo "<br>Request Time: " . date("Y-m-d H:i:s", $_SERVER['REQUEST_TIME']);

    echo "<hr>";
    echo "End of script.";
    echo "<hr>";
?>
