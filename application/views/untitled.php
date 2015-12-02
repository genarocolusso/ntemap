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
<div class="msgaviso"> Aviso </div>

<div class="container">
<br><br><br><br>

<?php
 
	$attr = 'id="addform"'; //The form will have the id 'my_form'
 echo form_open_multipart('index.php/painel/cadastrar',$attr);
  ?>

<fieldset>
 
<h2 class="text-center"> Adicionar novo Polo </h2>
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
  <input id="latitude" name="latitude" type="text" placeholder="latitude" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="longitude">longitude</label>  
  <div class="col-md-5">
  <input id="longitude" name="longitude" type="text" placeholder="longitude" class="form-control input-md" required="">
    
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
</form>

<div id="map2" class="formmap">

</div>
 
 <hr>
<?php if($polos){ ?>
 	<table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>Name</th>
                <th>Latitude</th>
                <th>Longitude</th> 
                <th>Action</th>
            </tr>
        </thead>
         <tbody>
  <?php foreach ($polos as $key ) { ?>
  			  <tr>
                <td><?= $key['name']?></td>
                <td><?= $key['latitude']?></td>
                <td><?= $key['longitude']?></td>
                <td> - </td>
                 
            </tr>



 <?php  }

 ?>
  </tbody>
    </table> <?php } ?>
</div> 

<?php $this->load->view("includes/scriptos") ?>
<script type="text/javascript">
            $(document).ready(function(){
            		 
						    $('#example').DataTable();
						 
                $("#botaopraenviarpromapa").click(function(){
                        //alert("ola");
                       
                        $.ajax({ 

                                url: '<?= base_url(); ?>' + 'index.php/painel/cadastrar',
                                type: 'POST',
                                data: $("#addform").serializeArray(),                                
                                success: function(msg){
                                    $("#mensagem").html(msg);
                                    if(msg == 'Cadastrado com sucesso!!'){
                                    	$(".msgaviso").html(msg);
                                    	$(".msgaviso").addClass("active");
                                    	setInterval(function(){ $(".msgaviso").removeClass("active"); }, 5000);
                                        jQuery.fn.reset = function(){
                                                $(this).each(function(){ this.reset();});
                                            }
                                        $("#addform").reset();
                                    }
                                    }
                            });
                        return false;
                    });
            });     
        </script>
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
 $(document).ready( function(){

 	$( "#nav-toggle" )
  .click( function() {
    $(this).toggleClass( "active" );
    $(".overall").toggleClass("active");
  });

   


 });

</script>