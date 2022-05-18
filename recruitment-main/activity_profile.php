<?php
require 'db.php';
require 'database.php';
require_once 'header.php';

$idstu = (INT)$_GET['display'];

$sql = "SELECT * FROM activities WHERE activityID = '$idstu'";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) == 0) {
    echo "Error Student Not Found";
  }

  $row = mysqli_fetch_assoc($result);
  $id = $row['activityID'];
  $name = $row['activityName'];
  $desc = $row['activityDesc'];
  $date = $row['activityDate'];
  $comment = $row['comment'];
?>
<html>
<body style="background: url(images/events7.jpg); background-size:cover; background-repeat: no-repeat;">

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
<div style=" height: 100px">

</div>
<div class="w3-main w3-round" style="left= auto; margin-left:500px; width:100%; height:680px; overflow: auto">

  <div class="w3-container">
    <div class ="w3-row ">
<div class="w3-twothird w3-container">
    <div class="w3-card-4 w3-white " style="margin-right:300px; opacity:0.9">
      <center>

      <div class="w3-container w3-red">
            <h2 style="text-align: center">Activity</h2>
        </div>
     <form action="" method="POST" class="w3-container">
         <input type="hidden" name="id" value="<?php echo $id; ?>">
         <p>
             <label><strong>Name</strong></label>
             <p class ="p2"><?php echo $name; ?></p>
         <p>
           <p>
               <label><strong>Description</strong></label>
               <p class ="p2"><?php echo $desc; ?></p>
           <p>
         <p>
             <label><strong>Date</strong></label>
             <p class ="p2"><?php echo $date; ?></p>
         </p>
         <p>
             <label><strong>comments</strong></label>
            <p class ="p2"><?php echo $comment; ?></p>
         <p>
       </div>
     </div>
       </header>
    </div>
 </div>
