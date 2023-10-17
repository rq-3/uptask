<?php

namespace Model;

use Model\ActiveRecord;

class Estados extends ActiveRecord{
    protected static $tabla = 'estados';
    protected static $columnasDB = [
        'id',
        'folio',
        'servicio',
        'estado',
        'state',
    ];

    public $id;
    public $folio;
    public $servicio;
    public $estado;
    public $state;


    public function __construct($args = [])
    {
        $this->id = $args['id'] ?? null;   
        $this->folio = $args['folio'] ?? ''; 
        $this->servicio = $args['servicio'] ?? '';
        $this->estado = $args['estado'] ?? '';      
        $this->state = $args['state'] ?? '';   

       
           
    }
        
}