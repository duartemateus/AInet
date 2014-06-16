<?php

class controller_Home{
    
    public function get_view(&$vars){
        innit_view_vars(&$vars);
        $db = new models_DB();
        
        $query = "SELECT * FROM publication WHERE type != 1";
        $result = $db->select($query);
        $news = array();
        foreach ($result as $r){
            $news[$r->id] = $r;
        }
        $vars['news'] = $news;
        
        $query = "SELECT * FROM publication WHERE type = 1";
        $result = $db->select($query);
        $publications = array();
        foreach ($result as $r){
           $publications[$r->id] = $r;
        }
        $vars['publications'] = $publications;
        return VIEWS_DIR.'home/home.php';
    }
    
    private function innit_view_vars(&$vars){
        $vars = array();
        $vars['title'] = "Santa Casa da Misericórdia de Leiria";
        $vars['keywords'] = "";
        $vars['description'] = "";
        $vars['firstnavbar'] = 0;
        $vars['secondnavbar'] = 0;
    }
}
