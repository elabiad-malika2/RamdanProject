<?php

use App\Http\Controllers\ProfileController;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ExperienceController;
use App\Http\Controllers\RecipeController;
use App\Http\Controllers\CommentController;


Route::post('/recettes/{recipe}/comment', [CommentController::class, 'store'])->name('comments.store');
Route::get('/test', [CategoryController::class, 'index'])->name('categories.index');
Route::get('/experiences', [ExperienceController::class, 'index'])->name('experiences.home');
Route::post('/experiences', [ExperienceController::class, 'store'])->name('experiences.store');
Route::post('/experiences/{experience_id}/comments', [ExperienceController::class, 'storeComment'])->name('experiences.storeComment');


Route::get('/recettes', [RecipeController::class, 'index'])->name('recettes.index');
Route::post('/recettes', [RecipeController::class, 'store'])->name('recettes.store');


Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('home');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
