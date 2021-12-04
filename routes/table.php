<?php
use App\Http\Controllers\TableController;

Route::group(['prefix' => 'table', 'as' => 'table.'], function () {
    Route::get('/', [TableController::class, 'index'])->name('index');
});
