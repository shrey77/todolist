<?php

	include("dbConn.php");
	
	$taskName = $_POST['taskName'];
	$taskDate = $_POST['taskDate'];
	$taskDesc = $_POST['taskDesc'];
	
	if(isset($taskName) && isset($taskDate) && isset($taskDesc)) {
		$sqlQuery = "INSERT INTO `todolist` (`TaskID`, `TaskName`, `TaskDesc`, `DueDate`) VALUES (NULL, '$taskName', '$taskDesc', '$taskDate')";
		mysqli_query($conn, $sqlQuery);
	}
	
	header("Location:index.php");
	mysqli_close($conn);
?>