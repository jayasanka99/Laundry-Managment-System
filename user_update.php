<?php include 'welcome.php';
?>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <!--  This file has been downloaded from bootdey.com @bootdey on twitter -->
        <!--  All snippets are MIT license http://bootdey.com/license -->
        <title>profile</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!--<script src="js/profile1.js"></script>-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.1/dist/css/bootstrap.min.css" rel="stylesheet">
        <!--<script src="js/profile2.js"></script>-->
    </head>
    <body>
        <!--<link rel="stylesheet" href="css/profile2.css.css">-->

        <div class="col">
            <div class="row">
                <div class="col mb-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="e-profile">
                                <div class="row">

                                </div>
                                <ul class="nav nav-tabs">
                                    <li class="nav-item"><a href="" class="active nav-link">Update Details</a></li>
                                </ul>

                                <form id='update' action="update_register.php" method="POST" class='input-group-register'>


                                    <?php
                                    $connection = mysqli_connect('localhost', 'root', '', 'lms');
                                    if (!$connection) {
                                        echo "Falied to Connected";
                                    }

                                    $user_id = $_GET['user_id'];
                                    $select_query1 = "SELECT first_name, last_name, address, contact_number, email FROM user WHERE user_id=" . $user_id;
                                    $result_set1 = mysqli_query($connection, $select_query1);
                                    while ($row = mysqli_fetch_array($result_set1)) {
                                        ?>


                                        <div class="tab-content pt-3">
                                            <div class="tab-pane active">
                                                <form class="form" novalidate="">
                                                    <div class="row">
                                                        <div class="col">
                                                            <div class="row">
                                                                <div class="col">
                                                                    <div class="form-group">
                                                                        <label>First Name</label>
                                                                        <input class="form-control" type="text" name="first_name" placeholder="Firt Name" value="<?php echo $row['first_name']; ?>">
                                                                    </div>
                                                                </div>
                                                                <div class="col">
                                                                    <div class="form-group">
                                                                        <label>Last name</label>
                                                                        <input class="form-control" type="text" name="last_name" placeholder="Last Name" value="<?php echo $row['last_name']; ?>">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col">
                                                                    <div class="form-group">
                                                                        <label>Address</label>
                                                                        <input class="form-control" type="text" placeholder="address" value="<?php echo $row['address']; ?>">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col">
                                                                    <div class="form-group">
                                                                        <label>Contact Number</label>
                                                                        <input class="form-control" type="tel" placeholder="contact_number" value="<?php echo $row['contact_number']; ?>"u>
                                                                    </div>
                                                                </div>
                                                            </div>                          
                                                            <div class="row">
                                                                <div class="col">
                                                                    <div class="form-group">
                                                                        <label>Email</label>
                                                                        <input class="form-control" type="text" name="email" placeholder="user@example.com" value="<?php echo $row['email']; ?>">
                                                                    </div>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-12 col-sm-6 mb-3">
                                                            <div class="mb-2"><b>Change Password</b></div>
                                                            <div class="row">
                                                                <div class="col">
                                                                    <div class="form-group">
                                                                        <label>Current Password</label>
                                                                        <input class="form-control" type="password"  placeholder="••••••">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col">
                                                                    <div class="form-group">
                                                                        <label>New Password</label>
                                                                        <input class="form-control" type="password" name="password" placeholder="••••••">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col">
                                                                    <div class="form-group">
                                                                        <label>Confirm <span class="d-none d-xl-inline">Password</span></label>
                                                                        <input class="form-control" type="password" name="con_password" placeholder="••••••"></div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                    <div class="row">
                                                        <div class="col d-flex justify-content">
                                                            <button class="btn btn-primary" type="submit">Save Changes</button>
                                                        </div>
                                                    </div>


                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>



                </div>

            </div>
        <?php }
        ?>
    </body>

    <style type="text/css">
        body{
            margin-top:20px;
            background:#f8f8f8
        }
    </style>

    <script type="text/javascript">

    </script>
</body>
</html>