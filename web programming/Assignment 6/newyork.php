<!DOCTYPE html>
<html>
<head>
	<title> New York </title>
</head>
<body style="padding: 30px;">

<?php
include 'header.html';
?>

<h2>
	New York
</h2>

<?php
$currentFileName = basename($_SERVER['PHP_SELF']);

$period = strpos($currentFileName, ".");

$stateName = (substr($currentFileName, 0, $period));

$imageName = "state-information/$stateName.jpg";
$imageData = "state-information/$stateName-data.txt";

echo "<img src =\"$imageName\" alt=\"$stateName\" width=\"240\" height=\"150\">";
echo "<p>";
include "$imageData";

?>


<?php
include 'footer.html';
?>

</body>
</html>