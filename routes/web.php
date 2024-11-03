<?php

use Illuminate\Support\Facades\Route;
use App\Services\CustomerServices;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
     $a = app(CustomerServices::class)->getCustomerERP(1);
     dd($a);
});
