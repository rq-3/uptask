<?php
namespace Model;

class Usuario extends ActiveRecord{
    protected static $tabla = 'usuarios';
    protected static $columnasDB = [
        'id',
        'nombre',
        'email',
        'password',
        'token',
        'confirmado',
        'type',
        'tus',
        'estado'
    ];

    public $id;
    public $nombre;
    public $email;
    public $password;
    public $password2;
    public $password_actual;
    public $password_nuevo;
    public $token;
    public $confirmado;
    public $type;
    public $tus;
    public $estado;

    public function __construct($args = [])
    {
        $this->id = $args['id'] ?? null;
        $this->nombre = $args['nombre'] ?? '';
        $this->email = $args['email'] ?? '';
        $this->password = $args['password'] ?? '';
        $this->password2 = $args['password2'] ?? '';
        $this->password_actual = $args['password_actual'] ?? '';
        $this->password_nuevo = $args['password_nuevo'] ?? '';
        $this->token = $args['token'] ?? '';
        $this->confirmado = $args['confirmado'] ?? '';
        $this->type = $args['type'] ?? '';
        $this->tus = $args['tus'] ?? '';
        $this->estado = $args['estado'] ?? '';
    }

    //Calidacion de cuentas nuevas
    public function validarNuevaCuenta() {
        if(!$this->nombre){
            self::$alertas['error'][] = 'El nombre del usuario es obligatorio';
        }
        if(!$this->email){
            self::$alertas['error'][] = 'El email del usuario es obligatorio';
        }
        if(!$this->password){
            self::$alertas['error'][] = 'El password no debe ir vacio';
        }
        if(strlen($this->email) < 6){
            self::$alertas['error'][] = 'El password debe tener almenos 6 caracteres';
        }
        if($this->password !== $this->password2){
            self::$alertas['error'][] = 'Los passwords son diferentes';
        }
        if(!$this->type){
            self::$alertas['error'][] = 'El tipo de cuenta es obligatorio';
        }
        return self::$alertas;
    }

    public function validarLogin(){
        if(!$this->email){
            self::$alertas['error'][] = 'El email del usuario es obligatorio';
        }
        if(!filter_var($this->email, FILTER_VALIDATE_EMAIL)){
            self::$alertas['error'][] = 'El email no es valido';
        }
        if(!$this->password){
            self::$alertas['error'][] = 'El password no debe ir vacio';
        }
        return self::$alertas;
    }

    public function validarUsr(){
        if(!$this->nombre){
            self::$alertas['error'][] = 'El nombre del usuario es obligatorio';
        }
        if(!filter_var($this->email, FILTER_VALIDATE_EMAIL)){
            self::$alertas['error'][] = 'El email no es valido';
        }
        if(!$this->type && $this->type == 0){
            self::$alertas['error'][] = 'El Tipo no debe ir vacio';
        }
        if(!$this->password){
            self::$alertas['error'][] = 'Debes Crear un Password';
        }
        return self::$alertas;
    }

    public function validarEmail(){
        if(!$this->email){
            self::$alertas['error'][] = 'El email del usuario es obligatorio';
        }
        if(!filter_var($this->email, FILTER_VALIDATE_EMAIL)){
            self::$alertas['error'][] = 'El email no es valido';
        }
        return self::$alertas;
    }

    public function validarPassword(){
        if(!$this->password){
            self::$alertas['error'][] = 'El password no debe ir vacio';
        }
        if(strlen($this->email) < 6){
            self::$alertas['error'][] = 'El password debe tener almenos 6 caracteres';
        }

        return self::$alertas;
    }

    public function validar_perfil(){
        if(!$this->nombre){
            self::$alertas['error'][] = 'El nombre es Obligatorio';
        }
        if(!$this->email){
            self::$alertas['error'][] = 'El email es Obligatorio';
        }
        return self::$alertas;
    }

    //Compobar el password
    public function comprobar_password() : bool{
        
        return password_verify($this->password_actual, $this->password);
    }

    // Hashea Password
    public function hashPassword() : void {
        $this->password = password_hash($this->password, PASSWORD_BCRYPT);
    }


     public function nuevo_password() : array {
        if(!$this->password_actual){
            self::$alertas['error'][] = 'El password es Obligatorio';
        }
        if(!$this->password_nuevo){
            self::$alertas['error'][] = 'El password Nuevo es Obligatorio';
        }
        if(strlen($this->password_nuevo) < 6){
            self::$alertas['error'][] = 'El password debe tener almenos 6 caracteres';
        }
        return self::$alertas;
    }
    /// Generar Token

    public function crearToken() : void{
        $this->token = uniqid();
    }
   

   
}