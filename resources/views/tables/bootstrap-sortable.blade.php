@extends('layouts.layout-2')

@section('styles')
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/bootstrap-sortable/bootstrap-sortable.css') }}">
@endsection

@section('scripts')
    <!-- Dependencies -->
    <script src="{{ asset('assets/vendor/libs/bootstrap-sortable/bootstrap-sortable.js') }}"></script>
@endsection

@section('content')
    <h4 class="font-weight-bold py-3 mb-4">
        <span class="text-muted font-weight-light">Tables /</span> Bootstrap Sortable
    </h4>

    <div class="table-responsive">
        <table class="table table-bordered table-striped sortable">
            <thead>
                <tr>
                    <th style="width: 20%; vertical-align: middle;" rowspan="2" class="az" data-defaultsign="nospan" data-defaultsort="asc">
                        <i class="ion ion-ios-navigate"></i>&nbsp; Name</th>
                    <th colspan="4" data-mainsort="3" style="text-align: center;">Results</th>
                    <th data-defaultsort="disabled"></th>
                </tr>
                <tr>
                    <th style="width: 20%" colspan="2" data-mainsort="1" data-firstsort="desc">Round 1</th>
                    <th style="width: 20%">Round 2</th>
                    <th style="width: 20%">Total</th>
                    <th style="width: 20%" data-defaultsign="month">Date</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Jack Jackson</td>
                    <td>30.51</td>
                    <td>17.77</td>
                    <td>14.99</td>
                    <td>63.27</td>
                    <td data-dateformat="DD-MM-YYYY">04-07-2013</td>
                </tr>
                <tr>
                    <td class="sorted">Steven White</td>
                    <td>6.21</td>
                    <td>67.31</td>
                    <td>84.32</td>
                    <td>157.84</td>
                    <td data-dateformat="DD-MM-YYYY">14-11-2016</td>
                </tr>
                <tr>
                    <td class="sorted">Peter White</td>
                    <td>15.53</td>
                    <td>7.54</td>
                    <td>37.36</td>
                    <td>60.43</td>
                    <td data-dateformat="DD-MM-YYYY">25-11-2012</td>
                </tr>
                <tr>
                    <td class="sorted">Steven Spielberg</td>
                    <td>0.25</td>
                    <td>7.74</td>
                    <td>15.19</td>
                    <td>23.18</td>
                    <td data-dateformat="DD-MM-YYYY">14-12-2001</td>
                </tr>
                <tr>
                    <td class="sorted">Frank White</td>
                    <td>24.81</td>
                    <td>5.02</td>
                    <td>18.1</td>
                    <td>47.93</td>
                    <td data-dateformat="DD-MM-YYYY">11.05.2016</td>
                </tr>
                <tr>
                    <td class="sorted">Peter Jackson</td>
                    <td>25.54</td>
                    <td>26.32</td>
                    <td>5.45</td>
                    <td>57.31</td>
                    <td data-dateformat="DD-MM-YYYY">09.04.2003</td>
                </tr>
            </tbody>
        </table>
    </div>
@endsection