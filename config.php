<?php
 $servername = "localhost";
 $username = "root";
 $password = "";
 $db ="hotel";
 //create connection
 $conn = new mysqli($servername, $username, $password, $db);

 // check connection
 if($conn->connect_error){
 die ("connection failed :". $conn->connct_error);   
 }
 echo "Connected successfully";
 
 


?>