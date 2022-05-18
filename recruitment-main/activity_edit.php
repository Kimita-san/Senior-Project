<?php
require_once 'edit_activity_form.php';

  $id = (INT)$_GET['searched'];

$sql = "SELECT * FROM activities WHERE activityID = '$id'";
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

  if (isset($_POST['upd'])) {
    $id = $_POST['id'];
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $desc = mysqli_real_escape_string($conn, $_POST['description']);
    $date = mysqli_real_escape_string($conn, $_POST['date']);
    $comment = mysqli_real_escape_string($conn, $_POST['comment']);


    $sql2 = "UPDATE activities SET activityName = '$name', activityDesc = '$desc', activityDate = '$date', comment = '$comment' WHERE activityID = $id";
   if (mysqli_query($conn, $sql2)) {
          echo "<script> alert('Update Successful'); </script>";
         echo '<meta http-equiv="refresh" content="0">';
     } else {
          echo "failed to edit." . mysqli_connect_error();
        }
}
  ?>

  <div class="w3-main  w3-round" style="left= auto; margin-left:180px; width:50%; height:680px; overflow: auto">
  <div class="w3-container">
    <div style="height:50px">

    </div>
    <div class="w3-card-4 w3-white">
      <div class="w3-container w3-red">
            <h2>Edit <?php echo $name; ?></h2>
        </div>
     <form action="" method="POST" class="w3-container">
         <input type="hidden" name="id" value="<?php echo $id; ?>">
         <p>
             <label><b>Name</b></label>
             <input type="text" class="w3-input w3-border" name="name" value="<?php echo $name; ?>">
         <p>
           <p>
               <label><b>Description</b></label>
               <input type="text" class="w3-input w3-border" name="description" value="<?php echo $desc; ?>">
           <p>
         <p>
             <label><b>Date</b></label>
             <input type="date" class="w3-input w3-border" name="date" value="<?php echo $date; ?>">
         </p>
         <p>
             <label><b>Comments: </b></label>
             <p>

             </p>
             <textarea name="comment" placeholder="Enter comment Notes..."style="height: 180px; resize: none; width: 500px; overflow:auto"><?php echo $comment; ?></textarea>

         <p>
         <p>
             <input type="submit" class="w3-btn w3-red w3-round" name="upd" value="Save edit">
         </p>
		 </form>
       </div>
      </div>
    </div>
