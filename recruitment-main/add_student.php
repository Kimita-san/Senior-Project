<?php

include_once 'db.php';
require 'database.php';
require_once 'header.php';
if(isset($_POST['submit']))
{
     $phone = $_POST['phone'];
     $email = $_POST['email'];
	 $fname = $_POST['fname'];
	 $lname = $_POST['lname'];
	 $jnum = $_POST['jnum'];
	 $gpa = $_POST['gpa'];
	 $major = $_POST['major'];
	 $school = $_POST['school'];
	 $status = $_POST['Status'];
	 $term = $_POST['term'];
	 $house = $_POST['house'];
	 $street = $_POST['street'];
	 $streetType = $_POST['streetType'];
	 $city = $_POST['city'];
	 $state = $_POST['State'];
	 $zip = $_POST['zip'];
	 $bday = $_POST['bday'];
   $Birthdate = date("Y-m-d",strtotime($bday));
	 $followup = $_POST['followup'];
   $FollowDate = date("Y-m-d",strtotime($followup));
	 $active = $_POST['Active'];
	 $domestic = $_POST['Area'];
     $sql = "INSERT INTO students (phoneNum,email,firstName,lastName,jagNum,GPA,major,school,status,term,houseNumber,streetName,streetType,city,state,zip,birthdate,followupDate,active,domestic)
     VALUES ('$phone','$email','$fname','$lname','$jnum','$gpa','$major','$school','$status','$term','$house','$street','$streetType','$city','$state','$zip','$Birthdate','$FollowDate','$active','$domestic')";
     if (mysqli_query($conn, $sql)) {
        echo "New record has been added successfully !";
        header('location: view_student_form.php');
     } else {
        echo "Error: " . $sql . ":-" . mysqli_error($conn);
     }
     mysqli_close($conn);
}
?>
