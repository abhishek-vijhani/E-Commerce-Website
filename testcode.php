<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<?php
session_start();
if(isset($_SESSION['cart']))
{
	$a = array();
	$test1 = array();
	for($i = 0; $i<count($_SESSION['cart']); $i++)
	{
		$a[] = $_SESSION['cart'][$i]['code'];
	}
	$test = implode(', ',$a);	
	echo $test.'<br>';
	$test1 = explode(',',$test);
	for($i = 0; $i<count($test1); $i++)
	{
		echo $test1[$i];
	}
}
?>
</body>
</html>