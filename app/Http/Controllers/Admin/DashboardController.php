<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index() {
        // salvo in $user l'user registrato nella tabella User
        $user= Auth::user();
        // dd($user);  
        return view('admin.dashboard', compact('user'));
    }

}
