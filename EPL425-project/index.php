<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>POS inteface</title>


  <link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css'>
  <?php
    $str = file_get_contents('https://api.foody.com.cy/branch/multimenu/13?auth=c237b4132fff95103441b7231417f7bf39de9e04&skey=SKEY_5823119c798fd&XDEBUG_SESSION_START=PHPSTORM');
    $json = json_decode($str,true);
   ?>
   <link rel="stylesheet" href="css/style.css">

   <script type="text/javascript">
   var JSON;
   var getJSON = function(url, callback) {
    var xhr = new XMLHttpRequest();
    xhr.open("get", url, true);
    xhr.responseType = "json";
    xhr.onload = function() {
      var status = xhr.status;
      if (status == 200) {
        callback(null, xhr.response);
      } else {
        callback(status);
      }
    };
    xhr.send();
    };
    getJSON("https://api.foody.com.cy/branch/multimenu/13?auth=c237b4132fff95103441b7231417f7bf39de9e04&skey=SKEY_5823119c798fd&XDEBUG_SESSION_START=PHPSTORM",
      function(err, data) {
        if (err != null) {
          alert("Something went wrong: " + err);
        } else {
          JSON = data;
          //var cat = document.getElementyId("categories")
          //test.innerHTML=data.categories[0].name;
          for(var obj in data.categories){
            categories.innerHTML +='<li id="obj" onclick="fai('+ obj +')"><a href= \"#\">' + data.categories[obj].name +'</a></li>';
          }
          //menu(data.categories[obj])
          alert("Your query count: " + data.query.count);
        }
      });

      // Get the modal
      var modal = document.getElementById('myModal');

    function fai(cat){
      //menuitems.innerHTML= '<button id="btn" type="button" class=\"btn btn-default btn-lg\">'+ JSON.categories[cunt].name + '</button>';
      //var categories = document.getElementyId(obj);
      menuitems.innerHTML ="";
      for(var obj in JSON.categories[cat].menuitems){
        menuitems.innerHTML += '<button id="btn" type="button" class=\"btn btn-default btn-lg\" onclick="modifiers()" >'+ JSON.categories[cat].menuitems[obj].name + '</button>';

      }

    }

    function modifiers(){
      modal.style.display = "block";
    }



   </script>

</head>

<body>
  <div id="test"></div>
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
    <ul class="nav nav-pills nav-stacked" id='categories'></ul>
  </div>

  <div class="col-xs-8 col-sm-6 col-md-8">
    <p id="menuitems"></p>
  </div>
</div>

<!-- The Modal -->
<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <div class="modal-header">
      <span class="close">×</span>
      <h2>Modal Header</h2>
    </div>
    <div class="modal-body">
      <p>Some text in the Modal Body</p>
      <p>Some other text...</p>
    </div>
    <div class="modal-footer">
      <Button id="btnAddOrder">add to order</Button>
    </div>
  </div>

</div>

<script>
// Get the modal
var modal = document.getElementById('myModal');

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
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
