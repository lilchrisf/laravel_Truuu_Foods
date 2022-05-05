<!-- footer section starts  -->

<section class="footer">

    <div class="box-container">

        <div class="box">
            <h3>locations</h3>
            <h3 style="font-size: 1.5rem">Clarendon</h3>
            <h3 style="font-size: 1.5rem">kingston</h3>
            <h3 style="font-size: 1.5rem">Mandevile</h3>
            <h3 style="font-size: 1.5rem">May pen</h3>
            <h3 style="font-size: 1.5rem">Lionel Town</h3>
        </div>

        <div class="box">
            <h3>quick links</h3>
            <h3 style="font-size: 1.5rem">Home</h3>
            <h3 style="font-size: 1.5rem">Category</h3>
            <h3 style="font-size: 1.5rem">About</h3>
            <h3 style="font-size: 1.5rem">Populor</h3>
            <h3 style="font-size: 1.5rem">Review</h3>
            <h3 style="font-size: 1.5rem">Order</h3>
        </div>

        <div class="box">
            <h3>contact info</h3>
            <h3 style="font-size: 1.5rem">+1876-791-1687</h3>
            <h3 style="font-size: 1.5rem">+1876-222-3333</h3>
            <h3 style="font-size: 1.5rem">christopherwatson299@gmail.com</h3>
            <h3 style="font-size: 1.5rem">Clrendon, Rocky - 1345</h3>
        </div>

        <div class="box">
            <h3>follow us</h3>
            <h3 style="font-size: 1.5rem">facebook</h3>
            <h3 style="font-size: 1.5rem">twitter</h3>
            <h3 style="font-size: 1.5rem">instagram</h3>
            <h3 style="font-size: 1.5rem">linkedin</h3>
        </div>

    </div>

    <div class="credit"> Yours Truly <span> Lilchris F Truuu</span> </div>

</section>

<!-- footer section ends -->

<!-- footer section ends -->

<div class="">
    <img src="https://i1.wp.com/www.pixvc.com/wp-content/uploads/2016/11/Truuue_logo_V1.png?ssl=1" alt=""
    style="margin-left: 30%">
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
