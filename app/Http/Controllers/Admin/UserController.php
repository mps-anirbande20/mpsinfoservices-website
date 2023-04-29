<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        return view('admin.login');
    }

    public function login(Request $request)
    {
        //echo Hash::make('admin');
        if(Auth::attempt(['email'=>$request->email, 'password'=>$request->password ])){

            $request->session()->put([
                'admin_id'  =>  Auth::id()
            ]);

            return redirect('admin/dashboard');
        }else{

            return back()->with('fail','Invalid login !');
        }
    }

    public function logout(Request $request){
        session()->pull('admin_id');
        return redirect()->to('/admin')->with('msg','Logout Successfully.');
    }
}
