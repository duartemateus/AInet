<div id="middle" class="wrapper">
    <div>
        <div id="container" class="cf has_borders">
            <div class="content-row cf">
                <div class="content-left perfil cf">
                    <div class="content-row cf">
                        <?php
                        $doctor_image = null;
                        if (!$informacao_doutor[$id_doutor]['photo'] == NULL) {
                            $doctor_image = $informacao_doutor[$id_doutor]['photo'];
                        } elseif (!$informacao_doutor[$id_doutor]['photo_url'] == NULL) {
                            $doctor_image = $informacao_doutor[$id_doutor]['photo_url'];
                        }
                        echo "  <img class='perfil' src='$doctor_image' alt=''/>  ";
                        ?>
                    </div>
                </div>                
                <div class="content-right perfil cf">
                    <div class="content-row">
                        <div class="content-other">
                            <div class="content">
                                <div class="content-row cf">
                                    <p class='perfil'><?php echo $informacao_doutor[$id_doutor]['doctor_name'] ?></p>
                                    <hr>
                                    <div class="content-left half divider">
                                        <div class="content-row cf">
                                            <?php
                                            echo "  <address> \n";
                                            if (!$informacao_doutor[$id_doutor]['mobile_phone'] == NULL) {
                                                echo "<p class='mphone'>" . $informacao_doutor[$id_doutor]['mobile_phone'] . "</p>";
                                            } if (!$informacao_doutor[$id_doutor]['phone'] == NULL) {
                                                echo "<p class='phone'>" . $informacao_doutor[$id_doutor]['phone'] . "</p>";
                                            }
                                            echo "<p class='email'>" . $informacao_doutor[$id_doutor]['email'] . "</p>";
                                            echo "<p class='specialty'>" . $informacao_doutor[$id_doutor]['specialty_name'] . "</p>";
                                            if ($informacao_doutor[$id_doutor]['research'] != NULL) {
                                                echo "<p class='info'>" . strip_tags(str_replace("</li>", ",", $informacao_doutor[$id_doutor]['research']), '<br>') . "</p>";
                                            }
                                            echo "  </address> \n";
                                            ?>
                                        </div>
                                    </div>
                                    <div class="content-right half">
                                        <div class="content-row cf">
                                            <?php
                                            echo "  <address> \n";
                                            if ($informacao_doutor[$id_doutor]['research'] != NULL) {
                                                echo "<p class='quote'>" . strip_tags(str_replace("</li>", ",", $informacao_doutor[$id_doutor]['profile']), '<br>') . "</p>";
                                            } else {
                                                echo "<p class='no_quote'> Sem Informação disponível... <br></p>";
                                            }
                                            echo "  </address> \n";
                                            ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-row cf">

                <br/>
                <hr/>
                <br/>

                <div class="content-left cf">
                    <div class="content-row cf">
                        <fieldset class="news title">
                            <legend>
                                <span>Ultimas Publicações</span>
                            </legend>

                            <?php
                            if (count($vars['publications']) == 0) {
                                echo "  <div class='content-row cf'>\n";
                                echo "<p class='error'>Este Doutor ainda não fez nenhuma publicação. <br></p>";
                                echo " </div>\n";
                            } else {
                                foreach ($vars['publications'] as $pub) {
                                    $timestamp = strtotime($pub['date']);
                                    $day = date("d", $timestamp);
                                    $month = date("M", $timestamp);

                                    echo "
                        <div class='content-row cf'>\n
                            <div class='dateholder'>\n
                                <p>" . $day . "</p><hr/><p>" . $month . "</p>\n
                            </div>\n
                            <div class='info'>\n
                               <p class='title'><a href='#'>" . $pub['title'] . "</a></p>\n
                               <p class='author'>Publicado por:  <a href='#'>" . $pub['name'] . "</a></p>\n
                            </div>\n
                        </div>\n";
                                }
                            }
                            ?>
                        </fieldset> 
                    </div>
                </div>
                <div class="content-right cf">
                    <div class="content-row cf">
                        <div class="content-other filter info">
                            <div class="content">
                                <div class="content-row cf">
                                    <p class="search"> Horário Atendimento </p>
                                    <hr/>
                                </div>
                                <div class="content-row cf">
                                    <?php
                                    echo "  <address> \n";
                                    $availability = explode(":", $informacao_doutor[$id_doutor]['availability']);
                                    $specialty = explode(", ", $informacao_doutor[$id_doutor]['specialty_name']);
                                    $count = count($availability);
                                    for ($i = 0; $i < $count; $i++) {
                                        echo "<p class='specialty_info specialty'>" . $specialty[$i] . "</p> <p class='seta'> " . $availability[$i] . "</p><br/>";
                                    }
                                    echo "  </address> \n";
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-row cf">
                <br/>
                <br/>
                <div class="content-other">
                    <div class="content">
                        <p>Acordos</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>