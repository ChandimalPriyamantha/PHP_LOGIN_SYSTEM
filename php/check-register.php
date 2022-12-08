<?php

if (
    isset($_POST['email']) && isset($_POST['password']) &&
    isset($_POST['address']) && isset($_POST['name'])
    && isset($_POST['user_type'])
) {

    $email = $_POST['email'];
    $userPassword =  md5($_POST['password']);
    $address =  $_POST['address'];
    $name = $_POST['name'];
    $userType = $_POST['user_type'];
    //echo $password;
    
    // connection with database here..
    include 'connection.php';

    $sql = "INSERT INTO user_details (Email, Password, Address, Name, User_Type)
            VALUES ('$email', '$userPassword', '$address',' $name','$userType')";

    if (mysqli_query($conn, $sql)) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    mysqli_close($conn);
    
}
