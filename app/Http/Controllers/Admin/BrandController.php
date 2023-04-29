<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Brand;

class BrandController extends Controller
{
    public function index()
    {
        return view('admin.brandlist',[
            'page'  =>  'Brand',
            'records' => Brand::all()
        ]);
    }

    public function create()
    {
        return view('admin.brandform',[
            'page'  =>  'Brand',
        ]);
    }

    public function store(Request $request)
    {
        $logo = 'noimg.png';
        if($request->file('logo')){
            $logo = rand().'.'.$request->logo->extension();
            $request->file('logo')->move(public_path('uploads/'), $logo);
        }
        Brand::create([
            'title_en'  =>  $request->title_en,
            'logo'  =>  $logo,
            'title_fr'  =>  $request->title_fr,
            'slug'  =>  slug($request->title_en),
            'status'  =>  $request->status,
        ]);
        return redirect('/admin/brand/create')->with('completed', 'Data has been saved!');
    }

    public function edit($id)
    {
        return view('admin.brandform',[
            'page'  =>  'Brand',
            'data'  =>  Brand::where('id',$id)->first(),
        ]);
    }

    public function update(Request $request, $id)
    {
        $logo = Brand::where('id',$id)->first()->logo; 
        if($request->file('logo')){
            if($logo != '')
                unlink(public_path('uploads/'.$logo));
            $logo = rand().'.'.$request->logo->extension();
            $request->file('logo')->move(public_path('uploads/'), $logo);
        }
        Brand::whereId($id)->update([
            'title_en'  =>  $request->title_en,
            'logo'  =>  $logo,
            'title_fr'  =>  $request->title_fr,
            'slug'  =>  slug($request->title_en),
            'status'  =>  $request->status,
        ]);
        return redirect('/admin/brand/edit/'.$id)->with('completed', 'Data has been saved!');
    }

    public function destroy($id)
    {
        $brand = Brand::find($id);
        $brand->delete();
        return redirect('/admin/brand')->with('completed', 'Data has been Deleted!');
    }
}
