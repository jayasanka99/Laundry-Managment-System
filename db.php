<?php
	const DB_HOST = 'sql6.freesqldatabase.com';
	const DB_USER = 'sql6521222';
	const DB_PASS = 'rYg47yTGmc';
	const DB_NAME = 'sql6521222';

	$connection = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);
	if(!$connection){
	    echo "Falied to Connected";
	}
?>