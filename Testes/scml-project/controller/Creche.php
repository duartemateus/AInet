<?php

class controller_Creche{
    
    public function __construct(&$vars) {
        $vars['title'] = "Santa Casa da Misericórdia de Leiria";
        $vars['keywords'] = "";
        $vars['description'] = "";
        $vars['firstnavbar'] = 3;
        $vars['secondnavbar'] = 0;
    }
    
    public function get_view(&$vars){
        $db = new model_DB();
        $query= "SELECT * FROM publication WHERE type = 8";
        $result = $db->conn->query($query);
        $news = array();
        while($r = mysqli_fetch_array($result)){
            $news[$r['id']] = $r;
        }
        $vars['news'] = $news;
        
        return VIEW_DIR.'creche/creche.php';
    }
}

