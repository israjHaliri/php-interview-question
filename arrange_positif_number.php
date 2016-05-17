<?php 
function print_one()
{
	$cars=array("1","4","5","2","6","3");
	echo "arrange (145263)";
	echo "<br>";
	echo "=>  ";
	rsort($cars);
	for ($i=0; $i < count($cars); $i++)
	{
		echo $cars[$i];
	}
	echo "<br>";
	echo "<br>";
}
function print_two()
{
	$cars=array("1","2","5","4","8","5","9","7","2","3");
	echo "arrange (1254859723)";
	echo "<br>";
	echo "=>  ";
	rsort($cars);
	for ($i=0; $i < count($cars); $i++)
	{
		echo $cars[$i];
	}
	echo "<br>";
	echo "<br>";
}
print_one();
print_two();
?>