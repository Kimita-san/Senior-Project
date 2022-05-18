<?php
require 'db.php';
require_once 'header.php';

if(!empty($_SESSION["id"])){
  $id = $_SESSION["id"];
  $result = mysqli_query($conn, "SELECT * FROM users WHERE userID =$id");
  $row = mysqli_fetch_assoc($result);
  $username = $row['username'];
}
else{
  header("Location: login.php");
}
 ?>
<html>

<body style="background: url(images/ShelbyHall.jpg); background-size:cover; background-repeat: no-repeat;">
<div class="w3-container w3-border w3-round-large w3-theme-d1" style="opacity: 0.8;margin: auto; height: 80px; width: 30%;">
<h1 style="text-align:center; color: white" >Welcome Recruiter <?php echo $row["firstName"]; ?>! </h1>
</div>
<div class="w3-container w3-round-large" style="margin-left:1400px; height: 200px; width: 500px;">
  <div class="w3-containeer w3-round-large w3-white" style="overflow:auto; opacity:0.9">
    <div class="w3-container w3-round-large w3-red" style= "opacity: 0.8">
      <h2 style="text-align: center">Notifications</h2>
    </div>
    <div class="w3-container w3-round-large w3-white" style="overflow:auto; height: 200px; Width: 450px">


    <?php

    $sql = "SELECT * FROM students";
    $result = mysqli_query($conn, $sql);
    while ($row = mysqli_fetch_assoc($result)) {
      $idstu = $row['studentID'];
      $phone = $row['phoneNum'];
      $email = $row['email'];
      $fname = $row['firstName'];
      $lname = $row['lastName'];
      $followupDate = $row['followupDate'];
      $fDate = date("Y-m-d",strtotime($followupDate));
      $c = $fname." ".$lname;
      $date = $row['followupDate'];
      $warningDate = date('Y-m-d', strtotime('-7 days', strtotime($followupDate)));
      $wDate =  date("Y-m-d",strtotime($warningDate));
      $now = date('Y-m-d');

        if (($now >= $wDate) && ($now <= $fDate)){
          echo "<div class='w3-light-grey'>";
          echo "<p> The Follow-up Date is approaching for ". $c . " For the date of ". $fDate .".</p>";
          echo "</div>";
        } elseif ($now >= $fDate) {
          echo "<div class ='w3-light-gray'>";
          echo "<p> It's time to follow-up with ". $c . " For the date of ". $fDate .".</p>";
          echo "</div>";
        }
      }
      ?>

      </div>
</div>
</div>
