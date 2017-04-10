<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Choco Melange - Contact</title>
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
          <!--  <div id="templatemo_search">
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
    	
        
        
        <div id="content">
        	<h2>Contact Information</h2>
			
            <div class="col col_13">
            <p>Please enter your details if you want us to contact you regarding any query/suggestion/recomendation.</p>
            <div id="contact_form">
               <form method="post" name="contact" action="#">
                    
                    <label for="author">Name:</label> <input type="text" id="author" name="author" class="required input_field" />
                    <div class="cleaner h10"></div>
						
                    <label for="email">Email:</label> <input type="text" id="email" name="email" class="validate-email required input_field" />
                    <div class="cleaner h10"></div>
                        
                    <label for="subject">Subject:</label> <input type="text" name="subject" id="subject" class="input_field" />
                    <div class="cleaner h10"></div>
        
                    <label for="text">Message:</label> <textarea id="text" name="text" rows="0" cols="0" class="required"></textarea>
                    <div class="cleaner h10"></div>
 					
					<input type="submit" value="Send" id="submit" name="submit" class="submit_btn float_l" />
					<input type="reset" value="Reset" id="reset" name="reset" class="submit_btn float_r" />
					
                </form>
            </div>
		</div>
        <div class="col col_13">
        	<h5>Location One</h5>
            Choco Melange Store <br />
            BW - 62D, Shalimar Bagh<br />
            New Delhi, India<br /><br />
			<strong>Phone:</strong> 099-99-213-212<br />
            <strong>Email:</strong> <a href="mailto:contact@company.in">services@chocomelange.in</a> <br />
            <div class="cleaner divider"></div>
			
			<div class="cleaner h30"></div>
			
            <h5>Location Two</h5>
            Choco Melange Dream World<br />
            BB - 66A, Shalimar Bagh<br />
            New Delhi, India<br /><br />
			<strong>Phone:</strong> 099-99-213-212<br />
            <strong>Email:</strong> <a href="mailto:contact@company.in">services@chocomelange.in</a> <br />           
        </div>
        
        <div class="cleaner h30"></div>
        
        <iframe width="660" height="300" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps/embed?pb=!1m27!1m12!1m3!1d3499.443247576509!2d77.15311429680864!3d28.706296685540885!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m12!1i0!3e6!4m3!3m2!1d28.7057085!2d77.15392969999999!4m5!1s0x390d02299e1e234b%3A0xaf2cbd20d7ac1e2a!2sBW-62%2C+Gyan+Shakti+Mandir+Marg%2C+West+Shalimar+Bagh%2C+Shalimar+Bagh%2C+New+Delhi%2C+Delhi!3m2!1d28.706291999999998!2d77.15542099999999!5e0!3m2!1sen!2sin!4v1415863155565"></iframe>
            
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