<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\FireDetectionController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\SesiController;
use App\Http\Controllers\UploadController;
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

// Route::get('/', [SesiController::class,'index']);
// Route::post('/', [SesiController::class,'login']);

Route::middleware(['guest'])->group(function() {
    Route::get('/', [ArticleController::class,'welcome'])->name('welcome');
    // Route::get('/blog/{article}', [ArticleController::class, 'show'])->name('blog.show');
    Route::get('/login', [SesiController::class,'login'])->name('login');
    Route::post('/login', [SesiController::class,'loginre']);
});

Route::get('/rumah', function () {
    return redirect('/index/operator');
});

Route::middleware(['auth'])->group(function(){
    Route::get('/index', [AdminController::class,'index']);
    Route::get('/index/operator', [AdminController::class,'admin'])->middleware('userAkses:admin');
    Route::get('/index/user', [AdminController::class,'user'])->middleware('userAkses:user');
    
    Route::get('/live', [AdminController::class,'live']);
    Route::get('/history', [AdminController::class,'history']);
    Route::get('/profile', [AdminController::class,'profile']);
    Route::resource('posts', PostController::class);

    Route::resource('articles', ArticleController::class);
    // Route::get('/', [ArticleController::class, 'index']);

    Route::get('/upload', [FireDetectionController::class, 'showUploadForm']);
    Route::post('/upload', [FireDetectionController::class, 'uploadFile']);


    Route::resource('users', AdminController::class);
    // Route::get('/users', [AdminController::class, 'datauser']);
    // Route::get('/users/create', [AdminController::class, 'create']);
    // Route::post('/users', [AdminController::class, 'store']);
    // Route::get('/users/{user}', [AdminController::class, 'show']);
    // Route::get('/users/{user}/edit', [AdminController::class, 'edit']);
    // Route::put('/users/{user}', [AdminController::class, 'update']);
    // Route::delete('/users/{user}', [AdminController::class, 'destroy']);

    
    Route::get('/logout',[SesiController::class, 'logout']);    
});

// Route::get('/operator', [AdminController::class,'index']);
// Route::get('/logout',[SesiController::class, 'logout']);

Route::get('/blog/{article}', [ArticleController::class, 'show'])->name('blog');