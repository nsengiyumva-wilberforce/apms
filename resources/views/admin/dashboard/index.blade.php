@extends('layouts.app')
@section('content')
    <div class="content-wrapper shadow card round">
        <div class="container-fluid">
            <div class="row mb-5">
                <div class="col-md-6 col-lg-4 col-xlg-4">
                    <div id="feed_chart" style="width: 600px; height: 200px;"></div>
                </div>
                <div class="col-md-6 col-lg-4 col-xlg-4">
                    <div id="water_chart" style="width: 600px; height: 200px;"></div>
                </div>
                <div class="col-md-6 col-lg-4 col-xlg-4">
                    <div id="temp_chart" style="width: 600px; height: 200px;"></div>
                </div>
            </div>
            <div class="row mb-5">
                <div class="col-md-6 col-lg-3 col-xlg-3">
                    <a href="/admin/sensor" class="text-decoration-none">
                        <div class="card card-hover">
                            <div class="box bg-info text-center shadow rounded">
                                <h1 class="font-light text-light">
                                    <i class="mdi mdi-motion-sensor"></i>
                                </h1>
                                <p class="font-light text-white h1">
                                    20
                                </p>
                                <h6 class="text-white">Sensors</h6>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-6 col-lg-6 col-xlg-3">
                    <a href="/admin/sensor" class="text-decoration-none">
                        <div class="card card-hover">
                            <div class="box bg-success text-center shadow rounded">
                                <h1 class="font-light text-light">
                                    <i class="mdi mdi-lightbulb-on"></i>
                                </h1>
                                <p class="font-light text-white h1">
                                    3
                                </p>
                                <h6 class="text-white">Active Sensors</h6>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-6 col-lg-3 col-xlg-3">
                    <a href="/admin/sensor" class="text-decoration-none">
                        <div class="card card-hover">
                            <div class="box bg-danger text-center shadow rounded">
                                <h1 class="font-light text-light">
                                    <i class="mdi mdi-lightbulb-off"></i>
                                </h1>
                                <p class="font-light text-white h1">
                                    56
                                </p>
                                <h6 class="text-white">Inactive Sensors</h6>
                            </div>
                        </div>
                </div>
                </a>
            </div>
            <div class="row">
                <div class="col-md-6 col-lg-3 col-xlg-3">
                    <div class="card card-hover">
                        <div class="box bg-info text-center shadow rounded">
                            <h1 class="font-light text-light">
                                <i class="mdi mdi-cloud-alert"></i>
                            </h1>
                            <p class="font-light text-white h1">
                                40
                            </p>
                            <h6 class="text-white">Installed Systems</h6>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xlg-3">
                    <div class="card card-hover">
                        <div class="box bg-info text-center shadow rounded">
                            <h1 class="font-light text-light">
                                <i class="mdi mdi-bell"></i>
                            </h1>
                            <p class="font-light text-white h1">
                                21
                            </p>
                            <h6 class="text-white">Alerts</h6>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 col-xlg-3">
                    <div class="card card-hover">
                        <div class="box bg-info text-center shadow rounded">
                            <h1 class="font-light text-light">
                                <i class="mdi mdi-lighthouse"></i>
                            </h1>
                            <p class="font-light text-white h1">
                                120k
                            </p>
                            <h6 class="text-white">Hens</h6>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xlg-6 col-sm-12 m-3" id="temp_line_chart"
                    style="width: 48%; height: 600px;border-radius: 10px"></div>
                <div class="col-md-6 col-lg-6 col-xlg-6 col-sm-12 m-3" id="water_bar_chart"
                    style="width: 48%; height: 600px;border-radius: 10px">
                </div>
            </div>
        </div>
    </div>
@endsection
