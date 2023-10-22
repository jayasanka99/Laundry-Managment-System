<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

<?php include 'welcome.php';
?>
<html>
    <head>
        <meta charset="UTF-8">
        <link href="../css/bootstrap.css" rel="stylesheet" type="text/css"/>
        <link href="../css/color_print.css" rel="stylesheet" type="text/css"/>
        <title>
            LMS
        </title>
        <link rel="shortcut icon" href="">
        <title></title>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">

        <link rel="stylesheet" href="fonts/icomoon/style.css">

        <link rel="stylesheet" href="css/owl.carousel.min.css">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="css/bootstrap.min.css">

        <!-- Style -->
        <link rel="stylesheet" href="css/style.css">
        <script src="js/profile2.js"></script>
        <script src="js/profile1.js"></script>
        <link rel="stylesheet" href="css/profile2.css.css">

        <title>Laundry Management System</title>
    </head>
    <body style="background-color:black;">


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
                                <li><a href="about.html"><span>About</span></a></li>
                                <li><a href="contact.html"><span>Contact</span></a></li>
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

        <br><br><br><br>

            <div class="col">
                <div class="row">
                    <div class="col mb-3">
                        <div class="card">
                            <div class="card-body">
                                <div class="e-profile">
                                    <div class="row">
                                        <div class="col-12 col-sm-auto mb-3">
                                            <div class="mx-auto" style="width: 140px;">
                                                <div class="d-flex justify-content-center align-items-center rounded" style="height: 140px; background-color: rgb(233, 236, 239);">
                                                    <span style="color: rgb(166, 168, 170); font: bold 8pt Arial;">140x140</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col d-flex flex-column flex-sm-row justify-content-between mb-3">
                                            <div class="text-center text-sm-left mb-2 mb-sm-0">
                                                <h4 class="pt-sm-2 pb-1 mb-0 text-nowrap">
                                                    <?php echo $_SESSION['first_name']; ?>  <?php echo $_SESSION['last_name']; ?>
                                                </h4>
                                                <div class="text-muted"><small>Student ID : <?php echo $_SESSION['student_id']; ?>  </small></div>
                                                <div class="mt-2">
                                                    <button class="btn btn-primary" type="button">
                                                        <i class="fa fa-fw fa-camera"></i>
                                                        <span>Change Photo</span>
                                                    </button>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <ul class="nav nav-tabs">
                                        <li class="nav-item"><a href="" class="active nav-link">Student Details</a></li>
                                    </ul>
                                    <br>
                                    <div class="tab-content pt-3">
                                        <div class="tab-pane active">
                                            <div class="row">
                                                <div class="col">
                                                    <div class="col">
                                                        <div class="form-group">
                                                            <input class="form-control" type="text"  value="<?php echo $_SESSION["address"] ?>" name="Address" >
                                                        </div> 
                                                    </div> 
                                                    <br>
                                                    <div class="col">  
                                                        <div class="form-group"> 
                                                            <input type='text' class='form-control'  value="<?php echo $_SESSION["contact_number"] ?>" name="ContactNumber" required>
                                                        </div> 
                                                    </div> 
                                                    <br>
                                                    <div class="col"> 
                                                        <div class="form-group"> 
                                                            <input type='email' class='form-control' value="<?php echo $_SESSION["email"] ?>"  name="Email" required>
                                                        </div> 
                                                    </div>
                                                    <br>  
                                                    <a href="user_update.php?user_id=<?php echo $_SESSION['user_id']; ?>">
                                                    <button type='submit' class='btn btn-primary submit-btn' name="update">Update</button>
                                                    </a>
                                                    </form>
                                                </div>
                                                <div class="col-md-3"></div>

                                            </div>

                                        </div>
                                    </div>

                                </div>

                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </form>



        <script src="../js/jquery.js" type="text/javascript"></script>
        <script src="../js/bootstrap.js" type="text/javascript"></script>
        <script src="../js/color_print.js" type="text/javascript"></script>

    </body>
</html>
