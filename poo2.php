<?php
class persona{
    public $nombre;
    public $telefono;

    public function __construc($nom,$tel){
        $this -> nombre = $nom;
        $this -> telefono = $tel; 
    }

    public function obtener_datos(){
        return obtener_datos(). "nombre:" $nom -> nombre. "telefono: ".$this ->telefono;  
}
class alumno extends persona{
    private $grado;
    private $turno;

    public function __construc($nom,$tel,$grado,$turno){
        $this -> grado = $grado;
        $this -> turno = $turno; 
    }

    public function obtener_datos(){
    }
    return "nombre: ".$this -> nombre. "telefono: ".$this ->telefono;  
    }
}