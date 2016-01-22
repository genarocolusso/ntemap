                                <?php 
                                if($polos){
                                foreach ($polos as $key) { ?>
                                <a href="#">
                                    <li>
                                        <img src="<?php base_url()?>../img/<?= $key['idpolo'] ?>.jpg" style="width: 50px; height: 50px" class="profile-img pull-left">
                                        <div class="message-block updateddata">
                                            <div><span class="username"><?= $key['name'] ?></span> <span class="message-datetime">100 Alunos</span>
                                            </div>
                                            <?php if($key['endereco']){ ?>
                                            <div class="message"> <?= $key['endereco'] ?></div>
                                            <?php }else{ ?> 
                                            <div class="message"> Ainda Sem informação</div>
                                            <?php } ?>
                                             <div class="message"> <?= $key['email'] ?> </div>
                                            <div class="hiddeninfo" idpolo='<?= $key['idpolo'] ?>' email='<?= $key['email'] ?>' coordenacao='<?= $key['coordenacao'] ?>'
                                            coordemail='<?= $key['coordemail'] ?>' contato='<?= $key['contato'] ?>' endereco='<?= $key['endereco'] ?>' name='<?= $key['name'] ?>'> </div>

                                            <b>
                                              <?php   
                                              $narquivos = 0;
                                                foreach ($arquivos as $arquivo) {
                                                  if($arquivo['id_polo']==$key['idpolo'])
                                                    $narquivos += 1;
                                                }
                                                echo $narquivos;
                                              ?> Arquivos
                                            </b>

                                           </div>
                                       </li>
                                   </a>
                                   <?php }  }?>