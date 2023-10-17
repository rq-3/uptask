<?php 

require_once __DIR__ . '/../includes/app.php';

use Controllers\ApiController;
use Controllers\DashboardController;
use Controllers\LoginController;
use Controllers\TareaController;
use MVC\Router;
$router = new Router();


// Login 
$router->get('/', [LoginController::class, 'login']);
$router->post('/', [LoginController::class, 'login']);
$router->get('/logout', [LoginController::class, 'logout']);

// Crear Cuenta
$router->get('/crear', [LoginController::class, 'crear']);
$router->post('/crear', [LoginController::class, 'crear']);

// Olvido cuenta
$router->get('/olvide', [LoginController::class, 'olvide']);
$router->post('/olvide', [LoginController::class, 'olvide']);

// Colocar nuevo password
$router->get('/restablecer', [LoginController::class, 'restablecer']);
$router->post('/restablecer', [LoginController::class, 'restablecer']);

// Confirmacion de cuenta
$router->get('/mensaje', [LoginController::class, 'mensaje']);
$router->get('/confirmar', [LoginController::class, 'confirmar']);

// Zona Dashboard
$router->get('/dashboard', [DashboardController::class, 'index']);
$router->get('/crear-proyecto', [DashboardController::class, 'crear_proyecto']);
$router->post('/crear-proyecto', [DashboardController::class, 'crear_proyecto']);
$router->get('/proyecto', [DashboardController::class, 'proyecto']);
$router->get('/ordenes', [DashboardController::class, 'ordenes']);
$router->post('/ordenes', [DashboardController::class, 'ordenes']);
$router->get('/orden', [DashboardController::class, 'orden']);
$router->get('/nueva-orden', [DashboardController::class, 'nueva_orden']);
$router->post('/nueva-orden', [DashboardController::class, 'nueva_orden']);
$router->get('/editar-orden', [DashboardController::class, 'editar_orden']);
$router->post('/editar-orden', [DashboardController::class, 'editar_orden']);

// Clientes
$router->get('/clientes', [DashboardController::class, 'clientes']);
$router->post('/clientes', [DashboardController::class, 'clientes']);
$router->get('/ver-cliente', [DashboardController::class, 'ver_cliente']);
$router->get('/nuevo-cliente', [DashboardController::class, 'nuevo_cliente']);
$router->post('/nuevo-cliente', [DashboardController::class, 'nuevo_cliente']);
$router->get('/editar-cliente', [DashboardController::class, 'editar_cliente']);
$router->post('/editar-cliente', [DashboardController::class, 'editar_cliente']);


$router->get('/usuarios', [DashboardController::class, 'usuarios']);
$router->post('/usuarios', [DashboardController::class, 'usuarios']);
$router->get('/editar-usuario', [DashboardController::class, 'editar_usuario']);
$router->post('/editar-usuario', [DashboardController::class, 'editar_usuario']);
$router->get('/nuevo-usuario', [DashboardController::class, 'nuevo_usuario']);
$router->post('/nuevo-usuario', [DashboardController::class, 'nuevo_usuario']);


$router->get('/agenda', [DashboardController::class, 'agenda']);
$router->post('/agenda', [DashboardController::class, 'agenda']);
$router->get('/ver-evento', [DashboardController::class, 'agenda_evento']);
$router->get('/editar-evento', [DashboardController::class, 'editar_evento']);
$router->post('/editar-evento', [DashboardController::class, 'editar_evento']);
$router->get('/agenda-agregar', [DashboardController::class, 'nuevo_evento']);
$router->post('/agenda-agregar', [DashboardController::class, 'nuevo_evento']);
$router->get('/pagos', [DashboardController::class, 'pagos']);
$router->get('/ver-pago', [DashboardController::class, 'ver_pago']);
$router->get('/nuevo-pago', [DashboardController::class, 'nuevo_pago']);
$router->post('/nuevo-pago', [DashboardController::class, 'nuevo_pago']);
$router->get('/editar-pay', [DashboardController::class, 'editar_pay']);
$router->post('/editar-pay', [DashboardController::class, 'editar_pay']);
$router->get('/perfil', [DashboardController::class, 'perfil']);
$router->post('/perfil', [DashboardController::class, 'perfil']);
$router->get('/cambiar-password', [DashboardController::class, 'cambiar_password']);
$router->post('/cambiar-password', [DashboardController::class, 'cambiar_password']);

// API para las Tareas
$router->get('/api/tareas', [TareaController::class, 'index']);
$router->post('/api/tarea', [TareaController::class, 'crear']);
$router->post('/api/tarea/actualizar', [TareaController::class, 'actualziar']);
$router->post('/api/tarea/eliminar', [TareaController::class, 'eliminar']);

$router->post('/api/service', [ApiController::class, 'dato_servicios']);
$router->post('/api/estados', [ApiController::class, 'estados_servicios']);
$router->post('/api/edita1', [ApiController::class, 'edita_orden']);
$router->post('/api/edita2', [ApiController::class, 'edita_pay']);






// Comprueba y valida las rutas, que existan y les asigna las funciones del Controlador
$router->comprobarRutas();