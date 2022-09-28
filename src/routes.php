
<?php

use Fallah\Crud\Controllers\CrudController;
use Illuminate\Support\Facades\Route;


Route::name('crud.')->prefix('admin')
    ->group(function (){
        Route::get('showPost',[CrudController::class,'index'])
            ->name('showPost');

        Route::get('create',[CrudController::class,'create'])->name('create');

        Route::get('show/{id}',[CrudController::class,'show'])->name('show');
        Route::get('edit/{id}',[CrudController::class,'edit'])->name('edit');
        Route::post('store',[CrudController::class,'store'])->name('store') ;
        Route::put('update/{id}',[CrudController::class,'update'])->name('update') ;
        Route::delete('delete/{id}',[CrudController::class,'destroy'])->name('destroy') ;
   });


