<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Table Design || Future Web</title>
    <link rel="stylesheet" href="style.css" />
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Roboto:ital@1&display=swap');

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            width: 100%;
            display: flex;
            justify-content: center;
            font-family: 'Roboto', sans-serif;
            background-color: #adacac;
        }

        table {
            width: auto;
            height: 50px;
            border-collapse: collapse;
        }

        .header_fixed {
            max-height: 60%;
            margin-top: 105px;
            margin-left: 5%;
            width: 90%;
            overflow: auto;
            border: 1px solid #dddddd;
        }

        .header_fixed thead th {
            position: sticky;
            top: 0;
            background-color: black;
            color: #e6e7e8;
            font-size: 15px;
        }

        th,
        td {
            border-bottom: 1px solid #dddddd;
            padding: 10px 20px;
            font-size: 14px;
        }

        td img {
            height: 60px;
            width: 60px;
            border-radius: 100%;
            border: 5px solid #e6e7e8;
        }

        tr:nth-child(even) {
            background-color: #dddddd;
        }

        tr:nth-child(odd) {
            background-color: #edeef1;
        }

        tr:hover td {
            color: #44b478;
            cursor: pointer;
            background-color: #ffffff;
        }

        td button {
            border: none;
            padding: 7px 20px;
            border-radius: 20px;
            background-color: black;
            color: #e6e7e8;
        }

        ::-webkit-scrollbar {
            width: 6px;
        }

        ::-webkit-scrollbar-track {
            -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.3);
        }

        ::-webkit-scrollbar-thumb {
            -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.3);
        }

    </style>
</head>

<body>
    @include('dash')
    <h4 class="text-white">Order History
        <a href="{{ 'order-history'}}" class="btn btn-warning float-end"> New Order</a>
    </h4>
    <div class="header_fixed">
        <table>
            <thead>
                <tr>
                    <th>ID No.</th>
                    <th>Profile Pic</th>
                    <th>Date </th>
                    <th>User ID</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Phone </th>
                    <th>Email</th>
                    <th>Parish</th>
                    <th>Town</th>
                    <th>Tracking Number</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    @foreach ($orders as $order)
                        <td>{{ $order->id }}</td>
                        <td><img src=https://drive.google.com/uc?export=view&id=1etQq1OkAD4IBBUo7vh2f0fb6ji5qpR4t />
                        </td>
                        <td>{{ date('d-m-y',strtotime($order->created_at)) }}</td>
                        <td>{{ $order->user_id }}  </td>
                        <td>{{ $order->fname }}  </td>
                        <td>{{ $order->lname }}  </td>
                        <td>{{ $order->phone }}  </td>
                        <td>{{ $order->email }}  </td>
                        <td>{{ $order->parish }} </td>
                        <td>{{ $order->town }}   </td>
                        <td>{{ $order->tracking_no }}   </td>
                        <td>
                            <a href="{{url('admin/view-order/'.$order->id) }}"><button>View</button></a>
                        </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>

</html>
