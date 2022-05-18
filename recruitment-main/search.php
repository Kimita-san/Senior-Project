<?php
require 'db.php';
require_once 'edit_student_form.php';
?>
<html>
<div class="w3-cmain" style="margin-left:800px; height:900px;overflow:auto">
<?php
if (isset($_GET['q'])) {
    $q = mysqli_real_escape_string($conn, $_GET['q']);

    $sql = "SELECT * FROM students WHERE firstName LIKE '%{$q}%' OR LastName LIKE '%{$q}%'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) < 1) {
        echo "Nothing found.";
      } else {
   while ($row = mysqli_fetch_assoc($result)) {
       $ID = htmlentities($row['studentID']);
    $phone = htmlentities($row['phoneNum']);
    $email = htmlentities($row['email']);
  $fname = htmlentities($row['firstName']);
  $lname = htmlentities($row['lastName']);
  $jnum = htmlentities($row['jagNum']);
  $gpa = htmlentities($row['GPA']);
  $major = htmlentities($row['major']);
  $school = htmlentities($row['school']);
  $status = htmlentities($row['status']);
  $term = htmlentities($row['term']);
  $house = htmlentities($row['houseNumber']);
  $street = htmlentities($row['streetName']);
  $streetType = htmlentities($row['streetType']);
  $city = htmlentities($row['city']);
  $state = htmlentities($row['state']);
  $zip = htmlentities($row['zip']);
  $bday = htmlentities($row['birthdate']);
  $followup = htmlentities($row['followupDate']);
  $active = htmlentities($row['active']);
  $domestic = htmlentities($row['domestic']);
        echo '<form action = "edit.php" method="GET" class"w3-container w3-right"> ';

        echo '<div class="w3-panel w3-round-xlarge w3-theme-l4 w3-card-4" style="width: 100%; overflow:auto">';
        echo'<header class ="w3-containter w3-theme-d1">';
        echo "<h1 style='text-align: center'>$fname, $lname</h1>";
        echo'</header>';
        echo'<div class="w3-container w3-light-grey">';

        echo"<p>email: $email</p>";
        echo"<p>phone: $phone</p>";
        echo"<input type='hidden' id = 'searched' name='searched' value= $ID />";
        echo'<input type="submit" value="edit" placeholder="edit" class="w3-btn w3-theme-d1 w3-round"/>';
        echo'<br>';
        echo '</div>';
        echo '</div>';
        echo'</form>';
}
}
}
?>
</div>
</html>
