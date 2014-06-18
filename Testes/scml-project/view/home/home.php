<div id="middle" class="wrapper united">
    <div id="container" class="has_borders">
        <div class="content-row cf has_b_shadow">
            <div class="slider-wrapper presentation">
                <a href="#" class="slider-content-previous">
                    <span>Anterior</span>
                </a>
                <a href="#" class="slider-content-next">
                    <span>Próximo</span>
                </a>
                <div class="slider-content">
                    <div class='item-content'></div>
                </div>
                <div class="slider presentation">
                    <div class='slider-item'>
                        <div class='image'>
                            <a href='#'>
                                <img src='<?php echo IMG_DIR . "present_scml.png"; ?>' alt=''/>
                            </a>
                        </div>
                        <div class='item-content'>
                        </div>
                    </div>
                    <div class='slider-item'>
                        <div class='image'>
                            <a href='#'>
                                <img src='<?php echo IMG_DIR . "present_hospital.png"; ?>' alt=''/>
                            </a>
                        </div>
                        <div class='item-content'>
                        </div>
                    </div>
                    <div class='slider-item'>
                        <div class='image'>
                            <a href='#'>
                                <img src='<?php echo IMG_DIR . "present_lar.png"; ?>' alt=''/>
                            </a>
                        </div>
                        <div class='item-content'>
                        </div>
                    </div>
                    <div class='slider-item'>
                        <div class='image'>
                            <a href='#'>
                                <img src='<?php echo IMG_DIR . "present_creche.png"; ?>' alt=''/>
                            </a>
                        </div>
                        <div class='item-content'>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br/>
        <div class="content-row cf">
            <div class="content-left">
                <div class="slider-wrapper publication has_borders">
                    <a href="#" class="slider-content-previous">
                        <span>Anterior</span>
                    </a>
                    <a href="#" class="slider-content-next">
                        <span>Próximo</span>
                    </a>
                    <div class="slider-content">
                        <div class='item-content'></div>
                    </div>

                    <div class="slider publication">
                        <?php
                        foreach ($vars['news'] as $pub) {
                            echo "\n
                                <div class='slider-item'>\n
                                    <div class='item-content'>\n
                                        <h4>\n
                                            <a href='#'>" . $pub['title'] . "</a>\n
                                        </h4>\n
                                        <p>" . $pub['abstract'] . "</p>\n
                                        <p>Posted: " . $pub['date'] . "</p>
                                    </div>\n
                                </div>\n";
                        }
                        ?>
                    </div>
                </div>
                <hr>
                <fieldset class="news title">
                    <legend>
                        <span>Ultimas Publicações</span>
                    </legend>

                    <?php
                    foreach ($vars['publications'] as $pub) {
                        echo "<div class='content-row cf'>\n
                                <div class='dateholder'>\n
                                    <p>12</p><hr/><p>asd</p>\n
                                </div>\n
                                <div class='info'>\n
                                    <p class='title'>".$pub['title']."</p>\n
                                    <a href='#'><p class='new' >coisas</p></a>\n
                                </div>\n
                            </div>\n";
                    }
                    ?>
                </fieldset> 
            </div>
            <div class="content-right cf">
                <div class="content-row cf">
                    <fieldset class="banner">
                        <legend>
                            <span>As nossas Valencias</span>
                        </legend>
                        <div>
                            <a href="#"><h4>Hospital D. Manuel de Aguiar</h4></a>
                            <p>O Hospital D. Manuel de Aguiar (HDMA) oferece aos seus utentes uma unidade moderna e tecnologicamente apetrechada, apta para dar uma resposta profissional e competente nas suas diversas áreas de intervenção.</p>
                            <hr/>
                            <a href="#"><h4>Residencial XXI</h4></a>
                            <p>A Residencial XXI é o local ideal para quem pretende uma opção de repouso de cariz familiar, onde a personalidade de cada utente determina o atendimento dos diversos profissionais desta unidade.</p>
                            <hr/>
                            <a href="#"><h4>Lar N. S. da Encarnação</h4></a>
                            <p>O Lar Nossa Senhora da Encarnação recebe pessoas idosas, de ambos os sexos, com dificuldades ou ausência de inserção no meio social e familiar e que expressam vontade em serem admitidas nesta instituição.</p>
                            <hr/>
                            <a href="#"><h4>Creche Casa Sanches</h4></a>
                            <p>Com esta infra-estrutura, a Santa Casa da Misericórdia de Leiria vocaciona mais uma importante valência no âmbito das suas competências sociais, com uma capacidade instalada para 33 crianças, dos 0 aos 36 meses.</p>
                        </div>
                    </fieldset>
                </div>
            </div>
        </div>
    </div>
</div>