<html >
<head>
  <meta charset="UTF-8">
  <title>POS inteface</title>


  <link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css'>
   <link rel="stylesheet" href="css/style.css">
   <script type="text/javascript" src="pos.js"> </script>
   <link href="css/simple-sidebar.css" rel="stylesheet">


</head>
<body>
<div id="wrapper">
<form class="form-horizontal" action="client.php" method="post">
<fieldset>
  <div id="sidebar-wrapper">
      <ul class="sidebar-nav">
          <li>
              <a href="index.php" class="" >menu</a>
          </li>
          <li>
              <a href="order.html" data-scroll="" class="">orders</a>
          </li>
          <li>
              <a href="newClient.php" data-scroll="" class="">clients</a>
          </li>
          <li>
              <a href="map.html" data-scroll="" class="">map</a>
          </li>
      </ul>
  </div>
<div id="page-content-wrapper">
<legend id="new">New Client</legend>

<div class="form-group">
  <label class="col-xs-4 col-md-4 control-label" for="name">Name</label>
  <div class="col-xs-4 col-md-4">
  <input id="name" name="name" required  placeholder="" class="form-control input-md" type="text">

  </div>
</div>

<div class="form-group">
  <label class="col-xs-4 col-md-4 control-label" for="phone">phone</label>
  <div class="col-xs-4 col-md-4">
  <input id="phone" name="phone" required  placeholder="" class="form-control input-md" type="text">

  </div>
</div>

<div class="form-group">
  <label class="col-xs-4 col-md-4 control-label" for="address">address</label>
  <div class="col-xs-4 col-md-4">
  <input id="address" name="address" required  placeholder="" class="form-control input-md" type="text">

  </div>
</div>

<div class="form-group">
  <label class="col-xs-4 col-md-4 control-label" for="email">email</label>
  <div class="col-xs-4 col-md-4">
  <input id="email" name="email" placeholder="email@gmail.com" class="form-control input-md" type="text">

  </div>
</div>

<div class="form-group">
  <label class="col-xs-4 col-md-4 control-label" for="submit"></label>
  <div class="col-xs-4 col-md-4">
    <button id="submit" name="submit" class="btn btn-primary">submit</button>
  </div>
</div>

</fieldset>
</form>
</div>
</div>
</body>
</html>
