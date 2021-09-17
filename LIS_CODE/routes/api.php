<?php

use App\Http\Controllers\frontend\payment\MpesaController;
use App\Http\Controllers\frontend\payment\MpesaResponsesController;
use Illuminate\Http\Request;
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

Route::post('validation', [MpesaResponsesController::class, 'validation']);
Route::post('confirmation', [MpesaResponsesController::class, 'confirmation']);
Route::post('stkPush/{id}/{user}/{address}/{city}/{country}/{postal_code}', [MpesaResponsesController::class, 'stkPush']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
