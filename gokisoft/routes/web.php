<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;
use App\Http\Controllers\UserController;

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
    return view('welcome');
});

Route::get('/vidu.html', function() {
    // echo '<h1>Welcome to learn Laravel</h1>';
    return '<h1 style="text-align: center;">Welcome to learn Laravel</h1>';
});

Route::get('/{href_param}.html', function($href_param) {
    echo $href_param;
});

Route::get('/a/{a}/b/{b}', function($a, $b) {
    echo $a + $b;
});

Route::get('/test/hello', [TestController::class, 'hello']);

Route::get('/test/hello/{msg}', [TestController::class, 'showMsg']);

Route::get('/test/view', [TestController::class, 'showView']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/test/dump', [TestController::class, 'dump']);
