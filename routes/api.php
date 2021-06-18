<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Resources\ContactResource;
use App\Models\Contact;
use App\Http\Controllers\UserController;

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

Route::post('/login', [UserController::class, 'login']);
Route::middleware('auth:sanctum')->get('/user', [UserController::class, 'index']);


Route::get('/contact/{id}', function ($id) {
    return new ContactResource(Contact::findOrFail($id));
});

/*
Route::get('/contacts', function () {
    return ContactResource::collection(Contact::all());
});
*/


Route::middleware('auth:sanctum')->get('/contacts', function () {
    return ContactResource::collection(Contact::all());
});
