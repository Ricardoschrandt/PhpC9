<?php

     $server = "sql209.epizy.com	";
     $username = "epiz_28698755";
     $password  = "9PjkInMia4oj";
     $dbname = "epiz_28698755_Cohort9php";

     $conn = mysqli_connect($server, $username, $password, $dbname);

     if(!$conn){
         die("connection failed:".mysqli_connect_error());
     }

     ?>