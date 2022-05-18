<?php
require_once 'database.php';
require_once 'db.php';

if (isset($_GET['delete'])) {
    $id = mysqli_real_escape_string($conn, (int) $_GET['delete']);
    $sql = "DELETE FROM students WHERE studentID = '$id'";
    $result = mysqli_query($conn, $sql);

    if ($result) {
        header('location: view_student_form.php');
    } else {
        echo "Failed to delete." . mysqli_connect_error();
    }
}
mysqli_close($conn);
