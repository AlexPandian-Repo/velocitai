<?php
ob_start();
session_start();
require_once 'config/connect.php';
if (!isset($_SESSION['customer']) & empty($_SESSION['customer'])) {
	header('location: login.php');
}
if (isset($_SESSION['customer'])) {
	$email = $_SESSION['customer'];
}
include 'inc/header.php';
include 'inc/nav.php';
$uid = $_SESSION['customerid'];
if (isset($_SESSION['cart'])) {
	$cart = $_SESSION['cart'];
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
<!-- SHOP CONTENT -->
<section id="content" style="background-color: #2282FF; min-height:100vh;">
	<h1 style="color: #FFF; text-align:left; margin:2rem; font-weight:100;">SHOP</h1>
	<hr>
	<!-- <div class="addmargi"></div>
	<div class="page_header text-center">
		<h2 style="color: #fff;">My Account</h2>
	</div> -->
	<div class="content-blog content-account">
		<div class="container">
			<div class="row">

				<div class="col-md-12">

					<h3 style="color: #fff;">Recent Orders</h3>
					<br>
					<table class="cart-table account-table table table-bordered table-striped" style="background-color: #f4f4f4;">
						<thead>
							<tr>
								<th style="background-color: #333;">Order</th>
								<th style="background-color: #333;">Date</th>
								<th style="background-color: #333;">Status</th>
								<th style="background-color: #333;">Payment Mode</th>
								<th style="background-color: #333;">Total</th>
								<th style="background-color: #333;"></th>
							</tr>
						</thead>
						<tbody>

							<?php
							$ordsql = "SELECT * FROM orders WHERE uid='$uid'";
							$ordres = mysqli_query($connection, $ordsql);
							while ($ordr = mysqli_fetch_assoc($ordres)) {
							?>
								<tr>
									<td>
										<?php echo $ordr['id']; ?>
									</td>
									<td>
										<?php echo $ordr['timestamp']; ?>
									</td>
									<td>
										<?php echo $ordr['orderstatus']; ?>
									</td>
									<td>
										<?php echo $ordr['paymentmode']; ?>
									</td>
									<td>
										&#8377; <?php echo $ordr['totalprice']; ?>/-
									</td>
									<td>
										<a href="view-order.php?id=<?php echo $ordr['id']; ?>" style="color: #6441A5;">View</a>
										<?php if ($ordr['orderstatus'] != 'Cancelled') { ?>
											| <a href="cancel-order.php?id=<?php echo $ordr['id']; ?>">Cancel</a>
										<?php } ?>
									</td>
								</tr>
							<?php } ?>
						</tbody>
					</table>

					<br>
					<br>
					<br>

					<div class="ma-address" style="background-color:#f4f4f4;">
						<h3 style="color: #6441A5;">My Address</h3>
						<p>The following address will be used on the checkout page by default.</p>

						<div class="row">
							<div class="col-md-6">
								<h4 style="color: #6441A5;">My Address <a href="edit-address.php">Edit</a></h4>
								<?php
								$csql = "SELECT u1.firstname, u1.lastname, u1.address1, u1.address2, u1.city, u1.state, u1.country, u1.company, u.email, u1.mobile, u1.zip FROM users u JOIN usersmeta u1 WHERE u.id=u1.uid AND u.id=$uid";
								$cres = mysqli_query($connection, $csql);
								if (mysqli_num_rows($cres) == 1) {
									$cr = mysqli_fetch_assoc($cres);
									echo "<p>" . $cr['firstname'] . " " . $cr['lastname'] . "</p>";
									echo "<p>" . $cr['address1'] . "</p>";
									echo "<p>" . $cr['address2'] . "</p>";
									echo "<p>" . $cr['city'] . "</p>";
									echo "<p>" . $cr['state'] . "</p>";
									echo "<p>" . $cr['country'] . "</p>";
									echo "<p>" . $cr['company'] . "</p>";
									echo "<p>" . $cr['zip'] . "</p>";
									echo "<p>" . $cr['mobile'] . "</p>";
									echo "<p> <b>" . $cr['email'] . "</b></p>";
								}
								?>
							</div>

							<div class="col-md-6">

							</div>
						</div>



					</div>

				</div>
			</div>
		</div>
	</div>
</section>

<?php include 'inc/footer.php' ?>