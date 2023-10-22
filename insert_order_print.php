<?php
session_start();


//include '../session.php';

if (isset($_POST['finish_order'])) {

// create connection to the database
    $connection = mysqli_connect('localhost', 'root', '', 'lms');
    if (!$connection) {
        echo "Falied to Connected";
    }
    $order_id = $_POST['order_id'];
    $student_id = $_POST['student_id'];
    $rfid_num = $_POST['rfid_num'];
    $weight = $_POST['weight'];
    $order_date = $_POST['order_date'];
    $estimate_time = $_POST['estimate_time'];
    
    //insert query of the database table
    $sql1 = "INSERT INTO finish_order(order_id,student_id,rfid_num,weight,order_date,estimate_time)VALUES('$order_id','$student_id','$rfid_num','$weight','$order_date','$estimate_time')";
    $result1 = mysqli_query($connection, $sql1);
} else if (!mysqli_query($connection, $sql1)) {
    //Normally error appears with mysqli_error($con), but here more like to be data duplicate
    die('Order is Not Placed' . '<br><a href="place_order.php"> <b>Back</b></a>');
}
//confirmation redirect to index.php
header("Location: homepage.php?success");
exit(0);
?>