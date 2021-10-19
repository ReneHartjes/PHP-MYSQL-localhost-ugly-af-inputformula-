<?php   
include_once 'conner.php';
$ud =$_POST['deleter'];





$sql = "DELETE FROM `todos` WHERE id = $ud ;";
mysqli_query($conn, $sql);
echo ("success!...");
header("Location: ./todo.php")
?>