<!DOCTYPE html>
<html>
    <script src="https://checkout.razorpay.com/v1/checkout.js"></script>
<head>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }


        th,
        td {
            text-align: left;
            padding: 8px;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2
        }

        th {
            font-size: 1.5rem;
            width: 10%;
            color: var(--light-color);
        }

        body{
            background: #eee;
        }

    </style>
</head>

@include('header')

<!-- order section starts  -->

<section class="order" id="order" style="margin-top:; background: none;">

    {{-- <h3 class="sub-heading"> order now </h3> --}}
    <h1 class="heading" style="margin-top:5%;"> free and fast </h1>
    <div class="orders">


        {{-- Shipping address forms Start Here --}}
        <form action="{{ url('place-order') }}" method="POST">
            {{ csrf_field() }}
            <div class="inputBox">
                <div class="input">
                    <span>First Name</span>
                    <input type="text" class="fname" value="{{ Auth::user()->fname }}" name="fname"placeholder="enter your First Name">
                    <span id="fname_error" class="text-danger"></span>
                </div>

                <div class="input">
                    <span>Last Name</span>
                    <input type="text" class="lname" value="{{ Auth::user()->lname }}" name="lname"placeholder="enter your Last Name">
                    <span id="lname_error"></span>
                </div>

                <div class="input">
                    <span>Your number</span>
                    <input type="number" class="phone" value="{{ Auth::user()->phone }}" name="phone" placeholder="enter your number">
                    <span id="phone_error"></span>
                </div>

                <div class="input">
                    <span>Email</span>
                    <input type="text" class="email" value="{{ Auth::user()->email }}" name="email" placeholder="Enter Email here">
                    <span id="email_error"></span>
                </div>
            </div>
            <div class="inputBox">
                <div class="input">
                    <span> Parish </span>
                    <input type="text" class="parish" value="{{ Auth::user()->parish }}" name="parish" placeholder="Enter Parish">
                    <span id="parish_error"></span>
                </div>

                <div class="input">
                    <span>Town </span>
                    <input type="text" class="town" value="{{ Auth::user()->town }}" name="town"placeholder="Enter the closet Town ">
                    <span id="town_error"></span>
                </div>
            </div>
            <div class="inputBox">
                <div class="input">
                    <span> Address 1 </span>
                    <input type="text" placeholder="Enter Address 1">
                </div>

                <div class="input">
                    <span>Address 2 </span>
                    <input type="text" placeholder="Enter Address 2 ">
                </div>
            </div>

            <div class="inputBox">
                <div class="input">
                    <span> Pin </span>
                    <input type="text" placeholder="Enter Pin">
                </div>

                <div class="input">
                    <span>State </span>
                    <input type="text" placeholder="Enter State ">
                </div>
            </div>
            <button type="submit" class="btn"> Place Order | COD</button>
            <button type="button" class="btn razordpay_btn"> Pay with Razorpay</button>
        </form>


        <form>
            <table>
                <tr>
                    <th></th>
                    <th>Name</th>
                    <th>Qty</th>
                    <th>Price</th>
                </tr>

                @foreach ($cartItems as $item)
                    <tr>
                        <td class="hidden pb-4 md:table-cell">
                            <a href="#">
                                <img src="{{$item->products->image}}" class="w-20 rounded" alt="Thumbnail"
                                    style="width: 50px; border-radius:100%;">
                            </a>
                        </td>

                        <td>
                            <a href="#">
                                <input style="width: 90%; background-color:rgba(255, 255, 255, 0);" type="text" disabled value={{$item->products->name}}>
                            </a>
                        </td>

                        <td class="justify-center mt-6 md:justify-end md:flex">
                            <a href="#">
                                <input style="width: 90%; background-color:rgba(255, 255, 255, 0);" type="text" disabled value={{$item->prod_qty}}>
                            </a>
                        </td>

                        <td class="justify-center mt-6 md:justify-end md:flex">
                            <a href="#">
                                <input style="width: 90%; background-color:rgba(255, 255, 255, 0);" type="text" disabled value={{ $item->products->selling_price }}>
                            </a>
                        </td>
                    </tr>
                @endforeach
            </table>
        </form>

    </div>

</section>
{{-- @include('javascript') --}}


<script>
    $(document).ready(function (){
        $('.razordpay_btn').click(function (e){
            e.preventDefault();

            var lname  =$('.lname').val();
            var phone  =$('.phone').val();
            var email  =$('.email').val();
            var fname  =$('.fname').val();
            var parish =$('.parish').val();
            var town   =$('.town').val();

            if(!fname)
            {
                fname_error ="First name is requird";
                $('#fname_error').html('');
                $('#fname_error').html(fname_error);
            }
            else
            {
                fname_error ="";
                $('#fname_error').html();
            }

            if(!lname)
            {
                lname_error =" Last name is requird";
                $('#lname_error').html('');
                $('#lname_error').html(lname_error);
            }
            else
            {
                lname_error ="";
                $('#lname_error').html();
            }

            if(!phone)
            {
                phone_error =" Phone number is requird";
                $('#phone_error').html('');
                $('#phone_error').html(phone_error);
            }
            else
            {
                phone_error ="";
                $('#phone_error').html();
            }

            if(!email)
            {
                email_error ="email is requird";
                $('#email_error').html('');
                $('#email_error').html(email_error);
            }
            else
            {
                email_error ="";
                $('#email_error').html();
            }

            if(!parish)
            {
                parish_error ="Parish name is requird";
                $('#parish_error').html('');
                $('#parish_error').html(parish_error);
            }
            else
            {
                parish_error ="";
                $('#parish_error').html();
            }

            if(!town)
            {
                town_error =" Town is requird";
                $('#town_error').html('');
                $('#town_error').html(town_error);
            }
            else
            {
                town_error ="";
                $('#town_error').html();
            }

            if(fname_error !=''|| lname_error !=''|| phone_error !=''|| email_error !=''|| parish_error !=''|| town_error !='')
            {
                return false;
            }
            else
            {
                var data ={
                    'fname':fname,
                    'lname':lname,
                    'phone':phone,
                    'email':email,
                    'parish':parish,
                    'town':town ,
                }

                $.ajaxSetup({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        }
                    });


                 $.ajax({
                     method: "POST",
                     url: "/proceed-to-pay",
                     data: data,
                     success: function (response){
                        // alert(response.total_price)

var options = {
    "key": "rzp_test_mdiimy0K8bnrsH", // Enter the Key ID generated from the Dashboard
    "amount": "response.total_price*100", // Amount is in currency subunits. Default currency is INR. Hence, 50000 refers to 50000 paise
    "currency": "INR",
    "name": response.fname+' '+response.lname,
    "description": "Thank you for choosing us",
    "image": "https://example.com/your_logo",
    // "order_id": "order_9A33XWu170gUtm", //This is a sample Order ID. Pass the `id` obtained in the response of Step 1
    "handler": function (response){
        alert(response.razorpay_payment_id);

        $ajax({
            method: "POST",
            url: "/place-order",
            data: "data",
            datatype: "datatype",
            success: function (response){

            }
        })


    },
    "prefill": {
        "name": response.fname+' '+response.lname,
        "email": response.email,
        "contact": response.phone
    },
    // "notes": {
    //     "address": "Razorpay Corporate Office"
    // },
    "theme": {
        "color": "#3399cc"
    }
};
var rzp1 = new Razorpay(options);
    rzp1.open();
}
})
}
});
});
</script>
