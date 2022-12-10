<?php 
session_start();

//echo 'Welcome'.$_SESSION['name'];

//echo '<br>'.$_SESSION['user_name'];
//echo $_SESSION['address'];
//echo '<br>'.$_SESSION['name'];
//echo '<br>'.$_SESSION['id'] ;

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Welcome, <?php echo $_SESSION['name'] ?> as a user.</h1><br>

     <a href="php/logout.php">Logout</a>

</body>
</html>
 


