<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>POS inteface</title>


  <link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css'>

      <link rel="stylesheet" href="css/style.css">

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

<div class="container">


  <div  class="col-xs-4 col-md-4">
    <ul class="nav nav-pills nav-stacked">
      <li id="l" ><a href="#">1</a></li>
      <li id="l"><a href="#">2</a></li>
      <li id="l" class="active"><a href="#">3</a></li>
      <li id="l"><a href="#">4</a></li>
      <li id="l"><a href="#">5</a></li>
    </ul>
  </div>

  <div class="col-xs-8 col-sm-6 col-md-8">
    <p id="h">
        <?php
          for($i=0;$i<5;$i++){
         ?>
          <button id="btn" type="button" class="btn btn-default btn-lg">Large button</button>
          <?php
        }
        ?>
    </p>
  </div>
</div>
</div>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js'></script>


</body>
</html>
