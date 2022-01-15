<?php 

   $dbhost = 'localhost';
   $dbuser = 'root';
   $dbpass = '';
   $database = 'test_db';
   $conn = mysqli_connect($dbhost, $dbuser, $dbpass,$database);
   
   if(! $conn ) {
      die('Could not connect: ' . mysqli_error());
   }
   
?>