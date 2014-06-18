<!DOCTYPE html>
<html>

    <head>
        <meta http-equiv='content-type' content='text/html; charset=utf-8' />
        <title>
            <?php echo $title; ?>
        </title>
        <meta name='keywords' content='<?php echo $keywords; ?>' />
        <meta name='description' content='<?php echo $description; ?>' />
        <link rel='shortcut icon' href='<?php echo IMGS_DIR . "logoicon.ico"; ?>'>
        <link rel='stylesheet' href='<?php echo STYLES_DIR . "reset.css"; ?>' type='text/css' />
        <link rel='stylesheet' href='<?php echo STYLES_DIR . "style.css"; ?>' type='text/css' />
        <!-- <script type='text/javascript' src='<?php echo INCLUDES_DIR . "jquery-2.1.0.min.js"; ?>'></script>-->
        <script type='text/javascript' src='<?php echo JS_DIR . "sticky-secondbar"; ?>'></script>

        <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.4/themes/smoothness/jquery-ui.css" />
        <script src="http://code.jquery.com/jquery-1.10.2.js"></script>
        <script src="http://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
        <script  type="text/javascript" src='<?php echo JS_DIR . "typeahead.min.js"; ?>'></script>
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
            $(function() {
                var email = $("#login_email"),
                        password = $("#login_password"),
                        allFields = $([]).add(email).add(password),
                        tips = $(".validateTips");

                function updateTips(t) {
                    tips.text(t).addClass("ui-state-highlight");
                    setTimeout(function() {
                        tips.removeClass("ui-state-highlight", 1500);
                    }, 500);
                }

                function checkLength(o, n, min, max) {
                    if (o.val().length > max || o.val().length < min) {
                        o.addClass("ui-state-error");
                        updateTips("Length of " + n + " must be between " +
                                min + " and " + max + ".");
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

                $('input.typeahead').typeahead({
                    name: 'accounts',
                    local: [<?php
            while ($row = mysqli_fetch_array($doctor_name)) {
                if ($first_time) {
                    echo "'" . $row['doctor_name'] . "'";
                    $first_time = false;
                } else {
                    echo ",'" . $row['doctor_name'] . "'";
                }
            }
            ?>]
                });
            });
        </script>