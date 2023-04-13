<?php

use App\Http\Controllers\FormController;
use App\Http\Controllers\GigaController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\VideoController;
use App\Models\Video;
use Illuminate\Support\Facades\Route;
use Symfony\Component\HttpKernel\Profiler\Profile;

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



Route::apiResources([
    "users" => UserController::class,
]);


//content
Route::get('/', [VideoController::class, 'index'])->name('videos');
// Route::get('/comments/{id}', [FormController::class, 'show'])->name('comment');
// Route::post('/comments', [FormController::class, 'store'])->name('addComment');



// гость
// Route::middleware('quest')->group(function(){
    Route::get('/auth', [FormController::class, "indexAuth"]) ->name('auth');
    Route::post('/login_process', [FormController::class, 'login' ])->name('login_process');
    //register
    Route::get('/registration', [FormController::class, 'indexReg'])->name('registration');
    Route::post('/registr', [FormController::class, 'register'])->name('registr');
// });

//авторизованный пользователь
Route::middleware('auth')->group(function(){
    //auth
    Route::get('/logout', [FormController::class, 'logout' ])->name('logout');

    //profile
    // Route::get('/profiles', [VideoController::class, 'profiles'])->name('profile');
    Route::get('/profile', [FormController::class, 'indexProfile'])->name('profile');
    //add Video
    Route::get('/addVi', [VideoController::class, 'profile_video'])->name('addVideo');
    Route::post('/addVideo', [VideoController::class, 'store'])->name('addVid');
    //delete Video
    Route::delete("delete", [VideoController::class, 'destroy']) -> name('delete');
});