<?php
require_once __DIR__ . '/../includes/app.php';

use Controllers\APIController;
use MVC\Router;
use Controllers\PaginasController;
use Controllers\AuthController;
use Controllers\BarriosController;
use Controllers\BodegasController;
use Controllers\CentroCostosController;
use Controllers\CiudadesController;
use Controllers\ClientesController;
use Controllers\DepartamentosController;
use Controllers\GrInventariosController;
use Controllers\PaisesController;
use Controllers\PresupuestosController;
use Controllers\ProveedoresController;
use Controllers\TemporadasController;
use Controllers\TransportadorasController;
use Controllers\VendedoresController;
use Controllers\ZonasController;

$router = new Router();


// $router->get('/', 'index');
// $router->get('/', [PaginasController::class, 'index']);
$router->get('/', [AuthController::class, 'login']);
$router->get('/logout', [AuthController::class, 'logout']);
$router->post('/login', [AuthController::class, 'login']);
$router->get('/paginas/dashboard', [PaginasController::class, 'dashboard']);
// $router->get('/paginas/printer', [PaginasController::class, 'printer']);
// $router->get('/paginas/calculadora', [PaginasController::class, 'calculadora']);
$router->get('/paginas/maestros/generales/centro-costos', [CentroCostosController::class, 'centroCostos']);
$router->get('/api/centrocostos', [APIController::class, 'index']);
$router->get('/paginas/maestros/generales/ciudades', [CiudadesController::class, 'ciudades']);
$router->get('/api/ciudades', [APIController::class, 'index']);
$router->get('/paginas/maestros/generales/departamentos', [DepartamentosController::class, 'departamentos']);
$router->get('/api/departamentos', [APIController::class, 'index']);
$router->get('/paginas/maestros/generales/transportadoras', [TransportadorasController::class, 'transportadoras']);
$router->get('/api/transportadoras', [APIController::class, 'index']);
$router->get('/paginas/maestros/generales/paises', [PaisesController::class, 'paises']);
$router->get('/api/paises', [APIController::class, 'index']);
$router->get('/paginas/maestros/generales/proveedores', [ProveedoresController::class, 'proveedores']);
$router->get('/api/proveedores', [APIController::class, 'index']);
$router->get('/paginas/maestros/generales/clientes', [ClientesController::class, 'clientes']);
$router->get('/api/clientes', [APIController::class, 'index']);
$router->get('/paginas/maestros/generales/presupuestos', [PresupuestosController::class, 'presupuestos']);
$router->get('/paginas/maestros/generales/vendedores', [VendedoresController::class, 'vendedores']);
$router->get('/api/vendedores', [APIController::class, 'index']);
$router->get('/paginas/maestros/generales/zonas', [ZonasController::class, 'zonas']);
$router->get('/api/zonas', [APIController::class, 'index']);
$router->get('/paginas/maestros/generales/barrios', [BarriosController::class, 'barrios']);
$router->get('/api/barrios', [APIController::class, 'index']);
$router->get('/paginas/maestros/generales/temporadas', [TemporadasController::class, 'temporadas']);
$router->get('/api/temporadas', [APIController::class, 'index']);
$router->get('/paginas/maestros/insumos/bodegas', [BodegasController::class, 'bodegas']);
$router->get('/api/bodegas', [APIController::class, 'index']);
$router->get('/paginas/maestros/insumos/gruposinventarios', [GrInventariosController::class, 'grInventarios']);
$router->get('/api/gruposinventarios', [APIController::class, 'index']);
// $router->get('/propiedades', [PaginasController::class, 'propiedades']);
// $router->get('/propiedad', [PaginasController::class, 'propiedad']);
// $router->get('/blog', [PaginasController::class, 'blog']);
// $router->get('/entrada', [PaginasController::class, 'entrada']);
// $router->get('/contacto', [PaginasController::class, 'contacto']);
// $router->post('/contacto', [PaginasController::class, 'contacto']);

$router->comprobarRutas();
