
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Choco Melange - Shopping Cart</title>
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

</script>

<script language="javascript" type="text/javascript">
function clearText(field)
{
	if (field.defaultValue == field.value) field.value = '';
	else if (field.value == '') field.value = field.defaultValue;
}
</script>
<script type="text/javascript">
</script>

</head>

<body id="subpage">

<div id="templatemo_wrapper">
	<div id="templatemo_header">
    	<div id="site_title">
        	<h1><img src="images/logo.png"></h1>
        </div><?
			session_start();
			$s = 0;
			if(isset($_SESSION['cart']))
			{
				$s = count($_SESSION['cart']);
			}
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
    </div> <!-- END of header -->
    
<div id="templatemo_menu" class="ddsmoothmenu">
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
    	
       
       
        <div id=""><center>
        <?php
		if(isset($_SESSION['cart']))
		{
			  echo '<h2>Your Shopping Cart</h2>';
		}
		else
		  echo '<h2>Your Shopping Cart is empty.</h2>';
		?>
<?php
if(isset($_SESSION['cart']))
{	
	$total = 0;
	$con = mysqli_connect("localhost", "root", "password", "chocomelange");
	if(mysqli_connect_error())
	{
		echo 'An error has occurred while connecting to database. Error No.: '.mysqli_errno($con).'. '.mysqli_error($con);
	}
	
	echo '<table border="" width="700px" cellspacing="0" cellpadding="5">';
	echo '<tr bgcolor="#CCCCCC">';
	echo '<th width = "90" align = "center">Name </th>';
	echo '<th width="100" align="center">Quantity<sup>*</sup> (in KGs) </th> ';
	echo '<th width="80" align="right">Price<sup>*</sup> (₹\KG) </th>'; 
	echo '<th width="80" align="right">Total (in ₹) </th>'; 
	echo '<th width="90"> </th>';
	echo '</tr>';
	$code;
	$k;
	$quantity = 0;
	$_SESSION['quantity'] = 0;
	for($index = 0; $index < count($_SESSION['cart']); $index++)
	{
        	$code = $_SESSION['cart'][$index]['code'];
			//if(!isset($code))
			//break;
			$quantity = $_SESSION['cart'][$index]['qty'];
			$_SESSION['quantity'] = $_SESSION['quantity'] + $quantity;
			
			$query = "SELECT * FROM product WHERE product_id = $code;";
			$result = mysqli_query($con, $query);
			if(!$result)
			{
				echo 'An error has occurred.'.mysqli_errno($con);
			}
			$row = mysqli_fetch_assoc($result);
			$price = $quantity * $row['product_price'];
			?>
			<tr>
            <td><? echo $row['product_name']?></td>
			<td align="center"><input readonly="readonly" type="text" value="<?=$quantity?>" style="width: 25px; text-align: center" /></td>
            <td align="right">₹<? echo $row['product_price']?></td> 
            <td align="right">₹<? echo $price?></td>
            <td align="center">
			<? 
				  echo '<form action="" method="post">
				  <input type="submit" name = "remove'.$code.'" value="Remove" />
				  <input type="hidden" name="test" value="'.$index.'" />';
				  echo '</form> </td>';
			?>
			</tr>
            <?
			$total = $total + $price;
	}
		echo '<tr><td colspan="2" align="right"  height="40px">Have you modified your basket? Please click here to <a href="shoppingcart.php"><b>Update</b></a><br><a href="unset.php"><strong>Click Here</strong></a> to empty cart.</td>';
	echo '<td align="right" style="background:#ccc; font-weight:bold"> Total: </td>';
	echo '<td align="right" bgcolor="#cccccc" style="font-weight:bold">₹'.$total.'</td>';
	echo '</tr></table>';	
}//end if cart
else if(!isset($_SESSION['cart']))
{
	echo '<h4>Your Shopping Cart<sup>**</sup> lives to serve. Give it purpose--fill it with our large variety of products.<br>Continue shopping on <a href="index.php">Chocomelange.in\'s Homepage</a>.</h4>';
}
?>
<?php
if(isset($_SESSION['cart']))
{
	echo '<div style="float:right; width: 215px; margin-top: 20px;">';
	echo '<div class="checkout"><a href="checkout.php" class="more">Proceed to Checkout</a></div>';
	echo '<div class="cleaner h20"></div>';
	echo '<div class="continueshopping"><a href="javascript:history.back()" class="more">Continue Shopping</a></div>';
	echo '</div>';
}
?>
            
		</div>
        <div id="">
        <p><sup>*</sup>The price and availability of items at Chocomelange.in are subject to change. <br /><sup>**</sup>The shopping cart is a temporary place to store a list of your items and reflects each item's most recent price.</p></div>
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
            <p>A home made chocolate firm, which knows the taste, The Chocolate Lovers like and aims to deliver them with the best quality possible at their doorstep.</p>
        </div>
        
        <div class="cleaner h40"></div>
		<center>
			Copyright � 2012 Choco Melange
		</center>
    </div> <!-- END of footer -->   
   
</div>
</body>
</html>
<?
if(isset($_POST['test']) && $_POST['test'] !="")
{
  $k = $_POST['test'];
  if(count($_SESSION['cart']) <= 1)
  {
	  unset($_SESSION['cart']);
  }
  else
  {
	unset($_SESSION['cart'][$k]);
	sort($_SESSION['cart']);
  }
}
?>