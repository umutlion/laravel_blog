<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Role;
use App\Models\Settings;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $setting=Settings::find(1);
        $datalist = User::all();
        return view('back.users.index', ['datalist'=>$datalist, 'setting'=>$setting]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = User::find($id);
        return view('admin.user_edit', ['data'=>$data]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, User $user, $id)
    {
        $data = User::find($id);
        $data->name = $request->input('name');
        $data->email = $request->input('email');

        $data->save();
        return redirect()->route('users.index')->with('success', 'User info updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function user_roles(User $user, $id)
    {
        $data = User::find($id);
        $datalist = Role::all()->sortBy('name');
        return view('back.users.user_roles', ['data'=>$data, 'datalist'=>$datalist]);
    }
    public function user_role_store(Request $request, User $user, $id)
    {
        $user = User::find($id);
        $roleid = $request->input('roleid');
        $user->roles()->attach($roleid);
        return redirect()->back()->with('success', 'Role added to User');
    }
    public function user_role_delete(Request $request, User $user, $userid, $roleid)
    {
        $user = User::find($userid);
        $user->roles()->detach($roleid);
        return redirect()->back()->with('success', 'role deleted');
    }
}
