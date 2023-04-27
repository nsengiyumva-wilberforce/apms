@extends('layouts.app')
@section('content')
    <div class="content-wrapper shadow card round">
        <div class="container-fluid">
            <div class="header">
                <h1 class="h3 text-center">
                    TEMPERATURE VARIATION OVER TIME
                    <span class="ml-5" style="margin-left: 20px">
                        <input type="search" placeholder="search Temperature">
                        <button class="btn btn-success">Search</button>
                    </span>
                </h1>
            </div>
            <div id="temp_table">
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
                            aria-selected="false">This custom</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link fs-4" id="pills-deduction-tab" data-bs-toggle="pill"
                            data-bs-target="#pills-deduction" type="button" role="tab" aria-controls="pills-deduction"
                            aria-selected="false">This deduction</button>
                    </li>
                </ul>
                <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="pills-realtime" role="tabpanel"
                        aria-labelledby="pills-realtime-tab">
                        realtime</div>
                    <div class="tab-pane fade" id="pills-today" role="tabpanel" aria-labelledby="pills-today-tab">
                        today</div>
                    <div class="tab-pane fade" id="pills-week" role="tabpanel" aria-labelledby="pills-week-tab">
                        week</div>
                    <div class="tab-pane fade" id="pills-custom" role="tabpanel" aria-labelledby="pills-custom-tab">
                        custom</div>
                    <div class="tab-pane fade" id="pills-deduction" role="tabpanel" aria-labelledby="pills-deduction-tab">
                        deduction</div>
                </div>
            </div>
        </div>
    </div>
@endsection
