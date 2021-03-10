<!-- <div class="menu-wrap" id="naviga">
	<div id="mobnav-btn">Menu <i class="fa fa-bars"></i></div>
	<ul class="sf-menu">
		<li>
			<a href="http://localhost/aarvi/index.php">Home</a>
		</li>
		<li>
			<a href="#">My Account</a>
			<div class="mobnav-subarrow"><i class="fa fa-plus"></i></div>
			<ul>
				<li><a href="http://localhost/aarvi/my-account.php">My Orders</a></li>
				<li><a href="http://localhost/aarvi/edit-address.php">Update Address</a></li>
				<li><a href="update-user.php">Update Password</a></li>
				<li><a href="http://localhost/aarvi/logout.php">Logout</a></li>
			</ul>
		</li>
		<li>
			<a href="recommedation.php">AARVI.AI</a>
		</li>
		<li>
			<a href="wishlist.php">Wishlist</a>
		</li>
		<li><?php
			if (isset($_SESSION['customer'])) {

			?>
				<a href="#">Welcome <?php
									$sql = "SELECT * FROM users where email='$email'";
									$res = mysqli_query($connection, $sql);
									while ($r = mysqli_fetch_assoc($res)) {
										echo $r['email'];
									}
									?></a>
			<?php } ?>
		</li>
	</ul>
	<div class="header-xtra">
		<?php
		if (isset($_SESSION['cart'])) {
			$cart = $_SESSION['cart'];
		} ?>
		<div class="s-cart">
			<div class="sc-ico"><i class="fa fa-shopping-cart"></i><em><?php
																		// echo @count($cart); ?></em></div>

			<div class="cart-info">
				<small>You have <em class="highlight"><?php
														// echo @count($cart); ?> item(s)</em> in your shopping bag</small>
				<br>
				<br>
				<?php
				//print_r($cart);
				$total = 0;
				if (isset($_SESSION['cart'])) {
					if (is_array($cart) || is_object($cart)) {
						foreach ($cart as $key => $value) {
							//echo $key . " : " . $value['quantity'] ."<br>";
							$navcartsql = "SELECT * FROM products WHERE id=$key";
							$navcartres = @mysqli_query($connection, $navcartsql);
							$navcartr = @mysqli_fetch_assoc($navcartres);


				?>
							<div class="ci-item">
								<img src="admin/<?php echo $navcartr['thumb']; ?>" width="70" alt="" />
								<div class="ci-item-info">
									<h5><a href="single.php?id=<?php echo $navcartr['id']; ?>"><?php echo substr($navcartr['name'], 0, 20); ?></a></h5>
									<p><?php echo $value['quantity']; ?> x INR <?php echo $navcartr['priceid']; ?>.00/-</p>
									<div class="ci-edit">
										<!-- <a href="#" class="edit fa fa-edit"></a> 
										<a href="delcart.php?id=<?php echo $key; ?>" class="edit fa fa-trash"></a>
									</div>
								</div>
							</div>
				<?php
							$total = $total + ($navcartr['priceid'] * $value['quantity']);
						}
					}
				} ?>
				<div class="ci-total">Subtotal: INR <?php echo $total; ?>.00/-</div>
				<div class="cart-btn">
					<a href="cart.php">View Bag</a>
					<a href="checkout.php">Checkout</a>
				</div>
			</div>
		</div>
		<!-- <div class="s-search">
			<div class="ss-ico"><i class="fa fa-search"></i></div>
			<div class="search-block">
				<div class="ssc-inner">
					<form>
						<input type="text" placeholder="Type Search text here...">
						<button type="submit"><i class="fa fa-search"></i></button>
					</form>
				</div>
			</div>
		</div> -->
</div>
</div>

</header>