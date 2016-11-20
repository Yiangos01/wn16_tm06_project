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
getJSON("https://api.foody.com.cy/branch/multimenu/180?auth=b7104d36433c53ab2b45e287d055b5deb1cb4a50&skey=SKEY_5830cbccaedca&XDEBUG_SESSION_START=PHPSTORM",
  function(err, data) {
    if (err != null) {
      alert("Something went wrong: " + err);
    } else {
      JSON = data;
      //var cat = document.getElementyId("categories")
      //test.innerHTML=data.categories[0].name;
      for(var obj in data.categories){
        for(var o2 in data.categories[obj].menuitems){
        items.innerHTML +='<p>INSERT INTO \'items\'(\'id\',\'name\') VALUES (\'' + JSON.categories[obj].menuitems[o2].id+"\' , \'"+JSON.categories[obj].menuitems[o2].name +'\')</p>';
      }
      }
      //menu(data.categories[obj])
      alert("Your query count: " + data.query.count);
    }
  });

</script>
</head>

<body>
  <div id="items">
  </div>
</body>
</html>
