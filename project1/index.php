<?php require_once("inc/header_part.php"); ?>
</head>
<body>
	<div id="whitebox">
<?php  	
	require_once("inc/banner.php"); 
	require_once("inc/menu.php"); 
?>
    <div class="container">
			<div id="slider" class="slider">
				<div class="slider-item active"><img src="images/slider1.jpg" alt="" class="img-fluid"></div>
				<div class="slider-item"><img src="images/slider2.jpg" alt="" class="img-fluid"></div>
				<div class="slider-item"><img src="images/slider3.jpeg" alt="" class="img-fluid"></div>
				<ul id="dots" class="list-inline dots"></ul>
			</div>
		</div> <!--end of container -->
		<div id="pageheading">
			<h1>Page Headings</h1>
		</div>
		<div> <!-- start of course -->
			<table id="product">
				<tr>
					<td>
						<img src="images/product1.jpeg" />
					</td>
					<td>
						<h4>Product name</h4>
						<p>
							Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veniam, repudiandae, voluptatem minima ipsum quia dolor accusamus magni aperiam esse quos non ea suscipit expedita dolore ad distinctio omnis sapiente consequatur!
						</p>
					</td>
					<td><img src="images/product1.jpeg" /></td>
					<td><h4>Product name</h4>
						<p>
							Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veniam, repudiandae, voluptatem minima ipsum quia dolor accusamus magni aperiam esse quos non ea suscipit expedita dolore ad distinctio omnis sapiente consequatur!
						</p></td>
				</tr>
				<tr>
					<td><img src="images/product1.jpeg" /></td>
					<td><h4>Product name</h4>
						<p>
							Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veniam, repudiandae, voluptatem minima ipsum quia dolor accusamus magni aperiam esse quos non ea suscipit expedita dolore ad distinctio omnis sapiente consequatur!
						</p></td>
					<td><img src="images/product1.jpeg" /></td>
					<td><h4>Product name</h4>
						<p>
							Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veniam, repudiandae, voluptatem minima ipsum quia dolor accusamus magni aperiam esse quos non ea suscipit expedita dolore ad distinctio omnis sapiente consequatur!
						</p></td>
				</tr>
			</table>
		</div> <!--end of course -->
		
		<div class="block">
			<div class="cell">
				<h4>samplel heading</h4>
				<p>
					Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto, explicabo debitis molestiae delectus saepe quas alias fuga. Placeat, minus ab iusto voluptate culpa nesciunt dicta exercitationem reprehenderit sapiente nisi beatae.
				</p>
			</div>
			
			<div class="cell">
				<h4>samplel heading</h4>
				<p>
					Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto, explicabo debitis molestiae delectus saepe quas alias fuga. Placeat, minus ab iusto voluptate culpa nesciunt dicta exercitationem reprehenderit sapiente nisi beatae.
				</p>
			</div>
			
			<div class="cell">
				<h4>samplel heading</h4>
				<p>
					Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto, explicabo debitis molestiae delectus saepe quas alias fuga. Placeat, minus ab iusto voluptate culpa nesciunt dicta exercitationem reprehenderit sapiente nisi beatae.
				</p>
			</div>
			
		</div> <!--end of block -->
		<div class="block">
			<div class="cell"><a data-fancybox="gallery" href="images/slider1.jpg"><img src="images/slider1.jpg"></a></div>
			<div class="cell"><a data-fancybox="gallery" href="images/slider2.jpg"><img src="images/slider2.jpg"></a></div>
			<div class="cell"><a data-fancybox="gallery" href="images/slider1.jpg"><img src="images/slider1.jpg"></a></div>
			<div class="cell"><a data-fancybox="gallery" href="images/slider2.jpg"><img src="images/slider2.jpg"></a></div>
		</div>
	<?php require_once("inc/footer.php"); ?>
    
	</div> <!--end of whitebox -->
	<?php 
		require_once("inc/slider_script.php"); 
		require_once("inc/script.php"); 
	?>
</body>
</html>