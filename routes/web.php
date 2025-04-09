<?php
use App\Http\Controllers\CategoryController;

use Illuminate\Support\Facades\Route;


Route::get('/categories', [CategoryController::class, 'getAllCategories']);
Route::get('categories/active', [CategoryController::class, 'getActiveCategories']);
Route::get('categories/inactive', [CategoryController::class, 'getInactiveCategories']);
Route::get('categories/{id}', [CategoryController::class, 'getCategory']);
Route::post('categories', [CategoryController::class, 'createCategory']);
Route::put('categories/{id}', [CategoryController::class, 'updateCategory']);
Route::delete('categories/{id}', [CategoryController::class, 'deleteCategory']);
