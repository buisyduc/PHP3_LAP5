<?php
use App\Http\Controllers\Admin\MoiveController;


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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::prefix('admin')->group(function(){
    Route::get('moive/home',[MoiveController::class, 'index'])->name('moive.home');
    Route::get('moive/create',[MoiveController::class, 'create'])->name('moive.create');
    Route::post('moive/create',[MoiveController::class, 'store'])->name('moive.store');
    Route::get('moive/edit/{moive}', [MoiveController::class, 'edit'])->name('moive.edit');
    Route::put('moive/update/{moive}', [MoiveController::class, 'update'])->name('moive.update'); // Change to PUT
    Route::delete('moive/delete/{moive}',[MoiveController::class, 'destroy'])->name('moive.destroy');

    Route::get('moive/search', [MoiveController::class, 'index'])->name('moive.home');
    
});

