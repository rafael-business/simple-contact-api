<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use Illuminate\Http\Request;
use App\Models\Contact;

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


Route::resource('contacts', ContactController::class);

Route::get('/contacts/{id}/delete', function ($id) {
    $contact = Contact::find($id);
    return view('contacts_delete', ['id' => $id, 'nome' => $contact->nome]);
});
