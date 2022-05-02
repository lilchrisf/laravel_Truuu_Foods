@include('header')
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Members Table</title>
    <link rel="stylesheet" href="style.css" />
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Roboto:ital@1&display=swap');

         { */
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            width: 100%;
            display: flex;
            /* justify-content: center; */
            font-family: 'Roboto', sans-serif;
            background-color: #adacac;
        }

        table {
            width: 80%;
            height: 50px;
            margin-left: 12%;
            border-collapse: collapse;
        }

        .header_fixed {
            max-height: 60%;
            margin-top: 105px;
            margin-left: 15px;
            width: 97%;
            overflow: auto;
            /* border: 1px solid #dddddd; */
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
            justify-content: center;
            text-align: center;
        }

        td img {
            height: 60px;
            width: 60px;
            border-radius: 100%;
            border: 5px solid #e6e7e8;
            justify-content: center;
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

<div class="container" style="width: 100%">
    <div class="row">
        <div class="col-md-12" style="">
            <div class="header_fixed">
                <table>
                    <thead>
                        <tr>
                            <th>Tracking Number</th>
                            <th>Total Price</th>
                            <th> Action</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            @foreach ( $orders as $item )
                            <td>{{ $item->tracking_no}}</td>
                            <td>{{ $item->total_price}}</td>
                            <td>{{ $item->status == '0' ?'pending': 'com'}}</td>
                            <td>
                                <a href="{{ url('view-order/'.$item->id)}}">View</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
