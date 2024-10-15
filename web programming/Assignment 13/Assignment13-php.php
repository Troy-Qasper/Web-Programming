<!DOCTYPE html>
<html>
<head>
	<title>Assignment #13</title>
</head>
<body>
	<h2> Assignment #13 (PHP) </h2>
	Troy Snook-Purvis <br> <br>
	Display random pictures on a website. <br>
	Press "Reload or Refresh" to view different pictures. <br>
	<?php
	$seconds = date("s");
	echo "Time in seconds: $seconds <p>";
	$when = $seconds % 5;
	if($when == 0){
		include 'nsu1.html';
	}
	elseif($when == 1){
		include 'nsu2.html';
	}
	elseif($when == 2){
		include 'nsu3.html';
	}
	elseif($when == 3){
		include 'nsu4.html';
	}
	else{
		include 'nsu5.html';
	}
	?>



</body>
</html>