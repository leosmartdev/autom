@extends('pages.admin.layouts.nav')
@section('content')
    <div class="right">
        <div class="first">
            <i class="fas fa-tasks"></i>
            <p>Category Management</p>
        </div>
        <div class="category-bottom-right">
            <div class="category-bottom-search">
                <div class="search-div">
                    <h3 for="number">Create Category</h3>

                </div>
            </div>
            <div class="category-bottom-grid">
                <form enctype="multipart/form-data" action="{{route('category.store')}}" method="POST">
                    @csrf
                    <div class="form-group form_alignment">
                        <label for="number" style="margin-right: 50px;">Category Name</label>
                        <input type="text" name="category_name" class="input-underline"/>
                        @error('category_name')
                        <div  style="color: orangered">{{
                        $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group form_alignment">
                        <label for="number" style="margin-right: 50px;">Product Type</label>
                        <select class="select_tab" name="product_type">
                            @foreach(\App\Models\ProductType::all() as $productType)
                                <option value="{{$productType->id}}" >{{$productType->name}}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group form_alignment">
                        <label for="number" style="margin-right: 50px;">Banner</label>
                        <input class="image_upload" id="image" type="file" name="image" placeholder="Photo" required="" capture>


                    </div>
                    <div class="form-group form_alignment">
                        <button type="submit" class="category-search-btn">Save</button>
                        <a href="{{url('admin/category')}}" class="category-search-btn">Cancel</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

