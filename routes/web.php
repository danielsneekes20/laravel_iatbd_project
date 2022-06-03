<?php

use Illuminate\Support\Facades\Route;

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
Route::middleware(['auth',"banned"])->group(function(){
    Route::get('/searchsitter', [\App\Http\Controllers\AnimalController::class, 'searchsitter']);
    Route::get('/animal/{id}', [\App\Http\Controllers\AnimalController::class, 'show']);
    Route::get('/responses', [\App\Http\Controllers\AnimalController::class, 'responses']);
    Route::get('/myresponses', [\App\Http\Controllers\AnimalController::class, 'myresponses']);
    Route::get('/review/{id}', [\App\Http\Controllers\AnimalController::class, 'review']);
    Route::post('/review/{id}', [\App\Http\Controllers\AnimalController::class, 'storeReview']);
    Route::get('/ownerdelete/{id}', [\App\Http\Controllers\AnimalController::class,'deleteRow']);
    Route::post('/searchsitter', [\App\Http\Controllers\AnimalController::class, 'store']);

    Route::post('/animal', [\App\Http\Controllers\AnimalController::class, 'user']);
    Route::get('/user/{id}', [\App\Http\Controllers\AnimalController::class, 'user']);
    Route::get('/animal', [\App\Http\Controllers\AnimalController::class, 'index']);
    Route::get('/becomesitter', [\App\Http\Controllers\AnimalController::class, 'becomesitter']);
    Route::post('/becomesitter', [\App\Http\Controllers\AnimalController::class, 'store']);
    Route::post('/hallo', [\App\Http\Controllers\AnimalController::class, 'store']);
    Route::post('/respons/{id}', [\App\Http\Controllers\AnimalController::class, 'respons']);

    Route::post('/send/{id}', [\App\Http\Controllers\AnimalController::class, 'send']);
    Route::get('/send/{id}', [\App\Http\Controllers\AnimalController::class, 'send']);
    Route::post('addProduct', [\App\Http\Controllers\AnimalController::class, 'store'])->name('animal.index');
    Route::get('/respons/{id}', [\App\Http\Controllers\AnimalController::class, 'respons']);

});
Route::middleware(['auth',"admin"])->group(function(){
    Route::get('/delete', [\App\Http\Controllers\AnimalController::class, 'delete']);
    Route::get('/allUsers', [\App\Http\Controllers\AnimalController::class, 'allUsers']);
    Route::post('/delete/{id}', [\App\Http\Controllers\AnimalController::class,'deleteRow']);
    Route::post('/deleteUser/{id}', [\App\Http\Controllers\AnimalController::class,'deleteUserRow']);
});

Route::get('/', [\App\Http\Controllers\AnimalController::class, 'index']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
