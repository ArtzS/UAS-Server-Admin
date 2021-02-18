<?php
$servername = "172.20.0.2";
$username = "root";
$password = "database";
$dbname = "Trucorp";

$conn = new mysqli($servername,$username,$password,$dbname);

if($conn->connect_error){
	die("Connection failed: ". $conn->connect_error);
}

echo "Connected Successfully";

$sql = "SELECT ID,Nama,Kantor FROM users";
$result = $conn->query($sql);

if($result->num_rows > 0){
	while($row = $result->fetch_assoc()){
		echo "ID : " . $row["ID"]. " Nama : " . $row["Nama"] . " Kantor : " . $row["Kantor"];
	}
}else{
	echo "No Result";
}

$conn->close();

?>