<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>POS inteface</title>


  <link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css'>
   <link rel="stylesheet" href="css/style.css">

   <script type="text/javascript">
    var array=[];
   var JSON;
   var i=0;
   var value=0;
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
    getJSON("https://api.foody.com.cy/branch/multimenu/13?auth=be0eeec6e79c85f1f89318afc8ca6dec58c1a07e&skey=SKEY_58270e7617b4a&XDEBUG_SESSION_START=PHPSTORM",
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
      var modal = document.getElementById('modifiersid');

    function fai(cat){
      //menuitems.innerHTML= '<button id="btn" type="button" class=\"btn btn-default btn-lg\">'+ JSON.categories[cunt].name + '</button>';
      //var categories = document.getElementyId(obj);
      menuitems.innerHTML ="";
      for(var obj in JSON.categories[cat].menuitems){
        menuitems.innerHTML += '<button id="btn" type="button" class=\"btn btn-default btn-lg\" onclick="modifiers('+cat+','+obj+')" >'+ JSON.categories[cat].menuitems[obj].name + '</button>';

      }

    }

    function modifiers(cat,mitems){
      array=[];
      if(JSON.categories[cat].menuitems[mitems].modifiers.hasmodifiers){
      modal.style.display = "block";
      modifiersHeaderid.innerHTML = '<h2>'+JSON.categories[cat].menuitems[mitems].name+'</h2>';
      modifiersbodyid.innerHTML= ' ';
      for(var o1 in JSON.categories[cat].menuitems[mitems].modifiers.categories){
         modifiersbodyid.innerHTML +='<div class="col-xs-12 col-md-12"<p><u>'+JSON.categories[cat].menuitems[mitems].modifiers.categories[o1].name+'</u></p></div>';

         for(var o2 in JSON.categories[cat].menuitems[mitems].modifiers.categories[o1].modifiers){
           modifiersbodyid.innerHTML +='<div class="col-xs-4 col-md-4"><div class=" form-group "><input type="checkbox" name="fancy-checkbox-warning" id="fancy-checkbox-warning\''+o1+o2+'\'" autocomplete="off" onclick="extras('+cat+','+mitems+','+o1+','+o2+')" /><div class="[ btn-group ]"><label for="fancy-checkbox-warning\''+o1+o2+'\'" class="[ btn btn-warning ]"><span class="[ glyphicon glyphicon-ok ]"></span>  <span> </span></label><label for="fancy-checkbox-warning\''+o1+o2+'\'" class="[ btn btn-default active ]">'+JSON.categories[cat].menuitems[mitems].modifiers.categories[o1].modifiers[o2].name+'</label></div></div></div></div>';
         }
       }
       modifiersfooterid.innerHTML= '<Button id="btnAddOrder" onclick="order('+cat+','+mitems+')">add to order</Button>'
      }
    }

    function extras(cat,mitems,o1,o2){
      if(array.indexOf(JSON.categories[cat].menuitems[mitems].modifiers.categories[o1].modifiers[o2].name)>-1){
        var i = array.indexOf(JSON.categories[cat].menuitems[mitems].modifiers.categories[o1].modifiers[o2].name);
        array.splice(i,1);
      }else{
        array.push(JSON.categories[cat].menuitems[mitems].modifiers.categories[o1].modifiers[o2].name);
      }
    }
    function close1(i,value1){
      $('#close1'+i).parent().parent().remove();
      value-=parseFloat(value1);
      valueid.innerHTML=value.toFixed(2);
    }
    function order(cat,mitems){
       var extras = "<lu id="+i+"><li>"+JSON.categories[cat].menuitems[mitems].name+"<div class = left>"+JSON.categories[cat].menuitems[mitems].price+"&#8364;</div><div class = close1 id=close1"+i+" onclick=\"close1("+i+","+JSON.categories[cat].menuitems[mitems].price+")\"><a href=#>x</a></div></li>";
       i++;
       var len=array.length;
      for(var i=0;i<len; i++){
          extras+="<li class=extra><p>[+]"+array[i]+"</p></li>";
       }
       extras+="<hr></lu>";
       $(cachierBody).append(extras);
       value+=parseFloat(JSON.categories[cat].menuitems[mitems].price);
       valueid.innerHTML=value.toFixed(2);
       modal.style.display = "none";
     }

   </script>
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
  <div  class="col-xs-3 col-md-3">
    <ul class="nav nav-pills nav-stacked" id='categories'></ul>
  </div>
  <div class="col-xs-6 col-sm-6 col-md-6">
    <p id="menuitems"></p>
  </div>
  <div class="col-xs-3 col-md-3">
    <div class="cachier" id="cachier">
      <h2 class="center"><strong>Order</strong></h2>
      <div class="cachierBody" id="cachierBody">
      </div>
      <div class"cachierEnd" id="cachierEnd">
        <span class="right">Value</span><span class="left" id="valueid"></span>
      </div>
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
<form class= "form-inline" id="modifiersbodyid">
</form>
    </div>
    <div class="modifiers-footer" id="modifiersfooterid">
    </div>
  </div>
</div>
<script>
// Get the modal
var modal = document.getElementById('modifiersid');

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
