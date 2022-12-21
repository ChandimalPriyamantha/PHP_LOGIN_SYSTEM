<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

 ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/my-login.css">
    <title>Document</title>
</head>

<body>
    <nav class="navbar navbar-dark bg-primary">

        <a class="navbar-brand" href="#">
            <img src="img/logo.png" width="30" height="30" class="d-inline-block align-top" alt="">
            English Learning Platform
        </a>
        <!-- Navbar content -->

        <div class="d-flex align-items-center">

            <a class="text-white" href="php/logout.php">Log Out</a>

            <button type="button" class="btn btn-primary me-3">
                Welcome, <?php echo $_SESSION['name'] ?>
            </button>

        </div>


    </nav>
    <h1>Welcome, <?php echo $_SESSION['name'] ?> as a user.</h1><br>

    
    <!-- ------------------footer------------------------------------------  -->
    <footer class="bg-light text-center text-lg-start">
        <!-- Grid container -->
        <div class="container p-4 pb-0">
            <form action="">
                <!--Grid row-->
                <div class="row">
                    <!--Grid column-->
                    <div class="col-auto mb-4 mb-md-0">
                        <p class="pt-2">
                            <strong>Sign up for our newsletter</strong>
                        </p>
                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-md-5 col-12 mb-4 mb-md-0">
                        <!-- Email input -->
                        <div class="form-outline mb-4">
                            <input type="email" id="form5Example25" class="form-control" />
                            <label class="form-label" for="form5Example25">Email address</label>
                        </div>
                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-auto mb-4 mb-md-0">
                        <!-- Submit button -->
                        <button type="submit" class="btn btn-primary mb-4">
                            Subscribe
                        </button>
                    </div>
                    <!--Grid column-->
                </div>
                <!--Grid row-->
            </form>
        </div>
        <!-- Grid container -->

        <!-- Copyright -->
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
            © 2020 Copyright:
            <a class="text-dark" href="https://mdbootstrap.com/">MDBootstrap.com</a>
        </div>
        <!-- Copyright -->
    </footer>

</body>

</html>

<?php 
}else{
     header("Location: index.php");
     exit();
}
 ?>