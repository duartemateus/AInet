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
                    <?php for($i=0 ; $i<4; $i++){ echo 
                        "<div class='slider-item'>\n
                            <div class='image'>\n
                                <a href='#'>\n
                                    <img src='".IMG_DIR."/wide_image_sample.jpg' alt=''
                                </a>\n
                            </div>\n
                            <div class='item-content'>\n
                                <div>\n
                                        <h4>\n
                                            <a href='#'>A Santa Casa da Misericórdia de Leiria</a>\n
                                        </h4>\n
                                        <p>Instituição com 500 anos de história. Renova-se e actualiza-se diariamente. A presença num meio como a Internet é disto um bom exemplo. Com este site, pretende a Misericórdia de Leiria dar a conhecer a todos aqueles que nos visitam as suas valências sociais e os projectos em que estamos envolvidos. Esperamos que aprecie este endereço. </p>\n
                                </div>\n
                            </div>\n
                        </div>\n"; } ?>
                </div>
            </div>
        </div>
        
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