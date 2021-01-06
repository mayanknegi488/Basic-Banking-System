<?php

 $servername = "localhost";
 $username = "root";
 $password = "";
 $dbname = "internship";

 $conn = mysqli_connect($servername,$username,$password,$dbname);

 if(!$conn){
     die("Couldn't connect to the database due to -->".mysqli_connect_error());
 }
   
?>