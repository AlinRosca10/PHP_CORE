<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <meta http-equiv="X-AU-Coopatible" content="ie=edge">
        <title>Lista carti generata din PHP</title>
    </head>
    <body>
        <div class="container clearfix">
            <nav class="navbar fixed-top navbar-dark bg-dark">
                <a class="navbar-brand" href="a">Lista de carti</a>
            </nav>
        </div>

<?php include('book.php'); ?>

        <div style="padding-top: 50px;">
            <div class="container">
                <div class="row">
<?php foreach ($books as $book): ?>
                    <div class="col-6 col-sm-4 col-md-4 col-lg-4 mt-2 ">
                        <div class="card">
                            <img class="card-img-top" style="height: 500px" src="<?php echo $book['image_url']; ?>" alt="Card image" style="width: 100V">
                            <div class="card-body">
                                <h4 class="card-title"><?php echo $book['title']; ?></h4>
                                <h6 class="card-subtitle mb-2 text-muted"><?php echo $book['author']; ?>, <?php echo $book['country']; ?></h6>
                                <h5 class="card-subtitle mb-1 text-muted" style="text-align: right">Price: <?php echo number_format($book['price'], 2) . ' ' . $book['currency']; ?></h5>
                                <br>
                                <p class="card-text">Language: <?php echo $book['language']; ?>;
                                                    Pages: <?php echo $book['pages']; ?>;
                                                    Year: <?php echo $book['year']; ?>;
                                                    Edition: <?php echo $book['edition']; ?>;
                                                    Publisher: <?php echo $book['publisher']; ?>;
                                                    ISBN: <?php echo $book['isbn']; ?>;
                                                    Format: <?php echo $book['format']; ?>;
                                                    Publisher City: <?php echo $book['publisher_city']; ?>;
                                                    Publication date: <?php echo $book['publication_date']; ?>;
                                                    Edition number: <?php echo $book['edition_number']; ?>;
                                                    Genre: <?php echo $book['genre']; ?>
                                </p>
                                <a href="<?php echo $book['link']; ?>" class="btn btn-primary">Read more</a>
                            </div>
                        </div>
                    </div>
<?php endforeach; ?>
                </div>
            </div>

        </div>

    </body>
</html>