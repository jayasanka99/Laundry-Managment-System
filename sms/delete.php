<?php //
$connection = mysqli_connect('localhost', 'root', '', 'lms');
    if (!$connection) {
        echo "Falied to Connected";
    }
 
// update data in mysql database
$id=$_GET['order_id'];
$sql="DELETE from finish_order  WHERE order_id='$id'";
$result=mysqli_query($connection, $sql);

// if successfully updated.
if($result){
    header("Location: sms/sendsms.php?success");
header("Location: work_homepage.php?success");
exit(0);

}

else {
echo "ERROR";
}

?> 