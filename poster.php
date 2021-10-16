<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php




        include_once 'connection.php';




       
        echo("hrroo");
        include_once 'connection.php';
        $pop = 'Rattenjunge';
        $sql = "SELECT * FROM users where username='$pop';";
        $results = mysqli_query($conn, $sql);
        $rescheck = mysqli_num_rows($results);
        
        if ($rescheck >0  ){
            while($row = mysqli_fetch_assoc($results)){
                $un =  $row['username'];
                $hv =  $row['usertext'];
                
                echo("<div class='commentclasswrapper'>");
                
                echo("<div class='commentclass'>");
                echo("<h4 class='names'> $un </h4>");
                echo("<p></p>");
                echo("<p class='msgs'>$hv </p>");
                echo("</div>");
               
                
                echo("</div>");
              
               
            };
        }

    ?>

    <div class="nuut">
        

    </div>
</body>
</html>