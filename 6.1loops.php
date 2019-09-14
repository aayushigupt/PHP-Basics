<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
$i=1;
for($i=1;$i<10;$i++)
echo "<br>",$i;
function tr($j)
{
	$j+=2;
	echo "<br>",$j;
}
tr($i);
?>
</body>
</html>