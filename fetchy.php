<?php   




include_once 'connection.php';
$sql = "SELECT * FROM users;";
$results = mysqli_query($conn, $sql);
$rescheck = mysqli_num_rows($results);

if ($rescheck >0  ){
    while($row = mysqli_fetch_assoc($results)){
        echo $row['messages'];

    };
}




?>