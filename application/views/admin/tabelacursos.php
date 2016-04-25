  <?php 

  if($cursos){ ?>
  <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
    <thead>
      <tr>
        <th>Nome</th>
        <th>Num Alunos</th>
        <th>Nível</th> 
        <th>Status</th>
        <th>Deletar</th>
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
                                            <div class="hiddeninfo" idpolo='<?= $key['idpolo'] ?>' idcurso='<?= $key['id'] ?>' nome='<?= $key['nome'] ?>'  numalunos='<?= $key['numalunos'] ?>' ativo='<?= $key['ativo'] ?>' graduacao='<?= $key['nivelgrad'] ?>'> </div>

                                           </div>

        <?= $key['nome']?></td>
        <td><?= $key['numalunos']?></td> 
        <td>

        <?php if($key['nivelgrad']==1)
                echo 'Graduação';
                else
                echo 'Pós-graduação'; ?>


        </td>
        <td><?php
            if($key['ativo']==1)
                echo 'Ativo';
                else
                echo 'Inativo';?></td>
                <td >
              <?php 
                                    $attr = 'id="deletacurso"'; //The form will have the id 'my_form'
                                    echo form_open_multipart('painel/deletarcurso',$attr);
                                    ?>

                                    <fieldset style="display:none">
 
                                      <div class="form-group">

                                        <div class="col-md-8">
                                          <input id="deletedidcurso" name="deleted" type="text" placeholder="" class="form-control input-md" required="">

                                        </div> </div></fieldset>
                                         <div class="passadeletecurso btn btn-danger "  cursoiddelet="<?= $key['id']?>"  title="deletar" data-toggle="modal" data-target="#certezadelete">
                                        <i class="fa fa-trash"></i>
                                      </div>   
                                      <?php 

                                      echo form_close();
                                      ?></td> 
         
        </tr> 
 
        <?php  }

        ?>
      </tbody>
    </table> <?php } ?> 

<div class="modal fade" id="certezadelete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Tem certeza que deseja deletar este curso?</h4>
      </div>
       
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Não</button>
        <button type="button" id="modalpradeletacurso" class="deletecursoforreal btn btn-primary" cursoid="">Sim</button>
      </div>
    </div>
  </div>
</div>


    

