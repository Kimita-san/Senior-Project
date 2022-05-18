<?php
require_once 'header.php';
require 'db.php';
?>
<html>
<body style="background: url(images/events7.jpg); background-size:cover; background-repeat: no-repeat;">

<style>
.tab {
float: left;
width: 10%;
height: 100vh;
}
</style>
<header>
  <div class= "tab w3-theme-d2">
    <a href="view_activities_form.php" class="w3-bar-item w3-button">Display Activities</a>
    <a href="add_activities_form.php" class="w3-bar-item w3-button">Add Activtiies</a>
    <a href="edit_activity_form.php" class="w3-bar-item w3-button">Edit Activities</a>
</div>
</header>
</body>
<div class=" w3-container w3-quarter w3-border w3-round-xlarge w3-light-gray" style ="margin-left:30px;width: 400px;overflow:auto" >
<div class="w3-twothird">
  <form action = "search_activity.php" method= "GET" class"w3-container">

    <input type="text" name="a" placeholder="Search Activity" class="w3-input w3-border"/>

  <input type="submit" class="w3-btn w3-red w3-round" value="search" placeholder="Search"/>
</form>
</div>
</div>
