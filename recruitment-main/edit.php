<?php
require 'db.php';
require_once 'edit_student_form.php';

  $id = (INT)$_GET['searched'];

$sql = "SELECT * FROM students WHERE studentID = '$id'";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) == 0) {
    echo "Error Student Not Found";
  }

  $row = mysqli_fetch_assoc($result);
  $id = $row['studentID'];
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

  if (isset($_POST['upd'])) {
    $id = $_POST['id'];
    $phone = mysqli_real_escape_string($conn, $_POST['phone']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $fname = mysqli_real_escape_string($conn, $_POST['firstname']);
    $lname = mysqli_real_escape_string($conn, $_POST['lastname']);
    $jnum = mysqli_real_escape_string($conn, $_POST['jnum']);
    $gpa = mysqli_real_escape_string($conn, $_POST['gpa']);
    $major = mysqli_real_escape_string($conn, $_POST['major']);
    $school = mysqli_real_escape_string($conn, $_POST['school']);
    $status = mysqli_real_escape_string($conn, $_POST['Status']);
    $term = mysqli_real_escape_string($conn, $_POST['term']);
    $house = mysqli_real_escape_string($conn, $_POST['house']);
    $street = mysqli_real_escape_string($conn, $_POST['street']);
    $streetType = mysqli_real_escape_string($conn, $_POST['streetType']);
    $city = mysqli_real_escape_string($conn, $_POST['city']);
    $state = mysqli_real_escape_string($conn, $_POST['State']);
    $zip = mysqli_real_escape_string($conn, $_POST['zip']);
    $bday = mysqli_real_escape_string($conn, $_POST['bday']);
    $Birthdate = date("Y-m-d",strtotime($bday));
    $followup = mysqli_real_escape_string($conn, $_POST['followup']);
    $FollowDate = date("Y-m-d",strtotime($followup));
    $active = $_POST['Active'];
    $domestic = mysqli_real_escape_string($conn, $_POST['Area']);

    $sql2 = "UPDATE students SET phoneNum = '$phone', email = '$email', firstName = '$fname', lastName = '$lname',jagNum  = '$jnum', GPA = '$gpa',major  = '$major', school = '$school',status  = '$status', term = '$term',houseNumber  = '$house',
    streetName = 'street', streetType = '$streetType', city = '$city', state = '$state', zip = '$zip', birthdate = '$Birthdate', followupDate = '$FollowDate', active = '$active', domestic = '$domestic' WHERE studentID = $id";
   if (mysqli_query($conn, $sql2)) {
        echo "<script> alert('Update Successful'); </script>";
        echo '<meta http-equiv="refresh" content="0">';
     } else {
          echo "failed to edit." . mysqli_connect_error();
        }
}
  ?>

  <div class="main w3-container" style="max-width:900px;margin-left:500px;">

    <div class="w3-card-4 w3-white">
      <div class="w3-container w3-red">
            <h2 style="text-align:center">Edit <?php echo $fname; ?></h2>
        </div>
     <form action="" method="POST" class="w3-container">
         <input type="hidden" name="id" value="<?php echo $id; ?>">
         <p>
             <label style="text-align:left"><b>First Name</b></label>
             <input type="text" pattern="^[a-zA-Z]+" class="w3-input w3-border" name="firstname" value="<?php echo $fname; ?>" require>
         <p>
           <p>
               <label style="text-align:left"><b>Last Name</b></label>
               <input type="text" class="w3-input w3-border" name="lastname" pattern="^[a-zA-Z]+" value="<?php echo $lname; ?>" require>
           <p>
         <p>
             <label style="text-align:left"><b>Email</b></label>
             <input type="email" class="w3-input w3-border" name="email" value="<?php echo $email; ?>" require>
         </p>
         <p>
             <label style="text-align:left"><b>Phone</b></label>
             <input type="tel" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" placeholder="123-456-7890" class="w3-input w3-border" name="phone" value="<?php echo $phone; ?>" required>
         <p>
           <p>
               <label style="text-align:left"><b>Jagnumber</b></label>
               <input type="text" class="w3-input w3-border" name="jnum" value="<?php echo $jnum; ?>" require>
           <p>
         <p>
             <label style="text-align:left"><b>GPA</b></label>
             <input type="text" class="w3-input w3-border" name="gpa" value="<?php echo $gpa; ?>" >
         <p>
         <p>
             <label style="text-align:left"><b>Major</b></label>
             <input type="text" class="w3-input w3-border" name="major" value="<?php echo $major; ?>" require>
         <p>
         <p>
             <label style="text-align:left"><b>School</b></label>
             <input type="text" class="w3-input w3-border" name="school" value="<?php echo $school; ?>" require>
         <p>
         <p>
             <label style="text-align:left"><b>Status</b></label>
             <select name="Status" id="status">
             <option value = "Active">Active</option>
             <option value = "Applied">Applied</option>
             <option value = "Inactive">Inactive</option>
             <option value = "Not Intrested">Not Intrested</option>
           </select>
         <p>
         <p>
             <label style="text-align:left"><b>Term</b></label>
             <input type="text" class="w3-input w3-border" name="term" value="<?php echo $term; ?>" require>
         <p>
         <p>
             <label style="text-align:left"><b>Address Number</b></label>
             <input type="text" class="w3-input w3-border" name="house" value="<?php echo $house; ?>" require>
         <p>
           <p>
               <label style="text-align:left"><b>Street</b></label>
               <input type="text" class="w3-input w3-border" name="street" value="<?php echo $street; ?>" require>
           <p>
         <p>
             <label style="text-align:left"><b>Street Type</b></label>
             <input type="text" class="w3-input w3-border" name="streetType" value="<?php echo $streetType; ?>" require>
         <p>
         <p>
             <label style="text-align:left"><b>City</b></label>
             <input type="text" class="w3-input w3-border" name="city" value="<?php echo $city; ?>" require>
         <p>
         <p>
             <label style="text-align:left"><b>State</b></label>
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
         <p>
             <label style="text-align:left"><b>Zip</b></label>
             <input type="text" class="w3-input w3-border" name="zip" value="<?php echo $zip; ?>" require>
         <p>
         <p>
             <label style="text-align:left"><b>Date of Birth</b></label>
             <input type="date" name="bday" class="form-control" value="<?php echo $bday; ?>" require>
         <p>
         <p>
             <label style="text-align:left"><b>Follow-up</b></label>
             <input type="date" name="followup" class="form-control" value="<?php echo $followup; ?>" require>
         <p>
         <p>
              <label style="text-align:left" for="Active"><b>Active: </b></label></p>
             <input id="Active" type="radio" name="Active" value="yes" required /> Yes
             <input id="Active" type="radio" name="Active" value="no" /> No
         <p>
         <p>
             <label style="text-align:left"><b>Country Area</b></label>
             <select name="Area" id="area">
             <option value = "Domestic Student">Domestic</option>
             <option value = "International Student">International</option>
           </select>
         <p>
         <p>
             <input type="submit" class="w3-btn w3-red w3-round" name="upd" value="Save edit">
         </p>
       </div>
    </div>
  </form>
