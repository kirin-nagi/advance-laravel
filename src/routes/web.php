<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\MiddlewareController;
use App\Http\Controllers\SessionController;
use APP\Http\Controllers\AuthController;
use App\Models\Person;
use App\Models\Product;
use App\Http\Controllers\PenController;

Route::get('/', [AuthorController::class, 'index']);
Route::get('/find', [AuthorController::class, 'find']);
Route::post('/find', [AuthorController::class, 'search']);
Route::get('/add', [AuthorController::class, 'add']);
Route::post('/add', [AuthorController::class, 'create']);
Route::get('/edit', [AuthorController::class, 'edit']);
Route::post('/edit', [AuthorController::class, 'update']);
Route::get('/delete', [AuthorController::class, 'delete']);
Route::post('/delete', [AuthorController::class, 'remove']);
Route::get('/middleware', [MiddlewareController::class, 'index']);
Route::post('/middleware', [MiddlewareController::class, 'post']);
Route::get('/session', [sessionController::class, 'getSes']);
Route::post('/session', [SessionController::class, 'postSes']);
Route::middleware('auth')->group(function(){
    Route::get('/',[AUthController::class, 'index']);
});
Route::get('/softdelete', function () {
    Person::find(1)->delete();
});
Route::get('softdelete/get', function(){
    $person = Person::onlyTrashed()->get();
    dd($person);
});
Route::get('/uuid',function() {
    $products = Product::all();
    foreach($products as $product){
        echo $product . '<br>';
    }
});
Route::get('fill', [PenController::class, 'fillPen']);
Route::get('create', [PenController::class, 'createPen']);
Route::get('insert', [PenController::class, 'insertPen']);