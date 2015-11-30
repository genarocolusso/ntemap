<?php $this->load->view("includes/header") ?>
<div class='overall'>
    <div class="menu">
    <div class="container">
      <h2> Map Menu </h2>
        <div class="coords">
       
        </div>

  </div>
 </div>
  </div>

<div class="thenav">
  <div class="container">
    <div class="pull-left">
   <img src="<?php echo base_url() ?>img/NTE.jpg" class="img-responsive" style="max-width: 200px;opacity: 0.7;">
    </div>
    <div class="pull-right"> 
   <a id="nav-toggle" href="#"><span></span></a>
  <span class='menutx'>menu</span>
    </div>

  </div>
  </div>

<div class="container">
<br><br><br><br>
<div class="form-horizontal" id="addform">
<fieldset>
 

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="nome">Local</label>  
  <div class="col-md-5">
  <input id="nome" name="nome" type="text" placeholder="Cidade" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="latitude">latitude</label>  
  <div class="col-md-5">
  <input id="latitude" name="latitude" type="text" placeholder="latitude" class="form-control input-md">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="longitude">longitude</label>  
  <div class="col-md-5">
  <input id="longitude" name="longitude" type="text" placeholder="longitude" class="form-control input-md">
    
  </div>
</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="singlebutton"> </label>
  <div class="col-md-4">
    <button id="singlebutton" name="singlebutton" class="btn btn-primary">Adicionar</button>
  </div>
</div>

</fieldset>
</div>

<div id="map2" class="formmap">

</div>
 
</div> 

<?php $this->load->view("includes/scriptos") ?>
<script type="text/javascript">
    //Autocomplete variables
    var input = document.getElementById('nome');
    var searchform = document.getElementById('addform');
    var place;
    var autocomplete = new google.maps.places.Autocomplete(input);
 
    //Google Map variables
    var map;
    var marker;
 
     
 
       
    $("#nome").on('keydown',  function(){
  place = autocomplete.getPlace();
  var latLng = new google.maps.LatLng(place.geometry.location.lat(),place.geometry.location.lng());
    map.setZoom(10);
  map.panTo(latLng);
  	 
    marker.setPosition(latLng);
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
          map: map 
      });
     
    }
 
    google.maps.event.addDomListener(window, 'load', initialize);
 $(document).ready( function(){

 	$( "#nav-toggle" )
  .click( function() {
    $(this).toggleClass( "active" );
    $(".overall").toggleClass("active");
  });

   


 });

</script>
<?php $this->load->view("includes/footer") ?>
