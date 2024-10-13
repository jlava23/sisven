<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/categories', [CategoryController::class, 'index'])->name('categories.index'); // Mostrar todas las categorías
    Route::get('/categories/create', [CategoryController::class, 'create'])->name('categories.create'); // Formulario para crear nueva categoría
    Route::post('/categories', [CategoryController::class, 'store'])->name('categories.store'); // Guardar la nueva categoría
    Route::get('/categories/{category}/edit', [CategoryController::class, 'edit'])->name('categories.edit'); // Formulario para editar categoría
    Route::put('/categories/{category}', [CategoryController::class, 'update'])->name('categories.update'); // Actualizar la categoría
    Route::delete('/categories/{category}', [CategoryController::class, 'destroy'])->name('categories.destroy'); // Eliminar una categoría
});


require __DIR__.'/auth.php';
