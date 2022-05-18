
<?php
require_once 'header.php';
require 'db.php';

if(!empty($_SESSION["id"])){
  $admin = $_SESSION["id"];
  $result2 = mysqli_query($conn, "SELECT * FROM users WHERE userID =$admin");
  $row2 = mysqli_fetch_assoc($result2);
  $access = $row2['privledgedRights'];
}
?>
<html>
<body style="background: url(images/recruit2.jpg); background-size:cover; background-repeat: no-repeat;">

<style>
.tab {
float: left;
width: 10%;
height: 100vh;
}
</style>
<body>
<header>
    <div class= "tab w3-theme-d2">
      <a href="view_users_form.php" class="w3-bar-item w3-button">Display Recruiters</a>
      <?php if ($access == "yes"): ?>
      <a href="add_admin_form.php" class="w3-bar-item w3-button">Add Recruiter</a>
      <a href="edit_admin_form.php" class="w3-bar-item w3-button">Edit Recruiter</a>
    <?php endif ?>
  </div>
</header>
</body>
<div class=" w3-container w3-quarter w3-border w3-round-xlarge w3-light-gray" style ="margin-left:30px;width: 400px;overflow:auto" >
<div class="w3-twothird">
<?php if ($access == "yes"): ?>
  <form action = "search_admin.php" method= "GET" class"w3-container">

    <input type="text" name="p" placeholder="Search Recruiters" class="w3-input w3-border"/>

  <input type="submit" class="w3-btn w3-red w3-round" value="search" placeholder="Search"/>
</form>
  <?php endif ?>
</div>
</div>
