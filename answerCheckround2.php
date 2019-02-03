<?php
	include_once "contestPageround2.php";
	$participant = $_SESSION['userName'];

	if (isset($_POST['submit'])) {

		
		$response1 = $_POST['1'];
		$response2 = $_POST['2'];
		$response3 = $_POST['3'];
		$response4 = $_POST['4'];
		$response5 = $_POST['5'];
		include "includes/dbh.inc.php";
		$marks = 0;
		$sql = "SELECT * FROM marykom";
		$result = mysqli_query($conn,$sql);
		while($row = $result->fetch_assoc())
		{
			if("1" == $row['qno'] && $response1 == $row['answer'])
			{
				$marks = $marks + 1;
			}

			if("2" == $row['qno'] && $response2 == $row['answer'])
			{
				$marks = $marks + 1;
			}

			if("3" == $row['qno'] && $response3 == $row['answer'])
			{
				$marks = $marks + 1;
			}

			if("4" == $row['qno'] && $response4 == $row['answer'])
			{
				$marks = $marks + 1;
			}

			if("5" == $row['qno'] && $response5 == $row['answer'])
			{
				$marks = $marks + 1;
			}

		}

		$sql = "INSERT INTO round2 (participant, marks) VALUES ('$participant', '$marks');";
				mysqli_query($conn, $sql);
				header("Location: ../contestPageround2.php?status=Success");
					exit();
	}

?>