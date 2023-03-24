@extends('back_end.template')

@section('navbar')
@include('back_end.layout.navbar')
@endsection

@section('sidebar')
@include('back_end.layout.sidebar')
@endsection

@section('content')
<div class="main-content">
    @if (session()->has('success'))
    <div class="alert alert-success">
      
      <button type="button" class="close" data-dismiss="alert" >x</button>

      {{session()->get('success')}}
    </div>
  @endif
    
         
    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
         
    <div class="card">
      
        <div class="card-header">
            <h4>Add New Product</h4>
        </div>
      <form action="{{url('add_product')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="card-body">
          <div class="form-group">

            <label>Product Title:</label>
            <input type="text" name="name" placeholder=" Name" class="form-control">
          </div>

          <div class="form-group">
            <label>Product Detail:</label>
            <input type="text" name="detail" placeholder=" Detail" class="form-control">
          </div>

          <div class="form-group">
            <label>Price:</label>
            <input type="number" name="price" placeholder=" Price" class="form-control">
          </div>

          <div class="form-group">
            <label>Discount Price:</label>
            <input type="number" name="discount_price" placeholder=" Discount Price" class="form-control">
          </div>

          <div class="form-group">
            <label>Product Category:</label>
            <select name="category" class="form-control">
                @foreach ($data as $category)
                    <option>{{$category->category_name}}</option>
                @endforeach
            </select>
          </div>

          <div class="form-group">
            <label>Product Image:</label>
            <input type="file" name="image" class="form-control">
          </div>

        </div>
        <div class="card-footer text-right">
          <button class="btn btn-primary mr-1" type="submit">Submit</button>
          <button class="btn btn-danger bg-red-500" type="reset">Reset</button>
        </div>
      </form>
    </div>

</div>  
@endsection