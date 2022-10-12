@extends('admin.layouts.master')

@section('title')
    Xəbərlər
@endsection

@section('content')

<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <div class="page-header">
            <h3 style="font-size: 1.8rem" class="page-title"> Xəbərlər </h3>
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item active" aria-current="page"> 
                    <a href="{{ route('admin.news.create') }}"><i  style="font-size: 1.975rem !important ; color:blue" class="mdi mdi-plus"></i></a>
                </li>
              </ol>
            </nav>
          </div>
        <div class="table-responsive">
          <table class="table table-striped">
            <thead>
              <tr>
                <th style="font-size:20px"> # </th>
                <th style="font-size:20px"> Şəkil </th>
                <th style="font-size:20px"> Başlıq </th>
                <th style="font-size:20px"> Mətin </th>
                <th style="font-size:20px"> Proseslər </th>
              </tr>
            </thead>
            <tbody id="sliders">
              
             @foreach ($news as $new)
             <tr >
                <td class="handle">
                    {{ $loop->index+1 }}
                </td>
                <td> <img style="width: 100px; height:100px" src="{{ asset($new->img) }}" alt=""> </td>
                <td>
                  {{ Str::limit($new->title, 15, '...') }}
                </td>
                <td> {{ Str::limit($new->desc, 20, '...') }} </td>
                <td>
                    <a href="{{ route('admin.news.show',$new->id) }}"><i  style="font-size: 1.975rem !important ; color:blue ; margin-right:7px" class="mdi mdi-eye"></i> </a>
                    <a href="{{ route('admin.news.edit',$new->id) }}"><i  style="font-size: 1.975rem !important ; color:blue ; margin-right:7px" class="mdi mdi-grease-pencil"></i></a>
                    <a href="{{ route('admin.news.delete',$new->id) }}"><i  style="font-size: 1.975rem !important ; color:blue" class="mdi mdi-delete-forever"></i></a>
                </td>
              </tr>
              <tr>
             @endforeach
            </tbody>
          </table>

        </div>
      </div>
      <div style="margin-left: 870px">  {{ $news->links() }}  </div>
    </div>
    
  </div>
@endsection

