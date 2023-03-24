@extends('back_end.template')

@section('navbar')
@include('back_end.layout.navbar')
@endsection

@section('sidebar')
@include('back_end.layout.sidebar')
@endsection

@section('content')
<div class="main-content"> 
  <div class="card">
        <div class="card-header">
          <h4>HTML5 Form Basic</h4>
        </div>
        <div class="card-body">
          <div class="form-group">
            <strong>Name: </strong>
            {{ $product->name }}
          </div>
          <div class="form-group">
                <strong>Details:</strong>
                {{ $product->detail }}
            </div>
            <div class="form-group">
                <strong>Image:</strong>
                <img src="/images/{{ $product->image }}" width="500px">
            </div>
        </div>
  </div>  
</div>  
@endsection