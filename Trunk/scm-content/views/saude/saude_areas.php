<div id="middle" class="wrapper cf">
    <div class="titulo">
        <h1>Áreas Clínicas</h1>
    </div>
    <div class="has_sidebar">
        <div id="sidebar">
            <form id="form_select_area" method="get" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                <?php
                    $i = 0;
                    while($row = mysqli_fetch_array($areas_clinicas)) {
                        if($i == $area){
                            $my_area_clinica = $row;
                            echo "<a href='".$i."' class='active'>\n";
                        }
                        echo "<a href='".$i."' class=''>\n";
                        echo "<a href='".$i."' class='".($i == $area ? 'active' : '')."'>\n";
                        echo "<p>".$row["short_name"]."</p>\n";
                        echo "</a>\n";
                        $i++;
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
        </div>
    </div>
</div>