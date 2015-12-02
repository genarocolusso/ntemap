
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
                                            <div class="title">50</div>
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
                                            <div class="title">23</div>
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
                                            <div class="title">280</div>
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
                                 
                                    $attr = 'id="addform"'; //The form will have the id 'my_form'
                                 echo form_open_multipart('index.php/painel/cadastrar',$attr);
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
                                </form>

                                <div id="map2" class="formmap">

                                </div>
                                 
                                 <hr>
                               

                            </div>
                            <div class="row">
                                <div class="col-md-6 col-sm-12">
                                    <div class="thumbnail no-margin-bottom">
                                        <img src="../img/thumbnails/picjumbo.com_IMG_4566.jpg" class="img-responsive">
                                        <div class="caption">
                                            <h3 id="thumbnail-label">Thumbnail label<a class="anchorjs-link" href="#thumbnail-label"><span class="anchorjs-icon"></span></a></h3>
                                            <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                                            <p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-12">
                                    <div class="thumbnail no-margin-bottom">
                                        <img src="../img/thumbnails/picjumbo.com_IMG_3241.jpg" class="img-responsive">
                                        <div class="caption">
                                            <h3 id="thumbnail-label">Thumbnail label<a class="anchorjs-link" href="#thumbnail-label"><span class="anchorjs-icon"></span></a></h3>
                                            <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                                            <p><a href="#" class="btn btn-success" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-xs-12">
                            <div class="row">
                                <div class="col-md-12 col-sm-12">

                                <h1> Lista de Polos Cadastrados </h1>
                                <?php if($polos){ ?>
                                    <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
                                        <thead>
                                            <tr>
                                                <th>Name</th>
                                                <th>Latitude</th>
                                                <th>Longitude</th> 
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                         <tbody>
                                  <?php foreach ($polos as $key ) { ?>
                                              <tr>
                                                <td><?= $key['name']?></td>
                                                <td><?= $key['latitude']?></td>
                                                <td><?= $key['longitude']?></td>
                                                <td> - </td>
                                                 
                                            </tr>



                                 <?php  }

                                 ?>
                                  </tbody>
                                    </table> <?php } ?> 
                                </div>
                            </div>
                            <div class="card card-success">
                                <div class="card-header">
                                    <div class="card-title">
                                        <div class="title"><i class="fa fa-comments-o"></i> Last Message</div>
                                    </div>
                                    <div class="clear-both"></div>
                                </div>
                                <div class="card-body no-padding">
                                    <ul class="message-list">
                                        <a href="#">
                                            <li>
                                                <img src="../img/profile/profile-1.jpg" class="profile-img pull-left">
                                                <div class="message-block">
                                                    <div><span class="username">Tui2Tone</span> <span class="message-datetime">12 min ago</span>
                                                    </div>
                                                    <div class="message">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur bibendum ornare dolor, quis ullamcorper ligula sodales.</div>
                                                </div>
                                            </li>
                                        </a>
                                        <a href="#">
                                            <li>
                                                <img src="../img/profile/profile-1.jpg" class="profile-img pull-left">
                                                <div class="message-block">
                                                    <div><span class="username">Tui2Tone</span> <span class="message-datetime">15 min ago</span>
                                                    </div>
                                                    <div class="message">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur bibendum ornare dolor, quis ullamcorper ligula sodales.</div>
                                                </div>
                                            </li>
                                        </a>
                                        <a href="#">
                                            <li>
                                                <img src="../img/profile/profile-1.jpg" class="profile-img pull-left">
                                                <div class="message-block">
                                                    <div><span class="username">Tui2Tone</span> <span class="message-datetime">2 hour ago</span>
                                                    </div>
                                                    <div class="message">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur bibendum ornare dolor, quis ullamcorper ligula sodales.</div>
                                                </div>
                                            </li>
                                        </a>
                                        <a href="#">
                                            <li>
                                                <img src="../img/profile/profile-1.jpg" class="profile-img pull-left">
                                                <div class="message-block">
                                                    <div><span class="username">Tui2Tone</span> <span class="message-datetime">1 day ago</span>
                                                    </div>
                                                    <div class="message">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur bibendum ornare dolor, quis ullamcorper ligula sodales.</div>
                                                </div>
                                            </li>
                                        </a>
                                        <a href="#" id="message-load-more">
                                            <li class="text-center load-more">
                                                <i class="fa fa-refresh"></i> load more..
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

