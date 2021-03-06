@extends('layouts.layout-2')

@section('styles')
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/ladda/ladda.css') }}">
@endsection

@section('scripts')
    <!-- Dependencies -->
    <script src="{{ asset('assets/vendor/libs/spin/spin.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/ladda/ladda.js') }}"></script>
    
    <script src="{{ asset('assets/js/misc_ladda.js') }}"></script>
@endsection

@section('content')
    <h4 class="font-weight-bold py-3 mb-4">
        <span class="text-muted font-weight-light">Miscellaneous /</span> Ladda
    </h4>

    <hr class="container-m-nx border-light mt-0 mb-4">

    <div class="card">
        <div class="card-body demo-vertical-spacing">
            <div class="row button-demo">
                <div class="col">
                    <h6 class="text-muted small font-weight-bold">expand-left</h6>
                    <button class="btn btn-primary ladda-button" data-style="expand-left">Submit</button>
                </div>

                <div class="col">
                    <h6 class="text-muted small font-weight-bold">expand-right</h6>
                    <button class="btn btn-primary ladda-button" data-style="expand-right">Submit</button>
                </div>

                <div class="col">
                    <h6 class="text-muted small font-weight-bold">expand-up</h6>
                    <button class="btn btn-primary ladda-button" data-style="expand-up">Submit</button>
                </div>

                <div class="col">
                    <h6 class="text-muted small font-weight-bold">expand-down</h6>
                    <button class="btn btn-primary ladda-button" data-style="expand-down">Submit</button>
                </div>
            </div>

            <div class="row button-demo">
                <div class="col">
                    <h6 class="text-muted small font-weight-bold">contract</h6>
                    <button class="btn btn-success ladda-button" data-style="contract">Submit</button>
                </div>

                <div class="col">
                    <h6 class="text-muted small font-weight-bold">contract-overlay</h6>
                    <button class="btn btn-success ladda-button" data-style="contract-overlay" style="z-index: 10;">Submit</button>
                </div>

                <div class="col">
                    <h6 class="text-muted small font-weight-bold">zoom-in</h6>
                    <button class="btn btn-success ladda-button" data-style="zoom-in">Submit</button>
                </div>

                <div class="col">
                    <h6 class="text-muted small font-weight-bold">zoom-out</h6>
                    <button class="btn btn-success ladda-button" data-style="zoom-out">Submit</button>
                </div>
            </div>

            <div class="row button-demo">
                <div class="col">
                    <h6 class="text-muted small font-weight-bold">slide-left</h6>
                    <button class="btn btn-info ladda-button" data-style="slide-left">Submit</button>
                </div>

                <div class="col">
                    <h6 class="text-muted small font-weight-bold">slide-right</h6>
                    <button class="btn btn-info ladda-button" data-style="slide-right">Submit</button>
                </div>

                <div class="col">
                    <h6 class="text-muted small font-weight-bold">slide-up</h6>
                    <button class="btn btn-info ladda-button" data-style="slide-up">Submit</button>
                </div>

                <div class="col">
                    <h6 class="text-muted small font-weight-bold">slide-down</h6>
                    <button class="btn btn-info ladda-button" data-style="slide-down">Submit</button>
                </div>
            </div>

        </div>
        <hr class="m-0">
        <div class="card-body demo-vertical-spacing">
            <h6>Built-in progress bar</h6>

            <div class="row progress-demo">
                <div class="col">
                    <h6 class="text-muted small font-weight-bold">expand-right</h6>
                    <button class="btn btn-danger ladda-button" data-style="expand-right">Submit</button>
                </div>

                <div class="col">
                    <h6 class="text-muted small font-weight-bold">contract</h6>
                    <button class="btn btn-danger ladda-button" data-style="contract">Submit</button>
                </div>
            </div>

        </div>
    </div>
@endsection