<?php

class controller_SaudeAreas {

    public function __construct(&$vars) {
        $vars['title'] = "Santa Casa da Misericórdia de Leiria";
        $vars['keywords'] = "";
        $vars['description'] = "";
        $vars['firstnavbar'] = 1;
        $vars['secondnavbar'] = 1;
    }

    public function prepare_vars(&$vars) {
        if (isset($_GET) && count($_GET)) {
            $vars['area'] =  $_GET['area'];
        }
        $vars['my_area_clinica'] = "";
        $db = new model_DB();
        if ($db->connected) {
            $result = mysqli_query($db->conn, "SELECT * FROM clinical_specialty ORDER BY short_name");
            $areas_clinicas = array();
            while ($r = mysqli_fetch_array($result)) {
                $areas_clinicas[$r['id']] = $r;
            }
            $vars['areas_clinicas'] = $areas_clinicas;
            
            
            $result = mysqli_query($db->conn, "SELECT d.id, d.name AS doctor_name, d.profile, cs.short_name AS specialty_name, ds.availability,
                                      ds.clinical_specialty_id, p.name AS pser_nome_completo, p.mobile_phone, p.phone, su.photo_url, su.email, su.photo
                                      FROM doctor d, doctor_specialty ds, clinical_specialty cs, person p, scml_user su
                                      WHERE (d.id = ds.doctor_id AND cs.id = ds.clinical_specialty_id AND d.user_id = p.id AND p.id = su.id)");
            
            $informacao_doutor = array();
            $i = 0;
            while ($r = mysqli_fetch_array($result)) {
                $informacao_doutor[$i] = $r;
                $i = $i + 1;
            }
            $vars['informacao_doutor'] = $informacao_doutor;
        }
    }

    public function get_view(&$vars) {
        return VIEW_DIR . 'saude/saude_areas.php';
    }

}
