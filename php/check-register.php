<?php
// connection with database here..
include 'connection.php';
if (
    isset($_POST['email']) && isset($_POST['password']) &&
    isset($_POST['address']) && isset($_POST['name'])
    && isset($_POST['user_type'])
   ) {

    //Strip unnecessary characters (extra space, tab, newline) from the user input data (with the PHP trim() function)
    //Remove backslashes (\) from the user input data (with the PHP stripslashes() function)

    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
     }

    $email =  validate($_POST['email']);
    $userPassword =  validate($_POST['password']);
    $address =  validate($_POST['address']);
    $name = validate($_POST['name']);
    $userType = validate($_POST['user_type']);

    $user_data = 'email='. $email. '&address='. $address. '&name='. $name;
    
    
    if(empty($email)){
        header("Location: ../register.php?error=Email is required&$user_data");
        exit();
    }else if(empty($userPassword)){
        header("Location: ../register.php?error=Password is required&$user_data");
    }else if(empty($address)){
        header("Location: ../register.php?error=Address is required&$user_data");
    }else if(empty($name)){
        header("Location: ../register.php?error=Name is required&$user_data");
    }else if(empty($userType)){
        header("Location: ../register.php?error=User Type is required&$user_data");
    }else{
            
        // hashing the password
        $pass = md5($userPassword);

        $sql = "SELECT * FROM user_details WHERE Email = '$email'";
        $result = mysqli_query($conn, $sql);


        if (mysqli_num_rows($result) > 0) {
			header("Location: ../register.php?error=This email is taken try another");
	        exit();
		}else {
            $sql2 = "INSERT INTO user_details (Email, Password, Address, Name, User_Type)
            VALUES ('$email', '$pass', '$address',' $name','$userType')";
            $result2 = mysqli_query($conn, $sql2);

           if ($result2){
           	 header("Location: ../register.php?success=Your account has been created successfully");
	         exit();
           }else{
	           	header("Location: ../register.php?error=unknown error occurred&$user_data");
		        exit();
           }
		}
    }
    

mysqli_close($conn);
    
}else{
	header("Location: ../register.php");
	exit();
}
