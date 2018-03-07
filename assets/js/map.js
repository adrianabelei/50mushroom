  
function initMap() {
    document.getElementById('map').innerText = 'vhvgvgygy';
    
    var options = {
        zoom:10,
        center: {lat:51.956116, lng:4.558640}
    };

    var map = new google.maps.Map(document.getElementById('map'), options);


    var marker = new google.maps.Marker({
      position: {lat:51.9245, lng:4.4695},
       
      map: map,
       icon:"https://developers.google.com/maps/documentation/javascript/examples/full/images/beachflag.png"
    });

var infoWindow = new google.maps.InfoWindow({
    content : "<h1>Evolution Entertainment</h1>"
});

marker.addListener("click", function(){
    infoWindow.open(map,marker);
})
  };




