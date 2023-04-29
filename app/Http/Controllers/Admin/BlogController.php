<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\BlogCategory;

class BlogController extends Controller
{
    public function index()
    {
        return view('admin.bloglist',[
            'page'  =>  'Blogs',
            'records' => Blog::all(),
        ]);
    }

    public function create()
    {
        return view('admin.blogform',[
            'page'  =>  'Blogs',
            'blogcategories' => BlogCategory::where('status','Active')->get(),
        ]);
    }

    public function store(Request $request)
    {
        $thumb = 'noimg.png';
        if($request->file('thumb')){
            $thumb = rand().'.'.$request->thumb->extension();
            $request->file('thumb')->move(public_path('uploads/'), $thumb);
        }
        $image = 'noimg.png';
        if($request->file('image')){
            $image = rand().'.'.$request->image->extension();
            $request->file('image')->move(public_path('uploads/'), $image);
        }
        Blog::create([
            'title_en'  =>  $request->title_en,
            'title_fr'  =>  $request->title_fr,
            'slug'  =>  slug($request->title_en),
            'status'  =>  $request->status,
            'thumb'  =>  $thumb,
            'detail_en'  =>  $request->detail_en,
            'detail_fr'  =>  $request->detail_fr,
            'category'  =>  $request->category,
            'image'  =>  $image,
            'info_en'  =>  $request->info_en,
            'info_fr'  =>  $request->info_fr,
        ]);
        return redirect('/admin/blog/create')->with('completed', 'Data has been saved!');
    }

    public function edit($id)
    {
        return view('admin.blogform',[
            'page'  =>  'Blogs',
            'data'  =>  Blog::where('id',$id)->first(),
            'blogcategories' => BlogCategory::where('status','Active')->get(),
        ]);
    }

    public function update(Request $request, $id)
    {
        Blog::where('id',$id)->update([
            'title_en'  =>  $request->title_en,
            'title_fr'  =>  $request->title_fr,
            'slug'  =>  slug($request->title_en),
            'status'  =>  $request->status,
            'detail_en'  =>  $request->detail_en,
            'detail_fr'  =>  $request->detail_fr,
            'category'  =>  $request->category,
            'info_en'  =>  $request->info_en,
            'info_fr'  =>  $request->info_fr,
        ]);
        return redirect('/admin/blog/edit/'.$id)->with('completed', 'Data has been saved!');
    }

    public function destroy($id)
    {
        $blog = Blog::find($id);
        $blog->delete();
        return redirect('/admin/blog')->with('completed', 'Data has been Deleted!');
    }
}
