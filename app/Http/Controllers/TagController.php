<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\Tag;
use App\Models\Settings;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class TagController extends Controller
{

    public function __construct()
    {
        view()->share('tags', Tag::orderBy('id', 'ASC')->get());
    }

    public function index(){
        $tags = Tag::all();
        $setting=Settings::find(1);
        return view('back.tags.index', compact('tags', 'setting'));
    }

    public function create(Request $request){
        $isEmpty=Tag::whereSlug(Str::slug($request->tag))->first();
        if($isEmpty){
            return redirect()->back();
        }
        $tag = new Tag();
        $tag->name = $request->tag;
        $tag->slug = Str::slug($request->tag);
        $tag->save();
        return redirect()->back();
    }
    public function update(Request $request){
        $isSlug=Tag::whereSlug(Str::slug($request->slug))->whereNotIn('id',[$request->id])->first();
        $isName=Tag::whereName($request->tag)->whereNotIn('id',[$request->id])->first();
        if($isSlug or $isName){
            return redirect()->back();
        }

        $tag = Tag::find($request->id);
        $tag->name = $request->tag;
        $tag->slug = Str::slug($request->slug);
        $tag->save();
        return redirect()->back();
    }

    public function delete(Request $request){
        $tag=Tag::findOrFail($request->id);
        if($tag->id==5){
            return redirect()->back();
        }
        $count=$tag->count();
        if($count>0){
            Tag::where('tag_id', $tag->id)->update(['tag_id'=>5]);
        }
        $tag->delete();
        return redirect()->back();
    }

    public function getData(Request $request){
        $tag=Tag::findOrFail($request->id);
        return response()->json($tag);
    }

}
