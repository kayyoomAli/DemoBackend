<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\session;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Category;
use App\Models\Product;

class UserController extends Controller
{
    public function userdashboard()
    {
        return view('user.user-dashboard');
    }


    public function userprofile()
    {
        $userprofile = Auth::user()->id;

        $finddata = User::find($userprofile);
        return view('user.userprofile',compact('finddata'));

    }

    public function update(Request $request)
    {
        $userupdate = $request->user_id;
        $update = User::find($userupdate);
        $update->name = $request->name;
        $update->address = $request->address;
        $update->city = $request->city;
        $update->state = $request->state;
        $update->email = $request->email;
        $update->save();

        return redirect('userdashboard');

    }

    public function userlogout()
    {
        Session::flush();

        Auth::logout();

        return redirect('login');
    }

    public function catogerieslist(Request $request)
    {

        $clothcategory = Category::all();

        return view('user.categorylist',compact('clothcategory'));
    }

    public function showproduct(Request $request)
    {

        $showproduct = Product::where('category_id','2')->get();
        return view('user.showproduct',compact('showproduct'));
    }

}
