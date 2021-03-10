<?php
ob_start();
session_start();
require_once 'config/connect.php';
if (isset($_SESSION['customer'])) {
	$email = $_SESSION['customer'];
}
include 'inc/header.php';
include 'inc/nav.php';
if (isset($_GET['id']) & !empty($_GET['id'])) {
	$id = $_GET['id'];
	$prodsql = "SELECT * FROM products WHERE id=$id";
	$prodres = mysqli_query($connection, $prodsql);
	$prodr = mysqli_fetch_assoc($prodres);
} else {
	header('location: index.php');
}
if (isset($_SESSION['customerid'])) {
	$uid = $_SESSION['customerid'];
}
if (isset($_POST) & !empty($_POST)) {
	$review = filter_var($_POST['review'], FILTER_SANITIZE_STRING);
	$revsql = "INSERT INTO reviews (pid, uid, review) VALUES ($id, $uid, '$review')";
	$revres = mysqli_query($connection, $revsql);
	if ($revres) {
		$smsg = "Review Submitted Successfully";
	} else {
		$fmsg = "Failed to Submit Review";
	}
}

?>


<div class="menu-wrap">
	<input type="checkbox" class="toggler">
	<div class="hamburger">
		<div></div>
	</div>
	<div class="menu">
		<div>
			<div>
				<ul>
				<li><a href="engineans.php">SHOP</a></li>
					<li><a href="view-order.php">My Orders</a></li>
					<li><a href="wishlist.php">Whishlist</a></li>
					<li><a href="cart.php">Cart</a></li>
					<li><a href="logout.php">Logout</a></li>
				</ul>
			</div>
		</div>
	</div>
</div>

<section id="content" style="background-color: #2282FF; min-height:100vh;">
	<h1 style="color: #FFF; text-align:left; margin:2rem; font-weight:100;">SHOP</h1>
	<hr>
	<div class="content-blog">
		<div class="container">
			<div class="row">
				<div class="col-md-10 col-md-offset-1" id="psingle">
					<?php if (isset($fmsg)) { ?><div class="alert alert-danger" role="alert"> <?php echo $fmsg; ?> </div><?php } ?>
					<?php if (isset($smsg)) { ?><div class="alert alert-success" role="alert"> <?php echo $smsg; ?> </div><?php } ?>
					<div class="row">
						<div class="col-sm-10 col-md-5">

							<img src="<?php echo $prodr['thumb']; ?>" class="img-responsive" style="max-height: 50vh; z-index=0" alt="Product Img" />

						</div>
						<div class="col-md-7 product-single">
							<h2 class="product-single-title no-margin"><?php echo $prodr['name']; ?></h2>
							<div class="space10"></div>
							<div class="p-price" style="color: #6441A5;">&#8377; <?php echo $prodr['priceid']; ?>.00/-</div>
							<!-- <p><?php echo $prodr['description']; ?></p> -->
							<form method="get" action="addtocart.php">
								<div class="product-quantity">
									<span>Quantity:</span>
									<input type="hidden" name="id" value="<?php echo $prodr['id']; ?>">
									<input type="text" name="quant" placeholder="1">
								</div>
								<div class="shop-btn-wrap">
									<input style="background-color: #6441A5; border:none;" type="submit" class="button btn-small" value="Add to Cart">
								</div>
							</form>
							<a href="addtowishlist.php?id=<?php echo $prodr['id']; ?>" style="color: #666;">Add to WishList</a>
							
						</div>
					</div>
					<div class="clearfix space30"></div>
					<div class="tab-style3">
						<!-- Nav Tabs -->
						<div class="align-center mb-40 mb-xs-30">
							<ul class="nav nav-tabs tpl-minimal-tabs animate">
								<li class="active col-md-6">
									<a aria-expanded="true" href="#mini-one" data-toggle="tab">Overview</a>
								</li>

								<!--	<li class="col-md-4">
									<a aria-expanded="false" href="#mini-two" data-toggle="tab">Product Info</a>
								</li> -->
								<li class="col-md-6">
									<a aria-expanded="false" href="#mini-three" data-toggle="tab">Reviews</a>
								</li>
							</ul>
						</div>
						<!-- End Nav Tabs -->
						<!-- Tab panes -->
						<div style="height: auto;" class="tab-content tpl-minimal-tabs-cont align-center section-text">
							<div style="" class="tab-pane fade active in" id="mini-one">
								<p><?php echo $prodr['description']; ?></p>
							</div>

<?php include 'inc/footer.php' ?>
							
																																												