<?php
require 'db.php';
require 'database.php';
require_once 'header.php';

$id = (INT)$_GET['display'];

$sql = "SELECT * FROM users WHERE UserID = '$id'";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) == 0) {
    echo "Error Student Not Found";
  }

  $row = mysqli_fetch_assoc($result);
//   $userid = $row['UserID'];
  $email = $row['email'];
  $firstName = $row['firstName'];
  $lastName = $row['lastName'];
  $jnum = $row['jnum'];
  $privledgedRights = $row['privledgedRights'];
  $c = $firstName." ".$lastName;

?>
<html>
<body style="background: url(images/recruit1.jpg); background-size:cover; background-repeat: no-repeat;">

<style>
.p2 {
  font-family: Arial, Helvetica, sans-serif;
  font-size: 20px;
  border: 2px solid #ddd;
}
</style>
<div>
<button class="w3-left" onclick="history.back()"><<< Go Back</button>
</div>
<div clas= "w3-container" style= "height:20px">

</div>


<div class="w3-main w3-round" style="margin-left:550px; height:680px; overflow: auto">

  <div class="w3-container">
    <div class ="w3-row ">
<div class="w3-twothird w3-container">
    <div class="w3-card-4 w3-white" style="margin-right:150px; opacity:0.9">
      <center>

      <div class="w3-container w3-red">
            <h2 style="text-align: center"><?php echo $c; ?></h2>
        </div>
     <form action="" method="POST" class="w3-container">
         <input type="hidden" name="id" value="<?php echo $id; ?>">
         <p>
             <label><strong>First Name</strong></label>
             <p class ="p2"><?php echo $firstName; ?></p>
         <p>
           <p>
               <label><strong>Last Name</strong></label>
               <p class ="p2"><?php echo $lastName; ?></p>
           <p>
         <p>
             <label><strong>Email</strong></label>
             <p class ="p2"><?php echo $email; ?></p>
         </p>
         <p>
             <label><strong>Username</strong></label>
            <p class ="p2"><?php echo $username; ?></p>
         <p>
           <!-- <p>
               <label><strong>password</strong></label>
               <p type = "password" class ="p2" ><?php echo $password; ?></p>
           <p> -->
         <p>
             <label><strong>Jagnumber</strong></strong></label>
             <p class ="p2"><?php echo $jnum; ?></p>
         <p>
         <p>
             <label><strong>Admin</strong></label>
             <p class="p2"><?php echo $privledgedRights; ?></p>
         <p>
         </p>
       </div>
     </div>
    </div>
