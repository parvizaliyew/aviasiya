<?php

namespace App\Http\Controllers\Admin;

use App\Models\Dekanat;
use App\Models\Kafedra;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class DekanatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dekanats=Dekanat::paginate(5);
        return view('admin.pages.dekanat.index',compact('dekanats'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.dekanat.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data=[
            'name'=>$request->name,
        ];

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

            $dekanat=new Dekanat;
            $dekanat->name=$request->name;
            $dekanat->save();

            toastr()->success('Dekanatlıgız uğurla əlavə olundu');
            return redirect()->route('admin.dekanat.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $dekanat=Dekanat::where('id',$id)->first();

        return view('admin.pages.dekanat.show',compact('dekanat'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $dekanat=Dekanat::where('id',$id)->first();
        return view('admin.pages.dekanat.edit',compact('dekanat'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data=[
            'name'=>$request->name,
        ];

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

            $dekanat=Dekanat::findOrFail($id);
            $dekanat->name=$request->name;
            $dekanat->save();

            toastr()->success('Dekanatlıgız uğurla yeniləndi');
            return redirect()->route('admin.dekanat.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $dekanat=Dekanat::findOrFail($id);
        $id=$dekanat->id;
        $kafedra=Kafedra::where('dekanat_id','id')->first();
        if ($kafedra) {
        $kafedra->dekanat_id=0;
        $kafedra->save();
        }
        
        $dekanat->delete();
        toastr()->success('Dekanatlıgız uğurla silindi');
        return redirect()->route('admin.dekanat.index');
    }
}
