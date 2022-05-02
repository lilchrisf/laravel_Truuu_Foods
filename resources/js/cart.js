
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
