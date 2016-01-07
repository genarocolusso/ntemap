<?php header('Access-Control-Allow-Origin: *'); ?>
<?php $this->load->view("infopolos/header") ?>
<?php 

foreach ($polos as $key => $value) { ?>
<header id="poloheader" style="background-image: url(../img/<?=$value['id']?>.jpg)">

  <div class="container text-center">


    <h1 style="color: #fff; text-shadow: 1px 1px 9px #000"><i class="fa fa-map-o"></i> Polo - <?=$value['name']?></h1>



  </div>

</header>
<?php } ?>
<section id="numeros" class="pad30">
  <div class="container text-center">

    <br>

    <?php if(isset($infopolo)){ ?>
    <div class="numberpolos ">
    <h1 class=""> Números do polo </h1><br>
      <div class="row">

        <div class="col-sm-6" style="margin: 65px 0px;">
          <div style="font-size:6em;">
            <?php 
            $nalunos = 0 ;
            foreach ($infopolo as $key => $value) {
              $nalunos += $value['numalunos'];
            } ?>

            <span class="cresce"><?= $nalunos ?></span></div><br> Alunos
          </div>
          <div class="col-sm-6" style="margin: 65px 0px;">
            <span class="cresce2" style="font-size:6em;"><?= sizeof($infopolo)?></span><br>  Cursos
          </div>


        </div>
      </div>
      <?php }else {
        ?>
        <div class="alert alert-danger">
          <h2> Sem Informações </h2>
          <p> No momento não temos informações adicionadas ao curso. </p>
        </div>
        <?php } ?>
      </div>
    </section>
    <section id="poloscontatos" class="pad30">
    <div class="container text-center">
     <?php foreach ($infocontato as $key => $value) {
      
        ?>
         <h1 class=""> Informações sobre o polo </h1><br>
         <div class="row grey">
          <div class="col-md-4 mar10">
          <h3><i class="fa fa-comments-o"></i> Contato</h3>
          <div class="infotext">
          <?=$value['contato']?> <br>
           <?=$value['email']?>
          </div>
          </div>
          <div class="col-md-4 mar10">
           <h3><i class="fa fa-university"></i> Coordenação</h3>
           <div class="infotext">
          Coordenador:  <?=$value['coordenacao']?> <br>
           <?=$value['coordemail']?>
          </div>
          </div>
          <div class="col-md-4 mar10">
          <h3><i class="fa fa-location-arrow"></i> Endereço</h3>
          <div class="infotext">
            <?=$value['endereco']?>
           </div>
          </div>
           
    </div>
       <?php } ?>
       <br>
       <hr>
        <div class="row grey">
          <div class="col-md-6 mar10">
          <h3><i class="fa fa-graduation-cap"></i> Graduação</h3>
          <div class="infotext">
           <?php foreach ($infopolo as $key => $value) {
       if($value['nivelgrad']==1){
        ?>
        <p> <?= $value['nome'] ?></p>
        <?php } }?>
          </div>
          </div>
          <div class="col-md-6 mar10">
           <h3><i class="fa fa-book"></i> Pós-Graduação</h3>
           <div class="infotext">
           <?php foreach ($infopolo as $key => $value) {
      
           if($value['nivelgrad']==2){ ?>
         <p><?= $value['nome'] ?>  </p>
        <?php } }?>
          </div>
          </div>
           
           
    </div>
    <br>
       <a href="<?=base_url()?>"><div class="btn btn-success btn-lg"><i class="fa fa-map-o"></i> Voltar para o mapa</div></a>
    </div>

  </section>


 <?php $this->load->view("includes/scriptos") ?>

 <footer  class="pad30 polofooter">


 </footer>

  <script type="text/javascript">
jQuery({ Counter: 0 }).animate({ Counter: $('.cresce').text() }, {
  duration: 4000,
  easing: 'swing',
  step: function () {
    $('.cresce').text(Math.ceil(this.Counter));
  }
});
jQuery({ Counter: 0 }).animate({ Counter: $('.cresce2').text() }, {
  duration: 4000,
  easing: 'swing',
  step: function () {
    $('.cresce2').text(Math.ceil(this.Counter));
  }
});
  </script>


  <?php $this->load->view("includes/footer") ?>
