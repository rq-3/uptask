<?php

namespace Model;

use Model\ActiveRecord;

class Edicion extends ActiveRecord{
    protected static $tabla = 'ediciones';
    protected static $columnasDB = [
        'id',
        'editor',
        'edita',
        'folio',
        'fecha',
        'hora',
        'estado',
    ];

    public $id;
    public $editor;
    public $edita;
    public $folio;
    public $fecha;
    public $hora;
    public $estado;


    public function __construct($args = [])
    {
        $this->id = $args['id'] ?? null;   
        $this->editor = $args['editor'] ?? ''; 
        $this->folio = $args['folio'] ?? '';
        $this->edita = $args['edita'] ?? '';
        $this->fecha = $args['fecha'] ?? '';      
        $this->hora = $args['hora'] ?? '';      
        $this->estado = $args['estado'] ?? '';   

       
           
    }
        
}