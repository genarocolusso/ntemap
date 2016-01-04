<?php $this->load->view("includes/header") ?>
 
    <div class='overall'>
    <div class="menu">
     
      <div class="row centralmenu">

  <div class="col-md-12">
      <div class="socialicon ligatodos">
      <i class="fa fa-check-circle-o azul "></i> Todos os Polos
      </div>
  </div> 
  <div class="col-md-12">
      <div class="socialicon ligaativos">
      <i class="fa fa-check  verde  "></i> Polos Ativos
      </div>
  </div> 
  <div class="col-md-12">
      <div class="socialicon ligainativos">
      <i class="fa fa-ban vermelho"></i> Polos Inativos
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
    <div class="pull-right" style="height: 60px"> 
   <a id="nav-toggle" href="#"><span></span></a>
  <span class='menutx'>menu</span>
    </div>

  </div>
  </div>

 <div id="map">
  

 </div>

<div id="formsearch" style="display: none">
  
  <input id="searchTextField" name="textinput" type="search" placeholder="Buscar polo" class="home__search">
      
  <input type="button" value="⌕" id="search_submit" class="home__search__icon">
 
 
</div>
   
       
   
      
  
<?php $this->load->view("includes/scriptos") ?>
 <?php
$todos = $polos;

?>
<script type="text/javascript">
var locationsAll = <?php echo json_encode($todos) ?>;
var locationsAtivas =  <?php echo json_encode($ativos) ?>;
var locationsInativas =  <?php echo json_encode($inativos) ?>;
// ["apple","orange",1,false,null,true,8];
// access 4th element in array
 
</script>
         <script src="<?php echo base_url(); ?>js/custom.js"></script>
<?php $this->load->view("includes/footer") ?>
