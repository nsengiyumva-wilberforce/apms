@extends('layouts.app')
@section('content')
    <div class="content-wrapper shadow card round">
        <div class="container-fluid">
            <div class="header">
                <h1 class="h3 text-center">
                    WATER VARIATION OVER TIME
                    <span class="ml-5" style="margin-left: 20px">
                        <input type="search" placeholder="Search Temperature">
                        <button class="btn btn-success">Search</button>
                    </span>
                </h1>
            </div>
            <div id="water_table" style="margin-bottom: 200px;">
            </div>
            <div class="containter summeries_section mt-5">
                <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active fs-4" id="pills-realtime-tab" data-bs-toggle="pill"
                            data-bs-target="#pills-realtime" type="button" role="tab" aria-controls="pills-realtime"
                            aria-selected="true">Real Time</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link fs-4" id="pills-today-tab" data-bs-toggle="pill"
                            data-bs-target="#pills-today" type="button" role="tab" aria-controls="pills-today"
                            aria-selected="false">Today</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link fs-4" id="pills-week-tab" data-bs-toggle="pill" data-bs-target="#pills-week"
                            type="button" role="tab" aria-controls="pills-week" aria-selected="false">This
                            Week</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link fs-4" id="pills-custom-tab" data-bs-toggle="pill"
                            data-bs-target="#pills-custom" type="button" role="tab" aria-controls="pills-custom"
                            aria-selected="false">Custom</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link fs-4" id="pills-deduction-tab" data-bs-toggle="pill"
                            data-bs-target="#pills-deduction" type="button" role="tab" aria-controls="pills-deduction"
                            aria-selected="false">Deductions</button>
                    </li>
                </ul>
                <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="pills-realtime" role="tabpanel"
                        aria-labelledby="pills-realtime-tab">
                        <div id="live_water_chart"></div>
                    </div>
                    <div class="tab-pane show fade" id="pills-today" role="tabpanel" aria-labelledby="pills-today-tab">
                        <canvas id="dailyWaterChart" height="30%"></canvas>
                    </div>
                    <div class="tab-pane fade" id="pills-week" role="tabpanel" aria-labelledby="pills-week-tab">
                        <canvas id="weeklyWaterChart" height="30%"></canvas>
                    </div>
                    <div class="tab-pane fade" id="pills-custom" role="tabpanel" aria-labelledby="pills-custom-tab">
                        <canvas id="waterFeedChart" height="30%"></canvas>
                        <canvas id="waterTemperatureChart" height="30%"></canvas>
                    </div>
                    <div class="tab-pane fade" id="pills-deduction" role="tabpanel" aria-labelledby="pills-deduction-tab">
                        <div class="alert alert-success" role="alert">
                            There is high water consumption compared to feed intake during higher temperatures. This may result into poor growth.
                          </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
