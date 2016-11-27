<html>
<head>
<?php
$user='root';
$pass='';
$db='pos2';
$name = $_POST['name'];
$phone = $_POST['phone'];
$address = $_POST['address'];
$db=new mysqli('localhost',$user,$pass,$db) or die("Unable to connect");
$sql = "INSERT INTO `customer` (`id`, `name`, `telephone`, `address`) VALUES (NULL, '$name', '$phone', '$address')";
$result2 = mysqli_query($db,$sql);
if($result2){
  $s= 'success';
}
else{
  $s= 'failure';
}
 ?>
 <link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css'>
</head>
  <body>
    <script type="text/javascript">
    alert("<?=$s?>");
    window.location = 'index.php';
    </script>
  </body>
</html>
