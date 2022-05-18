<?php
require_once 'header.php';
?>
<html>
<body style="background: url(images/student4.jpg); background-size:cover; background-repeat: no-repeat;">

<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
.tab {
float: left;
width: 10%;
height: 2000px;
}

.main {
  float: left;
  padding: 20px;
  width: 70%;
}
</style>
	<head>
		<title> Recruitment DB</title>
		<link rel="stylesheet" type="text/css" href="main.css">
	</head>
  <div class= "tab w3-theme-d2">
    <a href="view_student_form.php" class="w3-bar-item w3-button">Display Student</a>
    <a href="add_student_form.php" class="w3-bar-item w3-button">Add Student</a>
    <a href="edit_student_form.php" class="w3-bar-item w3-button">Edit Student</a>
</div>
<div class=" w3-container w3-quarter w3-border w3-round-xlarge w3-light-gray" style ="margin-left:10px;width: 400px;" >
<div class="w3-twothird">


  <form action = "search.php" method= "GET" class"w3-container">

    <input type="text" name="q" placeholder="Search Student" class="w3-input w3-border"/>

  <input type="submit" class="w3-btn w3-red w3-round" value="search" placeholder="Search"/>
</form>
</div>
</div>
