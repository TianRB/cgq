<?php
use App\Http\Middleware\Authenticate;

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
Route::auth();

// FRONTEND
Route::get('/', 'FrontController@index');
Route::get('/blog', 'FrontController@blog');
Route::post('/blog', 'FrontController@blog_search');
Route::get('/blog/{categoriaSlug}', 'FrontController@blog_category');
Route::get('/contacto', 'FrontController@contacto');
Route::get('/gracias', 'FrontController@gracias');
Route::get('/nota/{postSlug}', 'FrontController@nota');
// Padecimientos clinicos
Route::get('/padecimientos-clinicos/enfermedades-bazo', 'FrontController@enfermedades_bazo');
Route::get('/padecimientos-clinicos/enfermedades-colonicas', 'FrontController@enfermedades_colonicas');
Route::get('/padecimientos-clinicos/enfermedades-esofagicas', 'FrontController@enfermedades_esofagicas');
Route::get('/padecimientos-clinicos/enfermedades-gastricas', 'FrontController@enfermedades_gastricas');
Route::get('/padecimientos-clinicos/enfermedades-gastricas', 'FrontController@enfermedades_gastricas');
Route::get('/padecimientos-clinicos/enfermedades-higado', 'FrontController@enfermedades_higado');
Route::get('/padecimientos-clinicos/enfermedades-intestino-delgado', 'FrontController@enfermedades_intestino_delgado');
Route::get('/padecimientos-clinicos/enfermedades-pancreaticas', 'FrontController@enfermedades_pancreaticas');
Route::get('/padecimientos-clinicos/enfermedades-vesicula-vias-biliares', 'FrontController@enfermedades_vesicula_vias_biliares');
Route::get('/padecimientos-clinicos/enfermedades-intestino-irritable', 'FrontController@enfermedades_intestino_irritable');
// Cirujía general
Route::get('/cirugia-general/amputaciones', 'FrontController@amputaciones');
Route::get('/cirugia-general/apendicectomia', 'FrontController@apendicetomia');
Route::get('/cirugia-general/cirugia-acalasia', 'FrontController@cirugia_acalasia');
Route::get('/cirugia-general/cirugia-glandula-tiroides', 'FrontController@cirugia_glandula_tiroides');
Route::get('/cirugia-general/colecistectomia', 'FrontController@colecistectomia');
Route::get('/cirugia-general/deteccion-oportuna', 'FrontController@deteccion_oportuna');
Route::get('/cirugia-general/drenaje-tratamiento-infecciones', 'FrontController@drenaje_tratamiento_infecciones');
Route::get('/cirugia-general/exploracion-vias-biliares', 'FrontController@exploracion_vias_biliares');
Route::get('/cirugia-general/cirugia-antirreflujo', 'FrontController@cirugia_antirreflujo');
Route::get('/cirugia-general/extraccion-bazo', 'FrontController@extraccion_bazo');
Route::get('/cirugia-general/extraccion-lipomas', 'FrontController@extraccion_lipomas');
Route::get('/cirugia-general/heridas-cronicas', 'FrontController@heridas_cronicas');
Route::get('/cirugia-general/hernias-abdominales', 'FrontController@hernias_abdominales');
Route::get('/cirugia-general/padecimientos-anorrectales', 'FrontController@padecimientos_anorectales');
Route::get('/cirugia-general/pie-diabetico', 'FrontController@pie_diabetico');
Route::get('/cirugia-general/reconexiones-intestinales', 'FrontController@reconexiones_intestinales');
Route::get('/cirugia-general/resecciones-colonicas', 'FrontController@resecciones_colonicas');
Route::get('/cirugia-general/tratamiento-ulceras', 'FrontController@tratamiento_ulceras');
Route::get('/cirugia-general/trauma-abdominal', 'FrontController@trauma_abdominal');

//BACKEND
Route::get('/home', 'PostController@index')->middleware(Authenticate::class); // Redirección inicial
Route::resource('/back/categories', 'CategoryController');
Route::resource('/back/posts', 'PostController');
