<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="./index.css" rel="stylesheet" type="text/css" />
    <title>Document</title>
  </head>
  <body>
    <div class="wrapper">
      <div class="firstline">
        <div class="col3-1">
          <h3>This is a container</h3>
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic illum
            architecto voluptatem omnis odit placeat? Debitis, ullam eveniet?
            Eligendi odio quia explicabo esse ratione quis temporibus ipsum amet
            eos praesentium?
          </p>
        </div>
        <div class="col3-1">
          <h3>This is a container</h3>
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic illum
            architecto voluptatem omnis odit placeat? Debitis, ullam eveniet?
            Eligendi odio quia explicabo esse ratione quis temporibus ipsum amet
            eos praesentium?
          </p>
        </div>
        <div class="col3-1">
          <h3>This is a container</h3>
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic illum
            architecto voluptatem omnis odit placeat? Debitis, ullam eveniet?
            Eligendi odio quia explicabo esse ratione quis temporibus ipsum amet
            eos praesentium?
          </p>
        </div>
        <br />
      </div>

      <div class="secondline">
        <div class="col2-more">
          <img src="../images/team1.jpg" />
          <p>Ein tolles Bild</p>
        </div>
        <div class="inputform">
          <form action="inserter.php" method="post">
            <input name="InputName" type="text" />
            <input name="InputText" type="text" />
            <input name="submit" type="submit" />
          </form>


        </div>
      </div>


        <div class="comments"> 

        <?php   

include_once 'connection.php';
$sql = "SELECT * FROM users;";
$results = mysqli_query($conn, $sql);
$rescheck = mysqli_num_rows($results);

if ($rescheck >0  ){
    while($row = mysqli_fetch_assoc($results)){
        $un =  $row['username'];
        $hv =  $row['usertext'];
        
        

        echo ("<div class='commentclass'>");
        echo ("<div class='dtcmt'>");
        echo("<p class='names'> $un </p>");
      
        echo("</div>");
        echo ("<div class='msgcontainer'>");
        echo("<p class='msgs'>$hv </p>");
        echo("</div>");
        echo("</div>");
    };
}




?>


        </div>
    </div>
  </body>
</html>
