<?php
	$completeName = "";
	$tempStr = "";

	function test_input($data){
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}

	if($_SERVER["REQUEST_METHOD"] == "POST"){
		if(!empty($_POST["completeName"])){
			$completeName = test_input($_POST["completeName"]);
		}

		$spacePos = strpos($completeName, " ");
		$firstName = substr($completeName, 0, $spacePos);
		$lastName = substr($completeName, $spacePos + 1);
		$lastName = trim($lastName);

		$tempStr = "";
		$tempStr = $tempStr . "First name: $firstName\n";
		$tempStr .= "It contains " . strlen($firstName) . " characters. \n\n";

		$tempStr = $tempStr . "Last name: $lastName\n";
		$tempStr .= "It contains " . strlen($lastName) . " characters. \n\n";
	}
?>
<html>
<head>
	<title>String Manipulation: PHP</title>
	<script>
		

	</script>
</head>
<body style="padding: 30px;">
	<h2>String Manipulation: PHP</h2>
	<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
		Name: <input type="text" name="completeName" value="Troy Snook-Purvis"> <p></p>
		<input type="submit" value="Extract Name"> <p></p>
		<textarea name="results" rows="8" cols="50"><?php echo $tempStr;?></textarea>
	</form>

</body>
</html>