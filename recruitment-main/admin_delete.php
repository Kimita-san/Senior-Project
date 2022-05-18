<!-- this works -->
<?php
require_once 'database.php';
require_once 'db.php';

if (isset($_GET['admin_delete'])) {
    $id = mysqli_real_escape_string($conn, (int) $_GET['admin_delete']);
    $sql = "DELETE FROM users WHERE userID = '$id'";
    $result = mysqli_query($conn, $sql);

    if ($result) {
        header('location: view_users_form.php');
    } else {
        echo "Failed to delete." . mysqli_connect_error();
    }
}
mysqli_close($conn);
