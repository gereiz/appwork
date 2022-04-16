<div class="ui-block">
    <h3 class="ui-block-heading">Switchers</h3>

    <h4 class="ui-block-heading">Example</h4>

    <div class="cui-example">
        <label class="switcher">
            <input type="checkbox" class="switcher-input">
            <span class="switcher-indicator">
                <span class="switcher-yes"></span>
                <span class="switcher-no"></span>
            </span>
            <span class="switcher-label">Default</span>
        </label>
    </div>

    <h4 class="ui-block-heading">With icon</h4>

    <div class="cui-example">
        <label class="switcher">
            <input type="checkbox" class="switcher-input">
            <span class="switcher-indicator">
                <span class="switcher-yes"><span class="ion ion-md-checkmark"></span></span>
                <span class="switcher-no"><span class="ion ion-md-close"></span></span>
            </span>
            <span class="switcher-label">With icon</span>
        </label>
    </div>

    <h4 class="ui-block-heading">Square</h4>

    <div class="cui-example">
        <label class="switcher switcher-square">
            <input type="checkbox" class="switcher-input">
            <span class="switcher-indicator">
                <span class="switcher-yes"></span>
                <span class="switcher-no"></span>
            </span>
            <span class="switcher-label">Square</span>
        </label>
    </div>

    <h4 class="ui-block-heading">Sizes</h4>

    <div class="cui-example cui-example-vertical-spacing-sm">
        <label class="switcher switcher-sm">
            <input type="checkbox" class="switcher-input">
            <span class="switcher-indicator">
                <span class="switcher-yes"><span class="ion ion-md-checkmark"></span></span>
                <span class="switcher-no"><span class="ion ion-md-close"></span></span>
            </span>
            <span class="switcher-label">Small</span>
        </label>

        <br>

        <label class="switcher switcher-lg">
            <input type="checkbox" class="switcher-input">
            <span class="switcher-indicator">
                <span class="switcher-yes"><span class="ion ion-md-checkmark"></span></span>
                <span class="switcher-no"><span class="ion ion-md-close"></span></span>
            </span>
            <span class="switcher-label">Large</span>
        </label>
    </div>

    <h4 class="ui-block-heading">Variations</h4>

    <div class="cui-example cui-example-inline-spacing">
        <label class="switcher switcher-success">
            <input type="checkbox" class="switcher-input" checked>
            <span class="switcher-indicator">
                <span class="switcher-yes"><span class="ion ion-md-checkmark"></span></span>
                <span class="switcher-no"><span class="ion ion-md-close"></span></span>
            </span>
            <span class="switcher-label">Success</span>
        </label>

        <label class="switcher switcher-info">
            <input type="checkbox" class="switcher-input" checked>
            <span class="switcher-indicator">
                <span class="switcher-yes"><span class="ion ion-md-checkmark"></span></span>
                <span class="switcher-no"><span class="ion ion-md-close"></span></span>
            </span>
            <span class="switcher-label">Info</span>
        </label>

        <label class="switcher switcher-warning">
            <input type="checkbox" class="switcher-input" checked>
            <span class="switcher-indicator">
                <span class="switcher-yes"><span class="ion ion-md-checkmark"></span></span>
                <span class="switcher-no"><span class="ion ion-md-close"></span></span>
            </span>
            <span class="switcher-label">Warning</span>
        </label>

        <label class="switcher switcher-danger">
            <input type="checkbox" class="switcher-input" checked>
            <span class="switcher-indicator">
                <span class="switcher-yes"><span class="ion ion-md-checkmark"></span></span>
                <span class="switcher-no"><span class="ion ion-md-close"></span></span>
            </span>
            <span class="switcher-label">Danger</span>
        </label>

        <label class="switcher switcher-secondary">
            <input type="checkbox" class="switcher-input" checked>
            <span class="switcher-indicator">
                <span class="switcher-yes"><span class="ion ion-md-checkmark"></span></span>
                <span class="switcher-no"><span class="ion ion-md-close"></span></span>
            </span>
            <span class="switcher-label">Secondary</span>
        </label>

        <label class="switcher switcher-dark">
            <input type="checkbox" class="switcher-input" checked>
            <span class="switcher-indicator">
                <span class="switcher-yes"><span class="ion ion-md-checkmark"></span></span>
                <span class="switcher-no"><span class="ion ion-md-close"></span></span>
            </span>
            <span class="switcher-label">Dark</span>
        </label>
    </div>

    <h4 class="ui-block-heading">Disabled</h4>

    <div class="cui-example cui-example-vertical-spacing-sm">
        <div>
            <label class="switcher">
                <input type="checkbox" class="switcher-input" disabled>
                <span class="switcher-indicator">
                    <span class="switcher-yes"></span>
                    <span class="switcher-no"></span>
                </span>
                <span class="switcher-label">Default - OFF</span>
            </label>

            <label class="switcher">
                <input type="checkbox" class="switcher-input" checked disabled>
                <span class="switcher-indicator">
                    <span class="switcher-yes"></span>
                    <span class="switcher-no"></span>
                </span>
                <span class="switcher-label">Default - ON</span>
            </label>
        </div>

        <fieldset disabled>
            <label class="switcher switcher-success">
                <input type="checkbox" class="switcher-input" checked>
                <span class="switcher-indicator">
                    <span class="switcher-yes"></span>
                    <span class="switcher-no"></span>
                </span>
                <span class="switcher-label">Success - ON</span>
            </label>
        </fieldset>
    </div>

    <h4 class="ui-block-heading">Validation states</h4>

    <div class="cui-example cui-example-vertical-spacing-sm">
        <div class="form-group">
            <label class="switcher">
                <input type="checkbox" class="switcher-input is-valid" checked>
                <span class="switcher-indicator">
                    <span class="switcher-yes"></span>
                    <span class="switcher-no"></span>
                </span>
                <span class="switcher-label">Valid</span>
            </label>
        </div>

        <div class="form-group has-error">
            <label class="switcher">
                <input type="checkbox" class="switcher-input is-invalid" checked>
                <span class="switcher-indicator">
                    <span class="switcher-yes"></span>
                    <span class="switcher-no"></span>
                </span>
                <span class="switcher-label">Invalid</span>
            </label>
        </div>
    </div>

    <h4 class="ui-block-heading">Stacked</h4>

    <div class="cui-example">
        <div class="switchers-stacked">
            <label class="switcher">
                <input type="radio" class="switcher-input" name="switchers-stacked-radio" checked>
                <span class="switcher-indicator">
                    <span class="switcher-yes"></span>
                    <span class="switcher-no"></span>
                </span>
                <span class="switcher-label">Option 1</span>
            </label>

            <label class="switcher">
                <input type="radio" class="switcher-input" name="switchers-stacked-radio">
                <span class="switcher-indicator">
                    <span class="switcher-yes"></span>
                    <span class="switcher-no"></span>
                </span>
                <span class="switcher-label">Option 2</span>
            </label>

            <label class="switcher">
                <input type="radio" class="switcher-input" name="switchers-stacked-radio">
                <span class="switcher-indicator">
                    <span class="switcher-yes"></span>
                    <span class="switcher-no"></span>
                </span>
                <span class="switcher-label">Option 3</span>
            </label>
        </div>
    </div>
</div>
