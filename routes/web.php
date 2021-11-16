<?php

use App\Http\Controllers\GoToLink;
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

Route::get('/{param}', [GoToLink::class, "go"]);

// Route::get('/dashboard', function () {
//    return view('dashboard');
// })->middleware(['auth'])->name('dashboard');

Route::middleware(['auth:sanctum', 'verified'])->group(function () {
   Route::get('/dashboard', function () {
      return view('dashboard');
   })->name('dashboard');

   Route::get('link', LinkManager::class)->name('link');
});

require __DIR__ . '/auth.php';
