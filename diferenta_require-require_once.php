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
        include "header.html";

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
        <?php 
            require "book.php";
        ?>
        <?php
            // echo "List of books:<br>";
            // foreach($books as $book) {
            //     echo "<h1>$book[title]</h1>" . "<h2>$book[author]</h2>" . "<br>"; // afisarea titlui si autorului cartii folosind concatenarea sirurilor de caractere in constructia echo
            // }
        ?>
        
        <?php foreach($books as $key_book => $book) :?>
            <h1>The title of the book: <?php echo $book['title']; ?></h1>
            <h2>The author of the book: <?php echo $book['title']; ?></h2>
        <?php endforeach; ?>
        <p>This is the main section of the webpage.</p>
    </main>
    <?php
        // Include the footer file
        include "footer.html";
    ?>
</body>
</html>