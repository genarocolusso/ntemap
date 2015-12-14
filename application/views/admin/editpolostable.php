                                <?php foreach ($polos as $key) { ?>
                                <a href="#">
                                    <li>
                                        <img src=" " class="profile-img pull-left">
                                        <div class="message-block updateddata">
                                            <div><span class="username"><?= $key['name'] ?></span> <span class="message-datetime">100 Alunos</span>
                                            </div>
                                            <?php if($key['endereco']){ ?>
                                            <div class="message"> <?= $key['endereco'] ?>.</div>
                                            <?php }else{ ?> 
                                            <div class="message"> Ainda Sem informação</div>
                                            <?php } ?>
                                            <div class="hiddeninfo" idpolo='<?= $key['idpolo'] ?>' email='<?= $key['email'] ?>' coordenacao='<?= $key['coordenacao'] ?>'
                                            coordemail='<?= $key['coordemail'] ?>' contato='<?= $key['contato'] ?>' endereco='<?= $key['endereco'] ?>' name='<?= $key['name'] ?>'> </div>

                                           </div>
                                       </li>
                                   </a>
                                   <?php } ?>