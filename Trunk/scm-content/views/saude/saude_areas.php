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

        </div>
    </div>
</div>