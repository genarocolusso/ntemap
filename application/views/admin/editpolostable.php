                             








<?php 
if($polos){ ?>
<table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
  <thead>
    <tr>
      <th> Registros de polos</th> 
      <th> Ver Arquivos</th>  
    </tr>
  </thead>
  <tbody>
    <?php
    foreach ($polos as $key) { ?>


    <tr >
      <td>
        <img src="<?php base_url()?><?= $key['img'] ?>" style="width: 50px; height: 50px;margin-right: 10px;" class="profile-img pull-left">
        <div class="message-block updateddata">
          <div><span class="username"><?= $key['name'] ?></span> 
          </div>
          <?php if($key['endereco']){ ?>
          <div class="message"> <?= $key['endereco'] ?></div>
          <?php }else{ ?> 
          <div class="message"> Ainda Sem informação</div>
          <?php } ?>
          <div class="message"> <?= $key['email'] ?> </div>
          <div class="hiddeninfo" idpolo='<?= $key['idpolo'] ?>'  site='<?= $key['site'] ?>' email='<?= $key['email'] ?>' coordenacao='<?= $key['coordenacao'] ?>'
            coordemail='<?= $key['coordemail'] ?>' contato='<?= $key['contato'] ?>' endereco='<?= $key['endereco'] ?>' name='<?= $key['name'] ?>'> </div>

            <b>
              <?php   
              $narquivos = 0;
              if(isset($arquivos)){
                foreach ($arquivos as $arquivo) {
                  if( $arquivo['id_polo']==$key['idpolo']  ) 
                    $narquivos += 1;
                }
              }
              echo $narquivos;
              ?> Arquivos
            </b>

          </div>                


        </td> 
        <td>
                            
                                        <div class="passaarquivos btn btn-success" arquivoid='<?= $key["id"] ?>' title="arquivos" data-toggle="modal" data-target="#mostraarquivos">
                                         <i class="fa fa-file-archive-o"></i>
                                       </div>  
            </td>


            

                                   </tr> 

                                   <?php  }  ?>
                                 </tbody>
                               </table> <?php } ?> 

                               <div class="modal fade" id="mostraarquivos" tabindex="-1" role="dialog" aria-labelledby="mostraarquivos">
                                <div class="modal-dialog" role="document">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                      <h4 class="modal-title" id="myModalLabel">Clique no botão para deletar o arquivo.</h4>
                                    </div>
                                    <div class="modal-body">
                                       
                                    </div>
                                    <div class="modal-footer">
                                      <p class="text-muted"> cuidado, ao clicar no botão de deletar a ação não poderá ser revertida</p>  
                                    </div>
                                  </div>
                                </div>
                              </div>

                                <?php 
                                    $attr = 'class="poloarquivo"'; //The form will have the id 'my_form'
                                    echo form_open_multipart('painel/mostraarquivos',$attr);
                                    ?>

                                    <fieldset style="display:none">

                                      <div class="form-group">

                                        <div class="col-md-8">
                                          <input   name="poloarquivoid" type="text" placeholder="" class="pegaarquivos form-control input-md" required="">
                                        
                                        </div> </div></fieldset>
                                       
                                       <?php 

                                       echo form_close();
                                       ?>