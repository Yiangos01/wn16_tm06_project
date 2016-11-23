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
  <nav class="navbar navbar-inverse navbar-static-top">
  <div class="container">
    <a href="#" class="navbar-brand ">POS</a>
      <button class = "navbar-toggle" data-toggle="collapse" data-target=".navHeaderCollapse">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <div class="collapse navbar-collapse navHeaderCollapse">
        <ul class="nav navbar-nav navbar-right">
          <li class="active"><a href="#">home</a></li>
          <li><a href="#">home</a></li>
          <li><a href="#">help</a></li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Settings<span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="#">Twitter</a></li>
              <li><a href="#">Facebook</a></li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </nav>

<div class="container col-md-12">
  <div  class="col-xs-3 col-sm-3 col-md-3">
    <ul class="nav nav-pills nav-stacked" id='categories'></ul>
  </div>
  <div class="col-xs-5 col-sm-6 col-md-6">
    <p id="menuitems"></p>
  </div>
  <div class="col-xs-4 col-sm-3 col-md-3">
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
        <span class="right">Value</span><span class="left" id="valueid"></span>
      </div>
      <div class="makeOrder" ><button class="btn btn-success" id="center" >Make the order</button></div>
    </div>
    <div ><p id="param1">asdasdsa</p></div>
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
