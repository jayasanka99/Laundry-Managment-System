<?php include 'welcome.php';
?>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        
        <link rel="icon" type="image/png" href="images/icons/sltc.ico"/>
        <link href="fonts/icomoon/fonts/homepagefont.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" href="fonts/icomoon/style.css">
        <link rel="stylesheet" href="css/owl.carousel.min.css">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/style.css">
        <title>Laundry Management System</title>

    </head>
    <body>
        <div class="site-mobile-menu">
            <div class="site-mobile-menu-header">
                <div class="site-mobile-menu-close mt-3">
                    <span class="icon-close2 js-menu-toggle"></span>
                </div>
            </div>
            <div class="site-mobile-menu-body"></div>
        </div>

        <header class="site-navbar" role="banner">

            <div class="container">
                <div class="row align-items-center">

                    <div class="col-11 col-xl-2">
                        <h1 class="mb-0 site-logo"><a href="homepage.php" class="text-white mb-0">SLTC</a></h1>
                    </div>
                    <div class="col-12 col-md-10 d-none d-xl-block">
                        <nav class="site-navigation position-relative text-right" role="navigation">

                            <ul class="site-menu js-clone-nav mr-auto d-none d-lg-block">
                                <li class="active"><a href="homepage.php"><span>Home</span></a></li>
                                <li><a href="place_order.php?student_id=<?php echo $row['student_id']; ?>"><span>Order</span></a>
                                    <!--<li class="has-children">-->
                                    <!--                  <li class="has-children">
                                                         <li><a href="#">Menu One</a></li>
                                                         <li><a href="#">Menu Two</a></li>
                                                         <li><a href="#">Menu Three</a></li>
                                                         <li class="has-children">
                                                           <a href="#">Dropdown</a>
                                                           <ul class="dropdown">
                                                             <li><a href="#">Menu One</a></li>
                                                             <li><a href="#">Menu Two</a></li>
                                                             <li><a href="#">Menu Three</a></li>
                                                             <li><a href="#">Menu Four</a></li>
                                                           </ul>
                                                         </li>
                                                       </ul>-->
                                </li>
                                <li><a href="homepage.php"><span>Online Status</span></a></li>

                                <li class="has-children">
                                    <font color="white" class='col-md-6'><b>
                                    </b><img src="images/login.png" height="40" width="40">
                                    Hi,
                                    <?php echo $_SESSION['first_name']; ?> &nbsp; <?php echo $_SESSION['last_name']; ?>
                                    </font>
                                    <ul class="dropdown">
                                        <li><a href="profile.php?student_id=<?php echo $row['student_id']; ?>"><span>My Profile</span></a></li>
                                        <li><a href="logout.php"><span>Logout</span></a></li>

                                    </ul>
                                </li>
                            </ul>
                        </nav>
                    </div>


                    <div class="d-inline-block d-xl-none ml-md-0 mr-auto py-3" style="position: relative; top: 3px;"><a href="#" class="site-menu-toggle js-menu-toggle text-white"><span class="icon-menu h3"></span></a></div>

                </div>

            </div>

        </header>
        <div class="hero" style="background-image: url('images/01.jpg');">

            <br><br><br><br>
            <center>
                <font color='black' size='' >
            <table  hight="500" width='500' bgcolor='white' border='0.5' cellpadding='0' cellspacing='0' align='center' bordercolor='gray'>
                <thead>
                    <tr align='center'>
                        <th><img src="images/rfid2.jpg" alt="" hight="500" width='500' opacity/></th>
                    </tr>
                    <tr align='center'>
                        <th>
                            <a href="place_order.php" class="btn btn-success btn-lg" > Continue </a>
                        </th>
                    </tr>
                </thead>

            </table>
                </font></center>
        </div>


        <script src="js/jquery-3.3.1.min.js"></script>
        <script src="js/popper.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/jquery.sticky.js"></script>
        <script src="js/main.js"></script>
    </body>
</html>

