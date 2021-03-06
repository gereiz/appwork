@extends('layouts.layout-2')

@section('scripts')
    <!-- Dependencies -->
    <script src="{{ asset('assets/vendor/js/sidenav.js') }}"></script>
    
    <script src="{{ asset('assets/js/ui_sidenav.js') }}"></script>
@endsection

@section('content')
    <h4 class="font-weight-bold py-3 mb-4">
        <span class="text-muted font-weight-light">UI elements /</span> Sidenav
    </h4>

    <h6 class="pb-1 mt-5 mb-4">Vertical</h6>

    <button type="button" id="sidenav-1-toggle-collapsed" class="btn btn-primary mb-4">Toggle collapsed</button>

    <div id="sidenav-1" class="sidenav sidenav-vertical bg-dark" style="height: 450px">
        <ul class="sidenav-inner py-3">
            <li class="sidenav-item">
                <a href="javascript:void(0)" class="sidenav-link">
                    <i class="sidenav-icon ion ion-md-notifications-outline"></i>
                    <div>Some Long Long Long Long Long Item</div>
                </a>
            </li>
            <li class="sidenav-item">
                <a href="javascript:void(0)" class="sidenav-link sidenav-toggle">
                    <i class="sidenav-icon ion ion-ios-settings"></i>
                    <div>Item 1</div>
                </a>
                <ul class="sidenav-menu">
                    <li class="sidenav-item">
                        <a href="javascript:void(0)" class="sidenav-link">
                            <div>Item 1.1</div>
                        </a>
                    </li>
                    <li class="sidenav-item">
                        <a href="javascript:void(0)" class="sidenav-link">
                            <div>Item 1.2</div>
                        </a>
                    </li>
                    <li class="sidenav-item">
                        <a href="javascript:void(0)" class="sidenav-link">
                            <div>Item 1.3</div>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="sidenav-item">
                <a href="javascript:void(0)" class="sidenav-link sidenav-toggle">
                    <i class="sidenav-icon ion ion-md-paper"></i>
                    <div>Item 2</div>
                </a>

                <ul class="sidenav-menu">
                    <li class="sidenav-item">
                        <a href="javascript:void(0)" class="sidenav-link">
                            <div>Item 2.1</div>
                        </a>
                    </li>
                    <li class="sidenav-item">
                        <a href="javascript:void(0)" class="sidenav-link sidenav-toggle">
                            <div>Item 2.2</div>
                        </a>

                        <ul class="sidenav-menu">
                            <li class="sidenav-item">
                                <a href="javascript:void(0)" class="sidenav-link">
                                    <div>Item 2.2.1</div>
                                </a>
                            </li>
                            <li class="sidenav-item">
                                <a href="javascript:void(0)" class="sidenav-link" id="111">
                                    <div>Item 2.2.2</div>
                                </a>
                            </li>
                            <li class="sidenav-item">
                                <a href="javascript:void(0)" class="sidenav-link">
                                    <div>Item 2.2.3</div>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="sidenav-item">
                        <a href="javascript:void(0)" class="sidenav-link sidenav-toggle">
                            <div>Item 2.3</div>
                        </a>

                        <ul class="sidenav-menu">
                            <li class="sidenav-item">
                                <a href="javascript:void(0)" class="sidenav-link">
                                    <div>Item 2.3.1</div>
                                </a>
                            </li>
                            <li class="sidenav-item">
                                <a href="javascript:void(0)" class="sidenav-link">
                                    <div>Item 2.3.2</div>
                                </a>
                            </li>
                            <li class="sidenav-item">
                                <a href="javascript:void(0)" class="sidenav-link">
                                    <div>Item 2.3.3</div>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li class="sidenav-item active">
                <a href="javascript:void(0)" class="sidenav-link">
                    <i class="sidenav-icon ion ion-ios-flask"></i>
                    <div>Item 3</div>
                </a>
            </li>
            <li class="sidenav-item">
                <a href="javascript:void(0)" class="sidenav-link">
                    <i class="sidenav-icon ion ion-md-basketball"></i>
                    <div>Item 4</div>
                </a>
            </li>
            <li class="sidenav-item">
                <a href="javascript:void(0)" class="sidenav-link">
                    <i class="sidenav-icon ion ion-ios-bonfire"></i>
                    <div>Item 5</div>
                </a>
            </li>
            <li class="sidenav-item">
                <a href="javascript:void(0)" class="sidenav-link">
                    <i class="sidenav-icon ion ion-ios-cafe"></i>
                    <div>Item 6</div>
                </a>
            </li>
            <li class="sidenav-item">
                <a href="javascript:void(0)" class="sidenav-link">
                    <i class="sidenav-icon ion ion-ios-cloud-outline"></i>
                    <div>Item 7</div>
                </a>
            </li>
            <li class="sidenav-item">
                <a href="javascript:void(0)" class="sidenav-link">
                    <i class="sidenav-icon ion ion-md-code"></i>
                    <div>Item 8</div>
                </a>
            </li>
        </ul>
    </div>

    <h6 class="pb-1 mt-5 mb-4">Horizontal</h6>

    <div id="sidenav-2" class="sidenav sidenav-horizontal bg-dark" style="position: relative;z-index: 100">
        <ul class="sidenav-inner">
            <li class="sidenav-item">
                <a href="javascript:void(0)" class="sidenav-link">
                    <i class="sidenav-icon ion ion-md-notifications-outline"></i>
                    <div>Some Long Long Long Long Long Item</div>
                </a>
            </li>
            <li class="sidenav-item">
                <a href="javascript:void(0)" class="sidenav-link sidenav-toggle">
                    <i class="sidenav-icon ion ion-ios-settings"></i>
                    <div>Item 1</div>
                </a>
                <ul class="sidenav-menu">
                    <li class="sidenav-item">
                        <a href="javascript:void(0)" class="sidenav-link">
                            <div>Item 1.1</div>
                        </a>
                    </li>
                    <li class="sidenav-item">
                        <a href="javascript:void(0)" class="sidenav-link">
                            <div>Item 1.2</div>
                        </a>
                    </li>
                    <li class="sidenav-item">
                        <a href="javascript:void(0)" class="sidenav-link">
                            <div>Item 1.3</div>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="sidenav-item">
                <a href="javascript:void(0)" class="sidenav-link sidenav-toggle">
                    <i class="sidenav-icon ion ion-md-paper"></i>
                    <div>Item 2</div>
                </a>

                <ul class="sidenav-menu">
                    <li class="sidenav-item">
                        <a href="javascript:void(0)" class="sidenav-link">
                            <div>Item 2.1</div>
                        </a>
                    </li>
                    <li class="sidenav-item">
                        <a href="javascript:void(0)" class="sidenav-link sidenav-toggle">
                            <div>Item 2.2</div>
                        </a>

                        <ul class="sidenav-menu">
                            <li class="sidenav-item">
                                <a href="javascript:void(0)" class="sidenav-link">
                                    <div>Item 2.2.1</div>
                                </a>
                            </li>
                            <li class="sidenav-item">
                                <a href="javascript:void(0)" class="sidenav-link">
                                    <div>Item 2.2.2</div>
                                </a>
                            </li>
                            <li class="sidenav-item">
                                <a href="javascript:void(0)" class="sidenav-link">
                                    <div>Item 2.2.3</div>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="sidenav-item">
                        <a href="javascript:void(0)" class="sidenav-link sidenav-toggle">
                            <div>Item 2.3</div>
                        </a>

                        <ul class="sidenav-menu">
                            <li class="sidenav-item">
                                <a href="javascript:void(0)" class="sidenav-link">
                                    <div>Item 2.3.1</div>
                                </a>
                            </li>
                            <li class="sidenav-item">
                                <a href="javascript:void(0)" class="sidenav-link">
                                    <div>Item 2.3.2</div>
                                </a>
                            </li>
                            <li class="sidenav-item">
                                <a href="javascript:void(0)" class="sidenav-link">
                                    <div>Item 2.3.3</div>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li class="sidenav-item active">
                <a href="javascript:void(0)" class="sidenav-link">
                    <div>Item 3</div>
                </a>
            </li>
            <li class="sidenav-item">
                <a href="javascript:void(0)" class="sidenav-link">
                    <i class="sidenav-icon ion ion-md-basketball"></i>
                    <div>Item 4</div>
                </a>
            </li>
            <li class="sidenav-item">
                <a href="javascript:void(0)" class="sidenav-link">
                    <i class="sidenav-icon ion ion-ios-bonfire"></i>
                    <div>Item 5</div>
                </a>
            </li>
            <li class="sidenav-item">
                <a href="javascript:void(0)" class="sidenav-link">
                    <i class="sidenav-icon ion ion-ios-cafe"></i>
                    <div>Item 6</div>
                </a>
            </li>
            <li class="sidenav-item">
                <a href="javascript:void(0)" class="sidenav-link">
                    <i class="sidenav-icon ion ion-ios-cloud-outline"></i>
                    <div>Item 7</div>
                </a>
            </li>
            <li class="sidenav-item">
                <a href="javascript:void(0)" class="sidenav-link">
                    <i class="sidenav-icon ion ion-md-code"></i>
                    <div>Item 8</div>
                </a>
            </li>
        </ul>
    </div>

    <h6 class="pb-1 mt-5 mb-4">Horizontal (show dropdown on hover)</h6>

    <div id="sidenav-3" class="sidenav sidenav-horizontal bg-dark" style="position: relative;z-index: 99">
        <ul class="sidenav-inner">
            <li class="sidenav-item">
                <a href="javascript:void(0)" class="sidenav-link">
                    <i class="sidenav-icon ion ion-md-notifications-outline"></i>
                    <div>Some Long Long Long Long Long Item</div>
                </a>
            </li>
            <li class="sidenav-item">
                <a href="javascript:void(0)" class="sidenav-link sidenav-toggle">
                    <i class="sidenav-icon ion ion-ios-settings"></i>
                    <div>Item 1</div>
                </a>
                <ul class="sidenav-menu">
                    <li class="sidenav-item">
                        <a href="javascript:void(0)" class="sidenav-link">
                            <div>Item 1.1</div>
                        </a>
                    </li>
                    <li class="sidenav-item">
                        <a href="javascript:void(0)" class="sidenav-link">
                            <div>Item 1.2</div>
                        </a>
                    </li>
                    <li class="sidenav-item">
                        <a href="javascript:void(0)" class="sidenav-link">
                            <div>Item 1.3</div>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="sidenav-item">
                <a href="javascript:void(0)" class="sidenav-link sidenav-toggle">
                    <i class="sidenav-icon ion ion-md-paper"></i>
                    <div>Item 2</div>
                </a>

                <ul class="sidenav-menu">
                    <li class="sidenav-item">
                        <a href="javascript:void(0)" class="sidenav-link">
                            <div>Item 2.1</div>
                        </a>
                    </li>
                    <li class="sidenav-item">
                        <a href="javascript:void(0)" class="sidenav-link sidenav-toggle">
                            <div>Item 2.2</div>
                        </a>

                        <ul class="sidenav-menu">
                            <li class="sidenav-item">
                                <a href="javascript:void(0)" class="sidenav-link">
                                    <div>Item 2.2.1</div>
                                </a>
                            </li>
                            <li class="sidenav-item">
                                <a href="javascript:void(0)" class="sidenav-link">
                                    <div>Item 2.2.2</div>
                                </a>
                            </li>
                            <li class="sidenav-item">
                                <a href="javascript:void(0)" class="sidenav-link">
                                    <div>Item 2.2.3</div>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="sidenav-item">
                        <a href="javascript:void(0)" class="sidenav-link sidenav-toggle">
                            <div>Item 2.3</div>
                        </a>

                        <ul class="sidenav-menu">
                            <li class="sidenav-item">
                                <a href="javascript:void(0)" class="sidenav-link">
                                    <div>Item 2.3.1</div>
                                </a>
                            </li>
                            <li class="sidenav-item">
                                <a href="javascript:void(0)" class="sidenav-link">
                                    <div>Item 2.3.2</div>
                                </a>
                            </li>
                            <li class="sidenav-item">
                                <a href="javascript:void(0)" class="sidenav-link">
                                    <div>Item 2.3.3</div>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li class="sidenav-item active">
                <a href="javascript:void(0)" class="sidenav-link">
                    <div>Item 3</div>
                </a>
            </li>
            <li class="sidenav-item">
                <a href="javascript:void(0)" class="sidenav-link">
                    <i class="sidenav-icon ion ion-md-basketball"></i>
                    <div>Item 4</div>
                </a>
            </li>
            <li class="sidenav-item">
                <a href="javascript:void(0)" class="sidenav-link">
                    <i class="sidenav-icon ion ion-ios-bonfire"></i>
                    <div>Item 5</div>
                </a>
            </li>
            <li class="sidenav-item">
                <a href="javascript:void(0)" class="sidenav-link">
                    <i class="sidenav-icon ion ion-ios-cafe"></i>
                    <div>Item 6</div>
                </a>
            </li>
            <li class="sidenav-item">
                <a href="javascript:void(0)" class="sidenav-link">
                    <i class="sidenav-icon ion ion-ios-cloud-outline"></i>
                    <div>Item 7</div>
                </a>
            </li>
            <li class="sidenav-item">
                <a href="javascript:void(0)" class="sidenav-link">
                    <i class="sidenav-icon ion ion-md-code"></i>
                    <div>Item 8</div>
                </a>
            </li>
        </ul>
    </div>

    <h6 class="pb-1 mt-5 mb-4">Horizontal (within container)</h6>

    <div id="sidenav-4" class="sidenav sidenav-horizontal bg-dark" style="position: relative;z-index: 98">
        <div class="container d-flex">
            <ul class="sidenav-inner">
                <li class="sidenav-item">
                    <a href="javascript:void(0)" class="sidenav-link">
                        <i class="sidenav-icon ion ion-md-notifications-outline"></i>
                        <div>Some Long Long Long Long Long Item</div>
                    </a>
                </li>
                <li class="sidenav-item">
                    <a href="javascript:void(0)" class="sidenav-link sidenav-toggle">
                        <i class="sidenav-icon ion ion-ios-settings"></i>
                        <div>Item 1</div>
                    </a>
                    <ul class="sidenav-menu">
                        <li class="sidenav-item">
                            <a href="javascript:void(0)" class="sidenav-link">
                                <div>Item 1.1</div>
                            </a>
                        </li>
                        <li class="sidenav-item">
                            <a href="javascript:void(0)" class="sidenav-link">
                                <div>Item 1.2</div>
                            </a>
                        </li>
                        <li class="sidenav-item">
                            <a href="javascript:void(0)" class="sidenav-link">
                                <div>Item 1.3</div>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="sidenav-item">
                    <a href="javascript:void(0)" class="sidenav-link sidenav-toggle">
                        <i class="sidenav-icon ion ion-md-paper"></i>
                        <div>Item 2</div>
                    </a>

                    <ul class="sidenav-menu">
                        <li class="sidenav-item">
                            <a href="javascript:void(0)" class="sidenav-link">
                                <div>Item 2.1</div>
                            </a>
                        </li>
                        <li class="sidenav-item">
                            <a href="javascript:void(0)" class="sidenav-link sidenav-toggle">
                                <div>Item 2.2</div>
                            </a>

                            <ul class="sidenav-menu">
                                <li class="sidenav-item">
                                    <a href="javascript:void(0)" class="sidenav-link">
                                        <div>Item 2.2.1</div>
                                    </a>
                                </li>
                                <li class="sidenav-item">
                                    <a href="javascript:void(0)" class="sidenav-link">
                                        <div>Item 2.2.2</div>
                                    </a>
                                </li>
                                <li class="sidenav-item">
                                    <a href="javascript:void(0)" class="sidenav-link">
                                        <div>Item 2.2.3</div>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="sidenav-item">
                            <a href="javascript:void(0)" class="sidenav-link sidenav-toggle">
                                <div>Item 2.3</div>
                            </a>

                            <ul class="sidenav-menu">
                                <li class="sidenav-item">
                                    <a href="javascript:void(0)" class="sidenav-link">
                                        <div>Item 2.3.1</div>
                                    </a>
                                </li>
                                <li class="sidenav-item">
                                    <a href="javascript:void(0)" class="sidenav-link">
                                        <div>Item 2.3.2</div>
                                    </a>
                                </li>
                                <li class="sidenav-item">
                                    <a href="javascript:void(0)" class="sidenav-link">
                                        <div>Item 2.3.3</div>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="sidenav-item active">
                    <a href="javascript:void(0)" class="sidenav-link">
                        <div>Item 3</div>
                    </a>
                </li>
                <li class="sidenav-item">
                    <a href="javascript:void(0)" class="sidenav-link">
                        <i class="sidenav-icon ion ion-md-basketball"></i>
                        <div>Item 4</div>
                    </a>
                </li>
                <li class="sidenav-item">
                    <a href="javascript:void(0)" class="sidenav-link">
                        <i class="sidenav-icon ion ion-ios-bonfire"></i>
                        <div>Item 5</div>
                    </a>
                </li>
                <li class="sidenav-item">
                    <a href="javascript:void(0)" class="sidenav-link">
                        <i class="sidenav-icon ion ion-ios-cafe"></i>
                        <div>Item 6</div>
                    </a>
                </li>
                <li class="sidenav-item">
                    <a href="javascript:void(0)" class="sidenav-link">
                        <i class="sidenav-icon ion ion-ios-cloud-outline"></i>
                        <div>Item 7</div>
                    </a>
                </li>
                <li class="sidenav-item">
                    <a href="javascript:void(0)" class="sidenav-link">
                        <i class="sidenav-icon ion ion-md-code"></i>
                        <div>Item 8</div>
                    </a>
                </li>
            </ul>
        </div>
    </div>

    <h6 class="pb-1 mt-5 mb-4">No animation</h6>

    <button type="button" id="sidenav-5-toggle-collapsed" class="btn btn-primary mb-4">Toggle collapsed</button>

    <div id="sidenav-5" class="sidenav sidenav-vertical bg-dark mb-4" style="height: 450px">
        <ul class="sidenav-inner py-3">
            <li class="sidenav-item">
                <a href="javascript:void(0)" class="sidenav-link">
                    <i class="sidenav-icon ion ion-md-notifications-outline"></i>
                    <div>Some Long Long Long Long Long Item</div>
                </a>
            </li>
            <li class="sidenav-item">
                <a href="javascript:void(0)" class="sidenav-link sidenav-toggle">
                    <i class="sidenav-icon ion ion-ios-settings"></i>
                    <div>Item 1</div>
                </a>
                <ul class="sidenav-menu">
                    <li class="sidenav-item">
                        <a href="javascript:void(0)" class="sidenav-link">
                            <div>Item 1.1</div>
                        </a>
                    </li>
                    <li class="sidenav-item">
                        <a href="javascript:void(0)" class="sidenav-link">
                            <div>Item 1.2</div>
                        </a>
                    </li>
                    <li class="sidenav-item">
                        <a href="javascript:void(0)" class="sidenav-link">
                            <div>Item 1.3</div>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="sidenav-item">
                <a href="javascript:void(0)" class="sidenav-link sidenav-toggle">
                    <i class="sidenav-icon ion ion-md-paper"></i>
                    <div>Item 2</div>
                </a>

                <ul class="sidenav-menu">
                    <li class="sidenav-item">
                        <a href="javascript:void(0)" class="sidenav-link">
                            <div>Item 2.1</div>
                        </a>
                    </li>
                    <li class="sidenav-item">
                        <a href="javascript:void(0)" class="sidenav-link sidenav-toggle">
                            <div>Item 2.2</div>
                        </a>

                        <ul class="sidenav-menu">
                            <li class="sidenav-item">
                                <a href="javascript:void(0)" class="sidenav-link">
                                    <div>Item 2.2.1</div>
                                </a>
                            </li>
                            <li class="sidenav-item">
                                <a href="javascript:void(0)" class="sidenav-link">
                                    <div>Item 2.2.2</div>
                                </a>
                            </li>
                            <li class="sidenav-item">
                                <a href="javascript:void(0)" class="sidenav-link">
                                    <div>Item 2.2.3</div>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="sidenav-item">
                        <a href="javascript:void(0)" class="sidenav-link sidenav-toggle">
                            <div>Item 2.3</div>
                        </a>

                        <ul class="sidenav-menu">
                            <li class="sidenav-item">
                                <a href="javascript:void(0)" class="sidenav-link">
                                    <div>Item 2.3.1</div>
                                </a>
                            </li>
                            <li class="sidenav-item">
                                <a href="javascript:void(0)" class="sidenav-link">
                                    <div>Item 2.3.2</div>
                                </a>
                            </li>
                            <li class="sidenav-item">
                                <a href="javascript:void(0)" class="sidenav-link">
                                    <div>Item 2.3.3</div>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li class="sidenav-item active">
                <a href="javascript:void(0)" class="sidenav-link">
                    <i class="sidenav-icon ion ion-ios-flask"></i>
                    <div>Item 3</div>
                </a>
            </li>
            <li class="sidenav-item">
                <a href="javascript:void(0)" class="sidenav-link">
                    <i class="sidenav-icon ion ion-md-basketball"></i>
                    <div>Item 4</div>
                </a>
            </li>
            <li class="sidenav-item">
                <a href="javascript:void(0)" class="sidenav-link">
                    <i class="sidenav-icon ion ion-ios-bonfire"></i>
                    <div>Item 5</div>
                </a>
            </li>
            <li class="sidenav-item">
                <a href="javascript:void(0)" class="sidenav-link">
                    <i class="sidenav-icon ion ion-ios-cafe"></i>
                    <div>Item 6</div>
                </a>
            </li>
            <li class="sidenav-item">
                <a href="javascript:void(0)" class="sidenav-link">
                    <i class="sidenav-icon ion ion-ios-cloud-outline"></i>
                    <div>Item 7</div>
                </a>
            </li>
            <li class="sidenav-item">
                <a href="javascript:void(0)" class="sidenav-link">
                    <i class="sidenav-icon ion ion-md-code"></i>
                    <div>Item 8</div>
                </a>
            </li>
        </ul>
    </div>

    <div id="sidenav-6" class="sidenav sidenav-horizontal bg-dark" style="position: relative;z-index: 97">
        <ul class="sidenav-inner">
            <li class="sidenav-item">
                <a href="javascript:void(0)" class="sidenav-link">
                    <i class="sidenav-icon ion ion-md-notifications-outline"></i>
                    <div>Some Long Long Long Long Long Item</div>
                </a>
            </li>
            <li class="sidenav-item">
                <a href="javascript:void(0)" class="sidenav-link sidenav-toggle">
                    <i class="sidenav-icon ion ion-ios-settings"></i>
                    <div>Item 1</div>
                </a>
                <ul class="sidenav-menu">
                    <li class="sidenav-item">
                        <a href="javascript:void(0)" class="sidenav-link">
                            <div>Item 1.1</div>
                        </a>
                    </li>
                    <li class="sidenav-item">
                        <a href="javascript:void(0)" class="sidenav-link">
                            <div>Item 1.2</div>
                        </a>
                    </li>
                    <li class="sidenav-item">
                        <a href="javascript:void(0)" class="sidenav-link">
                            <div>Item 1.3</div>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="sidenav-item">
                <a href="javascript:void(0)" class="sidenav-link sidenav-toggle">
                    <i class="sidenav-icon ion ion-md-paper"></i>
                    <div>Item 2</div>
                </a>

                <ul class="sidenav-menu">
                    <li class="sidenav-item">
                        <a href="javascript:void(0)" class="sidenav-link">
                            <div>Item 2.1</div>
                        </a>
                    </li>
                    <li class="sidenav-item">
                        <a href="javascript:void(0)" class="sidenav-link sidenav-toggle">
                            <div>Item 2.2</div>
                        </a>

                        <ul class="sidenav-menu">
                            <li class="sidenav-item">
                                <a href="javascript:void(0)" class="sidenav-link">
                                    <div>Item 2.2.1</div>
                                </a>
                            </li>
                            <li class="sidenav-item">
                                <a href="javascript:void(0)" class="sidenav-link">
                                    <div>Item 2.2.2</div>
                                </a>
                            </li>
                            <li class="sidenav-item">
                                <a href="javascript:void(0)" class="sidenav-link">
                                    <div>Item 2.2.3</div>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="sidenav-item">
                        <a href="javascript:void(0)" class="sidenav-link sidenav-toggle">
                            <div>Item 2.3</div>
                        </a>

                        <ul class="sidenav-menu">
                            <li class="sidenav-item">
                                <a href="javascript:void(0)" class="sidenav-link">
                                    <div>Item 2.3.1</div>
                                </a>
                            </li>
                            <li class="sidenav-item">
                                <a href="javascript:void(0)" class="sidenav-link">
                                    <div>Item 2.3.2</div>
                                </a>
                            </li>
                            <li class="sidenav-item">
                                <a href="javascript:void(0)" class="sidenav-link">
                                    <div>Item 2.3.3</div>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li class="sidenav-item active">
                <a href="javascript:void(0)" class="sidenav-link">
                    <div>Item 3</div>
                </a>
            </li>
            <li class="sidenav-item">
                <a href="javascript:void(0)" class="sidenav-link">
                    <i class="sidenav-icon ion ion-md-basketball"></i>
                    <div>Item 4</div>
                </a>
            </li>
            <li class="sidenav-item">
                <a href="javascript:void(0)" class="sidenav-link">
                    <i class="sidenav-icon ion ion-ios-bonfire"></i>
                    <div>Item 5</div>
                </a>
            </li>
            <li class="sidenav-item">
                <a href="javascript:void(0)" class="sidenav-link">
                    <i class="sidenav-icon ion ion-ios-cafe"></i>
                    <div>Item 6</div>
                </a>
            </li>
            <li class="sidenav-item">
                <a href="javascript:void(0)" class="sidenav-link">
                    <i class="sidenav-icon ion ion-ios-cloud-outline"></i>
                    <div>Item 7</div>
                </a>
            </li>
            <li class="sidenav-item">
                <a href="javascript:void(0)" class="sidenav-link">
                    <i class="sidenav-icon ion ion-md-code"></i>
                    <div>Item 8</div>
                </a>
            </li>
        </ul>
    </div>

    <h6 class="pb-1 mt-5 mb-4">No accordion</h6>

    <button type="button" id="sidenav-7-toggle-collapsed" class="btn btn-primary mb-4">Toggle collapsed</button>

    <div id="sidenav-7" class="sidenav sidenav-vertical bg-dark mb-4" style="height: 450px">
        <ul class="sidenav-inner py-3">
            <li class="sidenav-item">
                <a href="javascript:void(0)" class="sidenav-link">
                    <i class="sidenav-icon ion ion-md-notifications-outline"></i>
                    <div>Some Long Long Long Long Long Item</div>
                </a>
            </li>
            <li class="sidenav-item">
                <a href="javascript:void(0)" class="sidenav-link sidenav-toggle">
                    <i class="sidenav-icon ion ion-ios-settings"></i>
                    <div>Item 1</div>
                </a>
                <ul class="sidenav-menu">
                    <li class="sidenav-item">
                        <a href="javascript:void(0)" class="sidenav-link">
                            <div>Item 1.1</div>
                        </a>
                    </li>
                    <li class="sidenav-item">
                        <a href="javascript:void(0)" class="sidenav-link">
                            <div>Item 1.2</div>
                        </a>
                    </li>
                    <li class="sidenav-item">
                        <a href="javascript:void(0)" class="sidenav-link">
                            <div>Item 1.3</div>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="sidenav-item">
                <a href="javascript:void(0)" class="sidenav-link sidenav-toggle">
                    <i class="sidenav-icon ion ion-md-paper"></i>
                    <div>Item 2</div>
                </a>

                <ul class="sidenav-menu">
                    <li class="sidenav-item">
                        <a href="javascript:void(0)" class="sidenav-link">
                            <div>Item 2.1</div>
                        </a>
                    </li>
                    <li class="sidenav-item">
                        <a href="javascript:void(0)" class="sidenav-link sidenav-toggle">
                            <div>Item 2.2</div>
                        </a>

                        <ul class="sidenav-menu">
                            <li class="sidenav-item">
                                <a href="javascript:void(0)" class="sidenav-link">
                                    <div>Item 2.2.1</div>
                                </a>
                            </li>
                            <li class="sidenav-item">
                                <a href="javascript:void(0)" class="sidenav-link">
                                    <div>Item 2.2.2</div>
                                </a>
                            </li>
                            <li class="sidenav-item">
                                <a href="javascript:void(0)" class="sidenav-link">
                                    <div>Item 2.2.3</div>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="sidenav-item">
                        <a href="javascript:void(0)" class="sidenav-link sidenav-toggle">
                            <div>Item 2.3</div>
                        </a>

                        <ul class="sidenav-menu">
                            <li class="sidenav-item">
                                <a href="javascript:void(0)" class="sidenav-link">
                                    <div>Item 2.3.1</div>
                                </a>
                            </li>
                            <li class="sidenav-item">
                                <a href="javascript:void(0)" class="sidenav-link">
                                    <div>Item 2.3.2</div>
                                </a>
                            </li>
                            <li class="sidenav-item">
                                <a href="javascript:void(0)" class="sidenav-link">
                                    <div>Item 2.3.3</div>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li class="sidenav-item active">
                <a href="javascript:void(0)" class="sidenav-link">
                    <i class="sidenav-icon ion ion-ios-flask"></i>
                    <div>Item 3</div>
                </a>
            </li>
            <li class="sidenav-item">
                <a href="javascript:void(0)" class="sidenav-link">
                    <i class="sidenav-icon ion ion-md-basketball"></i>
                    <div>Item 4</div>
                </a>
            </li>
            <li class="sidenav-item">
                <a href="javascript:void(0)" class="sidenav-link">
                    <i class="sidenav-icon ion ion-ios-bonfire"></i>
                    <div>Item 5</div>
                </a>
            </li>
            <li class="sidenav-item">
                <a href="javascript:void(0)" class="sidenav-link">
                    <i class="sidenav-icon ion ion-ios-cafe"></i>
                    <div>Item 6</div>
                </a>
            </li>
            <li class="sidenav-item">
                <a href="javascript:void(0)" class="sidenav-link">
                    <i class="sidenav-icon ion ion-ios-cloud-outline"></i>
                    <div>Item 7</div>
                </a>
            </li>
            <li class="sidenav-item">
                <a href="javascript:void(0)" class="sidenav-link">
                    <i class="sidenav-icon ion ion-md-code"></i>
                    <div>Item 8</div>
                </a>
            </li>
        </ul>
    </div>

    <div id="sidenav-8" class="sidenav sidenav-horizontal bg-dark" style="position: relative;z-index: 96">
        <ul class="sidenav-inner">
            <li class="sidenav-item">
                <a href="javascript:void(0)" class="sidenav-link">
                    <i class="sidenav-icon ion ion-md-notifications-outline"></i>
                    <div>Some Long Long Long Long Long Item</div>
                </a>
            </li>
            <li class="sidenav-item">
                <a href="javascript:void(0)" class="sidenav-link sidenav-toggle">
                    <i class="sidenav-icon ion ion-ios-settings"></i>
                    <div>Item 1</div>
                </a>
                <ul class="sidenav-menu">
                    <li class="sidenav-item">
                        <a href="javascript:void(0)" class="sidenav-link">
                            <div>Item 1.1</div>
                        </a>
                    </li>
                    <li class="sidenav-item">
                        <a href="javascript:void(0)" class="sidenav-link">
                            <div>Item 1.2</div>
                        </a>
                    </li>
                    <li class="sidenav-item">
                        <a href="javascript:void(0)" class="sidenav-link">
                            <div>Item 1.3</div>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="sidenav-item">
                <a href="javascript:void(0)" class="sidenav-link sidenav-toggle">
                    <i class="sidenav-icon ion ion-md-paper"></i>
                    <div>Item 2</div>
                </a>

                <ul class="sidenav-menu">
                    <li class="sidenav-item">
                        <a href="javascript:void(0)" class="sidenav-link">
                            <div>Item 2.1</div>
                        </a>
                    </li>
                    <li class="sidenav-item">
                        <a href="javascript:void(0)" class="sidenav-link sidenav-toggle">
                            <div>Item 2.2</div>
                        </a>

                        <ul class="sidenav-menu">
                            <li class="sidenav-item">
                                <a href="javascript:void(0)" class="sidenav-link">
                                    <div>Item 2.2.1</div>
                                </a>
                            </li>
                            <li class="sidenav-item">
                                <a href="javascript:void(0)" class="sidenav-link">
                                    <div>Item 2.2.2</div>
                                </a>
                            </li>
                            <li class="sidenav-item">
                                <a href="javascript:void(0)" class="sidenav-link">
                                    <div>Item 2.2.3</div>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="sidenav-item">
                        <a href="javascript:void(0)" class="sidenav-link sidenav-toggle">
                            <div>Item 2.3</div>
                        </a>

                        <ul class="sidenav-menu">
                            <li class="sidenav-item">
                                <a href="javascript:void(0)" class="sidenav-link">
                                    <div>Item 2.3.1</div>
                                </a>
                            </li>
                            <li class="sidenav-item">
                                <a href="javascript:void(0)" class="sidenav-link">
                                    <div>Item 2.3.2</div>
                                </a>
                            </li>
                            <li class="sidenav-item">
                                <a href="javascript:void(0)" class="sidenav-link">
                                    <div>Item 2.3.3</div>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li class="sidenav-item active">
                <a href="javascript:void(0)" class="sidenav-link">
                    <div>Item 3</div>
                </a>
            </li>
            <li class="sidenav-item">
                <a href="javascript:void(0)" class="sidenav-link">
                    <i class="sidenav-icon ion ion-md-basketball"></i>
                    <div>Item 4</div>
                </a>
            </li>
            <li class="sidenav-item">
                <a href="javascript:void(0)" class="sidenav-link">
                    <i class="sidenav-icon ion ion-ios-bonfire"></i>
                    <div>Item 5</div>
                </a>
            </li>
            <li class="sidenav-item">
                <a href="javascript:void(0)" class="sidenav-link">
                    <i class="sidenav-icon ion ion-ios-cafe"></i>
                    <div>Item 6</div>
                </a>
            </li>
            <li class="sidenav-item">
                <a href="javascript:void(0)" class="sidenav-link">
                    <i class="sidenav-icon ion ion-ios-cloud-outline"></i>
                    <div>Item 7</div>
                </a>
            </li>
            <li class="sidenav-item">
                <a href="javascript:void(0)" class="sidenav-link">
                    <i class="sidenav-icon ion ion-md-code"></i>
                    <div>Item 8</div>
                </a>
            </li>
        </ul>
    </div>

    <h6 class="pb-1 mt-5 mb-4">Elements</h6>

    <div class="mb-4">
        <button type="button" id="sidenavs-9-toggle-collapsed" class="btn btn-primary">Toggle collapsed</button>
    </div>

    <!-- Blocks within scrollable area -->

    <div class="sidenavs-9 sidenav sidenav-vertical d-inline-flex bg-dark mr-4" style="height: 450px">
        <ul class="sidenav-inner">
            <li class="sidenav-block my-1">
                <div class="media align-items-center">
                    <img src="/img/avatars/1-small.png" class="d-block ui-w-50 rounded-circle" alt>
                    <div class="media-body pl-3">
                        <h5 class="sidenav-text mb-1">Mike Greene</h5>
                        <div class="small">
                            <a href="javascript:void(0)" class="sidenav-link">
                                <strong class="sidenav-text">5</strong> new messages</a>
                        </div>
                    </div>
                </div>
            </li>

            <li class="sidenav-divider mt-0"></li>

            <li class="sidenav-item">
                <a href="javascript:void(0)" class="sidenav-link">
                    <i class="sidenav-icon ion ion-md-notifications-outline"></i>
                    <div>Some Long Long Long Long Long Item</div>
                </a>
            </li>
            <li class="sidenav-item disabled">
                <a href="javascript:void(0)" class="sidenav-link sidenav-toggle">
                    <i class="sidenav-icon ion ion-ios-settings"></i>
                    <div>Item 1</div>
                </a>
                <ul class="sidenav-menu">
                    <li class="sidenav-item">
                        <a href="javascript:void(0)" class="sidenav-link">
                            <div>Item 1.1</div>
                        </a>
                    </li>
                    <li class="sidenav-item">
                        <a href="javascript:void(0)" class="sidenav-link">
                            <div>Item 1.2</div>
                        </a>
                    </li>
                    <li class="sidenav-item">
                        <a href="javascript:void(0)" class="sidenav-link">
                            <div>Item 1.3</div>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="sidenav-item">
                <a href="javascript:void(0)" class="sidenav-link sidenav-toggle">
                    <i class="sidenav-icon ion ion-md-paper"></i>
                    <div>Item 2</div>
                </a>

                <ul class="sidenav-menu">
                    <li class="sidenav-item">
                        <a href="javascript:void(0)" class="sidenav-link">
                            <div>Item 2.1</div>
                        </a>
                    </li>
                    <li class="sidenav-item disabled">
                        <a href="javascript:void(0)" class="sidenav-link sidenav-toggle">
                            <div>Item 2.2</div>
                        </a>

                        <ul class="sidenav-menu">
                            <li class="sidenav-item">
                                <a href="javascript:void(0)" class="sidenav-link">
                                    <div>Item 2.2.1</div>
                                </a>
                            </li>
                            <li class="sidenav-item">
                                <a href="javascript:void(0)" class="sidenav-link">
                                    <div>Item 2.2.2</div>
                                </a>
                            </li>
                            <li class="sidenav-item">
                                <a href="javascript:void(0)" class="sidenav-link">
                                    <div>Item 2.2.3</div>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="sidenav-item">
                        <a href="javascript:void(0)" class="sidenav-link sidenav-toggle">
                            <div>Item 2.3</div>
                        </a>

                        <ul class="sidenav-menu">
                            <li class="sidenav-item">
                                <a href="javascript:void(0)" class="sidenav-link">
                                    <div>Item 2.3.1</div>
                                </a>
                            </li>
                            <li class="sidenav-item">
                                <a href="javascript:void(0)" class="sidenav-link">
                                    <div>Item 2.3.2</div>
                                </a>
                            </li>
                            <li class="sidenav-item">
                                <a href="javascript:void(0)" class="sidenav-link">
                                    <div>Item 2.3.3</div>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </li>

            <li class="sidenav-divider mb-0"></li>
            <li class="sidenav-header small font-weight-semibold">SECTION HEADER</li>

            <li class="sidenav-item active">
                <a href="javascript:void(0)" class="sidenav-link">
                    <i class="sidenav-icon ion ion-ios-flask"></i>
                    <div>Item 3</div>
                </a>
            </li>
            <li class="sidenav-item disabled">
                <a href="javascript:void(0)" class="sidenav-link">
                    <i class="sidenav-icon ion ion-md-basketball"></i>
                    <div>Item 4</div>
                </a>
            </li>
            <li class="sidenav-item">
                <a href="javascript:void(0)" class="sidenav-link">
                    <i class="sidenav-icon ion ion-ios-bonfire"></i>
                    <div>Item 5</div>
                </a>
            </li>

            <li class="sidenav-divider"></li>

            <li class="sidenav-item">
                <a href="javascript:void(0)" class="sidenav-link">
                    <i class="sidenav-icon ion ion-ios-cafe"></i>
                    <div>Item 6</div>
                </a>
            </li>
            <li class="sidenav-item">
                <a href="javascript:void(0)" class="sidenav-link">
                    <i class="sidenav-icon ion ion-ios-cloud-outline"></i>
                    <div>Item 7</div>
                </a>
            </li>
            <li class="sidenav-item">
                <a href="javascript:void(0)" class="sidenav-link">
                    <i class="sidenav-icon ion ion-md-code"></i>
                    <div>Item 8</div>
                </a>
            </li>

            <li class="sidenav-divider mb-0"></li>

            <li class="sidenav-block my-1">
                <div class="small">
                    Milestone
                    <div class="float-right">55%</div>
                </div>
                <div class="progress mt-1 mb-3" style="height: 4px;">
                    <div class="progress-bar bg-success" style="width: 55%;"></div>
                </div>

                <div class="small">
                    Release
                    <div class="float-right">80%</div>
                </div>
                <div class="progress mt-1" style="height: 4px;">
                    <div class="progress-bar bg-danger" style="width: 80%;"></div>
                </div>
            </li>
        </ul>
    </div>

    <!-- Blocks outside of scrollable area -->

    <div class="sidenavs-9 sidenav sidenav-vertical d-inline-flex bg-dark mr-4" style="height: 450px">
        <div class="sidenav-block my-1">
            <div class="media align-items-center">
                <img src="/img/avatars/1-small.png" class="d-block ui-w-50 rounded-circle" alt>
                <div class="media-body pl-3">
                    <h5 class="sidenav-text mb-1">Mike Greene</h5>
                    <div class="small">
                        <a href="javascript:void(0)" class="sidenav-link">
                            <strong class="sidenav-text">5</strong> new messages</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="sidenav-divider mt-0"></div>

        <ul class="sidenav-inner">
            <li class="sidenav-item">
                <a href="javascript:void(0)" class="sidenav-link">
                    <i class="sidenav-icon ion ion-md-notifications-outline"></i>
                    <div>Some Long Long Long Long Long Item</div>
                </a>
            </li>
            <li class="sidenav-item disabled">
                <a href="javascript:void(0)" class="sidenav-link sidenav-toggle">
                    <i class="sidenav-icon ion ion-ios-settings"></i>
                    <div>Item 1</div>
                </a>
                <ul class="sidenav-menu">
                    <li class="sidenav-item">
                        <a href="javascript:void(0)" class="sidenav-link">
                            <div>Item 1.1</div>
                        </a>
                    </li>
                    <li class="sidenav-item">
                        <a href="javascript:void(0)" class="sidenav-link">
                            <div>Item 1.2</div>
                        </a>
                    </li>
                    <li class="sidenav-item">
                        <a href="javascript:void(0)" class="sidenav-link">
                            <div>Item 1.3</div>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="sidenav-item">
                <a href="javascript:void(0)" class="sidenav-link sidenav-toggle">
                    <i class="sidenav-icon ion ion-md-paper"></i>
                    <div>Item 2</div>
                </a>

                <ul class="sidenav-menu">
                    <li class="sidenav-item">
                        <a href="javascript:void(0)" class="sidenav-link">
                            <div>Item 2.1</div>
                        </a>
                    </li>
                    <li class="sidenav-item disabled">
                        <a href="javascript:void(0)" class="sidenav-link sidenav-toggle">
                            <div>Item 2.2</div>
                        </a>

                        <ul class="sidenav-menu">
                            <li class="sidenav-item">
                                <a href="javascript:void(0)" class="sidenav-link">
                                    <div>Item 2.2.1</div>
                                </a>
                            </li>
                            <li class="sidenav-item">
                                <a href="javascript:void(0)" class="sidenav-link">
                                    <div>Item 2.2.2</div>
                                </a>
                            </li>
                            <li class="sidenav-item">
                                <a href="javascript:void(0)" class="sidenav-link">
                                    <div>Item 2.2.3</div>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="sidenav-item">
                        <a href="javascript:void(0)" class="sidenav-link sidenav-toggle">
                            <div>Item 2.3</div>
                        </a>

                        <ul class="sidenav-menu">
                            <li class="sidenav-item">
                                <a href="javascript:void(0)" class="sidenav-link">
                                    <div>Item 2.3.1</div>
                                </a>
                            </li>
                            <li class="sidenav-item">
                                <a href="javascript:void(0)" class="sidenav-link">
                                    <div>Item 2.3.2</div>
                                </a>
                            </li>
                            <li class="sidenav-item">
                                <a href="javascript:void(0)" class="sidenav-link">
                                    <div>Item 2.3.3</div>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </li>

            <li class="sidenav-divider mb-0"></li>
            <li class="sidenav-header small font-weight-semibold">SECTION HEADER</li>

            <li class="sidenav-item active">
                <a href="javascript:void(0)" class="sidenav-link">
                    <i class="sidenav-icon ion ion-ios-flask"></i>
                    <div>Item 3</div>
                </a>
            </li>
            <li class="sidenav-item disabled">
                <a href="javascript:void(0)" class="sidenav-link">
                    <i class="sidenav-icon ion ion-md-basketball"></i>
                    <div>Item 4</div>
                </a>
            </li>
            <li class="sidenav-item">
                <a href="javascript:void(0)" class="sidenav-link">
                    <i class="sidenav-icon ion ion-ios-bonfire"></i>
                    <div>Item 5</div>
                </a>
            </li>

            <li class="sidenav-divider"></li>

            <li class="sidenav-item">
                <a href="javascript:void(0)" class="sidenav-link">
                    <i class="sidenav-icon ion ion-ios-cafe"></i>
                    <div>Item 6</div>
                </a>
            </li>
            <li class="sidenav-item">
                <a href="javascript:void(0)" class="sidenav-link">
                    <i class="sidenav-icon ion ion-ios-cloud-outline"></i>
                    <div>Item 7</div>
                </a>
            </li>
            <li class="sidenav-item">
                <a href="javascript:void(0)" class="sidenav-link">
                    <i class="sidenav-icon ion ion-md-code"></i>
                    <div>Item 8</div>
                </a>
            </li>
        </ul>

        <div class="sidenav-divider mb-0"></div>

        <div class="sidenav-block my-1">
            <div class="small">
                Milestone
                <div class="float-right">55%</div>
            </div>
            <div class="progress mt-1 mb-3" style="height: 4px;">
                <div class="progress-bar bg-success" style="width: 55%;"></div>
            </div>

            <div class="small">
                Release
                <div class="float-right">80%</div>
            </div>
            <div class="progress mt-1" style="height: 4px;">
                <div class="progress-bar bg-danger" style="width: 80%;"></div>
            </div>
        </div>
    </div>

    <h6 class="pb-1 mt-5 mb-4">Colors (vertical)</h6>

    <div class="mb-4">
        <button type="button" id="sidenavs-10-toggle-collapsed" class="btn btn-primary">Toggle collapsed</button>
    </div>

    <div class="sidenavs-10 sidenav sidenav-vertical d-inline-flex bg-sidenav-theme mr-4 mb-4" style="height: 450px">
        <ul class="sidenav-inner">
            <li class="sidenav-block my-1">
                <div class="media align-items-center">
                    <img src="/img/avatars/1-small.png" class="d-block ui-w-50 rounded-circle" alt>
                    <div class="media-body pl-3">
                        <h5 class="sidenav-text mb-1">Mike Greene</h5>
                        <div class="small">
                            <a href="javascript:void(0)" class="sidenav-link">
                                <strong class="sidenav-text">5</strong> new messages</a>
                        </div>
                    </div>
                </div>
            </li>

            <li class="sidenav-divider mt-0"></li>

            <li class="sidenav-item">
                <a href="javascript:void(0)" class="sidenav-link">
                    <i class="sidenav-icon ion ion-md-notifications-outline"></i>
                    <div>Some Long Long Long Long Long Item</div>
                </a>
            </li>
            <li class="sidenav-item">
                <a href="javascript:void(0)" class="sidenav-link sidenav-toggle">
                    <i class="sidenav-icon ion ion-ios-settings"></i>
                    <div>Item 1</div>
                </a>
                <ul class="sidenav-menu">
                    <li class="sidenav-item">
                        <a href="javascript:void(0)" class="sidenav-link">
                            <div>Item 1.1</div>
                        </a>
                    </li>
                    <li class="sidenav-item">
                        <a href="javascript:void(0)" class="sidenav-link">
                            <div>Item 1.2</div>
                        </a>
                    </li>
                    <li class="sidenav-item">
                        <a href="javascript:void(0)" class="sidenav-link">
                            <div>Item 1.3</div>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="sidenav-item">
                <a href="javascript:void(0)" class="sidenav-link sidenav-toggle">
                    <i class="sidenav-icon ion ion-md-paper"></i>
                    <div>Item 2</div>
                </a>

                <ul class="sidenav-menu">
                    <li class="sidenav-item">
                        <a href="javascript:void(0)" class="sidenav-link">
                            <div>Item 2.1</div>
                        </a>
                    </li>
                    <li class="sidenav-item">
                        <a href="javascript:void(0)" class="sidenav-link sidenav-toggle">
                            <div>Item 2.2</div>
                        </a>

                        <ul class="sidenav-menu">
                            <li class="sidenav-item">
                                <a href="javascript:void(0)" class="sidenav-link">
                                    <div>Item 2.2.1</div>
                                </a>
                            </li>
                            <li class="sidenav-item">
                                <a href="javascript:void(0)" class="sidenav-link">
                                    <div>Item 2.2.2</div>
                                </a>
                            </li>
                            <li class="sidenav-item">
                                <a href="javascript:void(0)" class="sidenav-link">
                                    <div>Item 2.2.3</div>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="sidenav-item">
                        <a href="javascript:void(0)" class="sidenav-link sidenav-toggle">
                            <div>Item 2.3</div>
                        </a>

                        <ul class="sidenav-menu">
                            <li class="sidenav-item">
                                <a href="javascript:void(0)" class="sidenav-link">
                                    <div>Item 2.3.1</div>
                                </a>
                            </li>
                            <li class="sidenav-item">
                                <a href="javascript:void(0)" class="sidenav-link">
                                    <div>Item 2.3.2</div>
                                </a>
                            </li>
                            <li class="sidenav-item">
                                <a href="javascript:void(0)" class="sidenav-link">
                                    <div>Item 2.3.3</div>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </li>

            <li class="sidenav-divider mb-0"></li>
            <li class="sidenav-header small font-weight-semibold">SECTION HEADER</li>

            <li class="sidenav-item active">
                <a href="javascript:void(0)" class="sidenav-link">
                    <i class="sidenav-icon ion ion-ios-flask"></i>
                    <div>Item 3</div>
                </a>
            </li>
            <li class="sidenav-item">
                <a href="javascript:void(0)" class="sidenav-link">
                    <i class="sidenav-icon ion ion-md-basketball"></i>
                    <div>Item 4</div>
                </a>
            </li>
            <li class="sidenav-item">
                <a href="javascript:void(0)" class="sidenav-link">
                    <i class="sidenav-icon ion ion-ios-bonfire"></i>
                    <div>Item 5</div>
                </a>
            </li>

            <li class="sidenav-divider"></li>

            <li class="sidenav-item">
                <a href="javascript:void(0)" class="sidenav-link">
                    <i class="sidenav-icon ion ion-ios-cafe"></i>
                    <div>Item 6</div>
                </a>
            </li>
            <li class="sidenav-item">
                <a href="javascript:void(0)" class="sidenav-link">
                    <i class="sidenav-icon ion ion-ios-cloud-outline"></i>
                    <div>Item 7</div>
                </a>
            </li>
            <li class="sidenav-item">
                <a href="javascript:void(0)" class="sidenav-link">
                    <i class="sidenav-icon ion ion-md-code"></i>
                    <div>Item 8</div>
                </a>
            </li>
        </ul>
    </div>

    <div class="sidenavs-10 sidenav sidenav-vertical d-inline-flex bg-primary mr-4 mb-4" style="height: 450px">
        <ul class="sidenav-inner">
            <li class="sidenav-block my-1">
                <div class="media align-items-center">
                    <img src="/img/avatars/1-small.png" class="d-block ui-w-50 rounded-circle" alt>
                    <div class="media-body pl-3">
                        <h5 class="sidenav-text mb-1">Mike Greene</h5>
                        <div class="small">
                            <a href="javascript:void(0)" class="sidenav-link">
                                <strong class="sidenav-text">5</strong> new messages</a>
                        </div>
                    </div>
                </div>
            </li>

            <li class="sidenav-divider mt-0"></li>

            <li class="sidenav-item">
                <a href="javascript:void(0)" class="sidenav-link">
                    <i class="sidenav-icon ion ion-md-notifications-outline"></i>
                    <div>Some Long Long Long Long Long Item</div>
                </a>
            </li>
            <li class="sidenav-item">
                <a href="javascript:void(0)" class="sidenav-link sidenav-toggle">
                    <i class="sidenav-icon ion ion-ios-settings"></i>
                    <div>Item 1</div>
                </a>
                <ul class="sidenav-menu">
                    <li class="sidenav-item">
                        <a href="javascript:void(0)" class="sidenav-link">
                            <div>Item 1.1</div>
                        </a>
                    </li>
                    <li class="sidenav-item">
                        <a href="javascript:void(0)" class="sidenav-link">
                            <div>Item 1.2</div>
                        </a>
                    </li>
                    <li class="sidenav-item">
                        <a href="javascript:void(0)" class="sidenav-link">
                            <div>Item 1.3</div>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="sidenav-item">
                <a href="javascript:void(0)" class="sidenav-link sidenav-toggle">
                    <i class="sidenav-icon ion ion-md-paper"></i>
                    <div>Item 2</div>
                </a>

                <ul class="sidenav-menu">
                    <li class="sidenav-item">
                        <a href="javascript:void(0)" class="sidenav-link">
                            <div>Item 2.1</div>
                        </a>
                    </li>
                    <li class="sidenav-item">
                        <a href="javascript:void(0)" class="sidenav-link sidenav-toggle">
                            <div>Item 2.2</div>
                        </a>

                        <ul class="sidenav-menu">
                            <li class="sidenav-item">
                                <a href="javascript:void(0)" class="sidenav-link">
                                    <div>Item 2.2.1</div>
                                </a>
                            </li>
                            <li class="sidenav-item">
                                <a href="javascript:void(0)" class="sidenav-link">
                                    <div>Item 2.2.2</div>
                                </a>
                            </li>
                            <li class="sidenav-item">
                                <a href="javascript:void(0)" class="sidenav-link">
                                    <div>Item 2.2.3</div>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="sidenav-item">
                        <a href="javascript:void(0)" class="sidenav-link sidenav-toggle">
                            <div>Item 2.3</div>
                        </a>

                        <ul class="sidenav-menu">
                            <li class="sidenav-item">
                                <a href="javascript:void(0)" class="sidenav-link">
                                    <div>Item 2.3.1</div>
                                </a>
                            </li>
                            <li class="sidenav-item">
                                <a href="javascript:void(0)" class="sidenav-link">
                                    <div>Item 2.3.2</div>
                                </a>
                            </li>
                            <li class="sidenav-item">
                                <a href="javascript:void(0)" class="sidenav-link">
                                    <div>Item 2.3.3</div>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </li>

            <li class="sidenav-divider mb-0"></li>
            <li class="sidenav-header small font-weight-semibold">SECTION HEADER</li>

            <li class="sidenav-item active">
                <a href="javascript:void(0)" class="sidenav-link">
                    <i class="sidenav-icon ion ion-ios-flask"></i>
                    <div>Item 3</div>
                </a>
            </li>
            <li class="sidenav-item">
                <a href="javascript:void(0)" class="sidenav-link">
                    <i class="sidenav-icon ion ion-md-basketball"></i>
                    <div>Item 4</div>
                </a>
            </li>
            <li class="sidenav-item">
                <a href="javascript:void(0)" class="sidenav-link">
                    <i class="sidenav-icon ion ion-ios-bonfire"></i>
                    <div>Item 5</div>
                </a>
            </li>

            <li class="sidenav-divider"></li>

            <li class="sidenav-item">
                <a href="javascript:void(0)" class="sidenav-link">
                    <i class="sidenav-icon ion ion-ios-cafe"></i>
                    <div>Item 6</div>
                </a>
            </li>
            <li class="sidenav-item">
                <a href="javascript:void(0)" class="sidenav-link">
                    <i class="sidenav-icon ion ion-ios-cloud-outline"></i>
                    <div>Item 7</div>
                </a>
            </li>
            <li class="sidenav-item">
                <a href="javascript:void(0)" class="sidenav-link">
                    <i class="sidenav-icon ion ion-md-code"></i>
                    <div>Item 8</div>
                </a>
            </li>
        </ul>
    </div>

    <div class="sidenavs-10 sidenav sidenav-vertical d-inline-flex bg-secondary mr-4 mb-4" style="height: 450px">
        <ul class="sidenav-inner">
            <li class="sidenav-block my-1">
                <div class="media align-items-center">
                    <img src="/img/avatars/1-small.png" class="d-block ui-w-50 rounded-circle" alt>
                    <div class="media-body pl-3">
                        <h5 class="sidenav-text mb-1">Mike Greene</h5>
                        <div class="small">
                            <a href="javascript:void(0)" class="sidenav-link">
                                <strong class="sidenav-text">5</strong> new messages</a>
                        </div>
                    </div>
                </div>
            </li>

            <li class="sidenav-divider mt-0"></li>

            <li class="sidenav-item">
                <a href="javascript:void(0)" class="sidenav-link">
                    <i class="sidenav-icon ion ion-md-notifications-outline"></i>
                    <div>Some Long Long Long Long Long Item</div>
                </a>
            </li>
            <li class="sidenav-item">
                <a href="javascript:void(0)" class="sidenav-link sidenav-toggle">
                    <i class="sidenav-icon ion ion-ios-settings"></i>
                    <div>Item 1</div>
                </a>
                <ul class="sidenav-menu">
                    <li class="sidenav-item">
                        <a href="javascript:void(0)" class="sidenav-link">
                            <div>Item 1.1</div>
                        </a>
                    </li>
                    <li class="sidenav-item">
                        <a href="javascript:void(0)" class="sidenav-link">
                            <div>Item 1.2</div>
                        </a>
                    </li>
                    <li class="sidenav-item">
                        <a href="javascript:void(0)" class="sidenav-link">
                            <div>Item 1.3</div>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="sidenav-item">
                <a href="javascript:void(0)" class="sidenav-link sidenav-toggle">
                    <i class="sidenav-icon ion ion-md-paper"></i>
                    <div>Item 2</div>
                </a>

                <ul class="sidenav-menu">
                    <li class="sidenav-item">
                        <a href="javascript:void(0)" class="sidenav-link">
                            <div>Item 2.1</div>
                        </a>
                    </li>
                    <li class="sidenav-item">
                        <a href="javascript:void(0)" class="sidenav-link sidenav-toggle">
                            <div>Item 2.2</div>
                        </a>

                        <ul class="sidenav-menu">
                            <li class="sidenav-item">
                                <a href="javascript:void(0)" class="sidenav-link">
                                    <div>Item 2.2.1</div>
                                </a>
                            </li>
                            <li class="sidenav-item">
                                <a href="javascript:void(0)" class="sidenav-link">
                                    <div>Item 2.2.2</div>
                                </a>
                            </li>
                            <li class="sidenav-item">
                                <a href="javascript:void(0)" class="sidenav-link">
                                    <div>Item 2.2.3</div>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="sidenav-item">
                        <a href="javascript:void(0)" class="sidenav-link sidenav-toggle">
                            <div>Item 2.3</div>
                        </a>

                        <ul class="sidenav-menu">
                            <li class="sidenav-item">
                                <a href="javascript:void(0)" class="sidenav-link">
                                    <div>Item 2.3.1</div>
                                </a>
                            </li>
                            <li class="sidenav-item">
                                <a href="javascript:void(0)" class="sidenav-link">
                                    <div>Item 2.3.2</div>
                                </a>
                            </li>
                            <li class="sidenav-item">
                                <a href="javascript:void(0)" class="sidenav-link">
                                    <div>Item 2.3.3</div>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </li>

            <li class="sidenav-divider mb-0"></li>
            <li class="sidenav-header small font-weight-semibold">SECTION HEADER</li>

            <li class="sidenav-item active">
                <a href="javascript:void(0)" class="sidenav-link">
                    <i class="sidenav-icon ion ion-ios-flask"></i>
                    <div>Item 3</div>
                </a>
            </li>
            <li class="sidenav-item">
                <a href="javascript:void(0)" class="sidenav-link">
                    <i class="sidenav-icon ion ion-md-basketball"></i>
                    <div>Item 4</div>
                </a>
            </li>
            <li class="sidenav-item">
                <a href="javascript:void(0)" class="sidenav-link">
                    <i class="sidenav-icon ion ion-ios-bonfire"></i>
                    <div>Item 5</div>
                </a>
            </li>

            <li class="sidenav-divider"></li>

            <li class="sidenav-item">
                <a href="javascript:void(0)" class="sidenav-link">
                    <i class="sidenav-icon ion ion-ios-cafe"></i>
                    <div>Item 6</div>
                </a>
            </li>
            <li class="sidenav-item">
                <a href="javascript:void(0)" class="sidenav-link">
                    <i class="sidenav-icon ion ion-ios-cloud-outline"></i>
                    <div>Item 7</div>
                </a>
            </li>
            <li class="sidenav-item">
                <a href="javascript:void(0)" class="sidenav-link">
                    <i class="sidenav-icon ion ion-md-code"></i>
                    <div>Item 8</div>
                </a>
            </li>
        </ul>
    </div>

    <div class="sidenavs-10 sidenav sidenav-vertical d-inline-flex bg-success mr-4 mb-4" style="height: 450px">
        <ul class="sidenav-inner">
            <li class="sidenav-block my-1">
                <div class="media align-items-center">
                    <img src="/img/avatars/1-small.png" class="d-block ui-w-50 rounded-circle" alt>
                    <div class="media-body pl-3">
                        <h5 class="sidenav-text mb-1">Mike Greene</h5>
                        <div class="small">
                            <a href="javascript:void(0)" class="sidenav-link">
                                <strong class="sidenav-text">5</strong> new messages</a>
                        </div>
                    </div>
                </div>
            </li>

            <li class="sidenav-divider mt-0"></li>

            <li class="sidenav-item">
                <a href="javascript:void(0)" class="sidenav-link">
                    <i class="sidenav-icon ion ion-md-notifications-outline"></i>
                    <div>Some Long Long Long Long Long Item</div>
                </a>
            </li>
            <li class="sidenav-item">
                <a href="javascript:void(0)" class="sidenav-link sidenav-toggle">
                    <i class="sidenav-icon ion ion-ios-settings"></i>
                    <div>Item 1</div>
                </a>
                <ul class="sidenav-menu">
                    <li class="sidenav-item">
                        <a href="javascript:void(0)" class="sidenav-link">
                            <div>Item 1.1</div>
                        </a>
                    </li>
                    <li class="sidenav-item">
                        <a href="javascript:void(0)" class="sidenav-link">
                            <div>Item 1.2</div>
                        </a>
                    </li>
                    <li class="sidenav-item">
                        <a href="javascript:void(0)" class="sidenav-link">
                            <div>Item 1.3</div>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="sidenav-item">
                <a href="javascript:void(0)" class="sidenav-link sidenav-toggle">
                    <i class="sidenav-icon ion ion-md-paper"></i>
                    <div>Item 2</div>
                </a>

                <ul class="sidenav-menu">
                    <li class="sidenav-item">
                        <a href="javascript:void(0)" class="sidenav-link">
                            <div>Item 2.1</div>
                        </a>
                    </li>
                    <li class="sidenav-item">
                        <a href="javascript:void(0)" class="sidenav-link sidenav-toggle">
                            <div>Item 2.2</div>
                        </a>

                        <ul class="sidenav-menu">
                            <li class="sidenav-item">
                                <a href="javascript:void(0)" class="sidenav-link">
                                    <div>Item 2.2.1</div>
                                </a>
                            </li>
                            <li class="sidenav-item">
                                <a href="javascript:void(0)" class="sidenav-link">
                                    <div>Item 2.2.2</div>
                                </a>
                            </li>
                            <li class="sidenav-item">
                                <a href="javascript:void(0)" class="sidenav-link">
                                    <div>Item 2.2.3</div>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="sidenav-item">
                        <a href="javascript:void(0)" class="sidenav-link sidenav-toggle">
                            <div>Item 2.3</div>
                        </a>

                        <ul class="sidenav-menu">
                            <li class="sidenav-item">
                                <a href="javascript:void(0)" class="sidenav-link">
                                    <div>Item 2.3.1</div>
                                </a>
                            </li>
                            <li class="sidenav-item">
                                <a href="javascript:void(0)" class="sidenav-link">
                                    <div>Item 2.3.2</div>
                                </a>
                            </li>
                            <li class="sidenav-item">
                                <a href="javascript:void(0)" class="sidenav-link">
                                    <div>Item 2.3.3</div>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </li>

            <li class="sidenav-divider mb-0"></li>
            <li class="sidenav-header small font-weight-semibold">SECTION HEADER</li>

            <li class="sidenav-item active">
                <a href="javascript:void(0)" class="sidenav-link">
                    <i class="sidenav-icon ion ion-ios-flask"></i>
                    <div>Item 3</div>
                </a>
            </li>
            <li class="sidenav-item">
                <a href="javascript:void(0)" class="sidenav-link">
                    <i class="sidenav-icon ion ion-md-basketball"></i>
                    <div>Item 4</div>
                </a>
            </li>
            <li class="sidenav-item">
                <a href="javascript:void(0)" class="sidenav-link">
                    <i class="sidenav-icon ion ion-ios-bonfire"></i>
                    <div>Item 5</div>
                </a>
            </li>

            <li class="sidenav-divider"></li>

            <li class="sidenav-item">
                <a href="javascript:void(0)" class="sidenav-link">
                    <i class="sidenav-icon ion ion-ios-cafe"></i>
                    <div>Item 6</div>
                </a>
            </li>
            <li class="sidenav-item">
                <a href="javascript:void(0)" class="sidenav-link">
                    <i class="sidenav-icon ion ion-ios-cloud-outline"></i>
                    <div>Item 7</div>
                </a>
            </li>
            <li class="sidenav-item">
                <a href="javascript:void(0)" class="sidenav-link">
                    <i class="sidenav-icon ion ion-md-code"></i>
                    <div>Item 8</div>
                </a>
            </li>
        </ul>
    </div>

    <div class="sidenavs-10 sidenav sidenav-vertical d-inline-flex bg-info mr-4 mb-4" style="height: 450px">
        <ul class="sidenav-inner">
            <li class="sidenav-block my-1">
                <div class="media align-items-center">
                    <img src="/img/avatars/1-small.png" class="d-block ui-w-50 rounded-circle" alt>
                    <div class="media-body pl-3">
                        <h5 class="sidenav-text mb-1">Mike Greene</h5>
                        <div class="small">
                            <a href="javascript:void(0)" class="sidenav-link">
                                <strong class="sidenav-text">5</strong> new messages</a>
                        </div>
                    </div>
                </div>
            </li>

            <li class="sidenav-divider mt-0"></li>

            <li class="sidenav-item">
                <a href="javascript:void(0)" class="sidenav-link">
                    <i class="sidenav-icon ion ion-md-notifications-outline"></i>
                    <div>Some Long Long Long Long Long Item</div>
                </a>
            </li>
            <li class="sidenav-item">
                <a href="javascript:void(0)" class="sidenav-link sidenav-toggle">
                    <i class="sidenav-icon ion ion-ios-settings"></i>
                    <div>Item 1</div>
                </a>
                <ul class="sidenav-menu">
                    <li class="sidenav-item">
                        <a href="javascript:void(0)" class="sidenav-link">
                            <div>Item 1.1</div>
                        </a>
                    </li>
                    <li class="sidenav-item">
                        <a href="javascript:void(0)" class="sidenav-link">
                            <div>Item 1.2</div>
                        </a>
                    </li>
                    <li class="sidenav-item">
                        <a href="javascript:void(0)" class="sidenav-link">
                            <div>Item 1.3</div>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="sidenav-item">
                <a href="javascript:void(0)" class="sidenav-link sidenav-toggle">
                    <i class="sidenav-icon ion ion-md-paper"></i>
                    <div>Item 2</div>
                </a>

                <ul class="sidenav-menu">
                    <li class="sidenav-item">
                        <a href="javascript:void(0)" class="sidenav-link">
                            <div>Item 2.1</div>
                        </a>
                    </li>
                    <li class="sidenav-item">
                        <a href="javascript:void(0)" class="sidenav-link sidenav-toggle">
                            <div>Item 2.2</div>
                        </a>

                        <ul class="sidenav-menu">
                            <li class="sidenav-item">
                                <a href="javascript:void(0)" class="sidenav-link">
                                    <div>Item 2.2.1</div>
                                </a>
                            </li>
                            <li class="sidenav-item">
                                <a href="javascript:void(0)" class="sidenav-link">
                                    <div>Item 2.2.2</div>
                                </a>
                            </li>
                            <li class="sidenav-item">
                                <a href="javascript:void(0)" class="sidenav-link">
                                    <div>Item 2.2.3</div>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="sidenav-item">
                        <a href="javascript:void(0)" class="sidenav-link sidenav-toggle">
                            <div>Item 2.3</div>
                        </a>

                        <ul class="sidenav-menu">
                            <li class="sidenav-item">
                                <a href="javascript:void(0)" class="sidenav-link">
                                    <div>Item 2.3.1</div>
                                </a>
                            </li>
                            <li class="sidenav-item">
                                <a href="javascript:void(0)" class="sidenav-link">
                                    <div>Item 2.3.2</div>
                                </a>
                            </li>
                            <li class="sidenav-item">
                                <a href="javascript:void(0)" class="sidenav-link">
                                    <div>Item 2.3.3</div>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </li>

            <li class="sidenav-divider mb-0"></li>
            <li class="sidenav-header small font-weight-semibold">SECTION HEADER</li>

            <li class="sidenav-item active">
                <a href="javascript:void(0)" class="sidenav-link">
                    <i class="sidenav-icon ion ion-ios-flask"></i>
                    <div>Item 3</div>
                </a>
            </li>
            <li class="sidenav-item">
                <a href="javascript:void(0)" class="sidenav-link">
                    <i class="sidenav-icon ion ion-md-basketball"></i>
                    <div>Item 4</div>
                </a>
            </li>
            <li class="sidenav-item">
                <a href="javascript:void(0)" class="sidenav-link">
                    <i class="sidenav-icon ion ion-ios-bonfire"></i>
                    <div>Item 5</div>
                </a>
            </li>

            <li class="sidenav-divider"></li>

            <li class="sidenav-item">
                <a href="javascript:void(0)" class="sidenav-link">
                    <i class="sidenav-icon ion ion-ios-cafe"></i>
                    <div>Item 6</div>
                </a>
            </li>
            <li class="sidenav-item">
                <a href="javascript:void(0)" class="sidenav-link">
                    <i class="sidenav-icon ion ion-ios-cloud-outline"></i>
                    <div>Item 7</div>
                </a>
            </li>
            <li class="sidenav-item">
                <a href="javascript:void(0)" class="sidenav-link">
                    <i class="sidenav-icon ion ion-md-code"></i>
                    <div>Item 8</div>
                </a>
            </li>
        </ul>
    </div>

    <div class="sidenavs-10 sidenav sidenav-vertical d-inline-flex bg-warning mr-4 mb-4" style="height: 450px">
        <ul class="sidenav-inner">
            <li class="sidenav-block my-1">
                <div class="media align-items-center">
                    <img src="/img/avatars/1-small.png" class="d-block ui-w-50 rounded-circle" alt>
                    <div class="media-body pl-3">
                        <h5 class="sidenav-text mb-1">Mike Greene</h5>
                        <div class="small">
                            <a href="javascript:void(0)" class="sidenav-link">
                                <strong class="sidenav-text">5</strong> new messages</a>
                        </div>
                    </div>
                </div>
            </li>

            <li class="sidenav-divider mt-0"></li>

            <li class="sidenav-item">
                <a href="javascript:void(0)" class="sidenav-link">
                    <i class="sidenav-icon ion ion-md-notifications-outline"></i>
                    <div>Some Long Long Long Long Long Item</div>
                </a>
            </li>
            <li class="sidenav-item">
                <a href="javascript:void(0)" class="sidenav-link sidenav-toggle">
                    <i class="sidenav-icon ion ion-ios-settings"></i>
                    <div>Item 1</div>
                </a>
                <ul class="sidenav-menu">
                    <li class="sidenav-item">
                        <a href="javascript:void(0)" class="sidenav-link">
                            <div>Item 1.1</div>
                        </a>
                    </li>
                    <li class="sidenav-item">
                        <a href="javascript:void(0)" class="sidenav-link">
                            <div>Item 1.2</div>
                        </a>
                    </li>
                    <li class="sidenav-item">
                        <a href="javascript:void(0)" class="sidenav-link">
                            <div>Item 1.3</div>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="sidenav-item">
                <a href="javascript:void(0)" class="sidenav-link sidenav-toggle">
                    <i class="sidenav-icon ion ion-md-paper"></i>
                    <div>Item 2</div>
                </a>

                <ul class="sidenav-menu">
                    <li class="sidenav-item">
                        <a href="javascript:void(0)" class="sidenav-link">
                            <div>Item 2.1</div>
                        </a>
                    </li>
                    <li class="sidenav-item">
                        <a href="javascript:void(0)" class="sidenav-link sidenav-toggle">
                            <div>Item 2.2</div>
                        </a>

                        <ul class="sidenav-menu">
                            <li class="sidenav-item">
                                <a href="javascript:void(0)" class="sidenav-link">
                                    <div>Item 2.2.1</div>
                                </a>
                            </li>
                            <li class="sidenav-item">
                                <a href="javascript:void(0)" class="sidenav-link">
                                    <div>Item 2.2.2</div>
                                </a>
                            </li>
                            <li class="sidenav-item">
                                <a href="javascript:void(0)" class="sidenav-link">
                                    <div>Item 2.2.3</div>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="sidenav-item">
                        <a href="javascript:void(0)" class="sidenav-link sidenav-toggle">
                            <div>Item 2.3</div>
                        </a>

                        <ul class="sidenav-menu">
                            <li class="sidenav-item">
                                <a href="javascript:void(0)" class="sidenav-link">
                                    <div>Item 2.3.1</div>
                                </a>
                            </li>
                            <li class="sidenav-item">
                                <a href="javascript:void(0)" class="sidenav-link">
                                    <div>Item 2.3.2</div>
                                </a>
                            </li>
                            <li class="sidenav-item">
                                <a href="javascript:void(0)" class="sidenav-link">
                                    <div>Item 2.3.3</div>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </li>

            <li class="sidenav-divider mb-0"></li>
            <li class="sidenav-header small font-weight-semibold">SECTION HEADER</li>

            <li class="sidenav-item active">
                <a href="javascript:void(0)" class="sidenav-link">
                    <i class="sidenav-icon ion ion-ios-flask"></i>
                    <div>Item 3</div>
                </a>
            </li>
            <li class="sidenav-item">
                <a href="javascript:void(0)" class="sidenav-link">
                    <i class="sidenav-icon ion ion-md-basketball"></i>
                    <div>Item 4</div>
                </a>
            </li>
            <li class="sidenav-item">
                <a href="javascript:void(0)" class="sidenav-link">
                    <i class="sidenav-icon ion ion-ios-bonfire"></i>
                    <div>Item 5</div>
                </a>
            </li>

            <li class="sidenav-divider"></li>

            <li class="sidenav-item">
                <a href="javascript:void(0)" class="sidenav-link">
                    <i class="sidenav-icon ion ion-ios-cafe"></i>
                    <div>Item 6</div>
                </a>
            </li>
            <li class="sidenav-item">
                <a href="javascript:void(0)" class="sidenav-link">
                    <i class="sidenav-icon ion ion-ios-cloud-outline"></i>
                    <div>Item 7</div>
                </a>
            </li>
            <li class="sidenav-item">
                <a href="javascript:void(0)" class="sidenav-link">
                    <i class="sidenav-icon ion ion-md-code"></i>
                    <div>Item 8</div>
                </a>
            </li>
        </ul>
    </div>

    <div class="sidenavs-10 sidenav sidenav-vertical d-inline-flex bg-danger mr-4 mb-4" style="height: 450px">
        <ul class="sidenav-inner">
            <li class="sidenav-block my-1">
                <div class="media align-items-center">
                    <img src="/img/avatars/1-small.png" class="d-block ui-w-50 rounded-circle" alt>
                    <div class="media-body pl-3">
                        <h5 class="sidenav-text mb-1">Mike Greene</h5>
                        <div class="small">
                            <a href="javascript:void(0)" class="sidenav-link">
                                <strong class="sidenav-text">5</strong> new messages</a>
                        </div>
                    </div>
                </div>
            </li>

            <li class="sidenav-divider mt-0"></li>

            <li class="sidenav-item">
                <a href="javascript:void(0)" class="sidenav-link">
                    <i class="sidenav-icon ion ion-md-notifications-outline"></i>
                    <div>Some Long Long Long Long Long Item</div>
                </a>
            </li>
            <li class="sidenav-item">
                <a href="javascript:void(0)" class="sidenav-link sidenav-toggle">
                    <i class="sidenav-icon ion ion-ios-settings"></i>
                    <div>Item 1</div>
                </a>
                <ul class="sidenav-menu">
                    <li class="sidenav-item">
                        <a href="javascript:void(0)" class="sidenav-link">
                            <div>Item 1.1</div>
                        </a>
                    </li>
                    <li class="sidenav-item">
                        <a href="javascript:void(0)" class="sidenav-link">
                            <div>Item 1.2</div>
                        </a>
                    </li>
                    <li class="sidenav-item">
                        <a href="javascript:void(0)" class="sidenav-link">
                            <div>Item 1.3</div>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="sidenav-item">
                <a href="javascript:void(0)" class="sidenav-link sidenav-toggle">
                    <i class="sidenav-icon ion ion-md-paper"></i>
                    <div>Item 2</div>
                </a>

                <ul class="sidenav-menu">
                    <li class="sidenav-item">
                        <a href="javascript:void(0)" class="sidenav-link">
                            <div>Item 2.1</div>
                        </a>
                    </li>
                    <li class="sidenav-item">
                        <a href="javascript:void(0)" class="sidenav-link sidenav-toggle">
                            <div>Item 2.2</div>
                        </a>

                        <ul class="sidenav-menu">
                            <li class="sidenav-item">
                                <a href="javascript:void(0)" class="sidenav-link">
                                    <div>Item 2.2.1</div>
                                </a>
                            </li>
                            <li class="sidenav-item">
                                <a href="javascript:void(0)" class="sidenav-link">
                                    <div>Item 2.2.2</div>
                                </a>
                            </li>
                            <li class="sidenav-item">
                                <a href="javascript:void(0)" class="sidenav-link">
                                    <div>Item 2.2.3</div>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="sidenav-item">
                        <a href="javascript:void(0)" class="sidenav-link sidenav-toggle">
                            <div>Item 2.3</div>
                        </a>

                        <ul class="sidenav-menu">
                            <li class="sidenav-item">
                                <a href="javascript:void(0)" class="sidenav-link">
                                    <div>Item 2.3.1</div>
                                </a>
                            </li>
                            <li class="sidenav-item">
                                <a href="javascript:void(0)" class="sidenav-link">
                                    <div>Item 2.3.2</div>
                                </a>
                            </li>
                            <li class="sidenav-item">
                                <a href="javascript:void(0)" class="sidenav-link">
                                    <div>Item 2.3.3</div>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </li>

            <li class="sidenav-divider mb-0"></li>
            <li class="sidenav-header small font-weight-semibold">SECTION HEADER</li>

            <li class="sidenav-item active">
                <a href="javascript:void(0)" class="sidenav-link">
                    <i class="sidenav-icon ion ion-ios-flask"></i>
                    <div>Item 3</div>
                </a>
            </li>
            <li class="sidenav-item">
                <a href="javascript:void(0)" class="sidenav-link">
                    <i class="sidenav-icon ion ion-md-basketball"></i>
                    <div>Item 4</div>
                </a>
            </li>
            <li class="sidenav-item">
                <a href="javascript:void(0)" class="sidenav-link">
                    <i class="sidenav-icon ion ion-ios-bonfire"></i>
                    <div>Item 5</div>
                </a>
            </li>

            <li class="sidenav-divider"></li>

            <li class="sidenav-item">
                <a href="javascript:void(0)" class="sidenav-link">
                    <i class="sidenav-icon ion ion-ios-cafe"></i>
                    <div>Item 6</div>
                </a>
            </li>
            <li class="sidenav-item">
                <a href="javascript:void(0)" class="sidenav-link">
                    <i class="sidenav-icon ion ion-ios-cloud-outline"></i>
                    <div>Item 7</div>
                </a>
            </li>
            <li class="sidenav-item">
                <a href="javascript:void(0)" class="sidenav-link">
                    <i class="sidenav-icon ion ion-md-code"></i>
                    <div>Item 8</div>
                </a>
            </li>
        </ul>
    </div>

    <div class="sidenavs-10 sidenav sidenav-vertical d-inline-flex bg-white mr-4 mb-4" style="height: 450px">
        <ul class="sidenav-inner">
            <li class="sidenav-block my-1">
                <div class="media align-items-center">
                    <img src="/img/avatars/1-small.png" class="d-block ui-w-50 rounded-circle" alt>
                    <div class="media-body pl-3">
                        <h5 class="sidenav-text mb-1">Mike Greene</h5>
                        <div class="small">
                            <a href="javascript:void(0)" class="sidenav-link">
                                <strong class="sidenav-text">5</strong> new messages</a>
                        </div>
                    </div>
                </div>
            </li>

            <li class="sidenav-divider mt-0"></li>

            <li class="sidenav-item">
                <a href="javascript:void(0)" class="sidenav-link">
                    <i class="sidenav-icon ion ion-md-notifications-outline"></i>
                    <div>Some Long Long Long Long Long Item</div>
                </a>
            </li>
            <li class="sidenav-item">
                <a href="javascript:void(0)" class="sidenav-link sidenav-toggle">
                    <i class="sidenav-icon ion ion-ios-settings"></i>
                    <div>Item 1</div>
                </a>
                <ul class="sidenav-menu">
                    <li class="sidenav-item">
                        <a href="javascript:void(0)" class="sidenav-link">
                            <div>Item 1.1</div>
                        </a>
                    </li>
                    <li class="sidenav-item">
                        <a href="javascript:void(0)" class="sidenav-link">
                            <div>Item 1.2</div>
                        </a>
                    </li>
                    <li class="sidenav-item">
                        <a href="javascript:void(0)" class="sidenav-link">
                            <div>Item 1.3</div>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="sidenav-item">
                <a href="javascript:void(0)" class="sidenav-link sidenav-toggle">
                    <i class="sidenav-icon ion ion-md-paper"></i>
                    <div>Item 2</div>
                </a>

                <ul class="sidenav-menu">
                    <li class="sidenav-item">
                        <a href="javascript:void(0)" class="sidenav-link">
                            <div>Item 2.1</div>
                        </a>
                    </li>
                    <li class="sidenav-item">
                        <a href="javascript:void(0)" class="sidenav-link sidenav-toggle">
                            <div>Item 2.2</div>
                        </a>

                        <ul class="sidenav-menu">
                            <li class="sidenav-item">
                                <a href="javascript:void(0)" class="sidenav-link">
                                    <div>Item 2.2.1</div>
                                </a>
                            </li>
                            <li class="sidenav-item">
                                <a href="javascript:void(0)" class="sidenav-link">
                                    <div>Item 2.2.2</div>
                                </a>
                            </li>
                            <li class="sidenav-item">
                                <a href="javascript:void(0)" class="sidenav-link">
                                    <div>Item 2.2.3</div>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="sidenav-item">
                        <a href="javascript:void(0)" class="sidenav-link sidenav-toggle">
                            <div>Item 2.3</div>
                        </a>

                        <ul class="sidenav-menu">
                            <li class="sidenav-item">
                                <a href="javascript:void(0)" class="sidenav-link">
                                    <div>Item 2.3.1</div>
                                </a>
                            </li>
                            <li class="sidenav-item">
                                <a href="javascript:void(0)" class="sidenav-link">
                                    <div>Item 2.3.2</div>
                                </a>
                            </li>
                            <li class="sidenav-item">
                                <a href="javascript:void(0)" class="sidenav-link">
                                    <div>Item 2.3.3</div>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </li>

            <li class="sidenav-divider mb-0"></li>
            <li class="sidenav-header small font-weight-semibold">SECTION HEADER</li>

            <li class="sidenav-item active">
                <a href="javascript:void(0)" class="sidenav-link">
                    <i class="sidenav-icon ion ion-ios-flask"></i>
                    <div>Item 3</div>
                </a>
            </li>
            <li class="sidenav-item">
                <a href="javascript:void(0)" class="sidenav-link">
                    <i class="sidenav-icon ion ion-md-basketball"></i>
                    <div>Item 4</div>
                </a>
            </li>
            <li class="sidenav-item">
                <a href="javascript:void(0)" class="sidenav-link">
                    <i class="sidenav-icon ion ion-ios-bonfire"></i>
                    <div>Item 5</div>
                </a>
            </li>

            <li class="sidenav-divider"></li>

            <li class="sidenav-item">
                <a href="javascript:void(0)" class="sidenav-link">
                    <i class="sidenav-icon ion ion-ios-cafe"></i>
                    <div>Item 6</div>
                </a>
            </li>
            <li class="sidenav-item">
                <a href="javascript:void(0)" class="sidenav-link">
                    <i class="sidenav-icon ion ion-ios-cloud-outline"></i>
                    <div>Item 7</div>
                </a>
            </li>
            <li class="sidenav-item">
                <a href="javascript:void(0)" class="sidenav-link">
                    <i class="sidenav-icon ion ion-md-code"></i>
                    <div>Item 8</div>
                </a>
            </li>
        </ul>
    </div>

    <div class="sidenavs-10 sidenav sidenav-vertical d-inline-flex bg-lighter mr-4 mb-4" style="height: 450px">
        <ul class="sidenav-inner">
            <li class="sidenav-block my-1">
                <div class="media align-items-center">
                    <img src="/img/avatars/1-small.png" class="d-block ui-w-50 rounded-circle" alt>
                    <div class="media-body pl-3">
                        <h5 class="sidenav-text mb-1">Mike Greene</h5>
                        <div class="small">
                            <a href="javascript:void(0)" class="sidenav-link">
                                <strong class="sidenav-text">5</strong> new messages</a>
                        </div>
                    </div>
                </div>
            </li>

            <li class="sidenav-divider mt-0"></li>

            <li class="sidenav-item">
                <a href="javascript:void(0)" class="sidenav-link">
                    <i class="sidenav-icon ion ion-md-notifications-outline"></i>
                    <div>Some Long Long Long Long Long Item</div>
                </a>
            </li>
            <li class="sidenav-item">
                <a href="javascript:void(0)" class="sidenav-link sidenav-toggle">
                    <i class="sidenav-icon ion ion-ios-settings"></i>
                    <div>Item 1</div>
                </a>
                <ul class="sidenav-menu">
                    <li class="sidenav-item">
                        <a href="javascript:void(0)" class="sidenav-link">
                            <div>Item 1.1</div>
                        </a>
                    </li>
                    <li class="sidenav-item">
                        <a href="javascript:void(0)" class="sidenav-link">
                            <div>Item 1.2</div>
                        </a>
                    </li>
                    <li class="sidenav-item">
                        <a href="javascript:void(0)" class="sidenav-link">
                            <div>Item 1.3</div>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="sidenav-item">
                <a href="javascript:void(0)" class="sidenav-link sidenav-toggle">
                    <i class="sidenav-icon ion ion-md-paper"></i>
                    <div>Item 2</div>
                </a>

                <ul class="sidenav-menu">
                    <li class="sidenav-item">
                        <a href="javascript:void(0)" class="sidenav-link">
                            <div>Item 2.1</div>
                        </a>
                    </li>
                    <li class="sidenav-item">
                        <a href="javascript:void(0)" class="sidenav-link sidenav-toggle">
                            <div>Item 2.2</div>
                        </a>

                        <ul class="sidenav-menu">
                            <li class="sidenav-item">
                                <a href="javascript:void(0)" class="sidenav-link">
                                    <div>Item 2.2.1</div>
                                </a>
                            </li>
                            <li class="sidenav-item">
                                <a href="javascript:void(0)" class="sidenav-link">
                                    <div>Item 2.2.2</div>
                                </a>
                            </li>
                            <li class="sidenav-item">
                                <a href="javascript:void(0)" class="sidenav-link">
                                    <div>Item 2.2.3</div>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="sidenav-item">
                        <a href="javascript:void(0)" class="sidenav-link sidenav-toggle">
                            <div>Item 2.3</div>
                        </a>

                        <ul class="sidenav-menu">
                            <li class="sidenav-item">
                                <a href="javascript:void(0)" class="sidenav-link">
                                    <div>Item 2.3.1</div>
                                </a>
                            </li>
                            <li class="sidenav-item">
                                <a href="javascript:void(0)" class="sidenav-link">
                                    <div>Item 2.3.2</div>
                                </a>
                            </li>
                            <li class="sidenav-item">
                                <a href="javascript:void(0)" class="sidenav-link">
                                    <div>Item 2.3.3</div>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </li>

            <li class="sidenav-divider mb-0"></li>
            <li class="sidenav-header small font-weight-semibold">SECTION HEADER</li>

            <li class="sidenav-item active">
                <a href="javascript:void(0)" class="sidenav-link">
                    <i class="sidenav-icon ion ion-ios-flask"></i>
                    <div>Item 3</div>
                </a>
            </li>
            <li class="sidenav-item">
                <a href="javascript:void(0)" class="sidenav-link">
                    <i class="sidenav-icon ion ion-md-basketball"></i>
                    <div>Item 4</div>
                </a>
            </li>
            <li class="sidenav-item">
                <a href="javascript:void(0)" class="sidenav-link">
                    <i class="sidenav-icon ion ion-ios-bonfire"></i>
                    <div>Item 5</div>
                </a>
            </li>

            <li class="sidenav-divider"></li>

            <li class="sidenav-item">
                <a href="javascript:void(0)" class="sidenav-link">
                    <i class="sidenav-icon ion ion-ios-cafe"></i>
                    <div>Item 6</div>
                </a>
            </li>
            <li class="sidenav-item">
                <a href="javascript:void(0)" class="sidenav-link">
                    <i class="sidenav-icon ion ion-ios-cloud-outline"></i>
                    <div>Item 7</div>
                </a>
            </li>
            <li class="sidenav-item">
                <a href="javascript:void(0)" class="sidenav-link">
                    <i class="sidenav-icon ion ion-md-code"></i>
                    <div>Item 8</div>
                </a>
            </li>
        </ul>
    </div>

    <div class="sidenavs-10 sidenav sidenav-vertical d-inline-flex bg-light mr-4 mb-4" style="height: 450px">
        <ul class="sidenav-inner">
            <li class="sidenav-block my-1">
                <div class="media align-items-center">
                    <img src="/img/avatars/1-small.png" class="d-block ui-w-50 rounded-circle" alt>
                    <div class="media-body pl-3">
                        <h5 class="sidenav-text mb-1">Mike Greene</h5>
                        <div class="small">
                            <a href="javascript:void(0)" class="sidenav-link">
                                <strong class="sidenav-text">5</strong> new messages</a>
                        </div>
                    </div>
                </div>
            </li>

            <li class="sidenav-divider mt-0"></li>

            <li class="sidenav-item">
                <a href="javascript:void(0)" class="sidenav-link">
                    <i class="sidenav-icon ion ion-md-notifications-outline"></i>
                    <div>Some Long Long Long Long Long Item</div>
                </a>
            </li>
            <li class="sidenav-item">
                <a href="javascript:void(0)" class="sidenav-link sidenav-toggle">
                    <i class="sidenav-icon ion ion-ios-settings"></i>
                    <div>Item 1</div>
                </a>
                <ul class="sidenav-menu">
                    <li class="sidenav-item">
                        <a href="javascript:void(0)" class="sidenav-link">
                            <div>Item 1.1</div>
                        </a>
                    </li>
                    <li class="sidenav-item">
                        <a href="javascript:void(0)" class="sidenav-link">
                            <div>Item 1.2</div>
                        </a>
                    </li>
                    <li class="sidenav-item">
                        <a href="javascript:void(0)" class="sidenav-link">
                            <div>Item 1.3</div>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="sidenav-item">
                <a href="javascript:void(0)" class="sidenav-link sidenav-toggle">
                    <i class="sidenav-icon ion ion-md-paper"></i>
                    <div>Item 2</div>
                </a>

                <ul class="sidenav-menu">
                    <li class="sidenav-item">
                        <a href="javascript:void(0)" class="sidenav-link">
                            <div>Item 2.1</div>
                        </a>
                    </li>
                    <li class="sidenav-item">
                        <a href="javascript:void(0)" class="sidenav-link sidenav-toggle">
                            <div>Item 2.2</div>
                        </a>

                        <ul class="sidenav-menu">
                            <li class="sidenav-item">
                                <a href="javascript:void(0)" class="sidenav-link">
                                    <div>Item 2.2.1</div>
                                </a>
                            </li>
                            <li class="sidenav-item">
                                <a href="javascript:void(0)" class="sidenav-link">
                                    <div>Item 2.2.2</div>
                                </a>
                            </li>
                            <li class="sidenav-item">
                                <a href="javascript:void(0)" class="sidenav-link">
                                    <div>Item 2.2.3</div>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="sidenav-item">
                        <a href="javascript:void(0)" class="sidenav-link sidenav-toggle">
                            <div>Item 2.3</div>
                        </a>

                        <ul class="sidenav-menu">
                            <li class="sidenav-item">
                                <a href="javascript:void(0)" class="sidenav-link">
                                    <div>Item 2.3.1</div>
                                </a>
                            </li>
                            <li class="sidenav-item">
                                <a href="javascript:void(0)" class="sidenav-link">
                                    <div>Item 2.3.2</div>
                                </a>
                            </li>
                            <li class="sidenav-item">
                                <a href="javascript:void(0)" class="sidenav-link">
                                    <div>Item 2.3.3</div>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </li>

            <li class="sidenav-divider mb-0"></li>
            <li class="sidenav-header small font-weight-semibold">SECTION HEADER</li>

            <li class="sidenav-item active">
                <a href="javascript:void(0)" class="sidenav-link">
                    <i class="sidenav-icon ion ion-ios-flask"></i>
                    <div>Item 3</div>
                </a>
            </li>
            <li class="sidenav-item">
                <a href="javascript:void(0)" class="sidenav-link">
                    <i class="sidenav-icon ion ion-md-basketball"></i>
                    <div>Item 4</div>
                </a>
            </li>
            <li class="sidenav-item">
                <a href="javascript:void(0)" class="sidenav-link">
                    <i class="sidenav-icon ion ion-ios-bonfire"></i>
                    <div>Item 5</div>
                </a>
            </li>

            <li class="sidenav-divider"></li>

            <li class="sidenav-item">
                <a href="javascript:void(0)" class="sidenav-link">
                    <i class="sidenav-icon ion ion-ios-cafe"></i>
                    <div>Item 6</div>
                </a>
            </li>
            <li class="sidenav-item">
                <a href="javascript:void(0)" class="sidenav-link">
                    <i class="sidenav-icon ion ion-ios-cloud-outline"></i>
                    <div>Item 7</div>
                </a>
            </li>
            <li class="sidenav-item">
                <a href="javascript:void(0)" class="sidenav-link">
                    <i class="sidenav-icon ion ion-md-code"></i>
                    <div>Item 8</div>
                </a>
            </li>
        </ul>
    </div>

    <h6 class="pb-1 mt-5 mb-4">Colors (horizontal)</h6>

    <div class="sidenavs-11 sidenav sidenav-horizontal bg-sidenav-theme mb-4" style="position: relative; z-index: 95">
        <ul class="sidenav-inner">
            <li class="sidenav-item">
                <a href="javascript:void(0)" class="sidenav-link">
                    <i class="sidenav-icon ion ion-md-notifications-outline"></i>
                    <div>Some Long Long Long Long Long Item</div>
                </a>
            </li>
            <li class="sidenav-item">
                <a href="javascript:void(0)" class="sidenav-link sidenav-toggle">
                    <i class="sidenav-icon ion ion-ios-settings"></i>
                    <div>Item 1</div>
                </a>
                <ul class="sidenav-menu">
                    <li class="sidenav-item">
                        <a href="javascript:void(0)" class="sidenav-link">
                            <div>Item 1.1</div>
                        </a>
                    </li>
                    <li class="sidenav-item">
                        <a href="javascript:void(0)" class="sidenav-link">
                            <div>Item 1.2</div>
                        </a>
                    </li>
                    <li class="sidenav-item">
                        <a href="javascript:void(0)" class="sidenav-link">
                            <div>Item 1.3</div>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="sidenav-item">
                <a href="javascript:void(0)" class="sidenav-link sidenav-toggle">
                    <i class="sidenav-icon ion ion-md-paper"></i>
                    <div>Item 2</div>
                </a>

                <ul class="sidenav-menu">
                    <li class="sidenav-item">
                        <a href="javascript:void(0)" class="sidenav-link">
                            <div>Item 2.1</div>
                        </a>
                    </li>
                    <li class="sidenav-item">
                        <a href="javascript:void(0)" class="sidenav-link sidenav-toggle">
                            <div>Item 2.2</div>
                        </a>

                        <ul class="sidenav-menu">
                            <li class="sidenav-item">
                                <a href="javascript:void(0)" class="sidenav-link">
                                    <div>Item 2.2.1</div>
                                </a>
                            </li>
                            <li class="sidenav-item">
                                <a href="javascript:void(0)" class="sidenav-link">
                                    <div>Item 2.2.2</div>
                                </a>
                            </li>
                            <li class="sidenav-item">
                                <a href="javascript:void(0)" class="sidenav-link">
                                    <div>Item 2.2.3</div>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="sidenav-item">
                        <a href="javascript:void(0)" class="sidenav-link sidenav-toggle">
                            <div>Item 2.3</div>
                        </a>

                        <ul class="sidenav-menu">
                            <li class="sidenav-item">
                                <a href="javascript:void(0)" class="sidenav-link">
                                    <div>Item 2.3.1</div>
                                </a>
                            </li>
                            <li class="sidenav-item">
                                <a href="javascript:void(0)" class="sidenav-link">
                                    <div>Item 2.3.2</div>
                                </a>
                            </li>
                            <li class="sidenav-item">
                                <a href="javascript:void(0)" class="sidenav-link">
                                    <div>Item 2.3.3</div>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </li>

            <li class="sidenav-item active">
                <a href="javascript:void(0)" class="sidenav-link">
                    <i class="sidenav-icon ion ion-ios-flask"></i>
                    <div>Item 3</div>
                </a>
            </li>
            <li class="sidenav-item">
                <a href="javascript:void(0)" class="sidenav-link">
                    <i class="sidenav-icon ion ion-md-basketball"></i>
                    <div>Item 4</div>
                </a>
            </li>
            <li class="sidenav-item">
                <a href="javascript:void(0)" class="sidenav-link">
                    <i class="sidenav-icon ion ion-ios-bonfire"></i>
                    <div>Item 5</div>
                </a>
            </li>
            <li class="sidenav-item">
                <a href="javascript:void(0)" class="sidenav-link">
                    <i class="sidenav-icon ion ion-ios-cafe"></i>
                    <div>Item 6</div>
                </a>
            </li>
            <li class="sidenav-item">
                <a href="javascript:void(0)" class="sidenav-link">
                    <i class="sidenav-icon ion ion-ios-cloud-outline"></i>
                    <div>Item 7</div>
                </a>
            </li>
            <li class="sidenav-item">
                <a href="javascript:void(0)" class="sidenav-link">
                    <i class="sidenav-icon ion ion-md-code"></i>
                    <div>Item 8</div>
                </a>
            </li>
        </ul>
    </div>

    <div class="sidenavs-11 sidenav sidenav-horizontal bg-primary mb-4" style="position: relative; z-index: 94">
        <ul class="sidenav-inner">
            <li class="sidenav-item">
                <a href="javascript:void(0)" class="sidenav-link">
                    <i class="sidenav-icon ion ion-md-notifications-outline"></i>
                    <div>Some Long Long Long Long Long Item</div>
                </a>
            </li>
            <li class="sidenav-item">
                <a href="javascript:void(0)" class="sidenav-link sidenav-toggle">
                    <i class="sidenav-icon ion ion-ios-settings"></i>
                    <div>Item 1</div>
                </a>
                <ul class="sidenav-menu">
                    <li class="sidenav-item">
                        <a href="javascript:void(0)" class="sidenav-link">
                            <div>Item 1.1</div>
                        </a>
                    </li>
                    <li class="sidenav-item">
                        <a href="javascript:void(0)" class="sidenav-link">
                            <div>Item 1.2</div>
                        </a>
                    </li>
                    <li class="sidenav-item">
                        <a href="javascript:void(0)" class="sidenav-link">
                            <div>Item 1.3</div>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="sidenav-item">
                <a href="javascript:void(0)" class="sidenav-link sidenav-toggle">
                    <i class="sidenav-icon ion ion-md-paper"></i>
                    <div>Item 2</div>
                </a>

                <ul class="sidenav-menu">
                    <li class="sidenav-item">
                        <a href="javascript:void(0)" class="sidenav-link">
                            <div>Item 2.1</div>
                        </a>
                    </li>
                    <li class="sidenav-item">
                        <a href="javascript:void(0)" class="sidenav-link sidenav-toggle">
                            <div>Item 2.2</div>
                        </a>

                        <ul class="sidenav-menu">
                            <li class="sidenav-item">
                                <a href="javascript:void(0)" class="sidenav-link">
                                    <div>Item 2.2.1</div>
                                </a>
                            </li>
                            <li class="sidenav-item">
                                <a href="javascript:void(0)" class="sidenav-link">
                                    <div>Item 2.2.2</div>
                                </a>
                            </li>
                            <li class="sidenav-item">
                                <a href="javascript:void(0)" class="sidenav-link">
                                    <div>Item 2.2.3</div>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="sidenav-item">
                        <a href="javascript:void(0)" class="sidenav-link sidenav-toggle">
                            <div>Item 2.3</div>
                        </a>

                        <ul class="sidenav-menu">
                            <li class="sidenav-item">
                                <a href="javascript:void(0)" class="sidenav-link">
                                    <div>Item 2.3.1</div>
                                </a>
                            </li>
                            <li class="sidenav-item">
                                <a href="javascript:void(0)" class="sidenav-link">
                                    <div>Item 2.3.2</div>
                                </a>
                            </li>
                            <li class="sidenav-item">
                                <a href="javascript:void(0)" class="sidenav-link">
                                    <div>Item 2.3.3</div>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </li>

            <li class="sidenav-item active">
                <a href="javascript:void(0)" class="sidenav-link">
                    <i class="sidenav-icon ion ion-ios-flask"></i>
                    <div>Item 3</div>
                </a>
            </li>
            <li class="sidenav-item">
                <a href="javascript:void(0)" class="sidenav-link">
                    <i class="sidenav-icon ion ion-md-basketball"></i>
                    <div>Item 4</div>
                </a>
            </li>
            <li class="sidenav-item">
                <a href="javascript:void(0)" class="sidenav-link">
                    <i class="sidenav-icon ion ion-ios-bonfire"></i>
                    <div>Item 5</div>
                </a>
            </li>
            <li class="sidenav-item">
                <a href="javascript:void(0)" class="sidenav-link">
                    <i class="sidenav-icon ion ion-ios-cafe"></i>
                    <div>Item 6</div>
                </a>
            </li>
            <li class="sidenav-item">
                <a href="javascript:void(0)" class="sidenav-link">
                    <i class="sidenav-icon ion ion-ios-cloud-outline"></i>
                    <div>Item 7</div>
                </a>
            </li>
            <li class="sidenav-item">
                <a href="javascript:void(0)" class="sidenav-link">
                    <i class="sidenav-icon ion ion-md-code"></i>
                    <div>Item 8</div>
                </a>
            </li>
        </ul>
    </div>

    <div class="sidenavs-11 sidenav sidenav-horizontal bg-secondary mb-4" style="position: relative; z-index: 93">
        <ul class="sidenav-inner">
            <li class="sidenav-item">
                <a href="javascript:void(0)" class="sidenav-link">
                    <i class="sidenav-icon ion ion-md-notifications-outline"></i>
                    <div>Some Long Long Long Long Long Item</div>
                </a>
            </li>
            <li class="sidenav-item">
                <a href="javascript:void(0)" class="sidenav-link sidenav-toggle">
                    <i class="sidenav-icon ion ion-ios-settings"></i>
                    <div>Item 1</div>
                </a>
                <ul class="sidenav-menu">
                    <li class="sidenav-item">
                        <a href="javascript:void(0)" class="sidenav-link">
                            <div>Item 1.1</div>
                        </a>
                    </li>
                    <li class="sidenav-item">
                        <a href="javascript:void(0)" class="sidenav-link">
                            <div>Item 1.2</div>
                        </a>
                    </li>
                    <li class="sidenav-item">
                        <a href="javascript:void(0)" class="sidenav-link">
                            <div>Item 1.3</div>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="sidenav-item">
                <a href="javascript:void(0)" class="sidenav-link sidenav-toggle">
                    <i class="sidenav-icon ion ion-md-paper"></i>
                    <div>Item 2</div>
                </a>

                <ul class="sidenav-menu">
                    <li class="sidenav-item">
                        <a href="javascript:void(0)" class="sidenav-link">
                            <div>Item 2.1</div>
                        </a>
                    </li>
                    <li class="sidenav-item">
                        <a href="javascript:void(0)" class="sidenav-link sidenav-toggle">
                            <div>Item 2.2</div>
                        </a>

                        <ul class="sidenav-menu">
                            <li class="sidenav-item">
                                <a href="javascript:void(0)" class="sidenav-link">
                                    <div>Item 2.2.1</div>
                                </a>
                            </li>
                            <li class="sidenav-item">
                                <a href="javascript:void(0)" class="sidenav-link">
                                    <div>Item 2.2.2</div>
                                </a>
                            </li>
                            <li class="sidenav-item">
                                <a href="javascript:void(0)" class="sidenav-link">
                                    <div>Item 2.2.3</div>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="sidenav-item">
                        <a href="javascript:void(0)" class="sidenav-link sidenav-toggle">
                            <div>Item 2.3</div>
                        </a>

                        <ul class="sidenav-menu">
                            <li class="sidenav-item">
                                <a href="javascript:void(0)" class="sidenav-link">
                                    <div>Item 2.3.1</div>
                                </a>
                            </li>
                            <li class="sidenav-item">
                                <a href="javascript:void(0)" class="sidenav-link">
                                    <div>Item 2.3.2</div>
                                </a>
                            </li>
                            <li class="sidenav-item">
                                <a href="javascript:void(0)" class="sidenav-link">
                                    <div>Item 2.3.3</div>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li class="sidenav-item active">
                <a href="javascript:void(0)" class="sidenav-link">
                    <i class="sidenav-icon ion ion-ios-flask"></i>
                    <div>Item 3</div>
                </a>
            </li>
            <li class="sidenav-item">
                <a href="javascript:void(0)" class="sidenav-link">
                    <i class="sidenav-icon ion ion-md-basketball"></i>
                    <div>Item 4</div>
                </a>
            </li>
            <li class="sidenav-item">
                <a href="javascript:void(0)" class="sidenav-link">
                    <i class="sidenav-icon ion ion-ios-bonfire"></i>
                    <div>Item 5</div>
                </a>
            </li>
            <li class="sidenav-item">
                <a href="javascript:void(0)" class="sidenav-link">
                    <i class="sidenav-icon ion ion-ios-cafe"></i>
                    <div>Item 6</div>
                </a>
            </li>
            <li class="sidenav-item">
                <a href="javascript:void(0)" class="sidenav-link">
                    <i class="sidenav-icon ion ion-ios-cloud-outline"></i>
                    <div>Item 7</div>
                </a>
            </li>
            <li class="sidenav-item">
                <a href="javascript:void(0)" class="sidenav-link">
                    <i class="sidenav-icon ion ion-md-code"></i>
                    <div>Item 8</div>
                </a>
            </li>
        </ul>
    </div>

    <div class="sidenavs-11 sidenav sidenav-horizontal bg-success mb-4" style="position: relative; z-index: 92">
        <ul class="sidenav-inner">
            <li class="sidenav-item">
                <a href="javascript:void(0)" class="sidenav-link">
                    <i class="sidenav-icon ion ion-md-notifications-outline"></i>
                    <div>Some Long Long Long Long Long Item</div>
                </a>
            </li>
            <li class="sidenav-item">
                <a href="javascript:void(0)" class="sidenav-link sidenav-toggle">
                    <i class="sidenav-icon ion ion-ios-settings"></i>
                    <div>Item 1</div>
                </a>
                <ul class="sidenav-menu">
                    <li class="sidenav-item">
                        <a href="javascript:void(0)" class="sidenav-link">
                            <div>Item 1.1</div>
                        </a>
                    </li>
                    <li class="sidenav-item">
                        <a href="javascript:void(0)" class="sidenav-link">
                            <div>Item 1.2</div>
                        </a>
                    </li>
                    <li class="sidenav-item">
                        <a href="javascript:void(0)" class="sidenav-link">
                            <div>Item 1.3</div>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="sidenav-item">
                <a href="javascript:void(0)" class="sidenav-link sidenav-toggle">
                    <i class="sidenav-icon ion ion-md-paper"></i>
                    <div>Item 2</div>
                </a>

                <ul class="sidenav-menu">
                    <li class="sidenav-item">
                        <a href="javascript:void(0)" class="sidenav-link">
                            <div>Item 2.1</div>
                        </a>
                    </li>
                    <li class="sidenav-item">
                        <a href="javascript:void(0)" class="sidenav-link sidenav-toggle">
                            <div>Item 2.2</div>
                        </a>

                        <ul class="sidenav-menu">
                            <li class="sidenav-item">
                                <a href="javascript:void(0)" class="sidenav-link">
                                    <div>Item 2.2.1</div>
                                </a>
                            </li>
                            <li class="sidenav-item">
                                <a href="javascript:void(0)" class="sidenav-link">
                                    <div>Item 2.2.2</div>
                                </a>
                            </li>
                            <li class="sidenav-item">
                                <a href="javascript:void(0)" class="sidenav-link">
                                    <div>Item 2.2.3</div>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="sidenav-item">
                        <a href="javascript:void(0)" class="sidenav-link sidenav-toggle">
                            <div>Item 2.3</div>
                        </a>

                        <ul class="sidenav-menu">
                            <li class="sidenav-item">
                                <a href="javascript:void(0)" class="sidenav-link">
                                    <div>Item 2.3.1</div>
                                </a>
                            </li>
                            <li class="sidenav-item">
                                <a href="javascript:void(0)" class="sidenav-link">
                                    <div>Item 2.3.2</div>
                                </a>
                            </li>
                            <li class="sidenav-item">
                                <a href="javascript:void(0)" class="sidenav-link">
                                    <div>Item 2.3.3</div>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li class="sidenav-item active">
                <a href="javascript:void(0)" class="sidenav-link">
                    <i class="sidenav-icon ion ion-ios-flask"></i>
                    <div>Item 3</div>
                </a>
            </li>
            <li class="sidenav-item">
                <a href="javascript:void(0)" class="sidenav-link">
                    <i class="sidenav-icon ion ion-md-basketball"></i>
                    <div>Item 4</div>
                </a>
            </li>
            <li class="sidenav-item">
                <a href="javascript:void(0)" class="sidenav-link">
                    <i class="sidenav-icon ion ion-ios-bonfire"></i>
                    <div>Item 5</div>
                </a>
            </li>
            <li class="sidenav-item">
                <a href="javascript:void(0)" class="sidenav-link">
                    <i class="sidenav-icon ion ion-ios-cafe"></i>
                    <div>Item 6</div>
                </a>
            </li>
            <li class="sidenav-item">
                <a href="javascript:void(0)" class="sidenav-link">
                    <i class="sidenav-icon ion ion-ios-cloud-outline"></i>
                    <div>Item 7</div>
                </a>
            </li>
            <li class="sidenav-item">
                <a href="javascript:void(0)" class="sidenav-link">
                    <i class="sidenav-icon ion ion-md-code"></i>
                    <div>Item 8</div>
                </a>
            </li>
        </ul>
    </div>

    <div class="sidenavs-11 sidenav sidenav-horizontal bg-info mb-4" style="position: relative; z-index: 91">
        <ul class="sidenav-inner">
            <li class="sidenav-item">
                <a href="javascript:void(0)" class="sidenav-link">
                    <i class="sidenav-icon ion ion-md-notifications-outline"></i>
                    <div>Some Long Long Long Long Long Item</div>
                </a>
            </li>
            <li class="sidenav-item">
                <a href="javascript:void(0)" class="sidenav-link sidenav-toggle">
                    <i class="sidenav-icon ion ion-ios-settings"></i>
                    <div>Item 1</div>
                </a>
                <ul class="sidenav-menu">
                    <li class="sidenav-item">
                        <a href="javascript:void(0)" class="sidenav-link">
                            <div>Item 1.1</div>
                        </a>
                    </li>
                    <li class="sidenav-item">
                        <a href="javascript:void(0)" class="sidenav-link">
                            <div>Item 1.2</div>
                        </a>
                    </li>
                    <li class="sidenav-item">
                        <a href="javascript:void(0)" class="sidenav-link">
                            <div>Item 1.3</div>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="sidenav-item">
                <a href="javascript:void(0)" class="sidenav-link sidenav-toggle">
                    <i class="sidenav-icon ion ion-md-paper"></i>
                    <div>Item 2</div>
                </a>

                <ul class="sidenav-menu">
                    <li class="sidenav-item">
                        <a href="javascript:void(0)" class="sidenav-link">
                            <div>Item 2.1</div>
                        </a>
                    </li>
                    <li class="sidenav-item">
                        <a href="javascript:void(0)" class="sidenav-link sidenav-toggle">
                            <div>Item 2.2</div>
                        </a>

                        <ul class="sidenav-menu">
                            <li class="sidenav-item">
                                <a href="javascript:void(0)" class="sidenav-link">
                                    <div>Item 2.2.1</div>
                                </a>
                            </li>
                            <li class="sidenav-item">
                                <a href="javascript:void(0)" class="sidenav-link">
                                    <div>Item 2.2.2</div>
                                </a>
                            </li>
                            <li class="sidenav-item">
                                <a href="javascript:void(0)" class="sidenav-link">
                                    <div>Item 2.2.3</div>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="sidenav-item">
                        <a href="javascript:void(0)" class="sidenav-link sidenav-toggle">
                            <div>Item 2.3</div>
                        </a>

                        <ul class="sidenav-menu">
                            <li class="sidenav-item">
                                <a href="javascript:void(0)" class="sidenav-link">
                                    <div>Item 2.3.1</div>
                                </a>
                            </li>
                            <li class="sidenav-item">
                                <a href="javascript:void(0)" class="sidenav-link">
                                    <div>Item 2.3.2</div>
                                </a>
                            </li>
                            <li class="sidenav-item">
                                <a href="javascript:void(0)" class="sidenav-link">
                                    <div>Item 2.3.3</div>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li class="sidenav-item active">
                <a href="javascript:void(0)" class="sidenav-link">
                    <i class="sidenav-icon ion ion-ios-flask"></i>
                    <div>Item 3</div>
                </a>
            </li>
            <li class="sidenav-item">
                <a href="javascript:void(0)" class="sidenav-link">
                    <i class="sidenav-icon ion ion-md-basketball"></i>
                    <div>Item 4</div>
                </a>
            </li>
            <li class="sidenav-item">
                <a href="javascript:void(0)" class="sidenav-link">
                    <i class="sidenav-icon ion ion-ios-bonfire"></i>
                    <div>Item 5</div>
                </a>
            </li>
            <li class="sidenav-item">
                <a href="javascript:void(0)" class="sidenav-link">
                    <i class="sidenav-icon ion ion-ios-cafe"></i>
                    <div>Item 6</div>
                </a>
            </li>
            <li class="sidenav-item">
                <a href="javascript:void(0)" class="sidenav-link">
                    <i class="sidenav-icon ion ion-ios-cloud-outline"></i>
                    <div>Item 7</div>
                </a>
            </li>
            <li class="sidenav-item">
                <a href="javascript:void(0)" class="sidenav-link">
                    <i class="sidenav-icon ion ion-md-code"></i>
                    <div>Item 8</div>
                </a>
            </li>
        </ul>
    </div>

    <div class="sidenavs-11 sidenav sidenav-horizontal bg-warning mb-4" style="position: relative; z-index: 90">
        <ul class="sidenav-inner">
            <li class="sidenav-item">
                <a href="javascript:void(0)" class="sidenav-link">
                    <i class="sidenav-icon ion ion-md-notifications-outline"></i>
                    <div>Some Long Long Long Long Long Item</div>
                </a>
            </li>
            <li class="sidenav-item">
                <a href="javascript:void(0)" class="sidenav-link sidenav-toggle">
                    <i class="sidenav-icon ion ion-ios-settings"></i>
                    <div>Item 1</div>
                </a>
                <ul class="sidenav-menu">
                    <li class="sidenav-item">
                        <a href="javascript:void(0)" class="sidenav-link">
                            <div>Item 1.1</div>
                        </a>
                    </li>
                    <li class="sidenav-item">
                        <a href="javascript:void(0)" class="sidenav-link">
                            <div>Item 1.2</div>
                        </a>
                    </li>
                    <li class="sidenav-item">
                        <a href="javascript:void(0)" class="sidenav-link">
                            <div>Item 1.3</div>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="sidenav-item">
                <a href="javascript:void(0)" class="sidenav-link sidenav-toggle">
                    <i class="sidenav-icon ion ion-md-paper"></i>
                    <div>Item 2</div>
                </a>

                <ul class="sidenav-menu">
                    <li class="sidenav-item">
                        <a href="javascript:void(0)" class="sidenav-link">
                            <div>Item 2.1</div>
                        </a>
                    </li>
                    <li class="sidenav-item">
                        <a href="javascript:void(0)" class="sidenav-link sidenav-toggle">
                            <div>Item 2.2</div>
                        </a>

                        <ul class="sidenav-menu">
                            <li class="sidenav-item">
                                <a href="javascript:void(0)" class="sidenav-link">
                                    <div>Item 2.2.1</div>
                                </a>
                            </li>
                            <li class="sidenav-item">
                                <a href="javascript:void(0)" class="sidenav-link">
                                    <div>Item 2.2.2</div>
                                </a>
                            </li>
                            <li class="sidenav-item">
                                <a href="javascript:void(0)" class="sidenav-link">
                                    <div>Item 2.2.3</div>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="sidenav-item">
                        <a href="javascript:void(0)" class="sidenav-link sidenav-toggle">
                            <div>Item 2.3</div>
                        </a>

                        <ul class="sidenav-menu">
                            <li class="sidenav-item">
                                <a href="javascript:void(0)" class="sidenav-link">
                                    <div>Item 2.3.1</div>
                                </a>
                            </li>
                            <li class="sidenav-item">
                                <a href="javascript:void(0)" class="sidenav-link">
                                    <div>Item 2.3.2</div>
                                </a>
                            </li>
                            <li class="sidenav-item">
                                <a href="javascript:void(0)" class="sidenav-link">
                                    <div>Item 2.3.3</div>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li class="sidenav-item active">
                <a href="javascript:void(0)" class="sidenav-link">
                    <i class="sidenav-icon ion ion-ios-flask"></i>
                    <div>Item 3</div>
                </a>
            </li>
            <li class="sidenav-item">
                <a href="javascript:void(0)" class="sidenav-link">
                    <i class="sidenav-icon ion ion-md-basketball"></i>
                    <div>Item 4</div>
                </a>
            </li>
            <li class="sidenav-item">
                <a href="javascript:void(0)" class="sidenav-link">
                    <i class="sidenav-icon ion ion-ios-bonfire"></i>
                    <div>Item 5</div>
                </a>
            </li>
            <li class="sidenav-item">
                <a href="javascript:void(0)" class="sidenav-link">
                    <i class="sidenav-icon ion ion-ios-cafe"></i>
                    <div>Item 6</div>
                </a>
            </li>
            <li class="sidenav-item">
                <a href="javascript:void(0)" class="sidenav-link">
                    <i class="sidenav-icon ion ion-ios-cloud-outline"></i>
                    <div>Item 7</div>
                </a>
            </li>
            <li class="sidenav-item">
                <a href="javascript:void(0)" class="sidenav-link">
                    <i class="sidenav-icon ion ion-md-code"></i>
                    <div>Item 8</div>
                </a>
            </li>
        </ul>
    </div>

    <div class="sidenavs-11 sidenav sidenav-horizontal bg-danger mb-4" style="position: relative; z-index: 89">
        <ul class="sidenav-inner">
            <li class="sidenav-item">
                <a href="javascript:void(0)" class="sidenav-link">
                    <i class="sidenav-icon ion ion-md-notifications-outline"></i>
                    <div>Some Long Long Long Long Long Item</div>
                </a>
            </li>
            <li class="sidenav-item">
                <a href="javascript:void(0)" class="sidenav-link sidenav-toggle">
                    <i class="sidenav-icon ion ion-ios-settings"></i>
                    <div>Item 1</div>
                </a>
                <ul class="sidenav-menu">
                    <li class="sidenav-item">
                        <a href="javascript:void(0)" class="sidenav-link">
                            <div>Item 1.1</div>
                        </a>
                    </li>
                    <li class="sidenav-item">
                        <a href="javascript:void(0)" class="sidenav-link">
                            <div>Item 1.2</div>
                        </a>
                    </li>
                    <li class="sidenav-item">
                        <a href="javascript:void(0)" class="sidenav-link">
                            <div>Item 1.3</div>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="sidenav-item">
                <a href="javascript:void(0)" class="sidenav-link sidenav-toggle">
                    <i class="sidenav-icon ion ion-md-paper"></i>
                    <div>Item 2</div>
                </a>

                <ul class="sidenav-menu">
                    <li class="sidenav-item">
                        <a href="javascript:void(0)" class="sidenav-link">
                            <div>Item 2.1</div>
                        </a>
                    </li>
                    <li class="sidenav-item">
                        <a href="javascript:void(0)" class="sidenav-link sidenav-toggle">
                            <div>Item 2.2</div>
                        </a>

                        <ul class="sidenav-menu">
                            <li class="sidenav-item">
                                <a href="javascript:void(0)" class="sidenav-link">
                                    <div>Item 2.2.1</div>
                                </a>
                            </li>
                            <li class="sidenav-item">
                                <a href="javascript:void(0)" class="sidenav-link">
                                    <div>Item 2.2.2</div>
                                </a>
                            </li>
                            <li class="sidenav-item">
                                <a href="javascript:void(0)" class="sidenav-link">
                                    <div>Item 2.2.3</div>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="sidenav-item">
                        <a href="javascript:void(0)" class="sidenav-link sidenav-toggle">
                            <div>Item 2.3</div>
                        </a>

                        <ul class="sidenav-menu">
                            <li class="sidenav-item">
                                <a href="javascript:void(0)" class="sidenav-link">
                                    <div>Item 2.3.1</div>
                                </a>
                            </li>
                            <li class="sidenav-item">
                                <a href="javascript:void(0)" class="sidenav-link">
                                    <div>Item 2.3.2</div>
                                </a>
                            </li>
                            <li class="sidenav-item">
                                <a href="javascript:void(0)" class="sidenav-link">
                                    <div>Item 2.3.3</div>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li class="sidenav-item active">
                <a href="javascript:void(0)" class="sidenav-link">
                    <i class="sidenav-icon ion ion-ios-flask"></i>
                    <div>Item 3</div>
                </a>
            </li>
            <li class="sidenav-item">
                <a href="javascript:void(0)" class="sidenav-link">
                    <i class="sidenav-icon ion ion-md-basketball"></i>
                    <div>Item 4</div>
                </a>
            </li>
            <li class="sidenav-item">
                <a href="javascript:void(0)" class="sidenav-link">
                    <i class="sidenav-icon ion ion-ios-bonfire"></i>
                    <div>Item 5</div>
                </a>
            </li>
            <li class="sidenav-item">
                <a href="javascript:void(0)" class="sidenav-link">
                    <i class="sidenav-icon ion ion-ios-cafe"></i>
                    <div>Item 6</div>
                </a>
            </li>
            <li class="sidenav-item">
                <a href="javascript:void(0)" class="sidenav-link">
                    <i class="sidenav-icon ion ion-ios-cloud-outline"></i>
                    <div>Item 7</div>
                </a>
            </li>
            <li class="sidenav-item">
                <a href="javascript:void(0)" class="sidenav-link">
                    <i class="sidenav-icon ion ion-md-code"></i>
                    <div>Item 8</div>
                </a>
            </li>
        </ul>
    </div>

    <div class="sidenavs-11 sidenav sidenav-horizontal bg-white mb-4" style="position: relative; z-index: 88">
        <ul class="sidenav-inner">
            <li class="sidenav-item">
                <a href="javascript:void(0)" class="sidenav-link">
                    <i class="sidenav-icon ion ion-md-notifications-outline"></i>
                    <div>Some Long Long Long Long Long Item</div>
                </a>
            </li>
            <li class="sidenav-item">
                <a href="javascript:void(0)" class="sidenav-link sidenav-toggle">
                    <i class="sidenav-icon ion ion-ios-settings"></i>
                    <div>Item 1</div>
                </a>
                <ul class="sidenav-menu">
                    <li class="sidenav-item">
                        <a href="javascript:void(0)" class="sidenav-link">
                            <div>Item 1.1</div>
                        </a>
                    </li>
                    <li class="sidenav-item">
                        <a href="javascript:void(0)" class="sidenav-link">
                            <div>Item 1.2</div>
                        </a>
                    </li>
                    <li class="sidenav-item">
                        <a href="javascript:void(0)" class="sidenav-link">
                            <div>Item 1.3</div>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="sidenav-item">
                <a href="javascript:void(0)" class="sidenav-link sidenav-toggle">
                    <i class="sidenav-icon ion ion-md-paper"></i>
                    <div>Item 2</div>
                </a>

                <ul class="sidenav-menu">
                    <li class="sidenav-item">
                        <a href="javascript:void(0)" class="sidenav-link">
                            <div>Item 2.1</div>
                        </a>
                    </li>
                    <li class="sidenav-item">
                        <a href="javascript:void(0)" class="sidenav-link sidenav-toggle">
                            <div>Item 2.2</div>
                        </a>

                        <ul class="sidenav-menu">
                            <li class="sidenav-item">
                                <a href="javascript:void(0)" class="sidenav-link">
                                    <div>Item 2.2.1</div>
                                </a>
                            </li>
                            <li class="sidenav-item">
                                <a href="javascript:void(0)" class="sidenav-link">
                                    <div>Item 2.2.2</div>
                                </a>
                            </li>
                            <li class="sidenav-item">
                                <a href="javascript:void(0)" class="sidenav-link">
                                    <div>Item 2.2.3</div>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="sidenav-item">
                        <a href="javascript:void(0)" class="sidenav-link sidenav-toggle">
                            <div>Item 2.3</div>
                        </a>

                        <ul class="sidenav-menu">
                            <li class="sidenav-item">
                                <a href="javascript:void(0)" class="sidenav-link">
                                    <div>Item 2.3.1</div>
                                </a>
                            </li>
                            <li class="sidenav-item">
                                <a href="javascript:void(0)" class="sidenav-link">
                                    <div>Item 2.3.2</div>
                                </a>
                            </li>
                            <li class="sidenav-item">
                                <a href="javascript:void(0)" class="sidenav-link">
                                    <div>Item 2.3.3</div>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li class="sidenav-item active">
                <a href="javascript:void(0)" class="sidenav-link">
                    <i class="sidenav-icon ion ion-ios-flask"></i>
                    <div>Item 3</div>
                </a>
            </li>
            <li class="sidenav-item">
                <a href="javascript:void(0)" class="sidenav-link">
                    <i class="sidenav-icon ion ion-md-basketball"></i>
                    <div>Item 4</div>
                </a>
            </li>
            <li class="sidenav-item">
                <a href="javascript:void(0)" class="sidenav-link">
                    <i class="sidenav-icon ion ion-ios-bonfire"></i>
                    <div>Item 5</div>
                </a>
            </li>
            <li class="sidenav-item">
                <a href="javascript:void(0)" class="sidenav-link">
                    <i class="sidenav-icon ion ion-ios-cafe"></i>
                    <div>Item 6</div>
                </a>
            </li>
            <li class="sidenav-item">
                <a href="javascript:void(0)" class="sidenav-link">
                    <i class="sidenav-icon ion ion-ios-cloud-outline"></i>
                    <div>Item 7</div>
                </a>
            </li>
            <li class="sidenav-item">
                <a href="javascript:void(0)" class="sidenav-link">
                    <i class="sidenav-icon ion ion-md-code"></i>
                    <div>Item 8</div>
                </a>
            </li>
        </ul>
    </div>

    <div class="sidenavs-11 sidenav sidenav-horizontal bg-lighter mb-4" style="position: relative; z-index: 87">
        <ul class="sidenav-inner">
            <li class="sidenav-item">
                <a href="javascript:void(0)" class="sidenav-link">
                    <i class="sidenav-icon ion ion-md-notifications-outline"></i>
                    <div>Some Long Long Long Long Long Item</div>
                </a>
            </li>
            <li class="sidenav-item">
                <a href="javascript:void(0)" class="sidenav-link sidenav-toggle">
                    <i class="sidenav-icon ion ion-ios-settings"></i>
                    <div>Item 1</div>
                </a>
                <ul class="sidenav-menu">
                    <li class="sidenav-item">
                        <a href="javascript:void(0)" class="sidenav-link">
                            <div>Item 1.1</div>
                        </a>
                    </li>
                    <li class="sidenav-item">
                        <a href="javascript:void(0)" class="sidenav-link">
                            <div>Item 1.2</div>
                        </a>
                    </li>
                    <li class="sidenav-item">
                        <a href="javascript:void(0)" class="sidenav-link">
                            <div>Item 1.3</div>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="sidenav-item">
                <a href="javascript:void(0)" class="sidenav-link sidenav-toggle">
                    <i class="sidenav-icon ion ion-md-paper"></i>
                    <div>Item 2</div>
                </a>

                <ul class="sidenav-menu">
                    <li class="sidenav-item">
                        <a href="javascript:void(0)" class="sidenav-link">
                            <div>Item 2.1</div>
                        </a>
                    </li>
                    <li class="sidenav-item">
                        <a href="javascript:void(0)" class="sidenav-link sidenav-toggle">
                            <div>Item 2.2</div>
                        </a>

                        <ul class="sidenav-menu">
                            <li class="sidenav-item">
                                <a href="javascript:void(0)" class="sidenav-link">
                                    <div>Item 2.2.1</div>
                                </a>
                            </li>
                            <li class="sidenav-item">
                                <a href="javascript:void(0)" class="sidenav-link">
                                    <div>Item 2.2.2</div>
                                </a>
                            </li>
                            <li class="sidenav-item">
                                <a href="javascript:void(0)" class="sidenav-link">
                                    <div>Item 2.2.3</div>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="sidenav-item">
                        <a href="javascript:void(0)" class="sidenav-link sidenav-toggle">
                            <div>Item 2.3</div>
                        </a>

                        <ul class="sidenav-menu">
                            <li class="sidenav-item">
                                <a href="javascript:void(0)" class="sidenav-link">
                                    <div>Item 2.3.1</div>
                                </a>
                            </li>
                            <li class="sidenav-item">
                                <a href="javascript:void(0)" class="sidenav-link">
                                    <div>Item 2.3.2</div>
                                </a>
                            </li>
                            <li class="sidenav-item">
                                <a href="javascript:void(0)" class="sidenav-link">
                                    <div>Item 2.3.3</div>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li class="sidenav-item active">
                <a href="javascript:void(0)" class="sidenav-link">
                    <i class="sidenav-icon ion ion-ios-flask"></i>
                    <div>Item 3</div>
                </a>
            </li>
            <li class="sidenav-item">
                <a href="javascript:void(0)" class="sidenav-link">
                    <i class="sidenav-icon ion ion-md-basketball"></i>
                    <div>Item 4</div>
                </a>
            </li>
            <li class="sidenav-item">
                <a href="javascript:void(0)" class="sidenav-link">
                    <i class="sidenav-icon ion ion-ios-bonfire"></i>
                    <div>Item 5</div>
                </a>
            </li>
            <li class="sidenav-item">
                <a href="javascript:void(0)" class="sidenav-link">
                    <i class="sidenav-icon ion ion-ios-cafe"></i>
                    <div>Item 6</div>
                </a>
            </li>
            <li class="sidenav-item">
                <a href="javascript:void(0)" class="sidenav-link">
                    <i class="sidenav-icon ion ion-ios-cloud-outline"></i>
                    <div>Item 7</div>
                </a>
            </li>
            <li class="sidenav-item">
                <a href="javascript:void(0)" class="sidenav-link">
                    <i class="sidenav-icon ion ion-md-code"></i>
                    <div>Item 8</div>
                </a>
            </li>
        </ul>
    </div>

    <div class="sidenavs-11 sidenav sidenav-horizontal bg-light mb-4" style="position: relative; z-index: 86">
        <ul class="sidenav-inner">
            <li class="sidenav-item">
                <a href="javascript:void(0)" class="sidenav-link">
                    <i class="sidenav-icon ion ion-md-notifications-outline"></i>
                    <div>Some Long Long Long Long Long Item</div>
                </a>
            </li>
            <li class="sidenav-item">
                <a href="javascript:void(0)" class="sidenav-link sidenav-toggle">
                    <i class="sidenav-icon ion ion-ios-settings"></i>
                    <div>Item 1</div>
                </a>
                <ul class="sidenav-menu">
                    <li class="sidenav-item">
                        <a href="javascript:void(0)" class="sidenav-link">
                            <div>Item 1.1</div>
                        </a>
                    </li>
                    <li class="sidenav-item">
                        <a href="javascript:void(0)" class="sidenav-link">
                            <div>Item 1.2</div>
                        </a>
                    </li>
                    <li class="sidenav-item">
                        <a href="javascript:void(0)" class="sidenav-link">
                            <div>Item 1.3</div>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="sidenav-item">
                <a href="javascript:void(0)" class="sidenav-link sidenav-toggle">
                    <i class="sidenav-icon ion ion-md-paper"></i>
                    <div>Item 2</div>
                </a>

                <ul class="sidenav-menu">
                    <li class="sidenav-item">
                        <a href="javascript:void(0)" class="sidenav-link">
                            <div>Item 2.1</div>
                        </a>
                    </li>
                    <li class="sidenav-item">
                        <a href="javascript:void(0)" class="sidenav-link sidenav-toggle">
                            <div>Item 2.2</div>
                        </a>

                        <ul class="sidenav-menu">
                            <li class="sidenav-item">
                                <a href="javascript:void(0)" class="sidenav-link">
                                    <div>Item 2.2.1</div>
                                </a>
                            </li>
                            <li class="sidenav-item">
                                <a href="javascript:void(0)" class="sidenav-link">
                                    <div>Item 2.2.2</div>
                                </a>
                            </li>
                            <li class="sidenav-item">
                                <a href="javascript:void(0)" class="sidenav-link">
                                    <div>Item 2.2.3</div>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="sidenav-item">
                        <a href="javascript:void(0)" class="sidenav-link sidenav-toggle">
                            <div>Item 2.3</div>
                        </a>

                        <ul class="sidenav-menu">
                            <li class="sidenav-item">
                                <a href="javascript:void(0)" class="sidenav-link">
                                    <div>Item 2.3.1</div>
                                </a>
                            </li>
                            <li class="sidenav-item">
                                <a href="javascript:void(0)" class="sidenav-link">
                                    <div>Item 2.3.2</div>
                                </a>
                            </li>
                            <li class="sidenav-item">
                                <a href="javascript:void(0)" class="sidenav-link">
                                    <div>Item 2.3.3</div>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li class="sidenav-item active">
                <a href="javascript:void(0)" class="sidenav-link">
                    <i class="sidenav-icon ion ion-ios-flask"></i>
                    <div>Item 3</div>
                </a>
            </li>
            <li class="sidenav-item">
                <a href="javascript:void(0)" class="sidenav-link">
                    <i class="sidenav-icon ion ion-md-basketball"></i>
                    <div>Item 4</div>
                </a>
            </li>
            <li class="sidenav-item">
                <a href="javascript:void(0)" class="sidenav-link">
                    <i class="sidenav-icon ion ion-ios-bonfire"></i>
                    <div>Item 5</div>
                </a>
            </li>
            <li class="sidenav-item">
                <a href="javascript:void(0)" class="sidenav-link">
                    <i class="sidenav-icon ion ion-ios-cafe"></i>
                    <div>Item 6</div>
                </a>
            </li>
            <li class="sidenav-item">
                <a href="javascript:void(0)" class="sidenav-link">
                    <i class="sidenav-icon ion ion-ios-cloud-outline"></i>
                    <div>Item 7</div>
                </a>
            </li>
            <li class="sidenav-item">
                <a href="javascript:void(0)" class="sidenav-link">
                    <i class="sidenav-icon ion ion-md-code"></i>
                    <div>Item 8</div>
                </a>
            </li>
        </ul>
    </div>

    <h6 class="pb-1 mt-5 mb-4">With background</h6>

    <div class="mb-4">
        <button type="button" id="sidenavs-12-toggle-collapsed" class="btn btn-primary">Toggle collapsed</button>
    </div>

    <div class="sidenavs-12 sidenav sidenav-vertical sidenav-dark d-inline-flex ui-bg-cover ui-bg-overlay-container mr-4 mb-4" style="background-image: url('/img/bg/1.jpg'); height: 450px">
        <div class="ui-bg-overlay bg-dark opacity-25"></div>

        <ul class="sidenav-inner">
            <li class="sidenav-block my-1">
                <div class="media align-items-center">
                    <img src="/img/avatars/1-small.png" class="d-block ui-w-50 rounded-circle" alt>
                    <div class="media-body pl-3">
                        <h5 class="sidenav-text mb-1">Mike Greene</h5>
                        <div class="small">
                            <a href="javascript:void(0)" class="sidenav-link">
                                <strong class="sidenav-text">5</strong> new messages</a>
                        </div>
                    </div>
                </div>
            </li>

            <li class="sidenav-divider mt-0"></li>

            <li class="sidenav-item">
                <a href="javascript:void(0)" class="sidenav-link">
                    <i class="sidenav-icon ion ion-md-notifications-outline"></i>
                    <div>Some Long Long Long Long Long Item</div>
                </a>
            </li>
            <li class="sidenav-item">
                <a href="javascript:void(0)" class="sidenav-link sidenav-toggle">
                    <i class="sidenav-icon ion ion-ios-settings"></i>
                    <div>Item 1</div>
                </a>
                <ul class="sidenav-menu">
                    <li class="sidenav-item">
                        <a href="javascript:void(0)" class="sidenav-link">
                            <div>Item 1.1</div>
                        </a>
                    </li>
                    <li class="sidenav-item">
                        <a href="javascript:void(0)" class="sidenav-link">
                            <div>Item 1.2</div>
                        </a>
                    </li>
                    <li class="sidenav-item">
                        <a href="javascript:void(0)" class="sidenav-link">
                            <div>Item 1.3</div>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="sidenav-item">
                <a href="javascript:void(0)" class="sidenav-link sidenav-toggle">
                    <i class="sidenav-icon ion ion-md-paper"></i>
                    <div>Item 2</div>
                </a>

                <ul class="sidenav-menu">
                    <li class="sidenav-item">
                        <a href="javascript:void(0)" class="sidenav-link">
                            <div>Item 2.1</div>
                        </a>
                    </li>
                    <li class="sidenav-item">
                        <a href="javascript:void(0)" class="sidenav-link sidenav-toggle">
                            <div>Item 2.2</div>
                        </a>

                        <ul class="sidenav-menu">
                            <li class="sidenav-item">
                                <a href="javascript:void(0)" class="sidenav-link">
                                    <div>Item 2.2.1</div>
                                </a>
                            </li>
                            <li class="sidenav-item">
                                <a href="javascript:void(0)" class="sidenav-link">
                                    <div>Item 2.2.2</div>
                                </a>
                            </li>
                            <li class="sidenav-item">
                                <a href="javascript:void(0)" class="sidenav-link">
                                    <div>Item 2.2.3</div>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="sidenav-item">
                        <a href="javascript:void(0)" class="sidenav-link sidenav-toggle">
                            <div>Item 2.3</div>
                        </a>

                        <ul class="sidenav-menu">
                            <li class="sidenav-item">
                                <a href="javascript:void(0)" class="sidenav-link">
                                    <div>Item 2.3.1</div>
                                </a>
                            </li>
                            <li class="sidenav-item">
                                <a href="javascript:void(0)" class="sidenav-link">
                                    <div>Item 2.3.2</div>
                                </a>
                            </li>
                            <li class="sidenav-item">
                                <a href="javascript:void(0)" class="sidenav-link">
                                    <div>Item 2.3.3</div>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </li>

            <li class="sidenav-divider mb-0"></li>
            <li class="sidenav-header small font-weight-semibold">SECTION HEADER</li>

            <li class="sidenav-item active">
                <a href="javascript:void(0)" class="sidenav-link">
                    <i class="sidenav-icon ion ion-ios-flask"></i>
                    <div>Item 3</div>
                </a>
            </li>
            <li class="sidenav-item">
                <a href="javascript:void(0)" class="sidenav-link">
                    <i class="sidenav-icon ion ion-md-basketball"></i>
                    <div>Item 4</div>
                </a>
            </li>
            <li class="sidenav-item">
                <a href="javascript:void(0)" class="sidenav-link">
                    <i class="sidenav-icon ion ion-ios-bonfire"></i>
                    <div>Item 5</div>
                </a>
            </li>

            <li class="sidenav-divider"></li>

            <li class="sidenav-item">
                <a href="javascript:void(0)" class="sidenav-link">
                    <i class="sidenav-icon ion ion-ios-cafe"></i>
                    <div>Item 6</div>
                </a>
            </li>
            <li class="sidenav-item">
                <a href="javascript:void(0)" class="sidenav-link">
                    <i class="sidenav-icon ion ion-ios-cloud-outline"></i>
                    <div>Item 7</div>
                </a>
            </li>
            <li class="sidenav-item">
                <a href="javascript:void(0)" class="sidenav-link">
                    <i class="sidenav-icon ion ion-md-code"></i>
                    <div>Item 8</div>
                </a>
            </li>
        </ul>
    </div>

    <div class="sidenavs-12 sidenav sidenav-vertical sidenav-dark d-inline-flex ui-bg-cover ui-bg-overlay-container mr-4 mb-4" style="background-image: url('/img/bg/13.jpg'); height: 450px">
        <div class="ui-bg-overlay bg-warning opacity-25"></div>

        <ul class="sidenav-inner">
            <li class="sidenav-block my-1">
                <div class="media align-items-center">
                    <img src="/img/avatars/1-small.png" class="d-block ui-w-50 rounded-circle" alt>
                    <div class="media-body pl-3">
                        <h5 class="sidenav-text mb-1">Mike Greene</h5>
                        <div class="small">
                            <a href="javascript:void(0)" class="sidenav-link">
                                <strong class="sidenav-text">5</strong> new messages</a>
                        </div>
                    </div>
                </div>
            </li>

            <li class="sidenav-divider mt-0"></li>

            <li class="sidenav-item">
                <a href="javascript:void(0)" class="sidenav-link">
                    <i class="sidenav-icon ion ion-md-notifications-outline"></i>
                    <div>Some Long Long Long Long Long Item</div>
                </a>
            </li>
            <li class="sidenav-item">
                <a href="javascript:void(0)" class="sidenav-link sidenav-toggle">
                    <i class="sidenav-icon ion ion-ios-settings"></i>
                    <div>Item 1</div>
                </a>
                <ul class="sidenav-menu">
                    <li class="sidenav-item">
                        <a href="javascript:void(0)" class="sidenav-link">
                            <div>Item 1.1</div>
                        </a>
                    </li>
                    <li class="sidenav-item">
                        <a href="javascript:void(0)" class="sidenav-link">
                            <div>Item 1.2</div>
                        </a>
                    </li>
                    <li class="sidenav-item">
                        <a href="javascript:void(0)" class="sidenav-link">
                            <div>Item 1.3</div>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="sidenav-item">
                <a href="javascript:void(0)" class="sidenav-link sidenav-toggle">
                    <i class="sidenav-icon ion ion-md-paper"></i>
                    <div>Item 2</div>
                </a>

                <ul class="sidenav-menu">
                    <li class="sidenav-item">
                        <a href="javascript:void(0)" class="sidenav-link">
                            <div>Item 2.1</div>
                        </a>
                    </li>
                    <li class="sidenav-item">
                        <a href="javascript:void(0)" class="sidenav-link sidenav-toggle">
                            <div>Item 2.2</div>
                        </a>

                        <ul class="sidenav-menu">
                            <li class="sidenav-item">
                                <a href="javascript:void(0)" class="sidenav-link">
                                    <div>Item 2.2.1</div>
                                </a>
                            </li>
                            <li class="sidenav-item">
                                <a href="javascript:void(0)" class="sidenav-link">
                                    <div>Item 2.2.2</div>
                                </a>
                            </li>
                            <li class="sidenav-item">
                                <a href="javascript:void(0)" class="sidenav-link">
                                    <div>Item 2.2.3</div>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="sidenav-item">
                        <a href="javascript:void(0)" class="sidenav-link sidenav-toggle">
                            <div>Item 2.3</div>
                        </a>

                        <ul class="sidenav-menu">
                            <li class="sidenav-item">
                                <a href="javascript:void(0)" class="sidenav-link">
                                    <div>Item 2.3.1</div>
                                </a>
                            </li>
                            <li class="sidenav-item">
                                <a href="javascript:void(0)" class="sidenav-link">
                                    <div>Item 2.3.2</div>
                                </a>
                            </li>
                            <li class="sidenav-item">
                                <a href="javascript:void(0)" class="sidenav-link">
                                    <div>Item 2.3.3</div>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </li>

            <li class="sidenav-divider mb-0"></li>
            <li class="sidenav-header small font-weight-semibold">SECTION HEADER</li>

            <li class="sidenav-item active">
                <a href="javascript:void(0)" class="sidenav-link">
                    <i class="sidenav-icon ion ion-ios-flask"></i>
                    <div>Item 3</div>
                </a>
            </li>
            <li class="sidenav-item">
                <a href="javascript:void(0)" class="sidenav-link">
                    <i class="sidenav-icon ion ion-md-basketball"></i>
                    <div>Item 4</div>
                </a>
            </li>
            <li class="sidenav-item">
                <a href="javascript:void(0)" class="sidenav-link">
                    <i class="sidenav-icon ion ion-ios-bonfire"></i>
                    <div>Item 5</div>
                </a>
            </li>

            <li class="sidenav-divider"></li>

            <li class="sidenav-item">
                <a href="javascript:void(0)" class="sidenav-link">
                    <i class="sidenav-icon ion ion-ios-cafe"></i>
                    <div>Item 6</div>
                </a>
            </li>
            <li class="sidenav-item">
                <a href="javascript:void(0)" class="sidenav-link">
                    <i class="sidenav-icon ion ion-ios-cloud-outline"></i>
                    <div>Item 7</div>
                </a>
            </li>
            <li class="sidenav-item">
                <a href="javascript:void(0)" class="sidenav-link">
                    <i class="sidenav-icon ion ion-md-code"></i>
                    <div>Item 8</div>
                </a>
            </li>
        </ul>
    </div>

    <div class="sidenavs-12 sidenav sidenav-vertical sidenav-light d-inline-flex ui-bg-cover ui-bg-overlay-container mr-4 mb-4" style="background-image: url('/img/bg/16.jpg'); height: 450px">
        <div class="ui-bg-overlay bg-white opacity-75"></div>

        <ul class="sidenav-inner">
            <li class="sidenav-block my-1">
                <div class="media align-items-center">
                    <img src="/img/avatars/1-small.png" class="d-block ui-w-50 rounded-circle" alt>
                    <div class="media-body pl-3">
                        <h5 class="sidenav-text mb-1">Mike Greene</h5>
                        <div class="small">
                            <a href="javascript:void(0)" class="sidenav-link">
                                <strong class="sidenav-text">5</strong> new messages</a>
                        </div>
                    </div>
                </div>
            </li>

            <li class="sidenav-divider mt-0"></li>

            <li class="sidenav-item">
                <a href="javascript:void(0)" class="sidenav-link">
                    <i class="sidenav-icon ion ion-md-notifications-outline"></i>
                    <div>Some Long Long Long Long Long Item</div>
                </a>
            </li>
            <li class="sidenav-item">
                <a href="javascript:void(0)" class="sidenav-link sidenav-toggle">
                    <i class="sidenav-icon ion ion-ios-settings"></i>
                    <div>Item 1</div>
                </a>
                <ul class="sidenav-menu">
                    <li class="sidenav-item">
                        <a href="javascript:void(0)" class="sidenav-link">
                            <div>Item 1.1</div>
                        </a>
                    </li>
                    <li class="sidenav-item">
                        <a href="javascript:void(0)" class="sidenav-link">
                            <div>Item 1.2</div>
                        </a>
                    </li>
                    <li class="sidenav-item">
                        <a href="javascript:void(0)" class="sidenav-link">
                            <div>Item 1.3</div>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="sidenav-item">
                <a href="javascript:void(0)" class="sidenav-link sidenav-toggle">
                    <i class="sidenav-icon ion ion-md-paper"></i>
                    <div>Item 2</div>
                </a>

                <ul class="sidenav-menu">
                    <li class="sidenav-item">
                        <a href="javascript:void(0)" class="sidenav-link">
                            <div>Item 2.1</div>
                        </a>
                    </li>
                    <li class="sidenav-item">
                        <a href="javascript:void(0)" class="sidenav-link sidenav-toggle">
                            <div>Item 2.2</div>
                        </a>

                        <ul class="sidenav-menu">
                            <li class="sidenav-item">
                                <a href="javascript:void(0)" class="sidenav-link">
                                    <div>Item 2.2.1</div>
                                </a>
                            </li>
                            <li class="sidenav-item">
                                <a href="javascript:void(0)" class="sidenav-link">
                                    <div>Item 2.2.2</div>
                                </a>
                            </li>
                            <li class="sidenav-item">
                                <a href="javascript:void(0)" class="sidenav-link">
                                    <div>Item 2.2.3</div>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="sidenav-item">
                        <a href="javascript:void(0)" class="sidenav-link sidenav-toggle">
                            <div>Item 2.3</div>
                        </a>

                        <ul class="sidenav-menu">
                            <li class="sidenav-item">
                                <a href="javascript:void(0)" class="sidenav-link">
                                    <div>Item 2.3.1</div>
                                </a>
                            </li>
                            <li class="sidenav-item">
                                <a href="javascript:void(0)" class="sidenav-link">
                                    <div>Item 2.3.2</div>
                                </a>
                            </li>
                            <li class="sidenav-item">
                                <a href="javascript:void(0)" class="sidenav-link">
                                    <div>Item 2.3.3</div>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </li>

            <li class="sidenav-divider mb-0"></li>
            <li class="sidenav-header small font-weight-semibold">SECTION HEADER</li>

            <li class="sidenav-item active">
                <a href="javascript:void(0)" class="sidenav-link">
                    <i class="sidenav-icon ion ion-ios-flask"></i>
                    <div>Item 3</div>
                </a>
            </li>
            <li class="sidenav-item">
                <a href="javascript:void(0)" class="sidenav-link">
                    <i class="sidenav-icon ion ion-md-basketball"></i>
                    <div>Item 4</div>
                </a>
            </li>
            <li class="sidenav-item">
                <a href="javascript:void(0)" class="sidenav-link">
                    <i class="sidenav-icon ion ion-ios-bonfire"></i>
                    <div>Item 5</div>
                </a>
            </li>

            <li class="sidenav-divider"></li>

            <li class="sidenav-item">
                <a href="javascript:void(0)" class="sidenav-link">
                    <i class="sidenav-icon ion ion-ios-cafe"></i>
                    <div>Item 6</div>
                </a>
            </li>
            <li class="sidenav-item">
                <a href="javascript:void(0)" class="sidenav-link">
                    <i class="sidenav-icon ion ion-ios-cloud-outline"></i>
                    <div>Item 7</div>
                </a>
            </li>
            <li class="sidenav-item">
                <a href="javascript:void(0)" class="sidenav-link">
                    <i class="sidenav-icon ion ion-md-code"></i>
                    <div>Item 8</div>
                </a>
            </li>
        </ul>
    </div>
@endsection