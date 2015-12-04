<?php $this->load->view("includes/header") ?>
 
    <div class='overall'>
    <div class="menu">
     
      <div class="row centralmenu">

  <div class="col-md-12">
      <div class="socialicon">
      <i class="fa fa-file  "></i> Todos os Polos
      </div>
  </div> 
  <div class="col-md-12">
      <div class="socialicon">
      <i class="fa fa-cab   "></i> Polos Ativos
      </div>
  </div> 
  <div class="col-md-12">
      <div class="socialicon">
      <i class="fa fa-fighter-jet "></i> Polos Inativos
      </div>
  </div> 
  <div class="col-md-12">
      <div class="socialicon">
      <i class="fa fa-cc-visa  "></i> 
      </div>
  </div> 


      </div>
  </div>
 
  </div>

<div class="thenav">
  <div class="container">
    <div class="pull-left">
   <img src="img/NTE.jpg" class="img-responsive" style="max-width: 200px;opacity: 0.7;">
    </div>
    <div class="pull-right"> 
   <a id="nav-toggle" href="#"><span></span></a>
  <span class='menutx'>menu</span>
    </div>

  </div>
  </div>

 <div id="map">
  

 </div>

<div id="formsearch">
  
  <input id="searchTextField" name="textinput" type="search" placeholder="Buscar polo" class="home__search">
      
  <input type="button" value="⌕" id="search_submit" class="home__search__icon">
 
 
</div>
   
       
  
<?php $this->load->view("includes/scriptos") ?>
      
  
<?php $this->load->view("includes/scriptos") ?>
 <?php
$ar = $polos;
?>
<script type="text/javascript">
var locations = <?php echo json_encode($ar) ?>;
// ["apple","orange",1,false,null,true,8];
// access 4th element in array
 
</script>
         <script src="<?php echo base_url(); ?>js/custom.js"></script>
<?php $this->load->view("includes/footer") ?>
