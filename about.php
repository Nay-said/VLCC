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
                
<!-- Content -->       
<div class="aboutus_content">
    <h1 class="aboutus">About Us</h1>   
    <div class="aboutus_container">
        
        <h5>
            Dear customer: Welcome to  Vanya Luxury Crystal Classics official website!
        </h5>
        <br><br>
        <p>
            Vanya Luxury Crystal Classics is a retail company mainly focus on products including Whiskey Set, 
            Decanter, Flute Set, Wine Glass, Tumbler, Vase and Décor Ornaments such as Swarovski.
 
        </p>
        <center><img src="images/Crystal.png"></center><br>
        <h5><center><b>
            We aim to provide our customers the best crystal ware in the market!
        </b></center></h5>
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
                        <div><b>Copyright@VLCC ltd.</b></div><br>
                        <div>▷ Terms & Condtitions</div><br>
                        <div href="">▷ Policies</div>
                    </div>
                </div>
            </div>
        </footer>
    </div>
</body>
<script src="js/jquery-3.3.1.min.js"></script>
<script src="styles/bootstrap4/bootstrap.min.js"></script>
<script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script>
        $(".cat_menu_title").click(function () {
            $(".cat_menu").toggle();
        });

		$("#log_in").validate();
       		 $.validator.setDefaults({
           		 submitHandler: function() {
                	alert("");
            }
      		  });	
</script>
</html>