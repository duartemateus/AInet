<div id="middle" class="wrapper">
    <div class="titulo">
        <h1>Equica Clínica</h1>
    </div>
    <div>
        <div id="container" class="has_shadows b_corners t_corners has_borders">
            <form action='<?php echo CONTROLLERS_DIR."validador.php"?>' method="post">
                <div class="content-row">
                    <div class="content">
                        <div class="content">
                            <div class="content-left">
                                <?php
                                    while($row = mysqli_fetch_array($informacao_doutor)){
                                        echo "
                                        <div class='content-row'> \n
                                            <div class='content'> \n
                                                <div class='content-other cf'> \n
                                                    <div class='content-left'> \n
                                                        <div class='content'> \n";
                                                    
                                        echo "<p>Nome: ".$row['pser_nome_completo']."</p>";
                                        if (!$row['mobile_phone'] == NULL){
                                            echo "<p>Telemóvel: ".$row['mobile_phone']."</p>";                            
                                        }elseif(!$row['phone'] == NULL){
                                            echo "<p>Telefone: ".$row['phone']."</p>";    
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
                                            </div> \n
                                        </div> \n";
                                    }                                            
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>