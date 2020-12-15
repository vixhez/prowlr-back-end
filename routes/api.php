<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\Animals;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get("/animals/ranking", [Animals::class, "ranking"]);
//need to get it again incase other people have voted in the meantime

Route::get("/animals", [Animals::class, "index"]);

Route::patch('/animals/{animal}/likes', [Animals::class, "update"]);