 <div class="menu-wrap" id="naviga">
	<div id="mobnav-btn">Menu <i class="fa fa-bars"></i></div>
	<ul class="sf-menu">
		<li>
			<a href="http://localhost/shop/shop/index.html">Home</a>
		</li>
		<li>
			<a href="http://localhost/shop/shop/my-account.php">My Account</a>
			
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
	
		 
</div>
</div>

</header>