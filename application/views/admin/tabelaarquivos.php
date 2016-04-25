  
     <?php print_r($dadosarquivos) ?>
     <?php
          foreach ($dadosarquivos['arquivos'] as $key) {
             ?>
             <br>
             <?php   $caminhotodo = explode('/', $key['arquivo_path']);
                       ?>
                       <a href="<?php echo base_url() ?>Painel/baixararquivo/<?php echo $caminhotodo[1]; ?>"  ><?= $caminhotodo[1] ?></a>
         

         <?php } ?>

       
     
 


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
 