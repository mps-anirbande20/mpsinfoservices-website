<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function index()
    {
        return view('admin.categorylist',[
            'page'  =>  'Category',
            'records' => Category::all()
        ]);
    }

    public function create()
    {
        return view('admin.categoryform',[
            'page'  =>  'Category',
        ]);
    }

    public function store(Request $request)
    {
        Category::create([
            'title_en'  =>  $request->title_en,
            'slug'  =>  slug($request->title_en),
            'title_fr'  =>  $request->title_fr,
            'status'  =>  $request->status,
        ]);
        return redirect('/admin/category/create')->with('completed', 'Data has been saved!');
    }

    public function edit($id)
    {
        return view('admin.categoryform',[
            'page'  =>  'Category',
            'data'  =>  Category::where('id',$id)->first(),
        ]);
    }

    public function update(Request $request, $id)
    {
        Category::where('id',$id)->update([
            'title_en'  =>  $request->title_en,
            'slug'  =>  slug($request->title_en),
            'title_fr'  =>  $request->title_fr,
            'status'  =>  $request->status,
        ]);
        return redirect('/admin/category/edit/'.$id)->with('completed', 'Data has been saved!');
    }

    public function destroy($id)
    {
        $category = Category::find($id);
        $category->delete();
        return redirect('/admin/category')->with('completed', 'Data has been Deleted!');
    }
}
