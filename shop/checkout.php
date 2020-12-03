<?php 
	session_start();
	require('../vendor/autoload.php');
	require_once("inc/header-part.php");
    use Rakit\Validation\Validator;
	$errors = null;
	$inputs = null;
	if(isset($_SESSION['errors'])==true)
	{
		$errors = unserialize($_SESSION['errors']);
		$inputs = unserialize($_SESSION['inputs']);
		unset($_SESSION['errors']);
		unset($_SESSION['inputs']);
	}
?>
</head>
<body>
<?php require_once("inc/menu.php") ?>
	<div class="page-top-info">
		<div class="container">
			<h4>Contact</h4>			
		</div>
	</div>
	<section class="checkout-section spad">
		<div class="container">
			<div class="row">
				<div class="col-lg-7 order-2 order-lg-1">
					<form  method="post" action="submit/checkout.php" novalidate>
						<div class="cf-title">Billing Address</div>
						<div class="row mb-2">
							<div class="col-12 ">
								<input type="text" class="form-control" name="fullname" placeholder="Full name" required value="<?php echo $inputs['fullname'] ?>" />
							<?php 
								if(isset($errors['fullname'])==true)
									echo "<div class='p-1 bg-danger text-white mb-2'>{$errors['fullname']}</div>";
							?>
							</div>
						</div>
						<div class="row  mb-2">
							<div class="col-12">
								<input type="text" class="form-control" placeholder="Phone no." required name="phone" value="<?php echo $inputs['phone'] ?>" />
							<?php 
								if(isset($errors['phone'])==true)
									echo "<div class='p-1 bg-danger text-white mb-2'>{$errors['phone']}</div>";
							?>
							</div>
						</div>
						
						<div class="row  mb-2">
							<div class="col-md-12">
								<input type="text" class="form-control" placeholder="Address" required name="address_1" value="<?php echo $inputs['address_1'] ?>" />
							<?php 
								if(isset($errors['address_1'])==true)
									echo "<div class='p-1 bg-danger text-white mb-2'>{$errors['address_1']}</div>";
							?>
							</div>
						</div>
						<div class="row  mb-2">
							<div class="col-md-12">
								<input type="text" class="form-control" placeholder="Address line 2" required name="address_2" value="<?php echo $inputs['address_2'] ?>" />
								<?php 
								if(isset($errors['address_2'])==true)
								echo "<div class='p-1 bg-danger text-white mb-2'>{$errors['address_2']}</div>";
								?>
							</div>
						</div>
						<div class="row  mb-2">
							<div class="col-md-12">
								<input type="text" class="form-control" placeholder="Zip code" required name="zipcode" value="<?php echo $inputs['zipcode'] ?>" />
							<?php 
								if(isset($errors['zipcode'])==true)
									echo "<div class='p-1 bg-danger text-white mb-2'>{$errors['zipcode']}</div>";
							?>
							</div>
							
						</div>
						<div class="row  mb-2">
							<div class="col-md-12">
								<input type="text" class="form-control" name="city" placeholder="city" required value="<?php echo $inputs['city'] ?>" />
							<?php 
								if(isset($errors['city'])==true)
									echo "<div class='p-1 bg-danger text-white mb-2'>{$errors['city']}</div>";
							?>
							</div>	
						</div>
						<div class="row  mb-2">
							<div class="col-md-12">
									remarks
							</div>
							<div class="col-md-12">
								<textarea class="form-control" required name="remarks" >
								
								</textarea>
							</div>
						</div>
						<button type="submit" class="site-btn submit-order-btn">Place Order</button>
					</form>
				</div>
				<div class="col-lg-4 order-1 order-lg-2">
					<div class="checkout-cart">
						<h3>Your Cart</h3>
						<ul class="product-list">
							<li>
								<div class="pl-thumb"><img src="theme/img/cart/1.jpg" alt=""></div>
								<h6>Animal Print Dress</h6>
								<p>$45.90</p>
							</li>
						
						</ul>
						<ul class="price-list">
							<li>Total<span>$99.90</span></li>
							<li>Shipping<span>free</span></li>
							<li class="total">Total<span>$99.90</span></li>
						</ul>
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