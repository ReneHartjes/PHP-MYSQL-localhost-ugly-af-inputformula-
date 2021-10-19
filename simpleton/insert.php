<?php   
include_once 'conner.php';
$ud =$_POST['texty'];





$sql = "INSERT INTO `todos` (`todo`) VALUES ('$ud');";
mysqli_query($conn, $sql);
echo ("success!...");
header("Location: ./todo.php")
?>