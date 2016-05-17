<?php 
function send_param($param)
{
	for ($i=1; $i <= $param; $i++) 
	{ 
		echo "triangle(".$i.")";
		echo "<br>";
		print_star($i);
		echo "<br>";
		echo "<br>";
	}
}

function print_star($param)
{
	$total = 0;
	for($i=$param; $i >= 1; $i--)
	{
		for($j=$i ;$j>=1; $j--)
		{
			echo '*';
		}
		echo "<br>";
		$total = $total + $i; 
	}
	echo "=>".$total;
}

send_param(3);

?>
