
<?php

require 'database.php';
require_once 'header.php';

$query = 'SELECT * FROM activities ORDER BY activityDate';

try{
	$statement = $db->prepare($query);

$statement->execute();

$activities = $statement->fetchAll();

$statement->closeCursor();
} catch (Exception $e) {
	$error_message->getMessage();
	echo "Error Message " . $error_message;
}
?>

<html>
<body style="background: url(images/events7.jpg); background-size:cover; background-repeat: no-repeat;">
	<head>
	<style>
	.flex-container {
		display: flex;
		flex-wrap: nowrap;
	}
	* {
  box-sizing: border-box;
}

	 #myInput {
	  background-position: 10px 12px; /* Position the search icon */
	  background-repeat: no-repeat; /* Do not repeat the icon image */
	  width: 100%; /* Full-width */
	  font-size: 16px; /* Increase font-size */
	  padding: 12px 20px 12px 40px; /* Add some padding */
	  border: 1px solid #ddd; /* Add a grey border */
	  margin-bottom: 12px; /* Add some space below the input */
	}

	#myTable {
	  border-collapse: collapse; /* Collapse borders */
	  width: 100%; /* Full-width */
	  border: 1px solid #ddd; /* Add a grey border */
	  font-size: 18px; /* Increase font-size */

	}

	#myTable th, #myTable td {
	  text-align: left; /* Left-align text */
	  padding: 12px; /* Add padding */
	}

	#myTable tr {
	  /* Add a bottom border to all table rows */
	  border-bottom: 1px solid #ddd;
		background-color: white;
		opacity: 0.9;
	}

	#myTable tr.header {
	  /* Add a grey background color to the table header and on hover */
	  background-color: #204881 ;
		color: white;
	}

	</style>
	<script>

	</script>
		<title> Recruitment DB</title>

	</head>

		<div class="w3-cmain w3-border w3-round" style="overflow: auto">


	<body>
		<div class="w3 container w3-white" style="opacity:0.9">
		<h2 style ="text-align: center"><strong>Activities</strong></h2>
		<form action="add_activities_form.php">
			<button class="btn"><i class="fa fa-plus"></i></button><p2> Add Activity <p2>
		</form>

		<!--display student table-->
		<input type ="text" id= "myInput" onkeyup="myFunction()" placeholder ="Search Activity Name...">
</div>
		<table id= "myTable">
			<tr class ="header">
					<th>Options</th>
					<th>Name</th>
					<th>Description</th>
					<th>Date</th>
					<th>Comments</th>
				</tr>
				<!--query the DB and return info into an array with fetch all-->
				<!--loop thru array which is the result of query and display students-->
				<?php foreach ($activities as $activity) :?>
				<tr>
					<td>
						<div class="flex-container">

						<form name="profile" id="profile" action="activity_profile.php">
							<input type='hidden' id = 'profile' name='display' value=<?php echo$activity['activityID']; ?>/>
							<button class="btn"><i class="fa fa-eye"></i></button>
						</form>
						<form action="activity_edit.php" method="GET">
							<input type='hidden' id = 'searched' name='searched' value=<?php echo$activity['activityID']; ?> >
							<button class="btn"><i class="fa fa-edit"></i></button>
						</form>
						<div class= "w3-container w3-round w3-light-gray" style= "border-style:solid; border-color: black; border-width: 2px">
					<a href="activity_delete.php?delete=<?php echo$activity['activityID']; ?>"
						onclick="return confirm('Are You Sure ?'); "><i class="fa fa-trash-o"></i></a>
					</div>
					</div>
				</td>
					<td><?php echo $activity['activityName']; ?></td>
					<td><?php echo $activity['activityDesc']; ?></td>
					<td><?php echo $activity['activityDate']; ?></td>
					<td><?php echo $activity['comment']; ?></td>
				</tr>
				<?php endforeach; ?>
		</table>
		<script>
function myFunction() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[1];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }
  }
}
</script>
		</body>
	</div>
</div>
	</html>
