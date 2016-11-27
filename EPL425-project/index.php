<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>POS inteface</title>


  <link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css'>
   <link rel="stylesheet" href="css/style.css">
   <script type="text/javascript" src="pos.js"> </script>


</head>

<body>

<div class="container col-md-12">
  <div class="col-xs-1 col-sm-1 col-md-1">
    <nav id="side">
            <ul >
              <hr>
                <li id="navi" > <a href="#home" class="" >menu</a>
                </li>
                <hr>
                <li id="navi" > <a href="order.html" data-scroll="" class="">orders</a>
                </li>
                <hr>
                <li id="navi" > <a href="newClient.php" data-scroll="" class="">clients</a>
                </li>
                <hr>
            </ul>
        </nav>
  </div>

  <div  class="col-xs-2 col-sm-2 col-md-2">
    <ul class="nav nav-pills nav-stacked" id='categories'></ul>
  </div>
  <div class="col-xs-5 col-sm-6 col-md-6">
    <p id="menuitems"></p>
  </div>
  <div class="col-xs-4 col-sm-3 col-md-3">

     Tel: <input type="text" name="tele" id="tel">
     <button id="checkbtn" onclick="checktel()">Valid?</button>

    <form id="type">
  <div class="btn-group-sm" data-toggle="buttons">
    <label class="btn btn-primary active">
        <input class="type" type="radio" name="options" id="delivery" value="delivery" autocomplete="off" checked> delivery
    </label>
    <label class="btn btn-primary">
      <input  class="type" type="radio" name="options" id="dinein" value="dinein" autocomplete="off"> dine in
    </label>
    <label class="btn btn-primary">
      <input class="type" type="radio" name="options" id="takeaway" value="takeaway" autocomplete="off"> take away
    </label>
  </div>

  </form>
  <hr>
    <div class="cachier" id="cachier">
      <h2 class="center"><strong>Order</strong></h2>
      <div class="cachierBody" id="cachierBody"></div>

      <div class="cachierEnd" id="cachierEnd">
        <hr>
        <span class="right">Value</span><span class="left" id="valueid"></span>
      </div>
      <div class="makeOrder" ><button class="btn btn-success" id="center" >Make the order</button></div>
    </div>
  </div>

</div>

<!-- Popup modifiers -->
<div id="modifiersid" class="modifiersClass">
  <!-- Modal content -->
  <div class="modifiers-content">
    <div class="modifiers-header">
      <span class="close">×</span>
      <div id="modifiersHeaderid"></div>
    </div>
    <div  class="modifiers-body">
<form class= "form-inline" id="modifiersbodyid"></form>
    </div>
    <div class="modifiers-footer" id="modifiersfooterid">
    </div>
  </div>
</div>

<script>

var modal = document.getElementById('modifiersid');
var span = document.getElementsByClassName("close")[0];

span.onclick = function() {
    modal.style.display = "none";
}
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js'></script>

</body>
</html>
