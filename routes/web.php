<?php

use App\Models\User;
use Illuminate\Support\Facades\Route;

Route::get('/', fn()=>redirect()->route('users.index'));

Route::get('/users', function() {
    $users = User::all();
    return view('users.index', compact('users'));
})->name('users.index');

Route::get('/users/{user}', function(User $user){
    return view('users.show', compact('user'));
})->name('users.show');


