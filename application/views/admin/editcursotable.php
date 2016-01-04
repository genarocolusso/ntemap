                                <?php foreach ($cursos as $key) { ?>
                                <a href="#">
                                    <li>
                                        <img src="<?php base_url()?>../img/<?= $key['idpolo'] ?>.jpg" style="width: 50px; height: 50px" class="profile-img pull-left">
                                        <div class="message-block updateddata">
                                            <div><span class="username"><?= $key['nome'] ?></span> 
                                            </div> 
                                             <div class="message">Número de Alunos: <?= $key['numalunos'] ?> </div>
                                            <div class="hiddeninfo" idpolo='<?= $key['idpolo'] ?>' idcurso='<?= $key['id'] ?>' nome='<?= $key['nome'] ?>'  numalunos='<?= $key['numalunos'] ?>' ativo='<?= $key['ativo'] ?>'> </div>

                                           </div>
                                       </li>
                                   </a>
                                   <?php } ?>