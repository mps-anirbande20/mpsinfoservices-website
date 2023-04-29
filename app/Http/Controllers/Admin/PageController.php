<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Page;

class PageController extends Controller
{
    public function index()
    {
        return view('admin.pagelist',[
            'page'  =>  'Pages',
            'records' => Page::all()
        ]);
    }

    public function create()
    {
        return view('admin.pageform',[
            'page'  =>  'Pages',
        ]);
    }

    public function store(Request $request)
    {
        $banner = 'noimg.png';
        if($request->file('banner')){
            $banner = rand().'.'.$request->banner->extension();
            $request->file('banner')->move(public_path('uploads/'), $banner);
        }
        Page::create([
            'title'  =>  $request->title,
            'slug'  =>  slug($request->title),
            'banner'  =>  $banner,
            'status'  =>  $request->status,
            'content'  =>  $request->content,
        ]);
        return redirect('/admin/pages/create')->with('completed', 'Data has been saved!');
    }

    public function edit($id)
    {
        return view('admin.pageform',[
            'page'  =>  'Pages',
            'data'  =>  Page::where('id',$id)->first(),
        ]);
    }

    public function update(Request $request, $id)
    {
        $banner = Page::where('id',$id)->first()->banner; 
        if($request->file('banner')){
            if($banner != '')
                unlink(public_path('uploads/'.$banner));
            $banner = rand().'.'.$request->banner->extension();
            $request->file('banner')->move(public_path('uploads/'), $banner);
        }
        $slug = $request->slug==''?strtolower(str_replace(' ','-',$request->title)):$request->slug;
        Page::whereId($id)->update([
            'title'  =>  $request->title,
            'slug'  =>  slug($request->title),
            'banner'  =>  $banner,
            'status'  =>  $request->status,
            'content'  =>  $request->content,
        ]);

        if($id == 1){

            updateoption('homepage_about_text',$request->homepage_about_text);
            updateoption('homepage_about_link',$request->homepage_about_link);

            /*if($request->file('homepage_about_image')){

                $banner = rand().'.'.$request->homepage_about_image1->extension();

                $request->file('banner')->move(public_path('uploads/'), $banner);

            }*/
        }else if($id == 2){

            updateoption('contactpage_text1',$request->contactpage_text1);
            updateoption('contactpage_text2',$request->contactpage_text2);


        }





        return redirect('/admin/pages/edit/'.$id)->with('completed', 'Data has been saved!');
    }

    public function destroy($id)
    {
        $page = Page::find($id);
        $page->delete();
        return redirect('/admin/pages')->with('completed', 'Data has been Deleted!');
    }
}
