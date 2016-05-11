<?php 

$today = date("d-m-Y");
$year =  date("Y");
$public_holiday = array('25-12-'.$year.'', '01-01-'.$year.'');
$status= "";

for ($i=0; $i < count($public_holiday); $i++) { 

	if ($today == $public_holiday[$i]) 
	{
		$status = TRUE;
	}
	else
	{
		$status = FALSE;
	}
	
}

if ($status == TRUE) 
{
	echo "Today public  is Holiday";	
}
else if (date('l', strtotime($today))== 'Thursday') 
{
	echo "Today is Saturday So This is Holiday";
}
else if (date('l', strtotime($today))== 'Sunday') 
{
	echo "Today is Sunday So This is Holiday";
}
else
{
	echo "Today is Work day";	
}

?>
