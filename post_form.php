<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.2">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>My first Login Form</title>
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <link href="maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" id="bootstrap-css">
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
        <div id="login">
            <h2 class="text-center text-white pt-5">My first Login</h2>
            <div class="container">
                <div id="login-row" class="row justify-content-center align-items-center">
                    <div id="login-column" class="col-md-6">
                        <div id="login-box" class="col-md-12">
                            <form id="login-form" class="form form-group" action="post_form.php" method="post">
                                <h3 class="text-center text-info aurora-input">Login</h3>
                                <div class="form-group">
                                    <label for="username" class="text-info aurora-label">Username:</label><br>
                                    <input type="text" name="username" id="username" class="form-control aurora-input"> 
                                </div>
                                <div class="form-group">
                                    <label for="password" class="text-info aurora-label">Password:</label><br>
                                    <input type="password" name="password" id="password" class="form-control aurora-input">
                                    <br>
                                    <input type="submit" name="submit" class="btn btn-info btn-md aurora-button" value="Submit">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>