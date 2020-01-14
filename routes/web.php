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

Route::get('/', function () {
    return view('welcome');
});

/*AQUI INICIA LAS RUTAS DE ALBERT*/ 
Route::get('/Home', ['as' => 'Empren-home', 'uses' => 'Empren\EmprendedorController@Home']);
/* Rutas Para el controlador de enviar */ 
Route::get('Enviar', 'Empren\EnvioController@index')->name('Enviar.index');
Route::post('Enviar', 'Empren\EnvioController@store')->name('Enviar.store');
Route::post('Enviars', 'Empren\EnvioController@entregados')->name('Enviar.entregados');
Route::post('Enviarss', 'Empren\EnvioController@entregatres')->name('Enviar.entregatres');
Route::post('EnvioPNegocios', 'Empren\EnvioController@entregaFinal')->name('Enviar.entregaFinal');
Route::get('Enviar/{pro}/{fase}', 'Empren\EnvioController@show')->name('Enviar.show');
Route::get('Enviar/{id}/edit', 'Empren\EnvioController@edit')->name('Enviar.edit');

/* valida la peticiones de registro de emprendedores */ 
Route::post('registro', 'Empren\EmprendedorController@Validar' ); 

/*Registro de emprendedor con las ruta */
Route::resource('Registro', 'Empren\EmprendedorRegisController');
Route::resource('AlProyecto', 'Empren\ProyectoRegisController');
Route::resource('Lista', 'Empren\ListEntregaController');
Route::resource('Entregas', 'Empren\EntregasController');
Route::resource('Archivo', 'Empren\ArchivosController');
Route::resource('Estado', 'Empren\EstatusController');
Route::resource('Emprendedor', 'Empren\EmpreController');
Route::resource('Colaborador', 'Empren\ColaboradorController');
/*AQUI TERMINA LAS RUTAS DE ALBERT*/


/*Hector*/
Route::get('/dashboard','Admin\AdminController@Admin')->name('HomeAdmin');
Route::get('/download','Admin\AdminController@downloadAsesor')->name('downloadasesor');
Route::post('/actividades/update', 'AdminController\ActiController@update')->name('actividades.update');
Route::resource('actividades', 'Admin\ActiController')->except(['create', 'edit']);
Route::resource('asesores','Admin\AsesorController'); 
Route::get('/emprendedores/borrar', 'AdminController\EmpreController@destroy')->name('emprendedores.destroy');
Route::resource('asignaciones','Admin\AsignaController')->except(['create', 'edit','show','update']);
Route::resource('emprendedores','Admin\EmpreController')->except(['store','edit','update','destroy']);
Route::resource('historial','Admin\HistoController')->except(['store', 'update']);
/*Hector*/



/*Eaz*/ 
Route::get('/home', 'HomeController@index')->name('home');

Route::resource('projects','Asesor\ProjectController'); 
Route::resource('asesor','Asesor\AsesorController');
Route::get('/homeAsesor','Asesor\homeController@asesor')->name('HomeAsesor');
Route::get('/projectFase/{id}','Asesor\homeController@update')->name('projectFase');
Route::get('/projectFases/{id}','Asesor\homeController@update1')->name('projectFases');

Route::get('/projectShow/{id}','Asesor\homeController@show')->name('projectShow');
Route::get('/projectDownload/{id}','Asesor\homeController@download')->name('projectDownload');
Route::get('/historial-projects','Asesor\homeController@historial')->name('historial-projects');
Route::get('/downloadFile/{id}','Asesor\homeController@downloadFile')->name('downloadFile');

Route::get('/projectFaseFinal/{id}','Asesor\homeController@updateFinal')->name('projectFaseFinal');
Route::get('/projectCroquis/{id}','Asesor\homeController@croquis')->name('projectCroquis');

Route::get('/historialProjects/{id}','Asesor\historialController@projects')->name('historialProjects');
Route::get('/historialProject/{id}','Asesor\historialController@project')->name('historialProject');
//eaz


/*Eaz*/ 

Route::get('/projectShow/{id}','Asesor\homeController@show')->name('projectShow');
Route::get('/projectDownload/{id}','Asesor\homeController@download')->name('projectDownload');

/*CHAT*/
Route::get('/contacts', 'ContactsController@get');
Route::get('/conversation/{id}', 'ContactsController@getMessagesFor');
Route::post('/conversation/send', 'ContactsController@send');
/*CHAT*/

Route::get('/email2',['as'=>'email2', function () {
    return view('email/plantilla_correo');
}]);

//Route::get('Email','EmailController');
Route::resource('emails','EmailController'); 
Route::resource('chat', 'ChatViewController');

Route::get('/mensajes',['as'=>'mensajes', function () {
    return view('Asesor/mensajes');
}]);


Auth::routes();

