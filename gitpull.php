<!DOCTYPE html>
<html>
<body>

<?php
$output = shell_exec('gradle -q git');
echo "<pre>$output</pre>";
?>

</html>
</body>