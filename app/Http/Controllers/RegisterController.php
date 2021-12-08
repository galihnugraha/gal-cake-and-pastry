<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Symfony\Contracts\Service\Attribute\Required;

class RegisterController extends Controller
{
    public function index() {
        return view('register.index', [
            "title" => "Register Page",
            "messageVerif" => ""
        ]);
    }

    public function store(Request $request) {
        $validatedData = $request->validate([
            'name' => ['required', 'max:255'],
            'email' => ['required', 'email', 'unique:users'],
            'password' => ['required', 'min:6', 'max:255'],
            'passwordverif' => ['required', 'min:6', 'max:255']
        ]);

        if($request->password === $request->passwordverif) {
            $validatedData["password"] = bcrypt($validatedData["password"]);
            User::create($validatedData);
            return redirect('/login')->with('success', 'Registration Successful! Please Log in!');
        } else {
            return view('register.index', [
                "title" => "Register Page",
                "messageVerif" => "Password doesn't match with the confirmation"
            ]);
        }
    }
}
