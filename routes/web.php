<?php

use App\Models\User;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('Home');
});

Route::get('/users', function () {
    // $users  = User::all()->map(fn($user) => [
    //     'name' => $user->name,
    //     'id' => $user->id,
    //     'email' => $user->email,
    //     'created_at' => $user->created_at->toDateTimeString()
    // ]);
    $users = User::paginate(10);
    return Inertia::render('Users',
        [
            'users' => $users,
        ]
    );
});

Route::get('/settings', function () {
    return Inertia::render('Settings');
});

Route::post('/logout', function () {
});