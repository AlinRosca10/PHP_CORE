<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <meta http-equiv="X-AU-Coopatible" content="ie=edge">
        <title>Lista carti generata din PHP</title>
        <style>
            .card {
                position: relative;
                overflow: hidden;
            }

            .card-summary {
                position: absolute;
                top: 0;
                left: 0;
                width: 100%;
                height: 20%;
                background: rgba(0, 0, 0, 0.85);
                color: #fff;
                padding: 20px;
                opacity: 0;
                transition: opacity 0.3s ease-in-out;
                display: flex;
                align-items: center;
                justify-content: center;
                text-align: center;
            }

            .card:hover .card-summary {
                opacity: 1;
            }
        </style>
    </head>
    <body>
        <div class="container clearfix">
            <nav class="navbar fixed-top navbar-dark bg-dark">
                <a class="navbar-brand" href="a">Lista de carti</a>
            </nav>
<?php include('book.php'); ?>
<?php
// extragem genurile unice
$genres = array_unique(array_map(function ($book) {
    return $book['genre'];
}, $books));

// sortare alfabetică
sort($genres);
?>
<?php
$filteredBooks = $books;

if (!empty($_GET['author'])) {
    $author = strtolower($_GET['author']);
    $filteredBooks = array_filter($filteredBooks, function ($book) use ($author) {
        return strpos(strtolower($book['author']), $author) !== false;
    });
}

if (!empty($_GET['year'])) {
    $year = $_GET['year'];
    $filteredBooks = array_filter($filteredBooks, function ($book) use ($year) {
        return $book['year'] == $year;
    });
}

if (!empty($_GET['genre'])) {
    $genre = strtolower($_GET['genre']);
    $filteredBooks = array_filter($filteredBooks, function ($book) use ($genre) {
        return strpos(strtolower($book['genre']), $genre) !== false;
    });
}
?>
            <div class="container" style="padding-top:80px;">
                <form method="get" class="mb-4">
                    <div class="row">

                        <div class="col-md-4">
                            <input type="text" name="author" class="form-control"
                                placeholder="Search by author"
                                value="<?php echo $_GET['author'] ?? ''; ?>">
                        </div>

                        <div class="col-md-4">
                            <input type="number" name="year" class="form-control"
                                placeholder="Search by year"
                                value="<?php echo $_GET['year'] ?? ''; ?>">
                        </div>

                        <div class="col-md-3">
                            <select name="genre" class="form-control">
                                <option value="">All genres</option>
                                    <?php foreach ($genres as $g): ?>
                                        <option value="<?php echo $g; ?>"
                                            <?php if (!empty($_GET['genre']) && $_GET['genre'] == $g) echo 'selected'; ?>>
                                            <?php echo $g; ?>
                                        </option>
                                    <?php endforeach; ?>
                            </select>
                        </div>

                        <div class="col-md-1">
                            <button type="submit" class="btn btn-primary btn-block">
                                🔍
                            </button>
                        </div>

                    </div>
                </form>
            </div>

            <div class="container" style="padding-top:80px;">
                <div class="row mb-4">
                    <div class="col-md-6">
                        <input type="text" id="search" class="form-control"
                            placeholder="Search live by title, author, genre, year...">
                    </div>
                </div>

                <div class="row" id="results">
                    <!-- cartile se vor încărca aici -->
                </div>
            </div>

        </div>

<?php if (empty($filteredBooks)): ?>
    <div class="col-12">
        <div class="alert alert-warning text-center">
            No books found 😞
        </div>
    </div>
<?php endif; ?>

        <div style="padding-top: 50px;">
            <div class="container">
                <div class="row">
<?php foreach ($filteredBooks as $book): ?>
                    <div class="col-6 col-sm-4 col-md-4 col-lg-4 mt-2 ">
                        <div class="card">
                            <img class="card-img-top" style="height: 500px" src="<?php echo $book['image_url']; ?>" alt="Card image" style="width: 100V">
                            <div class="card-summary">
                                <p><?php echo $book['summary']; ?></p>
                            </div>
                            <div class="card-body">
                                <h4 class="card-title"><?php echo $book['title']; ?></h4>
                                <h6 class="card-subtitle mb-2 text-muted"><?php echo $book['author']; ?>, <?php echo $book['country']; ?></h6>
                                <br>
                                <h5 class="card-subtitle mb-1 text-muted" style="text-align: right">Price: <?php echo number_format($book['price'], 2) . ' ' . $book['currency']; ?></h5>
                                <br>
                                <h7 class="card-subtitle mb-3 text-muted" style="text-align: right">Genre: <?php echo $book['genre']; ?></h7>
                                <hr>
                                <p class="card-text">Language: <?php echo $book['language']; ?>; 
                                                    Pages: <?php echo $book['pages']; ?>; 
                                                    Year: <?php echo $book['year']; ?>; 
                                                    Edition: <?php echo $book['edition']; ?>; 
                                                    Publisher: <?php echo $book['publisher']; ?>; 
                                                    ISBN: <?php echo $book['isbn']; ?>; 
                                                    Format: <?php echo $book['format']; ?>; 
                                                    Publisher City: <?php echo $book['publisher_city']; ?>; 
                                                    Publication date: <?php echo $book['publication_date']; ?>; 
                                                    Edition number: <?php echo $book['edition_number']; ?> 
                                </p>
                                <a href="<?php echo $book['link']; ?>" class="btn btn-primary">Read more</a>
                            </div>
                        </div>
                    </div>
<?php endforeach; ?>
                </div>
            </div>

        </div>
    <script>
        const searchInput = document.getElementById('search');
        const results = document.getElementById('results');

        searchInput.addEventListener('keyup', function () {
            const query = this.value;

            fetch('search.php?q=' + encodeURIComponent(query))
                .then(response => response.text())
                .then(data => {
                    results.innerHTML = data;
                });
        });
        </script>
    </body>
</html>