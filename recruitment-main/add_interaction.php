<?php
include_once 'db.php';
require 'database.php';
require_once 'header.php';
if(isset($_POST['submit']))
{
     $date = $_POST['date'];
	 $comment = $_POST['comment'];
     $sql = "INSERT INTO activities (date,comments)
     VALUES ('$date','$comment')";
     if (mysqli_query($conn, $sql)) {
        echo "New record has been added successfully !";
     } else {
        echo "Error: " . $sql . ":-" . mysqli_error($conn);
     }
     mysqli_close($conn);
}
?>
