<?php

include 'db.php';
session_start();
if (isset($_POST['login'])) {
    $student_id = $_POST['student_id'];
    $password = $_POST['password'];

    $query = "SELECT * FROM user WHERE student_id = '{$student_id}'";
    $result = mysqli_query($connection, $query);
    $row_count = mysqli_num_rows($result);
    if ($row_count > 0) {
        $row = mysqli_fetch_assoc($result);
        $db_password = $row['password'];
        $db_student_id = $row['student_id'];
        if (sha1($password) === $db_password and $student_id === $db_student_id) {
            $_SESSION['login'] = true;
            $_SESSION['user_id'] = $row['user_id'];
            $_SESSION['first_name'] = $row['first_name'];
            $_SESSION['last_name'] = $row['last_name'];
            $_SESSION['address'] = $row['address'];
            $_SESSION['contact_number'] = $row['contact_number'];
            $_SESSION['email'] = $row['email'];
            $_SESSION['student_id'] = $row['student_id'];

            header("Location: homepage.php");
        } else {
            echo "<script>alert('Invalid Username or Password!'); window.location ='my_new_lms.php'</script>";
        }
    } else {
        echo "<script>alert('Invalid Username or Password!'); window.location ='my_new_lms.php'</script>";
    }
}

if (isset($_POST['qr_reqd'])) {
    $encrypted_string = $_POST['qr_reqd'];
    $password = 'lms';
    $user_id = openssl_decrypt($encrypted_string, "AES-128-ECB", $password);

    $query = "SELECT * FROM user WHERE user_id = $user_id";
    $result = mysqli_query($connection, $query);
    if (!$result) {
        echo 2;
        exit();
    }
    $row_count = mysqli_num_rows($result);
    if ($row_count > 0) {
        $row = mysqli_fetch_assoc($result);
        $db_password = $row['password'];
        $db_student_id = $row['student_id'];

        $_SESSION['login'] = true;
        $_SESSION['user_id'] = $row['user_id'];
        $_SESSION['first_name'] = $row['first_name'];
        $_SESSION['last_name'] = $row['last_name'];
        $_SESSION['address'] = $row['address'];
        $_SESSION['contact_number'] = $row['contact_number'];
        $_SESSION['email'] = $row['email'];
        $_SESSION['student_id'] = $row['student_id'];

        echo 1;
        exit();
    } else {
        echo 2;
        exit();
    }
}
