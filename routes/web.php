<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/','PaginasController@home');

Route::get('/ingresocategoria','CategoriasController@vista');
Route::post('/ingresocategoria','CategoriasController@create');
Route::get('/vercategoria','CategoriasController@read');

Route::get('/ingresoclientes','ClienteController@vista');
Route::post('/ingresoclientes','ClienteController@create');
Route::get('/verclientes','ClienteController@read');

Route::get('/ingresoprod','ProductosController@vista');
Route::post('/ingresoprod','ProductosController@create');
Route::get('/verprod','ProductosController@read');

Route::get('/ingresoprov','ProveedoresController@vista');
Route::post('/ingresoprov','ProveedoresController@create');
Route::get('/verprov','ProveedoresController@read');

Route::get('/ingresoctas','CuentasController@vista');
Route::post('/ingresoctas','CuentasController@create');
Route::get('/verctas','CuentasController@read');

Route::get('/agregartel','Tele_clieController@vista');
Route::post('agregartel','Tele_clieController@create');
Route::get('/vertele','Tele_clieController@read');


//Chacon

Route::get('/create', 'ControllerRol@vista');
Route::post('/create', 'ControllerRol@create');
Route::get('/vista', 'ControllerRol@read');



Route::get('/crear_clas', 'ControllerCuentas@vista');
Route::post('/crear_clas', 'ControllerCuentas@create');
Route::get('/verclas', 'ControllerCuentas@read');



Route::get('/crearEmple','ControllerEmpleado@vista');
Route::post('/crearEmple', 'ControllerEmpleado@create');
Route::get('/verEmple', 'ControllerEmpleado@read');



Route::get('/crear_natu', 'ControllerNaturaleza@vista');
Route::post('/crear_natu', 'ControllerNaturaleza@create');
Route::get('/verNatu', 'ControllerNaturaleza@read');

Route::get('/ingresousua','UsuarioController@vista');
Route::post('/ingresousua','UsuarioController@create');
Route::get('/verusua','UsuarioController@read');

Route::get('/agregarfactura','FacturaController@vista');
Route::post('/agregarfactura','FacturaController@create');
Route::get('/vistafactura','FacturaController@read');



Auth::routes();

Route::get('/home', 'HomeController@index');

Route::prefix('admin')->group(function(){
	Route::get('/login', 'Auth\AdminLoginController@ShowLoginForm')->name('admin.login');
	Route::get('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
	Route::get('/', 'AdminController@index')->name('admin.dashboard');	
});

?>


