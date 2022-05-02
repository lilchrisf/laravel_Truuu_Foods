<!DOCTYPE html>
<html>

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

    </style>
</head>

@include('header')

<!-- order section starts  -->

<section class="order" id="order" style="margin-top:5%; background: none;">

    {{-- <h3 class="sub-heading"> order now </h3> --}}
    <h1 class="heading"> free and fast </h1>
    <div class="orders">


        {{-- Shipping address forms Start Here --}}
        <form action="{{ url('place-order') }}" method="POST">
            {{ csrf_field() }}
            <div class="inputBox">
                <div class="input">
                    <span>First Name</span>
                    <input type="text" value="{{ Auth::user()->fname }}" name="fname"
                        placeholder="enter your First Name">
                </div>

                <div class="input">
                    <span>Last Name</span>
                    <input type="text" value="{{ Auth::user()->lname }}" name="lname"
                        placeholder="enter your Last Name">
                </div>

                <div class="input">
                    <span>Your number</span>
                    <input type="number" value="{{ Auth::user()->phone }}" name="phone"
                        placeholder="enter your number">
                </div>

                <div class="input">
                    <span>Email</span>
                    <input type="text" value="{{ Auth::user()->email }}" name="email" placeholder="Enter Email here">
                </div>
            </div>
            <div class="inputBox">
                <div class="input">
                    <span> Parish </span>
                    <input type="text" value="{{ Auth::user()->parish }}" name="parish" placeholder="Enter Parish">
                </div>

                <div class="input">
                    <span>Town </span>
                    <input type="text" value="{{ Auth::user()->town }}" name="town"
                        placeholder="Enter the closet Town ">
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
            {{-- <input type="submit" value="Place Order | COD" class="btn"> --}}
            <button type="button" class="btn razorpay_btn"> Pay with Razorpay</button>

        </form>


        <form>
            <table>
                <tr>
                    <th></th>
                    <th>Name</th>
                    <th>Qty</th>
                    <th>Price</th>
                </tr>

                {{-- @foreach ($cartItems as $item)
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
                                <input style="width: 90%; background-color:rgba(255, 255, 255, 0);" type="text" disabled value={{ $item->price }}>
                            </a>
                        </td>
                    </tr>
                @endforeach --}}
            </table>
        </form>

    </div>

</section>
@include('javascript')


<script>
    $(document).ready(function (){
        $('.razordpay_btn').click(function (e){
            e.preventDault();
        });
    });
</script>
