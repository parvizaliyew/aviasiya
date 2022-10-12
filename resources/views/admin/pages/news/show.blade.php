@extends('admin.layouts.master')

@section('title')
    Xəbər
@endsection

@section('content')
<div class="col-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Xəbər</h4>
          <div class="form-group">
            <label for="exampleInputName1">Başlıq</label>
            <input type="text" name="title" value="{{ $news->title }}" class="form-control" id="exampleInputName1" placeholder="Başlıq">
          </div>
          <div class="form-group">
            <label for="exampleTextarea1">Mətn</label>
            <textarea class="form-control"  name="desc" id="exampleTextarea1" placeholder="{{ $news->desc }}" rows="4"></textarea>
          </div>
          <div class="mb-3">
            <label for="formFile" class="form-label">Şəkil</label> <br> 
            <img style="width: 600px; height:500px" src="{{ asset($news->img) }}" alt=""> 
          </div>
          <button class="btn btn-dark"><a href="{{ route('admin.news.index') }}">Geri</a></button>
      </div>
    </div>
  </div>
@endsection