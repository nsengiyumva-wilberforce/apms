@extends('layouts.app')
@section('content')
<div class="content-wrapper">
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

    </div>
@endsection
