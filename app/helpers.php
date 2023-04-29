<?php



use Illuminate\Support\Facades\DB;











function slug($slug){





    return strtolower(str_replace(' ','-',$slug));





}











function getoption($name){





    return DB::table('options')->where('name', $name)->first();





}











function updateoption($name,$value){





    DB::table('options')->where('name', $name)->update(['value'=>$value]);





}











function getby($tab,$col,$val){





    return DB::table($tab)->where($col, $val)->first();





}







function count_blog_in_cat($cat){


    return count(DB::table('blogs')->where('category',$cat)->get());

}