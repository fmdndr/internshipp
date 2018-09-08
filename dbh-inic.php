<?php 
        $servername="localhost";
        $username ="gepettox";
        $password="f=mx+d123";
        $dbname="Building";
        $conn =  mysqli_connect($servername,$username,$password,$dbname);
        
        if($conn == false ){
          echo $conn->error;
        }

?>