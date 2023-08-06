<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }

    public function signup()
    {
        return view('auth.signup');
    }

    public function signupform(Request $request)
    {
        $userinsert = new User();
        $userinsert->name = $request->name;
        $userinsert->address = $request->address;
        $userinsert->city = $request->city;
        $userinsert->state = $request->state;
        $userinsert->email = $request->email;
        $userinsert->password = Hash::make( $request->password);
        $userinsert->role_id = 2;
        $userinsert->save();

        return redirect('login');

    }

    public function customelogin(Request $request)
    {
        $email = $request->email;
        $password = $request->password;

        if(Auth::attempt(['email' => $email, 'password' => $password]))
        {
            if(auth()->user()->role_id == '1')
            {
                return redirect('admindashboard');
            }
            elseif(auth()->user()->role_id == '2')
            {
                return redirect('userdashboard');
            }
            else
            {
                return redirect('login');
            }

        }
        else
        {
            return redirect('login');
        }


    }

}
