 

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
       
 function initMap(locations) {
 
  map = new google.maps.Map(document.getElementById('map'), {
    zoom: 6,
    center: {lat: -29.68725, lng: -53.8154499},
    styles:  [{"elementType":"geometry","stylers":[{"hue":"#ff4400"},{"saturation":-68},{"lightness":-4},{"gamma":0.72}]},{"featureType":"road","elementType":"labels.icon"},{"featureType":"landscape.man_made","elementType":"geometry","stylers":[{"hue":"#0077ff"},{"gamma":3.1}]},{"featureType":"water","stylers":[{"hue":"#00ccff"},{"gamma":0.44},{"saturation":-33}]},{"featureType":"poi.park","stylers":[{"hue":"#44ff00"},{"saturation":-23}]},{"featureType":"water","elementType":"labels.text.fill","stylers":[{"hue":"#007fff"},{"gamma":0.77},{"saturation":65},{"lightness":99}]},{"featureType":"water","elementType":"labels.text.stroke","stylers":[{"gamma":0.11},{"weight":5.6},{"saturation":99},{"hue":"#0091ff"},{"lightness":-86}]},{"featureType":"transit.line","elementType":"geometry","stylers":[{"lightness":-48},{"hue":"#ff5e00"},{"gamma":1.2},{"saturation":-23}]},{"featureType":"transit","elementType":"labels.text.stroke","stylers":[{"saturation":-64},{"hue":"#ff9100"},{"lightness":16},{"gamma":0.47},{"weight":2.7}]}]
});


  var infowindow = new google.maps.InfoWindow;

var marker, i;

for (i = 0; i < locations.length; i++) {  
    marker = new google.maps.Marker({
         position: new google.maps.LatLng(locations[i].latitude, locations[i].longitude),
         icon: 'http://maps.google.com/mapfiles/ms/icons/blue-dot.png',
         map: map
    });

    google.maps.event.addListener(marker, 'click', (function(marker, i) {
         return function() {
             infowindow.setContent(locations[i].name+'<p><img src="img/'+locations[i].id+'.jpg" class="littleimg"></p> <p><a href="poloinfo/'+locations[i].id+'">Mais Informações</a></p>');
             infowindow.open(map, marker);
         }
    })(marker, i));

    
      $(".coords").append(' <p data-lat="'+locations[i][1]+'" data-long="'+locations[i][2]+'"> '+locations[i][0]+' </p>     <p><a href="poloinfo/'+locations[i].id+'">Mais Informações</a></p>');

}

} 
   function changeMap(locations, color) {
 
  map = new google.maps.Map(document.getElementById('map'), {
    zoom: 6,
    center: {lat: -29.68725, lng: -53.8154499},    
    styles:  [{"elementType":"geometry","stylers":[{"hue":"#ff4400"},{"saturation":-68},{"lightness":-4},{"gamma":0.72}]},{"featureType":"road","elementType":"labels.icon"},{"featureType":"landscape.man_made","elementType":"geometry","stylers":[{"hue":"#0077ff"},{"gamma":3.1}]},{"featureType":"water","stylers":[{"hue":"#00ccff"},{"gamma":0.44},{"saturation":-33}]},{"featureType":"poi.park","stylers":[{"hue":"#44ff00"},{"saturation":-23}]},{"featureType":"water","elementType":"labels.text.fill","stylers":[{"hue":"#007fff"},{"gamma":0.77},{"saturation":65},{"lightness":99}]},{"featureType":"water","elementType":"labels.text.stroke","stylers":[{"gamma":0.11},{"weight":5.6},{"saturation":99},{"hue":"#0091ff"},{"lightness":-86}]},{"featureType":"transit.line","elementType":"geometry","stylers":[{"lightness":-48},{"hue":"#ff5e00"},{"gamma":1.2},{"saturation":-23}]},{"featureType":"transit","elementType":"labels.text.stroke","stylers":[{"saturation":-64},{"hue":"#ff9100"},{"lightness":16},{"gamma":0.47},{"weight":2.7}]}]
});


  var infowindow = new google.maps.InfoWindow;

var marker, i;

for (i = 0; i < locations.length; i++) {  
    marker = new google.maps.Marker({

     position: new google.maps.LatLng(locations[i].latitude, locations[i].longitude),
     map: map, 
     icon: 'http://maps.google.com/mapfiles/ms/icons/'+color+'-dot.png'
     
  });

    google.maps.event.addListener(marker, 'click', (function(marker, i) {
         return function() {
              infowindow.setContent(locations[i].name+'<p><img src="img/'+locations[i].id+'.jpg" class="littleimg"></p> <p><a href="poloinfo/'+locations[i].id+'">Mais Informações</a></p>');
            infowindow.open(map, marker);
         }
    })(marker, i));

    
    $(".coords").append(' <p data-lat="'+locations[i][1]+'" data-long="'+locations[i][2]+'"> '+locations[i][0]+' </p>     <p><a href="poloinfo/'+locations[i].id+'">Mais Informações</a></p>');

}

}   
   
$(document).ready(function(){
  
 initMap(locationsAll); 
$( ".pull-right" )
  .click( function() {
    $("#nav-toggle",this).toggleClass( "active" );
    $(".overall").toggleClass("active");
  });

$(".ligaativos").on("click", function(){

 changeMap(locationsAtivas, "green");
});
$(".ligatodos").on("click", function(){

 changeMap(locationsAll, "blue");
});
$(".ligainativos").on("click", function(){

 changeMap(locationsInativas, "red");
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

 