<?php 
function get_prime($n){
	
	$total = 0;

	for($i=1;$i<=$n;$i++)
	{  
		$counter = 0; 
		for($j=1;$j<=$i;$j++)
		{
			if($i % $j==0)
			{ 
				$counter++;
			}
		}

		if($counter==2){

			$total = $total + $i; 
		}
	}
	echo "total = ". $total;
} 

get_prime(200);
?>
