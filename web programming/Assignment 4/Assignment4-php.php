<!DOCTYPE html>
<?php
$tax = 0;
$total = 0;
$membership = "gold";
$tennis = "no";
$racquetball = "no";
$golf = "no";

function test_input($data) {
	$data = trim($data);
	$data = stripcslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}
if($_SERVER["REQUEST_METHOD"] == "POST") {
	if(!empty($_POST["membership"])) {
		$membership = test_input($_POST["membership"]);
	}
	if($membership == "basic") {
		$total = 80;
	}
	else if($membership == "platinum") {
		$total = 100;
	}
	else {
		$total = 120;
	}

	if(isset($_POST["tennis"])) {
		$tennis = "yes";
		$total = $total + 15;
	}
	if(isset($_POST["racquetball"])) {
		$racquetball = "yes";
		$total = $total + 20;
	}
	if(isset($_POST["golf"])) {
		$golf = "yes";
		$total = $total + 25;
	}

	$total = $total + ($total * $tax);
	$total = round($total, 2);
}

?>
<html>
<head>
	<title> Health Club (PHP) </title>
</head>

<body style="padding: 30px;">

	<h2> Health Club (PHP) </h2>
	Troy Snook-Purvis <p>
	<form method="post" name="healthClubForm" id="healthClubForm" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
		<div style="float: left; width: 130px; background-color: pink;">
			<dl>
				<dt> <input type="radio" name="membership" onchange="reloadForm()" <?php if(isset($membership) && $membership=="basic") echo "checked";?> value="basic"> Basic </dt>
				<dt> <input type="radio" name="membership" onchange="reloadForm()" <?php if(isset($membership) && $membership=="basic") echo "checked";?> value="platinum"> Platinum </dt>
				<dt> <input type="radio" name="membership" onchange="reloadForm()" <?php if(isset($membership) && $membership=="basic") echo "checked";?> value="gold"> Gold </dt>
			</dl>
		</div>

		<div style="float: left; width: 180px; background-color: yellow;">
			<dl>
				<dt> Additional Charges (1) </dt>
				<dt> 
					<input type="checkbox" onchange="reloadForm()" <?php if(isset($tennis) && $tennis=="yes") echo "checked";?> name="tennis"> Tennis 
				</dt>
				<dt> 
					<input type="checkbox" onchange="reloadForm()" <?php if(isset($racquetball) && $racquetball=="yes") echo "checked";?> name="racquetball"> Racquetball 
				</dt>
				<dt> 
					<input type="checkbox" onchange="reloadForm()" <?php if(isset($golf) && $golf=="yes") echo "checked";?> name="golf"> Golf 
				</dt>
			</dl>
		</div>

		<div style="clear: both;">&nbsp;</div>

		<div style="float: left; width: 150px; background-color: lightcoral;">
			<dl>
				<dt> <input type="submit" value="Calculate Total"> </dt>
				<dt> <input type="submit" value="Clear"> </dt>
			</dl>
		</div>

		<div style="float: left; background-color: lightgreen;">
			<dl>
				<dt>
					Tax: <input type="text" onchange="reloadForm()" name="tax" value="<?php echo $tax;?>" size="10">
				</dt>
				<dt>
					Total: <input type="text" onchange="reloadForm()" name="total" value="<?php echo $total;?>" size="10">
				</dt>
			</dl>
		</div>
		<script>
			function reloadForm() {
				document.getElementById("healthClubForm").submit();
			}
		</script>
	</form>
</body>
</html>