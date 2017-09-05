<?php 

$mysqli = new mysqli('127.0.0.1', 'root', '', 'temperature');

		// Check connection
	if ($mysqli->connect_error) {
    	die("Connection failed: " . $conn->connect_error);
	}


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	$data = file_get_contents('php://input');
	$json_file = json_decode($data);

	

	$file = fopen("C:\Users\Home\Desktop\tmp.txt", 'a');
//	file_put_contents("/home/U/Desktop/tmp.txt",$data, FILE_APPEND);
	file_put_contents("C:\Users\Home\Desktop\tmp.txt", "INSERT INTO temp_hum (temperature, data) VALUES ('".$json_file->temperature."', '".$json_file->date."')\n\r", FILE_APPEND);
	


	if (!$mysqli->connect_errno) {
		$mysqli->query("INSERT INTO temp_hum (temperature, data) VALUES ('".$json_file->temperature."', '".$json_file->date."')");
	}
}
