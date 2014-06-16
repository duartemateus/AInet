<?php if(!isset($secondnavbar)){ $secondnavbar=array(0,0); } ?>

<div id="secondnavbar" class="">
    <div class="navbar wrapper">
        <ul class="nav">
            <?php $str='' ;
                switch ($secondnavbar[0]){ 
                    case 0:
                    $str="<li class='disabled'>\n
                            <a href='#'><p>O SABER DA EXPERIÊNCIA (500 ANOS DE HISTÓRIA)<p></a>\n
                        </li>\n" ;
                        break;
                    case 1:
                    $str="<li".($secondnavbar[1]==1 ? " class='active'": "").">\n
                            <a href='saude_areas.php'>Áreas Clínicas</a>\n
                        </li>\n
                        <li".($secondnavbar[1]==2 ? " class='active'": ""). ">\n
                            <a href='equipa_clinica.php'>Equipa Clínica</a>\n
                        </li>\n
                        <li".($secondnavbar[1]==3 ? " class='active'": ""). ">\n
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