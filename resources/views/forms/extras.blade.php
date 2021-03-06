@extends('layouts.layout-2')

@section('styles')
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/bootstrap-maxlength/bootstrap-maxlength.css') }}">
    
    <style>
        [dir=rtl] .knob-example>div {
            position: relative;
        }
    
        [dir=rtl] .knob-example input {
            transform: translateX(50%);
            margin-left: 0 !important;
            right: 50%;
        }
    
        .pwstrength-progress.progress {
            margin: 3px 0;
            height: 3px;
        }
    
        .password-verdict {
            font-size: 12px;
            font-weight: 700;
            display: block;
            text-align: right;
        }
    
        [dir=rtl] .password-verdict {
            text-align: left;
        }
    </style>
@endsection

@section('scripts')
    <!-- Dependencies -->
    <script src="{{ asset('assets/vendor/libs/autosize/autosize.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/vanilla-text-mask/vanilla-text-mask.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/vanilla-text-mask/text-mask-addons.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/knob/knob.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/bootstrap-maxlength/bootstrap-maxlength.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/pwstrength-bootstrap/pwstrength-bootstrap.js') }}"></script>
    
    <script src="{{ asset('assets/js/forms_extras.js') }}"></script>
@endsection

@section('content')
    <h4 class="font-weight-bold py-3 mb-4">
        <span class="text-muted font-weight-light">Forms /</span> Extras
    </h4>

    <div class="card mb-4">
        <h6 class="card-header">
            Autosize
        </h6>
        <div class="card-body">
            <textarea id="autosize-demo" rows="3" class="form-control"></textarea>
        </div>
    </div>

    <div class="card mb-4">
        <h6 class="card-header">
            Vanilla Text Mask
        </h6>
        <div class="card-body demo-vertical-spacing-sm">
            <input type="text" id="text-mask-phone" class="form-control" placeholder="(___) ___-____">

            <input type="text" id="text-mask-number" class="form-control" placeholder="$">

            <input type="text" id="text-mask-email" class="form-control" placeholder=" @ .">

            <input type="text" id="text-mask-date" class="form-control" placeholder="__/__/____">
        </div>
    </div>

    <div class="card mb-4">
        <h6 class="card-header">
            Knob
        </h6>
        <div class="card-body demo-inline-spacing">
            <div class="knob-example">
                <input type="text" data-width="100" data-height="100" value="75">

                <input type="text" data-width="100" data-height="100" value="35" data-displayinput="false">

                <input type="text" data-width="100" data-height="100" value="29" data-cursor="true" data-fgcolor="#222222" data-thickness=".3">

                <input type="text" data-width="100" data-height="100" value="35" data-angleoffset="-125" data-anglearc="250" data-fgcolor="#66EE66" data-rotation="anticlockwise" data-linecap="round">
            </div>
        </div>
    </div>

    <div class="card mb-4">
        <h6 class="card-header">
            Bootstrap Maxlength
        </h6>
        <div class="card-body demo-vertical-spacing-sm">
            <input type="text" class="form-control bootstrap-maxlength-example" maxlength="25">

            <textarea class="form-control bootstrap-maxlength-example" rows="3" maxlength="255"></textarea>
        </div>
    </div>

    <div class="card mb-4">
        <h6 class="card-header">
            Pwstrength-bootstrap
        </h6>
        <div class="card-body">
            <input type="password" class="form-control" id="pwstrength-example">
        </div>
    </div>
@endsection