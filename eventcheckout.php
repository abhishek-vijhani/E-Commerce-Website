<?
session_start();
if(!isset($_SESSION['event']))
{
	header('Location: index.php');
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
<link href="../Website/css/templatemo_style.css" rel="stylesheet" type="text/css" />

<link rel="stylesheet" type="text/css" href="../Website/css/ddsmoothmenu.css" />
<script type="text/javascript" src="../Website/validation.js"></script> 

<script type="text/javascript" src="../Website/js/jquery.min.js"></script>
<script type="text/javascript" src="../Website/js/ddsmoothmenu.js">

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
        	<h1><img src="../Website/images/logo.png"></h1>
        </div><?
			$s = 0;
			if(isset($_SESSION['cart']))
			{
				$s = count($_SESSION['cart']);
			}
		?>
        <div id="header_right">
            <ul type="none">                
                <li><a href ="../Website/shoppingcart.php"><img src="../Website/images/cart.png" /><font face="Calibri" size="+1">(<? echo $s; unset($s); ?>)</font></a>
				<font face="Calibri" size="+2">|<a href="../Website/trackorder.php">Track your order(Only for Non Event Orders)</a></font></li>
            </ul>
            <div class="cleaner"></div>
          
         </div> <!-- END -->
    </div> <!-- END of header -->    <div id="templatemo_menu" class="ddsmoothmenu">
        <ul>
            <li><a href="../Website/index.php" class="selected">Home</a></li>            
            <li><a href="../Website/productdetails.php">Products</a>
<ul>
                    <li><a href="../Website/simple.php">Simple</a></li>
                    <li><a href="../Website/assorted.php">Assorted</a></li>
                    <li><a href="../Website/exotic.php">Exotic</a></li>
					<li><a href="#">Events</a>
					<ul>
					<li><a href="../Website/premarriage.php">Pre Marriage Parties</a></li>
                    <li><a href="../Website/birthday.php">Birthdays</a></li>
                    <li><a href="../Website/marriage.php">Marriage</a></li>
					<li><a href="../Website/co-operate.php">Co-Operate Gifts</a></li>
                    <li><a href="../Website/specialoccassion.php">Special Occassions</a></li>
                    </ul>
					</li>
              </ul>
            </li>
            <li><a href="../Website/about.php">About</a>
                
            </li>
            <li><a href="../Website/faqs.php">FAQs</a></li>
            
            <li><a href="../Website/contact.php">Contact</a></li>
        </ul>
        <br style="clear: left" />
    </div> <!-- end of templatemo_menu -->
    
    <div class="cleaner h20"></div>
    <div id="templatemo_main_top"></div>
    <div id="templatemo_main">
        <div id="" style="position:relative; left:13px;">
       		<p style="font-family:Calibri; font-size:45px; color:#333333; position:relative; top:20px;">Booking Details</p><br /><br /></div><hr />
            <div id="" style="position:relative; left:13px;">
            <h5><strong><sup>*</sup> marked fields must not be left blank.</strong></h5>
            <div class="col col_13 checkout">
				                				
				<form autocomplete="off" action="../Website/eventorderplace.php" name="details" onsubmit="return validate()" method="post">
                <sup>*</sup>Full Name: <b><span id="span1" style="font-size:12px; color:red;"></span></b><input onchange="return name()" type="text" maxlength="30" name="fullname" style="width:300px;" />
                <sup>*</sup>Address:<br /> 
                <span style="font-size:10px">Must contain the landmarks and the floor number, if any.</span>
                <br /><b><span id="span2" style="font-size:12px; color:red;"></span></b>
              <input type="text" maxlength="40" name="address" style="width:300px;"  />
                <sup>*</sup>City:<br /><span style="font-size:10px">Delhi and NCR areas only.</span><br />
                <b><span id="span3" style="font-size:12px; color:red;"></span></b>
                <select name="citylist" style="width:300px;" >
                <option value="-1">Select City</option>
                <option value="Delhi">Delhi</option>
                <option value="Noida">Noida</option>
                <option value="Gurgaon">Gurgaon</option>
                <option value="0">Others</option>
                </select><br /><br />
                
                <sup>*</sup>Pin Code:
                <br /><b><span id="span4" style="font-size:12px; color:red;"></span></b>
                <input type="text" maxlength="6" name="pincode" style="width:300px;"  />
                           <center> <input style="width:125px; height:25px" type="submit" name="submitevent" value="Place Order" />
            <input style="width:125px; height:25px;" type="reset" /></center>
            </div>
            
            <div class="col col_13 checkout">
            	<sup>*</sup>E-Mail Address:<br /><b><span id="span6" style="font-size:12px; color:red;"></span></b>
            	  <input type="text" name="email" maxlength = "30"style="width:300px;"  />
                <sup>*</sup>Mobile Number:
				<br /><span style="font-size:10px">Please specify your reachable phone number. YOU MAY BE GIVEN A CALL TO VERIFY AND COMPLETE THE ORDER.</span><br /><b><span id="span5" style="font-size:12px; color:red;"></span></b>
                <input type="tel" maxlength="10" name="number" style="width:300px;"  />
                <sup>*</sup>Date of Delivery:<br /><input style="width:125px; height:25px" type="date" name="eventdate" id="eventdate" />
            </div>

            </form><br />
            <center>
	<table border="" width="700px" cellspacing="0" cellpadding="5">
	<tr bgcolor="#CCCCCC">
	<th width = "90" align = "center">Name </th>
	<th width="100" align="center">Quantity (in KGs) </th> 
	<th width="60" align="right">Price (in ₹) </th>
	<th width="60" align="right">Total </th>
    <th width="60" align="right"></th>
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
        <td align="center">
			<? 
				  echo '<form action="" method="post">
				  <input type="submit" name = "remove'.$code.'" value="Remove" />
				  <input type="hidden" name="test" value="'.$index.'" />';
				  echo '</form> </td>';
			?>
        </tr>
		<?
		$finalquantity = $finalquantity + $quantity;
		$total = $total + $price;
	}//end for
	$packingcharges=0;
		if($finalquantity > 10)//classifying as bulk or retail and charging accordingly
		{
			$packingcharges = 200;
			$ordertype = "bigevent";
			$total = $total + $packingcharges;
			echo '<tr><td></td><td align="right">Packing Charges<sup>*</sup></td><td align="right" bgcolor="" style="font-family:Calibri; font-size:18px; color:#333333">₹'.$packingcharges.'</td></tr>';
			echo '<tr><td></td><td></td><td></td><td align="right" style="font-size:14px"><b>Total</b></td><td align="right" bgcolor="#CCCCCC" style="font-family:Calibri; font-size:22px; color:#333333"><b>₹'.$total.'</b></td></tr></table></center>';
		}
		else
		{
			//$total = $total + $delivery;
			$ordertype = "smallevent";
			//echo '<tr><td></td><td></td><td align="right">Order Type</td><td align="right" bgcolor="" style="font-family:Calibri; font-size:18px; color:#333333">'.$ordertype.'</td></tr>';
			echo '<tr><td></td><td></td><td align="right" style="font-size:14px"><b>Total</b></td><td align="right" bgcolor="#CCCCCC" style="font-family:Calibri; font-size:22px; color:#333333"><b>₹'.$total.'</b></td></tr></table></center>';		
		}
		
?>
             <br /><p style="font-family:Calibri; font-size:18px; color:#333333; position:relative; left:13px;">Want to add more items? <a href="javascript:history.back()" class="continueshopping">Continue Shopping</a><br /><br />Changed something? <a href="eventcheckout.php">Refresh here.</a></p>
                
        <div class="cleaner h50"></div>              
		</div>
        <div class="cleaner"></div>
    </div> <!-- END of main -->
    
    <div id="templatemo_footer">
    	
         <div class="col col_16">
        	<h4>Navigate</h4>
            <ul class="footer_menu">
            	<li><a href="../Website/index.php">Home</a></li>
                <li><a href="../Website/product.php">Services</a></li>
                <li><a href="#">Shipping</a></li>
                <li><a href="../Website/about.php">Privacy</a></li>
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

<?
$_SESSION['eventordertype'] = $ordertype;
$_SESSION['eventfinalquantity'] = $finalquantity;
$_SESSION['eventfinalprice'] = $total;
$_SESSION['eventpackingcharges'] = $packingcharges;
?>
<?
if(isset($_POST['test']) && $_POST['test'] !="")
{
  $k = $_POST['test'];
  if(count($_SESSION['event']) <= 1)
  {
	  unset($_SESSION['event']);
  }
  else
  {
	unset($_SESSION['event'][$k]);
	sort($_SESSION['event']);
  }
}
?>