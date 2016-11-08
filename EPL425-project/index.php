<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>POS inteface</title>


  <link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css'>
  <?php
    $str = file_get_contents('https://api.foody.com.cy/branch/multimenu/13?auth=fe5df6b03af002742b6539e6122009e35538b24c&skey=SKEY_5821c4ca697f6&XDEBUG_SESSION_START=PHPSTORM');
    $json = json_decode($str,true);
   ?>
   <link rel="stylesheet" href="css/style.css">

   <script type="text/javascript">
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
    getJSON("https://api.foody.com.cy/branch/multimenu/13?auth=fe5df6b03af002742b6539e6122009e35538b24c&skey=SKEY_5821c4ca697f6&XDEBUG_SESSION_START=PHPSTORM",
      function(err, data) {
        if (err != null) {
          alert("Something went wrong: " + err);
        } else {
          //var cat = document.getElementyId("categories")
          //test.innerHTML=data.categories[0].name;
          for(var obj in data.categories){
            categories.innerHTML +='<li id="obj" onclick="fai(\''+ menu(data.categories[obj]) +'\')"><a href= \"#\">' + data.categories[obj].name +'</a></li>';
          }

          alert("Your query count: " + data.query.count);
        }
      });

      function menu(categories){
        var button
        for(var obj in categories.menuitems){
          button += "<button id=\"btn\" type=\"button\" class=\"btn btn-default btn-lg\">"+ categories.menuitems[obj].name + "</button>";
        }
        //return button;
      }


    function fai(cunt){
      //menuitems.innerHTML= '<button id="btn" type="button" class=\"btn btn-default btn-lg\">'+ cunt + '</button>';
      //var categories = document.getElementyId(obj);
      //for(var obj in cat.menuitems){
        //menuitems.innerHTML += '<button id="btn" type="button" class=\"btn btn-default btn-lg\">'+ cat.menuitems[obj].name + '</button>';
      //}
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
    <ul class="nav nav-pills nav-stacked" id="categories">
       <!--
      echo '<pre>' . print_r($json,true) . '</pre>';
      foreach ($json['categories'] as $field => $value) {
          $temp=$value['name'];
            echo "<li id=$field ><a href=\"#\">$temp</a></li>";
    }     -->
    </ul>
  </div>

  <div class="col-xs-8 col-sm-6 col-md-8">
    <p id="menuitems"></p>
  </div>
</div>
</div>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js'></script>


</body>
</html>
