<?php
session_start();
require_once 'config/connect.php';
if (isset($_SESSION['customer'])) {
    $email = $_SESSION['customer'];
}
?>
<?php include 'inc/nav.php'; ?>

<!DOCTYPE html>

<html>

<head>

    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="keywords" content="HTML5 Template" />
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SHOP</title>

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Favicon -->
    <link rel="shortcut icon" href="images/favicon.png">

    <!-- CSS -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="js/isotope/isotope.css">
    <link rel="stylesheet" href="js/flexslider/flexslider.css">
    <link rel="stylesheet" href="js/owl-carousel/owl.carousel.css">
    <link rel="stylesheet" href="js/owl-carousel/owl.theme.css">
    <link rel="stylesheet" href="js/owl-carousel/owl.transitions.css">
    <link rel="stylesheet" href="js/superfish/css/megafish.css" media="screen">
    <link rel="stylesheet" href="js/superfish/css/superfish.css" media="screen">
    <link rel="stylesheet" href="js/pikaday/pikaday.css">
    <link rel="stylesheet" href="css/settings-panel.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/light.css">
    <link rel="stylesheet" href="css/responsive.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,500,600,700,700i|Montserrat:300,400,500,600,700" rel="stylesheet">

    <script src="http://use.edgefonts.net/bebas-neue.js"></script>

   
    

    <!-- Modernizer -->
    <script src="js/modernizr.custom.js"></script>
    <style>
        :root {
            --primary-color: #000;
            --overlay-color: rgba(24, 39, 51, 0.95);
            --menu-speed: 0.75s;
        }

        #naviga {
            position: fixed;
            top: 0;
        }

        .marginbox {
            margin-top: 2rem;
        }

        .addmargi {
            margin-top: 5rem;
        }


        #services {
            padding: 60px 0 40px 0;
        
            background-color: #2282FF;
        }

        #services .box {
            padding: 30px;
            position: relative;
            overflow: hidden;
            border-radius: 10px;
            margin: 0 10px 40px 10px;
            background: #fff;
            box-shadow: 0 10px 29px 0 rgba(68, 88, 144, 0.1);
            transition: all 0.3s ease-in-out;
            text-align: center;
        }

        #services .box:hover {
            -webkit-transform: scale(1.1);
            transform: scale(1.1);
        }

        #services .icon {
            margin: 0 auto 15px auto;
            padding-top: 12px;
            display: inline-block;
            text-align: center;
            border-radius: 50%;
            width: 60px;
            height: 60px;
        }

        #services .icon i {
            font-size: 36px;
            line-height: 1;
        }

        #services .title {
            font-weight: 700;
            margin-bottom: 15px;
            font-size: 18px;
        }

        #services .title a {
            color: #111;
        }

        #services .box:hover .title a {
            color: #1bb1dc;
        }

        #services .description {
            font-size: 14px;
            line-height: 28px;
            margin-bottom: 0;
            text-align: left;
        }

        .menu-wrap {
            position: fixed;
            top: 0;
            right: 0;
            z-index: 1;
        }

        .menu-wrap .toggler {
            position: absolute;
            top: 0%;
            right: 0%;
            z-index: 2;
            cursor: pointer;
            width: 50px;
            height: 50px;
            opacity: 0;
        }

        .menu-wrap .hamburger {
            position: absolute;
            top: 0;
            right: 0;
            z-index: 1;
            width: 60px;
            height: 60px;
            padding: 1rem;
            background: var(--primary-color);
            display: flex;
            align-items: center;
            justify-content: center;
        }

        /* Hamburger Line */
        .menu-wrap .hamburger>div {
            position: relative;
            flex: none;
            width: 100%;
            height: 2px;
            background: #fff;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: all 0.4s ease;
        }

        /* Hamburger Lines - Top & Bottom */
        .menu-wrap .hamburger>div::before,
        .menu-wrap .hamburger>div::after {
            content: '';
            position: absolute;
            z-index: 1;
            top: -10px;
            width: 100%;
            height: 2px;
            background: inherit;
        }

        /* Moves Line Down */
        .menu-wrap .hamburger>div::after {
            top: 10px;
        }

        /* Toggler Animation */
        .menu-wrap .toggler:checked+.hamburger>div {
            transform: rotate(135deg);
        }

        /* Turns Lines Into X */
        .menu-wrap .toggler:checked+.hamburger>div:before,
        .menu-wrap .toggler:checked+.hamburger>div:after {
            top: 0;
            transform: rotate(90deg);
        }

        /* Rotate On Hover When Checked */
        .menu-wrap .toggler:checked:hover+.hamburger>div {
            transform: rotate(225deg);
        }

        /* Show Menu */
        .menu-wrap .toggler:checked~.menu {
            visibility: visible;
        }

        .menu-wrap .toggler:checked~.menu>div {
            transform: scale(1);
            transition-duration: var(--menu-speed);
        }

        .menu-wrap .toggler:checked~.menu>div>div {
            opacity: 1;
            transition: opacity 0.4s ease 0.4s;
        }

        .menu-wrap .menu {
            position: fixed;
            top: 0;
            right: 0;
            width: 100%;
            height: 100%;
            visibility: hidden;
            overflow: hidden;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .menu-wrap .menu>div {
            background: var(--overlay-color);
            border-radius: 50%;
            width: 200vw;
            height: 200vw;
            display: flex;
            flex: none;
            align-items: center;
            justify-content: center;
            transform: scale(0);
            transition: all 0.4s ease;
        }

        .menu-wrap .menu>div>div {
            text-align: center;
            max-width: 90vw;
            max-height: 100vh;
            opacity: 0;
            transition: opacity 0.4s ease;
        }

        .menu-wrap .menu>div>div>ul>li {
            list-style: none;
            color: #fff;
            font-size: 1.5rem;
            padding: 1rem;
        }

        .menu-wrap .menu>div>div>ul>li>a {
            color: inherit;
            text-decoration: none;
            transition: color 0.4s ease;
        }
    </style>
</head>

<body>
    
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
    <section id="services" class="section-bg" style="min-height: 100vh;">
        <h1 style="color: #fff; text-align: left; margin-left:2rem;">SHOP</h1>
        <br><br><br>
        <div class="container">
            <div class="row">
                <?php
                
                $sql = "SELECT * FROM products ORDER BY rand();";
                $res = mysqli_query($connection, $sql);
                if (!@mysqli_fetch_assoc($res)) {
                    echo "no result";
                }
                
                while ($r = @mysqli_fetch_assoc($res)) {

                ?>
                    <a href="single.php?id=<?php echo $r['id']; ?>">
                        <div class="col-md-6 col-lg-4 wow bounceInUp" data-wow-duration="1.4s">
                            <div class="box">
                                <img src="<?php echo $r['thumb']; ?>" width="250px" alt="">
                                <div class="product-overlay">
                                    <span>
                                       
                                    </span>
                                </div>
                                <h4 class="title"><a href=""><?php echo $r['name']; ?> <br> <span style="color: #666;"> INR <?php echo $r['priceid']; ?>.00/-</span>
                                </h4>
                                
                            </div>
                        </div>
                    </a>
                <?php }; ?>
            </div>
        </div>
    </section>
</body>
<?php include 'inc/footer.php' ?>