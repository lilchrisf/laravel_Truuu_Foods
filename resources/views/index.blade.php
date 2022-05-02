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

<body>

    <!-- header section starts      -->

@include('header')

    <!-- header section ends-->

    <!-- search form  -->

    <form action="" id="search-form">
        <input type="search" placeholder="search here..." name="" id="search-box">
        <label for="search-box" class="fas fa-search"></label>
        <i class="fas fa-times" id="close"></i>
    </form>

    <!-- home section starts  -->

    <section class="home" id="home">

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

    <section class="dishes" id="dishes">

        <h3 class="sub-heading"> Our Products </h3>
        <h1 class="heading"> Make your Orders from the list bellow </h1>

        <div class="box-container">

            @foreach ($products as $product)
                <div class="box">
                    <a href="#" class="fas fa-heart"></a>
                    <a href="{{ url('view-product')}}" class="fas fa-eye"></a>
                    <img src="{{ url($product->image) }}" alt="">
                    <h3>{{ $product->name }}</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <span>${{ $product->price }}</span>
                    <p style="font-size: 1.6rem;">{{ $product->description}}</p>
                    <form action="{{ route('cart.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" value="{{ $product->id }}" name="id">
                        <input type="hidden" value="{{ $product->name }}" name="name">
                        <input type="hidden" value="{{ $product->price }}" name="price">
                        <input type="hidden" value="{{ $product->image }}"  name="image">
                        <input type="hidden" value="1" name="quantity">
                        <button class="addToCartBtn">Add To Cart</button>
                    </form>
                </div>
            @endforeach
    </section>

    <!-- product section ends -->

    <!-- about section starts  -->

    <section class="about" id="about">

        <h3 class="sub-heading"> About Truuu Foods</h3>
        <h1 class="heading"> why choose us? </h1>

        <div class="row">

            <div class="image">
                <img src="https://th.bing.com/th/id/OIP.UbFOyPD5Hil-ZCPtgGGgvwHaE8?pid=ImgDet&rs=1" alt="">
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

    <!-- menu section starts  -->

    <section class="menu" id="menu">

        <h3 class="sub-heading"> Our Menu </h3>
        <h1 class="heading"> POPULAR SEA FOOD ORDER </h1>

        <div class="box-container">

            <div class="box">
                <div class="image">
                    <img src="https://th.bing.com/th/id/OIP.UbFOyPD5Hil-ZCPtgGGgvwHaE8?pid=ImgDet&rs=1" alt="">
                    <a href="#" class="fas fa-heart"></a>
                </div>
                <div class="content">
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <h3>Red Snapper</h3>
                    <p>medium</p>
                    {{-- <a href="#" class="btn">add to cart</a> --}}
                    <span class="price">$1000</span>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="https://www.wingofstmawes.co.uk/wp-content/uploads/2016/10/lobster2-wing-fish.jpg" alt="">
                    <a href="#" class="fas fa-heart"></a>
                </div>
                <div class="content">
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <h3>Lobster</h3>
                    <p>medium</p>
                    {{-- <a href="#" class="btn">add to cart</a> --}}
                    <span class="price">$1200</span>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="https://www.eastwestseafoods.com/wp-content/gallery/cache/191_crop_200x180_pink-shrimp-thumb.jpg" alt="">
                    <a href="#" class="fas fa-heart"></a>
                </div>
                <div class="content">
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <h3> shrimp </h3>
                    <p>medium</p>
                    {{-- <a href="#" class="btn">add to cart</a> --}}
                    <span class="price">$12.99</span>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="https://alchetron.com/cdn/doctorfish-tang-968ee5a5-12fb-4590-a9e4-8225c57783e-resize-750.jpg" alt="">
                    <a href="#" class="fas fa-heart"></a>
                </div>
                <div class="content">
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <h3>Doctor</h3>
                    <p>medium</p>
                    {{-- <a href="#" class="btn">add to cart</a> --}}
                    <span class="price">$700</span>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="https://beaconfisheries.com/wp-content/uploads/2015/06/SNAPPER-1-365x248.jpg" alt="">
                    {{-- <a href="#" class="fas fa-heart"></a> --}}
                </div>
                <div class="content">
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <h3>Yellow tall Snapper</h3>
                    <p>Medium</p>
                    {{-- <a href="#" class="btn">add to cart</a> --}}
                    <span class="price">$1000</span>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="https://th.bing.com/th/id/R.c4cbd0e6a4372d2be93951b8799b2f03?rik=VT4bn7lGZQAD0g&riu=http%3a%2f%2fwww.filmingflorida.com%2fwp%2fwp-content%2fuploads%2f2014%2f05%2fFF_140423_01_1285-1024x419.jpg&ehk=1oEzXiKK5ZkQDxgKO9YouoDm%2fZhJhAb4qbmy%2faUm3ak%3d&risl=&pid=ImgRaw&r=0" alt="">
                    <a href="#" class="fas fa-heart"></a>
                </div>
                <div class="content">
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <h3>Grunt</h3>
                    <p>Medium</p>
                    {{-- <a href="#" class="btn">add to cart</a> --}}
                    <span class="price">$700</span>
                </div>
            </div>

        </div>

    </section>

    <!-- menu section ends -->

    <!-- review section starts  -->

    <section class="review" id="review">

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
                    <p>Love the food its amazing done with such care and loving </p>
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
                    <p>Love the food its amazing done with such care and loving </p>
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
                    <p>Love the food its amazing done with such care and loving </p>
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
                    <p>Love the food its amazing done with such care and loving </p>
                </div>

            </div>

        </div>

    </section>

    <!-- review section ends -->


    <!-- order section starts  -->

    <section class="order" id="order">

        <h3 class="sub-heading"> Make a Comement </h3>
        <h1 class="heading"> Add review Bellow </h1>

        <form action="">
            <div class="inputbox">
                <img src="https://i.pinimg.com/736x/e7/a5/cc/e7a5cc45fc9dc6c05a6cddd0def07e93--jamaica-trinidad.jpg"
                style="height: 80px; border-radius:50%; width:7rem; margin-left:40%;">
           </div>

            <div class="inputBox">
                <div class="input">
                    <span>Add a review</span>
                    <input type="text" placeholder="">
                </div>

                <div class="input">
                    <span>Last Name</span>
                    <input type="text" placeholder="enter your Last Name">
                </div>
            </div>
            </div>

            <input type="submit" value="Enter" class="btn">

        </form>

    </section>

    <!-- order section ends -->

    <!-- footer section starts  -->

    <section class="footer">

        <div class="box-container">

            <div class="box">
                <h3>locations</h3>
                <a href="#">Clarednon</a>
                <a href="#">Kingstone</a>
                <a href="#">Mandevile</a>
                <a href="#">Maypen</a>
                <a href="#">Lionel Town</a>
            </div>

            <div class="box">
                <h3>quick links</h3>
                <a href="#">home</a>
                <a href="#">dishes</a>
                <a href="#">about</a>
                <a href="#">menu</a>
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
    <div class="loader-container">
        <img src="images/loader.gif" alt="">
    </div>



    @include('javascript')

    <script>
        $(document).ready(function () {


            $('.addToCartBtn').click(function (e) {
            e.preventDefault();


        var prod_id  = $(this).closest('.product_data').find('.prod_id')val();
        var prod_qty = $(this).closest('.product_data').find('.qty-input')val();


        $.ajax({
            method: "POST",
            url: "/addto-cart",
            data: {
                'product_id': product_id,
                'product_qty': product_qty,
            };

            success: function (){

            }
        });
        });


// increes the value
        $('.increment-btn').click(function (e) {
            e.preventDefault();


        var inc_value = $('.qty-input').val();
        var value = parseInt(inc_value, 10);
        value = isNaN(value) ? 0: value;
        if(value < 10)
        {
            value++;
            $('.qty-input').val(value);
        }
        });


// decrees the value
        $('.decrement-btn').click(function (e){
            e.preventDefault();

        var dec_value = $('.qty-input').val();
        var value = parseTnt(dec_value, 10);
        value = isNaN(value) ? 0: value;
        if(value > 1)
        {
            value--;
            $('.qty-input').val(value);
        }

        });
    });
    </script>
</body>

</html>
