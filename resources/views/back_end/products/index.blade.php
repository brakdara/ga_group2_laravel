@extends('back_end.template')

@section('navbar')
@include('back_end.layout.navbar')
@endsection

@section('sidebar')
@include('back_end.layout.sidebar')
@endsection

@section('content')
<div class="main-content">
    
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
    <table class="table table-bordered">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Image</th>
            <th scope="col">Name</th>
            <th scope="col">Details</th>
            <th width="280px">Action</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($products as $product)
            <tr>
                <th>{{ ++$i }}</th>
                <td><img src="/images/{{ $product->image }}" width="100px"></td>
                <td>{{ $product->name }}</td>
                <td>{{ $product->detail }}</td>
                <td>
                    <form action="{{ url('/products_delete',$product->id) }}" method="POST">
         
                        <a class="btn btn-info" href="{{ url('/show-product',$product->id) }}">Show</a>
          
                        <a class="btn btn-primary" href="{{ url('/edit-product',$product->id) }}">Edit</a>
         
                        @csrf
                        
            
                        <button type="submit" class="btn btn-danger bg-red-600">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
      </table>
    
    
    {!! $products->links() !!}

</div>  
@endsection