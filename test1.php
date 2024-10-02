<?php
class Animal{
    private $nombre;
    private $edad;

public function __construct($nombre, $edad){
    $this->nombre = $nombre;
    $this->edad = $edad;
}

public function setNombre($nombre){
    $this->nombre = $nombre;
}

public function getNombre(){
   return $this->nombre;
}

public function setEdad($edad){
    $this->nombre = $nombre;
}

public function getEdad(){
    $this->edad;
}

public function toString(){
    return "soy un animal" .$this->$nombre;
}

}

class Perro extends animal{
    public function __construct($nombre,$edad){
        parent::__construct($nombre,$edad);
    }

    public function getEdad(){
        return parent::getEdad() * 7 ;
    }

    public function toString(){
      return "soy un perro " .parent::getnombre();
    }

}

$miperro = new perro (" grandbull ", 4);

print($miperro->getNombre());
echo "<br>";
print($miperro->getEdad());
echo "<br>";
print($miperro->toString());

?>