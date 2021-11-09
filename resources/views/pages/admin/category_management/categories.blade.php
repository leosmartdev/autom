@extends('pages.admin.layouts.nav')
@section('content')
    <div class="right">
        <div class="first">
            <i class="fas fa-tasks"></i>
            <p>Category Management</p>
        </div>
        <div class="category-bottom-right">
            @if (session('message'))
            <div class="alert-box" role="alert">
                <div class="alert-icon"><i class="far fa-paperclip"></i></div>
                <div class="alert-text">{{ session('message') }}</div>
                <div class="alert-close">
                    <button type="button" class="alert-close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true"><i class="far fa-minus-circle"></i></span>
                    </button>
                </div>
            </div>
            @endif
            <div class="category-bottom-search">

                    <div class="search-div" style="width: 500px">
                        <label for="number">Search Category Name</label>
                        <form enctype="multipart/form-data" action="{{route('adminCategory')}}" method="POST" style="display:flex;">
                            @csrf
                            <div class="form-group" >
                                <div class="category-input-div">
                                    <i class="fas fa-search"></i>
                                    <input
                                        name="search_value"
                                        type="text"
                                        placeholder="Search Category Name"/>
                                </div>
                            </div>
                            <div class="form-group" >
                                <button type="submit" class="category-search-btn">Search</button>
                            </div>
                        </form>
                    </div>



            </div>

            <div class="category-bottom-top">
                <div class="category-div">
                    <p class="filter bold">Auto Body Parts & Mirrors</p>
                    <p class="filter">Series 2</p>
                    <p class="filter">Series 3</p>
                </div>
                <a class="fas fa-plus-circle" href="{{url('/admin/category/create')}}" ></a>
            </div>
            <div class="category-bottom-grid">
                <h1>Auto Body Parts & Mirrors <i class="far fa-edit"></i></h1>
                <div class="category-grid">
                    <a class="category-grid-box" href="{{url('/admin/category/create')}}">
                        <i class="fas fa-plus-circle"></i>
                        <p >Create Category</p>
                    </a>
                    @foreach($categories as $category)
                    <div class="category-grid-box">
                        <img src="{{asset('assets'.$category->image)}}" alt="" style="width: 100px; height: 100px; "/>
                        <p>{{$category->name}}</p>
                    </div>
                    @endforeach

                </div>
            </div>
        </div>
    </div>
@endsection

