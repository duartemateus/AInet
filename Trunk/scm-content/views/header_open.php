<!DOCTYPE html>
<html>

<head>
    <meta http-equiv='content-type' content='text/html; charset=utf-8' />
    <title>
        <?php echo $title;?>
    </title>
    <meta name='keywords' content='<?php echo $keywords;?>' />
    <meta name='description' content='<?php echo $description;?>' />
    <link rel='shortcut icon' href='<?php echo IMGS_DIR."logoicon.ico";?>'>
    <link rel='stylesheet' href='<?php echo STYLES_DIR."reset.css";?>' type='text/css' />
    <link rel='stylesheet' href='<?php echo STYLES_DIR."style.css";?>' type='text/css' />
    <script type='text/javascript' src='<?php echo INCLUDES_DIR."jquery-2.1.0.min.js";?>'></script>
    <script type='text/javascript' src='<?php echo JS_DIR."sticky-secondbar";?>'></script>
    <script type='text/javascript'>
        $(document).ready(function() {
            $('a[href="#"]').click(function(event) {
                event.preventDefault();
            });
        });
    </script>