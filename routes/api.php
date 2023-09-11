<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use PhpParser\Node\Stmt\Return_;
use App\Http\Controllers\ProductApiController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

//CategoryApiController Controller


//ProductApiController Controller
//Get All Products
Route::get('/products', [ProductApiController::class ,'getProducts'] );
//get Single Product
Route::get('/products/{id}' , [ProductApiController::class , 'getProduct']);
//Save New Api Product
Route::post('/products' , [ProductApiController::class , 'storeProduct']);
//update Product Api
Route::put('/products/{id}',[ProductApiController::class,'updateProduct']);
//DELETE  Product Api
Route::delete('/products/{id}', [ProductApiController::class , 'deleteProduct']);
