<?php

namespace Model;

use Model\ActiveRecord;

class Clientes extends ActiveRecord{
    protected static $tabla = 'clientes';
    protected static $columnasDB = [
        'id',
        'nombre',
        'nombre_comercial',
        'email',
        'email2',
        'tel1',
        'tel2',
        'direccion',
        'ubicacion'
    ];

    public $id;
    public $nombre;
    public $nombre_comercial;
    public $email;
    public $email2;
    public $tel1;
    public $tel2;
    public $direccion;
    public $ubicacion;

    public function __construct($args = [])
    {
        $this->id = $args['id'] ?? null;   
        $this->nombre = $args['nombre'] ?? '';   
        $this->nombre_comercial = $args['nombre_comercial'] ?? ''; 
        $this->email = $args['email'] ?? '';  
        $this->email2 = $args['email2'] ?? '';   
        $this->tel1 = $args['tel1'] ?? '';   
        $this->tel2 = $args['tel2'] ?? '';   
        $this->direccion = $args['direccion'] ?? '';   
        $this->ubicacion = $args['ubicacion'] ?? '';   
           
    }

    public function validarCliente(){
        if(!$this->nombre){
            self::$alertas['error'][] = 'El nombre del cliente es oblogatorio';
        }
        if(!$this->nombre_comercial){
            self::$alertas['error'][] = 'La Razon Social es oblogatorio';
        }
        if(!$this->email){
            self::$alertas['error'][] = 'Un email es oblogatorio';
        }
        if(!$this->tel1){
            self::$alertas['error'][] = 'Un telefono es oblogatorio';
        }
        if(!$this->direccion){
            self::$alertas['error'][] = 'La Dirección es oblogatorio';
        }
        if(!$this->ubicacion){
            self::$alertas['error'][] = 'La Ubicación es oblogatorio';
        }
        return self::$alertas;
    }

    public function validarActualizaCliente(){
        if(!$this->nombre){
            self::$alertas['error'][] = 'El nombre del cliente es oblogatorio';
        }
        if(!$this->nombre_comercial){
            self::$alertas['error'][] = 'La Razon Social es oblogatorio';
        }
        if(!$this->email){
            self::$alertas['error'][] = 'El email 1 es oblogatorio';
        }
        if(!$this->email2){
            self::$alertas['error'][] = 'El email 2 es oblogatorio';
        }
        if(!$this->tel1){
            self::$alertas['error'][] = 'El telefono de la empresa es oblogatorio';
        }
        if(!$this->tel2){
            self::$alertas['error'][] = 'El telefono de contacto es oblogatorio';
        }
        if(!$this->direccion){
            self::$alertas['error'][] = 'La Dirección es oblogatorio';
        }
        if(!$this->ubicacion){
            self::$alertas['error'][] = 'La Ubicación es oblogatorio';
        }
        return self::$alertas;
    }
        
}