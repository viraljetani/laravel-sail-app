<?php

use App\Http\Controllers\RolesController;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth'])->group(function () {
    Route::get('/roles', [RolesController::class,'index'])->name('roles');
    Route::get('/roles/{role}', [RolesController::class,'show'])->name('roles.show');
    Route::get('/roles/create',[RolesController::class, 'create'])->name('roles.create');
    Route::get('/roles/edit/{role}',[RolesController::class, 'edit'])->name('roles.edit');
    Route::patch('/roles/{role}',[RolesController::class,'update'])->name('roles.update');
    Route::post('/roles',[RolesController::class, 'store'])->name('roles.store');
    Route::delete('/roles/delete/{role}',[RolesController::class, 'destroy'])->name('roles.delete');

});

