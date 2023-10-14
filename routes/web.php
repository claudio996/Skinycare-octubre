<?php

use App\Http\Controllers\Admin\PromocionesController as AdminPromocionesController;
use App\Http\Controllers\Admin\ServiciosController;
use App\Http\Controllers\Admin\ZonasController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\PromocionesController;
use Illuminate\Support\Facades\Route;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Route::get('PromocionFemenina', [PromocionesController::class, 'PromocionFemenina']);
Route::get('PromocionMasculina', [PromocionesController::class, 'PromocionMasculina']);
Route::get('/checkout', [PromocionesController::class, 'checkout']);
/* Route::get('/Depilación-Femenina', [TratamientosController::class, 'PromocionFemenina']);
Route::get('/Depilación-Masculina', [TratamientosController::class, 'PromocionMasculina']); */
// Route::post('/GetHora', [TratamientosController::class, 'getHora']);
Route::get('Nosotros', [MenuController::class, 'Nosotros']);
Route::get('Contacto', [MenuController::class, 'Contacto']);

// /* Route::post('/Get_zona', [TratamientosController::class, 'GetZona']); */
// Route::post('/Reservar-cita', [ReservaController::class, 'store']);
// Route::post('/reservar', 'App\Http\Controllers\ReservaController@store')->name('reservar');
// Route::get('/Checkout', [CheckoutController::class, 'index'])->name('/checkout');;

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('admin/promociones', [AdminPromocionesController::class, 'index']);
    Route::post('admin/promociones-store', [AdminPromocionesController::class, 'store'])->name('admin/promociones-store');;
    /*   Route::get('admin/horarios', [HorariosController::class, 'index'])->name('admin/horarios');
    Route::post('admin/horarios-crear', [HorariosController::class, 'store'])->name('admin/horarios-crear');
    Route::post('admin/horarios-crear', [HorariosController::class, 'store'])->name('admin/horarios-crear');
 */
    Route::get('admin/zonas', [ZonasController::class, 'index'])->name('admin/zonas');;
    Route::post('admin/zonas-store', [ZonasController::class, 'store'])->name('admin/zonas-stores');;
    Route::get('admin/servicios', [ServiciosController::class, 'index'])->name('admin/servicios');
    Route::post('admin/servicios-store', [ServiciosController::class, 'store']);
    // Route::get('admin/reservas', [ReservasController::class, 'index'])->name('admin/reservas');
});
