<!DOCTYPE html>
<html>
<body>

<?php
	$command = "gradle -v"
	$output = exec($command);
	echo "<p>$output</p>";
?>

</html>
</body>