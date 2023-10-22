<!DOCTYPE html>

<?php include 'welcome.php';
?>

<html lang="en">
    <head>
        <title>Place Oreder</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!--===============================================================================================-->
        <link rel="icon" type="image/png" href="images/icons/sltc.ico"/>
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="css/util.css">
        <link rel="stylesheet" type="text/css" href="css/main.css">
        <!--===============================================================================================-->
    </head>
    <body>


        <div class="container-contact100">
            <div class="wrap-contact100">
                <form id='place_order' name="place_order" action="insert_order.php" method="POST" class='contact100-form validate-form '>
                    <span class="contact100-form-title">
                        Place Your Order
                    </span>


                    <div class="wrap-input100 validate-input" data-validate="Student ID is required">
                        <label class="label-input100" for="student_id">Student ID:</label>
                        <input id="name" class="input100" type="text" name="student_id" value="<?php echo $_SESSION['student_id']; ?>" placeholder="">
                        <span class="focus-input100"></span>
                    </div>

                    <?php
                    $connection = mysqli_connect('localhost', 'root', '', 'lms');
                    if (!$connection) {echo "Falied to Connected";
                    }

                    $select_query = 'SELECT rfid_num FROM rfid WHERE rf_id=(SELECT max(rf_id) FROM rfid)';
                    $result_set = mysqli_query($connection, $select_query);
                    while ($row = mysqli_fetch_array($result_set)) {
                        ?>
                        <div class="wrap-input100 validate-input" data-validate="RFID number is required">
                            <label class="label-input100" for="rfid_num">RFID No:</label>
                            <input id="name" class="input100" type="text" name="rfid_num" id="rfid_num" value="<?php echo $row['rfid_num']; ?>" placeholder="">
                            <span class="focus-input100"></span>
                        </div>
                    <?php } ?>
                    <div class="wrap-input100 validate-input" data-validate="Weight is required">
                        <label class="label-input100" for="weight">Weght:</label>
                        <input id="name" class="input100" type="text" name="weight" placeholder="">
                        <span class="focus-input100"></span>
                    </div>

                    <div class="container-contact100-form-btn">
                        <button type='submit' class='contact100-form-btn submit-btn' id="place_order" name="place_order" value="place_order">Place Order</button>
                        </button>
                    </div>

                </form>

                <div class="contact100-more flex-col-c-m" style="background-image: url('images/01.jpg');">
                </div>
            </div>
        </div>





        <!--===============================================================================================-->
        <script src="vendor/jquery/jquery-3.2.1.min.js"></script>
        <!--===============================================================================================-->
        <script src="vendor/animsition/js/animsition.min.js"></script>
        <!--===============================================================================================-->
        <script src="vendor/bootstrap/js/popper.js"></script>
        <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
        <!--===============================================================================================-->
        <script src="vendor/select2/select2.min.js"></script>
        <script>
            $(".js-select2").each(function () {
                $(this).select2({
                    minimumResultsForSearch: 20,
                    dropdownParent: $(this).next('.dropDownSelect2')
                });
            })
            $(".js-select2").each(function () {
                $(this).on('select2:open', function (e) {
                    $(this).parent().next().addClass('eff-focus-selection');
                });
            });
            $(".js-select2").each(function () {
                $(this).on('select2:close', function (e) {
                    $(this).parent().next().removeClass('eff-focus-selection');
                });
            });

        </script>
        <!--===============================================================================================-->
        <script src="vendor/daterangepicker/moment.min.js"></script>
        <script src="vendor/daterangepicker/daterangepicker.js"></script>
        <!--===============================================================================================-->
        <script src="vendor/countdowntime/countdowntime.js"></script>
        <!--===============================================================================================-->
        <script src="js/main.js"></script>
        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag() {
                dataLayer.push(arguments);
            }
            gtag('js', new Date());

            gtag('config', 'UA-23581568-13');
        </script>
    </body>
</html>
