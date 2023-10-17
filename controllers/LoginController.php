<?php

namespace Controllers;

use Classes\Email;
use Model\Usuario;
use MVC\Router;

class LoginController{

    public static function login(Router $router){
        $alertas = [];

        if($_SERVER['REQUEST_METHOD'] === 'POST'){
            $usuario = new Usuario($_POST);

            $alertas = $usuario->validarLogin();

            if(empty($alertas)){
                // Verificar que existe el usuario
                $usuario = Usuario::where('email', $usuario->email);

                if(!$usuario || !$usuario->confirmado){
                    Usuario::setAlerta('error', 'El usuario no existe');
                }else{
                    // Si el usuario existe
                    if(password_verify($_POST['password'], $usuario->password)){
                        // Iniciar la sesion
                        session_start();
                        $_SESSION['id'] = $usuario->id;
                        $_SESSION['nombre'] = $usuario->nombre;
                        $_SESSION['email'] = $usuario->email;
                        $_SESSION['type'] = $usuario->type;
                        $_SESSION['login'] = true;

                        // Redireccionar

                        if($_SESSION['type'] == "1"){
                            header('Location: /dashboard');
                        }
                        if($_SESSION['type'] == "2"){
                            header('Location: /dashboard');
                            $usuario->estado = "1";
                            $usuario->guardar();                      
                          }
                        if($_SESSION['type'] == "3"){
                            header('Location: /dashboard');
                            $usuario->estado = "1";
                            $usuario->guardar();                      
                          }


                        
                    }else{
                        Usuario::setAlerta('error', 'Password incorrecto');
                    }
                }
            }
        }

        $alertas = Usuario::getAlertas();

        // Render a la vista
        $router->render('auth/login', [
            'titulo' => 'Iniciar Sesión',
            'alertas' => $alertas
        ]);
    }

    public static function logout(){
        session_start();
        $usuario = Usuario::where('id', $_SESSION['id']);
        $usuario->estado = 0;
        $usuario->guardar();
        $_SESSION = [];
 
        header('Location: /');
    }

    public static function crear(Router $router){
        $alertas = [];
        $usuario = new Usuario;
        
        if($_SERVER['REQUEST_METHOD'] === 'POST'){
            $usuario->sincronizar($_POST);
            $alertas = $usuario->validarNuevaCuenta();

            if(empty($alertas)){
                $existeUsuario = Usuario::where('email', $usuario->email);

            if($existeUsuario){
                Usuario::setAlerta('error', 'El usuario ya esta registrado');
                $alertas = Usuario::getAlertas();
            }else{
                // Hashear password
                $usuario->hashPassword();

                unset($usuario->password2);

                // Generar Token
                $usuario->crearToken();

                // Crear nuevo usuario
                $resultado = $usuario->guardar();

                // Enviar Email
                $email = new Email($usuario->email, $usuario->nombre, $usuario->token);
                $email->enviarConfirmacion();

                if($resultado){
                    header('Location: /mensaje');
                }
            }
            }
        }

        $router->render('auth/crear', [
            'titulo' => 'Crear cuenta nueva',
            'usuario' => $usuario,
            'alertas' => $alertas
        ]);

    }
    public static function olvide(Router $router){
        $alertas = [];

        
        if($_SERVER['REQUEST_METHOD'] === 'POST'){
            $usuario = new Usuario($_POST);
            $alertas = $usuario->validarEmail();

            if(empty($alertas)){
                 // Ecnontro al usuario
                $usuario = Usuario::where('email', $usuario->email);

                if($usuario && $usuario->confirmado){
                    // Generar nuevo token
                    $usuario->crearToken();

                    //Actualziar usuario
                    $usuario->guardar();

                    // Enviar Emnail
                    $email = new Email($usuario->email, $usuario->nombre, $usuario->token);
                    $email->enviarInstrucciones();

                    // Imprimir alerta
                    Usuario::setAlerta('exito', 'Hemos enviado las instrucciones a tu email');
                }else{
                    // No encontro al usuario
                    Usuario::setAlerta('error', 'Usuario no Valido');
                }
            }
        }

        $alertas = Usuario::getAlertas();

        $router->render('auth/olvide', [
            'titulo' => 'Recuperar la contraseña',
            'alertas' => $alertas
        ]);
    }
    public static function restablecer(Router $router){

        $token = s($_GET['token']);
        $mostrar = true;

        if(!$token) header('Location: /');

        // Identificar usuario con elñ token
        $usuario = Usuario::where('token', $token);

        if(empty($usuario)){
            Usuario::setAlerta('error', 'Token no valido');
            $mostrar = false;
        }

        if($_SERVER['REQUEST_METHOD'] === 'POST'){

            // Añadir el nuevo password
            $usuario->sincronizar($_POST);

            // Validar el password
            $alertas = $usuario->validarPassword();

            if(empty($alertas)){
                // Hashear Password nuevo
                $usuario->hashPassword();

                // Eliminar el Token
                $usuario->token = null;

                // Guardar el usaurui en la BD
                $resultado = $usuario->guardar();

                // Redireccionar
                if($resultado){
                    header('Location: /');
                }

            }
        }
        $alertas = Usuario::getAlertas();
        $router->render('auth/restablecer', [
            'titulo' => 'Cuenta Creada Exitosamente',
            'alertas' => $alertas,
            'mostrar' => $mostrar
        ]);
    }

    public static function mensaje(Router $router){
        $router->render('auth/mensaje', [
            'titulo' => 'Restablecer Password'
        ]);
    }
    public static function confirmar(Router $router){

        $token = s($_GET['token']);
        if(!$token){
            header('Location: /');
        }
        // Ecnotrar al usuario 
        $usuario = Usuario::where('token', $token);
        if(empty($usuario)){
            // no se encontro al usuario con ese token
            Usuario::setAlerta('error', 'Token no Valido');
        }else{
            // Confirmar la cuenta
            $usuario->confirmado = 1;
            $usuario->token = null;
            unset($usuario->password2);

            // Gaurdar en la BD
            $usuario->guardar();

            Usuario::setAlerta('exito', 'Cuenta verificada correctamente');
        }

        $alertas = Usuario::getAlertas();

        $router->render('auth/confirmar', [
            'titulo' => 'Confirma tu Cuenta',
            'alertas' => $alertas
        ]);
    }
}