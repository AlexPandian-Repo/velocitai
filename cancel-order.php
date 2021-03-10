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
if (isset($_POST) & !empty($_POST)) {
	$cancel = filter_var($_POST['cancel'], FILTER_SANITIZE_STRING);
	$id = filter_var($_POST['orderid'], FILTER_SANITIZE_NUMBER_INT);
	$cansql = "INSERT INTO ordertracking (orderid, status, message) VALUES ('$id', 'Cancelled', '$cancel')";
	$canres = mysqli_query($connection, $cansql) or die(mysqli_error($connection));
	if ($canres) {
		$ordupd = "UPDATE orders SET orderstatus='Cancelled' WHERE id=$id";
		if (mysqli_query($connection, $ordupd)) {
			header('location: my-account.php');
		}
	}
}

$sql = "SELECT * FROM usersmeta WHERE uid=$uid";
$res = mysqli_query($connection, $sql);
$r = mysqli_fetch_assoc($res);
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
					<li><a href="aarvi-eng.php">AARVI - Engine</a></li>
					<li><a href="view-order.php">My Orders</a></li>
					<li><a href="wishlist.php">Whishlist</a></li>
					<li><a href="cart.php">Cart</a></li>
					<li><a href="update-user.php">Update Password</a></li>
					<li><a href="edit-address.php">Update Address</a></li>
					<li><a href="logout.php">Logout</a></li>
				</ul>
			</div>
		</div>
	</div>
</div>
<section id="content" style="background-color: #6441A5; min-height:100vh;">
	<h1 style="color: #FFF; text-align:left; margin:2rem; font-weight:100;">AARVI</h1>
	<hr>
	<div class="content-blog">
		<form method="post">
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-md-offset-3">
						<div class="billing-details">
							<h3 class="uppercase" style="color: #fff;">Cancel Order</h3>
							<table class="cart-table account-table table table-bordered table-striped" style="background-color: #f4f4f4;">
								<thead>
									<tr>
										<th style="background-color: #333;">Order</th>
										<th style="background-color: #333;">Date</th>
										<th style="background-color: #333;">Status</th>
										<th style="background-color: #333;">Payment Mode</th>
										<th style="background-color: #333;">Total</th>
									</tr>
								</thead>
								<tbody>
									<?php
									if (isset($_GET['id']) & !empty($_GET['id'])) {
										$oid = $_GET['id'];
									} else {
										header('location: my-account.php');
									}
									$ordsql = "SELECT * FROM orders WHERE id='$oid'";
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
												INR <?php echo $ordr['totalprice']; ?>/-
											</td>
										</tr>
									<?php } ?>
								</tbody>
							</table>
							<div class="space30"></div>
							<div class="clearfix space20"></div>
							<label style="color: #FFF;">Reason :</label>
							<textarea class="form-control" name="cancel" cols="10"> </textarea>
							<input type="hidden" name="orderid" value="<?php echo $_GET['id']; ?>">
							<div class="space30"></div>
							<input type="submit" class="button btn-md" style="background-color: #fff; color:#6441A5; border-radius:25px;" value="Cancel Order">
						</div>
					</div>
				</div>
			</div>
		</form>
	</div>
</section>

<?php include 'inc/footer.php' ?>