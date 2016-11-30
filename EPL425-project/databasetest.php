<?php


switch($_POST['function1']){
    case 'order': order(); break;
    case 'item': items(); break;
    case 'telephone': address();break;
    case 'display': display();break;
    case 'map' : showmap(); break;
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
  $type = $_POST['type'];
  $total = $_POST['total'];
  $tel = $_POST['tel'];
  $sql = "SELECT id FROM `customer` WHERE telephone=$tel";
  $result2 = mysqli_query($db,$sql);
  if($type==0){
  $row = mysqli_fetch_array($result2);
  }
  if($type!=0){
    $row[0]=0;
  }
  $insql="INSERT INTO `order` (`id`, `time`, `date`, `customerId`, `type`, `status`, `total`) VALUES (NULL, CURRENT_TIME(), CURRENT_DATE(),$row[0],$type, '0',$total)";
  $query=mysqli_query($db,$insql);
  if($query){
    echo  "order is made";
    }
}

function address(){
  $user='root';
  $pass='';
  $db='pos2';
  $db=new mysqli('localhost',$user,$pass,$db) or die("Unable to connect");
  $tel = $_POST['tel'];
  $sql = "SELECT * FROM `customer` WHERE telephone=$tel";
  $result2 = mysqli_query($db,$sql);

    $row = mysqli_fetch_array($result2);
    if($row[1]==""){
      echo "Client doesn't exist";
    }else{
      echo "Name:  ".$row[1]."\nphone number:  ".$row[2]." \naddress:  ".$row[3];
    }


}
  function display(){
    $result=array();
    $user='root';
    $pass='';
    $db='pos2';
    $db=new mysqli('localhost',$user,$pass,$db) or die("Unable to connect");
    $id = $_POST['id'];
    $sql = "SELECT * FROM `orderitems` join `items` ON orderitems.itemid=items.id WHERE orderitems.orderid=$id";
    $result2 = mysqli_query($db,$sql);
    while($row=mysqli_fetch_array($result2)){
      array_push($result,$row[3]."\n");
    }
    echo implode(" ",$result);
  }

  function showmap(){
    $result=array();
    $user='root';
    $pass='';
    $db='pos2';
    $db=new mysqli('localhost',$user,$pass,$db) or die("Unable to connect");
    $sql = "SELECT * FROM `order` JOIN `customer` WHERE order.customerId=customer.id AND order.type=0 AND order.status!=1 and order.status!=3";
    $result2 = mysqli_query($db,$sql);
    while($row=mysqli_fetch_array($result2)){
      array_push($result,$row[10]."\n");
  }
    echo implode(" ",$result);
  }
?>
