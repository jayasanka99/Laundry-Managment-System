<?php

if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["action"])){
	switch ($_POST['action']) {
		case 'insertRfIdLog':
		insertRfIdLog();
		break;


		case 'showLogs':
		showLogs();

		default:

		break;
	}
}


function insertRfIdLog() {
    include 'connect.php';
    $cardid = $_POST['cardid'];
    $time = time();
	
    $stmt = $conn->prepare("INSERT INTO `rfid`(`rfid_num`, `date`) VALUES (:card, :dt)");
    $stmt->bindParam(":card", $cardid);
    $stmt->bindParam(":dt", $time);
	$stmt->execute();
	
	echo "success";
}

function showLogs()
{
	include 'connect.php';

	$logs = $conn->query("SELECT * FROM `rfid`");
	while($r = $logs->fetch()){
		echo "<tr>";
		echo "<td>".$r['ri_id']."</td>";
		echo "<td>".$r['rifd_num']."</td>";
		$dateadded = date("F j, Y, g:i a", $r["date"]);
		echo "<td>".$dateadded."</td>";
		echo "</tr>";
	}
}

?>
