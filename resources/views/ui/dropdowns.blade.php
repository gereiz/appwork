@extends('layouts.layout-2')

@section('styles')
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/toastr/toastr.css') }}">
@endsection

@section('scripts')
    <!-- Dependencies -->
    <script src="{{ asset('assets/vendor/js/dropdown-hover.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/bootstrap-menu/bootstrap-menu.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/toastr/toastr.js') }}"></script>
    
    <script src="{{ asset('assets/js/ui_dropdowns.js') }}"></script>
@endsection

@section('content')
    <h4 class="font-weight-bold py-3 mb-4">
        <span class="text-muted font-weight-light">UI elements /</span> Dropdowns
    </h4>

    <div class="bg-lighter rounded p-4 mb-4 clearfix">
        <div class="dropdown-menu d-block position-static float-left">
            <a class="dropdown-item" href="javascript:void(0)">
                <span class="badge badge-success float-right">34</span>Action</a>
            <a class="dropdown-item" href="javascript:void(0)">
                <span class="badge badge-pill badge-primary float-right">16</span>Another action</a>
            <a class="dropdown-item disabled" href="javascript:void(0)">Something else here</a>
            <div class="dropdown-divider"></div>
            <h6 class="dropdown-header">Dropdown header</h6>
            <a class="dropdown-item active" href="javascript:void(0)">
                <i class="ion ion-md-cloud"></i> &nbsp;With icon</a>
            <a class="dropdown-item" href="javascript:void(0)">Last action</a>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">

            <div class="card mb-4">
                <h6 class="card-header">
                    Nested
                </h6>
                <div class="card-body">
                    <div class="dropdown" id="nesting-dropdown-demo">
                        <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">Nested dropdowns</button>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="javascript:void(0)">First action</a>

                            <!-- Level two -->
                            <div class="dropdown-toggle">
                                <div class="dropdown-item">First menu</div>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="javascript:void(0)">First action</a>
                                    <a class="dropdown-item" href="javascript:void(0)">Second action</a>

                                    <!-- Level three -->
                                    <div class="dropdown-toggle">
                                        <div class="dropdown-item">Second menu</div>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="javascript:void(0)">First action</a>
                                            <a class="dropdown-item" href="javascript:void(0)">Second action</a>
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <a class="dropdown-item" href="javascript:void(0)">Second action</a>

                            <!-- Level two -->
                            <div class="dropdown-toggle">
                                <div class="dropdown-item">Second menu</div>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="javascript:void(0)">First action</a>
                                    <a class="dropdown-item" href="javascript:void(0)">Second action</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="col-md-6">

            <div class="card mb-4">
                <h6 class="card-header">
                    Hover
                </h6>
                <div class="card-body">
                    <div class="btn-group" id="hover-dropdown-demo">
                        <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" data-trigger="hover">Hover</button>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="javascript:void(0)">Action</a>
                            <a class="dropdown-item" href="javascript:void(0)">Another action</a>
                            <a class="dropdown-item" href="javascript:void(0)">Something else here</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="javascript:void(0)">Separated link</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div class="card mb-4" id="btn-dropdown-demo">
        <h6 class="card-header">
            Button dropdowns
        </h6>
        <div class="card-body">
            <small class="text-light font-weight-semibold">Variations</small>
            <div class="demo-inline-spacing mt-3">
                <div class="btn-group">
                    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">Default</button>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="javascript:void(0)">Action</a>
                        <a class="dropdown-item" href="javascript:void(0)">Another action</a>
                        <a class="dropdown-item" href="javascript:void(0)">Something else here</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="javascript:void(0)">Separated link</a>
                    </div>
                </div>

                <div class="btn-group">
                    <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">Primary</button>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="javascript:void(0)">Action</a>
                        <a class="dropdown-item" href="javascript:void(0)">Another action</a>
                        <a class="dropdown-item" href="javascript:void(0)">Something else here</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="javascript:void(0)">Separated link</a>
                    </div>
                </div>

                <div class="btn-group">
                    <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown">Secondary</button>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="javascript:void(0)">Action</a>
                        <a class="dropdown-item" href="javascript:void(0)">Another action</a>
                        <a class="dropdown-item" href="javascript:void(0)">Something else here</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="javascript:void(0)">Separated link</a>
                    </div>
                </div>

                <div class="btn-group">
                    <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown">Success</button>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="javascript:void(0)">Action</a>
                        <a class="dropdown-item" href="javascript:void(0)">Another action</a>
                        <a class="dropdown-item" href="javascript:void(0)">Something else here</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="javascript:void(0)">Separated link</a>
                    </div>
                </div>

                <div class="btn-group">
                    <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown">Info</button>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="javascript:void(0)">Action</a>
                        <a class="dropdown-item" href="javascript:void(0)">Another action</a>
                        <a class="dropdown-item" href="javascript:void(0)">Something else here</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="javascript:void(0)">Separated link</a>
                    </div>
                </div>

                <div class="btn-group">
                    <button type="button" class="btn btn-warning dropdown-toggle" data-toggle="dropdown">Warning</button>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="javascript:void(0)">Action</a>
                        <a class="dropdown-item" href="javascript:void(0)">Another action</a>
                        <a class="dropdown-item" href="javascript:void(0)">Something else here</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="javascript:void(0)">Separated link</a>
                    </div>
                </div>

                <div class="btn-group">
                    <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown">Danger</button>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="javascript:void(0)">Action</a>
                        <a class="dropdown-item" href="javascript:void(0)">Another action</a>
                        <a class="dropdown-item" href="javascript:void(0)">Something else here</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="javascript:void(0)">Separated link</a>
                    </div>
                </div>

                <div class="btn-group">
                    <button type="button" class="btn btn-dark dropdown-toggle" data-toggle="dropdown">Dark</button>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="javascript:void(0)">Action</a>
                        <a class="dropdown-item" href="javascript:void(0)">Another action</a>
                        <a class="dropdown-item" href="javascript:void(0)">Something else here</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="javascript:void(0)">Separated link</a>
                    </div>
                </div>
            </div>
        </div>
        <hr class="m-0">
        <div class="card-body">
            <small class="text-light font-weight-semibold">Hidden arrow</small>
            <div class="demo-inline-spacing mt-3">
                <div class="btn-group">
                    <button type="button" class="btn btn-primary dropdown-toggle hide-arrow" data-toggle="dropdown">Primary</button>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="javascript:void(0)">Action</a>
                        <a class="dropdown-item" href="javascript:void(0)">Another action</a>
                        <a class="dropdown-item" href="javascript:void(0)">Something else here</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="javascript:void(0)">Separated link</a>
                    </div>
                </div>

                <div class="btn-group dropdown-toggle-hide-arrow">
                    <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown">Secondary</button>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="javascript:void(0)">Action</a>
                        <a class="dropdown-item" href="javascript:void(0)">Another action</a>
                        <a class="dropdown-item" href="javascript:void(0)">Something else here</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="javascript:void(0)">Separated link</a>
                    </div>
                </div>
            </div>
        </div>
        <hr class="m-0">
        <div class="card-body">
            <small class="text-light font-weight-semibold">Split</small>
            <div class="demo-inline-spacing mt-3">
                <div class="btn-group">
                    <button type="button" class="btn btn-default">Default</button>
                    <button type="button" class="btn btn-default dropdown-toggle dropdown-toggle-split" data-toggle="dropdown"></button>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="javascript:void(0)">Action</a>
                        <a class="dropdown-item" href="javascript:void(0)">Another action</a>
                        <a class="dropdown-item" href="javascript:void(0)">Something else here</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="javascript:void(0)">Separated link</a>
                    </div>
                </div>

                <div class="btn-group">
                    <button type="button" class="btn btn-primary">Primary</button>
                    <button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown"></button>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="javascript:void(0)">Action</a>
                        <a class="dropdown-item" href="javascript:void(0)">Another action</a>
                        <a class="dropdown-item" href="javascript:void(0)">Something else here</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="javascript:void(0)">Separated link</a>
                    </div>
                </div>

                <div class="btn-group">
                    <button type="button" class="btn btn-secondary">Secondary</button>
                    <button type="button" class="btn btn-secondary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown"></button>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="javascript:void(0)">Action</a>
                        <a class="dropdown-item" href="javascript:void(0)">Another action</a>
                        <a class="dropdown-item" href="javascript:void(0)">Something else here</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="javascript:void(0)">Separated link</a>
                    </div>
                </div>

                <div class="btn-group">
                    <button type="button" class="btn btn-success">Success</button>
                    <button type="button" class="btn btn-success dropdown-toggle dropdown-toggle-split" data-toggle="dropdown"></button>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="javascript:void(0)">Action</a>
                        <a class="dropdown-item" href="javascript:void(0)">Another action</a>
                        <a class="dropdown-item" href="javascript:void(0)">Something else here</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="javascript:void(0)">Separated link</a>
                    </div>
                </div>

                <div class="btn-group">
                    <button type="button" class="btn btn-info">Info</button>
                    <button type="button" class="btn btn-info dropdown-toggle dropdown-toggle-split" data-toggle="dropdown"></button>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="javascript:void(0)">Action</a>
                        <a class="dropdown-item" href="javascript:void(0)">Another action</a>
                        <a class="dropdown-item" href="javascript:void(0)">Something else here</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="javascript:void(0)">Separated link</a>
                    </div>
                </div>

                <div class="btn-group">
                    <button type="button" class="btn btn-warning">Warning</button>
                    <button type="button" class="btn btn-warning dropdown-toggle dropdown-toggle-split" data-toggle="dropdown"></button>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="javascript:void(0)">Action</a>
                        <a class="dropdown-item" href="javascript:void(0)">Another action</a>
                        <a class="dropdown-item" href="javascript:void(0)">Something else here</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="javascript:void(0)">Separated link</a>
                    </div>
                </div>

                <div class="btn-group">
                    <button type="button" class="btn btn-danger">Danger</button>
                    <button type="button" class="btn btn-danger dropdown-toggle dropdown-toggle-split" data-toggle="dropdown"></button>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="javascript:void(0)">Action</a>
                        <a class="dropdown-item" href="javascript:void(0)">Another action</a>
                        <a class="dropdown-item" href="javascript:void(0)">Something else here</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="javascript:void(0)">Separated link</a>
                    </div>
                </div>

                <div class="btn-group">
                    <button type="button" class="btn btn-dark">Dark</button>
                    <button type="button" class="btn btn-dark dropdown-toggle dropdown-toggle-split" data-toggle="dropdown"></button>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="javascript:void(0)">Action</a>
                        <a class="dropdown-item" href="javascript:void(0)">Another action</a>
                        <a class="dropdown-item" href="javascript:void(0)">Something else here</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="javascript:void(0)">Separated link</a>
                    </div>
                </div>
            </div>
        </div>
        <hr class="m-0">
        <div class="card-body">
            <small class="text-light font-weight-semibold">Sizes</small>
            <div class="demo-vertical-spacing-sm mt-3">
                <div class="btn-group">
                    <button class="btn btn-default btn-xl dropdown-toggle" type="button" data-toggle="dropdown">Extra large button</button>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="javascript:void(0)">Action</a>
                        <a class="dropdown-item" href="javascript:void(0)">Another action</a>
                        <a class="dropdown-item" href="javascript:void(0)">Something else here</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="javascript:void(0)">Separated link</a>
                    </div>
                </div>
                <br>

                <div class="btn-group">
                    <button class="btn btn-default btn-lg dropdown-toggle" type="button" data-toggle="dropdown">Large button</button>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="javascript:void(0)">Action</a>
                        <a class="dropdown-item" href="javascript:void(0)">Another action</a>
                        <a class="dropdown-item" href="javascript:void(0)">Something else here</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="javascript:void(0)">Separated link</a>
                    </div>
                </div>
                <br>

                <div class="btn-group">
                    <button class="btn btn-default btn-sm dropdown-toggle" type="button" data-toggle="dropdown">Small button</button>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="javascript:void(0)">Action</a>
                        <a class="dropdown-item" href="javascript:void(0)">Another action</a>
                        <a class="dropdown-item" href="javascript:void(0)">Something else here</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="javascript:void(0)">Separated link</a>
                    </div>
                </div>
                <br>

                <div class="btn-group">
                    <button class="btn btn-default btn-xs dropdown-toggle" type="button" data-toggle="dropdown">Extra small button</button>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="javascript:void(0)">Action</a>
                        <a class="dropdown-item" href="javascript:void(0)">Another action</a>
                        <a class="dropdown-item" href="javascript:void(0)">Something else here</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="javascript:void(0)">Separated link</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="card mb-4">
        <h6 class="card-header">
            Bootstrap Menu
        </h6>
        <div class="card-body">
            <div id="bs-menu-example" class="position-relative text-center" style="height: 300px; border:1px solid #ddd">
                <span style="line-height: 300px">Right click anywhere inside this box</span>
            </div>
        </div>
    </div>
@endsection