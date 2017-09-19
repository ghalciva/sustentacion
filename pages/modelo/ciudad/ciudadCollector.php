<?php

include_once('Ciudad.php');
include_once("../Collector.php");

class ciudadCollector extends Collector
{
  
//mostrar
  function showCiudades() {
    $rows = self::$db->getRows("SELECT * FROM ciudad");        
    $arrayciudad= array();        
    foreach ($rows as $c){
      $aux = new Ciudad($c{'idciudad'},$c{'nombre'});
      array_push($arrayciudad, $aux);
    }
    return $arrayciudad;        
  }
  
//eliminar 
  function deleteCiudad($idciudad) {
    $rows = self::$db->deleteRow("DELETE FROM ciudad WHERE idciudad= ? ", array("{$idciudad}"));        
  }   

//insertar 
  function createCiudad($nombre) {
    $rows = self::$db->insertRow("INSERT INTO ciudad (nombre) VALUES (?) ", array("{$nombre}"));        
  } 
    
//actualizar
  function updateCiudad($idciudad,$nombre) {
    $rows = self::$db->insertRow("UPDATE ciudad SET nombre= ? WHERE idciudad= ? ", array("{$nombre}",$idciudad));        
  }

}
?>
