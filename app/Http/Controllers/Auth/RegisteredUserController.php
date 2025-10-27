<?php

namespace App\Http\Controllers\Auth;

use App\Actions\Fortify\CreateNewUser;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RegisteredUserController extends Controller
{
    public function store(Request $request)
    {
        app(CreateNewUser::class)->create($request->all());

        // Redirect to login with success message
        return redirect()->route('login')->with('status', 'A verification email has been sent to your email address. Please verify your email before logging in.');
    }
}
