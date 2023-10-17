<?php

namespace Controllers;

use Model\Agenda;
use Model\Clientes;
use Model\Edicion;
use Model\Estados;
use Model\NuevaOrden;
use Model\Ordenes;
use Model\Pagos;
use Model\Proyecto;
use Model\Usuario;
use MVC\Router;

class DashboardController{

    public static function index(Router $router) {

        session_start();

        isAuth();

        $id = $_SESSION['id'];
        $tipo = $_SESSION['type'];

        $agenda = Agenda::belongsTo('estado', "1");
        $ordenes = Ordenes::belongsTo('estado', "1");
        $estados = Estados::belongsToOrder('estado', "Pendiente");
        $ediciones = [];

        if($_SESSION['type'] == "1"){
           $ediciones = Edicion::belongsToClient('estado', "0"); 

        }
        
        


        $router->render('dashboard/index', [
            'titulo' => 'Inicio',
            'type' => $tipo,
            'agenda' => $agenda,
            'ordenes' => $ordenes,
            'ediciones' => $ediciones,
            'estados' => $estados
        ]);
    }

    
    public static function clientes(Router $router){

        session_start();

        isAuth();

        $alertas = [];

        $id = $_SESSION['id'];

        $clientes = Clientes::belongsToClient('estado', "0");

        if($_SERVER['REQUEST_METHOD'] === 'POST'){

            $borrado = new Clientes($_POST);
            $resultado = $borrado->eliminar();

            Clientes::setAlerta('exito', 'Eliminado Correctamente');
            $alertas = $borrado->getAlertas();
            

            
        }



        $router->render('dashboard/clientes', [
            'alertas' => $alertas,
            'titulo' => 'Clientes',
            'clientes' => $clientes
        ]);
    }

    public static function ver_cliente(Router $router){
        session_start();

        isAuth();

        $cliente = $_GET['id'];

        $datos = Clientes::where('id', $cliente);

        $router->render('dashboard/ver-cliente', [
            'titulo' =>  $datos->nombre,
            'cliente' => $datos
        ]);
    }

    public static function editar_cliente(Router $router){
        session_start();

        isAuth();

        $alertas = [];
      
        if($_SERVER['REQUEST_METHOD'] === 'GET'){
            $id = $_GET['id'];
            
        }

                    

        if($_SERVER['REQUEST_METHOD'] === 'POST'){
            $id = $_POST['id'];

            $cliente = new Clientes($_POST);
            $alertas = $cliente->validarActualizaCliente();


            if(empty($alertas)){
               
                Clientes::setAlerta('exito', 'Cliente Actualizado Correctamente');
 
                $alertas = $cliente->getAlertas();

                $cliente->guardar();

                //header('Location: /clientes');
            }

            
        }
        
        $clientes = Clientes::where('id', $id);
        $router->render('dashboard/editar-cliente', [
            'alertas' => $alertas,
            'titulo' => 'Editar Informacion del Cliente',
            'cliente' => $clientes
        ]);
    }


    public static function nuevo_cliente(Router $router){
        session_start();

        isAuth();

        $alertas = [];


        if($_SERVER['REQUEST_METHOD'] === 'POST'){

            $cliente = new Clientes($_POST);

            $alertas = $cliente->validarCliente();

            if(empty($alertas)){
                $cliente->guardar();
                header('Location: /clientes');
                
            }
        }

        $cliente = new Clientes($_POST);
        
        $router->render('dashboard/nuevo-cliente', [
            'alertas' => $alertas,
            'titulo' => 'Nuevo Cliente',
            'c' => $cliente
        ]);

    }


    public static function ordenes(Router $router){
        session_start();

        isAuth();

        $alertas = [];
        $ordenes = Ordenes::belongsToOrder('estado', "1");
        $status = [];
        



        if($_SERVER['REQUEST_METHOD'] === 'POST'){
            $status = Estados::what('folio', $_POST['folio'],'estado', $_POST['state']);

            $borrado = new Ordenes($_POST);
            $borrado2 = new Estados($_POST);

            debuguear($borrado2);

            $borrado->guardar();
            $status->eliminaTodo();
            

            Clientes::setAlerta('exito', 'Eliminado Correctamente');
            $alertas = $borrado->getAlertas();
            
        }
        
        $router->render('dashboard/ordenes', [
            'alertas' => $alertas,
            'titulo' => 'Orden de trabajo',
            'ordenes' => $ordenes,
            'status' => $status
        ]);
    }

    public static function nueva_orden(Router $router){
        session_start();

        isAuth();
        $alertas = [];
      
            $id = $_GET['id'];  
            $cliente = Clientes::where('id', $id);
        
        $folio = Ordenes::lastElement('estado', "1");
        $user = $_SESSION['nombre'];
 
        if($_SERVER['REQUEST_METHOD'] === 'POST'){
    
        $orden = new Ordenes($_POST);
         
         $orden->guardar(); 
      
         header('Location: /ordenes');

        }

        $router->render('dashboard/nueva-orden', [
            'alertas' => $alertas,
            'titulo' => 'Nueva orden de trabajo',
            'cliente' => $cliente,
            'conter' => $folio,
            'user' => $user
        ]);
    }

    public static function editar_orden(Router $router){
        session_start();
        isAuth();
        $alertas = [];
        $id = $_GET['orden'];
    

        if($_SERVER['REQUEST_METHOD'] === 'POST'){
            
            $edicion = new Edicion($_POST);
            NuevaOrden::setAlerta('exito', 'Actualziado Correctamente');
            $alertas = $edicion->getAlertas();

            $edicion->guardar();
            
        }

        $orden = NuevaOrden::belongsTo('folio', $id);
        $dates = Ordenes::where('folio', $id);
        $user = $_SESSION['nombre'];

        $router->render('dashboard/editar-orden', [
            'alertas' => $alertas,
            'titulo' => 'Editar orden de trabajo',
            'orden' => $orden,
            'editor' => $user,
            'datos' => $dates
        ]);
    }

    public static function orden(Router $router){
        session_start();
        isAuth();
        $alertas = [];

        $folio = $_GET['orden'];
        $orden = NuevaOrden::belongsTo('folio',$folio);
        $name = Ordenes::where('folio',$folio);
        $estado = Estados::what('folio', $folio, 'servicio', "1");
        $estado2 = Estados::what('folio', $folio,'servicio', "2");
        $estado3 = Estados::what('folio', $folio,'servicio',"3");
        $estado4 = Estados::what('folio', $folio,'servicio',"4");
        $estado5 = Estados::what('folio', $folio,'servicio',"5");
        $estado6 = Estados::what('folio', $folio,'servicio',"6");
        $estado7 = Estados::what('folio', $folio,'servicio',"7");
        $estado8 = Estados::what('folio', $folio,'servicio',"8");
        $estado9 = Estados::what('folio', $folio,'servicio',"9");
        $estado10 = Estados::what('folio', $folio,'servicio',"10");

        $router->render('dashboard/orden', [
            'alertas' => $alertas,
            'titulo' => 'Orden de Trabajo',
            'ord' => $orden,
            'folio' => $folio,
            'nombre' => $name,
            'estado' => $estado,
            'estado2' => $estado2,
            'estado3' => $estado3,
            'estado4' => $estado4,
            'estado5' => $estado5,
            'estado6' => $estado6,
            'estado7' => $estado7,
            'estado8' => $estado8,
            'estado9' => $estado9,
            'estado10' => $estado10
    
        ]);


    }

    public static function crear_proyecto(Router $router){

        session_start();

        isAuth();

        $alertas = [];

        if($_SERVER['REQUEST_METHOD'] === 'POST'){
            $proyecto = new Proyecto($_POST);

            // Validacion
            $alertas = $proyecto->validarProyecto();

            if(empty($alertas)){
                // Generar una URL unica   
                $hash = md5(uniqid());
                $proyecto->url = $hash;

                // Almacenar el creador del proyecto
                $proyecto->propietarioId = $_SESSION['id'];

                // Gaurdar el proyecto
                $proyecto->guardar();

                // Redireccionar
                header('Location: /proyecto?id=' . $proyecto->url);

            }
        }

        $router->render('dashboard/crear-proyecto', [
            'alertas' => $alertas,
            'titulo' => 'Crear Proyecto'
        ]);
    }

    public static function agenda(Router $router){

        session_start();
        isAuth();
        $alertas = [];

        $datos = Agenda::belongsToFecha1('estado', "1");

        if($_SERVER['REQUEST_METHOD'] === 'POST'){
       
        }

        $router->render('dashboard/agenda', [
            'titulo' => 'Agenda',
            'datos' => $datos
        ]);
    }

    public static function nuevo_evento(Router $router){
        session_start();
        $alertas = [];
        isAuth();
        $usr = $_SESSION['id'];
        $usuario = Usuario::where('id', $usr);

        if($_SERVER['REQUEST_METHOD'] === 'POST'){
            $agenda = new Agenda($_POST);
            $alertas = $agenda->validarAgenda();

            if(empty($alertas)){

                $agenda->guardar();
                header('Location: /agenda');
    
            }
        }

    

        $router->render('dashboard/agenda-agregar', [
            'alertas' => $alertas,
            'titulo' => 'Crear Evento',
            'usuario' => $usuario
      
        ]);
    }

    public static function editar_evento(Router $router){
        session_start();
        $alertas = [];
        isAuth();


        if($_SERVER['REQUEST_METHOD'] === 'POST'){
            $ev = new Agenda($_POST);
            $ev->guardar();
            Agenda::setAlerta('exito', 'Actualizado Correctamente');
            $alertas = $ev->getAlertas();
        }

        $url = $_GET['url'];
        $evento = Agenda::where('id', $url);

        $router->render('dashboard/editar-evento', [
            'alertas' => $alertas,
            'titulo' => 'Editar Evento',
            'evento' => $evento
      
        ]);
    }

    public static function agenda_evento(Router $router){
        session_start();
        $alertas = [];
        isAuth();

        $url = $_GET['url'];
        $evento = Agenda::where('id', $url);



        $router->render('dashboard/ver-evento', [
            'alertas' => $alertas,
            'titulo' => 'Informacion Evento',
            'evento' => $evento
      
        ]);
    }

    public static function pagos(Router $router){

        session_start();

        isAuth();
        $nivel = "0";
        $pagos = Pagos::belongsToClient('nivel', $nivel);
    

        $router->render('dashboard/pagos', [
            'titulo' => 'Pagos',
            'pagos' => $pagos
        ]);
    }

    public static function nuevo_pago(Router $router){
        session_start();
        isAuth();
        $alertas = [];

        $folio = $_GET['folio'];
        $cliente = Ordenes::where('folio', $folio);

        if($_SERVER['REQUEST_METHOD'] === 'POST'){
         
            $pago = new Pagos($_POST);
      
            $pago->guardar();

            header('Location: /pagos');
        }

        $router->render('dashboard/nuevo-pago', [
            'alertas' => $alertas,
            'titulo' => 'Registrar Pago nuevo',
            'cliente' => $cliente
        ]);
    }

    public static function ver_pago(Router $router){
        session_start();
        isAuth();

        $folio = $_GET['url'];
        $pagos = Pagos::where('orden', $folio);
        $contenido = NuevaOrden::belongsTo('folio', $folio);
       

        $router->render('dashboard/ver-pago', [
            'titulo' => 'Pago',
            'pago' => $pagos,
            'folio' => $folio,
            'contenido' => $contenido
        ]);


    }
    public static function editar_pay(Router $router){
        session_start();
        isAuth();
        $alertas = [];

        $folio = $_GET['url'];
   

        if($_SERVER['REQUEST_METHOD'] === 'POST'){
            $pagoEditado = new Pagos($_POST);
            
            Pagos::setAlerta('exito', 'Actualizado Correctamente');
            $alertas = $pagoEditado->getAlertas();
           $pagoEditado->guardar();
        }
        $pagos = Pagos::where('id', $folio);
        $contenido = NuevaOrden::belongsTo('folio', $folio);

        $router->render('dashboard/editar-pay', [
            'alertas' => $alertas,
            'titulo' => 'Pago',
            'pago' => $pagos,
            'folio' => $folio,
            'contenido' => $contenido
        ]);


    }

    public static function proyecto(Router $router){

        session_start();
        isAuth();

        $token = $_GET['id'];
        
        if(!$token) header('Location: /dashboard');
        // Revisar que la persona que visita el proytecto lo creó
        $proyecto = Proyecto::where('url', $token);

        if($proyecto->propietarioId !== $_SESSION['id']){
            header('Location: /dashboard');
        }


        $router->render('dashboard/proyecto', [
            'titulo' => $proyecto->proyecto
        ]);
    }

    public static function usuarios(Router $router){
        session_start();
        isAuth();
        $alertas = [];
        $usuarios = Usuario::belongsTo("tus", "0");

        if($_SERVER['REQUEST_METHOD'] === 'POST'){
            $borrado = new Usuario($_POST);


            $borrado->eliminar();

            Usuario::setAlerta('exito', 'Eliminado Correctamente');
            $alertas = $borrado->getAlertas();
        }

        $router->render('dashboard/usuarios', [
            'alertas' => $alertas,
            'titulo' => 'Usuarios',
            'users' => $usuarios
        ]);
    }

    public static function editar_usuario(Router $router){
        session_start();
        isAuth();
        $alertas = [];
        $id = $_GET['id'];


        if($_SERVER['REQUEST_METHOD'] === 'POST'){
            $usuario = new Usuario($_POST);
            $alertas = $usuario->validarUsr();
            

            if(empty($alertas)){
                 Usuario::setAlerta('exito', 'Usuario Actualziado Correctamente');
                 $usuario->hashPassword();
                 $usuario->guardar();
                
                $alertas = $usuario->getAlertas();

            }
        }
        $user = Usuario::where('id', $id);

        $router->render('dashboard/editar-usuario', [
            'alertas' => $alertas,
            'titulo' => 'Editar Usuario',
            'usuario' => $user
        ]);
    }

    public static function nuevo_usuario(Router $router){
        session_start();
        isAuth();
        $alertas = [];
   

        if($_SERVER['REQUEST_METHOD'] === 'POST'){

            $usuario = new Usuario($_POST);
            $alertas = $usuario->validarUsr();

            if(empty($alertas)){
                 //Verificar el Email
                 $existeUsuario = Usuario::where('email', $usuario->email);

                 if($existeUsuario && $existeUsuario->id !== $usuario->id){
                     // Mostrar Mensaje de usuario existente
                     Usuario::setAlerta('error', 'Email no valido');
 
                     $alertas = $usuario->getAlertas();
                 }else{
                          // Guardar el usuario
                 $usuario->hashPassword();
                 $usuario->guardar();
 
                 Usuario::setAlerta('exito', 'Guardado Correctamente');
 
                 $alertas = $usuario->getAlertas();
 
                 }
            }
        }

        $router->render('dashboard/nuevo-usuario', [
            'alertas' => $alertas,
            'titulo' => 'Crear nuevo usuario'
        ]);
    }

    public static function perfil(Router $router){

        session_start();
        isAuth();
        $alertas = [];

        $usuario = Usuario::find($_SESSION['id']);

        if($_SERVER['REQUEST_METHOD'] === 'POST'){

            $usuario->sincronizar($_POST);
            $alertas = $usuario->validar_perfil();

            if(empty($alertas)){

                //Verificar el Email
                $existeUsuario = Usuario::where('email', $usuario->email);

                if($existeUsuario && $existeUsuario->id !== $usuario->id){
                    // Mostrar Mensaje de usuario existente
                    Usuario::setAlerta('error', 'Email no valido');

                    $alertas = $usuario->getAlertas();
                }else{
                         // Guardar el usuario
                $usuario->guardar();

                Usuario::setAlerta('exito', 'Guardado Correctamente');

                $alertas = $usuario->getAlertas();

                //Asignar nombre nuevo
                $_SESSION['nombre'] = $usuario->nombre;
                }
            }
        }

        $router->render('dashboard/perfil', [
            'titulo' => 'Perfil',
            'usuario' => $usuario,
            'alertas' => $alertas
        ]);
    }

    public static function cambiar_password(Router $router){
        session_start();
        isAuth();
        $alertas = [];

        if($_SERVER['REQUEST_METHOD'] === 'POST'){
            $usuario = Usuario::find($_SESSION['id']);

            //Sincronizxar con los datos del usuario
            $usuario->sincronizar($_POST);

            $alertas = $usuario->nuevo_password();

            if(empty($alertas)){
                $resultado = $usuario->comprobar_password();

                if($resultado){
                    $usuario->password = $usuario->password_nuevo;

                    // Elimianr propiedades no ncesesarias 
                    unset($usuario->password_actual);
                    unset($usuario->password_nuevo);

                    // Hashear Password
                    $usuario->hashPassword();

                    // Actualziar
                    $resultado = $usuario->guardar();

                    if($resultado){
                        Usuario::setAlerta('exito', 'Password guardado correctamente');
                        $alertas = $usuario->getAlertas();
                    }
                }else{
                    Usuario::setAlerta('error', 'Password Incorrecto');
                    $alertas = $usuario->getAlertas();
                }
            }
        }


        $router->render('dashboard/cambiar-password', [
            'titulo' => 'Cambiar Password',
            'alertas' => $alertas
        ]);
    }
   
}