<?php

use App\Http\Controllers\AccueilController;
use App\Http\Controllers\CircuitController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MotoController;
use App\Http\Controllers\NewsletterController;
use App\Http\Controllers\ScooterController;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

use Illuminate\Support\Facades\Mail;



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

// Route::get('/', function () {
//     return view('Admin.Dashboard');
// });



/////////Accueil
Route::get('/', [AccueilController::class, 'index']);
Route::post('reservation', [AccueilController::class, 'reservation'])->name('reservation.post');

/////////login
Route::get('login', [LoginController::class, 'index'])->name('login')->middleware('prevent-back-history');
Route::post('login/post', [LoginController::class, 'LoginPost'])->name('login.post');

////////logout

Route::get('logout', [LoginController::class, 'logout']);

///////////Moto

Route::get('/rent_motorbike', [MotoController::class, 'index']);
Route::get('/rent_scooter', [ScooterController::class, 'index']);


Route::post('/add_moto_post', [MotoController::class, 'AddMoto'])->name('add_moto.post');

Route::post('/update_moto_post/{id}', [MotoController::class, 'UpdateMoto'])->name('update_moto.post');

Route::post('/delete_motos', [MotoController::class, 'delete'])->name('delete_motos.post');


//////////tours

Route::get('/tour', [CircuitController::class, 'index']);
Route::get('/circuit_detail/{id}', [CircuitController::class, 'get_detail']);


Route::post('/add_tour_post', [CircuitController::class, 'AddTour'])->name('add_tour.post');
Route::post('/update_tour_post/{id}', [CircuitController::class, 'UpdateTour'])->name('update_tour.post');
Route::post('/delete_tours', [CircuitController::class, 'delete'])->name('delete_tours.post');

///////////Services

Route::get('/services', function () {
    return view('services');
});



//////////contact

Route::get('/contact', [ContactController::class, 'index']);
Route::post('/contact/message', [ContactController::class, 'message'])->name('message.post');

///////Dashboard


Route::post('/delete_reservation', [DashboardController::class, 'deleteReservation'])->name('delete_reservation.post');

Route::post('/delete_message', [DashboardController::class, 'deleteMessage'])->name('delete_message.post');


/////////newsletter

Route::post('/newsletter_post', [NewsletterController::class, 'store'])->name('newsletter.post');

///////////groupe

Route::middleware('auth', 'prevent-back-history')->group(function () {


    ///////////Moto
    Route::get('/motos', [MotoController::class, 'getAllMotos']);
    Route::get('/add_moto', [MotoController::class, 'getAddmoto']);
    Route::get('/update_moto/{id}', [MotoController::class, 'getUpdateMoto']);

    //////////tours
    Route::get('/tours', [CircuitController::class, 'getAllcircuits']);
    Route::get('/add_tour', [CircuitController::class, 'getAddTour']);
    Route::get('/update_tour/{id}', [CircuitController::class, 'getUpdatetour']);

    Route::get('/dashboard', [DashboardController::class, 'Index'])->name('dashboard');
});

// Route::get('/email', function(){
//     Mail::to('mehdi.argab@gmail.com')->send(new \App\Mail\ContactMail);
// });


////////////fallback

Route::fallback(function () {
    return '<h1>404 Oops! Page not found</h1>
            <h3>We could not find the page you were looking for</h3>';
});
