<?php if(!isset($secondnavbar)){ $secondnavbar=array(0,0); } ?>

<div id="secondnavbar" class="">
    <div class="navbar wrapper">
        <ul id="nav">
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
                            <a href='../saude/equipa-clinica.php'>Equipa Clínica</a>\n
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
        <div id="searchholder">
            <form class="navbar-search" action="">
                <input class="search-box" type="text" placeholder="Procurar" name="search" />
                <button class="search-button" type="submit"></button>
            </form>
        </div>
    </div>
</div>
