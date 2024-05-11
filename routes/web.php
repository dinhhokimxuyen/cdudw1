
<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\frontend\HomeController;
use App\Http\Controllers\frontend\ProductController;

use App\Http\Controllers\frontend\ContactController;
Route::get('/',[HomeController::Class,'index']);
Route::get('/san-pham',[ProductController::Class,'index']);

Route::get('/chi-tiet-san-pham/{slug}',[ProductController::Class,'product_detail']);

Route::get('/lien-he',[ContactController::Class,'index']);