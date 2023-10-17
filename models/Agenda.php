<?php

namespace Model;

use Model\ActiveRecord;

class Agenda extends ActiveRecord{
    protected static $tabla = 'agenda';
    protected static $columnasDB = [
        'id',
        'evento',
        'nombre',
        'creador',
        'fecha1',
        'fecha2',
        'hora1',
        'hora2',
        'obs',
        'estado'
    ];

    public $id;
    public $evento;
    public $nombre;
    public $creador;
    public $fecha1;
    public $fecha2;
    public $hora1;
    public $hora2;
    public $obs;
    public $estado;


    public function __construct($args = [])
    {
        $this->id = $args['id'] ?? null;   
        $this->evento = $args['evento'] ?? ''; 
        $this->nombre = $args['nombre'] ?? '';
        $this->creador = $args['creador'] ?? '';      
        $this->fecha1 = $args['fecha1'] ?? '';   
        $this->fecha2 = $args['fecha2'] ?? '';   
        $this->hora1 = $args['hora1'] ?? '';   
        $this->hora2 = $args['hora2'] ?? '';   
        $this->obs = $args['obs'] ?? '';   
        $this->estado = $args['estado'] ?? '1';   
    }

    public function validarAgenda(){

        if(!$this->evento){
            self::$alertas['error'][] = 'El Tipo es oblogatorio';
        }
        if(!$this->nombre){
            self::$alertas['error'][] = 'El nombre es oblogatorio';
        }
        if(!$this->fecha1){
            self::$alertas['error'][] = 'La fecha es oblogatorio';
        }
        if(!$this->hora1){
            self::$alertas['error'][] = 'la Hora de inicio es oblogatorio';
        }
        if(!$this->hora2){
            self::$alertas['error'][] = 'La Hora de termino es oblogatorio';
        }
        return self::$alertas;
    }
        
}