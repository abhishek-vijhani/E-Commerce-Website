<?
session_start();
if(!isset($_SESSION['cart']))
{
	die("Error 404: User invalid.");
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Choco Melange - Checkout</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<!-- templatemo 341 web store -->
<!-- 
Web Store Template 
http://www.templatemo.com/preview/templatemo_341_web_store 
-->
<link href="css/templatemo_style.css" rel="stylesheet" type="text/css" />

<link rel="stylesheet" type="text/css" href="css/ddsmoothmenu.css" />
<script type="text/javascript" src="validation.js"></script> 

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


</head>

<body id="subpage">

<div id="templatemo_wrapper">
	<div id="templatemo_header">
    	<div id="site_title">
        	<h1><img src="images/logo.png"></h1>
        </div>
		<?
			$s = 0;
			if(isset($_SESSION['cart']))
			{
				$s = count($_SESSION['cart']);
			}
			$con = mysqli_connect("localhost", "root", "password", "chocomelange");
		?>
        <div id="header_right">
            <ul type="none">                
                <li><a href ="shoppingcart.php"><img src="images/cart.png" /><font face="Calibri" size="+1">(<? echo $s; unset($s); ?>)</font></a>
				<font face="Calibri" size="+2">|<a href="trackorder.php">Track your order(Only for Non Event Orders)</a></font></li>
            </ul>
            <div class="cleaner"></div>
          
         </div> <!-- END -->
    </div> <!-- END of header -->    <div id="templatemo_menu" class="ddsmoothmenu">
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
       		<h2 style="position:relative; left:13px">Address and Final Review</h2>
            <h5 style="position:relative; left:13px"><strong>BILLING DETAILS</strong></h5>
            <div class="col col_13 checkout">
				<div style="position:relative; left:20px;">Enter your full name: </div>               				
				<form style="position:relative; left:20px;" autocomplete="off" action="payment.php" name="details" method="post">
                 <b><span id="span1" style="font-size:12px; color:red;"></span></b><input required="required" onchange="return checkname(document.details.fullname)" type="text" maxlength="30" name="fullname" style="width:300px;"  />
                Address:<br /> 
                <span style="font-size:10px">Must contain the landmarks and the floor number, if any.</span>
                <br /><b><span id="span2" style="font-size:12px; color:red;"></span></b>
              <input required="required" type="text" maxlength="40" name="address" style="width:300px;"  />
                City:<br /><span style="font-size:10px">Delhi and NCR areas only.</span><br />
                <b><span id="span3" style="font-size:12px; color:red;"></span></b>
                <select onchange="return cityvalidate()" name="citylist" style="width:300px;" >
                <option value="-1">Select City</option>
                <option value="Delhi">Delhi</option>
                <option value="Noida">Noida</option>
                <option value="Gurgaon">Gurgaon</option>
                <option value="0">Others</option>
                </select><br /><br />
                
                Pin Code:
                <br /><b><span id="span4" style="font-size:12px; color:red;"></span></b>
                <input required="required" onchange="return pinvalidate(document.details.pincode)" type="text" maxlength="6" name="pincode" style="width:300px;"  />
                <p><input type="checkbox" name="conditions" id="conditions" onchange="conditions()" value="1" />I have accepted the <a href="#">Terms of Use</a>.</p>
                <center> <input style="width:125px; height:25px" type="submit" name="submitcheckout" value="Proceed" />
                <input style="width:125px; height:25px;" type="reset" /></center><hr />
                <p style="font-family:Calibri; font-size:18px; color:#333333; position:relative; left:13px;">Your final cart:</p>
                
            </div>
            
            <div style="position:relative; left:40px" class="col col_13 checkout">
            	E-Mail Address:<br /><b><span id="span6" style="font-size:12px; color:red;"></span></b>
            	  <input required="required" onchange="return emailvalidate()" type="text" name="email" maxlength = "30"style="width:300px;"  />
                Mobile Number:
				<br /><span style="font-size:10px">Please specify your reachable phone number. YOU MAY BE GIVEN A CALL TO VERIFY AND COMPLETE THE ORDER.</span><br /><b><span id="span5" style="font-size:12px; color:red;"></span></b>
                <input required="required" onchange="return numbervalidate(document.details.number)" type="text" min="10" maxlength="10" name="number" style="width:300px;"  />
            </div>
            </form>
<center>
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
		$finalquantity = $finalquantity + $quantity;
		$total = $total + $price;
	}//end for
		if($finalquantity > 10)//classifying as bulk or retail and charging accordingly
		{
			$packingcharges = 200;
			$ordertype = "Bulk";
			$total = $total + $packingcharges;
			echo '<tr><td></td><td></td><td align="right">Packing Charges<sup>*</sup></td><td align="right" bgcolor="" style="font-family:Calibri; font-size:18px; color:#333333">₹'.$packingcharges.'</td></tr>';
			echo '<tr><td></td><td></td><td align="right" style="font-size:14px"><b>Total</b></td><td align="right" bgcolor="#CCCCCC" style="font-family:Calibri; font-size:22px; color:#333333"><b>₹'.$total.'</b></td></tr></table></center>';
			print($finalquantity);
			$_SESSION['finalprice'] = $total;
		}
		else
		{
			//$total = $total + $delivery;
			$ordertype = "Retail";
			//echo '<tr><td></td><td></td><td align="right">Order Type</td><td align="right" bgcolor="" style="font-family:Calibri; font-size:18px; color:#333333">'.$ordertype.'</td></tr>';
			echo '<tr><td></td><td></td><td align="right" style="font-size:14px"><b>Total</b></td><td align="right" bgcolor="#CCCCCC" style="font-family:Calibri; font-size:22px; color:#333333"><b>₹'.$total.'</b></td></tr></table></center>';
			$_SESSION['finalprice'] = $total;	
		}
?>
             <br /><p style="font-family:Calibri; font-size:18px; color:#333333; position:relative; left:13px;">Changed your mind? Head back to your <a href="shoppingcart.php">Shopping Cart</a>.</p>

            <div class="cleaner h50"></div>

		</div>
        <div class="cleaner"></div>
    </div> <!-- END of main -->
    
    <div id="templatemo_footer">
    	
         <div class="col col_16">
        	<h4>Navigate</h4>
            <ul class="footer_menu">
            	<li><a href="index.php">Home</a></li>
                <li><a href="product.php">Services</a></li>
                <li><a href="#">Shipping</a></li>
                <li><a href="about.php">Privacy</a></li>
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
            	<li><a href="https://www.twitter.com">Twitter</a></li>
                <li><a href="https://www.facebook.com">Facebook</a></li>
                <li><a href="https://www.youtube.com">Youtube</a></li>
                <li><a href="https://www.linkedin.com">LinkedIn</a></li> 
		  </ul>  
        </div>
        <div class="col col_13 no_margin_right">
        	<h4>About Us</h4>
            <p>An ex home made chocolate firm, which knows the taste, The Chocolate Lovers like and tries to deliver them with the best quality possible.</p>
        </div>
        
        <div class="cleaner h40"></div>
		<center>
			Copyright © 2012 Choco Melange 
		</center>
    </div> <!-- END of footer -->   
   
</div>

</body>
</html>
