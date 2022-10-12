<?php

namespace App\Http\Controllers\Admin;

use App\Models\News;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;

class NewsController extends Controller
{
    public function index()
    {
        $news=News::paginate(4);
        return view('admin.pages.news.index',compact('news'));
    }

    public function create()
    {
        return view('admin.pages.news.create');
    }

    public function store(Request $request)
    {
        $data=[
            'title'=>$request->title,
            'desc'=>$request->desc,
            'img'=>$request->img,
        ];

        $validator =Validator::make($data,[
            'title'=>'required',
            'desc'=>'required',
            'img'=>'required|mimes:jpg,png',
        ],
        [
            'title.required'=>'Başlığı daxil edin',
            'desc.required'=>'Mətni daxil edin',
            'img.required'=>'Şəkili daxil edin',
            'img.mimes'=>'Şəkil png jpg formatında olmalıdı',

        ]);

        if($validator->fails())
        {
            return redirect()->back()->withErrors($validator);
        }

        if($request->has('img'))
        {
            $ext=$request->img->extension();
            $fileName=rand(1,100).time().'.'.$ext;
            $fileNameWithUpload='storage/news/'.$fileName;

            $request->img->storeAs('public/news/',$fileName);

            $news=new News;
            $news->img=$fileNameWithUpload;
            $news->title=$request->title;
            $news->desc=$request->desc;
            $news->save();

            toastr()->success('Xəbəriniz uğurla əlavə olundu');
            return redirect()->route('admin.news.index');
        }
    }

    public function show($id)
    {
        $news=News::findOrFail($id);

        return view('admin.pages.news.show',compact('news'));
    }

    public function edit($id)
    {
        $news=News::findOrFail($id);

        return view('admin.pages.news.edit',compact('news'));
    }

    public function update(Request $request, $id)
    {
        $data=[
            'title'=>$request->title,
            'desc'=>$request->desc,
            'img'=>$request->img,
        ];

        $validator =Validator::make($data,
        [
            'title'=>'required',
            'desc'=>'required',

        ],
        [
            'title.required'=>'Başlığı daxil edin',
            'desc.required'=>'Mətni daxil edin',

        ]);

        $validate=Validator::make( $data,[
            'img'=>'mimes:jpg,png',
        ],
        [
            'img.mimes'=>'Şəkil png , jpg formatinda olmalidi',
        ]);

        
        if($validator->fails())
        {
            return redirect()->back()->withErrors($validator);
        }

        $news=News::findOrFail($id);

        if($request->has('img')==null)
        {
            $news->title=$request->title;
            $news->desc=$request->desc;
            $news->save();

            toastr()->success('Slayderiniz uğurla yenilendi');
            return redirect()->route('admin.news.index');
        }
        else
        {
            if($validate->fails())
        {
            return redirect()->back()->withErrors($validate);
        }
            
            $ext=$request->img->extension();
            $fileName=rand(1,100).time().'.'.$ext;
            $fileNameWithUpload='storage/news/'.$fileName;
            if(File::exists($news->img))
            {
                File::delete($news->img);
            }
            $request->img->storeAs('public/news/',$fileName);

            $news->img=$fileNameWithUpload;
            $news->title=$request->title;
            $news->desc=$request->desc;
            $news->save();

            toastr()->success('Slayderiniz uğurla yenilendi');
            return redirect()->route('admin.news.index');
        }
    }
    public function delete($id)
    {
        $news=News::findOrFail($id);
        if(File::exists($news->img))
            {
                File::delete($news->img);
            }
        $news->delete();
        toastr()->success('Slayderiniz uğurla silindi');
        return redirect()->route('admin.news.index');
    }

}
