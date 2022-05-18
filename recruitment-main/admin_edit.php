<!--this dosen't work-->
<?php
require_once 'edit_admin_form.php';

  $id = (INT)$_GET['searched'];

  if(!empty($_SESSION["id"])){
    $admin = $_SESSION["id"];
    $result2 = mysqli_query($conn, "SELECT * FROM users WHERE userID =$admin");
    $row2 = mysqli_fetch_assoc($result2);
    $access = $row2['privledgedRights'];
  }

$sql = "SELECT * FROM users WHERE userID = '$id'";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) == 0) {
    echo "Error Student Not Found";
  }

  $row = mysqli_fetch_assoc($result);
  $id = $row['userID'];
  $username = $row['username'];
  $password = $row['password'];
  $email = $row['email'];
  $privledgedRights = $row['privledgedRights'];
  $jnum = $row['jnum'];
  $firstName = $row['firstName'];
  $lastName = $row['lastName'];


  if (isset($_POST['upd'])) {
    $id = $_POST['id'];
    $firstName = mysqli_real_escape_string($conn, $_POST['firstName']);
    $lastName = mysqli_real_escape_string($conn, $_POST['lastName']);
    $jnum = mysqli_real_escape_string($conn, $_POST['jnum']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);


    $sql2 = "UPDATE users SET username = '$username', password = '$password', email = '$email', firstName = '$firstName', lastName = '$lastName', jnum  = '$jnum', privledgedRights = '$privledgedRights'  WHERE userID = $id";
   if (mysqli_query($conn, $sql2)) {
        echo "<script> alert('Update Successful'); </script>";
        echo '<meta http-equiv="refresh" content="0">';
     } else {
          echo "failed to edit." . mysqli_connect_error();
        }
}
  ?>
  <div style="height: 50px">

  </div>

  <div class="w3-main w3-round" style="margin-left:600px; height:700px; width: 700px; overflow: auto">
  <div class="w3-container">
    <div class="w3-card-4 w3-white">
      <div class="w3-container w3-red">
            <h2>Edit <?php echo $firstName; ?></h2>
        </div>
     <form action="" method="POST" class="w3-container">
         <input type="hidden" name="id" value="<?php echo $id; ?>"
         <p>
             <label style="text-align:left"><b>First Name</b></label>
             <input type="text" class="w3-input w3-border" name="firstName" value="<?php echo $firstName; ?>">
         <p>
           <p>
               <label style="text-align:left"><b>Last Name</b></label>
               <input type="text" class="w3-input w3-border" name="lastName" value="<?php echo $lastName; ?>">
           <p>
         <p>
           <p>
             <label style="text-align:left"><b>Username</b></label>
             <input type="text" class="w3-input w3-border" name="username" value="<?php echo $username; ?>">
           <p>
         <p>
           <p>
             <label style="text-align:left"><b>Password</b></label>
             <input type="text" class="w3-input w3-border" name="password" value="<?php echo $password;?>">
           <p>
         <p>
           <p>
             <label style="text-align:left"><b>Email</b></label>
             <input type="email" class="w3-input w3-border" name="email" value="<?php echo $email; ?>">
           <p>
         <p>
           <p>
               <label style="text-align:left"><b>Jagnumber</b></label>
               <input type="text" class="w3-input w3-border" name="jnum" value="<?php echo $jnum; ?>">
           <p>
         <p>
           <?php if ($access =="yes"): ?>
             <div class="form-group">
                         <label style="text-align:left" for="Admin"><b>Admin?: </b></label>
                              <input id="Admin" type="radio" name="Admin" value="yes" required /> Yes
                              <input id="Admin" type="radio" name="Admin" value="no" /> No
                            </div>

                       <?php endif ?>
                       <p>
                         <p>
                           <div style ="height:10px">

                           </div>
             </div>
         <p>
              <p>
                       <input type="submit" class="w3-btn w3-red w3-round" name="upd" value="Save edit">
         </p>
       </div>
      </div>
    </div>
  </form>
