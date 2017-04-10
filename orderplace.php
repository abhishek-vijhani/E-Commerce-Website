<?php
session_start();
function orderid()
{
  $temp = str_shuffle('0123456789ABCDE');
  return $temp;
}
if($_POST['payment'])
{
	if($_POST['payment_mode'] == "cash")
	{ 
		$paymentmode = $_POST['payment_mode'];
	}
	else if($_POST['payment_mode'] == "credit" || $_POST['payment_mode'] == "debit")
	{
		if($_POST['payment_mode'] == "credit")
		{
			$paymentmode = "credit";
		}
		else
		{
			$paymentmode = "debit";
		}
		$bank = $_POST['bank'];
		$cardno = $_POST['cardno'];
		$cardmonth = $_POST['card_month'];
		$cardcvv = $_POST['card_cvv'];
		$cardholder = $_POST['card_holder'];
	}
	  $finalquantity = $_SESSION['quantity'];
	  $ordertype = "Retail";
	  $fullname = $_SESSION['details']['fullname'];
	  $address = $_SESSION['details']['address'];
	  $email = $_SESSION['details']['email'];
	  $number = $_SESSION['details']['number'];
	  $con = mysqli_connect("localhost", "root", "password", "chocomelange");
	  if(!$con)
	  {
			die('Could not connect to database.');	  
	  }
	  //check if the user exists
	  $check = "SELECT * from customer where customer_email = '$email';";
	  $checkresult = mysqli_query($con, $check);
	  $tempCheck = mysqli_num_rows($checkresult);
	  //print($tempCheck);
	  if($tempCheck == 0)//if the user does not exist.
	  {
		  /*print($fullname);
		  print($address);
		  print($email);
		  print($number);*/
		  $user = "INSERT INTO customer(customer_name, customer_email, customer_number, customer_address) VALUES ('$fullname', '$email', $number, '$address');";
		  $userresult = mysqli_query($con, $user);
		  if(!$userresult)
		  {
			  print('<br>');
			  print(mysqli_error($con));
			  die('Some error has occurred. Please try later. 1');
		  }
		  $getID = "SELECT * FROM customer where customer_email = '$email' AND customer_number = $number;";
		  $getIDresult = mysqli_query($con, $getID);
		  if(!$getIDresult)
		  {
			  die('Some error has occurred. Please try later. 2');
		  }
		  $getIDrow = mysqli_fetch_assoc($getIDresult);
		  $userid = $getIDrow['customer_id'];
	  }
	  else if($tempCheck == 1)
	  {
		  $getIDrow = mysqli_fetch_assoc($checkresult);
		  $userid = $getIDrow['customer_id'];
		  //print($userid);
		  //die('Fin');
	  }
	  else
	  {
			die('Some user database related error occurred.');  
	  }
}
else//agar submit na click hua ho toh
{
	die('Some error has occurred.');
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Choco Melange - Product Details</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<!-- templatemo 341 web store -->
<!-- 
Web Store Template 
http://www.templatemo.com/preview/templatemo_341_web_store 
-->
<link href="css/templatemo_style.css" rel="stylesheet" type="text/css" />

<link rel="stylesheet" type="text/css" href="css/ddsmoothmenu.css" />

<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/ddsmoothmenu.js">

/***********************************************
* Smooth Navigational Menu- (c) Dynamic Drive DHTML code library (www.dynamicdrive.com)
* This notice MUST stay intact for legal use
* Visit Dynamic Drive at http://www.dynamicdrive.com/ for full source code
***********************************************/

</script>

<script type="text/javascript">

ddsmoothmenu.init({
	mainmenuid: "templatemo_menu", //menu DIV id
	orientation: 'h', //Horizontal or vertical menu: Set to "h" or "v"
	classname: 'ddsmoothmenu', //class added to menu's outer DIV
	//customtheme: ["#1c5a80", "#18374a"],
	contentsource: "markup" //"markup" or ["container_id", "path_to_menu_file"]
})

function clearText(field)
{
    if (field.defaultValue == field.value) field.value = '';
    else if (field.value == '') field.value = field.defaultValue;
}
</script>

<link rel="stylesheet" href="css/lightbox.css" type="text/css" media="screen" />
	
<script src="js/prototype.js" type="text/javascript"></script>
<script src="js/scriptaculous.js?load=effects,builder" type="text/javascript"></script>
<script src="js/lightbox.js" type="text/javascript"></script>

</head>

<body id="subpage">

<div id="templatemo_wrapper">
	<div id="templatemo_header">
    	<div id="site_title">
        	<h1><img src="images/logo.png"></h1>
        </div><?
			$s = 0;
		?>
        <div id="header_right">
            <ul type="none">                
                <li><a href ="shoppingcart.php"><img src="images/cart.png" /><font face="Calibri" size="+1">(<? echo $s; unset($s); ?>)</font></a>
				<font face="Calibri" size="+2">|<a href="trackorder.php">Track your order(Only for Non Event Orders)</a></font></li>
            </ul>
            <div class="cleaner"></div>
           <!-- <div id="templatemo_search">
                <form action="#" method="get">
                  <input type="text" value="Search" name="keyword" id="keyword" title="keyword" onfocus="clearText(this)" onblur="clearText(this)" class="txt_field" />
                  <input type="submit" name="Search" value="" alt="Search" id="searchbutton" title="Search" class="sub_btn"  />
                </form>
            </div>-->
         </div> <!-- END -->
    </div> <!-- END of header -->    <div id="templatemo_menu" class="ddsmoothmenu">
        <ul>
            <li><a href="index.php" class="selected">Home</a></li>            <li><a href="productdetails.php">Products</a>
<ul>
                    <li><a href="simple.php">Simple</a></li>
                    <li><a href="assorted.php">Assorted</a></li>
                    <li><a href="exotic.php">Exotic</a></li>
					<li><a href="#">Events</a>
					<ul>
					<li><a href="premarriage.php">Pre Marriage Parties</a></li>
                    <li><a href="birthday.php">Birthdays</a></li>
                    <li><a href="marriage.php">Marriage</a></li>
					<li><a href="co-operate.php">Co-Operate Gifts</a></li>
                    <li><a href="specialoccassion.php">Special Occassions</a></li>
                    </ul>
					</li>
              </ul>
            </li>
            <li><a href="about.php">About</a>
                
            </li>
            <li><a href="faqs.php">FAQs</a></li>
            
            <li><a href="contact.php">Contact</a></li>
        </ul>
        <br style="clear: left" />
    </div> <!-- end of templatemo_menu -->
    
    <div class="cleaner h20"></div>
    <div id="templatemo_main_top"></div>
    <div id="templatemo_main">
        <div id="">
        	<p style="font-family:Calibri; font-size:35px; color:#333333"><img src="images/Ok_check_yes_tick_accept_success_green_correct.png" alt="Thanks!" />Thank you for your Order, <? echo $fullname;?>!<p><hr />
            
            <div class="col col_13 no_margin_right">
			</div>
            <p style="font-family:Calibri; font-size:18px; color:#333333; position:relative; left:13px">Your order has been placed and is currently being processed. <br />You may be given a confirmation call to verify address and details. When your item(s) are shipped, you will receive an email with the details. You can track this order using the Order ID through <a href="trackorder.php">Track My Order.</a></p>
            <?
				$orderid = orderid();
			?>
	<p align="left" style="font-family:Calibri; font-size:18px; color:#333333; position:relative; left:13px">Email ID associated with this order is: <b><? echo $email; ?></b></p>
    <p align="left" style="font-family:Calibri; font-size:18px; color:#333333; position:relative; left:13px">Your Order ID is: <b><? echo $orderid; ?></b></p>
    <p align="left" style="font-family:Calibri; font-size:18px; color:#333333; position:relative; left:13px">The Order is placed on <b><? echo date("h:i A l, jS F Y")?></b></p>
   <p align="left" style="font-family:Calibri; font-size:18px; color:#333333; position:relative; left:13px">Expected Date of delivery is <b><? echo date("jS F Y", strtotime("+8 days"))?></b></p>
    <p align="left" style="font-family:Calibri; font-size:18px; color:#333333; position:relative; left:13px">The Payment Mode selected is <b>
    <?
	if($paymentmode == "cash")
	echo "Cash";
	else if($paymentmode == "credit")
	echo "Credit Card";
	else if($paymentmode == "debit")
	echo "Debit Card"
	?>.</b></p>
    <p style="font-family:Calibri; font-size:18px; color:#333333; position:relative; left:13px;">The order comprises of:</p><center>

	<table border="" width="700px" cellspacing="0" cellpadding="5">
	<tr bgcolor="#CCCCCC">
	<th width = "90" align = "center">Name </th>
	<th width="100" align="center">Quantity (in KGs) </th> 
	<th width="60" align="right">Price (in ₹) </th>
	<th width="60" align="right">Total </th> 
	</tr>
	<?
    $code;
	$price;
	$total = 0;
	for($index = 0; $index < count($_SESSION['cart']); $index++)
	{
		$code = $_SESSION['cart'][$index]['code'];
		$quantity = $_SESSION['cart'][$index]['qty'];
		
		$query = "SELECT * FROM product WHERE product_id = $code;";
		$result = mysqli_query($con, $query);
		if(!$result)
		{
			die('An error has occurred.'.mysqli_errno($con));
		}
		$row = mysqli_fetch_assoc($result);
		$price = $quantity * $row['product_price'];
		?>
		<tr>
		<td align="center"><? echo $row['product_name']?></td>
		<td align="center"><input readonly="readonly" type="text" value="<?=$quantity; echo ' Kg(s)';?>" style="width: 70px; text-align: center" /></td>
		<td align="right">₹<? echo $row['product_price']?></td> 
		<td align="right">₹<? echo $price//calculated above?></td>
		</tr>
		<?
		$total = $total + $price;
	}//end for
	if($finalquantity > 10)//classifying as bulk or retail and charging accordingly
	{
		$packingcharges = 200;
		$ordertype = "Bulk";
		$total = $total + $packingcharges;
		echo '<tr><td></td><td></td><td align="right">Packing Charges<sup>*</sup></td><td align="right" bgcolor="" style="font-family:Calibri; font-size:18px; color:#333333">₹'.$packingcharges.'</td></tr>';
		echo '<tr><td></td><td></td><td align="right" style="font-size:14px"><b>Total</b></td><td align="right" bgcolor="#CCCCCC" style="font-family:Calibri; font-size:22px; color:#333333"><b>₹'.$total.'</b></td></tr></table>';
		echo '<p align="left" style="font-family:Calibri; font-size:13px; color:#333333; position:relative; left:13px"><sup>*</sup>Your order quantity exceeds the Retail Order limit and will be shipped as a Bulk Order. Packing charges will be added and Delivery would be free. Packing Charges must be paid at the time of delivery of the order.</p>';
	}
	else
	{
		$ordertype = "Retail";
		echo '<tr><td></td><td></td><td align="right" style="font-size:14px"><b>Total</b></td><td align="right" bgcolor="#CCCCCC" style="font-family:Calibri; font-size:22px; color:#333333"><b>₹'.$total.'</b></td></tr></table>';		
	}
	echo '<p align="left" style="font-family:Calibri; font-size:18px; color:#333333; position:relative; left:13px">The ordered will be delivered within 7-8 business days at the following address: <b>'.$address.'</b>';
	echo '<p align="left" style="font-family:Calibri; font-size:18px; color:#333333; position:relative; left:13px">You will be informed when your items are shipped. Please keep the specified amount ready at the time of delivery.<br><br>For any queries or information regarding your order, please drop a feedback at <a href="contact.php">Contact Us</a>.</p>';
?>         
			</center>
            <div class="cleaner h50"></div>
            
            
            
            <div class="cleaner"></div>
        </div> <!-- END of content -->
        <div class="cleaner"></div>
    </div> <!-- END of main -->
    
   <div id="templatemo_footer">
    	
        <div class="col col_16">
        	<h4>Navigate</h4>
            <ul class="footer_menu">
            	<li><a href="#">Home</a></li>
                <li><a href="#">Services</a></li>
                <li><a href="#">Shipping</a></li>
                <li><a href="#">Privacy</a></li>
			</ul>  
        </div>
        <div class="col col_16">
        	<h4>Partners</h4>
            <ul class="footer_menu">
            	<li><a href="#">Kwality</a></li>
            	<li><a href="#">Master Bakers</a></li>
                <li><a href="#">Sita Ram Bakery</a></li>
                
			</ul>  
        </div>
        <div class="col col_16">
        	<h4>Social</h4>
            <ul class="footer_menu">
            	<li><a href="#">Twitter</a></li>
                <li><a href="#">Facebook</a></li>
                <li><a href="#">Youtube</a></li>
                <li><a href="#">LinkedIn</a></li> 
		  </ul>  
        </div>
        <div class="col col_13 no_margin_right">
        	<h4>About Us</h4>
            <p>An ex home made chocolate firm,which knows the taste , The Chocolate Lovers like and tries to deliver them with the best quality possible</p>
        </div>
        
        <div class="cleaner h40"></div>
		<center>
			Copyright © 2012 Choco Melange
		</center>
    </div> <!-- END of footer -->   
   
</div>

</body>
</html>
<?
if(isset($fullname, $email, $address, $number, $finalquantity, $total, $orderid, $_SESSION['cart'], $userid, $ordertype, $paymentmode))//think more, there has to be more. Don't give up now.
{
	$productQtyArray = array();
	$productArray = array();//taking a local array to convert the session cart into a string using implode
	for($i = 0; $i < count($_SESSION['cart']); $i++)
	{
		$productArray[] = $_SESSION['cart'][$i]['code'];
		$productQtyArray[] = $_SESSION['cart'][$i]['qty'];
	}
	//$productString = implode(', ',$productArray);
	
	$datePlaced = date('d/M/Y');
	$orderstatus = "Payment Approved";
	$orderTableQuery = "INSERT INTO `order`(`order_id`, `order_status`, `order_type`, `order_price`, `order_date`, `customer_id`) VALUES ('$orderid', '$orderstatus', '$ordertype', $total, '$datePlaced', $userid);";
	$orderTableResult = mysqli_query($con, $orderTableQuery);
	if(!$orderTableResult)
	{
		die('An error occurred during Order Table Operation.'.mysqli_error($con));
	}
	
	//for adding product details in the order_map table
	$orderMapQuery = "INSERT INTO `order_map`(`order_weight`, `product_id`, `order_id`) VALUES ";
	for($i = 0; $i<count($_SESSION['cart']); $i++)
	{
		$orderMapQuery = $orderMapQuery."($productQtyArray[$i], '$productArray[$i]', '$orderid'),";
	}
	$orderMapQuery[strlen($orderMapQuery)-1] = ";";
	$orderMapResult = mysqli_query($con, $orderMapQuery);
	if(!$orderMapResult)
	{
		die('An error occurred during Order Mapping.'.mysqli_error($con));
	}
	if($paymentmode == "cash")
	{
		$paymentquery = "INSERT INTO `payment`(`customer_id`, `pay_mode`, `order_id`) VALUES ($userid, '$paymentmode', '$orderid');";
		$paymentcashresult = mysqli_query($con, $paymentquery);
		if(!$paymentcashresult)
		{
			die('An error occurred during Payment with Cash.'.mysqli_error($con));
		}
	}
	else if($paymentmode == "credit" || $paymentmode == "debit")
	{
		$paymentquery = "INSERT INTO `payment`(`card_no`, `card_cvv`, `card_month`, `customer_id`, `pay_mode`, `card_name`, `order_id`) VALUES ($cardno, $cardcvv, '$cardmonth', $userid, '$paymentmode', '$cardholder', '$orderid')";
		$paymentcreditresult = mysqli_query($con, $paymentquery);
		if(!$paymentcreditresult)
		{
			die('An error occurred during Payment with Cash.'.mysqli_error($con));			
		}
	}
	unset($_SESSION['cart'], $_SESSION['details']);
}
?>

