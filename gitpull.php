<!DOCTYPE html>
<html>
<body>

<?php
	$command = 'gradle -v';
	$output = exec($command);
	echo "<p>$output</p>";
	commandLine 'cmd', '/c', 'gradle -v';
?>

</html>
</body>