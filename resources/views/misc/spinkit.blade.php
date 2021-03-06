@extends('layouts.layout-2')

@section('styles')
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/spinkit/spinkit.css') }}">
@endsection

@section('content')
    <h4 class="font-weight-bold py-3 mb-4">
        <span class="text-muted font-weight-light">Miscellaneous /</span> SpinKit
    </h4>

    <hr class="container-m-nx border-light mt-0 mb-4">

    <div class="card">
        <div class="card-body demo-vertical-spacing p-5">
            <div class="row">
                <div class="col">
                    <div class="sk-rotating-plane sk-primary"></div>
                </div>
                <div class="col">
                    <div class="sk-double-bounce sk-primary">
                        <div class="sk-child sk-double-bounce1"></div>
                        <div class="sk-child sk-double-bounce2"></div>
                    </div>
                </div>
                <div class="col">
                    <div class="sk-wave sk-primary">
                        <div class="sk-rect sk-rect1"></div>
                        <div class="sk-rect sk-rect2"></div>
                        <div class="sk-rect sk-rect3"></div>
                        <div class="sk-rect sk-rect4"></div>
                        <div class="sk-rect sk-rect5"></div>
                    </div>
                </div>
                <div class="col">
                    <div class="sk-wandering-cubes sk-primary">
                        <div class="sk-cube sk-cube1"></div>
                        <div class="sk-cube sk-cube2"></div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <div class="sk-spinner sk-spinner-pulse sk-primary"></div>
                </div>
                <div class="col">
                    <div class="sk-chasing-dots sk-primary">
                        <div class="sk-child sk-dot1"></div>
                        <div class="sk-child sk-dot2"></div>
                    </div>
                </div>
                <div class="col">
                    <div class="sk-three-bounce sk-primary">
                        <div class="sk-child sk-bounce1"></div>
                        <div class="sk-child sk-bounce2"></div>
                        <div class="sk-child sk-bounce3"></div>
                    </div>
                </div>
                <div class="col">
                    <div class="sk-circle sk-primary">
                        <div class="sk-circle1 sk-child"></div>
                        <div class="sk-circle2 sk-child"></div>
                        <div class="sk-circle3 sk-child"></div>
                        <div class="sk-circle4 sk-child"></div>
                        <div class="sk-circle5 sk-child"></div>
                        <div class="sk-circle6 sk-child"></div>
                        <div class="sk-circle7 sk-child"></div>
                        <div class="sk-circle8 sk-child"></div>
                        <div class="sk-circle9 sk-child"></div>
                        <div class="sk-circle10 sk-child"></div>
                        <div class="sk-circle11 sk-child"></div>
                        <div class="sk-circle12 sk-child"></div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <div class="sk-cube-grid sk-primary">
                        <div class="sk-cube sk-cube1"></div>
                        <div class="sk-cube sk-cube2"></div>
                        <div class="sk-cube sk-cube3"></div>
                        <div class="sk-cube sk-cube4"></div>
                        <div class="sk-cube sk-cube5"></div>
                        <div class="sk-cube sk-cube6"></div>
                        <div class="sk-cube sk-cube7"></div>
                        <div class="sk-cube sk-cube8"></div>
                        <div class="sk-cube sk-cube9"></div>
                    </div>
                </div>
                <div class="col">
                    <div class="sk-fading-circle sk-primary">
                        <div class="sk-circle1 sk-circle"></div>
                        <div class="sk-circle2 sk-circle"></div>
                        <div class="sk-circle3 sk-circle"></div>
                        <div class="sk-circle4 sk-circle"></div>
                        <div class="sk-circle5 sk-circle"></div>
                        <div class="sk-circle6 sk-circle"></div>
                        <div class="sk-circle7 sk-circle"></div>
                        <div class="sk-circle8 sk-circle"></div>
                        <div class="sk-circle9 sk-circle"></div>
                        <div class="sk-circle10 sk-circle"></div>
                        <div class="sk-circle11 sk-circle"></div>
                        <div class="sk-circle12 sk-circle"></div>
                    </div>
                </div>
                <div class="col">
                    <div class="sk-folding-cube sk-primary">
                        <div class="sk-cube1 sk-cube"></div>
                        <div class="sk-cube2 sk-cube"></div>
                        <div class="sk-cube4 sk-cube"></div>
                        <div class="sk-cube3 sk-cube"></div>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection