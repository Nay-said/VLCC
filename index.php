<html lang="en">
<?php session_start() ?>
<head>
<title>VLCC Official</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="styles/main_styles.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
</head>

<body>

	<div class="super_container">
	<!-- Header -->	
	<header class="header">
		<!-- Header Main -->
		<div class="header_main">
			<div class="container">
				<div class="row">

					<!-- Logo -->
					<div class="logo_container col-lg-2 col-sm-3 col-3">	
							<div class="logo"><img src="images/Crystal.png" alt="Company Logo" width="80%"></div>					
					</div>

					<!-- Search Box -->
					<div class="SearchArea col-lg-5 col-12 order-lg-2 order-3 text-lg-left text-right">
						<div class="Company Name">
							<p style="font-size:20px; color: #000000 "><b>Vanya Luxury Crystal Classics</b></p>
						</div>
						
						<div class="header_search">
								<div class="header_search_form_container">
									<form action="products.php" method="post" class="header_search_form">
										<input type="search" required="required" class="header_search_input" placeholder="Search Here...">
										<button type="submit" class="header_search_button trans_300" value="Submit"><img src="images/search.png" alt=""></button>
									</form>
								</div>
						</div>
					</div>
					
					<!-- Cart -->
					<div class="col-lg-2 col-9 order-2 text-lg-left text-right">			
							<div class="cart">								
									<div class="cart_icon">
										<a href="cart.php"><img src="images/cart.png"  width="25%"></a>
									</div>
									<div class="cart_text">Shopping Cart</div>
							</div>
					</div>
					
					<!-- Log in Box -->
					<div class="login_box_container col-lg-3 col-9 order-lg-3">
					<!--If user haven't sign in yet-->		
					<?php 
						if (!isset($_SESSION['user'])){?>

						<form id="log_in" method="post" action="login.php">
							User Name:
						   <input type="text" name="username" required="required" placeholder="Your User Name">
						   <br>
							Password:
						   <input type="text" name="password" required="required" placeholder="Your Password">
						   <input class="button" name="login" type="submit" value="Log in">
						   <input type="button" value="Register" class="button" onclick="location.href='register.php'"/>
						   <div class="clear"></div> 
						</form> 
							<!--If user have signed in-->
							<?php }
							else{
							?>
							<div>
							<b>Welcome!</b>
							<?php echo $_SESSION['user']?><br/>
							<a href="register.php?action=edit">View or Edit Your Profile</a><br/>
							<a href="orderhistory.php">View Your Order History</a><br/>>
							<a href="signout.php">Sign Out</a>
							</div>
							<?php } ?>
					</div>
				</div>		
			</div>
		</div>
		
		<!-- Main Navigation -->
		<nav class="main_nav">
			<div class="container">
				<div class="row">
					<div class="col">
						
						<!-- Categories Menu -->
						<div class="main_nav_content d-flex flex-row">
							<div class="cat_menu_container">
								<div class="cat_menu_title">
									<div class="cat_menu_text">▷ Our Products</div>
								</div>

								<ul class="cat_menu" style="display: none">
									<li><a href="products.php">All Our Products <i class="fas fa-chevron-right ml-auto"></i></a></li>
									<li><a href="#">Whiskey Set <i class="fas fa-chevron-right ml-auto"></i></a></li>
									<li><a href="#">Decanter<i class="fas fa-chevron-right"></i></a></li>
									<li><a href="#">Flute Set<i class="fas fa-chevron-right"></i></a></li>
									<li><a href="wine_set.php">Wine Glass<i class="fas fa-chevron-right"></i></a></li>
									<li><a href="#">Tumbler<i class="fas fa-chevron-right"></i></a></li>
									<li><a href="#">Vase<i class="fas fa-chevron-right"></i></a></li>
									<li><a href="swarovski.php">Swarovski<i class="fas fa-chevron-right"></i></a></li>
								</ul>
							</div>

							<!-- Main Nav Menu -->
							<div class="ml-auto">
								<ul class="nav">
									<li><a href="index.php"><u>Home</u><i></i></a></li>
									<li><a href="contact.php">Contact Us<i></i></a></li>
									<li><a href="about.php">About Us<i></i></a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</nav>
	</header>	

	<!--Item -->
	<div class="product_page_container">
		<div class="welcome"><h5>Welcome to Vanya Luxury Crystal Classics!</h5></div>
		
		<div class="item_box1">				
				<div class="content">
					<div class="title">Featured Products: </div>
					<div class="owl-carousel owl-theme row">
						<div class="slide_products">
							<div class="image"><img src="images/image1.jpg"></div>
						</div>	
						<div class="slide_products">
							<div class="image"><img src="images/image2.jpg"></div>
						</div>	
						<div class="slide_products">
							<div class="image"><img src="images/crystalware.jpg"></div>
						</div>
					</div>	
				</div>
		</div>
		<div class="item_box2">
			<div class="title2">Best Sller: </div>
			<div class="static_image"><img src="images/image4.jpg"></div>
			<div class="static_image"><img src="images/image5.jpg"></div>
			<div class="static_image"><img src="images/image6.jpg"></div>
			<div class="static_image"><img src="images/image7.jpg"></div>
			<div class="clear"></div>   
		</div>
	</div>	
	
	
	<!-- Footer -->
	<footer class="footer">
		<div class="container">
			<div class="row">
				<div class="col-lg-5">
						<div class="company_name_container">
							<div><b>Vanya Luxury Crystal Classics Official Website</b></div>
						</div>
						<div class="phone">▷ Call Us </div>
						<div class="number">+64 021 123 456</div>
						<div class="footer_social">
						<ul>
								<li>▷ Share:</li>
								<li><a href="#"><img src="images/f.png" width="20px" height="20px"></a></li>
								<li><a href="#"><img src="images/i.png" width="20px" height="20px"></a></li>
							</ul>
						</div>
				</div>
				<div class="col-lg-4">
					<div class="address">
						<div><b>▷ Our Address:</b></div>
						<br>
						<div>450 Queen St.</div>
						<div>Auckland, New Zealand</div>
					</div>
				</div>
				<div class="copyright col-lg-3">
					<div><b>Copyright@VLCC ltd.</b></div><br/>
					<div>▷ Terms & Condtitions</div><br/>
					<div>▷ Policies</div><br/>
					<a href="adminlogin.php">▷ Admin Login</a>
				</div>
			</div>
		</div>
	</footer>
</div>
<script src="js/jquery-3.3.1.min.js"></script>
<script src="styles/bootstrap4/bootstrap.min.js"></script>
<script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
</body>
<script>
	//get information after "?" in url
	function GetRequest() {
	var url = location.search; 
	var theRequest = new Object();
	if (url.indexOf("?") != -1) {
		var str = url.substr(1);
		strs = str.split("&");
		for(var i = 0; i < strs.length; i ++) {
			theRequest[strs[i].split("=")[0]]=(strs[i].split("=")[1]);
		}
	}
	return theRequest;
	}	
	
	
	$(".cat_menu_title").click(function () {
		$(".cat_menu").toggle();
    })
	
	$('.owl-carousel').owlCarousel({
    items:3,
    loop:true,
    margin:30,
	autoplay:true,
	autoplayTimeout:1500,
    responsive:{
        678:{
            mergeFit:true
        },
        1000:{
            mergeFit:false
        }
    }
});
$("#log_in").validate();
       		 $.validator.setDefaults({
           		 submitHandler: function() {
                	alert("");
            }
      		  });


$(function () {
  if(GetRequest()["login"]=="false"){
            alert("Sorry, log in failed, something is wrong!");
  }
  if(GetRequest()["login"]=="true"){
            alert("Welcome! Log in successful!");
  }
});

</script>
</html>