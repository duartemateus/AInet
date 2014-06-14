<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <title>
        <?php echo $title;?>
    </title>
    <meta name="keywords" content="<?php echo $keywords;?>" />
    <meta name="description" content="<?php echo $description;?>" />
    <link rel="shortcut icon" href="../../scm-imagens/logoicon.ico">
    <link rel="stylesheet" href="../../scm-stylesheets/reset.css" type="text/css" />
    <link rel="stylesheet" href="../../scm-stylesheets/style.css" type="text/css" />
    <script type="text/javascript" src="../../scm-includes/jquery-2.1.0.min.js"></script>
    <script type="text/javascript" src="../../scm-javascripts/sticky-secondbar"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('a[href="#"]').click(function(event) {
                event.preventDefault();
            });
        });
    </script>