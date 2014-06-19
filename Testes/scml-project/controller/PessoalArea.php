<?php

class controller_PessoalArea {

    const FORM_FIRST = 0;
    const FORM_ERRORS = 1;
    const FORM_OK = 2;

    public function __construct(&$vars) {
        $vars['title'] = "Santa Casa da Misericórdia de Leiria";
        $vars['keywords'] = "";
        $vars['description'] = "";
        $vars['firstnavbar'] = 6;
        $vars['secondnavbar'] = 1;
    }

    public function prepare_vars(&$vars) {
        return false;
    }

    public function get_view(&$vars) {
        return VIEW_DIR . 'pessoal/pessoal_area.php';
    }

}
