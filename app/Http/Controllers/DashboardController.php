<?php

namespace App\Http\Controllers;

use App\Models\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        $user = Auth::user();

        if($user){
            $user->load('employee.position','employee.departement');
        
        }
        return view('dashboard',compact('user'));
    }
}
