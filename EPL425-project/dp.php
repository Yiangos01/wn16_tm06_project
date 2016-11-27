
<?php

/*
status:
0 in Progress
1 cancelled
2 Ready
3 Finished
4 Paid */
$status= $_POST["status"];
$id = $_POST["id"];
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "pos";


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
     die("Connection failed: " . $conn->connect_error);
}

$sql = "UPDATE `order` SET `status` = '$status' WHERE `order`.`id` = $id ";
$conn->query($sql);



$conn->close();

?>
