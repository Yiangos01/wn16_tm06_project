var tbody;
var cid;
function onloade(){
  readDb();
  status();
  document.getElementById("btnsubmit").onclick=submitt;
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

function status(){
  // Get the modal
  var modal = document.getElementById("myModal");

  // Get the button that opens the modal
  //btn = document.getElementById("myBtn");
  btn = $('#statusbtn0')[0];;
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

}
// When the user clicks the button, open the modal
function stat(id) {
  cid =id
  document.getElementById("myModal").style.display = "block";
}
function submitt() {
    var choice = $('input[name=status]:checked').val();

    jQuery.ajax({
        type: "POST",
        url: 'dp.php',
        data: {status: choice, id: cid},
        success: function (date) {
             location.reload();
            }
    });
}
function displayOrder(id){
  function1='display';
  $.ajax({
    url:"databasetest.php",
    data:{
      id:id,
      function1:function1
    },
    type:"POST",
    success: function(data) {
      alert(data);
    }
  })
}
