var tbody;
function onloade(){
  document.getElementById('testbtn').onclick=test;
}
function test(){
  var body=document.getElementById('tablebody');
  body.innerHTML+='<tr><td><strong>showSpeed</strong></td> <td>15</td> <td>The speed of the show/reveal</td> </tr>';

}

window.onload = onloade;

jQuery.ajax({
    type: "POST",
    url: 'readDatabase.php',
    success: function (obj, textstatus) {
                  if( !('error' in obj) ) {
                    document.getElementById('tablebody');
                    body.innerHTML+='<tr><td><strong>showSpeed</strong></td> <td>15</td> <td>The speed of the show/reveal</td> </tr>';
                  }
                  else {
                      console.log(obj.error);
                  }
            }
});
