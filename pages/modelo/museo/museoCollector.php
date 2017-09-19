<?php

include_once('Museo.php');
include_once("../Collector.php");

class museoCollector extends Collector
{
  
//mostrar
  function showMuseos() {
    $rows = self::$db->getRows("SELECT * FROM museo");        
    $arrayciudad= array();        
    foreach ($rows as $c){
      $aux = new Museo($c{'idmuseo'},$c{'nombre'},$c{'idciudadfk'});
      array_push($arrayciudad, $aux);
    }
    return $arrayciudad;        
  }
  
//eliminar 
  function deleteMuseo($idmuseo) {
    $rows = self::$db->deleteRow("DELETE FROM museo WHERE idmuseo= ? ", array("{$idmuseo}"));        
  }   

//insertar 
  function createMuseo($nombre,$idciudadfk) {
    $rows = self::$db->insertRow("INSERT INTO museo (nombre, idciudadfk) VALUES (?,?) ", array("{$nombre}","{$idciudadfk}"));        
  } 
    
//actualizar
  function updateMuseo($idmuseo,$nombre,$idciudadfk) {
    $rows = self::$db->insertRow("UPDATE museo SET nombre= ? idciudadfk=? WHERE idmuseo= ? ", array("{$nombre}","{$idciudadfk}",$idmuseo));        
  }

}
?>
