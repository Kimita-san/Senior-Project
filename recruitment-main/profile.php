<?php
require 'db.php';
require 'database.php';
require_once 'header.php';

$idstu = (INT)$_GET['display'];

$sql = "SELECT * FROM students WHERE studentID = '$idstu'";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) == 0) {
    echo "Error Student Not Found";
  }

  $row = mysqli_fetch_assoc($result);
  $idstu = $row['studentID'];
  $phone = $row['phoneNum'];
  $email = $row['email'];
  $fname = $row['firstName'];
  $lname = $row['lastName'];
  $jnum = $row['jagNum'];
  $gpa = $row['GPA'];
  $major = $row['major'];
  $school = $row['school'];
  $status = $row['status'];
  $term = $row['term'];
  $house = $row['houseNumber'];
  $street = $row['streetName'];
  $streetType = $row['streetType'];
  $city = $row['city'];
  $state = $row['state'];
  $zip = $row['zip'];
  $bday = $row['birthdate'];
  $followup = $row['followupDate'];
  $active = $row['active'];
  $domestic = $row['domestic'];
  $c = $fname." ".$lname;

?>
<html>
<body style="background: url(images/student3.jpg); background-size:cover; background-repeat: no-repeat;">

<style>
.p2 {
  font-family: Arial, Helvetica, sans-serif;
  font-size: 20px;
  border: 2px solid #ddd;
}
</style>
<div class="w3-button w3-left w3-round w3-light-gray">
<a href="view_student_form.php ?>"><<< Go Back</a>
</div>

<div class="w3-main w3-round" style="left= auto; margin-left:180px; height:680px; overflow: auto">

  <div class="w3-container">
    <div class ="w3-row ">
<div class="w3-twothird w3-container">
    <div class="w3-card-4 w3-white " style="margin-right:300px">
      <center>

      <div class="w3-container w3-red">
            <h2 style="text-align: center"><?php echo $c; ?></h2>
        </div>
     <form action="" method="POST" class="w3-container">
         <input type="hidden" name="id" value="<?php echo $id; ?>">
         <p>
             <label><strong>First Name</strong></label>
             <p class ="p2"><?php echo $fname; ?></p>
         <p>
           <p>
               <label><strong>Last Name</strong></label>
               <p class ="p2"><?php echo $lname; ?></p>
           <p>
         <p>
             <label><strong>Email</strong></label>
             <p class ="p2"><?php echo $email; ?></p>
         </p>
         <p>
             <label><strong>Phone</strong></label>
            <p class ="p2"><?php echo $phone; ?></p>
         <p>
           <p>
               <label><strong>Jagnumber(If USA student)</strong></label>
               <p class ="p2"><?php echo $jnum; ?></p>
           <p>
         <p>
             <label><strong>GPA</strong></label>
             <p class ="p2"><?php echo $gpa; ?></p>
         <p>
         <p>
             <label><strong>Major</strong></label>
             <p class ="p2"><?php echo $major; ?></p>
         <p>
         <p>
             <label><strong>School</strong></label>
             <p class ="p2"><?php echo $school; ?></p>
         <p>
         <p>
             <label><strong>Status</strong></label>
             <p class ="p2"><?php echo $status; ?></p>
         <p>
         <p>
             <label><strong>Term</strong></label>
             <p class ="p2"><?php echo $term; ?></p>
         <p>
         <p>
             <label><strong>Address Number</strong></label>
            <p class ="p2"><?php echo $house; ?></p>
         <p>
           <p>
               <label><strong>Street</strong></label>
               <p class ="p2"><?php echo $street; ?></p>
           <p>
         <p>
             <label><strong>StreetType</strong></label>
             <p class ="p2"><?php echo $streetType; ?></p>
         <p>
         <p>
             <label><strong>City</strong></label>
             <p class ="p2"><?php echo $city; ?></p>
         <p>
         <p>
             <label><strong>State</strong></label>
             <p class ="p2"><?php echo $state; ?></p>
         <p>
         <p>
             <label><strong>Zip</strong></label>
             <p class ="p2"><?php echo $zip; ?></p>
         <p>
         <p>
             <label><strong>Date Of Birth</strong></label>
             <p class ="p2"><?php echo $bday; ?></p>
         <p>
         <p>
             <label><strong>Follow UP</strong></label>
             <p class ="p2"><?php echo $followup; ?></p>
         <p>
         <p>
             <label><strong>Active</strong></label>
             <p class ="p2"><?php echo $active; ?></p>
         <p>
         <p>
             <label><strong>Country Area</strong></label>
             <p class ="p2"><?php echo $domestic; ?></p>
         <p>
         <p>

         </p>
       </div>
     </div>
       <div class="w3-third w3-container" style="width:500px; height: 500px">
         <header class ="w3-container w3-red  w3-round-xlarge" style = "text-align:center;margin-left: 50px; margin-right: 20px">
         <h2>Interactions</h2>
       </header>
       <p>

       </p>
        <div class=" w3-container w3-white w3-round-xlarge" style="width:500px; height:600px; overflow: auto">
          <?php
          $query= "SELECT * FROM interactions WHERE studentID = $idstu";
          $statement = $db->prepare($query);
          $statement ->execute();
          $interactions = $statement->fetchAll();

          $statement ->closeCursor();
        foreach ($interactions as $row2) :

          echo '<div class="w3-container w3-white w3-padding-24 w3-round-large">';

          echo '<header class = "w3-container w3-theme-l2">';
          echo "<h2 style ='text-align: center'>$c</h2>";
          echo '</header>';
          echo '<div class="w3-container w3-light-grey w3-border">';
          echo "<p><strong>Type of intertation: </strong>". $row2["activity"]. "</p>";
          echo "<p><strong>comments:</strong> </p>";
          echo '<div class="w3-container w3-white" style="width:380px; height: 120px; overflow: auto">';
          echo "<p>". $row2["comments"]."</p>";
          echo '</div>';
          echo "<p><strong>Date: </strong>". $row2["date"] .":</p>";
          echo "<p><strong>Follow-up Date: </strong>". $row2["followupDate"] ."</p>";
          echo "<a href='interactionedit.php?id=". $row2["commID"]."'>Edit</a>";
					echo '</form>';
          echo '</div>';
          echo '</div>';
          endforeach;

      ?>

    </div>
    <p>

    </p>
    <div class="w3-button w3-red w3-round">
      <a href="Addinteraction_form.php?addinteraction=<?php echo $idstu; ?>">Add</a>
    </div>
      </div>
