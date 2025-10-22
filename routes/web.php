<?php

use App\Http\Controllers\CommentController;
use App\Models\Post;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContentShowController;
use App\Http\Controllers\FileController;
use App\Models\Category;

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

Route::get('/', [HomeController::class, 'index']);
Route::get('/artikel/{year}/{month}/{day}/{slug}', [HomeController::class, 'show'])->name('post.show');
Route::get('/artikel', function() {
    abort(404);
});
Route::get('/category/{category:slug}', function(Category $category) {
    $post = $category->post;
});

Route::post('/comment', [CommentController::class, 'create'])->name('comment.create');
Route::get('/profile/{title}', [ContentShowController::class, 'showProfile'])->name('profile.show');
Route::get('/tata-usaha/{title}', [ContentShowController::class, 'showTataUsaha'])->name('tu.show');
Route::get('/pkh/{title}', [ContentShowController::class, 'showPKH'])->name('pkh.show');
Route::get('/isdhtl/{title}', [ContentShowController::class, 'showISDHTL'])->name('isdhtl.show');
Route::get('/publikasi', [ContentShowController::class, 'showPublikasi'])->name('publikasi.show');
Route::get('/layanan/{title}', [ContentShowController::class, 'showLayanan'])->name('layanan.show');

Route::get('storage-files/{folder}/{filename}', [FileController::class, 'showPdf'])->name('pdf.show');

Route::redirect('/laravel/login', '/login')->name('login');