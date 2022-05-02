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

    <!-- header section ends-->

    <!-- search form  -->

    <form action="" id="search-form">
        <input type="search" placeholder="search here..." name="" id="search-box">
        <label for="search-box" class="fas fa-search"></label>
        <i class="fas fa-times" id="close"></i>
    </form>

    <!-- home section starts  -->

    <section class="home" id="home" style="background: white">

        <div class="swiper-container home-slider">

            <div class="swiper-wrapper wrapper">

                <div class="swiper-slide slide">
                    <div class="content">
                        <span>Our special and outstanding custommer service</span>
                        <h3>Truuu Foods</h3>
                        <p>We are the best processor deliver and supplier of premium quality seafood and other Products
                            products.</p>
                        <a href="#dishes" class="btn">order now</a>
                    </div>
                    <div class="image">
                        <img src="https://th.bing.com/th/id/OIP.UbFOyPD5Hil-ZCPtgGGgvwHaE8?pid=ImgDet&rs=1" alt="">
                    </div>
                </div>

                <div class="swiper-slide slide">
                <div class="content">
                    <span>Your special dish</span>
                    <h3>Lobster</h3>
                    <p>We are the best processor deliver and supplier of premium quality seafood and other Products
                        products.</p>
                    <a href="#dishes" class="btn">order now</a>
                </div>
                <div class="image">
                    <img src="https://portolamedia.weebly.com/uploads/3/7/5/4/37542083/lobster.jpeg" alt="">
                </div>
            </div>

                <div class="swiper-slide slide">
                <div class="content">
                    <span>Your special dish</span>
                    <h3>Shrimp</h3>
                    <p>We are the best processor deliver and supplier of premium quality seafood and other Products
                        products.</p>
                    <a href="#dishes" class="btn">order now</a>
                </div>
                <div class="image">
                    <img src="https://sonofthesea.com.pk/wp-content/uploads/2019/07/brown-shrimp2-300x167.jpg" alt="">
                </div>
            </div>

            </div>

            <div class="swiper-pagination"></div>

        </div>

    </section>

    <!-- home section ends -->

    <!-- Products section starts  -->

    <section class="dishes" id="dishes" style="background: #eee;">

        <h3 class="sub-heading"> Our Categories </h3>
        <h1 class="heading"> Make your Orders from any of the Category bellow </h1>

        <div class="box-container">

            @foreach ($category as $product)
                <div class="box">
                    <a href="#" class="fas fa-heart"></a>
                    <a href="{{ url('view-product')}}" class="fas fa-eye"></a>
                    <a href=" {{ url ('view-category/'.$product->slug)}}">
                    <img src="{{ url($product->image) }}" alt="">
                    <h3>{{ $product->name }}</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <p style="font-size: 1.6rem; color:black;">{{ $product->description}}</p>
                </a>
                </div>
            @endforeach
    </section>

    <!-- product section ends -->

    <!-- about section starts  -->

    <section class="about" id="about" style="background: white">

        <h3 class="sub-heading"> About Truuu Foods</h3>
        <h1 class="heading"> why choose us? </h1>

        <div class="row">

            <div class="image">
                <img src="https://media.istockphoto.com/photos/fresh-fruits-and-vegetables-picture-id502640812?k=6&m=502640812&s=612x612&w=0&h=pMhs4jZ8lmEgStYCdNZmpj_zbXs_UIrAAFwnTbgAnO0=" alt="">
            </div>

            <div class="content">
                <h3>Best service in the country</h3>
                <p>We bride the gap between fisherman and customers by delivering fresh catch that Every one can
                    apreciate. We do the hard job of scalling picking and shelling, which is why our customers love our
                    service.</p>

                <ul>
                    <li>
                        <p> Our price are reasonable</p>
                    </li>
                    <li>
                        <p> Our catch are fresh</p>
                    </li>
                    <li>
                        <p> We do the scalling the shelling</p>
                    </li>
                </ul>

                <div class="icons-container">
                    <div class="icons">
                        <i class="fas fa-shipping-fast"></i>
                        <span>free delivery</span>
                    </div>
                    <div class="icons">
                        <i class="fas fa-dollar-sign"></i>
                        <span>easy payments</span>
                    </div>
                    <div class="icons">
                        <i class="fas fa-headset"></i>
                        <span>24/7 service</span>
                    </div>
                </div>
                <a href="about" class="btn">learn more</a>
            </div>

        </div>

    </section>

    <!-- about section ends -->

    <!-- populor section starts  -->

    <section class="dishes" id="menu" style="background: #eee;">

        <h3 class="sub-heading"> POPULAR </h3>
        <h1 class="heading"> POPULAR Category </h1>

        <div class="box-container">
            @foreach ($categories as $product)
            <div class="box">
                <a href="#" class="fas fa-heart"></a>
                <a href="{{ url('view-product')}}" class="fas fa-eye"></a>
                <a href=" {{ url ('view-category/'.$product->slug)}}">
                <img src="{{ url($product->image) }}" alt="">
                <h3>{{ $product->name }}</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <p style="font-size: 1.6rem; color:black;">{{ $product->description}}</p>
            </a>
            </div>
        @endforeach

        </div>

    </section>
    <!-- populor section ends -->

    <!-- review section starts  -->

     {{-- <section class="review" id="review" style="background: white;">

        <h3 class="sub-heading"> customer's review </h3>
        <h1 class="heading"> what they say </h1>

        <div class="swiper-container review-slider">

            <div class="swiper-wrapper">

                <div class="swiper-slide slide">
                    <i class="fas fa-quote-right"></i>
                    <div class="user">
                        <img src="https://s-media-cache-ak0.pinimg.com/custom_covers/200x150/293719275636529024_1348366985.jpg"
                            alt="">
                        <div class="user-info">
                            <h3>Wayne James</h3>
                            <div class="stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                            </div>
                        </div>
                    </div>
                    <p>Love the products its amazing done with such care and loving </p>
                </div>

                <div class="swiper-slide slide">
                    <i class="fas fa-quote-right"></i>
                    <div class="user">
                        <img src="https://i.pinimg.com/originals/f0/d6/f5/f0d6f5d4e7b229125193f481243fa017.jpg" alt="">
                        <div class="user-info">
                            <h3>Lilchris</h3>
                            <div class="stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                            </div>
                        </div>
                    </div>
                    <p>Love the products its amazing done with such care and loving </p>
                </div>

                <div class="swiper-slide slide">
                    <i class="fas fa-quote-right"></i>
                    <div class="user">
                        <img src="https://cms.qz.com/wp-content/uploads/2017/04/gorsuch.jpg?quality=75&strip=all&w=1600&h=900&crop=1"
                            alt="">
                        <div class="user-info">
                            <h3>Angella</h3>
                            <div class="stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                            </div>
                        </div>
                    </div>
                    <p>Love the products its amazing done with such care and loving </p>
                </div>

                <div class="swiper-slide slide">
                    <i class="fas fa-quote-right"></i>
                    <div class="user">
                        <img src="https://i.pinimg.com/736x/e7/a5/cc/e7a5cc45fc9dc6c05a6cddd0def07e93--jamaica-trinidad.jpg"
                            alt="">
                        <div class="user-info">
                            <h3>James Brown</h3>
                            <div class="stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                            </div>
                        </div>
                    </div>
                    <p>Love the products its amazing done with such care and loving </p>
                </div>

            </div>

        </div>

    </section> --}}

    <!-- review section ends -->


    <!-- order section starts  -->

    {{-- <section class="order" id="order">

        <h3 class="sub-heading"> Make a Comement </h3>
        <h1 class="heading"> Add review Bellow </h1>

        <form action="">
            <div class="inputbox">
                <img src="https://i.pinimg.com/736x/e7/a5/cc/e7a5cc45fc9dc6c05a6cddd0def07e93--jamaica-trinidad.jpg"
                style="height: 80px; border-radius:50%; width:8rem; margin-left:40%;">
            </div>

            <div class="inputBox">
                <div class="input" style=" width:100%; display:flex;">
                    <input class="input" type="text" placeholder="Write review here" step="margin-left:5%; width:50px;" >
                </div>
            </div>

            <input type="submit" value="Enter" class="btn">
        </form>

    </section> --}}

    <!-- order section ends -->

    <!-- footer section starts  -->

    <section class="footer">

        <div class="box-container">

            <div class="box">
                <h3>locations</h3>
                <a href="#">Clarendon</a>
                <a href="#">Kingston</a>
                <a href="#">Mandeville</a>
                <a href="#">May pen</a>
                <a href="#">Lionel Town</a>
            </div>

            <div class="box">
                <h3>quick links</h3>
                <a href="#">home</a>
                <a href="#">Category</a>
                <a href="#">about</a>
                <a href="#">Populor</a>
                <a href="#">reivew</a>
                <a href="#">order</a>
            </div>

            <div class="box">
                <h3>contact info</h3>
                <a href="#">+1876-791-1687</a>
                <a href="#">+1876-222-3333</a>
                <a href="#">christopherwatson299@gmail.com</a>
                <a href="#">Clrendon, Rocky - 1345</a>
            </div>

            <div class="box">
                <h3>follow us</h3>
                <a href="#">facebook</a>
                <a href="#">twitter</a>
                <a href="#">instagram</a>
                <a href="#">linkedin</a>
            </div>

        </div>

        <div class="credit"> Yours Truly <span> Lilchris F Truuu</span> </div>

    </section>

    <!-- footer section ends -->

    <!-- loader part  -->
    <div class="">
        <img src="https://i1.wp.com/www.pixvc.com/wp-content/uploads/2016/11/Truuue_logo_V1.png?ssl=1" alt=""
        style="margin-left: 30%">
    </div>


    @include('javascript')

