<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv='content-type' content='text/html; charset=utf-8' />
        <title><?php echo $title; ?></title>
        <meta name='keywords' content='<?php echo $keywords; ?>' />
        <meta name='description' content='<?php echo $description; ?>' />
        <link rel='shortcut icon' href='faviicon.ico'>
        <?php
        echo HTML::style('css/reset.css');
        echo HTML::style('css/style.css');
        echo HTML::style('http://code.jquery.com/ui/1.10.4/themes/smoothness/jquery-ui.css');
        echo HTML::script('http://code.jquery.com/jquery-1.10.2.js');
        echo HTML::script('http://code.jquery.com/ui/1.10.4/jquery-ui.js');
        echo HTML::script('http://code.jquery.com/ui/1.10.4/themes/smoothness/jquery-ui.css');
        echo HTML::script('js/sticky-secondbar.js');
        echo HTML::script('js/dialog-validations.js');
        ?>
        <!-- <script type='text/javascript' src='<?php echo "jquery-2.1.0.min.js"; ?>'></script>-->
        <style>
            .ui-dialog .ui-state-error {
                padding: .3em;
            }
            .validateTips {
                border: 1px solid transparent;
                padding: 0.3em;
            }
        </style>
        <script type='text/javascript'>
            $(document).ready(function() {
                $('a[href="#"]').click(function(event) {
                    event.preventDefault();
                });
            });
        </script>
        <script type='text/javascript'>
            $(function() {
                var email = $("#login_email"),
                        password = $("#login_password"),
                        allFields = $([]).add(email).add(password);

                $("#login-form").dialog({
                    autoOpen: false,
                    width: 310,
                    modal: true,
                    buttons: {
                        Cancel: function() {
                            $(this).dialog("close");
                        },
                        "Registar": function() {

                        },
                        "Entrar": function() {

                        }
                    },
                    close: function() {
                        allFields.val("").removeClass("ui-state-error");
                    }
                });
                $("#show-login").click(function() {
                    $("#login-form").dialog("open");
                });
            });
        </script>
    </head>

    <body>
        <div id="top" class="has_b_shadow">
            <div id="logo">
                <div class="wrapper">
                    <div class="imageholder">
                        <a href="./">
                            <img src='<?php echo "./images/santa.png" ?>' alt="">
                        </a>
                    </div>
                </div>
            </div>
            <div id="firstnavbar" class="">
                <div class="wrapper">
                    <div id="imagesholder">
                        <!-- 2 divs por imagem -->
                        <a <?php echo $firstnavbar == 1 ? 'class="active" ' : ''; ?>href="saude_areas">
                            <div class="imageholder">
                                <div>
                                    <h1>Saúde</h1>
                                </div>
                            </div>
                        </a>
                        <a <?php echo $firstnavbar == 2 ? 'class="active" ' : ''; ?>href="cuidados.php">
                            <div class="imageholder">
                                <div>
                                    <h1>Cuidados Geriátricos</h1>
                                </div>
                            </div>
                        </a>
                        <a <?php echo $firstnavbar == 3 ? 'class="active" ' : ''; ?>href="creche.php">
                            <div class="imageholder">
                                <div>
                                    <h1>Creche</h1>
                                </div>
                            </div>
                        </a>
                        <a <?php echo $firstnavbar == 4 ? 'class="active" ' : ''; ?>href="irmandade.php">
                            <div class="imageholder">
                                <div>
                                    <h1>Irmandade</h1>
                                </div>
                            </div>
                        </a>
                        <a <?php echo $firstnavbar == 5 ? 'class="active" ' : ''; ?>href="contactos.php">
                            <div class="imageholder">
                                <div>
                                    <h1>Contactos</h1>
                                </div>
                            </div>
                        </a>
                        <a <?php echo $firstnavbar == 6 ? 'class="active" ' : ''; ?>href="areapessoal.php">
                            <div class="imageholder">
                                <div>
                                    <h1>Área Pessoal</h1>
                                </div>
                            </div>
                        </a>
                        <a <?php echo $firstnavbar == 7 ? 'class="active" ' : ''; ?>href="admin.php">
                            <div class="imageholder">
                                <div>
                                    <h1>Administração</h1>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>

            <div id="secondnavbar" class="">
                <div class="navbar wrapper">
                    <ul class="nav">
                        <?php
                        $str = '';
                        switch ($firstnavbar) {
                            case 0:
                                $str = "<li class='disabled'>\n
                            <a href='#'><p>O SABER DA EXPERIÊNCIA (500 ANOS DE HISTÓRIA)<p></a>\n
                        </li>\n";
                                break;
                            case 1:
                                $str = "<li" . ($secondnavbar == 1 ? " class='active'" : "") . ">\n
                            <a href='saude_areas.php'>Áreas Clínicas</a>\n
                        </li>\n
                        <li" . ($secondnavbar == 2 ? " class='active'" : "") . ">\n
                            <a href='../saude/equipa-clinica.php'>Equipa Clínica</a>\n
                        </li>\n
                        <li" . ($secondnavbar == 3 ? " class='active'" : "") . ">\n
                            <a href='saude_marcacao.php'>Marcação de Consulta</a>\n
                        </li>\n";
                                break;
                            case 2: break;
                            case 3: break;
                            case 4: break;
                            case 5: break;
                            case 6: break;
                            case 7: break;
                        }
                        echo $str;
                        ?>
                    </ul>
                    <div id="loginholder">
                        <div class="loginholder cf">
                            <ul class="nav cf">
                                <li>
                                    <a id="show-login" href="#">
                                        <p>Área Reservada</p>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div id="login-form" title="Área Reservada">
                <form>
                    <fieldset>
                        <label for="login_email">Email do Utilizador</label>
                        <input type="text" name="login_email" id="login_email" value="" class="text ui-widget-content ui-corner-all">
                        <label for="login_password">Palavra-Chave</label>
                        <input type="password" name="login_password" id="login_password" value="" class="text ui-widget-content ui-corner-all">
                    </fieldset>
                </form>
            </div>  
        </div>
