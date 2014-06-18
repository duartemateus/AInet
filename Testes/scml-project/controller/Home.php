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
        
        $query= "SELECT * FROM publication WHERE type != 0";
        $result = $db->conn->query($query);
        $news = array();
        while($r = mysqli_fetch_array($result)){
            $news[$r['id']] = $r;
        }
        $vars['news'] = $news;
        
        
        $query = "SELECT * FROM publication WHERE type = 0";
        $result = $db->conn->query($query);
        $publications = array();
        while($r = mysqli_fetch_array($result)){
            $publications[$r['id']] = $r;
        }
        $vars['publications'] = $publications;
        return VIEW_DIR.'home/home.php';
    }
}
