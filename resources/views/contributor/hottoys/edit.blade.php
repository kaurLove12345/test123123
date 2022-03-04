@extends('layouts.contributor')

@section('content')
<div class="container-fluid">
            <!-- Content Row -->
    <div class="row">

        <div class="col-sm-6 ">
            <h3 class="m-0 font-weight-bold text-primary">Edit New Hot Toys Product</h3>
        </div>
        <div class="col-sm-6 text-right pb-4 ">
               <a href="{{ route('contributor_hottoys.index') }}">
                <button class="btn btn-primary btn-sm">View All Hot Toys Products</button>
               </a>
        </div>

        <div class="col-lg-12 mb-2">
            @if (Session::get('hot_toys_products_edit'))
            <div class="alert alert-success animate__animated animate__flash">
            <div class="row">
                <div class="col-sm-6">{{ Session::get('hot_toys_products_edit') }}</div> 
                <div class="col-sm-6 text-right">
                    <a class="btn btn-danger" href="{{ route('contributor_products.show', Session::get('product_id')) }}">View Product</a>
                </div>
            </div>
            </div>
            @endif 
            @include('contributor.partials.alert')           
        </div>

        <div class="col-xl-12 ">
            <div class="row card shadow mb-4">
                <div class="card-header">
                    <h6 class="m-0 font-weight-bold text-primary">
                        Edit New Hot Toys Product
                    </h6>
                </div>
                <div class="card-body">
                    <div class="col-sm-12">
                        <form action="{{ route('contributor_hottoys.update', $product->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')
                            <input type="hidden" name="product_id" value="{{ $product->id }}">
                            <div class="row px-4">
                                <div class="col-sm-4 p-1">
                                    <label for="name">Toy Name</label>
                                    <input type="text" name="name" readonly value="{{ $product->name }}" class="form-control" required placeholder="Enter Product Name">
                                </div>
                                <div class="col-sm-4 p-1">
                                    <label for="category_name">Category Name</label>
                                    <select name="category_name" readonly id="category_name" class="form-control">
                                        <option value="">Select Category</option>
                                        @foreach ($categories as $category)
                                            <option value="{{ $category->name }}" {{ $product->category_name == $category->name  ? 'selected' : '' }}>{{ $category->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-sm-4 p-1">
                                    <label for="subseries_name">Subseries Name</label>
                                    <select name="subseries_name" readonly id="subseries_name" class="form-control">
                                        <option value="">Select subseries</option>
                                        @foreach ($subseries as $sub)
                                            <option value="{{ $sub->name }}" 
                                                @if ($sub->name == $product->subseries_name)
                                                    Selected
                                                @endif
                                                >{{ $sub->name }}</option>
                                        @endforeach
                                    </select>                                
                                </div>
                                <div class="col-sm-4 p-1">
                                    <label for="model_name">Model Name</label>
                                    <input type="text" name="model_name" readonly value="{{ $product->model_name }}" class="form-control" required placeholder="Enter Model Name">
                                </div>
                                <div class="col-sm-4 p-1">
                                    <label for="year">Year</label>
                                    <input type="text" name="year" readonly value="{{ $product->year }}" class="form-control" required placeholder="Enter Year">
                                </div>
                                <div class="col-sm-4 p-1">
                                    <label for="collection_name">Collection Name</label>
                                    <input type="text" name="collection_name" readonly readonly value="{{ $product->collection_name }}" class="form-control" required placeholder="Enter Collection Name">
                                </div>

                                <div class="col-sm-6 p-1">
                                    <label for="toy_hash">Toy Hash</label>
                                    <input type="text" name="toy_hash" readonly value="{{ $product->toy_hash }}" class="form-control" required placeholder="Enter Fig Num">
                                </div>
                                <div class="col-sm-6 p-1">
                                    <label for="visibility">Visibility</label>
                                    <select name="visibility" readonly id="" class="form-control">
                                        <option value="0">Select Visibility</option>
                                        <option value="1"  {{ $product->visibility == '1' ? 'selected' : '' }}>Visible</option>
                                        <option value="0"  {{ $product->visibility == '0' ? 'selected' : '' }}>Hidden</option>
                                    </select>
                                </div>
                                <div class="col-sm-12 p-1">
                                    <label for="notes">Notes</label>
                                    <textarea name="notes" readonly id="notes" cols="30" rows="3" class="form-control">
                                        {{ $product->notes }}
                                    </textarea>
                                </div>
                                <div class="col-sm-4 p-1">
                                    <label for="">Image 1</label>
                                    <input type="file" name="image1" id="">
                                </div>
                                <div class="col-sm-4 p-1">
                                    <label for="">Image 2</label>
                                    <input type="file" name="image2" id="">
                                </div>
                                <div class="col-sm-4 p-1">
                                    <label for="">Image 3</label>
                                    <input type="file" name="image3" id="">
                                </div>

                                <div class="col-sm-12 p-1"></div>

                                <div class="col-sm-4 p-1">
                                    <label for="">Image 4</label>
                                    <input type="file" name="image4" id="">
                                </div>
                                <div class="col-sm-4 p-1">
                                    <label for="">Image 5</label>
                                    <input type="file" name="image5" id="">
                                </div>
                                <div class="col-sm-4 p-1">
                                    <label for="">Image 6</label>
                                    <input type="file" name="image6" id="">
                                </div>

                                <div class="col-sm-12 p-1"></div>

                                <div class="col-sm-4 p-1">
                                    <label for="">Image 7</label>
                                    <input type="file" name="image7" id="">
                                </div>
                                <div class="col-sm-4 p-1">
                                    <label for="">Image 8</label>
                                    <input type="file" name="image8" id="">
                                </div>
                                <div class="col-sm-4 p-1">
                                    <label for="">Image 9</label>
                                    <input type="file" name="image9" id="">
                                </div>

                                <div class="col-sm-12 p-1"></div>

                                <div class="col-sm-4 p-1">
                                    <label for="">Image 10</label>
                                    <input type="file" name="image10" id="">
                                </div>
                                <div class="col-sm-4 p-1">
                                    <label for="">Image 11</label>
                                    <input type="file" name="image11" id="">
                                </div>
                                <div class="col-sm-4 p-1">
                                    <label for="">Image 12</label>
                                    <input type="file" name="image12" id="">
                                </div>

                                <div class="col-sm-12 p-1"></div>

                                <div class="col-sm-4 p-1">
                                    <label for="">Image 13</label>
                                    <input type="file" name="image13" id="">
                                </div>
                                <div class="col-sm-4 p-1">
                                    <label for="">Image 14</label>
                                    <input type="file" name="image14" id="">
                                </div>
                                <div class="col-sm-4 p-1">
                                    <label for="">Image 15</label>
                                    <input type="file" name="image15" id="">
                                </div>

                                <div class="col-sm-12 p-1"></div>

                                <div class="col-sm-4 p-1">
                                    <label for="">Image 16</label>
                                    <input type="file" name="image16" id="">
                                </div>
                                <div class="col-sm-4 p-1">
                                    <label for="">Image 17</label>
                                    <input type="file" name="image17" id="">
                                </div>
                                <div class="col-sm-4 p-1">
                                    <label for="">Image 18</label>
                                    <input type="file" name="image18" id="">
                                </div>

                                <div class="col-sm-12 p-1"></div>

                                <div class="col-sm-4 p-1">
                                    <label for="">Image 19</label>
                                    <input type="file" name="image19" id="">
                                </div>
                                <div class="col-sm-4 p-1">
                                    <label for="">Image 20</label>
                                    <input type="file" name="image20" id="">
                                </div>
                                <div class="col-sm-4 p-1">
                                    <label for="">Image 21</label>
                                    <input type="file" name="image21" id="">
                                </div>

                                <div class="col-sm-12 p-1"></div>

                                <div class="col-sm-4 p-1">
                                    <label for="">Image 22</label>
                                    <input type="file" name="image22" id="">
                                </div>
                                <div class="col-sm-4 p-1">
                                    <label for="">Image 23</label>
                                    <input type="file" name="image23" id="">
                                </div>
                                <div class="col-sm-4 p-1">
                                    <label for="">Image 24</label>
                                    <input type="file" name="image24" id="">
                                </div>

                                <div class="col-sm-12 p-1"></div>

                                <div class="col-sm-4 p-1">
                                    <label for="">Image 25</label>
                                    <input type="file" name="image25" id="">
                                </div>
                                <div class="col-sm-4 p-1">
                                    <label for="">Image 26</label>
                                    <input type="file" name="image26" id="">
                                </div>
                                <div class="col-sm-4 p-1">
                                    <label for="">Image 27</label>
                                    <input type="file" name="image27" id="">
                                </div>

                                <div class="col-sm-12 p-1"></div>

                                <div class="col-sm-4 p-1">
                                    <label for="">Image 28</label>
                                    <input type="file" name="image28" id="">
                                </div>
                                <div class="col-sm-4 p-1">
                                    <label for="">Image 29</label>
                                    <input type="file" name="image29" id="">
                                </div>
                                <div class="col-sm-4 p-1">
                                    <label for="">Image 30</label>
                                    <input type="file" name="image30" id="">
                                </div>

                                <div class="col-sm-12 p-1"></div>

                                <div class="col-sm-4 p-1">
                                    <label for="">Image 31</label>
                                    <input type="file" name="image31" id="">
                                </div>
                                <div class="col-sm-4 p-1">
                                    <label for="">Image 32</label>
                                    <input type="file" name="image32" id="">
                                </div>
                                <div class="col-sm-4 p-1">
                                    <label for="">Image 33</label>
                                    <input type="file" name="image33" id="">
                                </div>

                                <div class="col-sm-12 p-1"></div>

                                <div class="col-sm-4 p-1">
                                    <label for="">Image 34</label>
                                    <input type="file" name="image34" id="">
                                </div>
                                <div class="col-sm-4 p-1">
                                    <label for="">Image 35</label>
                                    <input type="file" name="image35" id="">
                                </div>
                                <div class="col-sm-4 p-1">
                                    <label for="">Image 36</label>
                                    <input type="file" name="image36" id="">
                                </div>

                                <div class="col-sm-12 p-1"></div>

                                <div class="col-sm-4 p-1">
                                    <label for="">Image 37</label>
                                    <input type="file" name="image37" id="">
                                </div>
                                <div class="col-sm-4 p-1">
                                    <label for="">Image 38</label>
                                    <input type="file" name="image38" id="">
                                </div>
                                <div class="col-sm-12 py-4 px-0">
                                    <div class="">
                                        <button type="submit" class="btn-block btn btn-primary text-white mb-2" >Edit Hot Toys Product</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>  
        </div>
    </div>
</div>

    </div>

    
</div>
@endsection