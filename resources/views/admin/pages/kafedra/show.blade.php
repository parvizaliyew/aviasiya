@extends('admin.layouts.master')

@section('title')
    Kafedra
@endsection

@section('content')
<div class="col-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Kafedra</h4>
          <div class="form-group">
            <label for="exampleInputName1">Kafedra Adı</label>
            <input type="text" name="title" value="{{ $kafedra->name }}" class="form-control" id="exampleInputName1" placeholder="Başlıq">
          </div>
          
          <button class="btn btn-dark"><a href="{{ route('admin.kafedra.index') }}">Geri</a></button>
      </div>
    </div>
  </div>
@endsection