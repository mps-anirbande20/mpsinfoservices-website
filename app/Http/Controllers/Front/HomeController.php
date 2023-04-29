<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
//use App\Models\City;

class HomeController extends Controller
{
    public function index()
    {
        return view('front.index',[
            'title'  =>  'Welcome to MPS Info Services',
            //'cities' => City::where('status','Active')->get(),
        ]);
    }    
}
