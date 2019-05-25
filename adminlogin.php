<?php session_start() ?>

<center>
<h1>Admin Login</h1>
<hr>
<div>
	<!--If user haven't sign in yet-->		
	<?php 
		if (!isset($_SESSION['user'])){?>

		<form id="log_in" method="post" action="login.php">
		User Name:
		<input type="text" name="username" required="required" placeholder="Your User Name">
		<br/><br/>
		Password:
		<input type="text" name="password" required="required" placeholder="Your Password"><br/><br/>
		<input class="button" name="login" type="submit" value="Log in">
		
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
 </center>