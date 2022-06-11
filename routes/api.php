<?php

use App\Http\Controllers\JabatanController;
use App\Http\Controllers\KariyawanController;

use Illuminate\Support\Facades\Route;



    Route::prefix('kariyawans')->group(function () {

        Route::post('create-new-kariyawan',[KariyawanController::class,'store']);
        Route::get('edit-kariyawan/{id}',[KariyawanController::class,'edit']);
        Route::put('update-kariyawan/{id}',[KariyawanController::class,'update']);
        Route::delete('delete-kariyawan/{id}',[KariyawanController::class,'delete']);
        Route::get('',[KariyawanController::class,'get']);


    });
    Route::prefix('jabatans')->group(function () {

        Route::get('',[JabatanController::class,'index']);


    });
