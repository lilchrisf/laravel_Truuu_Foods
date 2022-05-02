<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
@include('header')
<div class="container py-5">
    <div class="row" style="margin-top: 5%">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>Order View</h4>
                </div>

            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <label for="">First Name</label>
                        <div class="border p-2">fff</div>
                        <label for="">Last Name</label>
                        <div class="border p-2">ff</div>
                        <label for="">Phone</label>
                        <div class="border p-2">ffff</div>
                        <label for="">Email</label>
                        <div class="border p-2">ff</div>
                        <label for="">Parish</label>
                        <div class="border p-2">ff</div>
                        <label for="">Town</label>
                        <div class="border p-2">ff</div>
                    </div>
                    <table class="table table-bordered" style="width: 49%">
                        <thead>
                            <tr>
                                <th>Order Date</th>
                                <th>Tracking Number</th>
                                <th>Total Price</th>
                                <th> Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ( $orders as $item )
                            <tr>
                                <td>{{ $item->tracking_no}}</td>
                                <td>{{ $item->total_price}}</td>
                                <td>{{ $item->status == '0' ?'pending': 'completed'}}</td>
                                <td>
                                    <a href="{{ url('view-order/'.$item->id)}}" class="btn btn_primary">View</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            </div>
        </div>
        </div>
    </div>
</div>
