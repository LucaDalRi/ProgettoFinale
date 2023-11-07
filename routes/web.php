<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\User\DishController;
use Illuminate\Support\Facades\Auth;
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
    return view('welcome');
});

Route::get('/dashboard', function () {
    $user = auth()->user();
    $restaurant = $user->restaurant;
    return view('dashboard', compact('restaurant'));
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::prefix('user')->middleware(['auth'])->group(function () {
    Route::resource('/dishes', DishController::class)
        ->names([
        'index' => 'dishes.index',
        'create' => 'dish.create',
        'show' => 'dish.show',
        'edit' => 'dish.edit',
        'delete' => 'dish.destroy'
    ]);
});

// Route::middleware('auth')->delete('/dishes', [DishController::class, 'destroyAll'])->name('dishes.deleteAll');

require __DIR__.'/auth.php';
