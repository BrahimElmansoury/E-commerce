<!DOCTYPE html>
<html lang="en">

 	<head>
 		<!-- Meta Tags -->
		<meta charset="UTF-8">
		<meta name="author" content="Kamran Mubarik">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<!-- Title -->
 		<title>E-Commerce Online Shop</title>
 		<!-- Style Sheet -->
		<link rel="stylesheet" type="text/css" href="styleClient.css" />
		<!-- Javascript -->	
		<script type="text/javascript" src="js/jquery.min.js"></script>
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.css">
  		<script src="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.min.js"></script>
  		<script>
		    $(document).ready(function(){
		      $('.slider').bxSlider({
				  auto: true,
				  autoControls: true,
				  stopAutoOnClick: true,
				  pager: true
				});
		    });
		 </script>
 	</head>
<body>

	<header>
		<div class="container">
			<div class="brand">
				<div class="logo">
					<a href="index.html">
						<img src="img/icons/online_shopping.png">
						<div class="logo-text">
							<p class="big-logo">Ecommerce</p>
							<p class="small-logo">online shop</p>
						</div>
					</a>
				</div> <!-- logo -->
				<div class="shop-icon">
					<div class="dropdown">
						<img src="img/icons/account.png">
						<div class="dropdown-menu">
							<ul>
								<li><a href="account.html">My Account</a></li>
								<li><a href="orders.html">My Orders</a></li>
							</ul>
						</div>
					</div>
					<div class="dropdown">
						<img src="img/icons/heart.png">
						<div class="dropdown-menu wishlist-item">
							<table border="1">
								<thead>
									<tr>
										<th>Image</th>
										<th>Product Name</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td><img src="img/product/img1.jpg"></td>
										<td>product name</td>
									</tr>
									<tr>
										<td><img src="img/product/img2.jpg"></td>
										<td>product name</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
					<div class="dropdown">
						<img src="img/icons/shopping_cart.png">
						<div class="dropdown-menu cart-item">
							<table border="1">
								<thead>
									<tr>
										<th>Image</th>
										<th>Product Name</th>
										<th class="center">Price</th>
										<th class="center">Qty.</th>
										<th class="center">Amount</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td><img src="img/product/img1.jpg"></td>
										<td>product name</td>
										<td class="center">1200</td>
										<td class="center">2</td>
										<td class="center">2400</td>
									</tr>
									<tr>
										<td><img src="img/product/img2.jpg"></td>
										<td>product name</td>
										<td class="center">1500</td>
										<td class="center">2</td>
										<td class="center">3000</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
				</div> <!-- shop icons -->
			</div> <!-- brand -->

			<div class="menu-bar">
				<div class="menu">
					<ul>
						<li><a href="index.html">Home</a></li>
						<li><a href="shop.html">Shop</a></li>
						<li><a href="about.html">About</a></li>
						<li><a href="contact.html">Contact</a></li>
					</ul>
				</div>
				<div class="search-bar">
					<form>
						<div class="form-group">
							<input type="text" class="form-control" name="search" placeholder="Search">
							<img src="img/icons/search.png">
						</div>
					</form>
				</div>
			</div> <!-- menu -->
		</div> <!-- container -->
	</header> <!-- header -->

	<div class="container">
		<main>
			<div class="slider">
				<div class="slide-1">
					<img src="img/slider/slide-1.jpg">
					<div class="slider-text">
						<h3>Sale 40% off</h3>
						<h2>Men's Watches</h2>
						<a href="#">Shop Now</a>
					</div>
				</div>
				<div class="slide-2">
					<img src="img/slider/slide-2.jpg">
					<div class="slider-text">
						<h3>Sale 20% off</h3>
						<h2>Women's Fashion</h2>
						<a href="#">Shop Now</a>
					</div>
				</div>
				<div class="slide-3">
					<img src="img/slider/slide-3.jpg">
					<div class="slider-text">
						<h3>Sale 50% off</h3>
						<h2>Women's Collection</h2>
						<a href="#">Shop Now</a>
					</div>
				</div>		
			</div> <!-- slider -->

			<div class="new-product-section">
				<div class="product-section-heading">
					<h2>Tranding Products <img src="img/icons/increase.png"></h2>
					<h3>Most selling product for the month</h3>
				</div>
				<div class="product-content">
					<div class="product">
						<a href="product.html">
							<img src="img/product/img1.jpg">
						</a>
						<div class="product-detail">
							<h3>Men's / Watches</h3>
							<h2>Gray Color Men's Watch</h2>
							<a href="#">Add to Cart</a>
							<p>Rs.4500/-</p>
						</div>						
					</div>
					<div class="product">
						<a href="product.html">
							<img src="img/product/img2.jpg">
						</a>
						<div class="product-detail">
							<h3>Men's / Pants</h3>
							<h2>Levi's Jeans Pant</h2>
							<a href="#">Add to Cart</a>
							<p>Rs.2000/-</p>
						</div>
					</div>
					<div class="product">
						<a href="product.html">
							<img src="img/product/img3.jpg">
						</a>
						<div class="product-detail">
							<h3>Men's / Watches</h3>
							<h2>Black Men's Watch</h2>
							<a href="#">Add to Cart</a>
							<p>Rs.4000/-</p>
						</div>
					</div>
					<div class="product">
						<a href="product.html">
							<img src="img/product/img4.jpg">
						</a>
						<div class="product-detail">
							<h3>Men's / Shoes</h3>
							<h2>Nick Black Sneakers</h2>
							<a href="#">Add to Cart</a>
							<p>Rs.3200/-</p>
						</div>
					</div>
					<div class="product">
						<a href="product.html">
							<img src="img/product/img5.jpg">
						</a>
						<div class="product-detail">
							<h3>Glasses</h3>
							<h2>Wood Frame Sun Glass</h2>
							<a href="#">Add to Cart</a>
							<p>Rs.1200/-</p>
						</div>
					</div>
					<div class="product">
						<a href="product.html">
							<img src="img/product/img6.jpg">
						</a>
						<div class="product-detail">
							<h3>Women's / Hand Bags</h3>
							<h2>Leather Hand Bag</h2>
							<a href="#">Add to Cart</a>
							<p>Rs.3800/-</p>
						</div>
					</div>
					<div class="product">
						<a href="product.html">
							<img src="img/product/img7.jpg">
						</a>
						<div class="product-detail">
							<h3>Men's / Shoes</h3>
							<h2>Men's Sneaker</h2>
							<a href="#">Add to Cart</a>
							<p>Rs.3500/-</p>
						</div>
					</div>
					<div class="product">
						<a href="product.html">
							<img src="img/product/img8.jpg">
						</a>
						<div class="product-detail">
							<h3>Women's / Hand Bags</h3>
							<h2>Brown Leather Hand Bag</h2>
							<a href="#">Add to Cart</a>
							<p>Rs.5200/-</p>
						</div>
					</div>
				</div>
			</div> <!-- New Product Section -->

			<div class="collection">
				<div class="men-collection">
					<h2>Men's Collection</h2>
				</div>
				<div class="women-collection">
					<h2>Women's Collection</h2>
				</div>
			</div> <!-- Collection Section -->

			<div class="new-product-section">
				<div class="product-section-heading">
					<h2>Recommend Products <img src="img/icons/good_quality.png"></h2>
					<h3>OUR BEST PRODUCTS RECOMMENDED FOR YOU</h3>
				</div>
				<div class="product-content">
					<div class="product">
						<a href="product.html">
							<img src="img/product/img1.jpg">
						</a>
						<div class="product-detail">
							<h3>Men's / Watches</h3>
							<h2>Gray Color Men's Watch</h2>
							<a href="#">Add to Cart</a>
							<p>Rs.4500/-</p>
						</div>						
					</div>
					<div class="product">
						<a href="product.html">
							<img src="img/product/img2.jpg">
						</a>
						<div class="product-detail">
							<h3>Men's / Pants</h3>
							<h2>Levi's Jeans Pant</h2>
							<a href="#">Add to Cart</a>
							<p>Rs.2000/-</p>
						</div>
					</div>
					<div class="product">
						<a href="product.html">
							<img src="img/product/img3.jpg">
						</a>
						<div class="product-detail">
							<h3>Men's / Watches</h3>
							<h2>Black Men's Watch</h2>
							<a href="#">Add to Cart</a>
							<p>Rs.4000/-</p>
						</div>
					</div>
					<div class="product">
						<a href="product.html">
							<img src="img/product/img4.jpg">
						</a>
						<div class="product-detail">
							<h3>Men's / Shoes</h3>
							<h2>Nick Black Sneakers</h2>
							<a href="#">Add to Cart</a>
							<p>Rs.3200/-</p>
						</div>
					</div>
				</div>
			</div> <!-- Recommend Product Section -->
		</main> <!-- Main Area -->
	</div>

	<footer>
		<div class="container">
			<div class="footer-widget">
				<div class="widget">
					<div class="widget-heading">
						<h3>Important Link</h3>
					</div>
					<div class="widget-content">
						<ul>
							<li><a href="about.html">About</a></li>
							<li><a href="contact.html">Contact</a></li>
							<li><a href="refund.html">Refund Policy</a></li>
							<li><a href="terms.html">Terms & Conditions</a></li>
						</ul>
					</div>
				</div>
				<div class="widget">
					<div class="widget-heading">
						<h3>Information</h3>
					</div>
					<div class="widget-content">
						<ul>
							<li><a href="account.html">My Account</a></li>
							<li><a href="orders.html">My Orders</a></li>
							<li><a href="cart.html">Cart</a></li>
							<li><a href="checkout.html">Checkout</a></li>
						</ul>
					</div>
				</div>
				<div class="widget">
					<div class="widget-heading">
						<h3>Follow us</h3>
					</div>
					<div class="widget-content">
						<div class="follow">
							<ul>
								<li><a href="#"><img src="img/icons/facebook.png"></a></li>
								<li><a href="#"><img src="img/icons/twitter.png"></a></li>
								<li><a href="#"><img src="img/icons/instagram.png"></a></li>
							</ul>
						</div>						
					</div>
					<div class="widget-heading">
						<h3>Subscribe for Newsletter</h3>
					</div>
					<div class="widget-content">
						<div class="subscribe">
							<form>
								<div class="form-group">
									<input type="text" class="form-control" name="subscribe" placeholder="Email">
									<img src="img/icons/paper_plane.png">
								</div>
							</form>
						</div>						
					</div>
				</div>
			</div> <!-- Footer Widget -->
			<div class="footer-bar">
				<div class="copyright-text">
					<p>Copyright 2021 - All Rights Reserved</p>
				</div>
				<div class="payment-mode">
					<img src="img/icons/paper_money.png">
					<img src="img/icons/visa.png">
					<img src="img/icons/mastercard.png">
				</div>
			</div> <!-- Footer Bar -->
		</div>
	</footer> <!-- Footer Area -->

</body>

</html>