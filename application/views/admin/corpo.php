
<!-- Main Content -->
<div class="container-fluid">
    <div class="side-body padding-top">
        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
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
            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
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
            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
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
             
        </div>
        <div class="row  no-margin-bottom">
            <div class="col-sm-6 col-xs-12">
                <div class="row">
                  
                    <?php
                    
                                    $attr = 'id="addform"'; //The form will have the id 'my_form'
                                    echo form_open_multipart(' ',$attr);
                                    ?>

                                    <fieldset>
                                       
                                        <h1 class="text-center"> Adicionar Novo Polo </h1>
                                        <!-- Text input-->
                                        <div class="form-group">
                                          <label class="col-md-4 control-label" for="nome">Local</label>  
                                          <div class="col-md-5">
                                              <input id="nome" name="nome" type="text" placeholder="Cidade" class="form-control input-md" required="">
                                              
                                          </div>
                                      </div>

                                      <!-- Text input-->
                                      <div class="form-group">
                                          <label class="col-md-4 control-label" for="latitude">latitude</label>  
                                          <div class="col-md-5">
                                              <input id="latitude" name="latitude" type="text" placeholder="latitude" class="form-control input-md" required="">
                                              
                                          </div>
                                      </div>

                                      <!-- Text input-->
                                      <div class="form-group">
                                          <label class="col-md-4 control-label" for="longitude">longitude</label>  
                                          <div class="col-md-5">
                                              <input id="longitude" name="longitude" type="text" placeholder="longitude" class="form-control input-md" required="">
                                              
                                          </div>
                                      </div>

                                      <!-- Button -->
                                      <div class="form-group">
                                          <label class="col-md-4 control-label" for="singlebutton"> </label>
                                          <div class="col-md-4">
                                            <button id="botaopraenviarpromapa" name="singlebutton" class="btn btn-primary">Adicionar</button>
                                        </div>
                                    </div>

                                </fieldset>
                                <?php 
                                
                                echo form_close();
                                ?>

                                <div id="map2" class="formmap">

                                </div>
                                
                                <hr>
                                

                            </div>
                            <div class="row">
                             
                                
                            </div>
                        </div>
                        <div class="col-sm-6 col-xs-12">
                            <div class="row">
                                <div class="col-md-12 col-sm-12">

                                    <h1> Lista de Polos Cadastrados </h1>
                                    <div class="tabeladospolos">
                                     <?php $this->load->view("admin/tabelapolos"); ?>
                                 </div>
                             </div>
                         </div>
                         
                     </div>
                 </div>
             </div>
         </div>
     </div>

