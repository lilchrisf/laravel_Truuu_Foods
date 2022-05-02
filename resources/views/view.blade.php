@include('header')

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdel  ivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<section class="dishes" style="height: 100%">
    <style>
        a{
            text-decoration: none;
        }
    </style>


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
          <form action="{{url('/add-rating')}}" method="POST">
            @csrf

            <input type="hidden" name="product_id" value="{{$product->id}}">
            <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Rate {{ $product->name}}</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="rating-css">
                    <div class="star-icon">
                        <input type="radio" value="1" name="product_rating" checked id="rating1">
                        <label for="rating1" class="fa fa-star"></label>
                        <input type="radio" value="2" name="product_rating" id="rating2">
                        <label for="rating2" class="fa fa-star"></label>
                        <input type="radio" value="3" name="product_rating" id="rating3">
                        <label for="rating3" class="fa fa-star"></label>
                        <input type="radio" value="4" name="product_rating" id="rating4">
                        <label for="rating4" class="fa fa-star"></label>
                        <input type="radio" value="5" name="product_rating" id="rating5">
                        <label for="rating5" class="fa fa-star"></label>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
      </div>
    </div>
  </div>
<!-- Modal  ends-->


<div class="container">
    <div class="card show product_data" style="margin-top: 100px">
        <div class="card body">
            <div class="row">
                <div class="col-md-4 border-right">
                    <img src="{{$product->image}}" class="w-100" alt="" style="height: 350px;">
                </div>
                <div class="col-md8" style="width: 66%;">
                    <h2 class="mb-0" style="font-size: 2.5rem; margin-top:10px;">
                        {{ $product->name}}
                        @if($product->trending == "1")
                        <label style="font-size: 16px; background: var(--green);" class="float-end badge bg-danger trending_tag">
                         Trending
                        </label>
                        @endif
                    </h2>

                    <hr>
                    <label class="me-3" style="font-size: 1.5rem">Oringinal Price:<s>${{ $product->original_price}}</s></label>
                    <label class="fw-bold" style="font-size: 1.5rem">Selling Price: ${{ $product->selling_price}} </label> <br>
                    {{-- @php $ratenum = number_format($rating_value) @endphp --}}
                    <div class="rating">
                        {{-- @for ($i -1; $i<- $ratenum; $i++) --}}
                        <i class="fa fa-star checked"></i>
                        {{-- @endfor --}}
                        {{-- @for ($j = $ratenum+1; $j <- 5;$j++) --}}
                        <i class="fa fa-star checked"></i>
                        <i class="fa fa-star checked"></i>
                        <i class="fa fa-star checked"></i>
                        <i class="fa fa-star checked"></i>
                        {{-- @endfor --}}
                        <span>
                            {{-- {{ $ratings->count() }} Ratings --}}
                        </span>
                    </div>
                    <p class="mt-3" style="font-size: 1.5rem">
                        {!! $product->description!!}
                    </p>
                    <hr>
                    @if($product->qty > 0)
                    <label class="badge bg-success" style="font-size: 1.5rem"> In Stock</label>
                    @else
                    <label class="badge bg-success" style="font-size: 1.5rem"> Out of Stock</label>
                    @endif

                    <div class="row mt-2">
                        <div class="col-md-3">
                            <label for="Quantity" style="font-size: 2.5rem;"> Quantity </label>
                            <div class="input-group text-center mb-3" style="width:130px;">
                                <input type="hidden" class="prod_id" value="{{ $product->id }}" name="prod_id">
                               <button class="input-group-text decrement-btn" id="decrement-btn"> - </button>
                               <input type="text" name="qty" value="1" class="form-control qty-input" />
                               <button class="input-group-text increment-btn" id="increment-btn"> + </button>
                           </div>
                        </div>

                        <div class="col-md-10">
                            <br/>
                            @if ($product->qty >0)
                            <button class="btn btn-success me-3 addToCartBtn">Add To Cart</button>
                            @endif
                            <button type="button" class="btn btn-success me-3 addToCartBtn float-start"> Add to wishlist</button>
                        </div>
                    </div>
                </div>

                <div class="col-md8" style="width: 96%; margin-left:1%">
                    <hr>
                    <h1> Description</h1>
                    <p class="mt-3" style="font-size: 1.5rem">
                        {!! $product->description!!}
                    </p>

                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" style="margin-bottom: 10px">
                        Rate this product
                      </button>



                </div>

            </div>
        </div>
    </div>
</div>
</section>
@include('footer')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js">
</script>
</body>
</html>
