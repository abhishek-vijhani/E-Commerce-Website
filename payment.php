<?php
session_start();
if(isset($_SESSION['cart']))
{
	if(isset($_POST['submitcheckout']))
	{
	  if($_POST['fullname'] != "" && $_POST['address'] != "" && $_POST['email'] != "" && $_POST['number'] != "")
	  {
		  $fullname = $_POST['fullname'];
		  $address = $_POST['address'].', '.$_POST['citylist'].', '.$_POST['pincode'];
		  $email = $_POST['email'];
		  $number = $_POST['number'];
	  }
	  else//agar data mein se kuch by chance null aaye toh
	  {
		  die('Some error has occurred.');  
	  }
	}
	else//agar na hua ho
	{
		die('Error 404: Sumbit not found.');
	}
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
<script type="text/javascript" src="validation.js" /></script>
<style type="text/css">
.textimg {
    background:#FFFFFF url(images/card.jpg) no-repeat 4px 4px;
	background-position:right;
    padding-right:4px 4px 4px 22px;
    height:18px;
}
</style>
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
    <div id="templatemo_main_top">
        <p style="font-family:Calibri; left:13px; position:relative; font-size:35px; color:#333333"><img src="images/payment.png" /> Payment Information<hr /></p>   
    </div>
    <div id="templatemo_main">
        <div id="">
        <!-- Shit can be entered here  -->
          <br /><br /><br /><hr /><p style="font-family:Calibri; left:5px; position:relative; font-size:20px; color:#333333">Hello, <? echo $fullname; ?>!</p><p style="font-family:Calibri; left:5px; position:relative; font-size:20px; color:#333333">Final Amount to be paid is <strong>₹<? echo $_SESSION['finalprice']; ?></strong>.</p><p style="font-family:Calibri; left:5px; position:relative; font-size:20px; color:#333333">Please select a payment mode and enter the relevant details to perform a secure transaction.</p>
            <!-- Shit can be entered here too -->
            <form autocomplete="off" method="post" action="orderplace.php">
            <p style="font-family:Calibri; left:5px; position:relative; font-size:20px; color:#333333">Select a payment mode: 
            <select onchange="return paymentmode()" required="required" dropzone="move" name="payment_mode" id="payment_mode" title="Select a Payment Mode" style=" -webkit-border-radius: 10px;-moz-border-radius: 10px; border-radius: 10px;font-family:Calibri;font-size:18px;left:5px; position:relative;">
            <option value="0" selected="selected">----Choose an option----</option>
            <option value="cash">Cash On Delivery</option>
            <option value="credit">Credit Card</option>
            <option value="debit">Debit Card</option>
            <option value="-1">Net Banking</option>
            </select>
            
            <!-- Following is the list of banks which is hidden by default -->
            <div id="bank_head" style="font-family:Calibri; left:5px; position:relative; font-size:20px; color:#333333; visibility:;">Select your bank:
            <select required="required" dropzone="move" id="bank" name="bank" title="Various Banks" style=" -webkit-border-radius: 10px;-moz-border-radius: 10px; border-radius: 10px;font-family:Calibri;font-size:18px;left:5px; position:relative; visibility:;">
            <option disabled="disabled" value="0">===Top Banks===</option>
            <option value="Axis Bank">Axis Bank</option>
            <option value="SBI">State Bank Of India</option>
            <option value="ICICI">ICICI Bank</option>
            <option value="HDFC">HDFC Bank</option>
            <option value="Standard Charted">Standard Charted</option>
            <option value="HSBC">HSBC Bank</option>
            <option value="Union Bank of India">Union Bank of India</option>
            <option value="Punjab National Bank">Punjab National Bank</option>
            <option></option>
            <option disabled="disabled" value="0">===All Other Supported Banks===</option>
            <option value="Allahbad Bank">Allahbad Bank</option>
            <option value="Dena Bank">Dena Bank</option>
            <option value="Yes Bank">Yes Bank</option>
            <option value="Canara Bank">Canara Bank</option>
            <option value="Indian Overseas Bank">Indian Overseas Bank</option>
            <option value="Kotak Mahindra Bank">Kotak Mahindra Bank</option>            
            </select></div></p><hr />
            <!-- HERE ENDS THE BANK LIST -->
            
            <div id="card_details" name="card_details" style="font-family:Calibri; position:relative;left:155px; font-size:20px; color:#333333; visibility:hidden;">
            <input onchange="return cardnumber()" required="required" maxlength="16" class="textimg" type="text" id="cardno" name="cardno" placeholder="Card Number" style="height:30px;width:400px;font-family:Calibri;font-size:20px;position:relative; visibility:; -webkit-border-radius: 10px;-moz-border-radius: 10px; border-radius: 10px;" /><br />
            <img src="combinedcards.jpg" style="height:35px; width:120px; visibility:" id="card_icon" /><br /><br />
            <input required="required" type="month" name="card_month" id="card_month" value = "YYYY/MM" style="width:230px; font-family:Calibri;font-size:20px;position:relative; visibility:; -webkit-border-radius: 10px;-moz-border-radius: 10px; border-radius: 10px;" />&nbsp;Expiry Date&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input onchange="return cardcvv()" required="required" type="password" maxlength="3" name="card_cvv" id="card_cvv" placeholder="CVV" style="width:70px; font-family:Calibri;font-size:20px;position:relative; visibility:; -webkit-border-radius: 10px;-moz-border-radius: 10px; border-radius: 10px;" /><img src="images/cvv.jpg" style="height:30px; width:50px;top:7px; position:relative;" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input onchange="return debitpin()" required="required" type="password" placeholder="ATM Pin" maxlength="4" name="debit_pin" id="debit_pin" style="width:100px; font-family:Calibri;font-size:20px;position:relative; visibility:; -webkit-border-radius: 10px;-moz-border-radius: 10px; border-radius: 10px;" />
            <br /><br />
            <input onchange="return cardname()" required="required" type="text" name="card_holder" id="card_holder"  style="text-transform:uppercase; height:30px;width:400px;font-family:Calibri;font-size:20px;position:relative; visibility:; -webkit-border-radius: 10px;-moz-border-radius: 10px; border-radius: 10px;" placeholder="Name on Card" /><br /><br />
            <input type="submit" name="payment" id="payment" style="height:30px; width:90px; visibility:;" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<!--<input type="reset" name="resetpayment" value="Reset" style="height:30px; width:90px;" />-->
            </div>
            
            </form>
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

</body>
</html>
<?
if(isset($_SESSION['cart']))
{
	if(!isset($_SESSION['details']))
	{
		$_SESSION['details'] = array();
		$_SESSION['details']['fullname'] = $fullname;
		$_SESSION['details']['address'] = $address;
		$_SESSION['details']['email'] = $email;
		$_SESSION['details']['number'] = $number;
		print_r($_SESSION['details']);
	}
	else if(isset($_SESSION['details']))
	{
		die('Some error with parsing details.');
	}
}
?>