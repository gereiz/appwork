@extends('layouts.layout-2')

@section('scripts')
    <script src="{{ asset('assets/js/ui_button-groups.js') }}"></script>
@endsection

@section('content')
    <h4 class="font-weight-bold py-3 mb-4">
        <span class="text-muted font-weight-light">UI elements /</span> Button groups
    </h4>

    <div class="row">
        <div class="col-12">

            <div class="card mb-4">
                <h6 class="card-header">
                    Sizes
                </h6>
                <div class="card-body demo-vertical-spacing">
                    <!-- Extra-large -->
                    <div class="btn-group btn-group-xl">
                        <button type="button" class="btn btn-secondary">Left</button>
                        <button type="button" class="btn btn-secondary">Middle</button>
                        <button type="button" class="btn btn-secondary">Right</button>
                    </div>

                    <br>

                    <!-- Large -->
                    <div class="btn-group btn-group-lg">
                        <button type="button" class="btn btn-secondary">Left</button>
                        <button type="button" class="btn btn-secondary">Middle</button>
                        <button type="button" class="btn btn-secondary">Right</button>
                    </div>

                    <br>

                    <!-- Default -->
                    <div class="btn-group">
                        <button type="button" class="btn btn-secondary">Left</button>
                        <button type="button" class="btn btn-secondary">Middle</button>
                        <button type="button" class="btn btn-secondary">Right</button>
                    </div>

                    <br>

                    <!-- Small -->
                    <div class="btn-group btn-group-sm">
                        <button type="button" class="btn btn-secondary">Left</button>
                        <button type="button" class="btn btn-secondary">Middle</button>
                        <button type="button" class="btn btn-secondary">Right</button>
                    </div>

                    <br>

                    <!-- Extra-small -->
                    <div class="btn-group btn-group-xs">
                        <button type="button" class="btn btn-secondary">Left</button>
                        <button type="button" class="btn btn-secondary">Middle</button>
                        <button type="button" class="btn btn-secondary">Right</button>
                    </div>
                </div>
            </div>

        </div>
        <div class="col-12">

            <div class="card mb-4">
                <h6 class="card-header">
                    Toolbar
                </h6>
                <div class="card-body">
                    <div class="btn-toolbar">
                        <div class="btn-group mr-2">
                            <button type="button" class="btn btn-secondary">1</button>
                            <button type="button" class="btn btn-secondary">2</button>
                            <button type="button" class="btn btn-secondary">3</button>
                            <button type="button" class="btn btn-secondary">4</button>
                        </div>
                        <div class="btn-group mr-2">
                            <button type="button" class="btn btn-secondary">5</button>
                            <button type="button" class="btn btn-secondary">6</button>
                            <button type="button" class="btn btn-secondary">7</button>
                        </div>
                        <div class="btn-group">
                            <button type="button" class="btn btn-secondary">8</button>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="col-12">

            <div class="card mb-4">
                <h6 class="card-header">
                    Nesting
                </h6>
                <div class="card-body">
                    <div class="btn-group" id="nesting-button-group-demo">
                        <button type="button" class="btn btn-secondary">1</button>
                        <button type="button" class="btn btn-secondary">2</button>

                        <div class="btn-group">
                            <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown">Dropdown</button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="javascript:void(0)">Dropdown link</a>
                                <a class="dropdown-item" href="javascript:void(0)">Dropdown link</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="col-12">

            <div class="card mb-4">
                <h6 class="card-header">
                    Vertical
                </h6>
                <div class="card-body">
                    <div class="btn-group-vertical" id="vertical-button-group-demo">
                        <button type="button" class="btn btn-secondary">Button</button>
                        <button type="button" class="btn btn-secondary">Button</button>
                        <div class="btn-group">
                            <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown">Dropdown</button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="javascript:void(0)">Dropdown link</a>
                                <a class="dropdown-item" href="javascript:void(0)">Dropdown link</a>
                            </div>
                        </div>
                        <button type="button" class="btn btn-secondary">Button</button>
                        <button type="button" class="btn btn-secondary">Button</button>
                        <div class="btn-group">
                            <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown">Dropdown</button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="javascript:void(0)">Dropdown link</a>
                                <a class="dropdown-item" href="javascript:void(0)">Dropdown link</a>
                            </div>
                        </div>
                        <div class="btn-group">
                            <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown">Dropdown</button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="javascript:void(0)">Dropdown link</a>
                                <a class="dropdown-item" href="javascript:void(0)">Dropdown link</a>
                            </div>
                        </div>
                        <div class="btn-group">
                            <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown">Dropdown</button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="javascript:void(0)">Dropdown link</a>
                                <a class="dropdown-item" href="javascript:void(0)">Dropdown link</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection