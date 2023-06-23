@extends('layouts.app')
@section('content')
    <div class="content-wrapper shadow card round">
        <div class="container-fluid">
            <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active text-center" id="tab-pane-{{ $security[0]->id }}" role="tabpanel" aria-labelledby="pills-home-tab">
                    <img src="{{ asset('storage/' . $security[0]->reading) }}" alt="thief photo" class="rounded img-fluid">
                </div>
                @for ($i = 1; $i < count($security); $i++)
                    <div class="tab-pane fade text-center" id="tab-pane-{{ $security[$i]->id }}" role="tabpanel" aria-labelledby="pills-contact-tab">
                        <img src="{{ asset('storage/' . $security[$i]->reading) }}" alt="thief photo" class="rounded img-fluid">
                    </div>
                @endfor
            </div>
            <ul class="nav nav-pills mt-3 row" id="pills-tab" role="tablist">
                <li class="nav-item col-2" role="presentation">
                    <button class="nav-link active" id="tab-{{ $security[0]->id }}-tab" data-bs-toggle="pill" data-bs-target="#tab-pane-{{ $security[0]->id }}" type="button" role="tab" aria-controls="tab-pane-{{ $security[0]->id }}" aria-selected="true">
                        <img src="{{ asset('storage/' . $security[0]->reading) }}" alt="thief photo" class="img-fluid">
                    </button>
                </li>
                @for ($i = 1; $i < count($security); $i++)
                    <li class="nav-item col-2" role="presentation">
                        <button class="nav-link" id="tab-{{ $security[$i]->id }}-tab" data-bs-toggle="pill" data-bs-target="#tab-pane-{{ $security[$i]->id }}" type="button" role="tab" aria-controls="tab-pane-{{ $security[$i]->id }}" aria-selected="false">
                            <img src="{{ asset('storage/' . $security[$i]->reading) }}" alt="thief photo" class="img-fluid">
                        </button>
                    </li>
                @endfor
            </ul>
        </div>
    </div>
@endsection
