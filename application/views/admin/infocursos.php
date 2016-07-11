
<!-- Main Content -->
<div class="container-fluid">
  <div class="side-body padding-top">
    
      <div class="row  no-margin-bottom">
        <div class="col-sm-6 col-xs-12">
          <div class="row">

            <?php

                                    $attr = 'id="addcurso"'; //The form will have the id 'my_form'
                                    echo form_open_multipart('',$attr);
                                    ?>

                                    <fieldset>

                                      <h1 class="text-center"> Adicionar Curso </h1>
                                      <!-- Text input-->

                                      <div class="form-group">
                                        <label class="col-md-4 control-label" for="selectbasic">Polo</label>
                                        <div class="col-md-8">
                                          <select id="selectbasic" name="polo" class="form-control">
                                           <?php foreach ($polos as $key) { ?>
                                           <option value="<?= $key['idpolo']?>"><?= $key['name']?></option>
                                           <?php } ?>


                                         </select>
                                       </div>
                                     </div>
                                     <!-- Text input-->
                                     <div class="form-group">
                                      <label class="col-md-4 control-label" for="latitude">Nome do Curso</label>  
                                      <div class="col-md-8">
                                        <input id="nomecurso" name="nomecurso" type="text" placeholder="" class="form-control input-md"  >

                                      </div>
                                    </div>
                                   
                                    
                                     
                                    <div class="form-group">
                                      <label class="col-md-4 control-label" for="latitude">Número de Alunos</label>  
                                      <div class="col-md-8">
                                        <input id="numalunos" name="numalunos" type="text" placeholder="40"  class="form-control input-md"  >

                                      </div>
                                    </div>
                                     <div class="form-group" style="display: none">
                                       
                                      <div class="col-md-8">
                                        <input id="hiddenidcurso" name="hiddenidcurso" type="text" placeholder="40"  class="form-control input-md" >

                                      </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-4 control-label" for="selectbasic">Nível</label>
                                        <div class="col-md-8">
                                          <select id="graduacao" name="graduacao" class="form-control">
                                          
                                           <option value="1">Graduação</option>
                                           <option value="2">Pós-Graduação</option>

                                         </select>
                                       </div>
                                     </div>
                                    <div class="form-group">
                                        <label class="col-md-4 control-label" for="selectbasic">Ativo</label>
                                        <div class="col-md-8">
                                          <select id="name" name="ativo" class="form-control">
                                          
                                           <option value="1">Sim</option>
                                           <option value="0">Não</option>

                                         </select>
                                       </div>
                                     </div>


                                    <!-- Button -->
                                    <div class="form-group">
                                      <label class="col-md-4 control-label" for="singlebutton"> </label>
                                      <div class="col-md-8">
                                        <button id="atualizarpolo" name="singlebutton" class="btn btn-primary">Atualizar Informação</button>
                                      </div>
                                    </div>


                                  </fieldset>
                                  <?php  
                                  echo form_close();
                                  ?>

                                  <hr>


                                </div>
                                <div class="row">
 
                                  <hr>

                                </div>
                              </div>
                              <div class="col-sm-6 col-xs-12">
                                <div class="row">
                                  <div class="col-md-12 col-sm-12">

                                    <h1> Lista de Cursos Cadastrados </h1>
                                    <div class="tabeladospolos">

                                    </div>
                                  </div>
                                </div>
                                <div class="card card-success">
                                  <div class="card-header">
                                    <div class="card-title">
                                      <div class="title"><i class="fa fa-map-o"></i> Clique no curso para editá-lo</div>
                                    </div>
                                    <div class="clear-both"></div>
                                  </div>
                                  <div class="card-body no-padding">
                                    <ul class="message-list">
                                      <?php $this->load->view('admin/tabelacursos'); ?>



                                     
                                    </ul>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>

