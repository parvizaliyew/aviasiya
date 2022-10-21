<?php

namespace App\Http\Controllers\Admin;

use App\Models\News;
use App\Models\User;
use App\Models\Group;
use App\Models\Lesson;
use App\Models\Slider;
use App\Models\Dekanat;
use App\Models\Kafedra;
use App\Models\Teacher;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    public function index()
    {
        $slider=Slider::get();
        $news=News::get();
        $kafedra=Kafedra::get();
        $dekanat=Dekanat::get();
        $teacher=Teacher::get();
        $group=Group::get();
        $lesson=Lesson::get();
        $user=User::role('tələbə')->get();
        return view('admin.pages.index',compact('slider','news','kafedra','dekanat','teacher','group','lesson','user'));
    }
}
