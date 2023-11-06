<?php

namespace App\Http\Controllers\AdultoMayor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class LoginController extends Controller
{
    public function create()
    {
        return view('auth.login-adulto-mayor');
    }

    public function store(Request $request)
    {
        $request->validate([
            'number_phoneViejito' => 'required', // Asegúrate de que la validación esté configurada correctamente
        ]);
        $numero = $request->input('number_phoneViejito');

        $user = User::where('number_phoneViejito', $numero)->first();

        if ($user) {
            // Autenticar al usuario
            Auth::login($user);

            return redirect('/adulto_mayor/lessons'); // Redirige a /adulto_mayor/lessons si la autenticación es exitosa
        } else {
            return back()->withErrors(['number_phoneViejito' => 'El número de teléfono no es válido.']); // Maneja el caso de autenticación fallida
        }
    }
}
