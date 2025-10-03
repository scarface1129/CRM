<?php

namespace App\Http\Controllers;

use App\Models\User;
use Inertia\Inertia;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::query()
            ->when(request('search'), function ($query, $search) {
                $query->where('name', 'like', "%{$search}%")
                    ->orWhere('email', 'like', "%{$search}%");
            })
            ->paginate(10)
            ->withQueryString()
            ->through(fn($user) => [
                'name' => $user->name,
                'id' => $user->id,
                'email' => $user->email,
                'created_at' => $user->created_at->toDateTimeString()
            ]);
        return Inertia::render(
            'Users/Index',
            [
                'users' => $users,
                'filters' => request()->only(['search'])
            ]
        );
    }

    public function create(){
        return Inertia::render('Users/Create');
    }
}
