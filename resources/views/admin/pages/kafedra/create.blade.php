@extends('admin.layouts.master')

@section('title')
    Kafedra Əlavə Et
@endsection

@section('content')
<div class="col-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Kafedra Əlavə Et</h4>
        <form action="{{ route('admin.kafedra.store') }}" enctype="multipart/form-data" method="POST" class="forms-sample">
            @csrf
          <div class="form-group">
            <label for="exampleInputName1">Kafedra Adı</label>
            <input type="text" name="name" class="form-control" id="exampleInputName1" placeholder="kafedra">
          </div>
          @error('name')
          <span class="text-danger mt-2">{{ $message }}</span> <br>
          @enderror
          <button type="submit" class="btn btn-primary mr-2">Əlavə Et</button>
          <button class="btn btn-dark"><a href="{{ route('admin.kafedra.index') }}">Geri</a></button>
        </form>
      </div>
    </div>
  </div>
@endsection