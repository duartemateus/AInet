<?php

class controller_Home{
    
    public function __construct(&$vars) {
        $vars['title'] = "Santa Casa da Misericórdia de Leiria";
        $vars['keywords'] = "";
        $vars['description'] = "";
        $vars['firstnavbar'] = 0;
        $vars['secondnavbar'] = 0;
    }


    
    public function get_view(&$vars){
        $db = new model_DB();
        
        $query = "SELECT * FROM publication WHERE type != 1";
        $query = $db->conn->query($query);
        $vars['news'] = $query;
        
        
        $query = "SELECT * FROM publication WHERE type = 1";
        $query = $db->conn->query($query);
        $vars['publications'] = $query;
        return VIEW_DIR.'home/home.php';
    }
}
