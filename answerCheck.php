<?php
	include_once "contestPage.php";
	$participant = $_SESSION['userName'];

	if (isset($_POST['submit'])) {

		
		$response1 = $_POST['1'];
		$response2 = $_POST['2'];
		$response3 = $_POST['3'];
		$response4 = $_POST['4'];
		$response5 = $_POST['5'];
		$response6 = $_POST['6'];
		$response7 = $_POST['7'];
		$response8 = $_POST['8'];
		$response9 = $_POST['9'];
		$response10 = $_POST['10'];
		include "includes/dbh.inc.php";
		$marks = 0;
		$sql = "SELECT * FROM tareejameenpar";
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

			if("6" == $row['qno'] && $response6 == $row['answer'])
			{
				$marks = $marks + 1;
			}

			if("7" == $row['qno'] && $response7 == $row['answer'])
			{
				$marks = $marks + 1;
			}

			if("8" == $row['qno'] && $response8 == $row['answer'])
			{
				$marks = $marks + 1;
			}

			if("9" == $row['qno'] && $response9 == $row['answer'])
			{
				$marks = $marks + 1;
			}

			if("10" == $row['qno'] && $response10 == $row['answer'])
			{
				$marks = $marks + 1;
			}
		}

		$sql = "INSERT INTO round1 (participant, marks) VALUES ('$participant', '$marks');";
				mysqli_query($conn, $sql);
				header("Location: ../contestPage.php?status=Success");
					exit();
	}

?>