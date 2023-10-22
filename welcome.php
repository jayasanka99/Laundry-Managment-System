<?php
session_start();

if (!isset($_SESSION['login'])) {
	header('Location: my_new_lms.php');
}
?>

<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<title></title>
</head>

<body>
</body>

</html>