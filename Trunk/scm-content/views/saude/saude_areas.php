<div id="middle" class="wrapper cf">
    <div class="titulo">
        <h1>Áreas Clínicas</h1>
    </div>
    <div class="has_sidebar">
        <div id="sidebar">
            <?php
                $i = 0;
                while($row = mysqli_fetch_array($result)) {
                    echo "<a href='".$i."' class='".($i == $area ? 'active' : '')."'>\n";
                    echo "<p>".$row["short_name"]."</p>\n";
                    echo "</a>\n";
                    $i++;
                }
            ?>
        </div>
        <div id="container" class="has_borders">

        </div>
    </div>
</div>