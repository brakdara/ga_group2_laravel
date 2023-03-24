@extends('back_end.template')

@section('navbar')
@include('back_end.layout.navbar')
@endsection

@section('sidebar')
@include('back_end.layout.sidebar')
@endsection

@section('content')
<div class="main-content">
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
            <h4>Update Product</h4>
        </div>
      <form action="{{ url('/update-product',$product->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="card-body">
          <div class="form-group">

            <label>Product Title:</label>
            <input type="text" name="name" value="{{ $product->name }}" placeholder="Name" class="form-control">
          </div>

          <div class="form-group">
            <label>Product Detail:</label>
            <textarea class="form-control" type="text" name="detail" placeholder="Detail">{{ $product->detail }}</textarea>
          </div>

          <div class="form-group">
            <label>Price:</label>
            <input type="number" name="price" value="{{$product->price}}" placeholder="Price" class="form-control">
          </div>

          <div class="form-group">
            <label>Product Category:</label>
            <select name="category" class="form-control">
                
                    @foreach($category as $row)
                        <option value="{{$row->category_name}}"  {{$row->category_name==$product->category?'selected':''}}>{{$row->category_name}}</option>
                    @endforeach
                
            </select>
          </div>

          <div class="form-group">
            <label>Product Image:</label>
            <input type="file" name="image" class="form-control" placeholder="image">
            <img src="/images/{{ $product->image }}">
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
