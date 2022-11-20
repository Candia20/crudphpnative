<?php 

require_once('../function/connection.php');
require_once('../function/helper.php');

$id = $_GET['id'];

mysqli_query($conn, "DELETE FROM todolist WHERE id = '$id' ");
header("location: " . BASE_URL . 'dashboard.php?page=home&status=success');

?>