<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUserRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Inertia\Response;
use Inertia\Inertia;

class UserController extends Controller
{
    public function index(): Response
    {
        return inertia('Users/Index', [
            'users' => User::all(),
        ]);
    }

    public function create(): Response
    {
        return inertia('Users/Create');
    }

    public function store(StoreUserRequest $request): Response
    {
        $user = new User();
        $user->name = $request->first_name . ' ' . $request->last_name;
        $user->email = $request->email;
        $user->password = Hash::make('password');
        $user->save();

        return inertia('Users/Show', ['user' => $user]);
    }
}
