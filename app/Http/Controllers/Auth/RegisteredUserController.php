<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Compte;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;
use Illuminate\Validation\Rules;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255',
            'email' => ['required','email', 'max:255' , 'unique:'.Compte::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $user = Compte::create([
            'NOM' => $request->surname,
            'PRENOM' => $request->name,
            'LOGIN' => $request->login,
            'MOT_DE_PASSE' => Hash::make($request->password),
            'TYPE_COMPTE' => 2,
            'EMAIL' => $request->email,
            'ESTDIRIGEANT' => 0,
        ]);

        event(new Registered($user));

        Auth::login($user);

        return redirect(RouteServiceProvider::HOME);
    }
}
