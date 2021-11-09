@extends('pages.admin.layouts.nav')
@section('content')
    <div class="right">
        <div class="first">
            <i class="fas fa-truck"></i>
            <p>Shipping Management</p>
        </div>
        <div class="white">
            <div class="bottom-search">
                <div class="search-div">
                    <label for="number">Search Shop Name</label>
                    <div class="input-div">
                        <i class="fas fa-search"></i>
                        <input id="number" type="text" placeholder="Search Shop Name" />
                    </div>
                </div>
                <a href="#" class="search-btn">Search</a>
            </div>
            <div class="bottom-table">
                <p>AUTOM Supported Logistics</p>
                <div class="row first-row">
                    <i class="fas fa-plus-circle"></i>
                    <p>Create New Supported</p>
                </div>

                @foreach($shipping as $item)
                <div class="row">
                    <p>Uber</p>
                    <div class="toggle-button-cover" style="margin-right: 17px">
                        <div class="button-cover">
                            <div class="button r" id="button-1">
                                <input type="checkbox" class="checkbox" />
                                <div class="knobs"></div>
                                <div class="layer"></div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection

