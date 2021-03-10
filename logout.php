<?php
session_start();
unset($_SESSION['cart']);
unset($_SESSION['customer']);
session_unset(); //Free all session variables
session_destroy(); // Destroys all data registered to a session
header('location: login.php');
