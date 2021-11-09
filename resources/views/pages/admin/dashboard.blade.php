@extends('pages.admin.layouts.nav')
@section('content')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/0.2.0/Chart.min.js"></script>
    <script>
        var ctx = document.getElementById('myChart');
        var myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
                datasets: [{
                    label: '# of Votes',
                    data: [12, 19, 3, 5, 2, 3],
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(255, 206, 86, 0.2)',
                        'rgba(75, 192, 192, 0.2)',
                        'rgba(153, 102, 255, 0.2)',
                        'rgba(255, 159, 64, 0.2)'
                    ],
                    borderColor: [
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(153, 102, 255, 1)',
                        'rgba(255, 159, 64, 1)'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    </script>

    <div class="right">
        <div class="first">
            <i class="fas fa-chart-line"></i>
            <p>Dashboard</p>
        </div>
        <h3>Dashboard</h3>
        <div class="graph-div">
            <div class="top-graph">
                <div class="left-graph">
                    <p>User Active Times</p>
                    <p>Retailer Active Time</p>
                    <p>Wholesaler Active Time</p>
                </div>
                <div class="right-graph">
                    <p>LAST <strong>30 days</strong></p>
                </div>
            </div>
            <img src="{{asset('assets/img/admin/graph1.png')}}" alt="" class="graph-img" />
        </div>
{{--        <canvas id="myChart" width="400" height="400"></canvas>--}}
        <div class="users-div">
            <div class="box">
                <div class="left-box">
                    <i style="color: #ea6acc" class="box-icon far fa-user"></i>
                    <div class="col">
                        <h3>Total User</h3>
                        <p class="users">
                            {{$result['users_number']}} <i class="fas fa-long-arrow-alt-down"></i>
                        </p>
                    </div>
                </div>
                <p class="desc">48% From Last Month</p>
            </div>
            <div class="box">
                <div class="left-box">
                    <i style="color: #7d65f7" class="fas fa-user-clock"></i>
                    <div class="col">
                        <h3>Total Retailers</h3>
                        <p class="users">
                            {{$result['wholesalers_number']}} <i class="fas fa-long-arrow-alt-up"></i>
                        </p>
                    </div>
                </div>
                <p class="desc">48% From Last Month</p>
            </div>
            <div class="box">
                <div class="left-box">
                    <i style="color: #f79a3e" class="fas fa-dolly"></i>
                    <div class="col">
                        <h3>Total WholeSaler</h3>
                        <p class="users">
                            {{$result['retailers_number']}} <i class="fas fa-long-arrow-alt-up"></i>
                        </p>
                    </div>
                </div>
                <p class="desc">48% From Last Month</p>
            </div>
            <div class="box">
                <div class="left-box">
                    <i style="color: #29ce6b" class="fas fa-shopping-cart"></i>
                    <div class="col">
                        <h3>Order Status</h3>
                        <p class="users">
                            {{$result['orders_number']}}<i class="fas fa-long-arrow-alt-down"></i>
                        </p>
                    </div>
                </div>
                <p class="desc">36% From Last 24 Hours</p>
            </div>
        </div>
        <div class="charts-div">
            <div class="left-chart">
                <h3>Hot Sales Category TOP 10</h3>
                <div class="grid">
                    <p class="total">Total Payments</p>
                    <p class="buyer">Buyer</p>
                    <div class="categories">
                        <p class="category">Category A</p>
                        <p class="category">Category B</p>
                        <p class="category">Category C</p>
                        <p class="category">Category D</p>
                        <p class="category">Category E</p>
                        <p class="category">Category F</p>
                        <p class="category">Category G</p>
                        <p class="category">Category H</p>
                    </div>
                    <div class="payments">
                        <p class="payment">MYR 82.520</p>
                        <p class="payment">MYR 65.255</p>
                        <p class="payment">MYR 36.250</p>
                        <p class="payment">MYR 465.243</p>
                        <p class="payment">MYR 741.362</p>
                        <p class="payment">MYR 82.520</p>
                        <p class="payment">MYR 65.255</p>
                        <p class="payment">MYR 36.250</p>
                    </div>
                    <div class="buyer-div">
                        <p class="buyers">12035</p>
                        <p class="buyers">12035</p>
                        <p class="buyers">12035</p>
                        <p class="buyers">12035</p>
                        <p class="buyers">12035</p>
                        <p class="buyers">12035</p>
                        <p class="buyers">12035</p>
                        <p class="buyers">12035</p>
                    </div>
                </div>
            </div>
            <div class="right-chart">
                <img src="{{asset('assets/img/admin/graph2.png')}}" alt="" />
            </div>
        </div>
    </div>


@endsection


