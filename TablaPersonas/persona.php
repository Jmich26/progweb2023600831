<?php 
class Persona {
    private $nombre;
    private $fecNac;
    private $telefono;

    public function __construct($nombre, $fecNac, $telefono) { // Corregido el constructor
        $this->nombre = $nombre;
        $this->fecNac = $fecNac;
        $this->telefono = $telefono;
    }

    public function getNombre() {
        return $this->nombre;
    }
    public function setNombre($value) {
        $this->nombre = $value;
    }
    
    public function getFecNac() {
        return $this->fecNac;
    }
    public function setFecNac($value) {
        $this->fecNac = $value;
    }

    public function getTelefono() {
        return $this->telefono;
    }
    public function setTelefono($value) {
        $this->telefono = $value;
    }
}

//El cierre de php no se incluye porque el
//  scrip debe ser incluido en otro