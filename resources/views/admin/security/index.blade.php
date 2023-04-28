@extends('layouts.app')
@section('content')
    <div class="content-wrapper shadow card round">
        <div class="container-fluid">
            <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active text-center" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                    <img src="{{ asset('dash/thief.jpeg' ) }}" alt="thief photo" class="rounded" style="margin-top: -70px; margin-bottom: -30px; margin-left: -20px; height: 55vh; width: 78vw">
                </div>
                <div class="tab-pane fade text-center" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                    <img src="{{ asset('dash/thief.jpeg' ) }}" alt="thief photo" class="rounded" style="margin-top: -70px; margin-bottom: -30px; margin-left: -20px; height: 55vh; width: 78vw">                </div>
                <div class="tab-pane fade text-center" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                    <img src="{{ asset('dash/thief.jpeg' ) }}" alt="thief photo" class="rounded" style="margin-top: -70px; margin-bottom: -30px; margin-left: -20px; height: 55vh; width: 78vw">
                </div>
            </div>
            <ul class="nav nav-pills mt-3" id="pills-tab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home"
                        type="button" role="tab" aria-controls="pills-home" aria-selected="true">
                        <img src="{{ asset('dash/thief.jpeg' ) }}" alt="thief photo">
                    </button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile"
                        type="button" role="tab" aria-controls="pills-profile" aria-selected="false">
                        <img src="{{ asset('dash/thief.jpeg' ) }}" alt="thief photo">
                    </button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact"
                        type="button" role="tab" aria-controls="pills-contact" aria-selected="false">
                        <img src="{{ asset('dash/thief.jpeg' ) }}" alt="thief photo">
                    </button>
                </li>
            </ul>
        </div>
    </div>
@endsection
