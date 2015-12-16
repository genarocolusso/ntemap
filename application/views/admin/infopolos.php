
<!-- Main Content -->
<div class="container-fluid">
  <div class="side-body padding-top">
    <div class="row">
      <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
        <a href="#">
          <div class="card red summary-inline">
            <div class="card-body">
              <i class="icon fa fa-institution fa-4x"></i>
              <div class="content">
                <div class="title"><?= sizeof($polos) ?></div>
                <div class="sub-title">Polos</div>
              </div>
              <div class="clear-both"></div>
            </div>
          </div>
        </a>
      </div>
      <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
        <a href="#">
          <div class="card yellow summary-inline">
            <div class="card-body">
              <i class="icon fa fa-book fa-4x"></i>
              <div class="content">
                <div class="title"><?= sizeof($cursos) ?></div>
                <div class="sub-title">Cursos</div>
              </div>
              <div class="clear-both"></div>
            </div>
          </div>
        </a>
      </div>
      <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
        <a href="#">
          <div class="card green summary-inline">
            <div class="card-body">
              <i class="icon fa fa-users fa-4x"></i>
              <div class="content">
                <div class="title"><?php  
                  $nalunos = 0;
                  foreach ($cursos as $key => $value) {
                    $nalunos += $value['numalunos'];
                  } 

                  echo $nalunos;
                  ?></div>
                  <div class="sub-title">Alunos</div>
                </div>
                <div class="clear-both"></div>
              </div>
            </div>
          </a>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
          <a href="#">
            <div class="card blue summary-inline">
              <div class="card-body">
                <i class="icon fa fa-share-alt fa-4x"></i>
                <div class="content">
                  <div class="title">16</div>
                  <div class="sub-title">Projetos</div>
                </div>
                <div class="clear-both"></div>
              </div>
            </div>
          </a>
        </div>
      </div>
      <div class="row  no-margin-bottom">
        <div class="col-sm-6 col-xs-12">
          <div class="row">

            <?php

                                    $attr = 'id="infoform"'; //The form will have the id 'my_form'
                                    echo form_open_multipart('',$attr);
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
                                        <input id="contato" name="contato" type="text" placeholder="(55) 2222-2222, (55) 3333-3333" class="form-control input-md" required="">

                                      </div>
                                    </div>
                                    <div class="form-group">
                                      <label class="col-md-4 control-label" for="latitude">Endereço</label>  
                                      <div class="col-md-8">
                                        <input id="endereco" name="endereco" type="text" placeholder="Rua John Doe 222" class="form-control input-md" required="">

                                      </div>
                                    </div>
                                    <div class="form-group">
                                      <label class="col-md-4 control-label" for="latitude">Email</label>  
                                      <div class="col-md-8">
                                        <input id="email" name="email" type="email" placeholder="mary@mymail.com" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" class="form-control input-md" required="">

                                      </div>
                                    </div>
                                    <div class="form-group">
                                      <label class="col-md-4 control-label" for="latitude">Coordenação</label>  
                                      <div class="col-md-8">
                                        <input id="coordenacao" name="coordenacao" type="text" placeholder="Coordenador João Doe" class="form-control input-md" required="">

                                      </div>
                                    </div>
                                    <div class="form-group">
                                      <label class="col-md-4 control-label" for="latitude">Email Coordenação</label>  
                                      <div class="col-md-8">
                                        <input id="coordemail" name="coordemail" type="email" placeholder="joao@coord.com.br"  pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" class="form-control input-md" required="">

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


                                  <div class="col-md-6 col-sm-12">
                                    <div class="thumbnail no-margin-bottom">
                                      <img src="" class="img-responsive">
                                      <div class="caption">
                                        <h3 id="thumbnail-label">Editando<a class="anchorjs-link" href="#thumbnail-label"><span class="anchorjs-icon"></span></a></h3>
                                        <p>Você pode editar informações do Polo como: Endereço, Telefone de contato, email, nome de coordenação e entre oturos ao clicar no nome do polo  exibido na tabela.</p>
                                        <p><a href="#" class="btn btn-success" role="button">Ok</a> </p>
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
                                        <li class="text-center load-more">
                                          <i class="fa fa-refresh"></i> Carregar mais..
                                        </li>
                                      </a>
                                    </ul>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>

