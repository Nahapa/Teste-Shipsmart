<?php

use App\Http\Controllers\Api\AddressControllerApi;
use App\Http\Controllers\Api\ContactControllerApi;
use App\Http\Controllers\Api\StateControllerApi;
use Illuminate\Support\Facades\Route;

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

Route::get('address/cep/{cep}', [AddressControllerApi::class, 'cep']);
Route::apiResource('contacts', ContactControllerApi::class);
Route::get('states', [StateControllerApi::class, 'index']);
