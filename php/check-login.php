<?php 

if(isset($_POST['email']) && isset($_POST['password'])
 && isset($_POST['role'])){

   include 'connection.php';

    /*echo 'Hello World..';
    function test_input($data){
      $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
      return $data;
    }
    
    $username = test_input($_POST['email']);
    $password = test_input($_POST['password']);
    $remember = test_input($_POST['remember']);

    if (empty($username)){
      header("Location: ../index.php?error=User Name is Required");
    }else if(empty($password)){
      header("Location: ../index.php?error=Password is Required");
    }else{
      echo "Cool";
    }*/

 }else{

    header("Location: ../index.php");
 }

?>