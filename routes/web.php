<?php

use App\Http\Controllers\ProfileController;
use App\Models\Food;
use Illuminate\Support\Facades\Route;

require __DIR__.'/dashboad.php';
require __DIR__.'/auth.php';


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/', function(){
    return view('front.home');
})->name('front.home');

Route::get('/food', function(){
    return view('front.food', [
        'foodItems' => Food::query()->orderBy('created_at')->paginate(10)
    ]);
})->name('front.food');

Route::get('/calculator', function(){
    return view('front.calculator');
})->name('front.calculator');

require __DIR__.'/auth.php';
