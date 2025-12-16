<?php
include('book.php');

$q = strtolower($_GET['q'] ?? '');

$filteredBooks = array_filter($books, function ($book) use ($q) {
    return
        strpos(strtolower($book['title']), $q) !== false ||
        strpos(strtolower($book['author']), $q) !== false ||
        strpos(strtolower($book['genre']), $q) !== false ||
        strpos((string)$book['year'], $q) !== false;
});

if (empty($filteredBooks)) {
    echo '<div class="col-12">
            <div class="alert alert-warning text-center">
                No results found 😞
            </div>
          </div>';
    exit;
}

foreach ($filteredBooks as $book):
?>
    <div class="col-6 col-sm-4 col-md-4 col-lg-4 mt-2">
        <div class="card h-100">
            <img class="card-img-top" style="height:350px; object-fit:cover;"
                 src="<?php echo $book['image_url']; ?>">

            <div class="card-body">
                <h5><?php echo $book['title']; ?></h5>
                <p class="text-muted">
                    <?php echo $book['author']; ?> (<?php echo $book['year']; ?>)
                </p>
                <p>
                    Genre: <?php echo $book['genre']; ?><br>
                    Price: <?php echo number_format($book['price'], 2) . ' ' . $book['currency']; ?>
                </p>
                <a href="<?php echo $book['link']; ?>" class="btn btn-sm btn-primary">
                    Read more
                </a>
            </div>
        </div>
    </div>
<?php endforeach; ?>