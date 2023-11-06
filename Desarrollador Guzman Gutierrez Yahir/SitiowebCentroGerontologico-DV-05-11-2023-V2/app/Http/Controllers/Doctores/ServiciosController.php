<?php

namespace App\Http\Controllers\Doctores;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Gate;

class ServiciosController extends Controller
// CourseController.php
{
    public function index()
    {
        if (Gate::denies('manage-servicios')) {
            abort(403);
        }

        return view('doctor.servicios.index');
    }
}
