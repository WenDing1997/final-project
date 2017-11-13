/*The following code is modified from w3schools.com*/
function myMap() {
  var mapCanvas = document.getElementById("map");
  var myCenter = new google.maps.LatLng(42.6364,-76.2942);
  var mapOptions = {center: myCenter, zoom: 10};
  var map = new google.maps.Map(mapCanvas,mapOptions);
  var marker = new google.maps.Marker({
    position: myCenter,
    // animation: google.maps.Animation.BOUNCE
  });
  marker.setMap(map);
}
