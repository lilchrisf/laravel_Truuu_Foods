<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
@include('header')
<div class="container py-5">
    <div class="row" style="margin-top: 5%">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 style="font-size: 2.5rem">Order View
                        <a href="{{ url('userorder')}}" class="btn btn-warning text-white float-end"> Back</a>
                    </h4>
                </div>

            <div class="card-body">
                <div class="row">
                    <div class="col-md-6 order" style="">
                        <h4 style="font-size: 2.5rem">Shipping Details
                        </h4>
                        <hr>
                        <label for="" style="font-weight: bold; font-size: 1.5rem">First Name</label>
                        <div class="border p-2" style="font-size: 1.5rem">{{ $orders->fname}}</div>
                        <label for="" style="font-weight: bold; font-size: 1.5rem">Last Name</label>
                        <div class="border p-2" style="font-size: 1.5rem">{{ $orders->lname}}</div>
                        <label for="" style="font-weight: bold; font-size: 1.5rem">Phone</label>
                        <div class="border p-2" style="font-size: 1.5rem">{{ $orders->phone}}</div>
                        <label for="" style="font-weight: bold; font-size: 1.5rem">Email</label>
                        <div class="border p-2" style="font-size: 1.5rem">{{ $orders->email}}</div>
                        <label for="" style="font-weight: bold; font-size: 1.5rem">Parish</label>
                        <div class="border p-2" style="font-size: 1.5rem">{{ $orders->parish}}</div>
                        <label for="" style="font-weight: bold; font-size: 1.5rem">Town</label>
                        <div class="border p-2" style="font-size: 1.5rem">{{ $orders->town}}</div>
                    </div>
                    <div class="col-md-6">
                    <h4 style="font-size: 2.5rem">Order Details</h4>
                    <hr>
                    <table class="table table-bordered" style="width: 99%">
                        <thead>
                            <tr>
                                <th>name</th>
                                <th>Quantity</th>
                                <th> Price</th>
                                <th> image</th>
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
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <h4 class="px-3" style="font-weight: bold; font-size: 2rem">Grand Total: <span class="float-end">${{$orders->total_price}}</span></h4>
                </div>
            </div>
            </div>
            </div>
        </div>
        </div>
    </div>
</div>
