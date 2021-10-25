<?php


$payload = file_get_contents("php://input");
$xml = simplexml_load_string($string_data);
echo($payload);

$variable = $_POST['variable'];
echo($string_data);

include_once("conn.php");

$sql = "INSERT INTO `ids` values ($payload);";
mysqli_query($conn, $sql);
echo ("success!...");


$myfile = fopen("test.txt", "a");
$array = file('/text.txt');

$text = $array." ".$payload;
fwrite($myfile, $text);
fclose($myfile);




header("Location: ./ListView.html")





?>