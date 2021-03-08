<?php

     $dbServer = "localhost";
     $dbUser   = "root";
     $dbPass   = "zindexallowcoding";
     $dbName   = "ecom_plaform";

     $conn = mysqli_connect($dbServer, $dbUser, $dbPass, $dbName);
     if(!$conn){
          echo "Connection Failed";
     }
?>