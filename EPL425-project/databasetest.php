<?php

$user='root';
$pass='';
$db='pos2';

$db=new mysqli('localhost',$user,$pass,$db) or die("Unable to connect");
$data = $_POST['cardOrder'];

$insql="INSERT INTO `order` (`id`, `time`, `date`, `customerId`, `type`) VALUES (NULL, CURRENT_TIME(), CURRENT_DATE(), '2', '2')";
$query=mysqli_query($db,$insql);
if($query){
    echo $data;
  }

?>
