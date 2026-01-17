<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $user = Auth::user();

        if ($user) {
            $user->load('employee');
        }

        return view('home', compact('user'));
    }
}
