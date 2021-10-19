<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link href="styler.css" rel="stylesheet" type="text/css" />
  </head>
  <body>
    <div id="empty"></div>



<?php   
        include_once 'conner.php';
        $sql = "SELECT * FROM todos;";
        $results = mysqli_query($conn, $sql);
        $rescheck = mysqli_num_rows($results);
        $result_array = array();

        if ($rescheck >0  ){
            while($row = mysqli_fetch_assoc($results)){
                
              $result_array[] = $row;

              
            };
            
        }
  
      ?>

<script>
      const cl = document.createElement("div");
      cl.classList.add("clclass");
      var bla = <?php echo json_encode($result_array); ?>;
        console.log(bla)
      const bt = document.createElement("button");
      bt.setAttribute("id", "bt1");
      bt.innerHTML = "Button";
      bt.addEventListener("click", () => console.log("lo"));
      const blob = document.getElementById("empty");
      console.log(bt);
      console.log(cl);
      cl.style = "font-size:25px;";
      cl.append(bt);
      blob.append(cl);


    for (let i = 0; i < bla.length; i++) {
      const ele1 = bla[i].id;
      const ele2 = bla[i].todo;

      console.log(ele1 + " " + ele2)
      const final = document.getElementById("empty")
      const emptydiv = document.createElement("div")
      emptydiv.style="display:flex; justify-content: center; border:1px solid black; "
      const blo = document.createElement("p")
      blo.style= "color:blue; font-size:24px;"
      blo.innerHTML = `${ele1} hat zu sagen ${ele2}!`
      emptydiv.setAttribute("id","divvy");
      
      emptydiv.append(blo)
      final.append(emptydiv)
 
      
    }
    </script>

</body>
</html>
