<?php require_once '../config/commons.php'; ?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv='content-type' content='text/html; charset=utf-8' />
        <title><?php echo $title; ?></title>
        <meta name='keywords' content='<?php echo $keywords; ?>' />
        <meta name='description' content='<?php echo $description; ?>' />
        <link rel='shortcut icon' href='<?php echo IMG_DIR . "favicon.ico"; ?>'>
        <link rel='stylesheet' href='<?php echo CSS_DIR . "reset.css"; ?>' type='text/css' />
        <link rel='stylesheet' href='<?php echo CSS_DIR . "style.css"; ?>' type='text/css' />
        <link rel='stylesheet' href='<?php echo CSS_DIR . "slider.css"; ?>' type='text/css' />
        <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.4/themes/smoothness/jquery-ui.css" />
        <script type='text/javascript' src="http://code.jquery.com/jquery-1.10.2.js"></script>
        <script type='text/javascript' src="http://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
        <script type='text/javascript' src='<?php echo JS_DIR . "jquery.cycle.all.js"; ?>'></script>
        <script type='text/javascript' src='<?php echo JS_DIR . "jquery.easing.1.3.js"; ?>'></script>
        <script type='text/javascript' src='<?php echo JS_DIR . "slider.js"; ?>'></script> 
        <script type='text/javascript' src='<?php echo JS_DIR . "typeahead.min.js"; ?>'></script> 
        <style>
            #login-dialog .ui-state-error {
                padding: .3em;
            }
            #login-form-tips {
                border: 1px solid transparent;
                padding: 0.4em;
                padding-left: 0;
            }
        </style>
        <script type='text/javascript'>
            $(document).ready(function() {
                $('a[href="#"]').click(function(event) {
                    event.preventDefault();
                });
                $('#sidebar.saude_areas a').click(function(e) {
                    var allElems = $('#sidebar').children();
                    for (var i = 0; i < allElems.length; i++) {
                        allElems[i].className = '';
                    }
                    var id = $(this).attr('href');
                    document.getElementById('input_selected_area').value = id;
                    document.forms['form_select_area'].submit();
                    e.preventDefault();
                });
                $('input.typeahead').typeahead({
                    name: 'accounts',
                    local: [<?php
if (isset($doctor_name)) {
    foreach ($doctor_name as $row) {
        if ($first_time) {
            echo "'" . $row['doctor_name'] . "'";
            $first_time = false;
        } else {
            echo ",'" . $row['doctor_name'] . "'";
        }
    }
}
?>]
                });
            });
            $(function() {
                var email = $("#login_email"),
                        password = $("#login_password"),
                        allDialogFilds = $([]).add(email).add(password),
                        tips = $("#login-form-tips"),
                        login = $("#login-form"),
                        logout = $("#logout-form"),
                        dialog = $("#login-dialog");

                function updateTips(t) {
                    tips.text(t).addClass("ui-state-highlight");
                    setTimeout(function() {
                        tips.removeClass("ui-state-highlight", 1500);
                    }, 500);
                }

                function checkLength(o, n, min, max) {
                    if (o.val().length > max || o.val().length < min) {
                        o.addClass("ui-state-error");
                        updateTips(n + " deve ter um tamanho entre " +
                                min + " e " + max + ".");
                        return false;
                    } else {
                        return true;
                    }
                }

                function checkRegexp(o, regexp, n) {
                    if (!(regexp.test(o.val()))) {
                        o.addClass("ui-state-error");
                        updateTips(n);
                        return false;
                    } else {
                        return true;
                    }
                }

                function checkifValid() {
                    var bValid = true;
                    allDialogFilds.removeClass("ui-state-error");
                    bValid = bValid && checkLength(email, "Email", 6, 80);
                    bValid = bValid && checkLength(password, "Palavra-Chave", 4, 24);
                    bValid = bValid && checkRegexp(email, /^((([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+(\.([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+)*)|((\x22)((((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(([\x01-\x08\x0b\x0c\x0e-\x1f\x7f]|\x21|[\x23-\x5b]|[\x5d-\x7e]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(\\([\x01-\x09\x0b\x0c\x0d-\x7f]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]))))*(((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(\x22)))@((([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.)+(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.?$/i, "eg. scml@example.com");
                    bValid = bValid && checkRegexp(password, /^([0-9a-zA-Z])+$/, "A Palavra-Chave apenas pode conter: a-z 0-9");
                    if (bValid) {
                        login.submit();
                    }
                }

                dialog.dialog({
                    autoOpen: false,
                    width: 400,
                    modal: true,
                    buttons: {
                        "Cancelar": function() {
                            $(this).dialog("close");
                        },
                        "Novo Utilizador": function() {
                            window.location.href = "./pessoal_registar.php";
                        },
                        "Entrar": function() {
                            checkifValid();
                        }
                    },
                    close: function() {
                        allFields.val("").removeClass("ui-state-error");
                    }
                });
                dialog.on("keypress", $("#login_password"), function(event) {
                    if (event.keyCode === 13) {
                        checkifValid();
                    }
                });

                $("#login").click(function() {
                    dialog.dialog("open");
                });
                $("#logout").click(function() {
                    logout.submit();
                });
            });
            function loadXMLDoc() {
                $('.remove-typeahead').hide();
                var specialty = $('#search_opt_speciality').value;
                var id = 0;
                var array =
<?php
$first = true;
echo "{";
if (isset($areas_clinicas)) {
    foreach ($areas_clinicas as $row) {
        if ($first) {
            echo "'" . $row['short_name'] . "' : '" . $row['id'] . "'";
            $first = false;
        } else {
            echo ",'" . $row['short_name'] . "' : '" . $row['id'] . "'";
        }
    }
}
echo "}";
?>;
                var xmlhttp;
                if (window.XMLHttpRequest) {
                    xmlhttp = new XMLHttpRequest();
                }
                else {
                    xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
                }
                xmlhttp.onreadystatechange = function() {
                    if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                        document.getElementById("specialty").innerHTML = xmlhttp.responseText;
                    }
                }
                xmlhttp.open("GET", "equipa_clinica.php?x=" + array[specialty], true);
                xmlhttp.send();
            }

        </script>
    </head>

    <body>
        <div id="top" class="has_b_shadow">
            <div id="logo">
                <div class="wrapper">
                    <div class="imageholder">
                        <a href="./">
                            <img src='<?php echo IMG_DIR . "scml_white.png" ?>' alt="">
                        </a>
                    </div>
                </div>
            </div>
            <div id="firstnavbar" class="">
                <div class="wrapper">
                    <div id="imagesholder">
                        <!-- 2 divs por imagem -->
                        <a <?php echo $firstnavbar == 1 ? 'class="active" ' : ''; ?>href="saude_areas.php">
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

                        <?php
                        if (isset($_SESSION['authenticated']) && $_SESSION['authenticated'] == true) {
                            echo "  
                            <a " . ($firstnavbar == 6 ? 'class=\"active\"' : "") . "href='areapessoal.php'>
                                <div class='imageholder'>
                                    <div>
                                        <h1>Área Pessoal</h1>
                                    </div>
                                </div>
                            </a>";
                            if ($_SESSION['user_role'] < 3) {
                                echo "  
                                <a " . ($firstnavbar == 7 ? 'class=\"active\"' : "") . "href='admin.php'>
                                    <div class='imageholder'>
                                        <div>
                                            <h1>Administração</h1>
                                        </div>
                                    </div>
                                </a>";
                            }
                        }
                        ?>
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
                            <a href='saude_equipa.php'>Equipa Clínica</a>\n
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
                                    <?php
                                    if ($auth->isAuthenticated()) {
                                        $array = explode(" ", $user['name']);
                                        $f_name = $array[0];
                                        if (count($array) > 1) {
                                            $last_name = $array[count($array) - 1];
                                            $f_name = $f_name . " " . $last_name;
                                        }
                                        echo " <a href='areapessoal.php'>
                                                <p>" . $f_name . "</p>
                                               </a>";
                                        echo "<ul><li>
                                                <a id='logout' href='#'>
                                                    <p>Terminar Sessão</p>
                                                </a>
                                              </li></ul>";
                                    } else {
                                        echo " <a id='login' href='#'>
                                                <p>Área Reservada</p>
                                               </a>";
                                    }
                                    ?>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div id="login-dialog" title="Acesso à Área Reservada">
                <form id="login-form" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                    <p id="login-form-tips">Todos os campos são necessários.</p>
                    <fieldset>
                        <label for="login_email">Email do Utilizador</label>
                        <input class="fill" type="email" placeholder="Email do Utilizador" name="login_email" id="login_email" value="">
                        <label for="login_password">Palavra-Chave</label>
                        <input class="fill" type="password" pattern=".{4,24}" placeholder="Palavra-Chave" name="login_password" id="login_password" value="" autocomplete="off">
                    </fieldset>
                </form>
            </div> 
            <form id="logout-form" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                <input type="hidden" name="logout" value="true">
            </form>
        </div>
