<!--this works-->
<?php
include_once 'db.php';
require 'database.php';
require_once 'header.php';
if(isset($_POST['submit']))
{
     $name = $_POST['name'];
     $email = $_POST['email'];
     $password = $_POST['password'];
	 $firstName = $_POST['firstName'];
	 $lastName = $_POST['lastName'];
	 $jnum = $_POST['jnum'];
	 $privledgedRights = $_POST['Admin'];
     $sql = "INSERT INTO users (username,email,password,firstName,lastName,jnum,privledgedRights)
     VALUES ('$name','$email','$password','$firstName','$lastName','$jnum','$privledgedRights')";
     if (mysqli_query($conn, $sql)) {
        header('location: view_users_form.php');
     } else {
        echo "Error: " . $sql . ":-" . mysqli_error($conn);
        echo "New record couldn't be added !";
     }
     mysqli_close($conn);
}
?>
