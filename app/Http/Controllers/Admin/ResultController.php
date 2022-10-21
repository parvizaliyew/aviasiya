<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class ResultController extends Controller
{
    public function index()
    {
        // $user=User::where('id',Auth::user()->id)->with('getExam')->get();
        // foreach ($user as $key => $u) {
        //     return $u->getExam->price;
        // }
        // return view('admin.pages.result.index');
    }
}
