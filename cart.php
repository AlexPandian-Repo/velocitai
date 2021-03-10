<?php
session_start();
require_once 'config/connect.php';
if (isset($_SESSION['customer'])) {
	$email = $_SESSION['customer'];
}
include 'inc/header.php';
include 'inc/nav.php';
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
<section id="content" style="background-color: #2282FF; min-height:100vh">
	<h1 style="color: #FFF; text-align:left; margin-left:2rem">SHOP</h1>
	<hr>
	<div class="content-blog">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<table class="cart-table table table-bordered" style="background-color: #f4f4f4;">
						<thead>
							<tr>
								<th style="background-color: #333;">&nbsp;</th>
								<th style="background-color: #333;">&nbsp;</th>
								<th style="background-color: #333;">Product</th>
								<th style="background-color: #333;">Price</th>
								<th style="background-color: #333;">Quantity</th>
								<th style="background-color: #333;">Total</th>
							</tr>
						</thead>
						<tbody>
							<?php
							//print_r($cart);
							$total = 0;
							if (isset($cart)) {
								foreach ($cart as $key => $value) {
									//echo $key . " : " . $value['quantity'] ."<br>";
									$cartsql = "SELECT * FROM products WHERE id=$key";
									$cartres = mysqli_query($connection, $cartsql);
									$cartr = mysqli_fetch_assoc($cartres);
							?>
									<tr>
										<td>
											<a class="remove" href="delcart.php?id=<?php echo $key; ?>"><i class="fa fa-times"></i></a>
										</td>
										<td>
											<a href="#"><img src="<?php echo $cartr['thumb']; ?>" alt="" height="90" width="90"></a>
										</td>
										<td>
											<a href="single.php?id=<?php echo $cartr['id']; ?>"><?php echo substr($cartr['name'], 0, 30); ?></a>
										</td>
										<td>
											<span class="amount" style="color: #6441A5;">&#8377;<?php echo $cartr['priceid']; ?>.00/-</span>
										</td>
										<td>
											<div class="quantity"><?php echo $value['quantity']; ?></div>
										</td>
										<td>
											<span class="amount">&#8377;<?php echo ($cartr['priceid'] * $value['quantity']); ?>.00/-</span>
										</td>
									</tr>
							<?php
									$total = $total + ($cartr['priceid'] * $value['quantity']);
								}
							} ?>
							<tr>
								<td colspan="6" class="actions">
									<div class="col-md-6">
										<!--	<div class="coupon">
									<label>Coupon:</label><br>
									<input placeholder="Coupon code" type="text"> <button type="submit">Apply</button>
								</div> -->
									</div>
									<div class="col-md-6">
										<div class="cart-btn">
											<!-- <button class="button btn-md" type="submit">Update Cart</button> -->
											<?php if ($total !== 0) { ?>
												<a href="checkout.php" class="button btn-md" style="background-color: #6441A5; color:#FFF;">Checkout</a>
											<?php } else {
												echo "
												<a href=\"cart.php\" class=\"button btn-md\" style=\"background-color: #6441A5; color:#FFF;\">Proceed</a>";
											} ?>
										</div>
									</div>
								</td>
							</tr>
						</tbody>
					</table>

					<div class="cart_totals">
						<div class="col-md-6 push-md-6 no-padding">
							<h4 class="heading" style="color: #f4f4f4;">Cart Total</h4>
							<table class="table table-bordered col-md-6" style="background-color: #f4f4f4;">
								<tbody>
									<tr>
										<th>Cart Subtotal</th>
										<td><span class="amount">&#8377; <?php echo $total; ?>.00/-</span></td>
									</tr>
									<tr>
										<th>Shipping and Handling</th>
										<td>
											Free Shipping
										</td>
									</tr>
									<tr>
										<th>Order Total</th>
										<td><strong><span class="amount" style="color:#6441A5;">&#8377; <?php echo $total; ?>.00/-</span></strong> </td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>


<?php include 'inc/footer.php' ?>