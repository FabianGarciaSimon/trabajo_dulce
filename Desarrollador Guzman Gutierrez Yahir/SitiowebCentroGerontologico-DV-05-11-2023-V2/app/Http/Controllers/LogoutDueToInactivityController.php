<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class LogoutDueToInactivityController extends Controller
{
    public function logoutDueToInactivity(Request $request)
    {
        // Agregar esta línea
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/'); // Puedes redirigir a donde desees después del cierre de sesión.
    }
}
