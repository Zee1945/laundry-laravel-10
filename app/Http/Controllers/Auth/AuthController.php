<?php

namespace App\Http\Controllers\Auth;


use App\Http\Controllers\Controller;
use App\Http\Requests\AuthRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function show()
    {
        return view('auth.login');
    }

    public function login(AuthRequest $request){
        $credentials = $request->validated();
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            // dd($request->session());
            // if ($this->hasManyRole($request))
            //     return redirect('/set-role-access');
            // else return redirect()->intended();
            // return redirect()->intended();
            return redirect('dashboard');
        }
        return redirect()->to('login')
            ->withErrors(trans('auth.failed'));
    }
    public function logout()
    {
        Session::flush();
        Auth::logout();
        return redirect('login');
    }
}
