<div class="ui-block">
    <h3 class="ui-block-heading">Bootstrap Select</h3>
    <a target="_blank" href="https://github.com/silviomoreto/bootstrap-select" class="ui-block-description">https://github.com/silviomoreto/bootstrap-select</a>

    <samp class="cui-example-code-static">
        &lt;link rel="stylesheet" href="&#123;&#123; mix('/vendor/libs/bootstrap-select/bootstrap-select.css') &#125;&#125;"&gt;
        &lt;script src="&#123;&#123; mix('/vendor/libs/bootstrap-select/bootstrap-select.js') &#125;&#125;"&gt;&lt;/script&gt;
    </samp>

    <h4 class="ui-block-heading">Examples</h4>

    <div class="cui-example cui-example-vertical-spacing">
        <select class="selectpicker" data-style="btn-default">
            <option>Mustard</option>
            <option>Ketchup</option>
            <option>Relish</option>
        </select>
        <br>

        <select class="selectpicker" data-style="btn-default">
            <optgroup label="Picnic">
                <option>Mustard</option>
                <option>Ketchup</option>
                <option>Relish</option>
            </optgroup>
            <optgroup label="Camping">
                <option>Tent</option>
                <option>Flashlight</option>
                <option>Toilet Paper</option>
            </optgroup>
        </select>
        <br>

        <select class="selectpicker" data-style="btn-default" multiple data-icon-base="ion" data-tick-icon="ion-md-checkmark">
            <option>Mustard</option>
            <option>Ketchup</option>
            <option>Relish</option>
        </select>
        <br>

        <select class="selectpicker" data-style="btn-default" data-live-search="true">
            <option data-tokens="ketchup mustard">Hot Dog, Fries and a Soda</option>
            <option data-tokens="mustard">Burger, Shake and a Smile</option>
            <option data-tokens="frosting">Sugar, Spice and all things nice</option>
        </select>
        <br>

        <select class="selectpicker show-tick" data-style="btn-default" data-icon-base="ion" data-tick-icon="ion-md-checkmark">
            <option>Mustard</option>
            <option>Ketchup</option>
            <option>Relish</option>
        </select>
        <br>

        <select class="selectpicker show-tick" data-style="btn-default" data-icon-base="ion" data-tick-icon="ion-md-checkmark">
            <option data-icon="ion-md-color-fill">Mustard</option>
            <option data-icon="ion-md-cafe">Ketchup</option>
            <option data-icon="ion-md-settings">Relish</option>
        </select>
        <br>

        <select class="selectpicker" data-style="btn-default" data-show-subtext="true">
            <option data-subtext="French's">Mustard</option>
            <option data-subtext="Heinz">Ketchup</option>
            <option data-subtext="Sweet">Relish</option>
        </select>
        <br>

        <div class="row">
            <div class="col-sm-4 mb-3">
                <select class="selectpicker" data-style="btn-primary">
                    <option>Mustard</option>
                    <option>Ketchup</option>
                    <option>Relish</option>
                </select>
            </div>
            <div class="col-sm-4 mb-3">
                <select class="selectpicker" data-style="btn-success">
                    <option>Mustard</option>
                    <option>Ketchup</option>
                    <option>Relish</option>
                </select>
            </div>
            <div class="col-sm-4 mb-3">
                <select class="selectpicker" data-style="btn-warning">
                    <option>Mustard</option>
                    <option>Ketchup</option>
                    <option>Relish</option>
                </select>
            </div>
        </div>

        <!-- Javascript -->
        <script>
            $(function () {
                $('.selectpicker').selectpicker();
            });
        </script>
        <!-- / Javascript -->
    </div>
</div>
