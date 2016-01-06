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
      <div class="row">

        <div class="col-md-3" style="margin: 65px 5px;">
          <span style="font-size:6em;">
            <?php 
            $nalunos = 0 ;
            foreach ($infopolo as $key => $value) {
              $nalunos += $value['numalunos'];
            } ?>

            <?= $nalunos ?></span><br> Alunos
          </div>
          <div class="col-md-3" style="margin: 65px 5px;">
            <span style="font-size:6em;"><?= sizeof($infopolo)?></span><br>  Cursos
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
    <div class="container">
         <h1 class="text-center"> Informações para contato </h1><br>
         <div class="row grey">
          <div class="col-md-4 mar10">
          <h3><i class="fa fa-comments-o"></i> Contato</h3>
          55 3222-2323 <br>
          contato@ead.ufsm.br
          </div>
          <div class="col-md-4 mar10">
           <h3><i class="fa fa-university"></i> Coordenação</h3>
          Coordenador: José Maria <br>
          josem@ead.ufsm.br
          </div>
          <div class="col-md-4 mar10">
          <h3><i class="fa fa-location-arrow"></i> Endereço</h3>
           Rua José maria muito louca, 608, prédio rosa
          </div>
           
    </div>
    </div>

  </section>


  <script type="text/javascript">


  </script>


  <?php $this->load->view("includes/footer") ?>
