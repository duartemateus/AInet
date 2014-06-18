<div id="middle" class="wrapper">
    <div class="titulo">
        <h1>Equipa Clínica</h1>
    </div>
    <div>
        <div id="container" class="cf has_borders">
            <div class="content-row cf">
                <div class="content">
                    <div class="content">
                        <div class="content-left right_border cf">
                            <?php
                            $doctors = array();
                            while ($row = mysqli_fetch_array($informacao_doutor)) {
                                if (isset($doctors[$row['id']])) {
                                    $doctors[$row['id']]['specialty_name'] = $doctors[$row['id']]['specialty_name'] . ", " . $row['specialty_name'];
                                } else {
                                    $doctors[$row['id']] = $row;
                                }
                            }
                            foreach ($doctors as $row) {
                                echo "  <div class='content-row cf'> \n
                                            <div class='content'> \n
                                            <div class='content-other cf'> \n
                                            <div class='content-row cf'> \n
                                            <div class='content-left'> \n
                                            <div class='content-row'> \n
                                            <div class='content'> \n";

                                echo "<a class='name' href='#'><p>" . $row['doctor_name'] . "</p></a>";
                                echo "  <hr>";
                                echo "  <address> \n";

                                if (!$row['mobile_phone'] == NULL) {
                                    echo "<p class='mphone'>" . $row['mobile_phone'] . "</p>";
                                } if (!$row['phone'] == NULL) {
                                    echo "<p class='phone'>" . $row['phone'] . "</p>";
                                }
                                echo "<p class='email'>" . $row['email'] . "</p>";
                                echo "<p class='specialty'>" . $row['specialty_name'] . "</p>";
                                if ($row['research'] != NULL) {
                                    echo "<p class='info'>" . strip_tags(str_replace("</li>", ",", $row['research']), '<br>') . "</p>";
                                }
                                echo "  </address> \n";

                                echo "  </div> \n";
                                echo "  </div> \n";

                                echo "  </div> \n";

                                $doctor_image = null;
                                if (!$row['photo'] == NULL) {
                                    $doctor_image = $row['photo'];
                                } elseif (!$row['photo_url'] == NULL) {
                                    $doctor_image = $row['photo_url'];
                                }
                                echo "
                                        <div class='content-right'> \n
                                        <div class='content-row'> \n
                                            <img class='portrait' src='$doctor_image' alt='Imagem não disponivel'>  
                                        </div>\n
                                        
                                        </div>\n
                                        </div>\n";

                                echo "<div class='content-row cf'>\n";
                                echo "<div class='content-left'>\n";
                                echo "<div class='content-row'>\n";
                                echo "<div class='content'> \n
                                            <a class='news' href='#'><p>Ver ultimas publicações</p></a>";
                                echo "</div>\n";
                                echo "</div>\n";
                                echo "</div>\n";
                                echo "<div class='content-right'>\n";
                                echo "<div class='content-row'>\n";
                                echo "<div class='content-row marcar_consulta'> \n
                                            <form method='get'>
                                                <a href='#'><p>Marcar Consulta</p></a>  
                                                <imput type='hidden' name='doctor' value='" . $row['id'] . "'/>
                                            </form>
                                          </div>\n";
                                echo "</div>\n";
                                echo "</div>\n";
                                echo "</div>\n";
                                echo "  </div> \n
                                            </div> \n
                                            </div> \n";
                            }
                            ?>
                        </div>
                        <div class="content-right left_border">
                            <div class="content-row">
                                <div class="content">
                                    <div class="content-other filter">
                                        <div class="content">
                                            <div class="content-row">
                                                <p class="search"> Pesquisa </p>
                                                <hr>
                                            </div>
                                            <div class="content-row">
                                                <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                                                    <div class="content-row" style="display:inline-block">
                                                        <input type="text" placeholder="Pesquisar por Nome..." name="search_opt_name" class="typeahead tt-query" autocomplete="off" spellcheck="false"/>
                                                        <input class="hidden" type="submit"/>
                                                    </div>
                                                    <hr/>
                                                    <div class="content-row">
                                                        <select placeholder="Pesquisar por Nome..." name="search_opt_speciality" id="speciality_search" onchange="javascript: $(this).closest($('form')).submit();
                                                                $('.remove-typeahead').hide();">
                                                                <?php
                                                                while ($row = mysqli_fetch_array($areas_clinicas)) {
                                                                    echo "<option value='0'>" . $row['short_name'] . "</option> \n";
                                                                }
                                                                ?>
                                                        </select>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>