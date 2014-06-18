<?php

class controller_Cuidados{
    
    public function __construct(&$vars) {
        $vars['title'] = "Santa Casa da Misericórdia de Leiria";
        $vars['keywords'] = "";
        $vars['description'] = "";
        $vars['firstnavbar'] = 2;
        $vars['secondnavbar'] = 0;
    }
    
    public function get_view(&$vars){
        return VIEW_DIR.'cuidados/cuidados.php';
    }
}

