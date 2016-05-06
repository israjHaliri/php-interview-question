<?php 

$game_long = 10;
$result_player_A = array();
$result_player_A_temp = array();
$result_player_B = array();
$result_player_B_temp = array();
$result_player_C = array();
$result_player_C_temp = array();
$result_player_D = array();
$result_player_D_temp = array();

$result_player_A_length = 6;
$result_player_B_length = 6;
$result_player_C_length = 6;
$result_player_D_length = 6;

function roll ($sides) 
{
	$value = mt_rand(1,$sides);
	return $value;
}

function roll_player_A()
{
	global $result_player_A,$result_player_A_length,$result_player_B_temp;
	
	$result_player_A=array();
	$result_player_B_temp=array();

	for ($i=0; $i < $result_player_A_length; $i++) 
	{ 
		$myroll = roll(6);
		array_push($result_player_A, $myroll);
		array_push($result_player_B_temp, $myroll);

	}

	echo "Player A :";
	$prefix = '';
	$result_list ="";
	foreach ($result_player_A as $val)
	{
		$result_list .= $prefix . '' . $val . '';
		$prefix = ', ';
	}
	echo $result_list;
}

function roll_player_B()
{
	global $result_player_B,$result_player_B_length,$result_player_C_temp;
	
	$result_player_B=array();
	$result_player_C_temp=array();

	for ($i=0; $i < $result_player_B_length; $i++) 
	{ 
		$myroll = roll(6);
		array_push($result_player_B, $myroll);
		array_push($result_player_C_temp, $myroll);
	}	
	echo "Player B :";
	$prefix = '';
	$result_list ="";
	foreach ($result_player_B as $val)
	{
		$result_list .= $prefix . '' . $val . '';
		$prefix = ', ';
	}
	echo $result_list;
}

function roll_player_C()
{
	global $result_player_C,$result_player_C_length,$result_player_D_temp;
	
	$result_player_C=array();
	$result_player_D_temp=array();

	for ($i=0; $i < $result_player_C_length; $i++) 
	{ 
		$myroll = roll(6);
		array_push($result_player_C, $myroll);
		array_push($result_player_D_temp, $myroll);

	}

	echo "Player C :";
	$prefix = '';
	$result_list ="";
	foreach ($result_player_C as $val)
	{
		$result_list .= $prefix . '' . $val . '';
		$prefix = ', ';
	}
	echo $result_list;
}

function roll_player_D()
{
	global $result_player_D,$result_player_D_length,$result_player_A_temp;
	
	$result_player_D=array();
	$result_player_A_temp=array();

	for ($i=0; $i < $result_player_D_length; $i++) 
	{ 
		$myroll = roll(6);
		array_push($result_player_D, $myroll);
		array_push($result_player_A_temp, $myroll);

	}

	echo "Player D :";
	$prefix = '';
	$result_list ="";
	foreach ($result_player_D as $val)
	{
		$result_list .= $prefix . '' . $val . '';
		$prefix = ', ';
	}
	echo $result_list;
}


//
function roll_player_A_move()
{
	
	global $result_player_A, $result_player_B,$result_player_A_length,$result_player_A_temp;

	
	foreach (array_keys($result_player_A, '6') as $key) {
		unset($result_player_A[$key]);
	}
	foreach (array_keys($result_player_A, '1') as $key) {
		unset($result_player_A[$key]);
	}
	foreach (array_keys($result_player_A_temp, '1') as $key) {
		array_push($result_player_A, $result_player_A_temp[$key]);
	}

	if (count($result_player_A) == "") 
	{
		echo "Player A :";
		$game_long = 0;
	}
	else
	{
		echo "Player A :";
		$prefix = '';
		$result_list ="";
		foreach ($result_player_A as $val)
		{
			$result_list .= $prefix . '' . $val . '';
			$prefix = ', ';
		}
		echo $result_list;
	}

	$result_player_A_length = count($result_player_A);
}	

function roll_player_B_move()
{
	
	global $result_player_B, $result_player_C,$result_player_B_length,$result_player_B_temp;
	
	foreach (array_keys($result_player_B, '6') as $key) {
		unset($result_player_B[$key]);
	}
	foreach (array_keys($result_player_B, '1') as $key) {
		unset($result_player_B[$key]);
	}
	foreach (array_keys($result_player_B_temp, '1') as $key) {
		array_push($result_player_B, $result_player_B_temp[$key]);
	}

	if (count($result_player_B) == "") 
	{
		echo "Player B :";
		$game_long = 0;
	}
	else
	{
		echo "Player B :";
		$prefix = '';
		$result_list ="";
		foreach ($result_player_B as $val)
		{
			$result_list .= $prefix . '' . $val . '';
			$prefix = ', ';
		}
		echo $result_list;
	}
	$result_player_B_length = count($result_player_B);
}	


function roll_player_C_move()
{
	
	global $result_player_C, $result_player_D,$result_player_C_length,$result_player_C_temp;
	
	foreach (array_keys($result_player_C, '6') as $key) {
		unset($result_player_C[$key]);
	}
	foreach (array_keys($result_player_C, '1') as $key) {
		unset($result_player_C[$key]);
	}
	foreach (array_keys($result_player_C_temp, '1') as $key) {
		array_push($result_player_C, $result_player_C_temp[$key]);
	}

	if (count($result_player_C) == "") 
	{
		echo "Player C :";
		$game_long = 0;
	}
	else
	{
		echo "Player C :";
		$prefix = '';
		$result_list ="";
		foreach ($result_player_C as $val)
		{
			$result_list .= $prefix . '' . $val . '';
			$prefix = ', ';
		}
		echo $result_list;
	}
	$result_player_C_length = count($result_player_C);
}	


function roll_player_D_move()
{
	
	global $result_player_D, $result_player_A,$result_player_D_length,$result_player_D_temp;
	
	foreach (array_keys($result_player_D, '6') as $key) {
		unset($result_player_D[$key]);
	}
	foreach (array_keys($result_player_D, '1') as $key) {
		unset($result_player_D[$key]);
	}
	foreach (array_keys($result_player_D_temp, '1') as $key) {
		array_push($result_player_D, $result_player_D_temp[$key]);
	}

	if (count($result_player_D) == "") 
	{
		echo "Player D :";
		$game_long = 0;
	}
	else
	{
		echo "Player D :";
		$prefix = '';
		$result_list ="";
		foreach ($result_player_D as $val)
		{
			$result_list .= $prefix . '' . $val . '';
			$prefix = ', ';
		}
		echo $result_list;
	}
	$result_player_D_length = count($result_player_D);
}


function call_all($param)
{
	echo "<b>Round ".$param."</b>";
	echo "<br>";
	echo "<u>after dice rolled</u> :";
	echo "<br>";
	roll_player_A();
	echo "<br>";
	roll_player_B();
	echo "<br>";
	roll_player_C();
	echo "<br>";
	roll_player_D();
	echo "<br>";
	echo "<u>after dice moved/removed</u> :";
	echo "<br>";
	roll_player_A_move();
	echo "<br>";
	roll_player_B_move();
	echo "<br>";
	roll_player_C_move();
	echo "<br>";
	roll_player_D_move();
	echo "<br>";
	echo "<br>";
	echo "<br>";
}

for ($x=1; $x < 51; $x++) { 
	if ($result_player_A_length == 0 || $result_player_B_length == 0 || $result_player_C_length == 0 || $result_player_D_length == 0) {

	}
	else
	{
		call_all($x);
	}
}
?>