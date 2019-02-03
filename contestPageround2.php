<?php
  session_start();
  date_default_timezone_set('Asia/Kolkata');
  include 'includes/dbh.inc.php';
  ?>

  <!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <link rel="stylesheet" type="text/css" href="contestpage.css">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">

    <title>Google Master - YoUR Fest 2K19</title>
  </head>
  <body style="background-color: #CFE4F2;">
    
<script>
var seconds = 1800;
function secondPassed() {
    var minutes = Math.round((seconds - 30)/60);
    var remainingSeconds = seconds % 60;
    if (remainingSeconds < 10) {
        remainingSeconds = "0" + remainingSeconds;  
    }
    document.getElementById('countdown').innerHTML = minutes + ":" + remainingSeconds;
    if (seconds == 0) {
        clearInterval(countdownTimer);
        document.getElementById('countdown').innerHTML = "Buzz Buzz";
    } else {
        seconds--;
    }
}
 
var countdownTimer = setInterval('secondPassed()', 1000);
</script>
 	<?php 
 		if (isset($_SESSION['userName'])) {
 			$participant = $_SESSION['userName'];
 			echo "Logged in as : ".$_SESSION['userName'];
 			$sql = "SELECT * FROM round2 WHERE participant = '$participant'";
		$result = mysqli_query($conn, $sql);
		$resultCheck = mysqli_num_rows($result);
		if ($resultCheck>=1) {
			echo "<br><br>Your answers submitted!! We will inform you if you are qualified for the next round!..";
			echo "<form action='includes/logoutround2.inc.php' method='POST'>
      <button type='submit' name='submit'>Log out</button>
    </form><br>";
		}
		else {
 			echo "<form action='includes/logoutround2.inc.php' method='POST'>
		
      <button type='submit' name='submit'>Log out</button>
    </form><br>";
    echo '<span id="countdown" class="timer" name="time"></span>';

    echo "<h1>Questions</h1>";
    $sql = "SELECT * FROM marykom";
    $result = mysqli_query($conn,$sql);
      while($row = $result->fetch_assoc())
      {
      	$qno = $row['qno'];
      	$question = $row['question'];
        $op1 = $row['op1'];
        $op2 = $row['op2'];
        $op3 = $row['op3'];
        $op4 = $row['op4'];
        $fileName = $row['filename'];
        
      	echo '<h4>Q.No. '.$qno.' </h4>';
        echo '<img src="images/'.$fileName.'" width="200px" height="200px" alt="">';
      	echo '<h6>'.$question.'</h6>';
      	echo '<form method="POST" action="answerCheckround2.php">
      		<input type="radio" value="'.$op1.'" name="'.$qno.'">'.$op1.'<br>
          <input type="radio" value="'.$op2.'" name="'.$qno.'">'.$op2.'<br>
          <input type="radio" value="'.$op3.'" name="'.$qno.'">'.$op3.'<br>
          <input type="radio" value="'.$op4.'" name="'.$qno.'">'.$op4.'<br>
      	<hr><br><br>';
      }

      echo '<button type="submit" name="submit" id="btn">Submit</button></form>';

  }



 		}
 		else
 		{
 			echo '<form class="form-signin" style="margin: 10px; margin-top: 0px;" action="includes/loginround2.inc.php" method="POST">
     <div id="logo" align=center><img src="logo.png" alt="Google Master" height="200"></div>
     <br>
     <div id="box" class="login animated tada delay-1s" style="margin-left:34%;">
     <br>
     <div id="user">
     <label id="username" class="animated bounceInRight delay-3s" >UserName :</label>
     <input type="text" name ="userName" class="animated bounceInRight delay-3s" style="display:inline-block; width:50%; border-radius:3px;" id="box1">
     </div>
     <br>
     <div id=key>
     <label for="inputPassword" id="password" class="animated bounceInLeft delay-2s">Password &nbsp;: </label>
     <input type="password" id="box1" class="animated bounceInRight delay-3s" style="display:inline-block; width:50%; border-radius:3px;" name="pwd" required>
     </div>
     <br>
     <br>
     <button class="btn btn-primary animated bounceInRight delay-1s" type="submit" name="submit" id="start">Start Contest</button>
     </div>
     <p class="mt-5 mb-3 text-muted" style="text-align:center;">Google Masters | YoUR Fest 2K19</p>
    </form>';
 		}

 	?>

 	 <div id="root"></div>
    <script type="text/javascript">
      var x = document.URL;
      if(x.indexOf("empty")!=-1){
        alert("Empty fields found. Please try again");
      }
      if(x.indexOf("notregistered")!=-1){
        alert("You are not registered with us. Please talk to the co-ordinator");
      }
      if(x.indexOf("error")!=-1){
        alert("UserName/Password does not match. Please try again");
      }

    </script>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
  </body>
</html>