<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('login');
    }

    public function processLogin(Request $request)
    {
        // Aquí puedes agregar la lógica para validar las credenciales, si es necesario.
        // Por ejemplo, podrías verificar en la base de datos o algún otro almacenamiento.

        // En este ejemplo, simplemente redirigimos a la página de inicio si las credenciales son válidas.
        return redirect('/');
    }
}

