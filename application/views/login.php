<?php header('Access-Control-Allow-Origin: *'); ?>
<?php $this->load->view("admin/header") ?>
 
 <br>
 <br> <br> <br>
    <div class="container" style="max-width: 500px;">
      <h2>Login</h2>
          <?php
   $attr = 'id="loginform"'; //The form will have the id 'my_form'
     echo form_open_multipart('Login/logar',$attr);
                ?>
                <div class="form-group">
                  <label class="col-md-4 control-label" for="latitude">Usuário</label>  
                  <div class="col-md-8">
                    <input id="usuario" name="username" type="text" placeholder="" class="form-control input-md" required="">

                  </div>
                </div>
                <div class="form-group">
                  <label class="col-md-4 control-label" for="latitude">Senha</label>  
                  <div class="col-md-8">
                    <input id="senha" name="password" type="password" placeholder="" class="form-control input-md" required="">

                  </div>
                </div>
                <div class="form-group">
                  <label class="col-md-4 control-label" for="singlebutton"> </label>
                  <div class="col-md-8">
                    <button id="logar" name="logar" class="btn btn-primary">Entrar</button>
                  </div>
                </div>



                <?php  
                echo form_close();
                ?>


    </div>

<?php $this->load->view("admin/prefoot") ?>

 


<?php $this->load->view("admin/foot") ?>
