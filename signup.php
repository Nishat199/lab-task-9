<?php include 'main_header.php';
 require_once '../controllers/user_controller.php';
?>

<!--sign up starts -->
<div class="center-login">
	<h1 class="text text-center">Sign Up</h1>
	<form action="" method="post"class="form-horizontal form-material">
		<div class="form-group">
			<h4 class="text">Name</h4>
			<input type="text" name="name"class="form-control">
      <span style="color:red"> <?php echo $error_name; ?> </span>
		</div>
		<div class="form-group">
			<h4 class="text">Username</h4>
			<input type="text" name="username" class="form-control">
        <span style="color:red"> <?php echo $error_username; ?> </span>
		</div>
		<div class="form-group">
			<h4 class="text">Email</h4>
			<input type="text" name="email" class="form-control">
        <span style="color:red"> <?php echo $error_email; ?> </span>
		</div>
		<div class="form-group">
			<h4 class="text">Password</h4>
			<input type="password" name="password" class="form-control">
        <span style="color:red"> <?php echo $error_password; ?> </span>
		</div>
		<div class="form-group text-center">

			<input type="submit" class="btn btn-success" name="signup" value="Sign Up" class="form-control">
		</div>
</div>

<!--sign up ends -->
<?php include 'main_footer.php';?>