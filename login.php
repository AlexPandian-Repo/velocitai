<?php
session_start();
require_once 'config/connect.php';
include 'inc/header.php';
include 'inc/nav.php'; ?>

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
	<h1 style="color: #FFF; text-align:left; margin-left:2rem">SHOP</h1>
	<hr>
	<div class="content-blog">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="row shop-login">
						<div class="col-md-6">
							<div class="box-content">
								<h3 class="heading text-center" style="color: #f4f4f4;">I'm a Returning Customer</h3>
								<div class="clearfix space40"></div>
								<?php if (isset($_GET['message'])) {
									if ($_GET['message'] == 13) {
								?><div class="alert alert-danger" role="alert"> <?php echo "Please verify your email"; ?> </div>
								<?php }
								} ?>
								<?php
								if (isset($_GET['message'])) {
									if ($_GET['message'] == 1) {
								?>
										<div class="alert alert-danger" role="alert">
											<?php echo "Invalid Login Credentials"; ?>
										</div>
								<?php
									}
								}
								?>
								<?php if (isset($_GET['message'])) {
									if ($_GET['message'] == 100) {
								?><div class="alert alert-success" role="alert"> <?php echo "Please Login"; ?> </div>
								<?php }
								} ?>
								<?php if (isset($_GET['message'])) {
									if ($_GET['message'] == 101) {
								?><div class="alert alert-danger" role="alert"> <?php echo "Cannot Update"; ?> </div>
								<?php }
								} ?>
								<?php if (isset($_GET['message'])) {
									if ($_GET['message'] == 1001) {
								?><div class="alert alert-danger" role="alert"> <?php echo "Cannot Update"; ?> </div>
								<?php }
								} ?>
								<form class="logregform" method="post" action="loginprocess.php" style="background-color: #f4f4f4;">
									<div class="row">
										<div class="form-group">
											<div class="col-md-12">
												<label>E-mail Address</label>
												<input type="email" name="email" value="" class="form-control">
											</div>
										</div>
									</div>
									<div class="clearfix space20"></div>
									<div class="row">
										<div class="form-group">
											<div class="col-md-6">
												<label>Password</label>
												<input type="password" name="password" value="" class="form-control">
											</div>
										</div>
									</div>
									<div class="clearfix space20"></div>
									<div class="row">
										<div class="col-md-6">
										</div>
										<div class="col-md-6">
											<button type="submit" class="button btn-md pull-right" style="background-color: green; border:none">Login</button>
										</div>
									</div>
								</form>
							</div>
						</div>
						<div class="col-md-6">
							<div class="box-content">
								<h3 class="heading text-center" style="color: #f4f4f4;">Register An Account</h3>
								<div class="clearfix space40"></div>
								<?php if (isset($_GET['message'])) {
									if ($_GET['message'] == 2) {
								?><div class="alert alert-danger" role="alert"> <?php echo "Failed to Register"; ?> </div>
								<?php }
								} ?>
								<?php if (isset($_GET['message'])) {
									if ($_GET['message'] == 10) {
								?><div class="alert alert-danger" role="alert"> <?php echo "Email already Exist"; ?> </div>
								<?php }
								} ?>
								<?php if (isset($_GET['message'])) {
									if ($_GET['message'] == 11) {
								?><div class="alert alert-danger" role="alert"> <?php echo "Empty Fields"; ?> </div>
								<?php }
								} ?>
								<?php if (isset($_GET['message'])) {
									if ($_GET['message'] == 12) {
								?><div class="alert alert-success" role="alert"> <?php echo "Successfully Registered"; ?> </div>
								<?php }
								} ?>
								<form class="logregform" method="post" action="registerprocess.php" style="background-color: #f4f4f4;">
									<div class="row">
										<div class="form-group">
											<div class="col-md-12">
												<label>E-mail Address</label>
												<input type="email" name="email" value="" class="form-control">
											</div>
										</div>
									</div>
									<div class="clearfix space20"></div>
									<div class="row">
										<div class="form-group">
											<div class="col-md-6">
												<label>Password</label>
												<input type="password" name="password" value="" class="form-control">
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-12">
											<div class="space20"></div>
											<button type="submit" class="button btn-md pull-right" style="background-color: green; border:none">Register</button>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>


<?php include 'inc/footer.php' ?>