<?php

class controller_SaudeDoutor {

    public function __construct(&$vars) {
        $vars['title'] = "Santa Casa da Misericórdia de Leiria";
        $vars['keywords'] = "";
        $vars['description'] = "";
        $vars['firstnavbar'] = 1;
        $vars['secondnavbar'] = 0;
    }

    public function prepare_vars(&$vars) {
        $db = new model_DB();
        if ($db->connected) {
            $result = mysqli_query($db->conn, "SELECT * FROM clinical_specialty ORDER BY short_name");
            $areas_clinicas = array();
            while ($r = mysqli_fetch_array($result)) {
                $areas_clinicas[$r['id']] = $r;
            }
            $vars['areas_clinicas'] = $areas_clinicas;
            
            $query = "SELECT d.id, d.name AS doctor_name, d.research, d.profile, cs.short_name AS specialty_name, ds.availability, ds.clinical_specialty_id, p.name AS pser_nome_completo, p.mobile_phone, p.phone, su.photo_url, su.email, su.photo
                        FROM doctor d, doctor_specialty ds, clinical_specialty cs, person p, scml_user su
                        WHERE (d.id = ds.doctor_id AND cs.id = ds.clinical_specialty_id AND d.user_id = p.id AND p.id = su.id)
                        ORDER BY doctor_name";
            $result = mysqli_query($db->conn, $query);
            $informacao_doutor = array();
            while ($r = mysqli_fetch_array($result)) {
                if (isset($informacao_doutor[$r['id']])) {
                    $informacao_doutor[$r['id']]['specialty_name'] = trim($informacao_doutor[$r['id']]['specialty_name'] . ", " . $r['specialty_name']);
                    $informacao_doutor[$r['id']]['availability'] = trim($informacao_doutor[$r['id']]['availability'] . ":" . $r['availability']);
                } else {
                    $informacao_doutor[$r['id']] = $r;
                }
            }
            $vars['informacao_doutor'] = $informacao_doutor;
        }
        $vars['id_doutor'] = $_GET['id'];
    }

    public function get_view(&$vars) {
        return VIEW_DIR . 'saude/saude_doutor.php';
    }

}
