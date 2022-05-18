<?php
require 'db.php';
$SESSION = [];
session_unset();
session_destroy();
header("Location: login.php");
 ?>
