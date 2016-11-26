var tbody;
function onloade(){
  readDb();
}
function readDb(){
  var body=document.getElementById('tablebody');
  jQuery.ajax({
      type: "POST",
      url: 'readDatabase.php',
      data: {'username': 'root'},
      success: function (date) {
          document.getElementById('tablebody');
          body.innerHTML+=date;
          }
  });
}
window.onload = onloade;
