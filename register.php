<?php
include 'db.php';

if (isset($_POST['register'])) {
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $address = $_POST['address'];
    $contact_number = $_POST['contact_number'];
    $email = $_POST['email'];
    $student_id = $_POST['student_id'];
    $password = $_POST['password'];
    $con_password = $_POST['con_password'];

    if ($password === $con_password) {
        $password = sha1($password);
        $query = "INSERT INTO user(first_name, last_name, address, contact_number, email, student_id, password) VALUES('{$first_name}', '{$last_name}', '{$address}', '{$contact_number}', '{$email}', '{$student_id}', '{$password}')";
        $result = mysqli_query($connection, $query);
        $last_id = $connection->insert_id;

        $string_to_encrypt = $last_id;
        $password = "lms";
        $encrypted_string = openssl_encrypt($string_to_encrypt, "AES-128-ECB", $password);

        if ($result) {
            header("Location: ganerateQR.php?d=$encrypted_string");
            echo "<script>alert('User Registered Successfully!'); window.location ='my_new_lms.php'</script>";
        }
    } else {
        echo "<script>alert('Password Mismatch!'); window.location ='my_new_lms.php'</script>";
    }
}
