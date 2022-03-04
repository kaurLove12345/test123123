@extends('layouts.editor')

@section('content')
<div class="container">
    <div class="row bg-container">
        <div class="col-lg-6 text-center p-4">
            <h3 class="m-0 font-weight-bold text-primary">Edit <b>{{ $product->name }}</b> Product</h3>
           
        </div>
        <div class="col-sm-6 text-right pb-4 ">
            <a href="{{ route('editor_products.create') }}">
             <button class="btn btn-primary btn-sm">Add New Lego MiniFigures Product</button>
            </a>
            <a href="{{ route('editor_products.index') }}">
             <button class="btn btn-primary btn-sm">View All Lego MiniFigures Products</button>
            </a>
         </div>

        <div class="col-xl-12">@include('editor.partials.alert')</div>

        <div class="col-xl-12 card shadow">   
            <div class="card-header text-primary">Edit Product</div>
            <div class="card-body">
            <form action="{{ route('editor_products.update', $product->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PATCH')
                <div class="row p-2">
                    <div class="col-sm-3">
                        <label for="name">Product Name</label>
                        <input type="text" class="form-control" name="name" value="{{ $product->name }}"
                        required placeholder="Enter Product Name" />
                        @error('name') <span class="alert alert-danger" style="padding:2px;margin:5px">{{ $message }}</span> @enderror
                    </div>
                    <div class="col-sm-3">
                        <label for="category_name">Category Name</label>
                        <input type="text" name="category_name" class="form-control" readonly value="{{ $product->category_name }}">
                    </div>
                    <div class="col-sm-3">
                        <label for="subseries">Subseries Name</label>
                        <input type="text" name="subseries_name" class="form-control" readonly value="{{ $product->subseries_name }}">
                    </div>
                    <div class="col-sm-3">
                        <label for="theme">Theme Name</label>
                        <input type="text" name="theme" class="form-control" readonly value="{{ $product->theme }}">
                    </div>
                </div>
                <div class="row p-2">
                    <div class="col-sm-3">
                        <label for="model_name">Model Name</label>
                        <input type="text" class="form-control" name="model_name" placeholder="Enter Model Name" value="{{ $product->model_name }}">
                        @error('model_name') <span class="alert alert-danger" style="padding:2px;margin:5px">{{ $message }}</span> @enderror
                    </div>
                    <div class="col-sm-3">
                        <label for="collection_name">Collection Name</label>
                        <input type="text" class="form-control" name="collection_name"  value="{{ $product->collection_name }}"  placeholder="Collection Name" required readonly>
                    </div>
                    <div class="col-sm-3">
                        <label for="series">Series Name</label>
                        <input type="text" class="form-control" name="series"  value="{{ $product->series }}"  placeholder="Series Name" required readonly>
                    </div>
                    <div class="col-sm-3">
                        <label for="casting_name">Casting Name</label>
                        <input type="text" class="form-control" name="casting_name" value="{{ $product->casting_name }}" placeholder="Casting Name" required readonly>
                    </div>
                </div>
                <div class="row p-2">
                        <div class="col-sm-3">
                            <label for="">Year</label>
                            <input type="text" class="form-control" name="year" wire:model="year" placeholder="Enter Year" value="{{ $product->year }}" required>
                            @error('year') <span class="alert alert-danger" style="padding:2px;margin:5px">{{ $message }}</span> @enderror
                        </div>
                        <div class="col-sm-3">
                            <label for="">Colour</label>
                            <input type="text" class="form-control" name="colour" wire:model="colour" placeholder="Enter Colour" value="{{ $product->colour }}" >
                            @error('colour') <span class="alert alert-danger" style="padding:2px;margin:5px">{{ $message }}</span> @enderror
                        </div>
                        <div class="col-sm-3">
                            <label for="">Tampo</label>
                            <input type="text" class="form-control" name="tampo" wire:model="tampo" placeholder="Enter Tampo" value="{{ $product->tampo }}" >
                            @error('tampo') <span class="alert alert-danger" style="padding:2px;margin:5px">{{ $message }}</span> @enderror
                        </div>
                        <div class="col-sm-3">
                            <label for="">Country</label>
                            <input type="text" class="form-control" wire:model="country" name="country" placeholder="Enter Country" value="{{ $product->country }}">
                            @error('country') <span class="alert alert-danger" style="padding:2px;margin:5px">{{ $message }}</span> @enderror
                        </div>
                    </div>
                    <div class="row p-2">
                        <div class="col-sm-3">
                            <label for="">Base Colour</label>
                            <input type="text" class="form-control" name="base_colour" wire:model="base_colour" placeholder="Enter Base Colour" value="{{ $product->base_colour }}" >
                            @error('base_colour') <span class="alert alert-danger" style="padding:2px;margin:5px">{{ $message }}</span> @enderror
                        </div>
                        <div class="col-sm-3">
                            <label for="">Type</label>
                            <input type="text" class="form-control" name="type" placeholder="Enter Type" wire:model="type" value="{{ $product->type }}" >
                            @error('type') <span class="alert alert-danger" style="padding:2px;margin:5px">{{ $message }}</span> @enderror
                        </div>
                        <div class="col-sm-3">
                            <label for="">Window Color</label>
                            <input type="text" class="form-control" name="window_colour" wire:model="window_colour" placeholder="Enter Window Color" value="{{ $product->window_colour }}" >
                            @error('window_colour') <span class="alert alert-danger" style="padding:2px;margin:5px">{{ $message }}</span> @enderror
                        </div>
                        <div class="col-sm-3">
                            <label for="">Interior Colour</label>
                            <input type="text" class="form-control" name="interior_colour" wire:model="interior_colour" placeholder="Enter Interior Colour" value="{{ $product->interior_colour }}" >
                            @error('interior_colour') <span class="alert alert-danger" style="padding:2px;margin:5px">{{ $message }}</span> @enderror
                        </div>
                    </div>

                    <div class="row p-2">
                        <div class="col-sm-3">
                            <label for="">Toy# </label>
                            <input type="text" class="form-control" wire:model="toy_hash" required  name="toy_hash" placeholder="Enter Toy#" value="{{ $product->toy_hash }}" >
                            @error('toy_hash') <span class="alert alert-danger" style="padding:2px;margin:5px">{{ $message }}</span> @enderror
                        </div>
                        <div class="col-sm-3">
                            <label for="">Col#</label>
                            <input type="text" class="form-control" wire:model="col_hash" name="col_hash" placeholder="Enter Col#" value="{{ $product->col_hash }}">
                            @error('col_hash') <span class="alert alert-danger" style="padding:2px;margin:5px">{{ $message }}</span> @enderror
                        </div>
                        <div class="col-sm-3">
                            <label for="">Series# </label>
                            <input type="text" class="form-control" wire:model="series_hash" name="series_hash" placeholder="Enter Series#" value="{{ $product->series_hash }}">
                            @error('series_hash') <span class="alert alert-danger" style="padding:2px;margin:5px">{{ $message }}</span> @enderror
                        </div>
                        <div class="col-sm-3">
                            <label for="">Class</label>
                            <select name="class" wire:model="class"  id="class"  class="form-control" required>
                                <option value="" selected>Select Class</option>
                                <option value="Mainline" {{ $product->class == 'Mainline' ? 'selected' : '' }}>Mainline</option>
                                <option value="Premium" {{ $product->class == 'Premium' ? 'selected' : '' }}>Premium</option>
                            </select>
                            @error('class') <span class="alert alert-danger" style="padding:2px;margin:5px">{{ $message }}</span> @enderror
                        </div>
                    </div>
            
                    <div class="row p-2">
                        <div class="col-sm-3">
                            <label for="">Wheel Type</label>
                            <input type="text" class="form-control" name="wheel_type" wire:model="wheel_type" placeholder="Enter Wheel Type" value="{{ $product->wheel_type }}" >
                            @error('wheel_type') <span class="alert alert-danger" style="padding:2px;margin:5px">{{ $message }}</span> @enderror
                        </div>
                        <div class="col-sm-3">
                            <label for="">Visibility</label>
                            <select name="visibility" wire:model="visibility"  id="visibility"  class="form-control" required>
                                <option value="" selected>Select Visibility</option>
                                <option value="1" {{ $product->visibility == '1' ? 'selected' : '' }}>Visible</option>
                                <option value="0" {{ $product->visibility == '0' ? 'selected' : '' }}>Hidden</option>
                            </select>
                            @error('visibility') <span class="alert alert-danger" style="padding:0px;margin:0px">{{ $message }}</span> @enderror
                        </div>
                        <div class="col-sm-6 pt-2">
                            <textarea name="notes" placeholder="Enter Note" id="" cols="30" rows="2" class="form-control">{{ $product->notes }}</textarea>
                        </div>
                    </div>
            
                    <div class="row p-2">
                        <div class="col-sm-3">
                            <label for="">Product Image 1</label>
                            <input type="file" name="image1" id="image1" wire:model="image1">
                            @error('image1') <span class="alert alert-danger" style="padding:2px;margin:5px">{{ $message }}</span> @enderror
                        </div>
                        <div class="col-sm-3">
                            <label for="">Product Image 2</label>
                            <input type="file" name="image2" id="image2" wire:model="image2">
                            @error('image2') <span class="alert alert-danger" style="padding:2px;margin:5px">{{ $message }}</span> @enderror
                        </div>
                        <div class="col-sm-3">
                            <label for="">Product Image 3</label>
                            <input type="file" name="image3" id="image3" wire:model="image3">
                            @error('image3') <span class="alert alert-danger" style="padding:2px;margin:5px">{{ $message }}</span> @enderror
                        </div>
                        <div class="col-sm-3">
                            <label for="">Product Image 4</label>
                            <input type="file" name="image4" id="image4" wire:model="image4">
                            @error('image4') <span class="alert alert-danger" style="padding:2px;margin:5px">{{ $message }}</span> @enderror
                        </div>
                    </div>
            
                    <div class="row p-2">
                        <div class="col-sm-3">
                            <label for="">Product Image 5</label>
                            <input type="file" name="image5" id="image5" wire:model="image5">
                            @error('image5') <span class="alert alert-danger" style="padding:2px;margin:5px">{{ $message }}</span> @enderror
                        </div>
                        <div class="col-sm-3 offset-6 pt-2">
                            <div class="VwBtn text-right">
                                <button class="btn btn-primary text-white mb-2" 
                                type="submit" >Edit Product</button>
                            </div>
                        </div>
                    </div>
            
                    <div class="row p-2"></div>
                </form>
            </div>
        </div>

        </div>

    </div>
@endsection