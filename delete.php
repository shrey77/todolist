<?php

	include("dbConn.php");
	
	$checkBox = $_POST['checkbox'];
	
	if(isset($checkBox)) {
		$count = count($checkBox);
		for($i = 0; $i < $count; $i++) {
			$sqlQuery = "DELETE FROM todolist WHERE TaskID='$checkBox[$i]'";
			mysqli_query($conn, $sqlQuery);
		}
	}

	header("Location:index.php");
		
?>