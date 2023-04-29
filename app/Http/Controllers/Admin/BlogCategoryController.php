<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\BlogCategory;

class BlogCategoryController extends Controller
{
    public function index()
    {
        return view('admin.blogcategorylist',[
            'page'  =>  'Blog Category',
            'records' => BlogCategory::all()
        ]);
    }

    public function create()
    {
        return view('admin.blogcategoryform',[
            'page'  =>  'Blog Category',
        ]);
    }

    public function store(Request $request)
    {
        BlogCategory::create([
            'title_en'  =>  $request->title_en,
            'slug'  =>  slug($request->title_en),
            'title_fr'  =>  $request->title_fr,
            'status'  =>  $request->status,
        ]);
        return redirect('/admin/blogcategory/create')->with('completed', 'Data has been saved!');
    }

    public function edit($id)
    {
        return view('admin.blogcategoryform',[
            'page'  =>  'Blog Category',
            'data'  =>  BlogCategory::where('id',$id)->first(),
        ]);
    }

    public function update(Request $request, $id)
    {
        BlogCategory::where('id',$id)->update([
            'title_en'  =>  $request->title_en,
            'slug'  =>  slug($request->title_en),
            'title_fr'  =>  $request->title_fr,
            'status'  =>  $request->status,
        ]);
        return redirect('/admin/blogcategory/edit/'.$id)->with('completed', 'Data has been saved!');
    }

    public function destroy($id)
    {
        $category = BlogCategory::find($id);
        $category->delete();
        return redirect('/admin/blogcategory')->with('completed', 'Data has been Deleted!');
    }
}
