 

 var input = document.getElementById('searchTextField');
    var searchform = document.getElementById('formsearch');
    var place;
var options = {
    types: ['(cities)'],
    componentRestrictions: {country: 'br'}
}
    var autocomplete = new google.maps.places.Autocomplete(input,options);
 var map;

  
    $("#search_submit").on('click', input, function(){
  place = autocomplete.getPlace();
  var latLng = new google.maps.LatLng(place.geometry.location.lat(),place.geometry.location.lng());
    map.setZoom(10);
  map.panTo(latLng);

});
 

$(input).keypress(function(event){
  if(event.keyCode == 13){
     $("#search_submit").click();
  }
});
       
 function initMap() {
 
  map = new google.maps.Map(document.getElementById('map'), {
    zoom: 10,
    center: {lat: -29.68725, lng: -53.8154499},
    styles:  [{"elementType":"geometry","stylers":[{"hue":"#ff4400"},{"saturation":-68},{"lightness":-4},{"gamma":0.72}]},{"featureType":"road","elementType":"labels.icon"},{"featureType":"landscape.man_made","elementType":"geometry","stylers":[{"hue":"#0077ff"},{"gamma":3.1}]},{"featureType":"water","stylers":[{"hue":"#00ccff"},{"gamma":0.44},{"saturation":-33}]},{"featureType":"poi.park","stylers":[{"hue":"#44ff00"},{"saturation":-23}]},{"featureType":"water","elementType":"labels.text.fill","stylers":[{"hue":"#007fff"},{"gamma":0.77},{"saturation":65},{"lightness":99}]},{"featureType":"water","elementType":"labels.text.stroke","stylers":[{"gamma":0.11},{"weight":5.6},{"saturation":99},{"hue":"#0091ff"},{"lightness":-86}]},{"featureType":"transit.line","elementType":"geometry","stylers":[{"lightness":-48},{"hue":"#ff5e00"},{"gamma":1.2},{"saturation":-23}]},{"featureType":"transit","elementType":"labels.text.stroke","stylers":[{"saturation":-64},{"hue":"#ff9100"},{"lightness":16},{"gamma":0.47},{"weight":2.7}]}]
});


  var infowindow = new google.maps.InfoWindow;

var marker, i;

for (i = 0; i < locations.length; i++) {  
    marker = new google.maps.Marker({
         position: new google.maps.LatLng(locations[i][1], locations[i][2]),
         map: map
    });

    google.maps.event.addListener(marker, 'click', (function(marker, i) {
         return function() {
             infowindow.setContent(locations[i][0]);
             infowindow.open(map, marker);
         }
    })(marker, i));

    $(".coords").append(' <p data-lat="'+locations[i][1]+'" data-long="'+locations[i][2]+'"> '+locations[i][0]+' </p>');

}

} 
    
   
$(document).ready(function(){
  
 initMap(); 
$( "#nav-toggle" )
  .click( function() {
    $(this).toggleClass( "active" );
    $(".overall").toggleClass("active");
  });

   


$(".menu .coords").on('click', 'p', function(){
  var plat = $(this).attr('data-lat');
  var plng = $(this).attr('data-long');
  var latLng = new google.maps.LatLng(plat, plng);

  map.panTo(latLng);

});

// var movementStrength = 25;
// var height = movementStrength / $(window).height();
// var width = movementStrength / $(window).width();
// $("#chessection").mousemove(function(e){
//           var pageX = e.pageX - ($(window).width() / 2);
//           var pageY = e.pageY - ($(window).height() / 2);
//           var newvalueX = width * pageX * -1 - 30;
//           var newvalueY = height * pageY * -1 - 30;
//           $('.imgflow').css("background-position", newvalueX+"px     "+newvalueY+"px");
// });

     //Autocomplete variables
   

 });

 