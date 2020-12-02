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
					<form class="checkout-form" method="post" action="submit/checkout.php" novalidate>
						<div class="cf-title">Billing Address</div>
						<div class="row">
							<div class="col-12">
								<input type="text" name="fullname" placeholder="Full name" required />
							</div>
						</div>
						<div class="row">
							<div class="col-12">
								<input type="text" placeholder="Phone no." required name="phone" />
							</div>
						</div>
						
						<div class="row address-inputs">
							<div class="col-md-12">
								<input type="text" placeholder="Address" required name="address_1" />
								<input type="text" placeholder="Address line 2" required name="address_2" />
							</div>
							<div class="col-md-6">
								<input type="text" placeholder="Zip code" required name="zipcode" />
							</div>
							<div class="col-md-6">
								<input type="text" name="city" placeholder="city" required />
								
							</div>
							<div class="col-md-12">
							remarks
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