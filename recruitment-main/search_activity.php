<?php
require_once 'edit_activity_form.php';
?>
<html>
<div class="w3-cmain" style="margin-left:800px; height:900px;0verflow:auto">
<?php
if (isset($_GET['a'])) {
    $q = mysqli_real_escape_string($conn, $_GET['a']);

    $sql = "SELECT * FROM activities WHERE activityName LIKE '%{$q}%'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) < 1) {
        echo "Nothing found.";
      } else {
   while ($row = mysqli_fetch_assoc($result)) {
       $ID = htmlentities($row['activityID']);
    $date = htmlentities($row['activityDate']);
    $desc = htmlentities($row['activityDesc']);
  $Name = htmlentities($row['activityName']);

        echo '<form action = "activity_edit.php" method="GET" class"w3-container w3-right"> ';

        echo '<div class="w3-panel w3-round-xlarge w3-theme-l4 w3-card-4" style="width: 100%; overflow:auto">';
        echo'<header class ="w3-containter w3-theme-d1">';
        echo "<h1 style='text-align: center'>$Name</h1>";
        echo'</header>';
        echo'<div class="w3-container w3-light-grey">';
        echo"<p><strong>Description: </strong></p>";
        echo"<p style = 'margin-left:100px'>$desc </p>";
        echo"<p><strong>Date: </strong>$date</p>";
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
