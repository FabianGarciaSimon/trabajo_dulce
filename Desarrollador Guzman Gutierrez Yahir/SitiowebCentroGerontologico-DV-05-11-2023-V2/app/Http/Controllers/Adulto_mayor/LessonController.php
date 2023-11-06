<?php

namespace App\Http\Controllers\Adulto_mayor;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Laravel\Fortify\Http\Controllers\AuthenticatedSessionController;

class LessonController extends AuthenticatedSessionController
{
    public function index()
    {
        return view('adulto_mayor.lessons.index');
    }
}
