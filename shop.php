 <?php 
include("header.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="shop.css">
	<title>Home page</title>
</head>
<body>
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<h2>Trending <b>Products</b></h2>
			<div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="0">
				<!-- Carousel indicators -->
				<ol class="carousel-indicators">
					<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
					<li data-target="#myCarousel" data-slide-to="1"></li>
					<li data-target="#myCarousel" data-slide-to="2"></li>
				</ol>
				<!-- Wrapper for carousel items -->
				<div class="carousel-inner">
					<div class="item carousel-item active">
						<div class="row">
							<!--apple Ipad-->
							<div class="col-sm-3">
								<form action="manage-cart.php" method="POST">
									<div class="thumb-wrapper">
										<div class="img-box">
											<img src="https://fdn2.gsmarena.com/vv/bigpic/apple-ipad8-102-inches-2020.jpg" class="img-responsive img-fluid" alt="">
											</div>
										<div class="thumb-content">
														<h4>Apple Ipad</h4>
														<p class="item-price"><strike>$400.00</strike> <span>$369.00</span></p>
														<div class="star-rating">
															<ul class="list-inline">
																<li class="list-inline-item"><i class="fa fa-star"></i></li>
																<li class="list-inline-item"><i class="fa fa-star"></i></li>
																<li class="list-inline-item"><i class="fa fa-star"></i></li>
																<li class="list-inline-item"><i class="fa fa-star"></i></li>
																<li class="list-inline-item"><i class="fas fa-star-half-alt"></i></li>
															</ul>
														</div>
														<button type="submit" class="btn btn-primary" name="add_to_cart">Add to Cart</a>
														<input type="hidden" name="item_name" value="Apple Ipad">
														<input type="hidden" name="item_price" value="369.00">
										</div>
									</div>
								</form>
							</div>
							<!--sony headphones-->
							<div class="col-sm-3">
								<form action="manage-cart.php" method="POST">
									<div class="thumb-wrapper">
										<div class="img-box">
											<img src="https://images-na.ssl-images-amazon.com/images/I/61NloGWSa7L._AC_SX425_.jpg" class="img-responsive img-fluid" alt="">
										</div>
									    <div class="thumb-content">
														<h4>Sony Headphone</h4>
														<p class="item-price"><strike>$30.00</strike> <span>$23.99</span></p>
														<div class="star-rating">
															<ul class="list-inline">
																<li class="list-inline-item"><i class="fa fa-star"></i></li>
																<li class="list-inline-item"><i class="fa fa-star"></i></li>
																<li class="list-inline-item"><i class="fa fa-star"></i></li>
																<li class="list-inline-item"><i class="fa fa-star"></i></li>
																<li class="list-inline-item"><i class="far fa-star"></i></li>
															</ul>
														</div>
														<button type="submit" class="btn btn-primary" name="add_to_cart">Add to Cart</a>
														<input type="hidden" name="item_name" value="sony headphones">
														<input type="hidden" name="item_price" value="23.99">
										</div>
										</div>
								</form>
							</div>
							<!--macbook air-->
							<div class="col-sm-3">
								<form action="manage-cart.php" method="POST">
									<div class="thumb-wrapper">
										<div class="img-box">
											<img src="https://myshop.pk/pub/media/catalog/product/cache/26f8091d81cea4b38d820a1d1a4f62be/a/p/apple-macbook-air-myshop.pk03.jpg" class="img-responsive img-fluid" alt="">
										</div>
										<div class="thumb-content">
														<h4>Macbook Air</h4>
														<p class="item-price"><strike>$700.00</strike> <span>$649.00</span></p>
														<div class="star-rating">
															<ul class="list-inline">
																<li class="list-inline-item"><i class="fa fa-star"></i></li>
																<li class="list-inline-item"><i class="fa fa-star"></i></li>
																<li class="list-inline-item"><i class="fa fa-star"></i></li>
																<li class="list-inline-item"><i class="fa fa-star"></i></li>
																<li class="list-inline-item"><i class="fas fa-star-half-alt"></i></li>
															</ul>
														</div>
														<button type="submit" class="btn btn-primary" name="add_to_cart">Add to Cart</a>
														<input type="hidden" name="item_name" value="Macbook Air">
														<input type="hidden" name="item_price" value="649.00">
										</div>
									</div>
								</form>
							</div>
							<!--Nikon DSLR-->
							<div class="col-sm-3">
								<form action="manage-cart.php" method="POST">
									<div class="thumb-wrapper">
										<div class="img-box">
											<img src="https://cdn-4.nikon-cdn.com/e/Q5NM96RZZo-YRYNeYvAi9beHK4x3L-8u4h56I3YwHLAQ4G0XzTY4Dg==/Views/353_1590_D3500_left.png" class="img-responsive img-fluid" alt="">
										</div>
										<div class="thumb-content">
														<h4>Nikon DSLR</h4>
														<p class="item-price"><strike>$300.00</strike> <span>$250.00</span></p>
														<div class="star-rating">
															<ul class="list-inline">
																<li class="list-inline-item"><i class="fa fa-star"></i></li>
																<li class="list-inline-item"><i class="fa fa-star"></i></li>
																<li class="list-inline-item"><i class="fa fa-star"></i></li>
																<li class="list-inline-item"><i class="far fa-star"></i></li>
																<li class="list-inline-item"><i class="far fa-star"></i></li>
															</ul>
														</div>
														<button type="submit" class="btn btn-primary" name="add_to_cart">Add to Cart</a>
														<input type="hidden" name="item_name" value="Nikon DSLR">
														<input type="hidden" name="item_price" value="250.00">
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
					<div class="item carousel-item">
						<div class="row">
							<!--Sony Play Station-->
							<div class="col-sm-3">
									<form action="manage-cart.php" method="POST">
										<div class="thumb-wrapper">
											<div class="img-box">
												<img src="https://zahcomputers.pk/wp-content/uploads/2021/02/Play-Station-5-Price-in-Pakistan-01-435x435.jpg" class="img-responsive img-fluid" alt="">
											</div>
											<div class="thumb-content">
															<h4>Sony Play Station</h4>
															<p class="item-price"><strike>$290.00</strike> <span>$269.00</span></p>
															<div class="star-rating">
																<ul class="list-inline">
																	<li class="list-inline-item"><i class="fa fa-star"></i></li>
																	<li class="list-inline-item"><i class="fa fa-star"></i></li>
																	<li class="list-inline-item"><i class="fa fa-star"></i></li>
																	<li class="list-inline-item"><i class="fa fa-star"></i></li>
																	<li class="list-inline-item"><i class="far fa-star"></i></li>
																</ul>
															</div>
															<button type="submit" class="btn btn-primary" name="add_to_cart">Add to Cart</a>
															<input type="hidden" name="item_name" value="Sony Play Station">
															<input type="hidden" name="item_price" value="269.00">
											</div>
										</div>
									</form>
							</div>
							<!--Macbook Pro-->
							<div class="col-sm-3">
								<form action="manage-cart.php" method="POST">
									<div class="thumb-wrapper">
										<div class="img-box">
											<img src="https://myshop.pk/pub/media/catalog/product/cache/26f8091d81cea4b38d820a1d1a4f62be/a/p/apple-macbook-pro-myshop.pk04_1.jpg" class="img-responsive img-fluid" alt="">
										</div>
										<div class="thumb-content">
														<h4>Macbook Pro</h4>
														<p class="item-price"><strike>$950.00</strike> <span>$869.00</span></p>
														<div class="star-rating">
															<ul class="list-inline">
																<li class="list-inline-item"><i class="fa fa-star"></i></li>
																<li class="list-inline-item"><i class="fa fa-star"></i></li>
																<li class="list-inline-item"><i class="fa fa-star"></i></li>
																<li class="list-inline-item"><i class="fa fa-star"></i></li>
																<li class="list-inline-item"><i class="fas fa-star-half-alt"></i></li>
															</ul>
														</div>
														<button type="submit" class="btn btn-primary" name="add_to_cart">Add to Cart</a>
														<input type="hidden" name="item_name" value="Macbook Pro">
														<input type="hidden" name="item_price" value="869.00">
										</div>
									</div>
								</form>
							</div>
							<!--Bose Speaker-->
							<div class="col-sm-3">
								<form action="manage-cart.php" method="POST">
									<div class="thumb-wrapper">
										<div class="img-box">
											<img src="https://images-na.ssl-images-amazon.com/images/I/71X5EE0fvPL.jpg" class="img-responsive img-fluid" alt="">
										</div>
										<div class="thumb-content">
														<h4>Bose Speaker</h4>
														<p class="item-price"><strike>$950.00</strike> <span>$99.00</span></p>
														<div class="star-rating">
															<ul class="list-inline">
																<li class="list-inline-item"><i class="fa fa-star"></i></li>
																<li class="list-inline-item"><i class="fa fa-star"></i></li>
																<li class="list-inline-item"><i class="fa fa-star"></i></li>
																<li class="list-inline-item"><i class="fa fa-star"></i></li>
																<li class="list-inline-item"><i class="far fa-star"></i></li>
															</ul>
														</div>
														<button type="submit" class="btn btn-primary" name="add_to_cart">Add to Cart</a>
														<input type="hidden" name="item_name" value="Bose Speaker">
														<input type="hidden" name="item_price" value="99.00">
										</div>
									</div>
								</form>
							</div>
							<!--Samsung Galaxy S8-->
							<div class="col-sm-3">
								<form action="manage-cart.php" method="POST">
									<div class="thumb-wrapper">
										<div class="img-box">
											<img src="https://www.gizmochina.com/wp-content/uploads/2018/02/Samsung-Galaxy-S8-Plus-G955F_2.jpg" class="img-responsive img-fluid" alt="">
										</div>
										<div class="thumb-content">
														<h4>Samsung Galaxy S8</h4>
														<p class="item-price"><strike>$600.00</strike> <span>$569.00</span></p>
														<div class="star-rating">
															<ul class="list-inline">
																<li class="list-inline-item"><i class="fa fa-star"></i></li>
																<li class="list-inline-item"><i class="fa fa-star"></i></li>
																<li class="list-inline-item"><i class="fa fa-star"></i></li>
																<li class="list-inline-item"><i class="fas fa-star-half-alt"></i></li>
																<li class="list-inline-item"><i class="far fa-star"></i></li>
															</ul>
														</div>
														<button type="submit" class="btn btn-primary" name="add_to_cart">Add to Cart</a>
														<input type="hidden" name="item_name" value="Samsung Galaxy S8">
														<input type="hidden" name="item_price" value="569.00">
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
					<div class="item carousel-item">
						<div class="row">
							<!--Apple iPhone-->
							<div class="col-sm-3">
								<form action="manage-cart.php" method="POST">
									<div class="thumb-wrapper">
										<div class="img-box">
											<img src="https://www.gizmochina.com/wp-content/uploads/2019/09/Apple-iPhone-11-1.jpg" class="img-responsive img-fluid" alt="">
										</div>
										<div class="thumb-content">
														<h4>Apple iPhone</h4>
														<p class="item-price"><strike>$380.00</strike> <span>$349.00</span></p>
														<div class="star-rating">
															<ul class="list-inline">
																<li class="list-inline-item"><i class="fa fa-star"></i></li>
																<li class="list-inline-item"><i class="fa fa-star"></i></li>
																<li class="list-inline-item"><i class="fa fa-star"></i></li>
																<li class="list-inline-item"><i class="fa fa-star"></i></li>
																<li class="list-inline-item"><i class="far fa-star"></i></li>
															</ul>
														</div>
														<button type="submit" class="btn btn-primary" name="add_to_cart">Add to Cart</a>
														<input type="hidden" name="item_name" value="Apple iPhone">
														<input type="hidden" name="item_price" value=" 349.00">
										</div>
									</div>
								</form>
							</div>
							<!--Canon DSLR-->
							<div class="col-sm-3">
								<form action="manage-cart.php" method="POST">
									<div class="thumb-wrapper">
										<div class="img-box">
											<img src="https://hashmiphotos.com/wp-content/uploads/2019/10/1566949680_1502490.jpg" class="img-responsive img-fluid" alt="">
										</div>
										<div class="thumb-content">
														<h4>Canon DSLR</h4>
														<p class="item-price"><strike>$300.00</strike> <span>$250.00</span></p>
														<div class="star-rating">
															<ul class="list-inline">
																<li class="list-inline-item"><i class="fa fa-star"></i></li>
																<li class="list-inline-item"><i class="fa fa-star"></i></li>
																<li class="list-inline-item"><i class="fa fa-star"></i></li>
																<li class="list-inline-item"><i class="fa fa-star"></i></li>
																<li class="list-inline-item"><i class="fas fa-star-half-alt"></i></li>
															</ul>
														</div>
														<button type="submit" class="btn btn-primary" name="add_to_cart">Add to Cart</a>
														<input type="hidden" name="item_name" value="Canon DSLR">
														<input type="hidden" name="item_price" value="250.00">
										</div>
									</div>
								</form>
							</div>
							<!--Google Pixel-->
							<div class="col-sm-3">
								<form action="manage-cart.php" method="POST">
									<div class="thumb-wrapper">
										<div class="img-box">
											<img src="https://www.mytrendyphone.eu/images/Google-Pixel-5-128GB-Black-PIXEL-5-128B-16102020-01-p.jpg" class="img-responsive img-fluid" alt="">
										</div>
										<div class="thumb-content">
														<h4>Google Pixel</h4>
														<p class="item-price"><strike>$450.00</strike> <span>$418.00</span></p>
														<div class="star-rating">
															<ul class="list-inline">
																<li class="list-inline-item"><i class="fa fa-star"></i></li>
																<li class="list-inline-item"><i class="fa fa-star"></i></li>
																<li class="list-inline-item"><i class="fa fa-star"></i></li>
																<li class="list-inline-item"><i class="fa fa-star"></i></li>
																<li class="list-inline-item"><i class="far fa-star"></i></li>
															</ul>
														</div>
														<button type="submit" class="btn btn-primary" name="add_to_cart">Add to Cart</a>
														<input type="hidden" name="item_name" value="Google Pixel">
														<input type="hidden" name="item_price" value="418.00">
										</div>
									</div>
								</form>
							</div>
							<!--Apple Watch-->
							<div class="col-sm-3">
								<form action="manage-cart.php" method="POST">
									<div class="thumb-wrapper">
										<div class="img-box">
											<img src="https://images-na.ssl-images-amazon.com/images/I/71fwbMm1NBL._AC_SL1500_.jpg" class="img-responsive img-fluid" alt="">
										</div>
										<div class="thumb-content">
														<h4>Apple Watch</h4>
														<p class="item-price"><strike>$350.00</strike> <span>$330.00</span></p>
														<div class="star-rating">
															<ul class="list-inline">
																<li class="list-inline-item"><i class="fa fa-star"></i></li>
																<li class="list-inline-item"><i class="fa fa-star"></i></li>
																<li class="list-inline-item"><i class="fa fa-star"></i></li>
																<li class="list-inline-item"><i class="fas fa-star-half-alt"></i></li>
																<li class="list-inline-item"><i class="far fa-star"></i></li>
															</ul>
														</div>
														<button type="submit" class="btn btn-primary" name="add_to_cart">Add to Cart</a>
														<input type="hidden" name="item_name" value="Apple Watch">
														<input type="hidden" name="item_price" value="330.00">
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>

					<!-- Carousel controls -->
					<a class="carousel-control left carousel-control-prev" href="#myCarousel" data-slide="prev">
						<i class="fa fa-angle-left"></i>
					</a>
					<a class="carousel-control right carousel-control-next" href="#myCarousel" data-slide="next">
						<i class="fa fa-angle-right"></i>
					</a>
				</div>
			</div>
		</div>
    </div>
</div>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" integrity="sha512-RXf+QSDCUQs5uwRKaDoXt55jygZZm2V++WUZduaU/Ui/9EGp3f/2KZVahFZBKGH0s774sd3HmrhUy+SgOFQLVQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
		<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</body>
</html>