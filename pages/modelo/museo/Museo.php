<?php

class Museo
{
    private $idmuseo;
    private $nombre;
    private $idciudadfk;
    
     function __construct($idmuseo, $nombre, $idciudadfk) {
       $this->idmuseo = $idmuseo;
       $this->nombre = $nombre;
       $this->idciudadfk = $idciudadfk;
     }
    
     function setIdmuseo($idmuseo){
       $this->idmuseo = $idmuseo;
     } 
     function getIdmuseo(){
       return $this->idmuseo;
     } 
     function setNombre($nombre){
       $this->nombre = $nombre;
     } 
     function getNombre(){
       return $this->nombre;
     }
     function setIdciudadfk($idciudadfk){
       $this->idciudadfk = $idciudadfk;
     } 
     function getIdciudadfk(){
       return $this->idciudadfk;
     } 
}

?> 
