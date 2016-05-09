  
<table class="table table-striped" style="
    width: 100%;
">
  <thead>
    <tr><td> </td><td></td><td></td></tr>
    
  </thead>
  <tbody > 
   <?php
   if(isset($dadosarquivos['arquivos'])  ){

    foreach ($dadosarquivos['arquivos'] as $key){
       if($key['galeria']==0){// se imagem for
     ?>
     
     <?php   $caminhotodo = explode('/', $key['arquivo_path']);
     ?>
     <tr>
     <td>
      <?php 
       $extensao = explode('.', $key['arquivo_path']);

    
      if($extensao[1]=='jpg' | $extensao[1]=='png' | $extensao[1]=='bmp' ){ ?>
      <img src="<?= base_url().$key['arquivo_path']?>" class="img-responsive" style="max-height: 50px;">
       <?php } /*<?php echo base_url() ?>Painel/baixararquivo/<?php echo $caminhotodo[1]; ?> */?> 
     </td>
     <td><i class="fa fa-file-archive-o"></i> - <a href="<?= base_url().$key['arquivo_path']?>"  ><?= $caminhotodo[1] ?></a></td>
     <td> 
                     <?php 
                                    $attr = 'id="deletaarquivo"'; //The form will have the id 'my_form'
                                    echo form_open_multipart('painel/deletararquivo',$attr);
                                    ?>

                                    <fieldset style="display:none">
 
                                      <div class="form-group">

                                        <div class="col-md-8">
                                          <input id="deleteidarquivo" name="deleted" type="text" placeholder="" class="form-control input-md" required="">
                                          <input id="filepath" name="filepath"  type="text" placeholder="" class="form-control input-md" required="">

                                        </div> </div></fieldset>
                                         <div class="passadeletearquivo btn btn-danger " filepath="<?= $key['arquivo_path']?>" arquivodelete="<?= $key['id']?>"  title="deletar"   >
                                        <i class="fa fa-trash"></i>
                                      </div>   
                                      <?php 

                                      echo form_close();
                                      ?>
      </td> 
      </tr>

     <?php  
   
     // fim do se galeria 
   } }  foreach ($dadosarquivos['arquivos'] as $key){
       if($key['galeria']==1){// se imagem for da galeria
         $caminhotodo = explode('/', $key['arquivo_path']);
     ?><tr>
     <td>
      <?php 
       $extensao = explode('.', $key['arquivo_path']);

    
      if($extensao[1]=='jpg' | $extensao[1]=='png' | $extensao[1]=='bmp' ){ ?>
      <img src="<?= base_url().$key['arquivo_path']?>" class="img-responsive" style="max-height: 50px;">
       <?php } /*<?php echo base_url() ?>Painel/baixararquivo/<?php echo $caminhotodo[1]; ?> */?> 
     </td>
     <td><i class="fa fa-file-archive-o"></i> - <a href="<?= base_url().$key['arquivo_path']?>"  ><?= $caminhotodo[1] ?></a>
      <br> <b> Arquivo anexado na galeria </b></td>
     <td> 
                     <?php 
                                    $attr = 'id="deletaarquivo"'; //The form will have the id 'my_form'
                                    echo form_open_multipart('painel/deletararquivo',$attr);
                                    ?>

                                    <fieldset style="display:none">
 
                                      <div class="form-group">

                                        <div class="col-md-8">
                                          <input id="deleteidarquivo" name="deleted" type="text" placeholder="" class="form-control input-md" required="">
                                          <input id="filepath" name="filepath"  type="text" placeholder="" class="form-control input-md" required="">

                                        </div> </div></fieldset>
                                         <div class="passadeletearquivo btn btn-danger " filepath="<?= $key['arquivo_path']?>" arquivodelete="<?= $key['id']?>"  title="deletar"   >
                                        <i class="fa fa-trash"></i>
                                      </div>   
                                      <?php 

                                      echo form_close();
                                      ?>
      </td> 
      </tr>

<?php 
   }
  }


}else{ echo 'nenhum arquivo.'; } 
 ?>
 </tbody>
</table>





