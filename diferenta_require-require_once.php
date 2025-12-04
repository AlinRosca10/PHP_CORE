<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        // Include the header file
        include "html/header_footer/header.html";

        // Include the file using require
        require 'somefile.php';
        echo "First require executed.<br>";

        // Include the same file again using require
        require 'somefile.php';
        echo "Second require executed.<br>";

        // Include the file using require_once
        require_once 'somefile.php';
        echo "First require_once executed.<br>";

        // Include the same file again using require_once
        require_once 'somefile.php';
        echo "Second require_once executed.<br>";
    ?>
    <main
        <h1>Welcome to the Main Content</h1>
        <h2>This section demonstrates require vs require_once</h2>
        <p>This is the main section of the webpage.</p>
    </main>
    <?php
        // Include the footer file
        include "html/header_footer/footer.html";
    ?>
</body>
</html>