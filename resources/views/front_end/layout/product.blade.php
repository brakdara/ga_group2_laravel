<div class="row">
    @foreach ($products as $product)
      <!-- single product -->
    <div class="col-lg-3 col-md-6">
        <div class="single-product">
            <img class="img-fluid" src="images/{{$product->image}}" alt="">
            <div class="product-details">
                <h6>{{$product->name}}</h6>
                <div class="price">
                    <h6>${{$product->price}}</h6>
                    
                </div>
                <div class="prd-bottom">
                    <form action="{{ url('/add_cart', $product->id)}}"class="social-info" method="POST">
                    @csrf
                        <a href=""  type="submit">
                        <span class="ti-bag"></span>
                        <p class="hover-text">add to cart</p>
                    </a></form>
                    
                    <a href="{{url('/product_detail',$product->id)}}" class="social-info">
                        <span class="lnr lnr-move"></span>
                        <p class="hover-text">more details</p>
                    </a>
                </div>
            </div>
        </div>
    </div>  
    @endforeach
    
</div>