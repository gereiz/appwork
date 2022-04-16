@extends('layouts.layout-2')

@section('styles')
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/bootstrap-datepicker/bootstrap-datepicker.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/flatpickr/flatpickr.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/bootstrap-daterangepicker/bootstrap-daterangepicker.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/bootstrap-material-datetimepicker/bootstrap-material-datetimepicker.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/timepicker/timepicker.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/minicolors/minicolors.css') }}">
@endsection

@section('scripts')
    <!-- Dependencies -->
    <script src="{{ asset('assets/vendor/libs/moment/moment.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/bootstrap-datepicker/bootstrap-datepicker.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/flatpickr/flatpickr.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/bootstrap-daterangepicker/bootstrap-daterangepicker.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/bootstrap-material-datetimepicker/bootstrap-material-datetimepicker.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/timepicker/timepicker.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/minicolors/minicolors.js') }}"></script>
    
    <script src="{{ asset('assets/js/forms_pickers.js') }}"></script>
@endsection

@section('content')
    <h4 class="font-weight-bold py-3 mb-4">
        <span class="text-muted font-weight-light">Forms /</span> Pickers
    </h4>

    <div class="card mb-4">
        <h6 class="card-header">
            Bootstrap Datepicker
        </h6>
        <div class="card-body demo-vertical-spacing">
            <input type="text" class="form-control" id="datepicker-base">

            <!-- Features -->
            <input type="text" class="form-control" id="datepicker-features">

            <!-- Range -->
            <div class="input-daterange input-group" id="datepicker-range">
                <input type="text" class="form-control" name="start">
                <div class="input-group-prepend">
                    <span class="input-group-text">to</span>
                </div>
                <input type="text" class="form-control" name="end">
            </div>

            <!-- Inline -->
            <div id="datepicker-inline"></div>
        </div>
    </div>

    <div class="card mb-4">
        <h6 class="card-header">
            Flatpickr
        </h6>
        <div class="card-body demo-vertical-spacing pt-0">
            <!-- Date -->
            <input type="text" class="form-control" id="flatpickr-date">

            <!-- Time -->
            <input type="text" class="form-control" id="flatpickr-time">

            <!-- Datetime -->
            <input type="text" class="form-control" id="flatpickr-datetime">

            <!-- Full -->
            <input type="text" class="form-control" id="flatpickr-full">

            <!-- Range -->
            <input type="text" class="form-control" id="flatpickr-range">

            <!-- Inline -->
            <div>
                <input type="text" class="form-control" id="flatpickr-inline">
            </div>
        </div>
    </div>

    <div class="card mb-4">
        <h6 class="card-header">
            Bootstrap Daterangepicker
        </h6>
        <div class="card-body demo-vertical-spacing">
            <input type="text" id="daterange-1" value="01/01/2015 - 01/31/2015" class="form-control">

            <input type="text" id="daterange-2" value="01/01/2015 1:30 PM - 01/01/2015 2:00 PM" class="form-control">

            <input type="text" id="daterange-3" value="10/24/1984" class="form-control">

            <button id="daterange-4" class="btn btn-default dropdown-toggle md-btn-flat"></button>
        </div>
    </div>

    <div class="card mb-4">
        <h6 class="card-header">
            Bootstrap Material DateTimePicker
        </h6>
        <div class="card-body demo-vertical-spacing">
            <input type="text" id="b-m-dtp-date" class="form-control" placeholder="Date">

            <input type="text" id="b-m-dtp-time" class="form-control" placeholder="Time">

            <input type="text" id="b-m-dtp-datetime" class="form-control" placeholder="DateTime">
        </div>
    </div>

    <div class="card mb-4">
        <h6 class="card-header">
            jQuery Timepicker
        </h6>
        <div class="card-body demo-vertical-spacing">
            <input type="text" id="timepicker-example-1" class="form-control">

            <input type="text" id="timepicker-example-2" class="form-control">

            <input type="text" id="timepicker-example-3" class="form-control">

            <div class="row">
                <div class="col">
                    <input type="text" id="timepicker-example-4" class="form-control">
                </div>
                <div class="col">
                    <input type="text" id="timepicker-example-5" class="form-control">
                </div>
            </div>

            <input type="text" id="timepicker-example-6" class="form-control">
        </div>
    </div>

    <div class="card mb-4">
        <h6 class="card-header">
            Minicolors
        </h6>
        <div class="card-body demo-vertical-spacing">
            <input type="text" id="minicolors-hue" class="form-control" value="#ff6161">

            <input type="text" id="minicolors-saturation" class="form-control" value="#0088cc">

            <input type="text" id="minicolors-wheel" class="form-control" value="#ff99ee">

            <input type="text" id="minicolors-opacity" class="form-control" value="#766fa8" data-opacity=".5">

            <input type="text" id="minicolors-brightness" class="form-control" value="#00ffff">

            <input type="hidden" id="minicolors-hidden" class="form-control" value="#db913d">
        </div>
    </div>
@endsection