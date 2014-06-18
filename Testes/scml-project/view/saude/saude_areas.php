<div id="middle" class="wrapper cf">
    <div class="titulo">
        <h1>Áreas Clínicas</h1>
    </div>
    <div class="has_sidebar">
        <div id="sidebar" class="saude_areas">
            <form id="form_select_area" method="get" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
                <?php
                foreach ($areas_clinicas as $row) {
                    if (!isset($area)) {
                        $area = $row['id'];
                    }
                    if ($row['id'] == $area) {
                        $my_area_clinica = $row;
                        echo "<a href='" . $my_area_clinica['id'] . "' class='active'>\n";
                    } else {
                        echo "<a href='" . $row['id'] . "' class=''>\n";
                    }
                    echo "<p>" . $row["short_name"] . "</p>\n";
                    echo "</a>\n";
                }
                ?>
                <input id="input_selected_area" name="area" type="hidden" value="" />
            </form>
        </div>
        <div id="container" class="has_borders">
            <div class="content-row">
                <div class="content">
                    <?php echo "<h2>" . $my_area_clinica['name'] . "</h2>"; ?>
                </div>
            </div>
            <div class="content-row cf">
                <div class="content-row">
                    <div class="content-left">
                        <div class="content">
                            <div class="content-right">
                                <a href="/saude/marcacao-consulta.html?area=<?php echo $my_area_clinica['id'] ?>" class="appointment">
                                    <p>Marcar Consulta</p>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="content-right">
                        <div class="content">
                            <fieldset class="title">
                                <legend>
                                    <span>Contactos</span>
                                </legend>
                                <address>
                                    <div class="content">
                                        <p class="phone">244 106 202</p>
                                        <p class="fax">244 106 298</p>
                                        <p class="email">
                                            geral@misericordiadeleiria.pt</p>
                                    </div>
                                </address>
                            </fieldset>
                        </div>
                    </div>
                </div>
                <div class="content-row cf">
                    <div class="content-left">
                        <div class="content">
                            <?php
                            foreach ($informacao_doutor as $row) {
                                if ($row['clinical_specialty_id'] == $my_area_clinica['id']) {
                                    echo "  <div class='content-row'> \n
                                            <div class='content-other cf'> \n
                                            <div class='content-left'> \n
                                            <div class='content'> \n";

                                    echo "  <a class='name' href='#'><p>" . $row['doctor_name'] . "</p></a>";
                                    echo "  <hr>";
                                    echo "  <address> \n";

                                    if (!$row['mobile_phone'] == NULL) {
                                        echo "<p class='mphone'>" . $row['mobile_phone'] . "</p>";
                                    } if (!$row['phone'] == NULL) {
                                        echo "<p class='phone'>" . $row['phone'] . "</p>";
                                    }
                                    echo "  <p class='email'>" . $row['email'] . "</p>";
                                    echo "  </address> \n";
                                    echo "  </div> \n
                                            </div> \n";

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
                                            </div> \n";

                                    echo "  </div> \n
                                            </div> \n";
                                }
                            }
                            ?>
                        </div>
                    </div>
                    <div class="content-right">
                        <div class="content">
                            <fieldset class="title">
                                <legend>
                                    <span>Acordos</span>
                                </legend>
                            </fieldset>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>