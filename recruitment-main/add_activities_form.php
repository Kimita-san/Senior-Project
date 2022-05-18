<!DOCTYPE html>
<?php
require 'database.php';
require_once 'header.php';
require 'add_activities.php';
 ?>
<html>
<body style="background: url(images/events7.jpg); background-size:cover; background-repeat: no-repeat;">

<head>
<style>

#wrapper{
  border: 1px solid black;
}
.vertical-menu  {
float: left;
width: 10%;
height: 100vh;
}

.main {
  float: left;
  padding: 20px;
  width: 70%;
}
</style>
</head>
<body>
<div class= "vertical-menu w3-theme-d2" style="float:left">
  <a href="view_activities_form.php" class="w3-bar-item w3-button">Display Activities</a>
  <a href="add_activities_form.php" class="w3-bar-item w3-button">Add Activtiies</a>
  <a href="edit_activity_form.php" class="w3-bar-item w3-button">Edit Activities</a>
</div>
	<head>
		<title> Recruitment DB</title>
		<link rel="stylesheet" type="text/css" href="main.css">
	</head>

<div class=" main w3-container" style="max-width:700px;margin-left: 600px">

              <div class ="w3-card-4 w3-white">
                    <div class="w3-container w3-red">
                        <h2 style="text-align:center">Activities Form</h2>
                    </div>
                    <p style="text-align:center">Submit to add activity record to the database.</p>
                    <form class= "w3-container" action="add_activities.php" method="post">
                      <p>

                            <label style="text-align:left"><b>Activity Name</b></label>
                            <input type="text" name="name" class="w3-input w3-border">
                        <p>
                            <label style="text-align:left"><b>Activity Description</b></label>
                            <input type="text" name="description" class="w3-input w3-border">
                        <p>
                            <label style="text-align:left"><b>Activity Date</b></label>
                            <input type="date" name="date" class="w3-input w3-border">
                        <p>
                            <label style="text-align:left"><b>comment</b></label>
                            <p>

                            </p>
                            <textarea name="comment" placeholder="Enter comment Notes..."style="height: 180px; resize: none; width: 500px; overflow:auto"></textarea>
                        <p>
                        <input type="submit" class="btn btn-primary" name="submit" value="Submit">
                    </form>
                </div>
        </div>
</body>
</html
