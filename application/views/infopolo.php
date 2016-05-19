<?php header('Access-Control-Allow-Origin: *'); ?>
<?php $this->load->view("infopolos/header") ?>
<?php 

foreach ($polos as $key => $value) { ?>
<header id="poloheader" style="background-image:linear-gradient(rgba(0, 0, 0, 0.88), rgba(23, 23, 23, 0.3)), url(../img/polos/<?=$value['id']?>_foto.jpg)">

  <div class="container text-center">


    <h1 style="color: #fff; text-shadow: 1px 1px 9px #000">
      <img class="icon icons8-Map-Marker" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAYAAABXAvmHAAADB0lEQVRoQ+2ZT2jTUBzHv2natU16cOBUEKTuIlTZ9DAREepFVEbZQa/W4Rwy/5wK7uSGNzvwNEF3GerF7SYoKE6mIhUFoYpD2EXUTVEoirikts0SSXRp0uUlL3MuKSTH8Pp738/v+33vJSmDJr+YJtePAMBrBwMHmtoB5fu9JGSpBzJ6Ic7sAMu9ARPOM5vPTK4GmLE+05bZZVXTdYRMohns1IsuFOv1QxEJoZXBkOoz6zOWWqkAiKKNLTECGO9TwNDUdw1AU9RkKQmAAAOu/YUeP6OThOy5ByjdUVzlmAbAWDBhGWnilAGAoxuBA/YtCiL0zxESq6gV5iEV5iDP/dTKhZIbEU53IpLuAPi47RSeOrA4W8Kv0ZdAWbIWyUURH8oitHWT/3YhTfzIc0cD1QHxS/1ECG8cEKsQzk+TO9+AxbStA5c/aRknTwBqU+9QnXhbl8nxiGZPIdy1F+ATkB4/QOXmGCAK+piW7AFEuvcsc8wTgPLIM8iz33QxsdwQWFW84ZKeTKFy9bJ+J5TagvjwcX8ACH13TUL4ifvL14KwAKHvqHnc5IUmAhAFCCeO+BOg6SNUvTWD2sP3pkUcG8iB3d4JcDy0/N+4ZlrEkcO70dJ70B8RUkoCxMFHVGfA0iBu9CyYDa3+AFBVNMbIjoa0A6m/8WQbVSd2cxLHho+BTSUtGT0DoHXBrvueOqBOLn/8gfLFp7Zrwe45yHMAVUBlvAip8MkSIpzuQPR0jy2gpxHSlKkPdoPTgNjwSM1FwV855+/3gaXWqi8zlfHXpk5HBzII769/HyPZ4L0Df5UZt1WnhWuE8Q2AdrhpC5oFl++3PLSsXPANgHY2FL8AsXawXduoT2lfAWiqgy9zf8wjfp1W6L6NfgBwG2zoOsrzCSxWc5DFQ1AqMcds0Dmg12dau19Zrg3SRDYAjkWVz2P7HGHIAI71TbsTJYCrosaaRBgzwIrr20VIfRPR4kGyzzEmDQNMMHzq62rUp/qHxq3QtRwfAKxlt13tQl4Lo50/iBBtp/7XuN9Pl99ApktZ6wAAAABJRU5ErkJggg==" width="54" height="54">
      Polo - <?=$value['name']?></h1>
      <h5 class=""> Polo em dados: 


        <?php 
        $nalunos = 0 ;
        foreach ($infopolo as $key => $value) {
          $nalunos += $value['numalunos'];
        } ?>

        <span class="cresce"><?= $nalunos ?></span> Alunos  e


        <span class="cresce2" style="font-size: "><?= sizeof($infopolo)?></span> Cursos
      </h5>


    </div>

  </header>
  <?php } ?>
  <section id="numeros"  >
    <div class="container text-center">


    <!-- <div class="numberpolos">

      <div class="row">
        <div class="col-xs-4">
          <h5 class=""> Polo em dados: 


            <?php 
            $nalunos = 0 ;
            foreach ($infopolo as $key => $value) {
              $nalunos += $value['numalunos'];
            } ?>

            <span class="cresce"><?= $nalunos ?></span> Alunos  e


            <span class="cresce2" style="font-size: "><?= sizeof($infopolo)?></span> Cursos
          </h5>
        </div>


      </div>
    </div> -->


  </div>
</section>
<section id="poloscontatos" class="pad30">
  <div class="container text-center">
   <h1> Informações sobre o polo </h1><br>
   <?php
      if(strlen($infocontato[0]['contato'])<2){ // só checa se tem alguma info escrita em contato.

        ?>  <div class="alert alert-danger">
        <h2> Sem Informações </h2>
        <p> No momento não temos informações adicionadas ao polo. </p>
      </div>
      <?php 
    }
    foreach ($infocontato as $key => $value) {

      ?>
      
      <div class="row grey">
        <div class="col-md-4 mar10">
          <h3>
            <!-- Speech Bubble icon by Icons8 -->
            <img class="icon icons8-Speech-Bubble" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAYAAABXAvmHAAABfUlEQVRoQ+1ZvU4CQRCeSQzBjkfQNzB2UGljslY8AhUkNFrZKq2VlQlnc74ElHR3ncE3wCfQSqLNmE00UXILzu3AzSVz9ezM97dbzCHU/MOa4wcjULWD5oBaB3pHs1Zjf3mNgF1AOKgEKMGCENIkc6PQ/GCEBu3JHSBeVAJ8ZSgBjJLM3RRhCRLodyavCNjSQAAIFuPcHbIIDDpTUgH+G8Q4c4VihyNkBGT9Mwdk9eR3i3ZgeHvMnxpx4v7q6c9pIxAhpsjRaAdEUEQ0MQJ2iZnxEX+FmPPFy+0OiEvKbBjtQOwlXs00Ez8YAa5i0vXRDkgD4vYzAlzFpOvNAWlFOf2I6CXJzwuXa7XYSpRabGnYC3nlAdGvFgu3ct7FUg74xoR73YfsbM6JwjZqyxB4/nhvnqTz07dtAOL25BJQBZ4bIXXg/02ACB4/l81LLbH5HbONEfLgk9z1uNncVf1aAtrBr41Qvz1NNSv/47D9pdxV1kNzzAFzIFKB2kfoC/id1DEg3r2pAAAAAElFTkSuQmCC" width="48" height="48"> 

            Contato</h3>
            <div class="infotext">
              <?=$value['contato']?> <br>
              <?=$value['email']?>
            </div>
          </div>
          <div class="col-md-4 mar10">
           <h3>
            <!-- Organization icon by Icons8 -->
            <img class="icon icons8-Organization" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAYAAABXAvmHAAABaklEQVRoQ+1ZPW7CUAy2h4aqU48AN4AF1DN0gEO0O5mZO9O9PQQMPQMqCz1CbgBTJdLBCCqGKnmVE3/Kn8yI/Ozvx++DKEwt/3DL8ZMTqNtBd6DRDix30uc0XRLJkJj7lYIVSYj4S6IojkechGYHV+gC/ifdEdF9pcCzww5yE41CJMIEPo8rZprWDP4yXoTW8aQ3y8MSJPC6Pe4boP4vZpFkPrkdFCUgTVD/imE+7uWK/Z8DGQIvb5tcTovnhz/fo+vOzZ3AWQW0stp+7sB1wbWKoetgDtSZSpBL7AQMCkAcQO+2th/sDmgHouucQGdiFL0a2n6wFTKEiPkoJIXMKAwNnID/GyWisg8+sEusTQ10nRPozA+ZIQXNRz1GzRIaG0AcQKeLtp+nUGdSSGs5us5XqGiAaB0o0heSQtqBjSDw9PFd+v3AerXN5TqdjbUaZOreH++KvR9oPYHSUlV80F90Vyx4ZlzrHTgBQpBsQBs7IQUAAAAASUVORK5CYII=" width="48" height="48">
            Coordenação</h3>
            <div class="infotext">
              Coordenador:  <?=$value['coordenacao']?> <br>
              <?=$value['coordemail']?>
            </div>
          </div>
          <div class="col-md-4 mar10">
            <h3>
              <!-- Marker icon by Icons8 -->
              <img class="icon icons8-Marker" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAYAAABXAvmHAAADRklEQVRoQ+2Z3VEbMRCAv8XkOXQQqCDmLZOcJ6YCSAWECkIqCOmAVABUAFSAM3fJ5A1SQUwH5hmMMicfh2NOJ60sk2GGfWEYJN1+2tX+ITxxkSeuP88A/9uCSS1g3tKlwzaGLrCC2J9guABGwIBbTuWn/T2JJAEw79hmiT1gNVCrIbfsyQ+OAtc7l80FYN6wyjIHCP0oRQwDbtiRXwyj9kP8IzYZfYRj6yrzyYgxG7FuFWWBSvmz+fSe2T1mPQZCDWDd5gXnCW5+ln/ENetad9IDZJxF+7zPZIaBFGz4lk3/XQVgenwEDjwfuMKwzy0ndy5hw+sSWwi7wEvP/g+ScxIKoQX44wmVR3TYlYGN+Q/E9FlhzD6w3aLgUHLWkgNUSar0fZccSW4t5BXT47AVQvGggy1gMvYRPjm0u6LDquvmZ/dUlihjf7M7Gb5KYROjVzQAA4T3jScqPni332TsIXxxnPddirDkqAE4r2ub2a8qTF4DTOqmZpc0XEjBuvf6NZnY9DCuAyWPy+gpzgy3wJMHyLhAeN1ohfQu9FuKqhT3+JHGAu7Ql/oRQ3BI1gC0ZeERHdaUYbRMiq5Kdkdymyu8EgxQnmR6NsO6SoFDydnxfrE8J+MYYcuVUyQPL9G1AO0ZFA7p8Lm1lLixDZBL+ZIp2H3KxTqASSldmr5NRlUxV/e+VTG3WRVz7Q3QNWuakloFYN0ow52RQ/ynbY0hOAPfHRMDULaSabuxOj2zIQUDzT2oARZmhYjbV7+BoDpGc33TayOSYTRAFVJ9EUmDooo80wdHuZAFmESkcsLmaxF9IFdc09VEniQA1Vtw1/Q+te8fbnDz0nRktAXq72cMEV6F6vvPOsOlFMHjyMZPpACID6tGHzZnKeYGqFyprV9uNo7hmxR2zDKXpAGYjEvcTfpDFVVDgDbCJABVWC0LtHLYGyKq4dWjAFQQ5URt00NwKnlrNRpyAfWaZBawAKUr3djWszkqGS5Zphva+ISQJAWoHrQ7KiWIOguJQrOHNk7xEkWdRwGoLHE/xTAETxlC3GZ6TXIXqjP0ZPI2qe3H9GP++xICszCAKirZaXXohCFE4UdzoRhlYvYs1AIxCmn3PANobyz1+r92ABFAzL5ffAAAAABJRU5ErkJggg==" width="48" height="48">
              Endereço</h3>
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
              <h3>
                <!-- Graduation Cap icon by Icons8 -->
<img class="icon icons8-Graduation-Cap" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAYAAABXAvmHAAAEaklEQVRoQ+2ZQU8bRxTH/28JiXHBcZpUIYophkOvcaUWeis5FDg04KofAKI2Z8yhgp7inEpPXq4lVexPUJtcgtuDU1VR7UaK+wWCKa6aqiEyTgoujvdVM9Ya26yxvV6bWGIOaIV3Zt7vvTf/NzNL6PJGXW4/TgFOOoKnETiNQIseOE0hIwcuB+65oWhzzOwTvxORCk0JrSzeTLXo8CPdLY3AcmBtAkRzAOZrGBoEc2hl8VbMKhBLAL5evTvHLI2eaNCwGBGC3yx8GWrw/ZqvmQbwBe45zymFOWKINHGbNCTFBPU/rSekLt7MmBmjaQCZ31S4zYCXAKeZSav7MJAhIAzuudPsOmkYQOQ3Ey0Q4LXC6FpjMBAm5tVG10ldAJHfGrOPQJ52Gn40KpxUiNR668QQQOS3TdEWhAxalSZm4WV6Eak5TVk1WicVAF8FvvP0kLJwjAyatcOqfsHqdSIBllbXZolJqEmjMljXoCfxR8i82IHz7Yuw9dlh6+uTz/2O8+jt7a3bv84LMSZWv124FaElde1JO/I78ctD/Psya2hHz5leDDgceGvAgT67Hf0DDlNgDE7SUuBukgjXWnWJUf/c/h729/eR2XkO8ZwTzy92ak5lBHbh4qWa7zPjd5lCy4Hv5wH2gzDcDpDqMZsF01PQ5R7BO5evAIwtgPwri18EKxax3MsAfhB93AkQM2DXpz+9Xl4jDGVUVlsU/Az2EtH5k4DR52Tm3VfZ7E+PH/38ufhffCNSYfOxhUzWA7z25XK520JFOtnEerHZbHdyOKMK/R+fmuWmAXSDRefBq0NwuUelerSzvcxmkU49xbM/tyu83TKAbrTQcgFzxTVkKcdf6W1pdLlKlaeLZQC61UIZhCoIGLOFKZ/PS6PTqU0ps9WtrQD6ZEK7B6+68K57FDa7vaGo5Pb28IdMkzQKr/M1+7QNQK4mFn8JVCYDly4PYmh4BM4axUcUtO2tTTz/+1nJaDkMWBycj1wTWg7AzOKAXtfL/Q4HXMOjpXUi8ju99RSvssZbi0PJLMLoc1gMUPR4J5ruKMsAxiZnuBHPWwknIBLR9ZLHWlKhkwCoLlotAYxPzYoLqY5s9MqiuBXfiJRuO1oEuOEDlICVKVJ/LG0xvnFfLd8NmN5KiI7jUzMqQOK42YHGq/GNdXktKdrY5A0voPwgBJBZ+ywRvR/Wf2tKVooDkZ+I2nIAYuaHAKvlBhadd5jCzEgmopH3TQHonT6Y9k4omjYPkJcILW23mbELcFhTlODjB+Ejd6aeCa/z7FlNHGDkLpLB/+QPlPeSsbC8yWsqAka58+EnXg9Q8BCRWHDyUoBqHIiKHpYtxswpoCf524/h5HE5aZy6hynWMkC7F8TY5GymOsrMyCSikQuWROCEAHYT0Yi8l+2CCMwEqfjNodSYOZSIrstvEG88wEfTXjczb5YDENHIrw/C8mvPGw9QlNHyGlRZI7oCoCilQrWAgwNy6xLaNRE4rMZAdZHriggcp3RdD/A/xz4JMhBp2/wAAAAASUVORK5CYII=" width="48" height="48">
               Graduação</h3>
              <div class="infotext">
               <?php foreach ($infopolo as $key => $value) {
                 if($value['nivelgrad']==1){
                  ?>
                  <p> <?= $value['nome'] ?></p>
                  <?php } }?>
                </div>
              </div>
              <div class="col-md-6 mar10">
                <h3>
                <!-- Books icon by Icons8 -->
<img class="icon icons8-Books" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAYAAABXAvmHAAAEFklEQVRoQ+2Yb0wbdRjHv9debSk1lNjSmhgpFjWUWSCzG4wNs0SN2bIX0wiKbpJozHwHL30x45/XJia+UJMZ497MOXF/TJaZ+W+MZMwZR4AhEIIF7RwtbCtwvWvvz89cUXOw9q70emuJfd7+nnue7+f587v2KGxyoza5fpQBit1BQzrwUlt/LyFkF5cU25I87zabTPyZkW67EbC6Abpb+mtRQb0uClIbl0q1JNiUM5PQ85M9unNlirvhoAfbT3UJotCZ4sUgm+R9KV6g1wf2eEwIBmk0BS0INtFgVgj89eZeSNJpqm5/uJCdyAmgu/WrI1xS3LOcYO/PlNz/EI1gkxnBoAVNQRoOhymrRj5JjvV/Yf9x/Jo1IDu992VHnx4gTYDO0PGrt5bYZmUSWajfL1dZW7Bc/fFxAiJUXBj+1eKN/EE/qoxVH/uoj1CWv175/ujxfEA0AZ5pOEpESYJc5ZcP2NC+4x7VPP8Knpk2ITJnRfxWxRr/KnYE1dwonNwoqrmR9JlAVZKnLs9nb5tKRk2AA+0nyY2FeBrgjUP29EwrLR/ByuedgQAEhkHoxDVNLXkt8VtdA2TxNoNlhgWTSMHrNaGl2QoLbcZC1JJThZWJbW4XXKGtcDYG4Aw0gK50/HNMwqCoU5DMn1N1e4dzHSdNahlAK5h36Txc7BDciUt3uNJ2+xrBtpqa7OEkssT8efNGvP9cpWP4B0+SsvM1P82qvj90Azy8+DEeWDqzRpQ8FqtVboDD51Plj/82g8TVKdgmR7jqmUHbemfqovrPHd0Au8PPAYSFo7YWvs5n4QqF1Jc8HMHK1BzIxDS8V05oNReGA+yb78NKYjINUN9zMF11pSVji1iemAM/9Tuqr5yFjYlqilY6GA7wzvUOzNCNuEmsYAUOdo8b7gY/LJQEx/gQ7o1ObEjwXR8hGcBIuysdKAOovWmNvoUKOkLbWoHGLcD2VuDQa2ms0h6hGg+wbTuw5bFV0Urbv69EAZRV9niyD0/JAKhVWW37Swbg5Df5XVKbEuDnIWBsDLg8BETnS2QH1DoQja6KHRsFZPEZrPi30HqADFVWm7HiA3zyqWaVSxsgvxX+76nid6AMYPA/soL+FirJW6g8Qv/3ETrcNRCmgNpsk1DyO3D4+YEeyoTPigEQN7lF54XYHZ/v13y1yGXH3n7hkk8iqV5CqGaANFMUVSU/R4DZd693ZO1OLrGz+cTMD3LT1sff3PHt1x+ovqn1JElD7JI5CmOy6Aj9yDkG7vd3fndsMJeoml/mtILoBchH9IZHSA3i9hNuoUqKmbVAled6RRcU4Jen9xzZyp59VQugkKILCiAHG3zyxZ0uzH7oEBfq7hMjVTbCpHMYJbrgAFrVN/Jc9xIbKS6X2GWAXKpkpM/fAKr7QIuMS9UAAAAASUVORK5CYII=" width="48" height="48">
                 Pós-Graduação</h3>
               <div class="infotext">
                 <?php foreach ($infopolo as $key => $value) {

                   if($value['nivelgrad']==2){ ?>
                   <p><?= $value['nome'] ?>  </p>
                   <?php } }?>
                 </div>
               </div>

             </div>

           </div>

         </section>

    

         <div  class="pad30 polofooter">
              <div class="container">

           <?php 

           if(count($imagens)>0){ 

            echo ' 
            <div  >
            <h2  class="text-center" > Imagens </h2></div>
            <div id="gImages" class="row"  >';


            foreach($imagens as $key => $value) {  
             $extensao = explode('.', $value['arquivo_path']);
             $extensao[1] = strtolower($extensao[1]);

             if(($extensao[1]=='jpg' | $extensao[1]=='png' | $extensao[1]=='bmp') && $value['galeria']==1){ ?>
             <div class="col-md-3" >
              <a href="<?= base_url().$value['arquivo_path'] ?>"  data-lightbox="galeria">
                <img src="<?= base_url().$value['arquivo_path'] ?>" class="img-responsive  center-block">
              </a>
            </div>


            <?php
          }

        }
        echo '</div>';
        echo '<div  >
        <h2 class="text-center"  > Arquivos </h2></div><div class="container">';
        foreach($imagens as $key => $value) {  
         $extensao = explode('.', $value['arquivo_path']);
         $extensao[1] =  strtolower($extensao[1]);
         $nomearquivo = explode('/', $value['arquivo_path']);
         if( $value['galeria']==0){ ?>

         <a href="<?= base_url().$value['arquivo_path'] ?>" style="color: #C9FFC9;">
          <p><i class="fa fa-file-text"></i> <?= $nomearquivo[1]; ?></p>
        </a>


        <?php

      }

    }   
    echo '</div>';

  }?>
  
  <br>
  <a href="<?=base_url()?>" class="center-block" style="width: 220px;"><div class="btn btn-success btn-lg"><i class="fa fa-map-o"></i> Voltar para o mapa</div></a>
</div>
</div>



<?php $this->load->view("includes/scriptos") ?>
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

$.ajax({
  url: "https://ajax.googleapis.com/ajax/services/search/images?v=1.0&q=barack%20obama&callback=?",
  dataType: "jsonp",
  success: function(data) {


    for (var i = 0; i < data.responseData.results.length; i++) {

      /* alert(data.responseData.results[i].tbUrl); */

      $('#image-container').append('<img src="' + data.responseData.results[i].tbUrl + '">' + '<br>');

    }
  }


});
</script>


<?php $this->load->view("includes/footer") ?>
