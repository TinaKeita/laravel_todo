<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Validation\Rules\Password;
use Illuminate\Validation\ValidationException;

class SessionController extends Controller
{
    public function destroy() {
        Auth::logout();
        return redirect("/");
    }

    public function create(){
        return view("auth.login");
    }

    public function store(Request $request) {
        $validated = $request->validate([

            "email" => ['required', 'email'],
            "password" => ["required", Password::min(6)->numbers()->letters()->symbols()]
        ]);
    
        
    if (!Auth::attempt($validated)) {
        throw ValidationException::withMessages([
            "email" => "Nepareiz e-pasts vai parole"
          ]);
    }
    else{
        $request->session()->regenerate();
        return redirect("/");
    }    
    }
}
