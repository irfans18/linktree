<?php

use App\Http\Controllers\GoToLink;
use App\Http\Livewire\AllLink;
use App\Http\Livewire\LinkManager;
use App\Http\Livewire\Test;
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

Route::get('/{param}', [GoToLink::class, 'go']);

// Route::get('/home/dashboard', [LinkManager::class, 'render'])->middleware(['auth'])->name('dashboard');
Route::get('/home/all', function () {
   return view('admin');
})->middleware(['auth', 'admin'])->name('all');

Route::middleware(['auth:sanctum'])->group(function () {
   Route::get('/home/dashboard', function () {
      return view('dashboard');
   })->name('dashboard');
});


require __DIR__ . '/auth.php';
