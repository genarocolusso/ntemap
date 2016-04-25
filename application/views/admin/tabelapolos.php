  <?php 

  if($polos){ ?>
  <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
    <thead>
      <tr>
        <th>Name</th>
        <th>Latitude</th>
        <th>Longitude</th> 
        <th>Status</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($polos as $key ) { ?>
      <tr>
        <td><?= $key['name']?></td>
        <td><?= $key['latitude']?></td>
        <td><?= $key['longitude']?></td>
        <td> 
          <div class="btn btn-info center-block"><?php  if($key['ativo']==1){
            echo "Ativo";

          }else{ echo "Inativo";} ?> </div>
          <div class="passadelete btn btn-danger   " style="width:30%" poloid="<?= $key['id']?>"  title="deletar" data-toggle="modal" data-target="#certezadelete">
            <i class="fa fa-trash"></i>
          </div>
          <div class="deletepolo btn btn-info   " style="width:30%" poloid="<?= $key['id']?>" ativo="0" title="desativar">
            <i class="fa fa-ban"></i>
          </div> 
          <div class="deletepolo btn btn-success   " style="width:30%" poloid="<?= $key['id']?>" ativo="1" title="ativar">
            <i class="fa fa-check"></i>
          </div> </td>

        </tr> 
 
        <?php  }

        ?>
      </tbody>
    </table> <?php } ?> 



    <?php 
                                    $attr = 'id="atualizastatus"'; //The form will have the id 'my_form'
                                    echo form_open_multipart('painel/atualizastatus',$attr);
                                    ?>

                                    <fieldset style="display:none">



                                      <div class="form-group">

                                        <div class="col-md-8">
                                          <input id="ativo" name="ativo" type="text" placeholder="" class="form-control input-md" required="">

                                        </div>
                                      </div>
                                      <div class="form-group">

                                        <div class="col-md-8">
                                          <input id="idpolo" name="idpolo" type="text" placeholder="" class="form-control input-md" required="">

                                        </div> </div>



                                        <!-- Button -->
                                        <div class="form-group">
                                          <label class="col-md-4 control-label" for="singlebutton"> </label>
                                          <div class="col-md-8">
                                            <button id="atualizarstatus" name="singlebutton" class="btn btn-primary">Atualizar Status</button>
                                          </div>
                                        </div>

                                      </fieldset>
                                      <?php 

                                      echo form_close();
                                      ?>


                                    <?php 
                                    $attr = 'id="deletarpolo"'; //The form will have the id 'my_form'
                                    echo form_open_multipart('painel/deletarpolo',$attr);
                                    ?>

                                    <fieldset style="display:none">
 
                                      <div class="form-group">

                                        <div class="col-md-8">
                                          <input id="deletedid" name="deleted" type="text" placeholder="" class="form-control input-md" required="">

                                        </div> </div>



                                        <!-- Button -->
                                        <div class="form-group">
                                          <label class="col-md-4 control-label" for="singlebutton"> </label>
                                          <div class="col-md-8">
                                            <button id="deletepoloforreal" name="singlebutton" class="btn btn-primary">Atualizar Status</button>
                                          </div>
                                        </div>

                                      </fieldset>
                                      <?php 

                                      echo form_close();
                                      ?>

<div class="modal fade" id="certezadelete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Tem certeza que deseja deletar este polo?</h4>
      </div>
       
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Não</button>
        <button type="button" id="modalpradeleta" class="deletepoloforreal btn btn-primary" poloid="">Sim</button>
      </div>
    </div>
  </div>
</div>