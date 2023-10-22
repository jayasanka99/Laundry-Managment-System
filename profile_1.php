<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

<?php session_start(); ?>
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
    </head>
    <body>

        <?php
//        require_once './link_connection.php';
//        $obj = new my_link();
//        $conn = $obj->con_link();
//
//        $select_query = "SELECT
//                        login.login_id,
//                        login.user_id,
//                        login.`name`,
//                        login.user_level,
//                        login.username,
//                        login.`password`
//                        FROM login WHERE login_id=1";
//
//        $dataArray = $obj->getResultArray($select_query);
//        foreach ($dataArray as $value) {
//            //echo $value['date'];
//        }
//        
        ?>

    <html lang="en">
        <head>
            <!-- Required meta tags -->
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

            <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">

            <link rel="stylesheet" href="fonts/icomoon/style.css">

            <link rel="stylesheet" href="css/owl.carousel.min.css">

            <!-- Bootstrap CSS -->
            <link rel="stylesheet" href="css/bootstrap.min.css">

            <!-- Style -->
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
                            <h1 class="mb-0 site-logo"><a href="index.html" class="text-white mb-0">Brand</a></h1>
                        </div>
                        <div class="col-12 col-md-10 d-none d-xl-block">
                            <nav class="site-navigation position-relative text-right" role="navigation">

                                <ul class="site-menu js-clone-nav mr-auto d-none d-lg-block">
                                    <li class="active"><a href="homepage.php"><span>Home</span></a></li>
                                    <li><a href="place_order.php?st_id=<?php echo $_SESSION['st_id']; ?>"><span>Order</span></a>
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
                                        <font color="white" col-md-6><b>
                                        </b><img src="images/login.png" height="40" width="40"></a>
                                        Hi,
                                        <?php //echo $_SESSION['name'] ?>
                                        </font>
                                        <ul class="dropdown">
                                            <li><a href="profile.php?st_id=<?php echo $_SESSION['st_id']; ?>"><span>My Profile</span></a></li>
                                            <li><a href=""><span>Logout</span></a></li>
                                    </li>
                                </ul>
                                </ul>
                            </nav>
                        </div>


                        <div class="d-inline-block d-xl-none ml-md-0 mr-auto py-3" style="position: relative; top: 3px;"><a href="#" class="site-menu-toggle js-menu-toggle text-white"><span class="icon-menu h3"></span></a></div>

                    </div>

                </div>
            </div>

        </header>

        <div class="hero" style="background-image: url('images/01.jpg');">
            <br>
            <br>
            <br>
            <br>
            <br>
            <div class="container myDiv" >
                <div class="row form-group ">
                    <table  width="800" cellspacing="25" cellpadding="10" id="tblTable" class="table table-condensed">
                        <tr  class="active">
                            <td colspan="4">   
                        <center>
                            <img src="images/login.png" alt="" height="100" width="100"/><br>
                            <font color="DarkBlue" col-md-6><b>Hi, <?php echo $_SESSION['first_name'] ?></font>
                        </center>
                        </td>
                        </tr>
                    </table>
                </div>

                <?php
                $connection = mysqli_connect('localhost', 'root', '', 'lms');
                if (!$connection) {
                    echo "Falied to Connected";
                }
                $id = $_GET['st_id'];

                $select_query = "SELECT FirstName, LastName, Address, ContactNumber, Email, StudentID FROM user WHERE=".$id;
                $result_set = mysqli_query($connection, $select_query);
                while ($row = mysqli_fetch_array($result_set)) {
                    ?>


                    <form id='register' action="update.php" method="POST" class='input-group-register'>

                        <input type='text' autocomplete="off" class='input-field' value="<?php echo row["last_name"] ?>"  name="FirstName" required>
                        <input type='text' class='input-field'  value="<?php echo row["last_name"] ?>" name="LastName" required>
                        <input type='text' class='input-field'  value="<?php echo row["address"] ?>" name="Address" required>
                        <input type='text' class='input-field'  value="<?php echo row["contact_no"] ?>" name="ContactNumber" required>
                        <input type='email' class='input-field' value="<?php echo row["email"] ?>"  name="Email" required>
                        <input type='text' class='input-field'  value="<?php echo row["st_id"] ?>" name="StudentID" required>
                        <input type='password' class='input-field' placeholder='Enter Password' name="Password" required>
                        <input type='password' class='input-field' placeholder='Confirm Password' name="CPassword" required>
                        <div class="text-center">
                            <label class="text-center">
                                <input type='checkbox' class='check-box' name="terms"><span>I agree to the terms and conditions</span>
                            </label>
                        </div>
                        <button type='submit' class='submit-btn' name="update">Update</button>
                    </form>
                </div>
                <div class="col-md-3"></div>
                <?php
                }
// put your code here
                ?>
        </div>

        <script src="../js/jquery.js" type="text/javascript"></script>
        <script src="../js/bootstrap.js" type="text/javascript"></script>
        <script src="../js/color_print.js" type="text/javascript"></script>

    </body>
</html>
