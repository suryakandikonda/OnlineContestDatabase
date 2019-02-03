<?php
	include "includes/dbh.inc.php";
	$sno = 1;
	$sql = "SELECT * FROM round1 ORDER BY marks DESC";
	$result = mysqli_query($conn, $sql);
	while($row=$result->fetch_assoc())
	{
		echo $sno;
		echo '<h2>Participant : '.$row['participant'].'</h2><br>
		Marks : '.$row['marks'].'<hr><br>';
		$sno +=1;
	}
?>