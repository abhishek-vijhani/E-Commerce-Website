<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Choco Melange</title>
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

<link rel="stylesheet" type="text/css" href="css/styles.css" />
<script language="javascript" type="text/javascript" src="scripts/mootools-1.2.1-core.js"></script>
<script language="javascript" type="text/javascript" src="scripts/mootools-1.2-more.js"></script>
<script language="javascript" type="text/javascript" src="scripts/slideitmoo-1.1.js"></script>
<script language="javascript" type="text/javascript">
	
</script>
<link rel="stylesheet" href="css/lightbox.css" type="text/css" media="screen" />
	

<script src="js/lightbox.js" type="text/javascript"> </script>

</head>

<body id="home">

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
            <!--<div id="templatemo_search">
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
    
    <div id="templatemo_middle">
    	<img src="simple/crunch.jpg" alt="Image 01" />
    	<h1 style="font-family:Calibri"><u>Simple</u></h1>
        <p>Chocolate is not just a food item made from the seeds of a cacao tree. It is a path, a path to happiness, a path to heart, and a path of joy.<br><br> Used in many desserts like pudding, cakes, candy, and ice cream, it can be a solid form like a candy bar or in a liquid form like hot chocolate.</p>
        <a href="#" class="buy_now">Browse All Products</a>
    </div> <!-- END of middle -->
	<br>
	<br>
	<br>
	<br>
	<br>
    <br>
    <div id="">
        	<!--<h2 style="font-family:Calibri">Simple </h2>-->
        	<div class="col col_14 product_gallery">
            	<a href="almond.php"><img src="EditedSimple/almond.jpg"  /></a>
                <h3>Almond </h3>
                <p class="product_price"> Rs 550</p>
                <a href="almond.php" >View Product</a>
            </div>        	
            <div class="col col_14 product_gallery">
            	<a href="fruit&nut.php"><img src="EditedSimple/fruit&nut.jpg"/></a>
                <h3>Fruit and Nut</h3>
                <p class="product_price">Rs 550</p>
                <a href="fruit&nut.php" >View Product</a>
            </div>        	
            <div class="col col_14 product_gallery no_margin_right">
            	<a href="plain.php"><img src="EditedSimple/plain.jpg" /></a>
                <h3>Plain</h3>
                <p class="product_price">Rs 550</p>
                <a href="plain.php" >View Product</a>
            </div>
            
			
            
            <!--<h2 style="font-family:Calibri"></h2>-->
            <div class="col col_14 product_gallery">
            	<a href="milkplain.php"><img src="EditedSimple/whiteplain.jpg"/></a>
                <h3>Milk Plain</h3>
                <p class="product_price">Rs 550</p>
                <a href="milkplain.php" >View Product</a>
            </div>        	
            <div class="col col_14 product_gallery">
            	<a href="crunch.php"><img src="EditedSimple/crunch.jpg" /></a>
                <h3>Crunch</h3>
                <p class="product_price">Rs 550</p>
                <a href="crunch.php" >View Product</a>
            </div>        	
            <div class="col col_14 product_gallery no_margin_right">
            	<a href="butterscotch.php"><img src="EditedSimple/butterscotch.jpg"/></a>
                <h3>Butter Scotch</h3>
                <p class="product_price">Rs 550</p>
                <a href="butterscotch.php" >View Product</a>
            </div>   
				
				
				<h2 style="font-family:Calibri"></h2>
            <div class="col col_14 product_gallery">
            	<a href="caramel.php"><img src="EditedSimple/caramel.jpg"/></a>
                <h3>Caramel</h3>
                <p class="product_price">Rs 550</p>
                <a href="caramel.php" >View Product</a>
            </div>        	
            <div class="col col_14 product_gallery">
            	<a href="mint.php"><img src="EditedSimple/mint.jpg" /></a>
                <h3>Mint</h3>
                <p class="product_price">Rs 550</p>
                <a href="mint.php" >View Product</a>
            </div>        	
            <div class="cleaner h50"></div>
           <h4>Suggested For You</h4>
        	<div class="col col_14 product_gallery">
            	<a href="cafe.php"><img src="EditedExotic/cafe.jpg" alt="Product 01" /></a>
                <h3>Cafe</h3>
                <p class="product_price">Rs 950</p>
                <a href="cafe.php" >View Product</a>
            </div>        	
            <div class="col col_14 product_gallery">
            	<a href="oreo.php"><img src="EditedExotic/oreo.jpg" alt="Product 02" /></a>
                <h3>Oreo</h3>
                <p class="product_price">Rs 950</p>
                <a href="oreo.php" >View Product</a>
            </div>        	
            <div class="col col_14 product_gallery no_margin_right">
            	<a href="assortedchoc.php"><img src="EditedAssorted/chocolate.jpg" alt="Product 03" /></a>
                <h3>Assorted</h3>
                <p class="product_price">Rs 750</p>
                <a href="assorted.php" >View Product</a>
            </div>
            
            
            
                   	
            
           
            <div class="cleaner"></div>
       <!-- END of content -->
        <div class="cleaner"></div>
     <!-- END of main --> 
    
        
        
        
    
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