<?php

class Quoties {

  public $id;
  public $quote;

  public function __construct($id, $quote){

    $this -> id = $id;
    $this -> quote = $quote;
  }

}

?>





<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <link href="./main.css" rel="stylesheet" type="text/css" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
  </head>
  <body>
    <div class="maincontainer">
      <div class="header">
        <div class="navbar">
          <ul>
            <li><a href="#">Home</a></li>
            <li>
              <a href="#">Projects</a>
              <ul>
                <li><a href="#">Graphics</a></li>
                <li><a href="#">WebDev</a></li>
                <li><a href="#">Robotics</a></li>
              </ul>
            </li>
            <li><a href="#">About</a></li>
            <li><a href="#">Guestbook</a></li>
          </ul>
        </div>
        <img src="../images/images/beachbg.jpg" />
      </div>

      <!------------------------>

      <div class="secondsection">
        <div class="secondwrapper">
          <div class="leftside">
            <div class="imgside">
              <img src="../images/images/gears.jpg" style="width: 150px" />
              <p>Dies ist ein img</p>
            </div>
            <div class="txtside">
              <h4>Imgheadline</h4>
              <p>
                Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                Magnam, quibusdam hic . Minima optio a nesciunt soluta esse.
                Voluptatem eaque quidem non obcaecati quae distinctio cum atque,
                recusandae aperiam vitae unde?
              </p>
            </div>
          </div>

          <div class="rightside">
            <div class="imgside">
              <img src="../images/images/gears.jpg" style="width: 150px" />
              <p>Dies ist ein img</p>
            </div>
            <div class="txtside">
              <h4>Imgheadline</h4>
              <p>
                Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                Magnam, quibusdam hic . Minima optio a nesciunt soluta esse.
                Voluptatem eaque quidem non obcaecati quae distinctio cum atque,
                recusandae aperiam vitae unde?
              </p>
            </div>
          </div>
        </div>
      </div>

      <!------------------------nextSection-------->

      <div class="services">
        <div class="servicecontainer">
          <div class="service1">
            <img src="../images/images/icoms/sshrt1.png" style="width: 150px" />
          </div>

          <div class="service2">
            <img src="../images/images/icoms/rbfin.png" style="width: 150px" />
          </div>
          <div class="service3">
            <img
              src="../images/images/icoms/Teepublic.png"
              style="width: 150px"
            />
          </div>
        </div>
      </div>

      <div class="clickerwrap">
        <div class="clickercontainer">

            
        <div class="ipform">
          <form action ="Mainpage.php" method="post">  

              <input name="idinput" type="text"/>
              <input type ="submit" name ="submitid" />


          </form>
        
        </div>




          <form action="formy.php" method="post">
            <?php
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "newdb";
            
            // Create connection
            $conn = mysqli_connect($servername, $username, $password, $dbname);
            $id=0;
            $id = $_POST['idinput'];
            echo($id);
            // Check connection
            if (!$conn) {
              die("Connection failed: " . mysqli_connect_error());
            }
            
            $sql = "SELECT * FROM quotes where id = '$id' or id=2 ";
            $result = mysqli_query($conn, $sql);
            $arr = array();

            if (mysqli_num_rows($result) > 0) {
              // output data of each row
              while($row = mysqli_fetch_assoc($result)) {
                $blob = [$row["id"],$row["Quote"]];
                $arr[] = $row;
                
                
                
                
              }
              echo("done");
             
              foreach($arr as $arrdata){
                $ping = $arrdata['id'];
                $pong = $arrdata['Quote'];
                echo "<div class='thisclass'> <p id='pingid'> $ping </p><p id='pongid'>$pong</p></div>"; 
              }
              
            } else {
              echo "0 results";
            }
            
            mysqli_close($conn);
            ?>
          </form>

        </div>
      </div>
    </div>
  </body>
</html>
