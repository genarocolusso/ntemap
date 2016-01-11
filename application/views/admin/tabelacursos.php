  <?php 

  if($polos){ ?>
  <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
    <thead>
      <tr>
        <th>Nome</th>
        <th>Num Alunos</th>
        <th>Nível</th> 
        <th>Status</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($cursos as $key ) { ?>
      <tr class="message-block">
        <td>
                                    <div class="updateddata" style="display:none">
                                            <div><span class="username"><?= $key['nome'] ?></span> 
                                            </div> 
                                             <div class="message">Número de Alunos: <?= $key['numalunos'] ?> </div>
                                            <div class="hiddeninfo" idpolo='<?= $key['idpolo'] ?>' idcurso='<?= $key['id'] ?>' nome='<?= $key['nome'] ?>'  numalunos='<?= $key['numalunos'] ?>' ativo='<?= $key['ativo'] ?>'> </div>

                                           </div>

        <?= $key['nome']?></td>
        <td><?= $key['numalunos']?></td> 
        <td><?= $key['nivelgrad']?></td>
        <td><?= $key['ativo']?></td>
         
        </tr> 
 
        <?php  }

        ?>
      </tbody>
    </table> <?php } ?> 



    

