<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class AdultoMayorLoginController extends Controller
{
    public function index()
    {
        return view('adulto_mayor.lessons.index');
    }
}
