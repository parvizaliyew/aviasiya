<?php

namespace App\Http\Controllers\Admin;

use App\Models\Kafedra;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class KafedraController extends Controller
{
    public function index()
    {
        $kafedras=Kafedra::paginate(10);
        return view('admin.pages.kafedra.index',compact('kafedras'));
    }
    public function create()
    {
        return view('admin.pages.kafedra.create');
    }

    public function store(Request $request)
    {
        $data=['name'=>$request->name];

        $validator =Validator::make($data,[
            'name'=>'required',
        ],
        [
            'name.required'=>'Adı daxil edin',
        ]);

        if($validator->fails())
        {
            return redirect()->back()->withErrors($validator);
        }

            $kafedra=new Kafedra;
            $kafedra->name=$request->name;
            $kafedra->save();

            toastr()->success('Kafedranız uğurla əlavə olundu');
            return redirect()->route('admin.kafedra.index');
        
    }

    public function show($id)
    {
        $kafedra=Kafedra::findOrFail($id);
        return view('admin.pages.kafedra.show',compact('kafedra'));
    }

    public function edit($id)
    {
        $kafedra=Kafedra::findOrFail($id);
        return view('admin.pages.kafedra.edit',compact('kafedra'));
    }

    public function update(Request $request ,$id)
    {
        $data=['name'=>$request->name];

        $validator =Validator::make($data,[
            'name'=>'required',
        ],
        [
            'name.required'=>'Adı daxil edin',
        ]);

        if($validator->fails())
        {
            return redirect()->back()->withErrors($validator);
        }

            $kafedra=Kafedra::findOrFail($id);
            $kafedra->name=$request->name;
            $kafedra->save();

            toastr()->success('Kafedranız uğurla yeniləndi');
            return redirect()->route('admin.kafedra.index');
        
    }

    public function delete($id)
    {
        $kafedra=Kafedra::findOrFail($id);
        $kafedra->delete();
        toastr()->success('Kafedranız uğurla silindi');
        return redirect()->route('admin.kafedra.index');
    }
}
