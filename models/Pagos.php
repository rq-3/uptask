<?php

namespace Model;

use Model\ActiveRecord;

class Pagos extends ActiveRecord{
    protected static $tabla = 'pagos';
    protected static $columnasDB = [
        'id',
        'empresa',
        'orden',
        'monto',
        'anticipo',
        'fecha',
        'factura',
        'estado',
        'nivel',
        'obs'
    ];

    public $id;
    public $empresa;
    public $orden;
    public $monto;
    public $anticipo;
    public $fecha;
    public $factura;
    public $estado;
    public $nivel;
    public $obs;

    public function __construct($args = [])
    {
        $this->id = $args['id'] ?? null;   
        $this->empresa = $args['empresa'] ?? '';   
        $this->orden = $args['orden'] ?? ''; 
        $this->monto = $args['monto'] ?? ''; 
        $this->anticipo = $args['anticipo'] ?? ''; 
        $this->fecha = $args['fecha'] ?? '';  
        $this->factura = $args['factura'] ?? '';  
        $this->estado = $args['estado'] ?? '';   
        $this->nivel = $args['nivel'] ?? '';   
        $this->obs = $args['obs'] ?? '';   
           
    }

    public function validarPago(){
        if(!$this->fecha){
            self::$alertas['error'][] = 'El fecha de elaboracion es oblogatorio';
        }
        if(!$this->anticipo){
            self::$alertas['error'][] = 'Debes seleccionar una opción';
        }
        if(!$this->factura){
            self::$alertas['error'][] = 'Debes seleccionar una opción';
        }
        if(!$this->estado){
            self::$alertas['error'][] = 'Debe seleccionar un estado';
        }
      
        return self::$alertas;
    }
        
}