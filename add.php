<?php

	include("dbConn.php");
	
	$taskName = $_POST['taskName'];
	$taskDate = $_POST['taskDate'];
	$taskDesc = $_POST['taskDesc'];
	
	if(isset($taskName) && isset($taskDate) && isset($taskDesc)) {
		$sqlQuery = "INSERT INTO `todolist` (`TaskID`, `TaskName`, `TaskDesc`, `DueDate`) VALUES (NULL, '$taskName', '$taskDesc', '$taskDate')";
		if(mysqli_query($conn, $sqlQuery))
			echo "Successful";
		else
			echo "Failed. " . mysqli_error($conn);
	}
	
	header("Location:index.php");
		
?>