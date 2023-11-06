<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;

class LoginRedirectController
{

    public function __invoke()
    {
        if (auth()->user()->role_id == 1) {
            return redirect('admin/users');
        }

        if (auth()->user()->role_id == 3) {
            return redirect('doctor/servicios');
        }
    }
}
