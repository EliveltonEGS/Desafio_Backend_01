<?php

use App\Http\Controllers\CustomerController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::controller(CustomerController::class)->group(function() {
    Route::get('/customers', 'index')->name('customer.index');
    Route::post('/customers', 'store')->name('customer.store');
    Route::get('/customers/{identification}', 'show')->name('customer.show');
    Route::delete('/customers/{identification}', 'delete')->name('customer.delete');
    Route::put('/customers/{identification}', 'update')->name('customer.update');
});
