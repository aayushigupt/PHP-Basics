<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
$a = array((3,2,1) , (6,5,4)  ,(9,8,7) );
foreach ($a as $key => $value) {
foreach ($value as $key => $value1) {
	echo $value1;
}
}
for ($i=0; $i < 3; $i++) { 
for ($j=0; j <2 ; $j++) { 
   for($k=$j+1;$k<3;$k++)
   {
   	if($a[$i][$j]>$a[$i][$k])
   	{
   		$t=$a[$i][$j];
   		$a[$i][$j]=$a[$i][$k];
   		$a[$i][$k]=$t;

   	}
   }
}
}


?>
</body>
</html>