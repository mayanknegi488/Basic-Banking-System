<?php

 $servername = "localhost";
 $username = "id15850234_root";
 $password = "MayankNegi@2001";
 $dbname = "id15850234_internship";

 $conn = mysqli_connect($servername,$username,$password,$dbname);

 if(!$conn){
     die("Couldn't connect to the database due to -->".mysqli_connect_error());
 }
   
?>
