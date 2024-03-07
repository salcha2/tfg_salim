<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User; // Asegúrate de importar el modelo User

class RegisterController extends Controller
{
    /**
     * Muestra el formulario de registro.
     *
     * @return \Illuminate\View\View
     */
    public function showRegistrationForm()
    {
        return view('auth.register');
    }

    /**
     * Procesa el formulario de registro.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function register(Request $request)
{
    // Valida los datos del formulario
    $validatedData = $request->validate([
        'nombre' => 'required|string|max:255',
        'apellido' => 'required|string|max:255',
        'email' => 'required|string|email|max:255|unique:usuarios',
        'telefono' => 'required|string|max:255',
        'institucion' => 'required|string|max:255',
        'username' => 'required|string|max:255|unique:usuarios',
        'password' => 'required|string|min:8|confirmed',
    ]);

    // Crea un nuevo usuario en la base de datos
    $user = User::create([
        'nombre' => $validatedData['nombre'],
        'apellido' => $validatedData['apellido'],
        'email' => $validatedData['email'],
        'telefono' => $validatedData['telefono'],
        'institucion' => $validatedData['institucion'],
        'username' => $validatedData['username'],
        'password' => bcrypt($validatedData['password']),
    ]);

    // Redirige al usuario a la página de inicio de sesión
    return redirect()->route('login')->with('success', '¡Registro exitoso! Por favor inicia sesión.');
    }  

    
}
