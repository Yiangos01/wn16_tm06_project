
<?php

/*
status:
0 in Progress
1 cancelled
2 Ready
3 Finished
4 Paid */

$servername = "localhost";
$username = $_POST['username'];;
$password = "";
$dbname = "pos2";
$aResult = array();
$aStatus =  array("in Progress", "Cancelled", "Ready", "Finished", "Paid");
$atype =  array("Delivery","Dine in","Take away");
$color = array("gray","red","orange","Dark","blue","green");
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
     die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM `order`";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
     // output data of each row
     $i=0;
     while($row = $result->fetch_assoc()) {
       array_push($aResult, "<tr><td><strong>".$row["id"] ."</strong></td> <td>". $atype[$row["type"]]. "</td> <td>".$row["date"]."</td><td>".$row["customerId"]."</td><td>".$row["total"]."</td><td><button class=\"arraybtn\" id=\"".$color[$row["status"]]."\" onclick=\"stat(".$row["id"].")\">".$aStatus[$row["status"]]."</button></td><td><button onclick=displayOrder(".$row["id"].") >View order</button></td></tr>");
       $i++;
      # $AResult =  "<br> id: ". $row["id"]. " - Time: ". $row["time"]. " Date:" . $row["date"] . " CustomerId: ". $row["customerId"] . "<br>";
     }
} else {
     echo "0 results";
}
echo implode(" ",$aResult);

$conn->close();
?>
