<?php

use App\Http\Controllers\Api\CategoryController;
use App\Http\Controllers\Api\ItemController;
use App\Http\Controllers\Api\LowStockItemController;
use App\Http\Controllers\Api\StockSummaryController;
use App\Http\Controllers\Api\SupplierController;
use Illuminate\Support\Facades\Route;

Route::get('/items', [ItemController::class, 'index']);
Route::post('/items', [ItemController::class, 'store']);

Route::get('/categories', [CategoryController::class, 'index']); 
Route::post('/categories', [CategoryController::class, 'store']);


Route::get('/suppliers', [SupplierController::class, 'index']); 
Route::post('/suppliers', [SupplierController::class, 'store']);

Route::get('/stock-summary', [StockSummaryController::class, 'index']); 
Route::get('low-stock/{stock}', [LowStockItemController::class, 'index']); 


