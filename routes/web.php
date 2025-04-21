<?php
use App\Http\Controllers\HomeController;

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\EventController;
use App\Http\Controllers\RedriverController;
use App\Http\Controllers\ParkingController;

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

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/benefits', function(){
    return view('benefits');
});

Route::get('/history', function(){
    return view('history', ['banner_title' => 'HISTORY']);
});

Route::get('/join', function(){
    return view('join', ['banner_title' => 'JOIN THE TOUCHDOWN CLUB'] );
});

Route::get('/outx', [RedriverController::class, 'publicPage'])->name('redriver. publicPage');
//
// Route::get('/outx', function(){
//     return view('outx', ['banner_title' => 'RED RIVER RIVALRY'] );
// });

Route::get('/parking', [ParkingController::class, 'parkingPage'])->name('parking.parkingPage');

/*
Route::get('/parking', function(){
    return view('parking', ['banner_title' => 'GAME DAY PARKING'] );
});
*/
Route::get('/redwhitegame', function(){
    return view('redwhitegame', ['banner_title' => 'SPRING COACHES LUNCH'] );
});

Route::get('/projects', function(){
    return view('projects', ['banner_title' => 'PROJECTS'] );
});

Route::get('/contact', function(){
    return view('contact', ['banner_title' => 'CONTACT US']);
});

Route::get('/cart', function(){
    return view('cart');
});



Route::get('/events', [EventController::class, 'index'])->name('events.index');
Route::get('/events/create', [EventController::class, 'create'])->name('events.create');
Route::post('/events', [EventController::class, 'store'])->name('events.store');
Route::get('/events/{event}', [EventController::class, 'show'])->name('events.show');
Route::get('/events/{event}/edit', [EventController::class, 'edit'])->name('events.edit');
Route::put('/events/{event}', [EventController::class, 'update'])->name('events.update');
Route::delete('/events/{event}', [EventController::class, 'destroy'])->name('events.destroy');

Route::middleware(['auth'])->group(function () {
    Route::get('/admin/events',  [EventController::class, 'admin'])->name('admin.events');
    Route::get('/admin/events/{event}/edit', 'EventController@edit')->name('admin.events.edit');
    Route::put('/admin/events/{event}', 'EventController@update')->name('admin.events.update');
});

Route::middleware(['auth'])->group(function () {
    Route::get('/admin/parking', [ParkingController::class, 'index'])->name('admin.parking');
    Route::get('/admin/parking/{id}/edit', [ParkingController::class, 'edit'])->name('parking.edit');
    Route::post('/admin/parking/{id}', [ParkingController::class, 'update'])->name('parking.update');
     Route::post('/admin/parkingCreate', [ParkingController::class, 'store'])->name('parking.store');
});



//Route::middleware('auth')->group(function () {
    // CRUD operations for redriver resource
    Route::get('/admin/redriver', [RedriverController::class, 'index'])->name('admin.redriver');
    Route::get('/admin/redriver/{id}', [RedriverController::class, 'show']);
    Route::post('/admin/redriver', [RedriverController::class, 'store'])->name('redriver.store');
    Route::post('/admin/redriver/{id}', [RedriverController::class, 'update'])->name('redriver.update');
    Route::delete('/admin/redriver/{id}', [RedriverController::class, 'destroy']);
//});




Route::get('/renewals', function(){
    return view('renewals', ['banner_title'=>'RENEWALS']);
});

Route::get('/new_members', function(){
    return view('new_members', ['banner_title'=>'NEW MEMBERSHIP']);
});

Route::get('/cart', function(){
    return view('cart');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
