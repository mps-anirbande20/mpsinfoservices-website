<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index()
    {
        return view('front.service',[
            'title'  =>  'Services | MPS Info Services',
        ]);
    }
}
