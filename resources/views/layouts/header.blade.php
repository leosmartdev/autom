<div class="mb-4 bg-white w-100 p-3 searchsection">
    <div class="row">
        <div class="col-7 col-sm-6 col-md-8 col-lg-9 d-flex align-content-center search_box">
            <i class="fa fa-bars"></i> <img class="img-fluid" src="{{asset('assets/img/icons/Group_36.png')}}" alt="">
            <input type="text" class="border-0 w-100 form-control search_input " name="search"
                   placeholder="Search . . .">
        </div>
        <div class="col-5 col-sm-6 col-md-4 col-lg-3">
            <div class="search_box_right d-flex align-items-center justify-content-end">
                <a href="{{url('messages')}}" style="margin-right: 20px;"><img src="{{asset('assets/img/icons/bell.png')}}"  alt="" style="margin-right: 10%;"></a>
                <a href="{{url('cart')}}" style="margin-right: 20px;"> <img src="{{asset('assets/img/icons/cart.png')}}" alt="" style="margin-right: 10%;"></a>
                <div class="rounded-circle user_box">
                    <img src="" alt="">
                    <div class="profile_bar bg-white position-absolute" >
                        <li class="one"> <a href="#">My Profile</a></li>
                        <li><a href="{{url('/')}}">Log Out</a></li>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
