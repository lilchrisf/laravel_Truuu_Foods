<!DOCTYPE html>
<html lang="en">

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OrderItems</title>
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

        header{
            height: 80px;
        }

        .header_fixed {
            max-height: 60%;
            margin-top: 105px;
            margin-left: 15px;
            width: 95%;
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
    <div class="container py-5">
        <div class="row" style="margin-top: 4%">
            <div class="col-md-12">
                <div class="card" style="width: 90%">
                    <div class="card-header">
                        <h4>Orders Items</h4>
                        {{-- <a href="{{ url('order-history') }}" class="btn btn-warning float-end"> Back</a> --}}
                    </div>

                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>ID No.</th>
                                    <th>Profile Pic</th>
                                    <th>Order ID</th>
                                    <th>Product Name</th>
                                    <th>Quantity </th>
                                    <th>Price</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    @foreach ($items as $value)
                                        <td>{{ $value->id }}</td>
                                        <td><img
                                                src=https://drive.google.com/uc?export=view&id=1etQq1OkAD4IBBUo7vh2f0fb6ji5qpR4t />
                                        </td>
                                        <td>{{ $value->order_id }} </td>
                                        <td>{{ $value->products->name }} </td>
                                        <td>{{ $value->qty }} </td>
                                        <td>{{ $value->price }} </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
