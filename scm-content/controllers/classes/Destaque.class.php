<?php

class Destaque{
    private $_id;
    private $titulo;
    private $img_link;
    
    public __construct($_id, $titulo, $img_link){
        $this->$_id = $_id;
        $this->$titulo = $titulo;
        $this->$img_link = $img_link;
    }
    
    
    
}