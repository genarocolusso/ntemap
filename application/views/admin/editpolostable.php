                                <?php foreach ($polos as $key) { ?>
                                            <a href="#">
                                            <li>
                                                <img src=" " class="profile-img pull-left">
                                                <div class="message-block">
                                                    <div><span class="username"><?= $key['name'] ?></span> <span class="message-datetime">100 Alunos</span>
                                                    </div>
                                                    <?php if($key['endereco']){ ?>
                                                    <div class="message"> <?= $key['endereco'] ?>.</div>
                                                <?php }else{ ?> 
                                                    <div class="message"> Ainda Sem informação</div>

                                                <?php } ?>
                                                </div>
                                            </li>
                                        </a>
                                    <?php } ?>