var infowindow;
  function initMap() {
    infowindow = new google.maps.InfoWindow();
    var map = new google.maps.Map(document.getElementById('map'), {
      zoom: 14,
      center: {lat:34, lng: 55}
    });
    var geocoder = new google.maps.Geocoder();
    var locations;
    var function1="map";
    $.ajax({
      url:"databasetest.php",
      data:{
        function1:function1
      },
      type:"POST",
      success: function(data) {
        locations=data.split("\n");

        for(var j=0;j<locations.length-1;j++){
          geocodeAdd(geocoder, map , locations[j]);
        }
      }
    });


    document.getElementById('submit').addEventListener('click', function() {
      geocodeAddress(geocoder, map);
    });
  }

  function geocodeAddress(geocoder, resultsMap) {

    var address = document.getElementById('address').value;
    geocoder.geocode({'address': address}, function(results, status) {
      if (status === 'OK') {
        resultsMap.setCenter(results[0].geometry.location);
        var marker = new google.maps.Marker({
          map: resultsMap,
          position: results[0].geometry.location
        });
      } else {
        alert('Geocode was not successful for the following reason: ' + status);
      }
    });

  }
  function geocodeAdd(geocoder, resultsMap , addressArg) {
    var Arraddress=addressArg.split("|*|");

    var address=Arraddress[0];

    geocoder.geocode({'address': address}, function(results, status) {
      if (status === 'OK') {
        resultsMap.setCenter(results[0].geometry.location);
        var marker = new google.maps.Marker({
          map: resultsMap,
          position: results[0].geometry.location
        });
		
        google.maps.event.addListener(marker, 'click', function() {
          infowindow.setContent("order id: " + Arraddress[1]+" is " +Arraddress[2]);
          infowindow.open(resultsMap, this);
        });

      } else {
        alert('Geocode was not successful for the following reason: ' + status);
      }
    });
  }
