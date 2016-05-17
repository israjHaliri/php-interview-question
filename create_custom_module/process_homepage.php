<?php
$status = $_POST['status'];
$description  = $_POST['description'];

$myfile = fopen("homepage.php", "w") or die("Unable to open file!");
if ($status == 1) 
{
$param= "
<script>console.log('".$description."')</script>
<!DOCTYPE html>
<html>
<head>
	<title>Home Page</title>
</head>
<body>
	<h3>Home Page</h3>
</body>
</html>
";	
}
else
{
$param= "
<!DOCTYPE html>
<html>
<head>
	<title>Home Page</title>
</head>
<body>
	<h3>Home Page</h3>
</body>
</html>
";		
}

fwrite($myfile, $param);
fclose($myfile);


echo "OK Its done click<a href=\"javascript:history.go(-1)\"> here to GO BACK</a>";
?>
