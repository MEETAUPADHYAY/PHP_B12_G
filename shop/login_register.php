<?php
	session_start();
	require('../vendor/autoload.php');
    use Rakit\Validation\Validator;
	require_once("inc/header-part.php");
	$register_errors = null;
	$register_inputs = null;
	if(isset($_SESSION['register_errors'])==true)
	{
		$register_errors = unserialize($_SESSION['register_errors']);
		$register_inputs = unserialize($_SESSION['register_inputs']);
	}
	
?>
</head>
<body>
<?php require_once("inc/menu.php") ?>
	<div class="page-top-info">
		<div class="container">
			<h4>Login | Register</h4>			
		</div>
	</div>
	<section class="m-3">
	    <div class="row">
	        <div class="col-lg-6 col-md-6 col-sm-12 col-12">
	            <div class="card">
	                <div class="card-header">
	                    <h5>Login</h5>
	                </div>
	                <div class="card-body">
	                    <form action="" method="post">
	                        <div class="form-group">
                                <input type="mail" placeholder="Email" class="form-control" required />
	                        </div>
	                        <div class="form-group">
                                <input type="password" placeholder="Password" class="form-control" required />
	                        </div>
	                        <div class="form-group">
	                            <input type="button" value="Login" class="btn btn-danger btn-block">
	                        </div>
                        </form>
	                </div>
	            </div>
	        </div> 
	        
	        <div class="col-lg-6 col-md-6 col-sm-12 col-12">
	            <div class="card">
	                <div class="card-header">
	                    <h5>Register</h5>
	                </div>
	                <div class="card-body">
                    <form action="submit/register.php" method="post" novalidate>
	                        <div class="form-group">
                                <input type="email" name="email" placeholder="Email" class="form-control" required  value="<?php echo $register_inputs['email']; ?>" />
							
							<?php 
	                            if($register_errors!=null && isset($register_errors['email']))
	                                echo "<div class='p-1 bg-danger text-white'>" . $register_errors['email'] . "</div>";
	                        ?>
	                        </div>
	                        <div class="form-group">
                                <input type="password" name="password" placeholder="Password" class="form-control" value="<?php echo $register_inputs['password']; ?>" required />
							<?php 
	                            if($register_errors!=null  && isset($register_errors['password']))
	                                echo "<div class='p-1 bg-danger text-white'>" . $register_errors['password'] . "</div>";
	                        ?>
	                        </div>
	                        <div class="form-group">
                                <input type="password" name="confirm_password" placeholder="Confirm Password" class="form-control" value="<?php echo $register_inputs['confirm_password']; ?>"  required />
							<?php 
	                            if($register_errors!=null  && isset($register_errors['confirm_password']))
	                                echo "<div class='p-1 bg-danger text-white'>" . $register_errors['confirm_password'] . "</div>";
	                        ?>
	                        </div>
                            
	                        <div class="form-group">
                                <input type="number" name="mobile" placeholder="Mobile" class="form-control" value="<?php echo $register_inputs['mobile']; ?>" required />
                                <?php 
	                            if($register_errors!=null  && isset($register_errors['mobile']))
	                                echo "<div class='p-1 bg-danger text-white'>" . $register_errors['mobile'] . "</div>";
	                        ?>
	                        </div>
	                        <div class="form-group">
	                            <input type="submit" value="Register" class="btn btn-danger btn-block">
	                        </div>
                        </form>	  
                        <?php 
                        if($register_errors!=null)
                        {
							foreach($register_errors as $key=>$value)
							{
								echo "<br/> $value";
							}
						}
                        ?>
	                </div>
	            </div>
	        </div>
	    </div>
	</section>
	<?php 
		require_once("inc/footer.php"); 
		require_once("inc/script.php"); 	
	?>
	</body>
</html>