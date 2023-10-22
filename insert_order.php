<?php

session_start();
$connection = mysqli_connect('localhost', 'root', '', 'lms');
if (!$connection) {
    echo "Falied to Connected";
}

//include '../session.php';

if (isset($_POST['place_order'])) {

// create connection to the database
    $connection = mysqli_connect('localhost', 'root', '', 'lms');
    if (!$connection) {
        echo "Falied to Connected";
    }

    $student_id = $_POST['student_id'];
    $rfid_num = $_POST['rfid_num'];
    $weight = $_POST['weight'];
    $weight_cost = $weight * 100;
    //insert query of the database table
    $sql = "INSERT INTO lms_orders(student_id,rfid_num,weight,order_date,estimate_time)VALUES('{$student_id}','{$rfid_num}','{$weight_cost}',now(),(now()+interval 40 minute))";
    $result = mysqli_query($connection, $sql);
} else if (!mysqli_query($connection, $sql)) {
    //Normally error appears with mysqli_error($con), but here more like to be data duplicate
    die('Order is not placed' . '<br><a href="place_order.php"> <b>Back</b></a>');
}

//confirmation redirect to index.php
header("Location: order_print.php?success");


exit(0);
?>