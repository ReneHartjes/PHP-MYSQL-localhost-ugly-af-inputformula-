<!DOCTYPE html>
<html lang="en">
  <head>





    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script>
      src = "https://code.jquery.com/jquery-3.6.0.min.js";
      integrity = "sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=";
      crossorigin = "anonymous";
    </script>
    <style rel="stylesheet" href="styler.css"></style>
    <title>Document</title>



    <script>

$(document).ready(function(){

$('#buttonnn').click(blub);


function blub(){
        console.log(myvar)
        bt +=1
        $('#lassa').text(myvar[3]) 

      }
});


      </script>

  </head>
  <body>
    <form action="insert.php" method="POST">
      <textarea name="texty" placeholder="...texty"> </textarea>
      <input type="submit" name="submit" id="submit"/>
    </form>

    <div>

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
 <div id="sthdiv">
   
 
 <p id="lassa">123</p> 

<button id="buttonnn"> </button>


</div>


    </div>
<script>


  var myvar = <?php echo json_encode($result_array); ?>;
  console.log(myvar)
  document.getElementById('buttonnn').addEventListener('click', renderer)

function renderer(){
  for (let i = 0; i < myvar.length; i++) {
    const blob = document.getElementById("sthdiv");
    const per = document.createElement('p');
    const divver = document.createElement('div')
    
    per.innerText = `yees : ${myvar[i].todo}`;
    divver.append(per);
    
    blob.append(divver);
   


    
    
  }}
  


</script>
        
 <div class = "deletus"> 

  <form action="deletus.php" method ="POST">

  <input type ="text" placeholder="..typy" name ="deleter"/>
  <input name ="sumbitter" type ="submit"/>

</form>





 </div>


  </body>
</html>
