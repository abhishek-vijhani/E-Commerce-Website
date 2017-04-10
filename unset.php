<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<?php
session_start();
unset($_SESSION['cart']);
header("Location: shoppingcart.php");
?>
</body>
</html>