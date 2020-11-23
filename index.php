<?php
  
  require "vendor/autoload.php";

	if(isset($_GET['student'])){
		
		$result = new SchoolBoard\StudentResult();
		echo $result->id($_GET['student']);
	} 
 ?>

    

