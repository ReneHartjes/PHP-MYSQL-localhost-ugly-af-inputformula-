
    <?php


        $un =  $_POST['InputName'];
        $pw = $_POST['InputText'];
        include_once('./connection.php');
        $sql = "SELECT * FROM admin where username = '$un' && password = '$pw'";
        $results = mysqli_query($conn, $sql);
        $rescheck = mysqli_num_rows($results);
        
        if ($rescheck >0  ){
            while($row = mysqli_fetch_assoc($results)){
                $un =  $row['username'];
                $hv =  $row['password'];

                echo("<h4 class='names'> willkommen Meister $un </h4>");
                header('Location: ./index.php');
            
            }
            
            } else {

                    echo("falsches password");
                    echo("falsches password");
                    echo("falsches password");
                    echo("falsches password");
                    echo("falsches password");
                    echo("falsches password");
                    echo("falsches password");
                    echo("falsches password");
                    echo("falsches password");
                    echo("falsches password");
                    echo("falsches password");
                    echo("falsches password");
                    echo("falsches password");
                    echo("falsches password");
                    echo("falsches password");
                    sleep(2) ;
                    header('Location: ./login.html');
                    
        
                }
            
            
            



    ?>
