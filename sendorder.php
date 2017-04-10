<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<?php
session_start();
if(isset($_POST['submitcheckout']))
{
	if($_POST['fullname'] != NULL && $_POST['address'] != NULL && $_POST['country'] != NULL && $_POST['citylist'] != -1 && $_POST['email'] != NULL && $_POST['number'] != NULL)
	{
		if(!isset($_SESSION['cart']))
		{
			echo '<head><script>alert("You have no items in the cart!");</script></head>';
			header('Location : product.html');
		}
		else
		{
			$_SESSION['name'] = $_POST['fullname'];
			$_SESSION['address'] = $_POST['address'];
			$_SESSION['citylist'] = $_POST['citylist'];
			$_SESSION['email'] = $_POST['email'];
			$_SESSION['number'] = $_POST['number'];
			
			$con = mysqli_connect("localhost","root","password","chocomelange");
			if(mysqli_connect_error())
			{
				echo 'An error has while connecting the database. Error number: '.mysqli_errno().'.'.mysqli_error();
				die();
			}
			
			$query = "INSERT INTO `customer`(`customer_name`, `customer_email`, `customer_number`, `customer_address`) VALUES ('$_SESSION['name']','$_SESSION['email']','$_SESSION['number']','$_SESSION['address']');";
			$result = mysqli_query($con, $query);
		}
	}
}
?>
</body>
</html>