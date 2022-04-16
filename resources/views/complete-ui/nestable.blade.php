<div class="ui-block">
    <h3 class="ui-block-heading">Nestable</h3>
    <a target="_blank" href="https://github.com/dbushell/Nestable" class="ui-block-description">https://github.com/dbushell/Nestable</a>

    <div class="no-ie10" data-name="Nestable"></div>

    <samp class="cui-example-code-static">
        &lt;link rel="stylesheet" href="&#123;&#123; mix('/vendor/libs/nestable/nestable.css') &#125;&#125;"&gt;
        &lt;script src="&#123;&#123; mix('/vendor/libs/nestable/nestable.js') &#125;&#125;"&gt;&lt;/script&gt;
    </samp>

    <h4 class="ui-block-heading">Examples</h4>

    <div class="cui-example cui-example-vertical-spacing">
        <div>
            <div id="nestable-menu" class="mb-4">
                <button type="button" class="btn btn-default btn-sm" data-action="expand-all">Expand All</button>
                <button type="button" class="btn btn-default btn-sm" data-action="collapse-all">Collapse All</button>
            </div>

            <div class="row">
                <div class="col-md-6">

                    <div class="dd" id="nestable">
                        <ol class="dd-list">
                            <li class="dd-item" data-id="1">
                                <div class="dd-handle">Item 1</div>
                            </li>
                            <li class="dd-item" data-id="2">
                                <div class="dd-handle">Item 2</div>
                                <ol class="dd-list">
                                    <li class="dd-item" data-id="3"><div class="dd-handle">Item 3</div></li>
                                    <li class="dd-item" data-id="4"><div class="dd-handle">Item 4</div></li>
                                    <li class="dd-item" data-id="5">
                                        <div class="dd-handle">Item 5</div>
                                        <ol class="dd-list">
                                            <li class="dd-item" data-id="6"><div class="dd-handle">Item 6</div></li>
                                            <li class="dd-item" data-id="7"><div class="dd-handle">Item 7</div></li>
                                            <li class="dd-item" data-id="8"><div class="dd-handle">Item 8</div></li>
                                        </ol>
                                    </li>
                                    <li class="dd-item" data-id="9"><div class="dd-handle">Item 9</div></li>
                                    <li class="dd-item" data-id="10"><div class="dd-handle">Item 10</div></li>
                                </ol>
                            </li>
                            <li class="dd-item" data-id="11">
                                <div class="dd-handle">Item 11</div>
                            </li>
                            <li class="dd-item" data-id="12">
                                <div class="dd-handle">Item 12</div>
                            </li>
                        </ol>
                    </div>

                </div>
                <div class="col-md-6">

                    <div class="dd" id="nestable2">
                        <ol class="dd-list">
                            <li class="dd-item" data-id="13">
                                <div class="dd-handle"><span class="ion ion-ios-heart"></span>&nbsp; Item 13 <span class="label label-primary float-right">13</span></div>
                            </li>
                            <li class="dd-item" data-id="14">
                                <div class="dd-handle"><span class="ion ion-md-paper-plane"></span>&nbsp; Item 14 <span class="label label-primary float-right">14</span></div>
                            </li>
                            <li class="dd-item" data-id="15">
                                <div class="dd-handle"><span class="ion ion-md-globe"></span>&nbsp; Item 15 <span class="label label-primary float-right">15</span></div>
                                <ol class="dd-list">
                                    <li class="dd-item" data-id="16"><div class="dd-handle"><span class="ion ion-md-code"></span>&nbsp; Item 16 <span class="label label-primary float-right">16</span></div></li>
                                    <li class="dd-item" data-id="17"><div class="dd-handle"><span class="ion ion-md-paper"></span>&nbsp; Item 17 <span class="label label-primary float-right">17</span></div></li>
                                    <li class="dd-item" data-id="18"><div class="dd-handle"><span class="ion ion-md-pricetags"></span>&nbsp; Item 18 <span class="label label-primary float-right">18</span></div></li>
                                </ol>
                            </li>
                        </ol>
                    </div>

                </div>
            </div>
        </div>

        <div>
            <div class="row">
                <div class="col-md-6">
                    <textarea id="nestable-output" class="form-control input-sm"></textarea>
                </div>
                <div class="col-md-6">
                    <textarea id="nestable2-output" class="form-control input-sm"></textarea>
                </div>
            </div>
        </div>

        <div>
            <!-- Custom drag handle example -->
            <h6 class="mt-5 mb-4">Custom drag handle example</h6>

            <div class="dd" id="nestable3">
                <ol class="dd-list">
                    <li class="dd-item dd-custom-drag-handle" data-id="13">
                        <div class="dd-handle"><span class="ion ion-md-radio-button-off text-muted"></span></div><div class="dd-content">Item 13</div>
                    </li>
                    <li class="dd-item dd-custom-drag-handle" data-id="14">
                        <div class="dd-handle"><span class="ion ion-md-radio-button-off text-muted"></span></div><div class="dd-content">Item 14</div>
                    </li>
                    <li class="dd-item dd-custom-drag-handle" data-id="15">
                        <div class="dd-handle"><span class="ion ion-md-radio-button-off text-muted"></span></div><div class="dd-content">Item 15</div>
                        <ol class="dd-list">
                            <li class="dd-item dd-custom-drag-handle" data-id="16">
                                <div class="dd-handle"><span class="ion ion-md-radio-button-off text-muted"></span></div><div class="dd-content">Item 16</div>
                            </li>
                            <li class="dd-item dd-custom-drag-handle" data-id="17">
                                <div class="dd-handle"><span class="ion ion-md-radio-button-off text-muted"></span></div><div class="dd-content">Item 17</div>
                            </li>
                            <li class="dd-item dd-custom-drag-handle" data-id="18">
                                <div class="dd-handle"><span class="ion ion-md-radio-button-off text-muted"></span></div><div class="dd-content">Item 18</div>
                            </li>
                        </ol>
                    </li>
                </ol>
            </div>
        </div>

        <!-- Styles -->
        <style type="text/css">
            #nestable2 .dd-handle { background: #f6f6f6; padding: .625rem 1.25rem; }
            #nestable2 button[data-action] { margin-top: .625rem; }
            html:not([dir=rtl]) body:not([dir=rtl]) #nestable2 button[data-action] ~ .dd-handle { padding-left: 2rem; }
            [dir=rtl] #nestable2 button[data-action] ~ .dd-handle { padding-right: 2rem; }

            /* Custom drag handle */

            .dd-custom-drag-handle .dd-handle {
                border: 0;
                float: left;
                margin: 1px;
                font-size: .625rem;
                line-height: 1.25rem;
            }
            .dd-custom-drag-handle .dd-handle > * {
                vertical-align: middle;
            }
            [dir=rtl] .dd-custom-drag-handle .dd-handle {
                float: right;
            }
        </style>
        <!-- / Styles -->

        <!-- Javascript -->
        <script>
            $(function() {
                function updateOutput(e) {
                    var list   = e.length ? e : $(e.target);
                    var output = list.data('output');

                    output.val(window.JSON ? window.JSON.stringify(list.nestable('serialize')) :
                                                                     'JSON browser support required for this demo.');
                };

                $('#nestable').nestable({ group: 1 }).on('change', updateOutput);
                $('#nestable2').nestable({ group: 1 }).on('change', updateOutput);

                // output initial serialised data
                updateOutput($('#nestable').data('output', $('#nestable-output')));
                updateOutput($('#nestable2').data('output', $('#nestable2-output')));

                $('#nestable-menu').on('click', function(e) {
                    var target = $(e.target);
                    var action = target.data('action');

                    if (action === 'expand-all') {
                        $('.dd').nestable('expandAll');
                    }
                    if (action === 'collapse-all') {
                        $('.dd').nestable('collapseAll');
                    }
                });

                $('#nestable3').nestable();
            });
        </script>
        <!-- / Javascript -->
    </div>
</div>
