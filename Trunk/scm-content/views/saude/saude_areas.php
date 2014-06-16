<div id="middle" class="wrapper cf">
    <div class="titulo">
        <h1>Áreas Clínicas</h1>
    </div>
    <div class="has_sidebar">
        <div id="sidebar">
            <form id="form_select_area" method="get" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                <?php
                    while($row = mysqli_fetch_array($areas_clinicas)) {
                        if($area == null){
                            $area = $row['id'];
                        }
                        if($row['id'] == $area){
                            $my_area_clinica = $row;
                            echo "<a href='".$row['id']."' class='active'>\n";
                        }else{                            
                        echo "<a href='".$row['id']."' class=''>\n";
                        }
                        echo "<p>".$row["short_name"]."</p>\n";
                        echo "</a>\n";
                    }
                ?>
                <input id="input_selected_area" name="area" type="hidden" value="" />
            </form>
        </div>
        <div id="container" class="has_borders">
            <div class="content-row">
                <div class="content">
                    <?php echo "<h2>".$my_area_clinica['name']."</h2>"; ?>
                </div>
            </div>
            <div class="content-row">
    <div class="content-row">
        <div class="content-left">
            <div class="content">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>

            </div>
            <div class="content">
                <div class="content-right">
                    <a href="/saude/marcacao-consulta.html" class="appointment">
                        <p>Marcar Consulta</p>
                    </a>
                </div>
            </div>
        </div>
        <div class="content-right">
            <div class="content">
                <fieldset>
                    <legend>
                        <span>Contactos</span>
                    </legend>
                    <address>
                        <p>
                            <strong>Tel.</strong>244 106 202</p>
                        <p>
                            <strong>Fax</strong>244 106 298</p>
                        <p>
                            <strong>Email</strong>geral@misericordiadeleiria.pt</p>
                    </address>
                </fieldset>
            </div>
        </div>
    </div>
    <div class="content-row cf">
        <div class="content-left">
            <div class="content">
                <?php
                    while($row = mysqli_fetch_array($informacao_doutor)){
                        if ($row['clinical_specialty_id'] == $my_area_clinica['id']){
                            echo "<div class='content-row'> \n
                                    <div class='content-other cf'> \n
                                        <div class='content-left'> \n
                                            <div class='content'> \n";
                                        
                            echo "<p>Nome: ".$row['doctor_name']."</p>";
                            if (!$row['mobile_phone'] == NULL){
                                echo "<p>Telemóvel: ".$row['mobile_phone']."</p>";                            
                            }elseif(!$row['phone'] == NULL){
                                echo "<p>Telefone: ".$row['phone']."</p>";    
                            }else{
                                echo "<p>Telefone: Não disponivel</p>"; 
                            }
                            echo "<p>Email: ".$row['email']."</p>";
                            
                            echo "          </div> \n
                                        </div> \n";
                                            
                            $doctor_image = null;
                            if (!$row['photo'] == NULL){
                                $doctor_image = $row['photo'];                                    
                            } elseif (!$row['photo_url'] == NULL){
                                $doctor_image = $row['photo_url'];                                      
                            }
                            echo "
                                <div class='content-right'> \n
                                    <img src='$doctor_image' alt='Imagem não disponivel'>";
                                      
                            echo "  </div> \n
                                </div> \n";
                        }
                    }
                ?>
                                     <!--       <p>Nome: </p>
                                            <p>Telefone:</p>
                                            <p>Email:</p>
                                            <p>Disponibilidade:</p>
                                        </div>
                                    </div>-->
                                    
            </div>
        </div>
        <div class="content-right">
            <div class="content">
                <fieldset>
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