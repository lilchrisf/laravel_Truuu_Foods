<html>
    <head>
        <meta name="csrf-token" content="{{ csrf_token() }}" />
        <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
        <title> shopping-cart</title>
    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    </head>
    <body>
        @include('foodcss')
        <header>

            <a href="category" class="logo"><i class="fas fa-fish"></i>Truuu Foods.</a>

            <nav class="navbar">
                <a class="active" href="category">home</a>
                <a href="#dishes">Products</a>
                <a href="#about">about</a>
                <a href="#menu">Populor</a>
                <a href="contact">Contact</a>
                <a href="userorder">My Order</a>
                @if (Route::has('login'))
                    @auth
                    
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                        @endif
                    @endauth
               @endif

            </nav>

            <div class="icons">
                <i class="fas fa-bars" id="menu-bars"></i>
                <i class="fas fa-search" id="search-icon"></i>
                <a href="#" class="fas fa-heart"></a>
                <a href="{{ route('cart.list') }}" class="fas fa-shopping-cart cart.count">{{ $cartcount }}</a>
                {{-- <a href="{{ route('cart.list') }}" class="fas fa-shopping-cart cart-count">0</a> --}}


                <i class="fas fa-user" id="dropbtn">
                    <div class="dropdown">
                        <div class="dropdown-content" style="border-radius:50%; padding:5px" >

                            @if (Route::has('login'))
                    @auth
                    {{-- <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown"> --}}
                        <span style="margin-left: 0px; border-radius:50%" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                    </span>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                            {{ Auth::user()->name }}
                        </form>

                    @else

                    @endauth
               @endif
                        </div>
                      </div>
                </i>
            </div>
        </header>

        <form action="{{ url('searchproduct') }}" id="search-form" method="GET">
            @csrf
            <input type="search"  placeholder="search here..." name="product_name" id="search-box" style="color: white">
            <label for="search-box" class="fas fa-search" style="color: white"></label>
            <i class="fas fa-times" id="close"></i>
        </form>


<!--Start of Tawk.to Script-->
<script type="text/javascript">
    var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
    (function(){
    var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
    s1.async=true;
    s1.src='https://embed.tawk.to/625f7dc1b0d10b6f3e6e649e/1g12g6f2g';
    s1.charset='UTF-8';
    s1.setAttribute('crossorigin','*');
    s0.parentNode.insertBefore(s1,s0);
    })();
</script>
<!--End of Tawk.to Script-->

<!--Start of whatsapp link-->
        <div style="margin-top: 580px; position:fixed;" target="_blank">
            <a href=" https://wa.me/18767911687?text=I'm%20interested%20in%20your%20products%20on sale">
                <img src="https://th.bing.com/th/id/OIP.VTgI2Aaf6FpudZkQRu5UuQHaHa?pid=ImgDet&rs=1" alt="whatsapp-logo" height="60px" width="60px" style="border-radius: 50%; margin-left:25px">
            </a>
        </div>
 <!--End of whatapp link-->


<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.js"></script>
<script src="https://code.jquery.com/ui/1.13.1/jquery-ui.js"></script>
<!-- custom js file link  -->
<script>

      var availableTags = [];
      $.ajax({
        method: "Get",
        url: "/product-list",
        success: function (response){
            // console.log(response);
             startAutoComplet(response);
        }
    });

    function startAutoComplet(availableTags)
    {
        $( "#search-box" ).autocomplete({
        source: availableTags
      });
    }

</script>


{{-- section for handle all the cart activity --}}
<script>
    $(document).ready(function () {

        // loadcart();

        $('.addToCartBtn').click(function (e) {
        e.preventDefault();
    var product_id  = $(this).closest('.product_data').find('.prod_id').val();
    var product_qty = $(this).closest('.product_data').find('.qty-input').val();


    $.ajax({
        method: "POST",
        url: "/addto-cart",
        data: {
            'product_id': product_id,
            'product_qty': product_qty,

        "_token": "{{ csrf_token() }}",
        },

        success: function (){
            window.location.assign("/cart");
            swall("",response.status,"success");
        }
    });
    });

    // function loadcart()
    // {
    //     $.ajax({
    //     method: "GET",
    //     url: "/load-cart-data",
    //     success: function (){
    //         console.log(response.count)
    //         // alert(response.count)
    //     }
    // });
    // }


// increes the value
    $('.increment-btn').click(function (e) {
        e.preventDefault();


    var inc_value = $(this).closest('.product_data').find('.qty-input').val();
    var value = parseInt(inc_value, 10);
    value = isNaN(value) ? 0: value;
    if(value < 10)
    {
        value++;
        $(this).closest('.product_data').find('.qty-input').val(value);
    }
    });


// decrees the value
    $('.decrement-btn').click(function (e){
        e.preventDefault();

    var dec_value = $(this).closest('.product_data').find('.qty-input').val();
    var value = parseInt(dec_value, 10);
    value = isNaN(value) ? 0: value;
    if(value > 1)
    {
        value--;
       //  $('.qty-input').val(value);
        $(this).closest('.product_data').find('.qty-input').val(value);
    }

    });

// delet the select item from the cart
   $('.delete').click(function (e){
   e.preventDefault();

   var prod_id = $(this).closest('.product_data').find('.prod_id').val();
   // alert (prod_id);


   $.ajax({
        method: "POST",
        url: "/delete-cart-item",
        data: {
            'prod_id': prod_id,

        "_token": "{{ csrf_token() }}",
        },

        success: function (){
            window.location.assign("/cart");
            swall("",response.status,"success");
        }
    });

    });

// change the quantity and totle price and update the values
$('.changeQuantity').click(function (e){
   e.preventDefault();

   var prod_id = $(this).closest('.product_data').find('.prod_id').val();
   var qty = $(this).closest('.product_data').find('.qty-input').val();

   data = {
       'prod_id' : prod_id,
       'prod_qty' :qty,

       "_token": "{{ csrf_token() }}",
   }
   // alert (prod_id);

   $.ajax({
        method: "POST",
        url: "update-cart",
        data: data,
        datatype: "datatype",

        success: function (){
            window.location.reload()
        }
    });

    });
});
</script>
