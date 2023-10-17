<?php

namespace Model;

use Model\ActiveRecord;

class NuevaOrden extends ActiveRecord{
    protected static $tabla = 'nuevaorden';
    protected static $columnasDB = [
        'id',
        'servicio',
        'estado',
        'folio',
        'datos1',
        'datos2',
        'datos3',
        'datos4',
        'datos5',
        'datos6',
        'datos7',
        'datos8',
    ];

    public $id;
    public $servicio;
    public $estado;
    public $folio;
    public $datos1;
    public $datos2;
    public $datos3;
    public $datos4;
    public $datos5;
    public $datos6;
    public $datos7;
    public $datos8;

    public function __construct($args = [])
    {
        $this->id = $args['id'] ?? null;   
        $this->servicio = $args['servicio'] ?? '';
        $this->estado = $args['estado'] ?? '';      
        $this->folio = $args['folio'] ?? '';     
        $this->datos1 = $args['datos1'] ?? ''; 
        $this->datos2 = $args['datos2'] ?? '';  
        $this->datos3 = $args['datos3'] ?? '';  
        $this->datos4 = $args['datos4'] ?? '';  
        $this->datos5 = $args['datos5'] ?? '';  
        $this->datos6 = $args['datos6'] ?? '';  
        $this->datos7 = $args['datos7'] ?? '';  
        $this->datos8 = $args['datos8'] ?? '';  
       
           
    }
        
}