@extends('pages.wholesaler.layouts.nav')
@section('content')
    <div class="dashborad_page_center mt-0 mt-lg-5">
        <div class="row g-3">
            <!-- Status box start -->
            <div class="col-12 col-lg-6 col-xxl-7">
                <div class="bg-white Status h-100">
                    <div
                        class="row d-flex align-items-center justify-content-between py-3 px-4 Status_header">
                        <div class="col-12">
                            <h5>Order Analytic</h5>
                        </div>

                    </div>
                    <div
                        class="row d-flex align-items-center justify-content-between py-3 px-4 Status_header">
                        <div class="col-3">
                            <h4>Daily</h4>
                            <h3 style="color: black; font-weight: bold">285</h3>
                        </div>
                        <div class="col-3">
                            <h4>Weekly</h4>
                            <h3 style="color: black; font-weight: bold">1,489</h3>
                        </div>
                        <div class="col-3">
                            <h4>Monthly</h4>
                            <h3 style="color: black; font-weight: bold">7,400</h3>
                        </div>
                        <div class="col-3">

                        </div>

                    </div>
                    <div style="margin-left: 20px; margin-right: 20px">
                        <hr/>
                    </div>
                    <div
                        class="row d-flex align-items-center justify-content-between py-3 px-4 Status_header">

                        <div class="container">
                            <div class="row py-2">
                                <div class="col-md-2 py-1">
                                   <div>
                                       <div class="form-group">
                                           <select class="form-control input-pill" id="pillSelect" style="border: none">
                                               <option>Daily</option>
                                               <option>Weekly</option>
                                               <option>Monthly</option>
                                           </select>
                                       </div>

                                   </div>
                                </div>
                                <div class="col-md-4 py-1">
                                    <div class="card" style="border:none; position: relative;">
                                        <div class="card-body">
                                            <canvas id="chDonut1"></canvas>

                                        </div>
                                        <div style="position: absolute;  z-index: 10; text-align: center ;     margin-top: 35%; margin-left: 17%;">
                                            <span style="font-size: 18px; color: #1a202c">Total Income</span>
                                            <h3 style="font-weight: bold; color: black">MYR 7,400.50</h3>
                                        </div>
                                    </div>

                                </div>
                                <div class="col-md-4 py-1">
                                   <div style="border-radius: 10px; padding: 10px 10px 10px 10px; margin-bottom: 10px; margin-top: 15%; background-color: #DFE2F5">
                                       <h3 style="color: #2A3EB1; font-weight: bold">MYR 7,400.50</h3>
                                       <h6 style="color: #2A3EB1;">Income</h6>
                                   </div>
                                    <div style="border-radius: 10px; padding: 10px 10px 10px 10px; background-color: #FFEAD9">
                                        <h3 style="color: #FD7100; font-weight: bold">MYR 7,400.50</h3>
                                        <h6 style="color: #FD7100;">Income</h6>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>
{{--                    <div--}}
{{--                        class="d-flex justify-content-center align-items-center text-center p-5 total_Orders">--}}
{{--                        <div class="row">--}}
{{--                            <div class="col-12">--}}
{{--                                <h2 class="m-0">562</h2>--}}
{{--                                <small>Total Orders</small>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}

                </div>
            </div>
            <!-- Status box end -->
            <div class="col-12 col-lg-12 col-xxl-5">
                <div class=" bg-white p-3 Product_Type h-100">
                    <h5>Sales Analytic</h5>
                    <div class="Product_Type_body">
                        <div class="row">
                            <div class="col-12 col-xl-12">
                                <div class="row gy-3">
                                    <div class="col-12">
                                        <div class="porduct_box">
                                            <div class="row">
                                                <div class="col-2">
                                                    <div class="h-100 porduct_img">
                                                        <a href="{{url('')}}">
                                                            <img class="img-fluid h-100" src="{{asset('assets/img/product.png')}}"
                                                                 alt="">
                                                        </a>

                                                    </div>
                                                </div>
                                                <div class="col-10">
                                                    <div class=" py-1 product_details">
                                                        <p>
                                                            GAIDO TIMING BELT KIT PROTON BLM FL EXORA SATRIA NEO
                                                            GEN2 WAJA CAMPRO (144MY25)
                                                        </p>
                                                        <span></span>
                                                        <div style="display: flex; justify-content: space-between">
                                                            <div style=" padding: 5px 5px 5px 5px; background-color: #C1C1C1; width: 13%">
                                                                <h6 style="color: black;">Interior</h6>
                                                            </div>
                                                            <h6 style="color: black; font-weight: bold">4,534 sold</h6>
                                                        </div>


                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="porduct_box">
                                            <div class="row">
                                                <div class="col-2">
                                                    <div class="h-100 porduct_img">
                                                        <a href="{{url('')}}">
                                                            <img class="img-fluid h-100" src="{{asset('assets/img/product.png')}}"
                                                                 alt="">
                                                        </a>

                                                    </div>
                                                </div>
                                                <div class="col-10">
                                                    <div class=" py-1 product_details">
                                                        <p>
                                                            GAIDO TIMING BELT KIT PROTON BLM FL EXORA SATRIA NEO
                                                            GEN2 WAJA CAMPRO (144MY25)
                                                        </p>
                                                        <span></span>
                                                        <div style="display: flex; justify-content: space-between">
                                                            <div style=" padding: 5px 5px 5px 5px; background-color: #C1C1C1; width: 13%">
                                                                <h6 style="color: black;">Interior</h6>
                                                            </div>
                                                            <h6 style="color: black; font-weight: bold">4,534 sold</h6>
                                                        </div>


                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="porduct_box">
                                            <div class="row">
                                                <div class="col-2">
                                                    <div class="h-100 porduct_img">
                                                        <a href="{{url('')}}">
                                                            <img class="img-fluid h-100" src="{{asset('assets/img/product.png')}}"
                                                                 alt="">
                                                        </a>

                                                    </div>
                                                </div>
                                                <div class="col-10">
                                                    <div class=" py-1 product_details">
                                                        <p>
                                                            GAIDO TIMING BELT KIT PROTON BLM FL EXORA SATRIA NEO
                                                            GEN2 WAJA CAMPRO (144MY25)
                                                        </p>
                                                        <span></span>
                                                        <div style="display: flex; justify-content: space-between">
                                                            <div style=" padding: 5px 5px 5px 5px; background-color: #C1C1C1; width: 13%">
                                                                <h6 style="color: black;">Interior</h6>
                                                            </div>
                                                            <h6 style="color: black; font-weight: bold">4,534 sold</h6>
                                                        </div>


                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="porduct_box">
                                            <div class="row">
                                                <div class="col-2">
                                                    <div class="h-100 porduct_img">
                                                        <a href="{{url('')}}">
                                                            <img class="img-fluid h-100" src="{{asset('assets/img/product.png')}}"
                                                                 alt="">
                                                        </a>

                                                    </div>
                                                </div>
                                                <div class="col-10">
                                                    <div class=" py-1 product_details">
                                                        <p>
                                                            GAIDO TIMING BELT KIT PROTON BLM FL EXORA SATRIA NEO
                                                            GEN2 WAJA CAMPRO (144MY25)
                                                        </p>
                                                        <span></span>
                                                        <div style="display: flex; justify-content: space-between">
                                                            <div style=" padding: 5px 5px 5px 5px; background-color: #C1C1C1; width: 13%">
                                                                <h6 style="color: black;">Interior</h6>
                                                            </div>
                                                            <h6 style="color: black; font-weight: bold">4,534 sold</h6>
                                                        </div>


                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- dashborad page center end -->
    <!-- dashborad footer start -->
    <div class=" my-3 bg-white p-3 dashborad_footer">
        <div class="d-flex mt-md-3 justify-content-between order_title">
            <h4>New Order (12)</h4> <a href="#"><small>show more</small></a>
        </div>
        <div class="oreder-table">
            <div class="row">
                <div class="col-6 col-md-4 col-xl-12">
                    <div class="oreder-table-header  h-100">
                        <div class="row gy-3">
                            <div class="col-12 col-xl-6">
                                <div class="row gy-3">
                                    <div class="col-12 col-xl-3">
                                        <h6>Date</h6>
                                    </div>
                                    <div class="col-12 col-xl-3">
                                        <h6>Order Number</h6>
                                    </div>
                                    <div class="col-12 col-xl-3">
                                        <h6>Client Name</h6>
                                    </div>
                                    <div class="col-12 col-xl-3">
                                        <h6 class="mt-2 mt-xl-0">Contact Number</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-xl-6">
                                <div class="row gy-3">
                                    <div class="col-12 col-xl-5">
                                        <h6 class=" mt-4 mt-xl-0">Order Product</h6>
                                    </div>
                                    <div class="col-12 col-xl-3">
                                        <h6 class=" mt-4 mt-sm-0">Total Amount</h6>
                                    </div>
                                    <div class="col-12 col-xl-4">
                                        <h6 class="mb-5 mb-xl-0">Status</h6>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-6 col-md-8 col-xl-12">
                    <div class="tr h-100">
                        <div class="row  gy-3">
                            <div class="col-12 col-xl-6">
                                <div class="row gy-3">
                                    <div class="col-12 col-xl-3">
                                        <p>06/02/2021</p>
                                    </div>
                                    <div class="col-12 col-xl-3">
                                        <p>#2564667666</p>
                                    </div>
                                    <div class="col-12 col-xl-3">
                                        <p>Jacky Yang</p>
                                    </div>
                                    <div class="col-12 col-xl-3">
                                        <p>+6012 565 4862</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-xl-6">
                                <div class="row gy-3">
                                    <div class="col-12 col-xl-5">
                                        <p>- GAIDO TIMING BELT KIT... x1</p>
                                        <p>- Product 02 x3</p>
                                    </div>
                                    <div class="col-12 col-xl-3">
                                        <p class="MYR">MYR 56.50</p>
                                    </div>
                                    <div class="col-12 col-xl-4">
                                        <small class="Preparing">Preparing</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-4 d-xl-none">
                    <div class="oreder-table-header  h-100">
                        <div class="row gy-3">
                            <div class="col-12 col-xl-6">
                                <div class="row gy-3">
                                    <div class="col-12 col-xl-3">
                                        <h6>Date</h6>
                                    </div>
                                    <div class="col-12 col-xl-3">
                                        <h6>Order Number</h6>
                                    </div>
                                    <div class="col-12 col-xl-3">
                                        <h6>Client Name</h6>
                                    </div>
                                    <div class="col-12 col-xl-3">
                                        <h6 class="mt-2 mt-xl-0">Contact Number</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-xl-6">
                                <div class="row gy-3">
                                    <div class="col-12 col-xl-5">
                                        <h6 class=" mt-4 mt-xl-0">Order Product</h6>
                                    </div>
                                    <div class="col-12 col-xl-3">
                                        <h6 class=" mt-4 mt-sm-0">Total Amount</h6>
                                    </div>
                                    <div class="col-12 col-xl-4">
                                        <h6 class="mb-5 mb-xl-0">Status</h6>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-6 col-md-8 col-xl-12">
                    <div class="tr h-100">
                        <div class="row  gy-3">
                            <div class="col-12 col-xl-6">
                                <div class="row gy-3">
                                    <div class="col-12 col-xl-3">
                                        <p>06/02/2021</p>
                                    </div>
                                    <div class="col-12 col-xl-3">
                                        <p>#2564667666</p>
                                    </div>
                                    <div class="col-12 col-xl-3">
                                        <p>Jacky Yang</p>
                                    </div>
                                    <div class="col-12 col-xl-3">
                                        <p>+6012 565 4862</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-xl-6">
                                <div class="row gy-3">
                                    <div class="col-12 col-xl-5">
                                        <p>- GAIDO TIMING BELT KIT... x1</p>
                                        <p>- Product 02 x3</p>
                                    </div>
                                    <div class="col-12 col-xl-3">
                                        <p class="MYR">MYR 56.50</p>
                                    </div>
                                    <div class="col-12 col-xl-4">
                                        <small class="Preparing">Preparing</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-4 d-xl-none">
                    <div class="oreder-table-header  h-100">
                        <div class="row gy-3">
                            <div class="col-12 col-xl-6">
                                <div class="row gy-3">
                                    <div class="col-12 col-xl-3">
                                        <h6>Date</h6>
                                    </div>
                                    <div class="col-12 col-xl-3">
                                        <h6>Order Number</h6>
                                    </div>
                                    <div class="col-12 col-xl-3">
                                        <h6>Client Name</h6>
                                    </div>
                                    <div class="col-12 col-xl-3">
                                        <h6 class="mt-2 mt-xl-0">Contact Number</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-xl-6">
                                <div class="row gy-3">
                                    <div class="col-12 col-xl-5">
                                        <h6 class=" mt-4 mt-xl-0">Order Product</h6>
                                    </div>
                                    <div class="col-12 col-xl-3">
                                        <h6 class=" mt-4 mt-sm-0">Total Amount</h6>
                                    </div>
                                    <div class="col-12 col-xl-4">
                                        <h6 class="mb-5 mb-xl-0">Status</h6>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-6 col-md-8 col-xl-12">
                    <div class="tr h-100">
                        <div class="row  gy-3">
                            <div class="col-12 col-xl-6">
                                <div class="row gy-3">
                                    <div class="col-12 col-xl-3">
                                        <p>06/02/2021</p>
                                    </div>
                                    <div class="col-12 col-xl-3">
                                        <p>#2564667666</p>
                                    </div>
                                    <div class="col-12 col-xl-3">
                                        <p>Jacky Yang</p>
                                    </div>
                                    <div class="col-12 col-xl-3">
                                        <p>+6012 565 4862</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-xl-6">
                                <div class="row gy-3">
                                    <div class="col-12 col-xl-5">
                                        <p>- GAIDO TIMING BELT KIT... x1</p>
                                        <p>- Product 02 x3</p>
                                    </div>
                                    <div class="col-12 col-xl-3">
                                        <p class="MYR">MYR 56.50</p>
                                    </div>
                                    <div class="col-12 col-xl-4">
                                        <small class="Preparing">Product have been packaged</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-4 d-xl-none">
                    <div class="oreder-table-header  h-100">
                        <div class="row gy-3">
                            <div class="col-12 col-xl-6">
                                <div class="row gy-3">
                                    <div class="col-12 col-xl-3">
                                        <h6>Date</h6>
                                    </div>
                                    <div class="col-12 col-xl-3">
                                        <h6>Order Number</h6>
                                    </div>
                                    <div class="col-12 col-xl-3">
                                        <h6>Client Name</h6>
                                    </div>
                                    <div class="col-12 col-xl-3">
                                        <h6 class="mt-2 mt-xl-0">Contact Number</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-xl-6">
                                <div class="row gy-3">
                                    <div class="col-12 col-xl-5">
                                        <h6 class=" mt-4 mt-xl-0">Order Product</h6>
                                    </div>
                                    <div class="col-12 col-xl-3">
                                        <h6 class=" mt-4 mt-sm-0">Total Amount</h6>
                                    </div>
                                    <div class="col-12 col-xl-4">
                                        <h6 class="mb-5 mb-xl-0">Status</h6>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-6 col-md-8 col-xl-12">
                    <div class="tr h-100">
                        <div class="row  gy-3">
                            <div class="col-12 col-xl-6">
                                <div class="row gy-3">
                                    <div class="col-12 col-xl-3">
                                        <p>06/02/2021</p>
                                    </div>
                                    <div class="col-12 col-xl-3">
                                        <p>#2564667666</p>
                                    </div>
                                    <div class="col-12 col-xl-3">
                                        <p>Jacky Yang</p>
                                    </div>
                                    <div class="col-12 col-xl-3">
                                        <p>+6012 565 4862</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-xl-6">
                                <div class="row gy-3">
                                    <div class="col-12 col-xl-5">
                                        <p>- GAIDO TIMING BELT KIT... x1</p>
                                        <p>- Product 02 x3</p>
                                    </div>
                                    <div class="col-12 col-xl-3">
                                        <p class="MYR">MYR 56.50</p>
                                    </div>
                                    <div class="col-12 col-xl-4">
                                        <small class="Preparing">Product will be shipped within 24 hours</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-4 d-xl-none">
                    <div class="oreder-table-header  h-100">
                        <div class="row gy-3">
                            <div class="col-12 col-xl-6">
                                <div class="row gy-3">
                                    <div class="col-12 col-xl-3">
                                        <h6>Date</h6>
                                    </div>
                                    <div class="col-12 col-xl-3">
                                        <h6>Order Number</h6>
                                    </div>
                                    <div class="col-12 col-xl-3">
                                        <h6>Client Name</h6>
                                    </div>
                                    <div class="col-12 col-xl-3">
                                        <h6 class="mt-2 mt-xl-0">Contact Number</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-xl-6">
                                <div class="row gy-3">
                                    <div class="col-12 col-xl-5">
                                        <h6 class=" mt-4 mt-xl-0">Order Product</h6>
                                    </div>
                                    <div class="col-12 col-xl-3">
                                        <h6 class=" mt-4 mt-sm-0">Total Amount</h6>
                                    </div>
                                    <div class="col-12 col-xl-4">
                                        <h6 class="mb-5 mb-xl-0">Status</h6>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-6 col-md-8 col-xl-12">
                    <div class="tr border-bottom-0 h-100">
                        <div class="row  gy-3">
                            <div class="col-12 col-xl-6">
                                <div class="row gy-3">
                                    <div class="col-12 col-xl-3">
                                        <p>06/02/2021</p>
                                    </div>
                                    <div class="col-12 col-xl-3">
                                        <p>#2564667666</p>
                                    </div>
                                    <div class="col-12 col-xl-3">
                                        <p>Jacky Yang</p>
                                    </div>
                                    <div class="col-12 col-xl-3">
                                        <p>+6012 565 4862</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-xl-6">
                                <div class="row gy-3">
                                    <div class="col-12 col-xl-5">
                                        <p>- GAIDO TIMING BELT KIT... x1</p>
                                        <p>- Product 02 x3</p>
                                    </div>
                                    <div class="col-12 col-xl-3">
                                        <p class="MYR">MYR 56.50</p>
                                    </div>
                                    <div class="col-12 col-xl-4">
                                        <small class="Preparing">Product will be shipped within 24 hours</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        // new Chart(document.getElementById("doughnut-chart"), {
        //     type: 'doughnut',
        //     data: {
        //         labels: ["Africa", "Asia"],
        //         datasets: [
        //             {
        //                 label: "Population (millions)",
        //                 backgroundColor: ["#2A3EB1", "#FD7100",],
        //                 data: [2478,5267,]
        //             }
        //         ]
        //     },
        //     options: {
        //         title: {
        //             display: true,
        //             text: 'Predicted world population (millions) in 2050'
        //         }
        //     }
        // });
        var colors = ['#2A3EB1','#FD7100'];

        /* 3 donut charts */
        var donutOptions = {
            cutoutPercentage: 85,
            legend: {position:'bottom', padding:5, labels: {pointStyle:'circle', usePointStyle:true}}
        };

        // donut 1
        var chDonutData1 = {
            labels: [],
            datasets: [
                {
                    backgroundColor: colors.slice(0,3),
                    borderWidth: 0,
                    data: [50, 50]
                }
            ]
        };

        var chDonut1 = document.getElementById("chDonut1");
        if (chDonut1) {
            new Chart(chDonut1, {
                type: 'pie',
                data: chDonutData1,
                options: donutOptions
            });
        }



    </script>
@endsection

