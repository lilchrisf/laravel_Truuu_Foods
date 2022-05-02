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

        body{
            background: #eee;
        }

    </style>
</head>

@include('header')

<!-- order section starts  -->

<section class="order" id="order" style="margin-top:; background: none;">

    {{-- <h3 class="sub-heading"> order now </h3> --}}
    <h1 class="heading" style="margin-top:5%;"> Order Details View </h1>
    <div class="orders">


        {{-- Shipping address forms Start Here --}}
        <form>
            <div class="inputBox">
                <div class="input">
                    <span>First Name</span>
                    <input type="text" value="{{ $orders->fname }}">
                </div>

                <div class="input">
                    <span>Last Name</span>
                    <input type="text" value="{{ $orders->lname }}">
                </div>

                <div class="input">
                    <span>Your number</span>
                    <input type="text" value="{{ $orders->phone }}">
                </div>

                <div class="input">
                    <span>Email</span>
                    <input type="text" value="{{ $orders->email }}">
                </div>
            </div>
            <div class="inputBox">
                <div class="input">
                    <span> Parish </span>
                    <input type="text" value="{{ $orders->parish }}">
                </div>

                <div class="input">
                    <span>Town </span>
                    <input type="text" value="{{ $orders->town }}">
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
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Quantity</th>
                        <th> Price</th>
                        <th>Image</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        @foreach ( $orders as $item )
                        <td>{{ $item->prudcts->name}}</td>
                        <td>{{ $item->qty}}</td>
                        <td>{{ $item->price}}</td>
                        <td>{{ $item->status == '0' ?'pending': 'com'}}</td>
                        <td>
                            <img src="{{$item->products->image}}" width="40 " alt="">
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <h4> Grand Total: {{$orders->total_price}}</h4>
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
