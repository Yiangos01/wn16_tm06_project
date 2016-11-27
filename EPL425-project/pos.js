
   var array=[];
   var JSON;
   var k=0;
   var value=0;
   var cardOrder=[];
   var orderid=0;
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
    getJSON("https://api.foody.com.cy/branch/multimenu/180?auth=58e286a49b98c4314ac75888f558a763b4c3d8d5&skey=SKEY_583a107bc9145&XDEBUG_SESSION_START=PHPSTORM",

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
        if(JSON.categories[cat].menuitems[obj].name !== '' && JSON.categories[cat].menuitems[obj].name !== null){
        menuitems.innerHTML += '<button id="btn" type="button" class=\"btn btn-default \" onclick="modifiers('+cat+','+obj+')" >'+ JSON.categories[cat].menuitems[obj].name + '</button>';
      }
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
           modifiersbodyid.innerHTML +='<div class="col-xs-2 col-md-2"><div class=" form-group "><input type="checkbox" name="fancy-checkbox-warning" id="fancy-checkbox-warning\''+o1+o2+'\'" autocomplete="off" onclick="extras('+cat+','+mitems+','+o1+','+o2+')" /><div><label for="fancy-checkbox-warning\''+o1+o2+'\'" id="btn" class=" btn">'+JSON.categories[cat].menuitems[mitems].modifiers.categories[o1].modifiers[o2].name+'</label></div></div></div>';
         }
       }
       modifiersfooterid.innerHTML= '<Button id="btnAddOrder" onclick="order('+cat+','+mitems+')">add to order</Button>'
     }else{
       array.push(JSON.categories[cat].menuitems[mitems].name);
       cardOrder.push({'id':JSON.categories[cat].menuitems[mitems].id});
       $(cachierBody).append("<lu id="+k+"><div class = close1 id=close1"+k+" onclick=close1("+k+","+JSON.categories[cat].menuitems[mitems].price+","+JSON.categories[cat].menuitems[mitems].id+")><a href=#>x</a></div><li>"+JSON.categories[cat].menuitems[mitems].name+"<div class = left>"+JSON.categories[cat].menuitems[mitems].price+"&#8364;</div></li><hr>");
       value+=parseFloat(JSON.categories[cat].menuitems[mitems].price);
       valueid.innerHTML=value.toFixed(2);
       k++;
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
    function close1(i,value1,id){
      $('#close1'+i).parent().remove();
      value-=parseFloat(value1);
      var i = cardOrder.indexOf(id);
      cardOrder.splice(i,1);
      valueid.innerHTML=value.toFixed(2)+" &#8364;";
    }
    function order(cat,mitems){
      cardOrder.push({'id':JSON.categories[cat].menuitems[mitems].id});
      var extras = "<lu id="+k+"><div class = close1 id=close1"+k+" onclick=\"close1("+k+","+JSON.categories[cat].menuitems[mitems].price+","+JSON.categories[cat].menuitems[mitems].id+")\"><a href=#>x</a></div><li>"+JSON.categories[cat].menuitems[mitems].name+"<div class = left>"+JSON.categories[cat].menuitems[mitems].price+"&#8364;</div></li>";
      k++;
      var len=array.length;
      for(var i=0;i<len; i++){
          extras+='<li class="extra">[+]'+array[i]+'</li>';
       }
       extras+="<hr></lu>";
       $(cachierBody).append(extras);
       value+=parseFloat(JSON.categories[cat].menuitems[mitems].price);
       valueid.innerHTML=value.toFixed(2);
       modal.style.display = "none";
     }

     function makeOrder(){
       document.getElementById("center").onclick=Ordermade;
     }
     function Ordermade(){
       var tel=$('input[name=tele]').val();
       var type=$('input[name=options]:checked').val();
       if(tel==="" && type==="delivery"){
         alert("give a phone number");
       }else{
       $('input[name=tele]').val("");
      if(type=="delivery"){
         type=0;
       }else if (type=="dinein") {
         type=1;
       }else {
        type=2;
       }
       var total=valueid.innerHTML;
       var function1='order';
       $.ajax({
         url:"databasetest.php",
         data:{
           tel:tel,
           function1:function1,
           type:type,
           total:total,
         },
         type:"POST",
         success: function(data) {
           items();
           alert(data);
         }
       })
     }
   }
function items(){
      var function1='item';
      for(var i=0;i<cardOrder.length;i++){
         $.ajax({
           url:"databasetest.php",
           data:{
             function1:function1,
             itemid:cardOrder[i].id
           },
           type:"POST",
           success: function(data) {
             //alert(data);
           }
         });
         //window.alert(type);
       }
         value=0;
        cardOrder=[];
        cachierBody.innerHTML='';
        valueid.innerHTML=0;
       }
 function checktel(){
   function1="telephone";
   var tel = $('input[name=tele]').val();
   $.ajax({
     url:"databasetest.php",
     data:{
       function1:function1,
       tel:tel
     },
     type:"POST",
     success: function(data) {
       alert(data);
     }
   });
 }
window.onload = makeOrder;
