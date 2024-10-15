<?php
$maxValue = 0;

function test_input($data){
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}
if($_SERVER["REQUEST_METHOD"] == "POST"){
	if(!empty($_POST['maxValue'])){
		$maxValue = test_input($_POST['maxValue']);
	}
}



$tempStr = "";
$tempStr = $tempStr . "Increasing Order: \n";
for($i = 1; $i <= $maxValue; $i++){
	$tempStr .= $i . " ";
}
$tempStr .= "\n\n";

$tempStr = $tempStr . "Decreasing Order: \n";
for($i = $maxValue; $i >= 1; $i--){
	$tempStr .= $i . " ";
}
$tempStr .= "\n\n";

$tempStr = $tempStr . "Even Numbers: \n";
for($i = 2; $i <= $maxValue; $i = $i + 2){
	$tempStr .= $i . " ";
}
$tempStr .= "\n\n";

$tempStr = $tempStr . "Square: \n";
for($index1 = 1; $index1 <= $maxValue; $index1++){
	for($index2 = 1; $index2 <= $maxValue; $index2++){
		$tempStr .= "*";
	}
	$tempStr .= "\n";
}
$tempStr .= "\n\n";

$tempStr = $tempStr . "Multiplication Table: \n";
for($i = 1; $i <= $maxValue; $i++){
	$tempStr .= $i . " * " . $i . " = " . $i * $i; 
	$tempStr .= "\n";
}

?>
<html>
<head>
	<title> PHP: For Loop </title>
</head>
<body style="padding: 0 0 0 30px;">
	<h2> PHP: For Loop </h2>
	Troy Snook-Purvis<p></p>
	<form method="post" name="introductionFor" id="introductionFor"
		action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">


		<input type="text" name="maxValue" value="" />
		<input type="submit" value="Display Results"><p></p>
		<br />
		<textarea name="results" rows="25" cols="50"><?php echo $tempStr;?></textarea>


	</form>
</body>
</html>