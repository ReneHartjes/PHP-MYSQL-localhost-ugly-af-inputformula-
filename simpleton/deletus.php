<?php   
include_once 'conner.php';
$ud =$_POST['idname'];

$payload = file_get_contents("php://input");

var_dump($payload);





$sql = "DELETE FROM `todos` WHERE id = $payload ;";
mysqli_query($conn, $sql);
echo ("success!...");
header("Location: ./todo.php")
?>