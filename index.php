<?php

	include("dbConn.php");
	
	$sql = "SELECT * FROM todolist";
	$sqlQuery = mysqli_query($conn,$sql);
	

	
?>	

<!DOCTYPE html>
	<head>
	  <title>ToDo List App by Shrey Patel</title>
	  <link href="style.css" rel="stylesheet">
	  <link href="https://fonts.googleapis.com/css?family=Noto+Serif:400" rel="stylesheet">
	</head>

	<body>
		<h1 class="title"> To Do List Application</h1>
		<h1 class="name">Shrey Patel</h1>
		<hr>
		
		<h2>Current List</h2>
		
		<form action='delete.php' method='POST'>
		<table>
			<thead>
				<tr>
					<th>Task Name</th>
					<th>Task Description</th>
					<th class="dateSize">Due Date</th>
					<th>Remove Task</th>
				</tr>
			</thead>
			<tbody>
					<?php
						if(($rows = mysqli_num_rows($sqlQuery)) > 0) {
							while($output = mysqli_fetch_assoc($sqlQuery)) {
								echo "<tr>";
								echo "<td>" . $output['TaskName'] . "</td>" . "<td>" . $output['TaskDesc'] . "</td>" . "<td>" . $output['DueDate'] . "</td>";
								echo "<td>";
								echo '<input name="checkbox[]" type="checkbox" value=' . $output["TaskID"] . ' . />';
								echo "</td>";
								echo "</tr>";
							}
						}
						else {
							echo "<tr>";
							echo "<td>" . "Empty" . "</td>" . "<td>" . "Empty" . "</td>" . "<td>" . "Empty" . "</td>" . "<td>" . "Empty" . "</td>";
							echo "</tr>";
						}
					?>
				
			</tbody>
		</table>
		
		<input type="submit" id="delete" value="Delete"/>
		</form>

		<div class="inputForm">
			<form action="add.php" method="POST">
				<h3>New Task</h3><br/>
				<input type="text" name="taskName" size="50" placeholder="Enter Task Name" />
				<input type="text" name="taskDate" size="50" placeholder="Enter Due Date(YYYY-MM-DD)" />
				<br/><br/>
				<textarea rows="10" cols="96" name="taskDesc" placeholder="Enter Task Description"></textarea>
				<br/>
				<input type="submit" name="addTask" value="Add Task" />
			</form>
		</div>
	
	
	</body>
<html>

<?php 
	mysqli_close($conn);
?>