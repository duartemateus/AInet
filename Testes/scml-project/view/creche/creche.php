<div id="middle" class="wrapper">
    <div class="titulo">
        <h1>Creche Casa Sanches</h1>
    </div>
    <div id="container" class="">
        <div class="content-row cf">
            <div class="content-row cf">
                <div class="content-left">
                    <div class="content-row">
                        <div class="content">
                            <p>Num edifício totalmente recuperado para o efeito e cumprindo todas as disposições legais, encontra-se já em funcionamento a Creche Casa Sanches.</p>
                            <p>
                                <br>Com esta infra-estrutura, a Santa Casa da Misericórdia de Leiria vocaciona mais uma importante valência no âmbito das suas competências sociais, com uma capacidade instalada para 33 crianças, dos 0 aos 36 meses.</p>
                            <p>
                                <br>Apostando em elevados padrões de qualidade, quer no que toca à execução da obra física, quer no domínio do equipamento instalado e dos recursos humanos, pretende-se que a creche se assuma em Leiria como um espaço de referência qualitativa na área pueril, contando com uma estrutura de recursos humanos empenhada e com experiência consolidada no domínio infantil.</p>
                            <p>
                                <br>O modelo de funcionamento da Creche Casa Sanches tem por base o princípio da subsidiariedade, estatuído pela Segurança Social. A aposta neste tipo de valências pela Santa Casa da Misericórdia de Leiria pretende facilitar às famílias o ingresso das crianças neste tipo de instituições, em virtude da escassez das mesmas.</p>
                        </div>
                    </div> 
                </div>
                <div class="content-right">
                    <div class="content-row">
                        <div class="content">
                            <img src="http://www.misericordiadeleiria.pt/pic/conteudo/fotos_4ae1ea7db669c.jpg" alt=" " />
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-row cf">
                <div class="content-left">
                    <div class="content-row">
                        <div class="content">
                            <fieldset class="news title">
                                <legend>
                                    <span>Ultimas Noticias</span>
                                </legend>
                                <br/>
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
                                        foreach ($vars['news'] as $new) {
                                            $type = $vars['news_types'][$new['type']];
                                            $timestamp = strtotime($new['date']);
                                            $day = date("d", $timestamp);
                                            $month = date("M", $timestamp);
                                            $year = date("Y", $timestamp);
                                            $date = $type . " - " . $day . "/" . $month . "/" . $year;

                                            echo "\n
                                            <div class='slider-item'>\n
                                                <div class='item-content'>\n
                                                    <h4>\n
                                                        <a href='#'>" . $new['title'] . "</a>\n
                                                    </h4>\n
                                                    <p>" . $new['abstract'] . "</p>\n
                                                    <p style='position:absolute!important;bottom:10px;right:10px'>
                                                        " . $date .
                                                        "</p>
                                                </div>\n
                                            </div>\n";
                                        }
                                        ?>
                                    </div>
                                </div>
                            </fieldset> 
                        </div>
                    </div>
                </div>
                <div class="content-right">
                    <div class="content-row">
                        <div class="content">
                            <address>
                                <fieldset class="title">
                                    <legend>
                                        <span>Contactos</span>
                                    </legend>
                                    <div class="content">
                                        <p class="address">Rua do Lis</p>
                                        <p>2410-126 LEIRIA</p>
                                        <p class="phone">244 106 300</p>
                                        <p class="fax">244 106 298</p>
                                        <p class="email">geral@misericordiadeleiria.pt</p>
                                    </div>
                                </fieldset>
                            </address>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>