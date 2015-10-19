<!DOCTYPE html>
<html>
<body>

<?php
$output = shell_exec('gradle -v');
echo "<pre>$output</pre>";
?>

</html>
</body>