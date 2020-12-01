<?php require_once("inc/header-part.php") ?>
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
                    <form action="" method="post">
	                        <div class="form-group">
                                <input type="mail" placeholder="Email" class="form-control" required />
	                        </div>
	                        <div class="form-group">
                                <input type="password" placeholder="Password" class="form-control" required />
	                        </div>
	                        <div class="form-group">
                                <input type="password" placeholder="Confirm Password" class="form-control" required />
	                        </div>
                            
	                        <div class="form-group">
                                <input type="number" placeholder="Mobile" class="form-control" required />
	                        </div>
	                        <div class="form-group">
	                            <input type="button" value="Register" class="btn btn-danger btn-block">
	                        </div>
                        </form>	                       
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