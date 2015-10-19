<!DOCTYPE html>
<html>
<body>

<?php
$out=`gradle -v`;
echo "<pre>$out</pre>";
echo exec("gradle -v");
?>

</html>
</body>