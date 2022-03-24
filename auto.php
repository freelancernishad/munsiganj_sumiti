<?php 
include 'config.php';

$sql = $conn->query("SELECT * FROM `committees` WHERE `status`='active'");

while($row = $sql->fetch_object()){
	
	
	
	
	  $session_end = $row->session_end;
	  $curentyear = date('Y');
	  if($session_end<$curentyear){
		 echo "session expired : ".$row->session_start;
		 
	$id = $row->id;
	$conn->query("UPDATE `committees` SET `status` = 'ex' WHERE `committees`.`id` = '$id'");
		 
		 
		 
	  }else{
		  echo "session active : ".$row->session_start;
	  }
	echo "<br />";
	 

}