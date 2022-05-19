<?php



Route::get('category/{id}',[\App\Http\Controllers\CategoryController::class,'get']);
Route::get('categories',[\App\Http\Controllers\CategoryController::class,'categories']);
