@extends('layouts.layout-2')

@section('scripts')
    <script src="{{ asset('assets/js/ui_tooltips.js') }}"></script>
@endsection

@section('content')
    <h4 class="font-weight-bold py-3 mb-4">
        <span class="text-muted font-weight-light">UI elements /</span> Tooltips and popovers
    </h4>

    <div class="card mb-4">
        <h6 class="card-header">
            Tooltips
        </h6>
        <div class="card-body">
            <div class="demo-inline-spacing tooltip-demo">
                <button type="button" class="btn btn-default" data-toggle="tooltip" data-placement="right" title="Tooltip on right">Right</button>
                <button type="button" class="btn btn-default" data-toggle="tooltip" data-placement="top" title="Tooltip on top">Top</button>
                <button type="button" class="btn btn-default" data-toggle="tooltip" data-placement="bottom" title="Tooltip on bottom">Bottom</button>
                <button type="button" class="btn btn-default" data-toggle="tooltip" data-placement="left" title="Tooltip on left">Left</button>
            </div>
        </div>
        <hr class="m-0">
        <div class="card-body">
            <div class="text-light small font-weight-semibold mb-3">Variants</div>

            <div class="demo-inline-spacing tooltip-demo">
                <button type="button" class="btn btn-default" data-toggle="tooltip" data-placement="top" data-state="primary" title="Primary tooltip">Primary</button>
                <button type="button" class="btn btn-default" data-toggle="tooltip" data-placement="bottom" data-state="secondary" title="Secondary tooltip">Secondary</button>
                <button type="button" class="btn btn-default" data-toggle="tooltip" data-placement="right" data-state="success" title="Success tooltip">Success</button>
                <button type="button" class="btn btn-default" data-toggle="tooltip" data-placement="top" data-state="info" title="Info tooltip">Info</button>
                <button type="button" class="btn btn-default" data-toggle="tooltip" data-placement="bottom" data-state="warning" title="Warning tooltip">Warning</button>
                <button type="button" class="btn btn-default" data-toggle="tooltip" data-placement="left" data-state="danger" title="Danger tooltip">Danger</button>
                <button type="button" class="btn btn-default" data-toggle="tooltip" data-placement="top" data-state="dark" title="Dark tooltip">Dark</button>
            </div>
        </div>
    </div>

    <div class="card mb-4">
        <h6 class="card-header">
            Popovers
        </h6>
        <div class="card-body">
            <div class="demo-inline-spacing popover-demo">
                <button type="button" class="btn btn-default" data-toggle="popover" data-placement="right" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus." title="Popover title">Popover on right</button>
                <button type="button" class="btn btn-default" data-toggle="popover" data-placement="top" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus." title="Popover title">Popover on top</button>
                <button type="button" class="btn btn-default" data-toggle="popover" data-placement="bottom" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus." title="Popover title">Popover on bottom</button>
                <button type="button" class="btn btn-default" data-toggle="popover" data-placement="left" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus." title="Popover title">Popover on left</button>
            </div>
        </div>
        <hr class="m-0">
        <div class="card-body">
            <div class="text-light small font-weight-semibold mb-3">Variants</div>

            <div class="demo-inline-spacing popover-demo">
                <button type="button" class="btn btn-default" data-toggle="popover" data-placement="right" data-state="primary" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus." title="Popover title">Primary</button>
                <button type="button" class="btn btn-default" data-toggle="popover" data-placement="top" data-state="success" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus." title="Popover title">Success</button>
                <button type="button" class="btn btn-default" data-toggle="popover" data-placement="bottom" data-state="info" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus." title="Popover title">Info</button>
                <button type="button" class="btn btn-default" data-toggle="popover" data-placement="left" data-state="warning" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus." title="Popover title">Warning</button>
                <button type="button" class="btn btn-default" data-toggle="popover" data-placement="top" data-state="danger" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus." title="Popover title">Danger</button>
                <button type="button" class="btn btn-default" data-toggle="popover" data-placement="top" data-state="dark" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus." title="Popover title">Dark</button>
            </div>
        </div>
    </div>
@endsection