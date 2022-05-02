<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Truuu fooods</title>

    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <!-- styling linke -->
    @include('foodcss')
</head>

@include('header')
@include('foodcss')

    <!-- Products section starts  -->

    <section class="dishes" id="dishes" style="margin-top: 80px;">

        <h3 class="sub-heading"> {{$category->name}} </h3>
        <h1 class="heading"> Make your Orders from any of the Products bellow </h1>

        <div class="box-container">

            @foreach ($product as $product)
                <div class="box">
                    <a href="#" class="fas fa-heart"></a>
                    <a href="{{ url('view-product')}}" class="fas fa-eye"></a>
                    <a href=" {{ url ('view-product/'.$category->slug.'/'.$product->name)}}">
                    <img src="{{ url($product->image) }}" alt="">
                    <h3>{{ $product->name }}</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <p style="font-size: 1.6rem; color:black;">{{ $product->small_description}}</p>
                    <button class="btn addToCartBtn">Purchase</button>
                </a>
                </div>
            @endforeach
    </section>
@include('footer')
