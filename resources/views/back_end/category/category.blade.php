@extends('back_end.template')

@section('navbar')
@include('back_end.layout.navbar')
@endsection

@section('sidebar')
@include('back_end.layout.sidebar')
@endsection

@section('content')
<div class="main-content">

  @if (session()->has('message'))
    <div class="alert alert-success">
      
      <button type="button" class="close" data-dismiss="alert" >x</button>

      {{session()->get('message')}}
    </div>
  @endif
  @if (session()->has('deleted'))
    <div class="alert alert-danger">
      
      <button type="button" class="close" data-dismiss="alert" >x</button>

      {{session()->get('deleted')}}
    </div>
  @endif

    
    <div class="card">
      
        <div class="card-header">
          <h4>Add New Category</h4>
        </div>
      <form action="{{url('/add_category')}}" method="POST">
        @csrf
        <div class="card-body">
          <div class="form-group">
            <label>Category's Name:</label>
            <input type="text" name="category" placeholder="Write Category's Name" class="form-control">
          </div>
        </div>
        <div class="card-footer text-right">
          <button class="btn btn-primary mr-1" type="submit">Submit</button>
          <button class="btn btn-danger bg-red-600" type="reset">Reset</button>
        </div>
      </form>
    </div>
    <div class="card">
      <div class="card-header">
        <h4>All Categories</h4>
      </div>
      <div class="card-body">
        <table class="table">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Category's Name</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>
            @php
              $i=1;
            @endphp
            @foreach ($data as $data)

            <tr>
              <th scope="row">@php echo $i; @endphp</th>
              <td>{{$data->category_name}}</td>
              <td>
                <a onclick="return confirm('Are You Sure To Delete This Category?')" class="btn btn-danger" 
                href="{{url('delete_category', $data->id)}}">Delete</a>
              </td>
              @php $i++ @endphp
            </tr>

            @endforeach
            
          </tbody>
        </table>
      </div>
    </div>
    
</div>
@endsection