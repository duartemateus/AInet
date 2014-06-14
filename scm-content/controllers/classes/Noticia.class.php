<?php

class Noticia{
    private $_id;
    private $titulo;
    private $resumo;
    private $corpo;
    private $autor_id;
    
    public __construct($_id, $titulo, $resumo, $corpo, $autor_id){
        $this->$_id = $_id;
        $this->$titulo = $titulo;
        $this->$resumo = $resumo;
        $this->$corpo = $corpo;
        $this->$autor_id = $autor_id;
    }
    
    
    
}