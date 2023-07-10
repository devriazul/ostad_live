<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegistrationRequest;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RegistrationController extends Controller
{
    public function create()
    {
        return view('registration.create');
    }

    public function store(RegistrationRequest $request)
    {
        // Create a new user based on the validated form data
        $user = new User();
        $user->name = $request->validated()['name'];
        $user->email = $request->validated()['email'];
        $user->password = Hash::make($request->validated()['password']);
        $user->save();

        // Optionally, you can log the user in after registration
        // Auth::login($user);

        // Return a response or redirect as needed
        return redirect()->route('home')->with('success', 'Registration successful!');
    }
}
