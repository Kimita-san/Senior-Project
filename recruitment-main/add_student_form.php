<!DOCTYPE html>
<?php
require 'database.php';
require_once 'header.php';
require 'add_student.php';
 ?>
<html>
<body style="background: url(images/student3.jpg); background-size:cover; background-repeat: no-repeat;">

<style>
.sideview {
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
		<div class= "sideview w3-theme-d2">
			<a href="view_student_form.php" class="w3-bar-item w3-button">Display Students</a>
		  <a href="add_student_form.php" class="w3-bar-item w3-button">Add Student</a>
		  <a href="edit_student_form.php" class="w3-bar-item w3-button">Edit Student</a>
</div>

<div class=" main w3-container" style="max-width:900px; margin-left:500px">
			        <div class="w3-card-4 w3-white">
			                    <div class="w3-container w3-red">
			                        <h2 style="text-align:center">Student Form</h2>
			                    </div>
			                    <p style="text-align:center">Please fill this form and submit to add student record to the database.</p>
			                    <form class ="w3-container" autocomplete="off" action="add_student.php" method="post">
									           <p>
			                            <label style="text-align:left"><b>First Name: </b></label>
			                            <input type="text" autocomplete="off" pattern ="^[a-za-Z]+" name="fname" class="w3-input w3-border" required>
                              <p>
			                            <label style="text-align:left"><b>Last Name:</b></label>
			                            <input type="text" pattern ="^[a-za-Z]+" name="lname" class="w3-input w3-border" required>
									            <p>
			                            <label style="text-align:left"> <b>Email:</b></label>
			                            <input type="email" name="email" class="w3-input w3-border" required>
									            <p>
			                            <label style="text-align:left"><b>Phone Number:</b></label>
			                            <input type="tel" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" placeholder="123-456-7890" class="w3-input w3-border" name="phone"  required>
			                        <p>
			                            <label input="text" style="text-align:left"><b>Jag Number (if usa student): </b></label>
			                            <input type="text" name="jnum" class="w3-input w3-border">
			                        <p>
			                            <label style="text-align:left"><b>GPA:</b></label>
			                            <input type="text" name="gpa" class="w3-input w3-border">
			                        <p>
			                            <label style="text-align:left"><b>Major:</b></label>
			                            <input type="text" name="major" class="w3-input w3- border" required>
			                        <p>
			                            <label style="text-align:left"><b>School:</b></label>
			                            <input type="text" name="school" class="w3-input w3-border" required>
			                        <p>
			                            <label style="text-align:left"><b>Status:</b></label>
                                  <select class="w3-dropdown" name="Status" id="status" required>
                                  <option value = "Active">Active</option>
                                  <option value = "Applied">Applied</option>
                                  <option value = "Inactive">Inactive</option>
                                  <option value = "Not Intrested">Not Intrested</option>
                                </select>
			                       <p>
			                            <label style="text-align:left"><b>Expected Term:</b></label>
			                            <input type="text" name="term" class="w3-input w3-border" required>
			                       <p>
			                            <label style="text-align:left"><b>House Number:</b></label>
			                            <input number="text" name="house" class="w3-input w3-border" required>
			                       <p>
			                            <label style="text-align:left"><b>Street:</b></label>
			                            <input type="text" name="street" class="w3-input w3-border" required>
			                        <p>
			                            <label style="text-align:left"><b>Street Type:</b></label>
			                            <input type="text" name="streetType" class="w3-input w3-border" required>
			                       <p>
			                            <label style="text-align:left"><b>City:</b></label>
			                            <input type="text" name="city" class="w3-input w3-border" required>
			                        <p>
			                            <label style="text-align:left"><b>State:</b></label>
                                  <select name="State" id="state" required>
                                    <option value="AL">Alabama</option>
                                    <option value="AK">Alaska</option>
                                    <option value="AZ">Arizona</option>
                                    <option value="AR">Arkansas</option>
                                    <option value="CA">California</option>
                                    <option value="CO">Colorado</option>
                                    <option value="CT">Connecticut</option>
                                    <option value="DE">Delaware</option>
                                    <option value="DC">District Of Columbia</option>
                                    <option value="FL">Florida</option>
                                    <option value="GA">Georgia</option>
                                    <option value="HI">Hawaii</option>
                                    <option value="ID">Idaho</option>
                                    <option value="IL">Illinois</option>
                                    <option value="IN">Indiana</option>
                                    <option value="IA">Iowa</option>
                                    <option value="KS">Kansas</option>
                                    <option value="KY">Kentucky</option>
                                    <option value="LA">Louisiana</option>
                                    <option value="ME">Maine</option>
                                    <option value="MD">Maryland</option>
                                    <option value="MA">Massachusetts</option>
                                    <option value="MI">Michigan</option>
                                    <option value="MN">Minnesota</option>
                                    <option value="MS">Mississippi</option>
                                    <option value="MO">Missouri</option>
                                    <option value="MT">Montana</option>
                                    <option value="NE">Nebraska</option>
                                    <option value="NV">Nevada</option>
                                    <option value="NH">New Hampshire</option>
                                    <option value="NJ">New Jersey</option>
                                    <option value="NM">New Mexico</option>
                                    <option value="NY">New York</option>
                                    <option value="NC">North Carolina</option>
                                    <option value="ND">North Dakota</option>
                                    <option value="OH">Ohio</option>
                                    <option value="OK">Oklahoma</option>
                                    <option value="OR">Oregon</option>
                                    <option value="PA">Pennsylvania</option>
                                    <option value="RI">Rhode Island</option>
                                    <option value="SC">South Carolina</option>
                                    <option value="SD">South Dakota</option>
                                    <option value="TN">Tennessee</option>
                                    <option value="TX">Texas</option>
                                    <option value="UT">Utah</option>
                                    <option value="VT">Vermont</option>
                                    <option value="VA">Virginia</option>
                                    <option value="WA">Washington</option>
                                    <option value="WV">West Virginia</option>
                                    <option value="WI">Wisconsin</option>
                                    <option value="WY">Wyoming</option>
                                  </select>
			                        <p>
			                            <label style="text-align:left"><b>Zip:</b></label>
			                            <input type="number" name="zip" class="w3-input w3-border" required>
			                        <p>
			                            <label style="text-align:left"><b>Birthdate:</b></label>
			                            <input type="date" name="bday" class="w3-input w3-border" required>
			                      <p>
			                            <label style="text-align:left"><b>Next follow-up?</b></label>
			                            <input type="date" name="followup" class="w3-input w3-border">
			                       <p>
                                    <label style="text-align:left" for="Active"><b>Active:</b></label>
                                   <input id="Active" type="radio" name="Active" value="yes" required /> Yes
                                   <input id="Active" type="radio" name="Active" value="no" /> No
			                        <p>
                                    <label style="text-align:left"><b>Country Area</b></label>
                                    <select name="Area" id="area" required>
                                    <option value = "Domestic Student">Domestic</option>
                                    <option value = "International Student">International</option>
                                    </select>
			                        <p>
			                        <input type="submit" class="btn btn-primary" name="submit" value="Submit">
			                    </form>
			            </div>

</div>
</html>
