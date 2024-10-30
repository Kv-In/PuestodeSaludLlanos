<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'cui' => ['required', 'string', 'max:13', 'unique:users'],
            'name' => ['required', 'string', 'max:255'],
            'phone' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
           // 'role' => ['required', 'string', 'in:doctor,admin'], // Validar el campo de rol
        ]);

        dd($request->all());

        // Crear el usuario
        $user = User::create([
            'cui' => $request->cui,
            'name' => $request->name,
            'phone' => $request->phone,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        // Disparar el evento de usuario registrado
        event(new Registered($user));

        // Asignar el rol al usuario registrado
        $user->assignRole($request->role);

        // Autenticar al usuario
        Auth::login($user);

        // Redirigir al dashboard
        return redirect()->route('dashboard');
    }
}
