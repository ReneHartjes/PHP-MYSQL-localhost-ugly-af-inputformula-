<!DOCTYPE html>


<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <script
  src="https://code.jquery.com/jquery-3.6.0.min.js"
  integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
  crossorigin="anonymous"></script>
    <style rel="stylesheet" href="styler.css"></style>
  </head>
  <body>
    <button id="clicker">CLIICKKS</button>
   
    <p> id: <h3 id="headerer">BLABLABLA</h3> </p>
    
    <script>
      
      $(document).ready(function(){

      $('#clicker').click(blub);
        

        var xhr = new XMLHttpRequest();
        xhr.open('GET','ajax_info.txt',true);
        xhr.onload= function(){

          if(xhr.status == 200){
            console.log(this.responseText);}
          }
          xhr.send();
        
      
      let bt = 0;


      function blub(){
        console.log("ya")
        bt +=1
        $('#headerer').text(bt)


       
        

      }

      });
     




    </script>
    



  </body>
</html>
