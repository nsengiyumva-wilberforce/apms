@extends('layouts.app')
@section('content')
    <div class="content-wrapper shadow card round">
        <div class="container-fluid">
            <div class="row">
                <div class="col-3">
                    <div class="card text-start border border-success" style="width: 18rem;">
                        <div class="card-body">
                            <h1 class="ps-3 ms-6">
                                <i class="mdi mdi-audiobook menu-icon text-success" style="font-size: 120px"></i>
                            </h1>

                            <p class="fs-5"><span class="fw-bolder pe-2">Name:</span>A0000001.wav</p>
                            <p class="fs-5"><span class="fw-bolder pe-2">Duration:</span>3:00</p>
                            <p class="fs-5"><span class="fw-bolder pe-2">Size:</span>2MB</p>
                            <p class="fs-5"><span class="fw-bolder pe-2">Date of Creation:</span>12/05/2024</p>
                            <p class="fs-5"><span class="fw-bolder pe-2">Analysis Result:</span>Cough</p>

                            <h1 class="ps-5 ms-5">
                                <i class="mdi mdi-play-circle menu-icon text-dark"></i>
                            </h1>
                        </div>
                    </div>
                </div>
                <div class="col-3">
                    <div class="card text-start border border-success" style="width: 18rem;">
                        <div class="card-body">
                            <h1 class="ps-3 ms-6">
                                <i class="mdi mdi-audiobook menu-icon text-success" style="font-size: 120px"></i>
                            </h1>

                            <p class="fs-5"><span class="fw-bolder pe-2">Name:</span>A0000001.wav</p>
                            <p class="fs-5"><span class="fw-bolder pe-2">Duration:</span>3:00</p>
                            <p class="fs-5"><span class="fw-bolder pe-2">Size:</span>2MB</p>
                            <p class="fs-5"><span class="fw-bolder pe-2">Date of Creation:</span>12/05/2024</p>
                            <p class="fs-5"><span class="fw-bolder pe-2">Analysis Result:</span>Cough</p>

                            <h1 class="ps-5 ms-5">
                                <i class="mdi mdi-play-circle menu-icon text-dark"></i>
                            </h1>
                        </div>
                    </div>
                </div>
                <div class="col-3">
                    <div class="card text-start border border-success" style="width: 18rem;">
                        <div class="card-body">
                            <h1 class="ps-3 ms-6">
                                <i class="mdi mdi-audiobook menu-icon text-success" style="font-size: 120px"></i>
                            </h1>

                            <p class="fs-5"><span class="fw-bolder pe-2">Name:</span>A0000001.wav</p>
                            <p class="fs-5"><span class="fw-bolder pe-2">Duration:</span>3:00</p>
                            <p class="fs-5"><span class="fw-bolder pe-2">Size:</span>2MB</p>
                            <p class="fs-5"><span class="fw-bolder pe-2">Date of Creation:</span>12/05/2024</p>
                            <p class="fs-5"><span class="fw-bolder pe-2">Analysis Result:</span>Cough</p>

                            <h1 class="ps-5 ms-5">
                                <i class="mdi mdi-play-circle menu-icon text-dark"></i>
                            </h1>
                        </div>
                    </div>
                </div>
                <div class="col-3">
                    <div class="card text-start border border-success" style="width: 18rem;">
                        <div class="card-body">
                            <h1 class="ps-3 ms-6">
                                <i class="mdi mdi-audiobook menu-icon text-success" style="font-size: 120px"></i>
                            </h1>

                            <p class="fs-5"><span class="fw-bolder pe-2">Name:</span>A0000001.wav</p>
                            <p class="fs-5"><span class="fw-bolder pe-2">Duration:</span>3:00</p>
                            <p class="fs-5"><span class="fw-bolder pe-2">Size:</span>2MB</p>
                            <p class="fs-5"><span class="fw-bolder pe-2">Date of Creation:</span>12/05/2024</p>
                            <p class="fs-5"><span class="fw-bolder pe-2">Analysis Result:</span>Cough</p>

                            <h1 class="ps-5 ms-5">
                                <i class="mdi mdi-play-circle menu-icon text-dark"></i>
                            </h1>
                        </div>
                    </div>
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
    </div>
@endsection
