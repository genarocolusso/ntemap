<?php header('Access-Control-Allow-Origin: *'); ?>
<?php $this->load->view("admin/header") ?>
<?php $this->load->view("admin/corpo") ?>
<?php $this->load->view("admin/prefoot") ?>


<script type="text/javascript">
    //Autocomplete variables
    var input = document.getElementById('nome');
    var searchform = document.getElementById('addform');
    var place;
    var autocomplete = new google.maps.places.Autocomplete(input);
 
    //Google Map variables
    var map;
    var marker;
 
     
 
       
  
     
google.maps.event.addListener(autocomplete, 'place_changed', function() {
     place = autocomplete.getPlace();
  var latLng = new google.maps.LatLng(place.geometry.location.lat(),place.geometry.location.lng());
    map.setZoom(10);
  map.panTo(latLng);
  marker.setPosition(latLng);
     $("#latitude").val(marker.position.lat()); $("#longitude").val(marker.position.lng());
   
});
 
 
    function initialize() {
      var myLatlng = new google.maps.LatLng(51.517503,-0.133896);
      var mapOptions = {
        zoom: 5,
        center: myLatlng
      }
      map = new google.maps.Map(document.getElementById('map2'), mapOptions);
   marker = new google.maps.Marker({
          position: myLatlng,
          map: map,  
          draggable:true,
        animation: google.maps.Animation.DROP 
      });
     
      google.maps.event.addListener(
    marker,
    'drag',
    function() {
        $("#latitude").val(marker.position.lat()); $("#longitude").val(marker.position.lng());
   
    }
);

   }
 
    google.maps.event.addDomListener(window, 'load', initialize);
 

</script>


<?php $this->load->view("admin/foot") ?>
