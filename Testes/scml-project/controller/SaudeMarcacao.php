<?php

class controller_SaudeMarcacao {

    public function __construct(&$vars) {
        $vars['title'] = "Santa Casa da Misericórdia de Leiria";
        $vars['keywords'] = "";
        $vars['description'] = "";
        $vars['firstnavbar'] = 1;
        $vars['secondnavbar'] = 3;
    }

    public function prepare_vars(&$vars) {
        if (isset($_GET) && count($_GET)) {
            $vars['area'] =  $_GET['area'];
        }else{
            $vars['area']=0;
        }
        $db = new model_DB();
        if ($db->connected) {
            $result = $db->conn->query("SELECT * FROM clinical_specialty ORDER BY short_name");
            $especialidade = array();
            while ($r = mysqli_fetch_array($result)) {
                $especialidade[$r['id']] = $r;
            }
            $vars['especialidade'] = $especialidade;
            
            
            $result = $db->conn->query("SELECT * FROM health_insurer ORDER BY short_name");
            $seguradora = array();
            while ($r = mysqli_fetch_array($result)) {
                $seguradora[$r['id']] = $r;
            }
            $vars['seguradora'] = $seguradora;
        }
    }

    public function get_view(&$vars) {
        return VIEW_DIR . 'saude/saude_marcacao.php';
    }

}
