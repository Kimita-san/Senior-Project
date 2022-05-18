<?php
require 'database.php';
require_once 'header.php';
require 'add_admin.php';
?>
<html lang="en">
<body style="background: url(images/recruit1.jpg); background-size:cover; background-repeat: no-repeat;">

    <meta charset="UTF-8">
    <title>Create Admin</title>
    <link rel="stylesheet" href="main.css">
    <style>
    .tab {
    float: left;
    width: 10%;
    height: 100vh;
    }

    .main {
      float: left;
      padding: 20px;
      width: 70%;
    }
}
    </style>
    <body>
    <header>
        <div class= "tab w3-theme-d2">
          <a href="view_users_form.php" class="w3-bar-item w3-button">Display Recruiters</a>
          <a href="add_admin_form.php" class="w3-bar-item w3-button">Add Recruiter</a>
          <a href="edit_admin_form.php" class="w3-bar-item w3-button">Edit Recruiter</a>
      </div>
    </header>
    </body>
        <div class="main w3-container" style="max-width:700px;margin-left: 600px">
          <div class="w3-card-4 w3-white">
                    <div class="w3-container w3-red">
                        <h2 style="text-align:center">Recruiter Form</h2>
                    </div>
                    <p style="text-align:center">Please fill this form and submit to add employee record to the database.</p>
                    <form class="w3-container" action="add_admin.php" method="post">
                        <p>
                           <label style="text-align:left"><b>First Name</b></label>
                            <input type="text" name="firstName" class="w3-input w3-border" required>
                       <p>
                           <label style="text-align:left"><b>Last Name</b></label>
                           <input type="text" name="lastName" class="w3-input w3-border" required>
                      <p>
                           <label style="text-align:left"><b>Username</b></label>
                           <input type="text" name="name" class="w3-input w3-border" required>
                      <p>
                             <label style="text-align:left"><b>Email</b></label>
                            <input type="email" name="email" class="w3-input w3-border" required>
                      <p>
                            <label style="text-align:left"><b>Password</b></label>
                            <input type="password" name="password" class="w3-input w3-border" required>
                      <p>
                            <label style="text-align:left"><b>Jagnumber</b></label>
                            <input type="text" name="jnum" class="w3-input w3-border"required>
                      <p>
                                    <label style="text-align:left" for="Admin">Admin?: </label>
                                         <input id="Admin" type="radio" name="Admin" value="yes" required /> Yes
                                         <input id="Admin" type="radio" name="Admin" value="no" /> No
                      <p>
                        <input type="submit" class="btn btn-primary" name="submit" value="Submit">
                    </form>
                </div>
            </div>
        </div>
</body>
</html>
