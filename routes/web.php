<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ContactController;
/*USE
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//----------------------------- home route -----------------------------//
Route::get('/', [PageController::class,'index'])->name('index');
//----------------------------- contact routes -----------------------------//
Route::get('/contact', [PageController::class,'contact'])->name('contact');
Route::post('/contact-submit', [ContactController::class,'store'])->name('contacts.store');
//----------------------------- categories routes -----------------------------//
Route::resource('/categories', CategoryController::class);
Route::delete('/category/{id}', [CategoryController::class,'clear'])->name('categories.clear');
//----------------------------- products routes -----------------------------//
Route::resource('/products' , ProductController::class);

