<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\Category;
use App\Models\Comment;
use App\Models\Image;
use App\Models\Page;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class PostsController extends Controller
{
    public function __construct()
    {
        view()->share('pages', Page::orderBy('order', 'ASC')->get());
        view()->share('categories', Category::inRandomOrder()->get());
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Article::where('user_id', Auth::id())->get();
        return view('front.posts.index', compact('posts'));
    }
    public function comments(){
        $comments = Comment::where('user_id', Auth::id())->get();
        return view('front.posts.most_comments', compact('comments'));

    }
    public function commentDelete($id){
        Comment::find($id)->delete();
        toastr()->success('Başarılı, Yorum başarıyla silindi.');
        return redirect()->back();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $categories = Category::all();
        return view('front.posts.create_post',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $post = new Article;
        $post->user_id=Auth::user()->id;
        $post->title=$request->input('text-input');
        $post->category_id=$request->input('selectLg');
        $post->content=$request->input('content');
        $post->slug=Str::slug($request->input('text-input'));

        if($request->hasFile('image')){
            $imageName=Str::slug($request->input('text-input')).'.'.$request->image->extension();
            $request->image->move(public_path('uploads'),$imageName);
            $post->image='uploads/'.$imageName;
        }


        $post->save();
        toastr()->success('Başarılı.', 'Post oluşturma işlemi başarıyla tamamlandı.');
        return redirect()->route('myuser.myprofile.create');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post=Article::findOrFail($id);
        $categories=Category::all();
        return view('front.posts.edit_post', compact('categories', 'post'));
    }


    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $post = Article::findOrFail($id);
        $post->title=$request->input('text-input');
        $post->category_id=$request->input('selectLg');
        $post->content=$request->input('content');
        $post->slug=Str::slug($request->input('text-input'));

        if($request->hasFile('image')){
            $imageName=Str::slug($request->input('text-input')).'.'.$request->image->extension();
            $request->image->move(public_path('uploads'),$imageName);
            $post->image='uploads/'.$imageName;
        }


        $post->save();
        toastr()->success('Başarılı, Gönderi başarıyla güncellendi.');
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function switch(Request $request){
        $post=Article::findOrFail($request->id);
        $post->status=$request->status=="true" ? 1 : 0;
        $post->save();
    }

    public function delete($id){
        Article::find($id)->delete();
        toastr()->success('Başarılı, Gönderi başarıyla silindi.');
        return redirect()->back();
    }

    public function multipleImageStore(Request $request): \Illuminate\Http\RedirectResponse
    {

        foreach($request->file('file') as $image)
        {
            $imageName=$image->getClientOriginalName();
            $image->move(public_path().'/images/', $imageName);
            $fileNames[] = $imageName;

        }

        $images = json_encode($fileNames);

        // Store $images image in DATABASE from HERE
        Image::create(['images' => $images]);
        return back()
            ->with('success','You have successfully file uplaod.')
            ->with('files',$fileNames);
    }
}
