<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
class game
{
	var $price;
	var $name;

	public function print_game()
	{
		echo $this->name;
		echo $this->price;

	}
}
$game=new game;
$game->name ='bioshock infinite';
$game->price="200";

$game->print_game();
?>
</body>
</html>