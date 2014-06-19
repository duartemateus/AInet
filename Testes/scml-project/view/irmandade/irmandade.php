<div id="middle" class="wrapper">
    <div class="titulo">
        <h1>Irmandade da SCM Leiria</h1>
    </div>
    <div id="container" class="">
        <div class="content-row cf">
            <div class="content-row cf">
                <div class="content-row">
                    <div class="content">
                        <p>
                            A Irmandade da Santa Casa da Misericórdia de Leiria, fundada no ano de 1544, é uma associação constituída por fiéis, vulgarmente chamados no Compromisso da Irmandade como irmãos.
                            O número de irmãos é ilimitado e são eles que constituem a Assembleia Geral, órgão social responsável pela gestão da Santa Casa da Misericórdia, mediante poderes delegados na Mesa Administrativa e Conselho Fiscal.
                        </p>
                        <br/>
                        <p>
                            Podem ser admitidos como irmãos todas as pessoas de ambos os sexos; de maioridade; sejam naturais e residentes ou ligados por laços de afectividade ao concelho da sede da Irmandade; gozem de boa reputação moral e social; aceitem os princípios da doutrina e da moral cristãos que informam a Irmandade; e que se comprometam ao pagamento de uma quota semestral.
                            A admissão dos irmãos é feita mediante proposta subscrita por dois irmãos e pelo próprio candidato e aprovada em Mesa Administrativa por maioria absoluta dos votos dos seus membros presentes na respectiva votação.
                        </p>

                        <h3>Direitos dos Irmãos</h3>
                        <p>
                            Todos os irmãos são detentores de direitos, nomeadamente assistir, participar e votar nas reuniões da Assembleia Geral; serem eleitos para os Corpos Sociais; requererem a convocação extraordinária da Assembleia Geral, Mesa Administrativa e Conselho Fiscal; visitar, gratuitamente, as instalações da Santa Casa da Misericórdia/Hospital D. Manuel de Aguiar; realizar, gratuitamente, exames em situações carenciados devidamente comprovadas; participar, gratuitamente em programa de Piscina, 2 vezes por semana, durante um mês; e ainda poderem integrar programas de Rastreio do Cancro do Colo do Útero e do Cancro da Próstata.
                        </p>
                        <h3>Deveres dos Irmãos</h3>
                        <p>
                            Todos os irmãos são obrigados a pagar anualmente o valor respectiva quota aprovado em Assembleia Geral; desempenhar com zelo e dedicação os cargos para que foram eleitos para os Corpos Sociais; comparecer em actos solenes para representarem a Irmandade; colaborar no progresso e desenvolvimento da Santa Casa da Misericórdia de Leiria; propor à Mesa Administrativa novos irmãos ou que se tornem benfeitores da Irmandade.
                        </p>
                        <h3>Exclusão dos Irmãos</h3>
                        <p>
                            Serão excluídos da Irmandade todos os irmãos que solicitarem a sua exoneração; que deixarem de pagar a sua quota por tempo superior a dois anos; que não prestarem conta dos valores que lhes tenham sido confiados; que, sem motivo justificado, se recusarem a ocupar os lugares dos Corpos Sociais para os quais foram eleitos; que perderam a boa reputação moral e social ou voluntariamente causaram danos à Irmandade; que tomem atitudes hostis à Religião Católica; e finalmente por aplicação da pena de exclusão por parte da Mesa Administrativa.
                            Se pretender ajudar a Santa Casa da Misericórdia de Leiria/Hospital D. Manuel de Aguiar inscreva-se na qualidade de Irmão ou então torne-se seu benfeitor.
                        </p>
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
                                    <p class="phone">244 106 202</p>
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