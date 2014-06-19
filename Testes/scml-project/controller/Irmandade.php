<?php

class controller_Irmandade{
    
    public function __construct(&$vars) {
        $vars['title'] = "Santa Casa da Misericórdia de Leiria";
        $vars['keywords'] = "";
        $vars['description'] = "";
        $vars['firstnavbar'] = 4;
        $vars['secondnavbar'] = 0;
    }
    
    public function get_view(&$vars){
        $db = new model_DB();
        $query= "SELECT * FROM publication WHERE type = 9";
        $result = $db->conn->query($query);
        $news = array();
        while($r = mysqli_fetch_array($result)){
            $news[$r['id']] = $r;
        }
        $vars['news'] = $news;
        
        $news_types = array();
        $news_types['1'] = 'Hospital D. Manuel de Aguiar';
        $news_types['2'] = 'Residencial XXI';
        $news_types['3'] = 'Lar Nossa Senhora da Encarnação';
        $news_types['4'] = 'Apoio Domiciliário';
        $news_types['8'] = 'Creche Casa Sanches';
        $news_types['9'] = 'Irmandade';
        $vars['news_types'] = $news_types;
        return VIEW_DIR.'irmandade/irmandade.php';
    }
}

