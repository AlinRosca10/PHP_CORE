<?php
    include 'book.php';
    $count_same_books = 0;
    $authors_count = [];
    $titles_count = [];
    foreach ($books as $book) {
        if (isset($authors_count[$book['author']])) {
            $authors_count[$book['author']]++;
        } else {
            $authors_count[$book['author']] = 1;
        }

        if (isset($titles_count[$book['title']])) {
            $titles_count[$book['title']]++;
        } else {
            $titles_count[$book['title']] = 1;
        }
    }

    foreach ($authors_count as $count) {
        if ($count > 1) {
            $count_same_books++;
        }
    }

    foreach ($titles_count as $count) {
        if ($count > 1) {
            echo "There are duplicate book titles in the list.<br>";
            break;
        }
    }

    if ($count_same_books > 0) {
        echo "There are authors with multiple books in the list.<br>";
    } else {
        echo "All authors have only one book in the list.<br>";
    }
    
    echo "List of books:<br>";
    foreach ($books as $book) {
        echo $book['title'] . " - " . $book['author'] . "<br>";
    }

    echo "<hr>";
    echo "<hr>";
?>