<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<style>
    body{
        background: #eee;
    }
</style>

@extends('header')

     <div class="container" style="margin-top: 100px; width:80%">
         <div class="card shadow product_data">
             @if ($cartItems->count() > 0)


             <div class="card-body">
                 @php
                    $Total = 0;
                 @endphp
                 @foreach ($cartItems as $item)
                 <div class="row product_data">
                     <div class="col-md-2">
                         <img src="{{$item->products->image}}" alt="Image here" style="width: 100px; border-style:none;">
                     </div>
                     <div class="col-md-3">
                         <h3 style="font-size: 2.5rem;">{{ $item->products->name}}</h3>
                     </div>
                     <div class="col-md-3">
                        <label for="Quantity" style="font-size: 2.5rem;"> Price </label>
                        <h3 style="font-size: 2.5rem;">${{ $item->products->selling_price}}</h3>
                    </div>
                     <div class="col-md-2">
                         <input type="hidden" class="prod_id" value="{{ $item->prod_id}}">
                         <label for="Quantity" style="font-size: 2.5rem;"> Quantity </label>
                         @if ( $item->products->qty >= $item->prod_qty)
                         <div class="input-group text-center mb-3" style="width:130px;">
                            <button class="input-group-text changeQuantity decrement-btn"> - </button>
                            <input type="text" name="qty" value="{{$item->prod_qty}}" class="form-control qty-input" />
                            <button class="input-group-text changeQuantity increment-btn"> + </span>
                        </div>
                    @php
                        $Total += $item->products->selling_price * $item->prod_qty;
                    @endphp

                      @else
                      <h5 style="color: red"> Out of Stock please remove</h5>
                        @endif
                     </div>
                     <div class="col-md-2">
                            <button style="font-size: 1rem;" class="btn btn-danger delete"><i class="fa fa-trash"></i>Delete</button>
                     </div>
                 </div>
                 @endforeach
             </div>
             <div class="card-footer" style="    background: #eee;">
                 <h4> Total Price: ${{ $Total }}
                <a href="payment"><button class="btn btn-outline-success float-end"> Proccess To Checkout </button></a></h4>
             </div>
             @else
             <div class="card-body text-center">
                 <h2> Your <i class="fa fa-shopping-cart"></i> Cart is Empty
                 <a href="{{url('category')}}" class="btn btn-outline-primary float-end">Continue Shopping</a>
                </h2>
             </div>
             @endif
         </div>
     </div>

     @include('footer')


