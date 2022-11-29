<?php

use App\Http\Controllers\PageControl;
use App\Http\Controllers\ProcessControl;
use Illuminate\Support\Facades\Route;
use Symfony\Component\Process\Process;

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

Route::get('/', [PageControl::class, 'landing_page']);
Route::get('/instagram-feed', [PageControl::class, 'InstagramFeed'])->name('InstagramFeed');
Route::get('/instagram-feed/karya', [PageControl::class, 'InstagramFeed_karya'])->name('InstagramFeed-karya');


// Routing Proses login
Route::post('/depanel/admin/proses', [ProcessControl::class, 'login'])->name('ProsesLogin');
Route::get('/depanel/logout', [ProcessControl::class, 'logout'])->name('logout')->middleware('auth');
// Routing Proses Portfolio
Route::post('/depanel/portfolio/store', [ProcessControl::class, 'CreatePortfolio'])->name('CreatePortfolio')->middleware('auth');
Route::delete('/depanel/portfolio/{id}/destroy', [ProcessControl::class, 'DeletePortfolio'])->name('DeletePortfolio')->middleware('auth');
Route::put('/depanel/portfolio/{id}/update', [ProcessControl::class, 'UpdatePortfolio'])->name('UpdatePortfolio')->middleware('auth');

// Tampilan Admin
Route::get('/depanel/admin', [PageControl::class, 'login'])->name('login')->middleware('guest');
Route::get('/depanel', [PageControl::class, 'AdminIndex'])->name('AdminIndex')->middleware('auth');
Route::get('/depanel/portfolio', [PageControl::class, 'AdminPortfolio'])->name('AdminPortfolio')->middleware('auth');
Route::get('/depanel/portfolio/store', [PageControl::class, 'CreatePortfolio'])->name('CreatePortfolio')->middleware('auth');
Route::get('/depanel/portfolio/{id}/update', [PageControl::class, 'UpdatePortfolio'])->name('UpdatePortfolio')->middleware('auth');
