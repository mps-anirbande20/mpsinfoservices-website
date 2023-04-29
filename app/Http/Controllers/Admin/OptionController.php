<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Option;

class OptionController extends Controller
{
    public function index()
    {
        return view('admin.options',[
            'page'  =>  'Settings'
        ]);
    }

    public function update(Request $request)
    {
        foreach($request->all() as $name => $value){
            if($name=='sitelogo'||$name=='favicon'){
                $file = getoption($name)->value;
                if($file!='' && $file!='noimg.png')
                    unlink(public_path('uploads/').$file);
                $file = rand().'.'.$request->$name->extension();  
                $request->file($name)->move(public_path('uploads/'), $file);
                $value = $file;
            }
            Option::where("name", $name)->update(["value" => $value]);
        }
        return redirect('admin/options')->with('completed', 'Data has been saved!');
    }
}
