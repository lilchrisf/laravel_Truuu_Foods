@include('dash')

<div class="cards">
    <div class="card-single">
        <div>
            <h1>{{ $user }}</h1>
            <span>Members</span>
        </div>

        <div>
            <span class="las la-users"></span>
        </div>
    </div>

    <div class="card-single">
        <div>
            <h1>{{ $product }}</h1>
            <span>Products</span>
        </div>

        <div>
            <span class="las la-fish"></span>
        </div>
    </div>

    <div class="card-single">
        <div>
            <h1>{{ $orders }}</h1>
            <span>Orders</span>
        </div>

        <div>
            <span class="las la-clipboard-list"></span>
        </div>
    </div>

    <div class="card-single">
        <div>
            <h1>$50K</h1>
            <span>Income</span>
        </div>

        <div>
            <span class="lab la-google-wallet"></span>
        </div>
    </div>
</div>


<div class="recent-grid">
    <div class="projects">
        <div class="card" style="height: 400px">
            <div class="card-header">
                <h2> Add Products</h2>

                <button> See All <span class="las la-arrow-right">
                    </span></button>
            </div>

            <div class="card-body">
                <div class="table-responsive" style="height: 300px;">
                    <table width="100%">

                        <form class="form" action="{{ url('add.product') }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf

                            <div class="tilesss">

                                <div class="div2" style="margin-top:0px">
                                    <div class="td">Category</div>
                                    <select class="inputform" name="cate_id">
                                        <option value="">Select a category</option>
                                        @foreach ($category as $item)
                                            <option value="{{ $item->id }}">{{ $item->name }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="div2">
                                    <div class="td">Name</div>
                                    <input class="inputform" type="text" id="password" name="name">
                                </div>

                                <div class="div2">
                                    <div class="td">Small Description</div>
                                    <input class="inputform" type="text" id="password" name="small_description">
                                </div>

                                <div class="div2">
                                    <div class="td">Description</div>
                                    <input class="inputform" type="text" id="password" name="description">
                                </div>

                                <div class="div2" style="margin-top:0px">
                                    <div class="td">Oringal Price</div>
                                    <input class="inputform" type="text" id="password" name="original_price">
                                </div>

                                <div class="div2">
                                    <div class="td">selling Price</div>
                                    <input class="inputform" type="text" id="password" name="selling_price">
                                </div>

                                <div class="div2">
                                    <div class="td">Image</div>
                                    <input class="inputform" type="text" id="password" name="image">
                                </div>

                                <div class="div2">
                                    <div class="td">Quantity</div>
                                    <input class="inputform" type="text" id="password" name="qty">
                                </div>

                                <div class="div2">
                                    <div class="td">Tax</div>
                                    <input class="inputform" type="text" id="password" name="tax">
                                </div>

                                <div class="div2">
                                    <div class="td">Status</div>
                                    <input class="inputform" type="checkbox" id="password" name="status" value="1">
                                </div>

                                <div class="div2">
                                    <div class="td">Trending</div>
                                    <input class="inputform" type="checkbox" id="password" name="trending" value="1">
                                </div>

                                <div class="div2">
                                    <div class="td">Meta Title</div>
                                    <input class="inputform" type="text" id="password" name="meta_title">
                                </div>

                                <div class="div2">
                                    <div class="td">Meta Description</div>
                                    <input class="inputform" type="text" id="password" name="meta_description">
                                </div>

                                <div class="div2">
                                    <div class="td">Meta Keyword</div>
                                    <input class="inputform" type="text" id="password" name="meta_keyword">
                                </div>

                                <div class="div2">
                                    <div class="td">
                                        <button class="button"> Submit Quries</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </table>
                </div>

            </div>
        </div>


        <div class="customers">
            <div class="card" style="width: 89%">
                <div class="card-head">
                    <h3> New Products</h3>

                    <button> See All <span class="las la-arrow-right"></span>
                    </button>
                </div>

                <div class="card-body">
                    @foreach ($products as $product)
                        <div class="customer">
                            <div class="info">
                                <img src="{{ url($product->image) }}" width="40px" height="40px" alt="">
                                <div>
                                    <h4>{{ $product->name }}</h4>
                                    <small>{{ $product->cate_id}}</small>
                                    <small>${{ $product->selling_price }}</small>

                                </div>

                            </div>
                            <div class="contact">

                                <a href="{{ url('delete-product/' . $product->id) }}"><span
                                        class="las la-user-times"></a>
                                <a href="{{ url('edit-product/' . $product->id) }}"
                                    class="btn btn-primary btn-sm"><span class="las la-user-edit"></span></a>

                            </div>
                        </div>
                    @endforeach
                </div>






            </div>

        </div>
    </div>
</div>
</div>
