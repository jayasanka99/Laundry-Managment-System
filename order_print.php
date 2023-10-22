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

        <?php
        $connection = mysqli_connect('localhost', 'root', '', 'lms');
        if (!$connection) {
            echo "Falied to Connected";
        }
        $select_query = 'SELECT order_id,student_id,rfid_num,weight,order_date,estimate_time FROM lms_orders WHERE order_id=(SELECT max(order_id) FROM lms_orders)';
        $result_set = mysqli_query($connection, $select_query);
        while ($row = mysqli_fetch_array($result_set)) {
            ?>
            <div class="container-contact100">
                <div class="wrap-contact100">
                    <form id='finish_order' action="insert_order_print.php" method="POST" class='contact100-form validate-form '>
                        <span class="contact100-form-title">
                            Place Your Order
                        </span>


                        <div class="wrap-input100 validate-input" data-validate="Student ID is required">
                            <label class="label-input100" for="student_id">Order ID :</label>
                            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<input type='text' class='input-100' name="order_id" value="<?php echo $row['order_id']; ?>" required>
                            <span class="focus-input100"></span>
                        </div>
                        <div class="wrap-input100 validate-input" data-validate="Student ID is required">
                            <label class="label-input100" for="student_id">Student ID :</label>
                            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<input type='text' class='input-100' name="student_id" value="<?php echo $row['student_id']; ?>">
                            <span class="focus-input100"></span>
                        </div>
                        <div class="wrap-input100 validate-input" data-validate="Student ID is required">
                            <label class="label-input100" for="student_id">RFID :</label>
                            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<input type='text' class='input-100' name="rfid_num" value="<?php echo $row['rfid_num']; ?>">
                            <span class="focus-input100"></span>
                        </div>
                        <div class="wrap-input100 validate-input" data-validate="Student ID is required">
                            <label class="label-input100" for="student_id">Cost :</label>
                            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<input type='text' class='input-100' name="weight" value="<?php
                            echo 'Rs.';
                            echo $row['weight'];
                            ?>">
                            <span class="focus-input100"></span>
                        </div>
                        <div class="wrap-input100 validate-input" data-validate="Student ID is required">
                            <label class="label-input100" for="student_id">Order Date :</label>
                            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<input type='text' class='input-100' name="order_date" value="<?php echo $row['order_date']; ?>">
                            <span class="focus-input100"></span>
                        </div>
                        <div class="wrap-input100 validate-input" data-validate="Student ID is required">
                            <label class="label-input100" for="student_id">Estimate Time :</label>
                            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<input type='text' class='input-100' name="estimate_time" value="<?php echo $row['estimate_time']; ?>">
                            <span class="focus-input100"></span>
                        </div>
                    <?php } ?>


                    <div class="container-contact100-form-btn">
                         <button  type="button" id="print" onclick="window.print()" class="btn btn-labeled btn-default col-md-12 d-print-none" style="color:royalblue; ">
                            <img src='svg/si-glyph-print.svg' height="20" width="20"/>&nbsp;&nbsp;&nbsp;&nbsp;<b>Print</b></button>
                        <br>
                        <button type='submit' class='contact100-form-btn submit-btn' id="finish_order" name="finish_order" value="finish_order">Order Comfirm</button>
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
