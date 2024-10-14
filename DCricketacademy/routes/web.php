<?php

use App\Http\Controllers\UploadController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
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
    return view('dashboard');
});
Route::get('/about', function () {
    return view('about');
});

Route::get('/dashboard', function () {
    return view('dashboard');
});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');
// >middleware('auth')

route::get('/home',[HomeController::class,'index'])->name('home');

route::get('/trainer',[HomeController::class,'trainer'])->name('trainer');

route::get('/why',[HomeController::class,'why'])->name('why');

route::get('/contact',[HomeController::class,'contact'])->name('contact');

route::get('post',[HomeController::class,'post'])->middleware(['auth','admin']);

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/upload', [UploadController::class, 'create'])->name('create');

Route::post('/upload', [UploadController::class, 'store'])->name('store');

Route::get('/display', [UploadController::class, 'display'])->name('display');

Route::get('/event_page',[HomeController::class,'event_page']);

Route::post('/add_event',[HomeController::class,'add_event']);

require __DIR__.'/auth.php';
