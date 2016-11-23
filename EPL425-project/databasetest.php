<?php

$user='root';
$pass='';
$db='pos2';

$db=new mysqli('localhost',$user,$pass,$db) or die("Unable to connect");


$insql="INSERT INTO `order` (`id`, `time`, `date`, `customerId`, `type`, `status`) VALUES (NULL, CURRENT_TIME(), CURRENT_DATE(), '2', '2', '3')";
$query=mysqli_query($db,$insql);
if($query){
 echo "succesfuly insertion";
}
?>
