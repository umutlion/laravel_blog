<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Category;
use App\Models\Page;
use App\Models\Settings;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function __construct()
    {
        view()->share('setting', Settings::find(1));
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');
        if (Auth::guard('admin')->attempt($credentials, $request->remember)) {
            $user = Admin::where('email', $request->email)->first();
            Auth::guard('admin')->login($user);
            return redirect()->route('homepage');
        }
        return redirect()->route('admin.login')->with('status', 'Failed to Process Login');
    }

    protected function authenticated(Request $request, $user)
    {
        return redirect()->route('homepage');
    }
    /**
     * The user has logged out of the application.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return mixed
     */
    public function logout(Request $request)
    {
        $this->guard()->logout();

        if ($response = $this->loggedOut($request)) {
            return $response;
        }
//https://stackoverflow.com/a/35975283/11205809
        return $request->wantsJson()
            ? new JsonResponse([], 204)
            : redirect('admin.login');
    }
    protected function loggedOut(Request $request)
    {
        return redirect()->route('admin.login');
    }
    /**
     * Get the guard to be used during authentication.
     *
     * @return \Illuminate\Contracts\Auth\StatefulGuard
     */
    protected function guard()
    {
        return Auth::guard('admin');
    }
}
