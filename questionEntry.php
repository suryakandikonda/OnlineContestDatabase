<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">

    <title>Google Masters Questions entry</title>
  </head>
  <body>
    
  	<br><br>
    <h1 style="text-align: center;">Questions entry</h1>


    <div style="margin: 100px;">
    <form action="includes/uploadQuestion.php" method="POST" enctype="multipart/form-data">
    	<label>Question : </label>
    	<textarea name="question"></textarea>
        <input type="text" name="op1">
        <input type="text" name="op2">
        <input type="text" name="op3">
        <input type="text" name="op4">
        <input type="text" name="ans">

    	<label for='exampleFormControlFile1' style='margin-top: 10px;'>Upload Images</label>
    <input type='file' class='form-control-file' id='exampleFormControlFile1' name='file'>

    	<button type="submit" name="upload">Upload Question</button>
    </form>

	</div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
  </body>
</html>
<?php
	


?>