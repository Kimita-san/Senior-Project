<?php
include_once 'db.php';
require 'database.php';
require_once 'header.php';

  $userID = $_SESSION["id"];

if(isset($_GET['id']) && $_GET['id'] != ""){
  $id = (INT)$_GET['id'];
  $sql = "SELECT * FROM interactions WHERE commID = '$id'";
  $result = mysqli_query($conn, $sql);
  if (mysqli_num_rows($result) == 0) {
      echo "Error Student Not Found";
    }

    $row = mysqli_fetch_assoc($result);
    $idstu = $row['studentID'];
    $name = $row['studentName'];
    $userID = $row['userID'];
    $activity = $row['activity'];
    $comment = $row['comments'];
    $Currentdate = $row['date'];
    $cDate = date("Y-m-d",strtotime($Currentdate));
    $Followup = $row['followupDate'];
    $fDate = date("Y-m-d",strtotime($Followup));
}else{
  echo "Invalid ID specified";

}


if(isset($_POST['submit'])){
    $activites = mysqli_real_escape_string($conn, $_POST['Activity']);
    $Currentdate = mysqli_real_escape_string($conn, $_POST['date']);
    $cDate = date("Y-m-d",strtotime($Currentdate));
    $Followup = mysqli_real_escape_string($conn, $_POST['followupDate']);
    $fDate = date("Y-m-d",strtotime($Followup));
    $comment = mysqli_real_escape_string($conn, $_POST['comment']);

 $sql = "UPDATE Interactions SET activity = '$activites', date = '$cDate', followupDate = '$fDate', comments ='$comment' WHERE commID = $id";
          if (mysqli_query($conn, $sql)) {
             echo "New Interaction has been added successfully !";
           } else {
              echo "Error: " . $sql . ":-" . mysqli_error($conn);
           }
  $sql2 = "UPDATE students SET followupDate = '$fDate' WHERE studentID = $idstu";
     if (mysqli_query($conn, $sql2)){
       echo "<script> alert('Update Successful'); </script>";
       echo '<meta http-equiv="refresh" content="0">';
     }


}

  ?>
  <style>
html, body, h1, h2, h3, h4, h5 {font-family: "Open Sans", sans-serif}
</style>
<body style="background: url(images/bluebackground.jpg); background-size:cover; background-repeat: no-repeat;"
<div>
  <div class="w3-button w3-left w3-round w3-light-gray">
<a href="profile.php?display=<?php echo $idstu; ?>"><<< Go Back</a>
</div>
  <div class="w3-container" style="width:900px; margin-left:500px">

      <h5 style="color:white; text-align: center">Add Interation form</h5>
        <form method="POST">
      <div class="w3-card w3-round w3-light-gray w3-padding-large w3-padding-32">
        <div class="w3-container w3-red -w3-border w3-round" style="opacity: 0.9">
        <h4 class="w3-center" style= "font-size: 40px"><?php echo $name;?></h4>
      </div>
        <hr>
        <div class="w3-row" style ="height: 200px">
        <div class="w3-col m3">
         <p> Activity: </p>
         <div class="form-group">
         <?php
         $sql="SELECT activityName FROM activities";
         $result = mysqli_query($conn, $sql);
         $datas = array();
         if (mysqli_num_rows($result) >0){
           while($row = mysqli_fetch_array($result)){
             $datas[] = $row['activityName'];
           }
         }

         echo " <select name='Activity' id='activity'>";
         echo "<option value=''>Select</option>";

         foreach($datas as $row2) {

           echo "<option value='$row2'>$row2</option>";
         }
            echo "</select>";

          ?>
        </div>
        	<div class="form-group">
              <label></label>
              <p class=" w3-margin-right w3-text-theme"> Current Date :
              <input type="date" name="date" class="form-control">
              </p>
          </div>
              <div class="form-group">
                <p class=" w3-margin-right w3-text-theme"> Set Follow-Up Date:
                <input type="date" name="followupDate" class="form-control" value ="<?php echo $Followup; ?>">
                </p>
            </div>
        </div>

        <div class="w3-col m7">
          	<div class="form-group">
          <label>Comments: </label>
        </p>
          <textarea name="comment" placeholder="Enter comment Notes..."style="height: 180px; resize: none; width: 500px; overflow:auto"><?php echo $comment; ?></textarea>
        </div>
        </div>
        <div class="w3-right">
         <input type="submit" class="w3-btn w3-red" name="submit" value="Submit" />
         <p>
           <div>
           <a href="interaction_delete.php?delete=<?php echo $id; ?>"
             onclick="return confirm('Are You Sure ?');"> Delete</a>
           </div>
       </div>
      </div>
    </div>
  </form>
  </div>
