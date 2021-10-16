global i;

<?php   
include_once 'connection.php';
$ud =$_POST['InputName'];
$td =$_POST['InputText'];

$tm = $_SERVER['REQUEST_DATE'];


$sql = "INSERT INTO `users` (`uid`,`username`,`usertext`) VALUES ('16','$ud', '$td');";
mysqli_query($conn, $sql);
echo ("success!...");
header("Location: ./index.php")
?>