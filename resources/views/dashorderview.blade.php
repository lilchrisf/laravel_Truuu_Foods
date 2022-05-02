<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<head>
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
            height: 40px;
            width: 40px;
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
@include('dash')
<div class="container py-5">
    <div class="row" style="margin-top: 4%">
        <div class="col-md-12">
            <div class="card" style="width: 90%; height: 93%">
                <div class="card-header" style="display: block">
                    <h4 style="font-weight: bold">Order View
                        <a href="{{ url('dashorder')}}" class="btn btn-warning text-white float-end"> Back</a>
                    </h4>
                </div>

            <div class="card-body">
                <div class="row">
                    <div class="col-md-6 order">
                        <h4>Shipping Details
                        </h4>
                        <hr>
                        <label for="" style="font-weight: bold">First Name</label>
                        <div class="border p-2">{{ $orders->fname }}</div>
                        <label for="" style="font-weight: bold">Last Name</label>
                        <div class="border p-2">{{ $orders->lname }}</div>
                        <label for="" style="font-weight: bold">Phone</label>
                        <div class="border p-2">{{ $orders->phone }}</div>
                        <label for="" style="font-weight: bold">Email</label>
                        <div class="border p-2">{{ $orders->email }}</div>
                        <label for="" style="font-weight: bold">Parish</label>
                        <div class="border p-2" style="height: 8%">{{ $orders->parish }}</div>
                        <label for="" style="font-weight: bold">Town</label>
                        <div class="border p-2" style="height: 8%">{{ $orders->town }}</div>
                    </div>
                    <div class="col-md-6">
                    <h4>Order Details</h4>
                    <hr>
                    <table class="table table-bordered" style="width: 99%">
                        <thead>
                            <tr>
                                <th>name</th>
                                <th>Quantity</th>
                                <th> Price</th>
                                <th> image</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($orders->orderitems as $item )
                            <tr>
                                <td>{{ $item->products->name}}</td>
                                <td>{{ $item->qty}}</td>
                                <td>{{ $item->price}}</td>
                                <td>
                                    <img src="{{ $item->products->image}}" width="50px" alt="">
                                </td>
                                <td>
                                    <a href="{{ url('view-order/'.$item->id)}}" class="btn btn_primary">View</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <h4 class="px-2">Grand Total: <span class="float-end">${{ $orders->total_price}}</span></h4>
                    <div class="mt-5 px-2">
                    <form action="{{ url('update-order/'.$orders->id)}}" method="POST">
                    @csrf

                    @method('PUT')
                <label for="">Order Status</label>
                <select class="form-select" ariel-label="Default select example" name="status">
                    <option {{ $orders->status == '0'?'selected':''}} value="0"> Pending </option>
                    <option {{ $orders->status == '1'?'selected':''}} value="1"> Completed </option>
                </select>
                <button type="submit" class="btn-primary float-end px-2 mt-3">Update</button>
            </form>

                </div>
                </div>
            </div>
            </div>
            </div>
        </div>
        </div>
    </div>
</div>
