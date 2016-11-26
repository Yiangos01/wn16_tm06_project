<?php


switch($_POST['function1']){
    case 'order': order(); break;
    case 'item': items(); break;
    default: break;
}

function items(){
  $user='root';
  $pass='';
  $db='pos2';

  $db=new mysqli('localhost',$user,$pass,$db) or die("Unable to connect");
  $result1 = mysqli_query($db,"SELECT MAX( id ) FROM `order`");
  $row = mysqli_fetch_array($result1);


  //echo $data["id"];
  $itemid=$_POST['itemid'];
  $insql="INSERT INTO `orderitems` (`orderid`, `itemid`) VALUES ($row[0], $itemid)";
  $query=mysqli_query($db,$insql);
  if($query){
      //echo $cust;
    }
}

function order(){
  $user='root';
  $pass='';
  $db='pos2';
  $db=new mysqli('localhost',$user,$pass,$db) or die("Unable to connect");
  $cust = $_POST['customer'];
  $type = $_POST['type'];
  $total = $_POST['total'];

  $insql="INSERT INTO `order` (`id`, `time`, `date`, `customerId`, `type`, `status`, `total`) VALUES (NULL, CURRENT_TIME(), CURRENT_DATE(),$cust,$type, '0',$total)";
  $query=mysqli_query($db,$insql);
  if($query){
    echo "order is made";
    }
}
?>
