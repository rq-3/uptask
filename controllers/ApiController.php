<?php

namespace Controllers;

use Model\Edicion;
use Model\Estados;
use Model\NuevaOrden;
use Model\Ordenes;

class ApiController {
    public static function dato_servicios(){
        $orden = new NuevaOrden($_POST);
   
        $resultado = $orden->guardar();

        echo json_encode($resultado);

       
    }

    public static function estados_servicios(){
        if($_SERVER['REQUEST_METHOD'] === 'POST'){
    
            $proyecto = Estados::what('folio', $_POST['folio'], 'servicio', $_POST['servicio']);
            
            $tarea = new Estados($_POST);

            if(!$proyecto){
                $tarea->guardar();
            } else if (($proyecto && $proyecto->servicio !== $tarea->servicio) && ($proyecto->folio !== $tarea->folio)){
                $tarea->guardar();
            } else if ($proyecto->servicio === $tarea->servicio && $proyecto->folio === $tarea->folio){
                $tarea->id = $proyecto->id;
                $tarea->guardar();
            }
           
        }
    }

    public static function edita_orden(){

       // $ord = NuevaOrden::what('folio', $_POST['folio'], 'servicio', $_POST['servicio']);
        $ord = NuevaOrden::where('id', $_POST['id']);
        $actualizado = new NuevaOrden($_POST);

       
                $actualizado->id = $ord->id;
                $actualizado->guardar();   
        
    }
    public static function edita_pay(){
        $edicion = new Edicion($_POST);
        $resultado = $edicion->guardar();

        echo json_encode($resultado);
        
    }
}

