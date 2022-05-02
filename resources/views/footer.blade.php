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
