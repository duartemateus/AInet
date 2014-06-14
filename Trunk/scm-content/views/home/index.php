<?php 
    $title="Santa Casa da Misericórdia de Leiria" ;
    $keywords="";
    $description=""; 
    $body_onload=""; 
    include_once VIEWS_DIR.'header_open.php' 
    // INICIO todos os includes e scripts particulares da pagina
    echo "<link rel='stylesheet' href='STYLES_DIR/slider.css' type='text/css'/>\n"; 
    echo "<script type='text/javascript' src='INCLUDES_DIR/jquery.cycle.all.js'></script>\n";
    echo "<script type='text/javascript' src='INCLUDES_DIR/jquery.easing.1.3.js'></script>"; 
    echo "<script type='text/javascript' src='JS_DIR/slider.js'></script>\n";  
    // END 
    include_once VIEWS_DIR.'header_close.php';
    include_once VIEWS_DIR.'top.php'    
?>


<div id="middle" class="wrapper">
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
                    <?php for($i=0 ; $i<4; $i++){ echo "<div class='slider-item'>\n
                            <div class='image'>\n
                                <a href='#'>\n
                                    <img src='../../scm-imagens/wide_image_sample.jpg' alt='' />\n
                                </a>\n
                            </div>\n
                            <div class='item-content '></div>\n
                        </div>\n"; } ?>
                </div>
            </div>
        </div>
        <div class="content-row cf">
            <div class="content">
                <div class="content">
                    <div class="content">
                        <div class="content">
                            <p>
                                <strong>A Santa Casa da Misericórdia de Leiria</strong>– instituição com 500 anos de história – renova-se e actualiza-se diariamente. A presença num meio como a Internet é disto um bom exemplo. Com este site, pretende a Misericórdia de Leiria dar a conhecer a todos aqueles que nos visitam as suas valências sociais e os projectos em que estamos envolvidos. Esperamos que aprecie este endereço.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <hr>
        <div class="content-row cf">
            <div class="content-half ">
                <div class="content-half">
                    <div class="content cf">
                        <fieldset class="title links">
                            <legend>
                                <span>Saúde</span>
                            </legend>
                            <div>
                                <a href="#">
                                    <p>Ver mais
                                    </p>
                                </a>
                                <a href="#">
                                    <p>Ver mais
                                    </p>
                                </a>
                                <a href="#">
                                    <p>Ver mais
                                    </p>
                                </a>
                                <a href="#">
                                    <p>Ver mais
                                    </p>
                                </a>
                            </div>
                        </fieldset>
                    </div>
                </div>
                <div class="content-half">
                    <div class="content cf">
                        <fieldset class="title links">
                            <legend>
                                <span>Cuidados Geriátricos</span>
                            </legend>
                            <div>
                                <a href="#">
                                    <p>Ver mais
                                    </p>
                                </a>
                                <a href="#">
                                    <p>Ver mais
                                    </p>
                                </a>
                                <a href="#">
                                    <p>Ver mais
                                    </p>
                                </a>
                                <a href="#">
                                    <p>Ver mais
                                    </p>
                                </a>
                            </div>
                        </fieldset>
                    </div>
                </div>
            </div>
            <div class="content-half">
                <div class="content-half">
                    <div class="content cf">
                        <fieldset class="title links">
                            <legend>
                                <span>Creche</span>
                            </legend>
                            <div>
                                <a href="#">
                                    <p>Ver mais
                                    </p>
                                </a>
                                <a href="#">
                                    <p>Ver mais
                                    </p>
                                </a>
                                <a href="#">
                                    <p>Ver mais
                                    </p>
                                </a>
                                <a href="#">
                                    <p>Ver mais
                                    </p>
                                </a>
                            </div>
                        </fieldset>
                    </div>
                </div>
                <div class="content-half">
                    <div class="content cf">
                        <fieldset class="title links">
                            <legend>
                                <span>Irmandade</span>
                            </legend>
                            <div>
                                <a href="#">
                                    <p>Ver mais
                                    </p>
                                </a>
                                <a href="#">
                                    <p>Ver mais
                                    </p>
                                </a>
                                <a href="#">
                                    <p>Ver mais
                                    </p>
                                </a>
                                <a href="#">
                                    <p>Ver mais
                                    </p>
                                </a>
                            </div>
                        </fieldset>
                    </div>
                </div>
            </div>
        </div>
        <hr>
        <div class="content-row cf">
            <div class="content-left">
                <div class="content cf">
                    <div class="slider-wrapper news has_borders">
                        <div class="slider-content">
                            <div class='item-content'></div>
                        </div>
                        <div class="slider-paging"></div>
                        <div class="slider news cf">
                            <?php for($i=0 ; $i<4; $i++){ echo "\n
                            <div class='slider-item'>\n
                                <div class='image'>\n
                                    <a href='#'>
                                        <img src='../../scm-imagens/santa.png' alt=''/>
                                    </a>\n
                                </div>\n
                                <div class='item-content'>\n
                                    <h4>\n
                                        <a href='#'>Texto ".$i. "</a>\n
                                    </h4>\n
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>\n
                                </div>\n
                            </div>\n"; } ?>
                        </div>
                    </div>
                    <hr>
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
                            <?php for($i=0 ; $i<4; $i++){ echo "\n
                            <div class='slider-item'>\n
                                <div class='item-content'>\n
                                    <h4>\n
                                        <a href='#'>Texto ".$i. "</a>\n
                                    </h4>\n
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>\n
                                </div>\n
                            </div>\n"; } ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-right cf">
                <div class="content-row cf">
                    <div class="content">
                        <fieldset class="banner">
                            <legend>
                                <span>this is a test</span>
                            </legend>
                            <div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                <hr>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                <hr>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                <hr>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                            </div>
                        </fieldset>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include_once '../footer.php'; ?>