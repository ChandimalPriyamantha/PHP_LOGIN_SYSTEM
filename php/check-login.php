<?php 

if(isset($_POST['email']) && isset($_POST['password'])
 && isset($_POST['remember'])){

    echo 'Hello World..';
 }else{

    header("Location: ../index.php");
 }

?>