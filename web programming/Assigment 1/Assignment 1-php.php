<?php
$number1 = 0;
$number2 = 0;
$result = "";

function test_input($data) {
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}

if($_SERVER["REQUEST_METHOD"] == "POST") {
	if(!empty($_POST["number1"])) {
		$number1 = test_input($_POST["number1"]);
	}
	if(!empty($_POST["number2"])) {
		$number2 = test_input($_POST["number2"]);
	}

	$result = $number1 + $number2;
}

?>

<h2> PHP Calculator </h2>
Troy Snook-Purvis <p>

<form method="post" action="<?php echo
	htmlspecialchars($_SERVER["PHP_SELF"]);?>">
Number 1: <input type="text" name="number1"
	value="<?php echo $number1; ?>"> 
<p>
Number 2: <input type="text" name="number2"
	value="<?php echo $number2; ?>">
<p>
<input type="submit" value="Calculate Answer">
<p>
Answer: <input type="text" name="result" value="<?php echo $result; ?>">
<p>

</form>