<?php
namespace App\Http\Controllers;

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

Route::get('/', function () {
    return view('welcome');
});
//Route::get('about', function () {
//    return view('about');
//});
//Route::get('articles', function () {
//    $articles = \App\Models\Article::all();
//    return view('articles', ['articles' => $articles]);
//});

Route::get('articles', [ArticleController::class, 'index'])
    ->name('articles.index');

Route::get('about', [PageController::class, 'about']);
// app/HTTP/Controllers/PageController.php

// Должен наследоваться от Controller
class PageController extends Controller
{
    public function about()
    {
        // Точка используется вместо /.
        // То есть шаблон находится по пути resources/views/page/about.blade.php
        return view('page.about');
    }
}
