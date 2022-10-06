<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }

    public function login_post(Request $request)
    {
            $data= [
                'email'=>$request->email,
                'password'=>$request->password,

            ];

            $validator =Validator::make($data,[
            'email'=>'required|email',
            'password'=>'required',
            ]);

            if($validator->fails())
            {
                toastr()->error('Zəhmət olmasa bütün xanaları doldurun.');
                return redirect()->back();
            }

            if (Auth::attempt($data))
            {
            return redirect()->route('admin.index');
            }
            
            else
            {
                toastr()->error('İstifadəçi məlumatları doğru deyil.');
                return redirect()->back();
            }
    }

        public function logout()
        {
            Auth::logout();

            return redirect()->route('index');
    }
}
