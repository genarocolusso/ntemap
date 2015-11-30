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

         <script src="<?php echo base_url(); ?>js/custom.js"></script>
<?php $this->load->view("includes/footer") ?>
