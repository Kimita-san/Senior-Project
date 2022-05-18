<!--this is a comment in HTML-->

<?php
//this is a comment in php
require 'db.php';
if(!empty($_SESSION["id"])){
  header("Location: menu.php");
}
 if(isset($_POST["submit"])){
   $usernameemail = $_POST["usernameemail"];
   $password = $_POST["password"];
   $result = mysqli_query($conn, "SELECT * FROM users WHERE username = '$usernameemail' OR email = '$usernameemail'");
   $row = mysqli_fetch_assoc($result);
   if (mysqli_num_rows($result) > 0){
     if ($password == $row['password']){
       $_SESSION["login"] = true;
       $_SESSION["id"] = $row["userID"];
       header("Location: menu.php");
   }
   else{
     echo
     "<script> alert('Wrong Password'); </script>";
   }
 }
 else{
   echo
   "<script> alert('user Not Registered'); </script>";
 }
}
 ?>


<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width" ,initial-scale=1>
  <title> Recruitment Database </title>

  <link rel="stylesheet" type="text/css" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href='https://cdnjs.cloudflare.com/ajax/libs/Trumbowyg/2.19.1/ui/trumbowyg.min.css'>
  <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Roboto'>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <style>
.w3-theme-l5 {color:#000 !important; background-color:#eff4fb !important}
.w3-theme-l4 {color:#000 !important; background-color:#cadbf2 !important}
.w3-theme-l3 {color:#000 !important; background-color:#95b6e4 !important}
.w3-theme-l2 {color:#fff !important; background-color:#6092d7 !important}
.w3-theme-l1 {color:#fff !important; background-color:#316ec4 !important}
.w3-theme-d1 {color:#fff !important; background-color:#204881 !important}
.w3-theme-d2 {color:#fff !important; background-color:#1d4072 !important}
.w3-theme-d3 {color:#fff !important; background-color:#193864 !important}
.w3-theme-d4 {color:#fff !important; background-color:#153056 !important}
.w3-theme-d5 {color:#fff !important; background-color:#122847 !important}

img {
  width:100%

}
  </style>

</head>

<body style="background: url(images/jagbackground.jpg); background-size:100% 100%; background-repeat: no-repeat;">
  <center>

  <header class ="w3-containder w3-navy-blue" style="width=100%, height = 600px">
    <img src="images/SouthBar.jpg" style="width=100%">
  </header>
  <div class=" w3-container w3-theme-d1" style="width=100%, height=300px">
    <h2 style="text-align:center">Recruitment Center</h2
    </div>
  </div>
  <br>
  <br>
      <div class="w3-card-4 w3-border w3-round-xlarge w3-white" style="margin:auto; width:50%; height:300px">
        <div class="w3-container w3-border w3-round-xlarge w3-red">
            <h2>Administrator Login </h2>
        </div>
      <form action="" method="POST" autocomplete="off">
      <label for="Usernameemail"> Username or Email </label>
      <input type="text"  class="w3-input " name="usernameemail" id="usernameemail" required value>
      <br>
      <label for="password"> Password: </label>
      <input type="password" class="w3-input " name="password" id="password" required value="">
      <br>
      <button type="submit" name="submit">Login</button>
      <br>
    </form>
</div>
</html>
