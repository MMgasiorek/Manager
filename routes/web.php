<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ContentController;
use App\Http\Controllers\ContentAreasController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\TattooController;
use App\Http\Controllers\AccessoryController;
use App\Http\Controllers\EmployeerController;
use App\Http\Controllers\FullCalenderController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\VisitController;
use App\Http\Controllers\WebsiteController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\EventController;

/*
|--------------------------------------------------------------------------
| Admin panel
|--------------------------------------------------------------------------
|
*/


Route::get('/admin', function () {
    return view('admin.home.home');
});

// CONTENT

Route::get('/contents', [ContentAreasController::class, 'index']);
Route::get('/content_show/{id}', [ContentController::class, 'show']);
Route::get('/content_add', function () {
    return view('admin.contents.add');
});
Route::post('/content_create', [ContentController::class, 'create']);
Route::get('/content_edit/{id}', [ContentController::class, 'edit']);
Route::post('/content_update', [ContentController::class, 'update']);
Route::get('/content_delete/{id}', [ContentController::class, 'delete']);

// REPORTS

Route::get('/reports', [ReportController::class, 'index']);
Route::post('/report', [ReportController::class, 'mainReport']);
Route::post('/employeer_report', [ReportController::class, 'employeerReport']);

/*
|--------------------------------------------------------------------------
| Customers
|--------------------------------------------------------------------------
|
*/

Route::get('/clients', [ClientController::class, 'index']);
Route::get('/client_add', function () {
    return view('admin.studio.clients.add');
});
Route::post('/client_create', [ClientController::class, 'create']);
Route::get('/client_edit/{id}', [ClientController::class, 'edit']);
Route::post('/client_update', [ClientController::class, 'update']);
Route::get('/client_delete/{id}', [ClientController::class, 'delete']);

/*
|--------------------------------------------------------------------------
| Employees
|--------------------------------------------------------------------------
|
*/

Route::get('/employees', [EmployeerController::class, 'index']);
Route::get('/employeer_show/{id}', [EmployeerController::class, 'show']);
Route::get('/employeer_add', function () {
    return view('admin.studio.employees.add');
});
Route::post('/employeer_create', [EmployeerController::class, 'create']);
Route::get('/employeer_edit/{id}', [EmployeerController::class, 'edit']);
Route::post('/employeer_update', [EmployeerController::class, 'update']);
Route::get('/employeer_delete/{id}', [EmployeerController::class, 'delete']);

/*
|--------------------------------------------------------------------------
| Tattoos
|--------------------------------------------------------------------------
|
*/

Route::get('/tattoos', [TattooController::class, 'index']);
Route::get('/tattoo_show/{id}', [TattooController::class, 'show']);
Route::get('/tattoo_add', function () {
    return view('admin.studio.tattoos.add');
});
Route::post('/tattoo_create', [TattooController::class, 'create']);
Route::get('/tattoo_edit/{id}', [TattooController::class, 'edit']);
Route::post('/tattoo_update', [TattooController::class, 'update']);
Route::get('/tattoo_delete/{id}', [TattooController::class, 'delete']);

/*
|--------------------------------------------------------------------------
| Visits
|--------------------------------------------------------------------------
|
*/

Route::get('/visits', [VisitController::class, 'index']);
Route::get('/visit_show/{id}', [VisitController::class, 'show']);
Route::get('/visit_add', [VisitController::class, 'add']);
Route::post('/visit_create', [VisitController::class, 'create']);
Route::get('/visit_delete/{id}', [VisitController::class, 'delete']);

/*
|--------------------------------------------------------------------------
| Accessories
|--------------------------------------------------------------------------
|
*/

Route::get('/accessories', [AccessoryController::class, 'index']);
Route::get('/accessory_add', function () {
    return view('admin.studio.accessories.add');
});
Route::post('/accessory_create', [AccessoryController::class, 'create']);
Route::get('/accessory_edit/{id}', [AccessoryController::class, 'edit']);
Route::post('/accessory_update', [AccessoryController::class, 'update']);
Route::get('/accessory_delete/{id}', [AccessoryController::class, 'delete']);

/*
|--------------------------------------------------------------------------
| Orders
|--------------------------------------------------------------------------
|
*/

Route::get('/orders', [OrderController::class, 'index']);
Route::get('/order_add', function () {
    return view('subpages.order');
});
Route::post('/order_create', [OrderController::class, 'create']);
Route::get('/order_edit/{id}', [OrderController::class, 'show']);

Route::get('/order_delete/{id}', [OrderController::class, 'delete']);

/*
|--------------------------------------------------------------------------
| Event
|--------------------------------------------------------------------------
|
*/
Route::get('/planning', [EventController::class, 'index']);
Route::post('/event_create', [EventController::class, 'create']);
Route::get('/event_show/{id}', [EventController::class, 'show']);
Route::get('/event_delete/{id}', [EventController::class, 'index']);


// Routes group fer Calendar 

Route::get('fullcalender', [FullCalenderController::class, 'index']);
Route::post('fullcalenderAjax', [FullCalenderController::class, 'ajax']);

/*
|--------------------------------------------------------------------------
| Website
|--------------------------------------------------------------------------
|
*/


Route::get('/', [WebsiteController::class, 'main']);

Route::get('/regulations', function () {
    return view('subpages.regulations');
});

Route::get('/blog', function () {
    return view('subpages.blog');
});

Route::get('/contact', function () {
    return view('subpages.contact');
});

Route::get('/about_us', function () {
    return view('subpages.about_us');
});

Route::get('/about_us', [WebsiteController::class, 'about']);

Route::get('/special', function () {
    return view('subpages.special');
});

Route::get('/gallery', function () {
    return view('subpages.gallery');
});


Route::get('/testxx', function () {
    return view('admin.orders.testxx');
});