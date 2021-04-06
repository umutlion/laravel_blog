<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\Category;
use App\Models\Page;
use App\Models\Settings;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Spatie\Permission\Models\Role;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        view()->share('pages', Page::orderBy('order', 'ASC')->get());
        view()->share('categories', Category::inRandomOrder()->get());
        view()->share('setting', Settings::find(1));

    }


    public function index()
    {
        $users = User::all();
        $setting=Settings::find(1);
        return view('front.user_profile', compact('users', 'setting'));
    }

    public function create() {
      //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */


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
    public function store(Request $request){
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        if (Auth::user()) {
            $user = User::find(Auth::user()->id);

            if ($user) {
                return view('front.user_profile')->withUser($user);
            } else {

            }
        } else {
            return redirect()->back();
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, $id)
    {
        $user = User::findOrFail($id);
        $user->name=$request->input('name');
        $user->company=$request->input('company');
        $user->email=$request->input('email');
        $user->username=$request->input('username');
        $user->password=$request->input('password');


        if($request->hasFile('image')){
            $imageName=Str::slug($request->input('text-input')).'.'.$request->image->extension();
            $request->image->move(public_path('uploads'),$imageName);
            $user->image='uploads/'.$imageName;
        }

        $user->save();
        toastr()->success('Başarılı.', 'User güncelleme işlemi başarıyla tamamlandı.');

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function logout(){
        Auth::logout();
        return redirect()->back();
    }


}
