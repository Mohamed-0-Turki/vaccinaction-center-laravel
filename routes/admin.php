<?php

use Illuminate\Support\Facades\Route;

Route::middleware(['auth'])->prefix('admin')->name('admin.')->group(function () {

    // Cities CRUD pages
    Route::get('cities', fn() => response('<h1>Cities Index</h1>'));
    Route::get('cities/create', fn() => response('<h1>Create City</h1>'));
    Route::get('cities/{id}/edit', fn($id) => response("<h1>Edit City #$id</h1>"));

    // Vaccines CRUD pages
    Route::get('vaccines', fn() => response('<h1>Vaccines Index</h1>'));
    Route::get('vaccines/create', fn() => response('<h1>Create Vaccine</h1>'));
    Route::get('vaccines/{id}/edit', fn($id) => response("<h1>Edit Vaccine #$id</h1>"));

    // Centers CRUD pages
    Route::get('centers', fn() => response('<h1>Centers Index</h1>'));
    Route::get('centers/create', fn() => response('<h1>Create Center</h1>'));
    Route::get('centers/{id}/edit', fn($id) => response("<h1>Edit Center #$id</h1>"));

    // Admin management
    Route::get('admins', fn() => response('<h1>Admins List</h1>'));
    Route::get('admins/create', fn() => response('<h1>Add Admin</h1>'));
});
