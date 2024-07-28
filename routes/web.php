<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\FireDetectionController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\SesiController;
use App\Http\Controllers\UploadController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
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
    
    Route::get('/dashboard', [AdminController::class,'dashboard']);
    Route::get('/live', [AdminController::class,'live']);
    Route::get('/history', [AdminController::class,'history']);
    Route::get('/profile', [AdminController::class,'profile']);
    Route::resource('posts', PostController::class);

    Route::resource('articles', ArticleController::class);
    // Route::get('/', [ArticleController::class, 'index']);
    Route::get('/upload-form', function () {
        return view('upload');
    });
    
    // Route::post('/detect', [FireDetectionController::class, 'detect']);
    Route::post('/detect-image', function (Request $request) {
        $request->validate([
            'image' => 'required|image|max:10240', // Maksimal 10MB
        ]);
    
        $image = $request->file('image');
    
        // Mengirim gambar ke server Flask untuk deteksi
        $response = Http::attach(
            'file', file_get_contents($image->getPathname()), $image->getClientOriginalName()
        )->post('http://localhost:5000/upload-image');
    
        if ($response->successful()) {
            $data = $response->json();
            return view('detection-result', ['result' => $data]);
        } else {
            return back()->withErrors(['error' => 'Gagal melakukan deteksi gambar.']);
        }
    })->name('detect.image');
    
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