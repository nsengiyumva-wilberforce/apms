@extends('layouts.app')
@section('content')
    <div class="content-wrapper shadow card round">
        <div class="container-fluid">
            <div class="header">
                <h1 class="h3 text-center">
                    TEMPERATURE VARIATION OVER TIME
                    <span class="ml-5" style="margin-left: 20px">
                        <input type="search" placeholder="Search Temperature">
                        <button class="btn btn-success">Search</button>
                    </span>
                </h1>
            </div>
            <div id="temp_table" style="margin-bottom: 200px;">
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
                        <div id="chart_div"></div>
                    </div>
                    <div class="tab-pane show fade" id="pills-today" role="tabpanel" aria-labelledby="pills-today-tab">
                        <canvas id="dailyTemperatureChart" height="30%"></canvas>
                    </div>
                    <div class="tab-pane fade" id="pills-week" role="tabpanel" aria-labelledby="pills-week-tab">
                        <canvas id="weeklyTemperatureChart" height="30%"></canvas>
                    </div>
                    <div class="tab-pane fade" id="pills-custom" role="tabpanel" aria-labelledby="pills-custom-tab">
                        <h4 class="text-center">Variation temperature with water consumption</h4>
                        <canvas id="temperatureWaterChart" height="30%"></canvas>
                        <h4 class="mt-5 text-center">Variation of Temperature with Feed consumption</h4>
                        <canvas id="temperatureWeightChart" height="30%"></canvas>
                    </div>
                    <div class="tab-pane fade" id="pills-deduction" role="tabpanel" aria-labelledby="pills-deduction-tab">
                        <div class="row justify-content-between">
                            <div class="col-3 card">
                                <h1>Conclusion 1</h1>
                                <h3>
                                    In conclusion, the temperature variation of water plays a crucial role in various aspects of our lives, impacting ecosystems, weather patterns, and human activities, highlighting the significance of understanding and monitoring these fluctuations for the well-being of our planet and its inhabitants.
                                </h3>
                            </div>
                            <div class="col-3 card">
                                <h1>Conclusion 2</h1>
                                <h3>In conclusion, the temperature variation of water plays a crucial role in various aspects of our lives, impacting ecosystems, weather patterns, and human activities, highlighting the significance of understanding and monitoring these fluctuations for the well-being of our planet and its inhabitants.</h3>
                            </div>
                            <div class="col-3 card">
                                <h1>Conclusion 3</h1>
                                <h3>
                                    In conclusion, the temperature variation of water plays a crucial role in various aspects of our lives, impacting ecosystems, weather patterns, and human activities, highlighting the significance of understanding and monitoring these fluctuations for the well-being of our planet and its inhabitants.
                                </h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
