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
									<form action="#" class="header_search_form">
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
					
					<!-- No Log in Box In This Page-->
					
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
	<?php
		$id = "";
		$firstname = "";
		$lastname = "";
		$email = "";
		$password = "";
		$username =  "";
		$city =  "";
		$phone =  "";
		$suburb =  "";
		$address = "";
		$postcode= "";
		$gender =  "";
		$dob =  "";
		$usertitle = "";
		$title="Register";
		
		if(!empty($_GET["action"])){
			if($_GET["action"] == "edit"){
				$username = $_SESSION['username'];
				$query="SELECT * FROM user WHERE username='$username'";
				$result=mysqli_query($conn,$query) or die ("Sorry"."<br/><br/>" .mysqli_error());
				$row=mysqli_fetch_assoc($result);

				$title = "Edit Account Pofile";
				$id = $row["id"];
				$firstname = $row["firstname"];
				$lastname = $row["lastname"];
				$email = $row["email"];
				$password = $row["password"];
				$username =  $row["username"];
				$city =  $row["city"];
				$phone =  $row["phone"];
				$suburb =  $row["suburb"];
				$address =  $row["address"];
				$gender =  $row["gender"];
				$dob =  $row["dob"];
				$dob = new DateTime($dob);
				$dob = $dob->format("Y-m-d");
				$postcode = $row["postcode"];
			}
		}
	?>


	<div class="register_container">
        <h1 class="register"><?php echo $title?></h1>
        <hr>
        <div class="register_form">
			<form id="register_from" name="contact-form" method="post" action="signup.php" >
				<?php
				if(!empty($_GET["action"])) {

					if ($_GET["action"] == "edit") {
						echo "<input type='hidden' value='edit' name='action' />
						<input type='hidden' value='".$id."' name='id'/>"; 
					}
				}
				?>
				<div class="form_content">Your Titile:</div> 
				<select name="usertitle" required="required">
					<option value="A" selected="selected"> Mr.</option>
					<option value="B"> Mrs. </option>
					<option value="C"> Miss </option>
				</select><br>
				<div class="form_content">Your Gender:</div> 
				<select name="gender" required="required">
						<option value="A" selected="selected"> Male</option>
						<option value="B"> Female </option>
						<option value="C"> Other </option>
				</select><br>
				
				<div class="form_content">Your Name:</div>  

				<input type="text" name="username" required="required" placeholder="User Name" value="<?php echo $username?>"><br><br>  
				<input type="text" name="firstname" required="required" placeholder="First Name" value="<?php echo $firstname?>"><br><br>
				<input type="text" name="lastname" required="required" placeholder="Last Name" value="<?php echo $lastname?>">
				<div class="form_content">Your Password:</div>
				<input type="text" name="password" required="required" placeholder="Password" value="<?php echo $password?>"><br><br>  
				<div class="form_content">Your Email:</div> 
				<input type="email" name="email" required="required" placeholder="Email" value="<?php echo $email?>">
				<div class="form_content">Your Phone Number:</div> 
				<input type="text" name="phone" required="required" placeholder="Phone Number" value="<?php echo $phone?>">
				<div class="form_content">Your Date of Birth:</div> 
				<input type="date" name="dob" required="required" placeholder="DB" value="<?php echo $dob?>">
				<div class="form_content">Your Address:</div> 
				<input type="text" name="city" required="required" placeholder="City" value="<?php echo $city?>"><br><br>
				<input type="text" name="suburb" required="required" placeholder="Suburb" value="<?php echo $suburb?>"><br><br>
				<input type="text" name="address" required="required" placeholder="address" value="<?php echo $address?>"><br><br>
				<input type="text" name="postcode" required="required" placeholder="Post Code" value="<?php echo $postcode?>">
				<div class="form_content">How did you hear about us?</div> 
				<select name="how" required="required">
						<option value="A" selected="selected"> From Ads</option>
						<option value="B"> Heard from Friends </option>
						<option value="C"> Other </option>
				</select><br>
				<div class="form_content">Are you interested in receving offers from us?</div> 
				<input type="radio" name="type" value="Yes"/>Yes
				<input type="radio" name="type" value="No"/>No<br><br>
				<input type="submit" name="submit" class="submit_button" value="Submit">
			</form>
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
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="styles/bootstrap4/bootstrap.min.js"></script>
	<script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
	<script src="http://static.runoob.com/assets/jquery-validation-1.14.0/dist/jquery.validate.min.js"></script>
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
            });

			$("#register_from").validate();
       		 $.validator.setDefaults({
           		 submitHandler: function() {
                	alert("");
            }
      		  });

			$("#log_in").validate();
       		 $.validator.setDefaults({
           		 submitHandler: function() {
                	alert("");
            }
      		  });	
			
			$(function () {
        if(GetRequest()['register']){
			$("#register_from").validate();
			alert("Thank you! Registration Success! Please Log in now.");
			location.href = "index.php"
        }
        if(GetRequest()['update']){
            alert("Profile Update Success!");
            location.href = "index.php";
        }
    });
    </script>
</html>