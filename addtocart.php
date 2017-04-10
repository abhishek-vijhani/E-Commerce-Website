<!doctype html>
<?php
session_start();
?>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<?php
/*
$con = mysqli_connect("localhost", "root", "password", "chocomelange");
if(mysqli_connect_error())
{
	echo 'An error has occurred while connecting to database. Error No.: '.mysqli_errno($con).'. '.mysqli_error($con);
}

if(isset($_SESSION['product_code']))
{
	$product = array();
	//array_push($product_code, $_SESSION['product_code']);
	
	for($i = 0; $i<count($_SESSION['product_code']); $i++)
	{
		$_SESSION['id'] = $_SESSION['product_code'];
		$query = "SELECT * FROM product WHERE product_id=$_SESSION[id];";
		$result = mysqli_query($con, $query);
		while($product = mysqli_fetch_assoc($result))
		{
			echo $product['product_id'].' ';
			echo $product['product_name'].' ';
		}
	}
}
echo count($_SESSION['product_code']).' ';
echo count($product).' ';
echo count($_SESSION['id']);*/

for($index = 0; $index<count($_SESSION['cart']); $index++)
{
	echo '<h3>'.$index.'. </h3>';
	echo '<h3>Code of Product: '.$_SESSION['cart'][$index]['code'].'</h3>';
	echo '<h3>Quantity of Product: '.$_SESSION['cart'][$index]['qty'].'</h3><br>';
}
?>
</body>
</html>