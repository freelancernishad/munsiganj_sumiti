<?php
include 'config.php';
   
   if(isset($_GET['database'])){
   $sql = "DROP DATABASE $database";
   $retval = mysqli_query($conn,$sql );
   
   if(! $retval ) {
      die('Could not delete database db_test: ' . mysqli_error());
   }
   
   echo "Database deleted successfully\n";
   
   mysqli_close($conn);
   
   }else if(isset($_POST['table'])){
	  
	  $tableName = $_POST["tableName"];
	   




$delete= mysqli_query($conn,"DROP TABLE $tableName");

if($delete !== FALSE)
{
   echo("This table has been deleted.");
}else{
   echo("This table has not been deleted.");
}

 
   }
?>