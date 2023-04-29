<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Brand;
use App\Models\Service;
use App\Models\City;

class ServiceController extends Controller
{
    public function index()
    {
        return view('admin.servicelist',[
            'page'  =>  'Service',
            'records' => Service::all()
        ]);
    }

    public function create()
    {
        return view('admin.serviceform',[
            'page'  =>  'Service',
            'categories' => Category::where('status','Active')->get(),
            'cities' => City::where('status','Active')->get(),
            'brands' => Brand::where('status','Active')->get(),
        ]);
    }

    public function store(Request $request)
    {
        $image = 'noimg.png';
        if($request->file('image')){
            $image = rand().'.'.$request->image->extension();
            $request->file('image')->move(public_path('uploads/'), $image);
        }
        Service::create([
            'title_en'  =>  $request->title_en,
            'image'  =>  $image,
            'title_fr'  =>  $request->title_fr,
            'slug'  =>  slug($request->title_en),
            'status'  =>  $request->status,
            'category'  =>  $request->category,
            'brand'  =>  $request->brand,
            'city'  =>  implode(',',$request->city),
            'price'  =>  $request->price,
            'details'   =>  $request->details,
            'binding'   =>  $request->binding,
            'address'   =>  $request->address,
            'supply'   =>  $request->supply,
            'unit'   =>  $request->unit,
            'feature1'  =>  $request->feature1,
            'feature2'  =>  $request->feature2,
            'feature3'  =>  $request->feature3,
            'feature4'  =>  $request->feature4,
            'feature5'  =>  $request->feature5,
        ]);
        return redirect('/admin/service/create')->with('completed', 'Data has been saved!');
    }

    public function edit($id)
    {
        return view('admin.serviceform',[
            'page'  =>  'Service',
            'data'  =>  Service::where('id',$id)->first(),
            'categories' => Category::where('status','Active')->get(),
            'cities' => City::where('status','Active')->get(),
            'brands' => Brand::where('status','Active')->get(),
        ]);
    }

    public function update(Request $request, $id)
    {
        $image = Service::where('id',$id)->first()->image; 
        if($request->file('image')){
            if($image != '')
                unlink(public_path('uploads/'.$image));
            $image = rand().'.'.$request->image->extension();
            $request->file('image')->move(public_path('uploads/'), $image);
        }
        Service::whereId($id)->update([
            'title_en'  =>  $request->title_en,
            'image'  =>  $image,
            'title_fr'  =>  $request->title_fr,
            'slug'  =>  slug($request->title_en),
            'status'  =>  $request->status,
            'category'  =>  $request->category,
            'brand'  =>  $request->brand,
            'city'  =>  implode(',',$request->city),
            'price'  =>  $request->price,
            'details'   =>  $request->details,
            'binding'   =>  $request->binding,
            'address'   =>  $request->address,
            'supply'   =>  $request->supply,
            'unit'   =>  $request->unit,
            'feature1'  =>  $request->feature1,
            'feature2'  =>  $request->feature2,
            'feature3'  =>  $request->feature3,
            'feature4'  =>  $request->feature4,
            'feature5'  =>  $request->feature5,
        ]);
        return redirect('/admin/service/edit/'.$id)->with('completed', 'Data has been saved!');
    }

    public function destroy($id)
    {
        $service = Service::find($id);
        $service->delete();
        return redirect('/admin/service')->with('completed', 'Data has been Deleted!');
    }
}
