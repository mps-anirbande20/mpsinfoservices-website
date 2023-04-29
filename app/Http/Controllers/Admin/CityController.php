<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\City;

class CityController extends Controller
{
    public function index()
    {
        return view('admin.citylist',[
            'page'  =>  'City',
            'records' => City::all()
        ]);
    }

    public function create()
    {
        return view('admin.cityform',[
            'page'  =>  'City',
        ]);
    }

    public function store(Request $request)
    {
        City::create([
            'title_en'  =>  $request->title_en,
            'slug'  =>  slug($request->title_en),
            'title_fr'  =>  $request->title_fr,
            'status'  =>  $request->status,
        ]);
        return redirect('/admin/city/create')->with('completed', 'Data has been saved!');
    }

    public function edit($id)
    {
        return view('admin.cityform',[
            'page'  =>  'City',
            'data'  =>  City::where('id',$id)->first(),
        ]);
    }

    public function update(Request $request, $id)
    {
        City::where('id',$id)->update([
            'title_en'  =>  $request->title_en,
            'slug'  =>  slug($request->title_en),
            'title_fr'  =>  $request->title_fr,
            'status'  =>  $request->status,
        ]);
        return redirect('/admin/city/edit/'.$id)->with('completed', 'Data has been saved!');
    }

    public function destroy($id)
    {
        $city = City::find($id);
        $city->delete();
        return redirect('/admin/city')->with('completed', 'Data has been Deleted!');
    }
}
