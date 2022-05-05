@include('dash')

<div class="cards">
    <div class="card-single">
        <div>
            <h1>{{ $user}}</h1>
            <span>Members</span>
        </div>

        <div>
            <span class="las la-users"></span>
        </div>
    </div>

    <div class="card-single">
        <div>
            <h1>{{$product}}</h1>
            <span>Products</span>
        </div>

        <div>
            <span class="las la-fish"></span>
        </div>
    </div>

    <div class="card-single">
        <div>
            <h1>{{$orders}}</h1>
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
            <h2> Add Category</h2>

            <button> See All <span class="las la-arrow-right">
            </span></button>
        </div>

        <div class="card-body">
            <div class="table-responsive" style="height: 300px;">
                <table width="100%">

<form class="form"  action="{{ url('add.category') }}" method="POST">
    @csrf

                    <div class="tilesss">

                        <div class="div2" style="margin-top:0px">
                            <div class="td">Name</div>
                            <input class="inputform" type="text" id="password" name="name">
                        </div>

                        <div class="div2">
                            <div class="td">Slug</div>
                            <input class="inputform" type="text" id="password" name="slug">
                        </div>

                        <div class="div2">
                            <div class="td">Description</div>
                            <input class="inputform" type="text"  id="password" name="description">
                        </div>

                        <div class="div2">
                            <div class="td">Status</div>
                            <input class="inputform" type="checkbox"  id="password" name="Status" value="1">
                        </div>

                        <div class="div2">
                            <div class="td">Image</div>
                            <input class="inputform" type="text"  id="password" name="image">
                        </div>

                        <div class="div2">
                            <div class="td">Popular</div>
                            <input class="inputform" type="checkbox"  id="password" name="popular" value="1">
                        </div>

                        <div class="div2">
                            <div class="td">Meta Title</div>
                            <input class="inputform" type="text"  id="password" name="meta_title">
                        </div>

                        <div class="div2">
                            <div class="td">Meta_descrip</div>
                            <input class="inputform" type="text"  id="password" name="meta_descrip">
                        </div>

                        <div class="div2">
                            <div class="td">Meta keyword</div>
                            <input class="inputform" type="text"  id="password" name="meta_keyword">
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
            @foreach ($categories as $category)
                <div class="customer">
                        <div class="info">
                            <img src="{{ url($category->image) }}" width="40px"
                            height="40px" alt="">
                        <div>
                            <h4>{{ $category->name }}</h4>
                            <small>{{ $category->id }}</small>
                            <small>${{ $category->price }}</small>

                        </div>

                    </div>
                    <div class="contact">

                        <a href="{{ url('delete-category/'.$category->id) }}"><span class="las la-user-times"></a>
                        <a href="{{ url('edit-category/'.$category->id) }}" class="btn btn-primary btn-sm"><span class="las la-user-edit"></span></a>

                    </div>
                </div>
            @endforeach
        </div>






    </div>

    </div>
</div>
</div>
</div>
