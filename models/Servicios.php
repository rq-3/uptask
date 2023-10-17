<?php

namespace Model;

use Model\ActiveRecord;

class Ordenes extends ActiveRecord{
    protected static $tabla = 'servicios';
    protected static $columnasDB = [
        'id',
        'folioId',
        ''
    ];

    public $id;
    public $folio;
    public $empresa;
    public $fecha;
    public $estado;

    public function __construct($args = [])
    {
        $this->id = $args['id'] ?? null;   
        $this->folio = $args['folio'] ?? '';   
        $this->empresa = $args['empresa'] ?? ''; 
        $this->fecha = $args['fecha'] ?? '';  
        $this->estado = $args['estado'] ?? '';   
           
    }
        
}