<?php




function buscarflujoproceso($flujo, $proceso){
   $bpmflujoproceso = simplexml_load_file("XML/flujo.xml");
   $flujoproceso=null;
   foreach($bpmflujoproceso->flujoproceso as $f) {
         if($f->flujo==$flujo && $f->proceso==$proceso){
               $flujoproceso=$f;
               break;
         }
      }
   return $flujoproceso;
}

function buscarporprocesosig($flujo, $procesosig){
   $bpmflujoproceso = simplexml_load_file("XML/flujo.xml");
   $flujoproceso=null;
   foreach($bpmflujoproceso->flujoproceso as $f) {
         if($f->flujo==$flujo && $f->procesosiguiente==$procesosig){
               $flujoproceso=$f;
               break;
         }
      }
   return $flujoproceso;
}

function buscarflujocondicionante($flujo, $proceso){
   $bpmflujoproceso = simplexml_load_file("XML/flujocond.xml");
   $flujoproceso=null;
   foreach($bpmflujoproceso->flujocondicionante as $f) {

         if($f->flujo==$flujo && $f->proceso==$proceso){
               $flujoproceso=$f;
               break;
         }
      }
   return $flujoproceso;
}

function buscarusuario($usuario){
   $bpmflujousuarios = simplexml_load_file("xml/usuarios.xml");
   $flujoproceso=null;
   foreach($bpmflujousuarios->usuario as $f) {
         if(strcasecmp($f->nombreusuario,$usuario)==0){
               $flujoproceso=$f;
               break;
         }
      }
   return $flujoproceso;
}

function buscarusuarioycontraseña($usuario,$contraseña){
   $bpmflujousuarios = simplexml_load_file("XML/usuarios.xml");
   $flujoproceso=null;
   foreach($bpmflujousuarios->usuario as $f) {
         if(strcasecmp($f->nombreusuario,$usuario)==0 && $f->contraseña==$contraseña){
               $flujoproceso=$f;
               break;
         }
      }
   return $flujoproceso;
}
//$busqueda=buscarflujoproceso("F1","P2");

//print_r($busqueda);


?>