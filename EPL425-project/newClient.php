<html >
<head>
  <meta charset="UTF-8">
  <title>POS inteface</title>


  <link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css'>
   <link rel="stylesheet" href="css/style.css">
   <script type="text/javascript" src="pos.js"> </script>


</head>
<body>
<form class="form-horizontal" action="client.php" method="post">
<fieldset>

<legend>New Client</legend>

<div class="form-group">
  <label class="col-md-4 control-label" for="name">Name</label>
  <div class="col-md-4">
  <input id="name" name="name" placeholder="" class="form-control input-md" type="text">

  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label" for="phone">phone</label>
  <div class="col-md-4">
  <input id="phone" name="phone" placeholder="" class="form-control input-md" type="text">

  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label" for="address">address</label>
  <div class="col-md-4">
  <input id="address" name="address" placeholder="" class="form-control input-md" type="text">

  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label" for="email">email</label>
  <div class="col-md-4">
  <input id="email" name="email" placeholder="email@gmail.com" class="form-control input-md" type="text">

  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label" for="submit"></label>
  <div class="col-md-4">
    <button id="submit" name="submit" class="btn btn-primary">submit</button>
  </div>
</div>

</fieldset>
</form>
 <div class="col-md-4">
   <a href="index.php" class="btn btn-primary">Back to main menu</a>
 </div>
</body>
</html>
