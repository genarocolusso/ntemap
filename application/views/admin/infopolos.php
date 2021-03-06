
<!-- Main Content -->
<div class="container-fluid">
  <div class="side-body padding-top">
    
      <div class="row  no-margin-bottom">
        <div class="col-sm-6 col-xs-12">
          <div class="row">

            <?php

                                    $attr = 'id="infoform"'; //The form will have the id 'my_form'
                                    echo form_open_multipart('Painel/atualizarpolo');
                                    ?>

                                    <fieldset>

                                      <h1 class="text-center"> Adicionar Informação do Polo </h1>
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
                                      <label class="col-md-4 control-label" for="latitude">Contato</label>  
                                      <div class="col-md-8">
                                        <input id="contato" name="contato" type="text" placeholder="(55) 2222-2222, (55) 3333-3333" class="form-control input-md"  >

                                      </div>
                                    </div>
                                    <div class="form-group">
                                      <label class="col-md-4 control-label" for="latitude">Nome do Polo</label>  
                                      <div class="col-md-8">
                                        <input id="nomepolo" name="nomepolo"  placeholder="nome do polo" class="form-control input-md" >

                                      </div>
                                    </div>

                                    <div class="form-group">
                                      <label class="col-md-4 control-label" for="latitude">Endereço</label>  
                                      <div class="col-md-8">
                                        <input id="endereco" name="endereco" type="text" placeholder="Rua John Doe 302" class="form-control input-md"  >

                                      </div>
                                    </div>
                                     <div class="form-group">
                                      <label class="col-md-4 control-label" for="latitude">Site</label>  
                                      <div class="col-md-8">
                                        <input id="site" name="site" type="text" placeholder="www.sitedopolo.com" class="form-control input-md"  >

                                      </div>
                                    </div>
                                    <div class="form-group">
                                      <label class="col-md-4 control-label" for="latitude">Email</label>  
                                      <div class="col-md-8">
                                        <input id="email" name="email" type="email" placeholder="johndoe@email.com" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" class="form-control input-md" >

                                      </div>
                                    </div>
                                    <div class="form-group">
                                      <label class="col-md-4 control-label" for="latitude">Coordenação</label>  
                                      <div class="col-md-8">
                                        <input id="coordenacao" name="coordenacao" type="text" placeholder="Coordenador João Doe" class="form-control input-md"  >

                                      </div>
                                    </div>
                                    <div class="form-group">
                                      <label class="col-md-4 control-label" for="latitude">Email Coordenação</label>  
                                      <div class="col-md-8">
                                        <input id="coordemail" name="coordemail" type="email" placeholder="joao@coord.com.br"  pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" class="form-control input-md"  >

                                      </div>
                                    </div>

  

                                    <!-- Button -->
                                   <div class="form-group">
                                        <label class="col-md-4 control-label" for="singlebutton"> Adicionar Imagem do polo </label>
                                      <div class="col-md-8">
                                    <input type="file" name="userfile" size="20" /> 
                                    
                                    </div>
                                     </div>
                                     

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
                                   <fieldset>
                                   <h2 class="text-center"> Adicionar Arquivo junto ao polo</h2>
                                      <?php echo form_open_multipart('upload/do_upload');?>

                                        <div class="form-group">
                                        <label class="col-md-4 control-label" for="selectbasic">Polo</label>
                                        <div class="col-md-8">
                                          <select id="id_polo_click" name="id_polo_click" class="form-control">
                                           <?php foreach ($polos as $key) { ?>
                                           <option value="<?= $key['idpolo']?>"><?= $key['name']?></option>
                                           <?php } ?>


                                         </select>
                                       </div>
                                     </div>
                                          <div class="form-group">
                                        <label class="col-md-4 control-label" for="singlebutton"> Adicionar Arquivo </label>
                                      <div class="col-md-8">
                                    <input type="file" name="userfile" size="20" />

                                    <br>

                                    <input type="submit" value="upload" />
                                    </div>
                                     </div>

  <br>
                                      <div class="form-group">
                                        <label class="col-md-4 control-label" for="selectbasic">Imagem para galeria?</label>
                                        <div class="col-md-8">
                                          <select id="selectbasic" name="galeria" class="form-control">
                                            
                                           <option value="1">Sim</option>
                                           <option value="0">Não</option>
                                            

                                         </select>
                                       </div>
                                     </div>
                                   </fieldset>
                                       <?php  
                                  echo form_close();   ?>
                                  <br>  <br> 

                              <br>  
                                  <hr>


                                </div>
                                <div class="row">


                                  <div class="col-md-6 col-sm-12">
                                    <div class="thumbnail no-margin-bottom">
                                      <img src="" class="img-responsive">
                                      <div class="caption">
                                        <h3 id="thumbnail-label">Editando<a class="anchorjs-link" href="#thumbnail-label"><span class="anchorjs-icon"></span></a></h3>
                                        <p>Você pode editar informações do Polo como: Endereço, Telefone de contato, email, nome de coordenação e entre oturos ao clicar no nome do polo  exibido na tabela.</p>
                                         
                                      </div>

                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="col-sm-6 col-xs-12">
                                <div class="row">
                                  <div class="col-md-12 col-sm-12">

                                    <h1> Lista de Polos Cadastrados </h1>
                                    <div class="tabeladospolos">

                                    </div>
                                  </div>
                                </div>
                                <div class="card card-success">
                                  <div class="card-header">
                                    <div class="card-title">
                                      <div class="title"><i class="fa fa-map-o"></i> Clique no polo para editá-lo</div>
                                    </div>
                                    <div class="clear-both"></div>
                                  </div>
                                  <div class="card-body no-padding">
                                    <ul class="message-list">
                                      <?php $this->load->view('admin/editpolostable'); ?>



                                      <a href="#" id="message-load-more">
                                         
                                      </a>
                                    </ul>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>

