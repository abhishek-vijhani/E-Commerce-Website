<?php
session_start();
function orderid()
{
  $temp = str_shuffle('0123456789ABCDE');
  return $temp;
}
if($_POST['submitevent'])
{
  if($_POST['fullname'] != "" && $_POST['address'] != "" && $_POST['email'] != "" && $_POST['number'] != "")
  {
	  $date = $_POST['eventdate'];
	  $finalquantity = $_SESSION['eventfinalquantity'];
	  $packingcharges = $_SESSION['eventpackingcharges'];
	  $ordertype = $_SESSION['eventfinalquantity'];
	  $fullname = $_POST['fullname'];
	  $address = $_POST['address'].', '.$_POST['citylist'].', '.$_POST['pincode'];
	  $email = $_POST['email'];
	  $number = $_POST['number'];
	  $con = mysqli_connect("localhost", "root", "password", "chocomelange");
	  //check if the user exists
	  $check = "SELECT * from customer where customer_email = '$email';";
	  $checkresult = mysqli_query($con, $check);
	  $tempCheck = mysqli_num_rows($checkresult);
	  if($tempCheck == 0)//if the user does not exist.
	  {
		  $user = "INSERT INTO customer(customer_name, customer_email, customer_number, customer_address) VALUES ('$fullname', '$email', $number, '$address');";
		  $userresult = mysqli_query($con, $user);
		  if(!$userresult)
		  {
			  die('Some error has occurred. Please try later.');
		  }
		  $getID = "SELECT * FROM customer where customer_email = '$email' AND customer_number = $number;";
		  $getIDresult = mysqli_query($con, $getID);
		  if(!$getIDresult)
		  {
			  die('Some error has occurred. Please try later.');
		  }
		  $getIDrow = mysqli_fetch_assoc($getIDresult);
		  $userid = $getIDrow['customer_id'];
	  }
	  else if($tempCheck == 1)
	  {
		  $getID = "SELECT * FROM customer where customer_email = '$email' AND customer_number = $number;";
		  $getIDresult = mysqli_query($con, $getID);
		  if(!$getIDresult)
		  {
			  die('Some error has occurred. Please try later.');
		  }
		  $getIDrow = mysqli_fetch_assoc($getIDresult);
		  $userid = $getIDrow['customer_id'];
	  }
	  else
	  {
			die('Some user database related error occurred.');  
	  }
  }
  else
  {
	  die('Some unforceable error occurred.');
  }
}
else//agar submit na click hua ho toh
{
	die('Some bitchass error has occurred.');
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
        	<p style="font-family:Calibri; font-size:35px; color:#333333"><img src="images/Ok_check_yes_tick_accept_success_green_correct.png" src="Thanks!" />Thank you for your Order, <? echo $fullname;?>!<p><hr />
            
            <div class="col col_13 no_margin_right">
			</div>
            <p style="font-family:Calibri; font-size:18px; color:#333333; position:relative; left:13px">Your event order has been placed and is currently being processed. <br />You may be given a confirmation call to verify address and details. One of our field agents will visit you within 15 days of order placement to get the approval of the design and final change(s), if any. <br />You are requested to pay the half amount to the field agent and the remaining amount on delivery.</p>
            <?
				$orderid = orderid();
			?>
	<p align="left" style="font-family:Calibri; font-size:18px; color:#333333; position:relative; left:13px">Email ID associated with this order is: <b><? echo $email; ?></b></p>
    <p align="left" style="font-family:Calibri; font-size:18px; color:#333333; position:relative; left:13px">Your Order ID is: <b><? echo $orderid; ?></b></p>
    <p align="left" style="font-family:Calibri; font-size:18px; color:#333333; position:relative; left:13px">The Order is placed on <b><? echo date("h:i A l, jS F Y")?></b>.</p>
   <p align="left" style="font-family:Calibri; font-size:18px; color:#333333; position:relative; left:13px">The Order is to be delivered by <b><? echo $date ?></b></p>
    
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
	$finalquantity = 0;
	$total = 0;
	for($index = 0; $index < count($_SESSION['event']); $index++)
	{
		$code = $_SESSION['event'][$index]['code'];
		$quantity = $_SESSION['event'][$index]['qty'];
		$con = mysqli_connect("localhost", "root", "password", "chocomelange");
		$query = "SELECT * FROM special_product WHERE sp_id = $code;";
		$result = mysqli_query($con, $query);
		if(!$result)
		{
			die('An error has occurred.'.mysqli_errno($con));
		}
		$row = mysqli_fetch_assoc($result);
		$price = $quantity * $row['sp_price'];
		?>
		<tr>
		<td align="center"><? echo $row['sp_name']?></td>
		<td align="center"><input readonly="readonly" type="text" value="<?=$quantity; echo ' Kg(s)';?>" style="width: 70px; text-align: center" /></td>
		<td align="right">₹<? echo $row['sp_price']?></td> 
		<td align="right">₹<? echo $price//calculated above?></td>
        </tr>
		<?
		$finalquantity = $finalquantity + $quantity;
		$total = $total + $price;
	}//end for
		if($finalquantity > 10)//classifying as bulk or retail and charging accordingly
		{
			$packingcharges = 200;
			$ordertype = "bigevent";
			$total = $total + $packingcharges;
			echo '<tr><td></td><td></td><td align="right">Packing Charges<sup>*</sup></td><td align="right" bgcolor="" style="font-family:Calibri; font-size:18px; color:#333333">₹'.$packingcharges.'</td></tr>';
			echo '<tr><td></td><td></td><td align="right" style="font-size:14px"><b>Total</b></td><td align="right" bgcolor="#CCCCCC" style="font-family:Calibri; font-size:22px; color:#333333"><b>₹'.$total.'</b></td></tr></table></center>';
		}
		else
		{
			//$total = $total + $delivery;
			$ordertype = "smallevent";
			//echo '<tr><td></td><td></td><td align="right">Order Type</td><td align="right" bgcolor="" style="font-family:Calibri; font-size:18px; color:#333333">'.$ordertype.'</td></tr>';
			echo '<tr><td></td><td></td><td align="right" style="font-size:14px"><b>Total</b></td><td align="right" bgcolor="#CCCCCC" style="font-family:Calibri; font-size:22px; color:#333333"><b>₹'.$total.'</b></td></tr></table></center>';		
		}
		
	echo '<p align="left" style="font-family:Calibri; font-size:18px; color:#333333; position:relative; left:13px">The ordered will be delivered at the following address: <b>'.$address.'</b>';
	echo '<p align="left" style="font-family:Calibri; font-size:18px; color:#333333; position:relative; left:13px">You will be informed when your consignment is shipped. Please keep the specified amount ready at the time of delivery. <br>Read the <a href="#">Logistic FAQ for event orders</a> for more information on logistics.</p>';
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
if(isset($fullname, $email, $address, $number, $finalquantity, $total, $orderid, $_SESSION['event'], $userid, $ordertype))//think more, there has to be more. Don't give up now.
{
	$productQtyArray = array();
	$productArray = array();//taking a local array to convert the session cart into a string using implode
	for($i = 0; $i < count($_SESSION['event']); $i++)
	{
		$productArray[] = $_SESSION['event'][$i]['code'];
		$productQtyArray[] = $_SESSION['event'][$i]['qty'];
	}
	//$productString = implode(', ',$productArray);
	
	$datePlaced = date('d/M/Y');
	//$orderstatus = "Payment Approved";
	$orderTableQuery = "INSERT INTO `order`(`order_id`, `order_type`, `order_price`, `order_date`, `customer_id`) VALUES ('$orderid', '$ordertype', $total, '$date', $userid);";
	$orderTableResult = mysqli_query($con, $orderTableQuery);
	if(!$orderTableResult)
	{
		die('An error occurred during Order Table Operation.'.mysqli_error($con));
	}
	
	//for adding product details in the order_map table
	$orderMapQuery = "INSERT INTO `order_map`(`event_quantity`, `sp_id`, `order_id`) VALUES ";
	for($i = 0; $i<count($_SESSION['event']); $i++)
	{
		$orderMapQuery = $orderMapQuery."($productQtyArray[$i], '$productArray[$i]', '$orderid'),";
	}
	$orderMapQuery[strlen($orderMapQuery)-1] = ";";
	$orderMapResult = mysqli_query($con, $orderMapQuery);
	if(!$orderMapResult)
	{
		die('An error occurred during Order Mapping.'.mysqli_error($con));
	}
	unset($_SESSION['event'], $_SESSION['eventordertype'], $_SESSION['eventfinalquantity'], $_SESSION['eventfinalprice'], $_SESSION['eventpackingcharges']);
}
?>

