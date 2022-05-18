<?php
    session_start();
    $servername='localhost';
    $username='mgs_user';
    $password='pa55word';
    $dbname = "recruitment";
    $conn=mysqli_connect($servername,$username,$password,"$dbname");
      if(!$conn){
          die('Could not Connect MySql Server:' .mysql_error());
        }
?>
