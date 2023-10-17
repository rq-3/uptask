<?php

namespace Model;

use Model\ActiveRecord;

class Ordenes extends ActiveRecord{
    protected static $tabla = 'ordenes';
    protected static $columnasDB = [
        'id',
        'folio',
        'empresa',
        'fecha',
        'creador',
        'estado'
    ];

    public $id;
    public $folio;
    public $empresa;
    public $creador;
    public $fecha;
    public $estado;

    public function __construct($args = [])
    {
        $this->id = $args['id'] ?? null;   
        $this->folio = $args['folio'] ?? '';   
        $this->empresa = $args['empresa'] ?? ''; 
        $this->creador = $args['creador'] ?? '';  
        $this->fecha = $args['fecha'] ?? '';  
        $this->estado = $args['estado'] ?? '';   
           
    }

        
}