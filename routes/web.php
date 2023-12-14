<?php

// use App\Http\Controllers\Ordercontroller;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    // Route::get('/Orders', [OrderController::class, 'index'])->name('orders');
    // Route::delete('/Orders', [OrderController::class, 'destroy'])->name('orders.destroy');

    Route::get('/Index', [PostController::class, 'index'])->name('index');
    Route::get('post/create', [PostController::class, 'create']);
    Route::post('post', [PostController::class, 'store']);
    Route::get('post/edit/{post}', [PostController::class, 'edit']);
    Route::put('post/update/{post}', [PostController::class, 'update']);
    Route::delete('post/delete/{post}', [PostController::class, 'destroy']);



});

require __DIR__ . '/auth.php';