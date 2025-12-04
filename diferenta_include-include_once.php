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

    echo "<br /><strong>Observatie:</strong> Fisierul 'teste.php' a fost inclus o singura data folosind include_once, in ciuda faptului ca am incercat sa-l includem de trei ori.</p>";
    echo "<br /><strong>In schimb, folosind include, fisierul a fost inclus de fiecare data cand am apelat include.</strong>";
    echo "<br /><strong>Aceasta diferenta este cruciala pentru evitarea erorilor cauzate de includerea multipla a aceluiasi fisier, mai ales in cazul definirii functiilor sau claselor.</strong>";
    echo "<br /><strong>Astfel, include_once este util atunci cand dorim sa ne asiguram ca un fisier este inclus o singura data in cadrul unui script.</strong>";
    echo "<br /><strong>Pe de alta parte, include este util atunci cand dorim sa includem un fisier de mai multe ori, daca este necesar.</strong>";
    echo "<br /><strong>In concluzie, alegerea intre include si include_once depinde de contextul si cerintele specifice ale aplicatiei noastre PHP.</strong>";
    echo "<hr style='border-top: 2px solid #ff0000;'>";

    echo "<hr style='border-top: 2px solid #ff00ee;'>";
    echo "<h2>Additional Information for include or include_once:</h2>";
    echo "<p>Both include and include_once are used to include and evaluate a specified file in PHP. However, there are some key differences between the two:</p>";
    echo "<ul>";
    echo "<li><strong>include:</strong> This statement includes and evaluates the specified file
    each time it is called. If the file is not found, a warning is issued, but the script continues to execute.</li>";
    echo "<li><strong>include_once:</strong> This statement includes and evaluates the specified file only once during the execution of the script. If the file has already been included, it will not be included again. This is useful to prevent redeclaration errors for functions, classes, or variables defined in the included file.</li>";
    echo "</ul>";
    echo "<p>In summary, use include when you want to include a file multiple times, and use include_once when you want to ensure that a file is included only once to avoid potential conflicts.</p>";
    echo "<p>Both statements are essential for modular programming in PHP, allowing developers to organize code into separate files for better maintainability and reusability.</p>";
    echo "<p>It's important to choose the appropriate statement based on the specific requirements of your application to ensure optimal performance and avoid errors.</p>";
    echo "<p>For more information, you can refer to the official PHP documentation:</p>";
    echo "<a href='https://www.php.net/manual/en/function.include.php' target='_blank' style='color: blue;'>PHP include() Documentation</a><br>";
    echo "<a href='https://www.php.net/manual/en/function.include-once.php' target='_blank' style='color: blue;'>PHP include_once() Documentation</a>";
    echo "</p>";
    echo "$x and $y are variables defined in teste.php that can be accessed here if needed. And the sum is: $sum.";
    echo "<hr style='border-top: 2px solid #ff00ee;'>";

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
