<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\session;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function admindashboard()
    {
        return view('admin.admin-dashboard');
    }

    public function adminlogout()
    {
        Session::flush();

        Auth::logout();

        return redirect('login');
    }


}
