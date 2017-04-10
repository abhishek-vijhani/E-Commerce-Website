<?php
session_start();

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
			if(isset($_SESSION['cart']))
			{
				$s = count($_SESSION['cart']);
			}
		?>
        <div id="header_right">
            <ul type="none">                
                <li><a href ="shoppingcart.php"><img src="images/cart.png" /><font face="Calibri" size="+1">(<? echo $s; unset($s); ?>)</font></a>
				<font face="Calibri" size="+2">|<a href="trackorder.php">Track your order (Only for Non Event Orders)</a></font></li>
            </ul>
            <div class="cleaner"></div>
           <!-- <div id="templatemo_search">
                <form action="#" method="get">
                  <input type="text" value="Search" name="keyword" id="keyword" title="keyword" onfocus="clearText(this)" onblur="clearText(this)" class="txt_field" />
                  <input type="submit" name="Search" value="" alt="Search" id="searchbutton" title="Search" class="sub_btn"  />
                </form>
            </div>-->
         </div> <!-- END -->
    </div> <!-- END of header -->    
    <div id="templatemo_menu" class="ddsmoothmenu">
        <ul>
            <li><a href="index.php" class="selected">Home</a></li>           
            	<li><a href="productdetails.php">Products</a>
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
        	<p style="font-family:Calibri; left:13px; position:relative; font-size:35px; color:#333333"><img src="images/icon_trk_odr.jpg" /> Track Your Order</p><hr />

            <div class="col col_13 no_margin_right">

			</div><br />
            
            <form action="" method="post">
            <p style="font-family:Calibri; left:13px; position:relative; font-size:20px; color:#333333">Enter the Order ID here: <input type = "text" name="orderid" /></p>
            <p style="font-family:Calibri; left:13px; position:relative; font-size:20px; color:#333333">Enter the associated Email ID here: <input type="text" name="email" /></p>
            <center><input style="width:125px; height:25px" type="submit" name="trackorder" value="Track Order" />
            <input style="width:125px; height:25px;" type="reset" /></center>
            </form>
 <?
 if(isset($_POST['trackorder']))
 {
	 if($_POST['orderid'] != "" && $_POST['email'] != "")
	 {
	   $orderid = $_POST['orderid'];
	   $email = $_POST['email'];
	   $productId = array();
	   $productQty = array();
	   
	   $con = mysqli_connect("localhost", "root", "password", "chocomelange");
	   $query = "SELECT * FROM `order` where order_id = '$orderid';";
	   $result = mysqli_query($con, $query);
	   if(!$result)
	   {
		   die('An error in our database system has occurred.');
	   }
	   $tempcheck = mysqli_num_rows($result);
	   if($tempcheck != 0)
	   {
		   $resultRow = mysqli_fetch_assoc($result);
		   $customerid = $resultRow['customer_id'];
		   $orderprice = $resultRow['order_price'];
		   $orderstatus = $resultRow['order_status'];
		   $date = $resultRow['order_date'];
		   $newdate = $date + 8;
	   }
	   else
	   {
		   die('Order not found');
	   }
	  /* $getProductQuery = "SELECT * FROM `order_map` WHERE order_id = '$orderid';";
	   $getProductResult = mysqli_query($con, $getProductQuery);
	   if(!$getProductResult)
	   {
		   die('An Error Occured In Our Database System.');
	   }
	   if(mysql_num_rows($getProductResult) != 0)
	   {
		   		$productId[] = $getProductRows['product_id'];
				$productQty[] = $getProductRows['order_weight'];
	   }
	   else if(mysql_num_rows($getProductResult) == 0)
	   {
			die('No order found.');   
	   }*/
	   $getcustomerquery = "SELECT * FROM `customer` WHERE customer_id = $customerid AND customer_email = '$email';";
	   $getcustomerresult = mysqli_query($con, $getcustomerquery);
	   if(!$getcustomerresult)
	   {
		   die('We are having some issues. Please try later.');
	   }
	   if(mysqli_num_rows($getcustomerresult) != 0)
	   {
		   $getuserrows = mysqli_fetch_assoc($getcustomerresult);
		   $address = $getuserrows['customer_address'];
		   $name = $getuserrows['customer_name'];
	   }
	   else
	   {
			die('You\'ve either entered wrong Order ID or Wrong Email.');  
	   }
	}
 echo '<p style="font-family:Calibri; font-size:24px; color:#333333; position:relative; left:5px">Hi, '.$name.'!</p>';
 echo '<p style="font-family:Calibri; font-size:22px; color:#333333; position:relative; left:5px">We\'ve found your Order!</p>';
 echo '<p style="font-family:Calibri; font-size:22px; color:#333333; position:relative; left:5px">The Current Order Status of your Order ID <b>'.$orderid.' </b> is : <b>'.$orderstatus .'</b>.</p>';
 
 echo '<p style="font-family:Calibri; font-size:22px; color:#333333; position:relative; left:5px">The Delivery address is <b>'.$address.'</b>.<br />
 The Date of Order is <b>'.$date.'</b>. The Delivery Date of the order is <b>'.date('d/M/Y', mktime(0, 0, 0, -1, $newdate, 2015)).'</b><sup>*</sup>.</p>';
 
 echo '<p style="font-family:Calibri; font-size:22px; color:#333333; position:relative; left:5px"> If you find any of detail wrong, please visit our <a href="contact.php">Contact Us</a> and drop us a query. We\'ll look into is as soon as possible. :)</p>';
 
 echo '<p style="font-family:Calibri; font-size:14px; color:#333333; position:relative; left:5px"><sup>*</sup>The customer will be informed about the delivery before or on the date of delivery by SMS or Email.</p>';
 }
 ?>
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
