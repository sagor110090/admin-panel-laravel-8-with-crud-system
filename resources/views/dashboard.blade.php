@extends('layouts.app',['pageTitle' => __('Dashboard')])
@section('content')

@component('layouts.parts.breadcrumb')
@slot('title')
{{ __('Dashboard') }}
@endslot
@endcomponent


<section class="section">
    <div class="row ">
        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <div class="card">
                <div class="card-statistic-4">
                    <div class="align-items-center justify-content-between">
                        <div class="row ">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pr-0 pt-3">
                                <div class="card-content">
                                    <h5 class="font-15">{{__('New Order Today')}}</h5>
                                    <h2 class="mb-3 font-18">

                                    </h2>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pl-0">
                                <div class="banner-img">
                                    <img src="assets/img/banner/1.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <div class="card">
                <div class="card-statistic-4">
                    <div class="align-items-center justify-content-between">
                        <div class="row ">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pr-0 pt-3">
                                <div class="card-content">
                                    <h5 class="font-15"> {{__('Today Revenue')}}</h5>
                                    <h2 class="mb-3 font-18">

                                    </h2>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pl-0">
                                <div class="banner-img">
                                    <img src="assets/img/banner/4.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <div class="card">
                <div class="card-statistic-4">
                    <div class="align-items-center justify-content-between">
                        <div class="row ">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pr-0 pt-3">
                                <div class="card-content">
                                    <h5 class="font-15">Total Order</h5>
                                    <h2 class="mb-3 font-18"> </h2>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pl-0">
                                <div class="banner-img">
                                    <img src="assets/img/banner/1.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <div class="card">
                <div class="card-statistic-4">
                    <div class="align-items-center justify-content-between">
                        <div class="row ">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pr-0 pt-3">
                                <div class="card-content">
                                    <h5 class="font-15"> Total Revenue</h5>
                                    <h2 class="mb-3 font-18"> </h2>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pl-0">
                                <div class="banner-img">
                                    <img src="assets/img/banner/4.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <div class="row">
        <div class="col-12 col-sm-12 col-lg-12">
            <div class="card ">
                <div class="card-header">
                    <h4>{{__('Order chart')}}</h4>
                    <div class="card-header-action">

                        <a href="/admin/order" class="btn btn-primary">{{__('View All')}}</a>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <div id="dailyOrderChart"></div>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection


@push('js')
<script src="{{ asset('/') }}assets/bundles/apexcharts/apexcharts.min.js"></script>

<script>
    $(function() {
            dailyOrderChart();
        });

        function dailyOrderChart() {
            var options = {
                chart: {
                    height: 250,
                    type: 'bar',
                    stacked: true,
                    toolbar: {
                        show: false
                    },
                    zoom: {
                        enabled: true
                    }
                },
                responsive: [{
                    breakpoint: 480,
                    options: {
                        legend: {
                            position: 'bottom',
                            offsetX: -10,
                            offsetY: 0
                        }
                    }
                }],
                plotOptions: {
                    bar: {
                        horizontal: false,
                        columnWidth: '200px',
                    },
                },
                series: [{
                    name: 'Pending',
                    data: []
                }, {
                    name: 'Delivered',
                    data: []
                } ],
                xaxis: {
                    type: 'datetime',
                    categories: [],
                    labels: {
                        style: {
                            colors: "#9aa0ac"
                        }
                    }
                },
                yaxis: {
                    labels: {
                        style: {
                            color: "#9aa0ac"
                        }
                    }
                },
                legend: {
                    position: 'top',
                    offsetY: 40,
                    show: false,
                },
                fill: {
                    opacity: 1
                },
            }
            var chart = new ApexCharts(
                document.querySelector("#dailyOrderChart"),
                options
            );
            chart.render();
        }

</script>
@endpush
