@extends('layouts.layout-2')

@section('styles')
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/bootstrap-select/bootstrap-select.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/bootstrap-multiselect/bootstrap-multiselect.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/select2/select2.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/bootstrap-tagsinput/bootstrap-tagsinput.css') }}">
@endsection

@section('scripts')
    <!-- Dependencies -->
    <script src="{{ asset('assets/vendor/libs/bootstrap-select/bootstrap-select.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/bootstrap-multiselect/bootstrap-multiselect.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/select2/select2.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/bootstrap-tagsinput/bootstrap-tagsinput.js') }}"></script>
    
    <script src="{{ asset('assets/js/forms_selects.js') }}"></script>
@endsection

@section('content')
    <h4 class="font-weight-bold py-3 mb-4">
        <span class="text-muted font-weight-light">Forms /</span> Selects and tags
    </h4>

    <div class="card mb-4">
        <h6 class="card-header">
            Bootstrap Select
        </h6>
        <div class="card-body demo-vertical-spacing">
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
        </div>
    </div>

    <div class="card mb-4">
        <h6 class="card-header">
            Bootstrap Multiselect
        </h6>
        <div class="card-body">
            <!-- Single -->
            <select id="bs-multiselect-1">
                <option value="1">Option 1</option>
                <option value="2">Option 2</option>
                <option value="3">Option 3</option>
                <option value="4">Option 4</option>
                <option value="5">Option 5</option>
                <option value="6">Option 6</option>
            </select>

            <!-- Multiple -->
            <select id="bs-multiselect-2" multiple>
                <option value="cheese">Cheese</option>
                <option value="tomatoes">Tomatoes</option>
                <option value="mozarella">Mozzarella</option>
                <option value="mushrooms">Mushrooms</option>
                <option value="pepperoni">Pepperoni</option>
                <option value="onions">Onions</option>
            </select>

            <!-- Groups -->
            <select id="bs-multiselect-3" multiple>
                <optgroup label="Group 1">
                    <option value="1-1">Option 1.1</option>
                    <option value="1-2" selected="selected">Option 1.2</option>
                    <option value="1-3" selected="selected">Option 1.3</option>
                </optgroup>
                <optgroup label="Group 2">
                    <option value="2-1">Option 2.1</option>
                    <option value="2-2">Option 2.2</option>
                    <option value="2-3">Option 2.3</option>
                </optgroup>
            </select>
            <br>
            <br>

            <!-- Full -->
            <select id="bs-multiselect-4" multiple>
                <optgroup label="Group 1">
                    <option value="1-1">Option 1.1</option>
                    <option value="1-2" selected="selected">Option 1.2</option>
                    <option value="1-3" selected="selected">Option 1.3</option>
                </optgroup>
                <optgroup label="Group 2">
                    <option value="2-1">Option 2.1</option>
                    <option value="2-2">Option 2.2</option>
                    <option value="2-3">Option 2.3</option>
                </optgroup>
            </select>
        </div>
    </div>

    <div class="card mb-4">
        <h6 class="card-header">
            Select2
        </h6>
        <div class="card-body demo-vertical-spacing">
            <select class="select2-demo form-control" style="width: 100%" data-allow-clear="true">
                <option></option>
                <option value="AK">Alaska</option>
                <option value="HI">Hawaii</option>
                <option value="CA">California</option>
                <option value="NV">Nevada</option>
                <option value="OR">Oregon</option>
                <option value="WA">Washington</option>
                <option value="AZ">Arizona</option>
                <option value="CO">Colorado</option>
                <option value="ID">Idaho</option>
                <option value="MT">Montana</option>
                <option value="NE">Nebraska</option>
                <option value="NM">New Mexico</option>
                <option value="ND">North Dakota</option>
                <option value="UT">Utah</option>
                <option value="WY">Wyoming</option>
                <option value="AL">Alabama</option>
                <option value="AR">Arkansas</option>
                <option value="IL">Illinois</option>
                <option value="IA">Iowa</option>
                <option value="KS">Kansas</option>
                <option value="KY">Kentucky</option>
                <option value="LA">Louisiana</option>
                <option value="MN">Minnesota</option>
                <option value="MS">Mississippi</option>
                <option value="MO">Missouri</option>
                <option value="OK">Oklahoma</option>
                <option value="SD">South Dakota</option>
                <option value="TX">Texas</option>
                <option value="TN">Tennessee</option>
                <option value="WI">Wisconsin</option>
                <option value="CT">Connecticut</option>
                <option value="DE">Delaware</option>
                <option value="FL">Florida</option>
                <option value="GA">Georgia</option>
                <option value="IN">Indiana</option>
                <option value="ME">Maine</option>
                <option value="MD">Maryland</option>
                <option value="MA">Massachusetts</option>
                <option value="MI">Michigan</option>
                <option value="NH">New Hampshire</option>
                <option value="NJ">New Jersey</option>
                <option value="NY">New York</option>
                <option value="NC">North Carolina</option>
                <option value="OH">Ohio</option>
                <option value="PA">Pennsylvania</option>
                <option value="RI">Rhode Island</option>
                <option value="SC">South Carolina</option>
                <option value="VT">Vermont</option>
                <option value="VA">Virginia</option>
                <option value="WV">West Virginia</option>
            </select>

            <!-- Multiple -->

            <select class="select2-demo form-control" multiple style="width: 100%">
                <optgroup label="Alaskan/Hawaiian Time Zone">
                    <option value="AK">Alaska</option>
                    <option value="HI">Hawaii</option>
                </optgroup>
                <optgroup label="Pacific Time Zone">
                    <option value="CA">California</option>
                    <option value="NV">Nevada</option>
                    <option value="OR">Oregon</option>
                    <option value="WA" selected>Washington</option>
                </optgroup>
                <optgroup label="Mountain Time Zone">
                    <option value="AZ">Arizona</option>
                    <option value="CO">Colorado</option>
                    <option value="ID">Idaho</option>
                    <option value="MT">Montana</option>
                    <option value="NE">Nebraska</option>
                    <option value="NM">New Mexico</option>
                    <option value="ND">North Dakota</option>
                    <option value="UT">Utah</option>
                    <option value="WY">Wyoming</option>
                </optgroup>
                <optgroup label="Central Time Zone">
                    <option value="AL">Alabama</option>
                    <option value="AR">Arkansas</option>
                    <option value="IL">Illinois</option>
                    <option value="IA">Iowa</option>
                    <option value="KS">Kansas</option>
                    <option value="KY">Kentucky</option>
                    <option value="LA">Louisiana</option>
                    <option value="MN">Minnesota</option>
                    <option value="MS">Mississippi</option>
                    <option value="MO">Missouri</option>
                    <option value="OK">Oklahoma</option>
                    <option value="SD">South Dakota</option>
                    <option value="TX">Texas</option>
                    <option value="TN">Tennessee</option>
                    <option value="WI">Wisconsin</option>
                </optgroup>
                <optgroup label="Eastern Time Zone">
                    <option value="CT">Connecticut</option>
                    <option value="DE">Delaware</option>
                    <option value="FL">Florida</option>
                    <option value="GA">Georgia</option>
                    <option value="IN">Indiana</option>
                    <option value="ME">Maine</option>
                    <option value="MD">Maryland</option>
                    <option value="MA">Massachusetts</option>
                    <option value="MI">Michigan</option>
                    <option value="NH" selected>New Hampshire</option>
                    <option value="NJ">New Jersey</option>
                    <option value="NY">New York</option>
                    <option value="NC">North Carolina</option>
                    <option value="OH">Ohio</option>
                    <option value="PA">Pennsylvania</option>
                    <option value="RI">Rhode Island</option>
                    <option value="SC">South Carolina</option>
                    <option value="VT">Vermont</option>
                    <option value="VA">Virginia</option>
                    <option value="WV">West Virginia</option>
                </optgroup>
            </select>

            <!-- Disabled -->

            <select class="select2-demo form-control" style="width: 100%" disabled>
                <option value="1">One</option>
                <option value="2" selected>Two</option>
                <option value="3">Three</option>
                <option value="4">Four</option>
            </select>

            <select class="select2-demo form-control" multiple style="width: 100%" disabled>
                <option value="1" selected>One</option>
                <option value="2" selected>Two</option>
                <option value="3">Three</option>
                <option value="4">Four</option>
            </select>

            <!-- Colors -->

            <div class="select2-primary">
                <select class="select2-demo form-control" multiple style="width: 100%">
                    <option value="1" selected>One</option>
                    <option value="2" selected>Two</option>
                    <option value="3">Three</option>
                    <option value="4">Four</option>
                </select>
            </div>

            <div class="select2-secondary">
                <select class="select2-demo form-control" multiple style="width: 100%">
                    <option value="1" selected>One</option>
                    <option value="2" selected>Two</option>
                    <option value="3">Three</option>
                    <option value="4">Four</option>
                </select>
            </div>

            <div class="select2-success">
                <select class="select2-demo form-control" multiple style="width: 100%">
                    <option value="1" selected>One</option>
                    <option value="2" selected>Two</option>
                    <option value="3">Three</option>
                    <option value="4">Four</option>
                </select>
            </div>

            <div class="select2-info">
                <select class="select2-demo form-control" multiple style="width: 100%">
                    <option value="1" selected>One</option>
                    <option value="2" selected>Two</option>
                    <option value="3">Three</option>
                    <option value="4">Four</option>
                </select>
            </div>

            <div class="select2-warning">
                <select class="select2-demo form-control" multiple style="width: 100%">
                    <option value="1" selected>One</option>
                    <option value="2" selected>Two</option>
                    <option value="3">Three</option>
                    <option value="4">Four</option>
                </select>
            </div>

            <div class="select2-danger">
                <select class="select2-demo form-control" multiple style="width: 100%">
                    <option value="1" selected>One</option>
                    <option value="2" selected>Two</option>
                    <option value="3">Three</option>
                    <option value="4">Four</option>
                </select>
            </div>

            <div class="select2-dark">
                <select class="select2-demo form-control" multiple style="width: 100%">
                    <option value="1" selected>One</option>
                    <option value="2" selected>Two</option>
                    <option value="3">Three</option>
                    <option value="4">Four</option>
                </select>
            </div>

            <!-- States -->

            <div class="is-valid">
                <select class="select2-demo form-control" multiple style="width: 100%">
                    <option value="1" selected>One</option>
                    <option value="2" selected>Two</option>
                    <option value="3">Three</option>
                    <option value="4">Four</option>
                </select>
            </div>
            <div class="is-valid">
                <select class="select2-demo form-control" style="width: 100%">
                    <option value="1">One</option>
                    <option value="2" selected>Two</option>
                    <option value="3">Three</option>
                    <option value="4">Four</option>
                </select>
            </div>

            <div class="is-invalid">
                <select class="select2-demo form-control" multiple style="width: 100%">
                    <option value="1" selected>One</option>
                    <option value="2" selected>Two</option>
                    <option value="3">Three</option>
                    <option value="4">Four</option>
                </select>
            </div>
            <div class="is-invalid">
                <select class="select2-demo form-control" style="width: 100%">
                    <option value="1">One</option>
                    <option value="2" selected>Two</option>
                    <option value="3">Three</option>
                    <option value="4">Four</option>
                </select>
            </div>
        </div>
    </div>

    <div class="card mb-4">
        <h6 class="card-header">
            Bootstrap Tagsinput
        </h6>
        <div class="card-body demo-vertical-spacing">
            <input type="text" value="Amsterdam,Washington,Sydney,Beijing,Cairo" data-role="tagsinput" class="form-control">

            <select multiple data-role="tagsinput" class="form-control">
                <option value="Amsterdam">Amsterdam</option>
                <option value="Washington">Washington</option>
                <option value="Sydney">Sydney</option>
                <option value="Beijing">Beijing</option>
                <option value="Cairo">Cairo</option>
            </select>

            <input type="text" class="form-control" id="bs-tagsinput-1">

            <!-- Colors -->

            <input type="text" value="Amsterdam,Washington,Sydney,Beijing,Cairo" class="form-control" id="bs-tagsinput-2">
            <input type="text" value="Amsterdam,Washington,Sydney,Beijing,Cairo" class="form-control" id="bs-tagsinput-3">
            <input type="text" value="Amsterdam,Washington,Sydney,Beijing,Cairo" class="form-control" id="bs-tagsinput-4">
            <input type="text" value="Amsterdam,Washington,Sydney,Beijing,Cairo" class="form-control" id="bs-tagsinput-5">
            <input type="text" value="Amsterdam,Washington,Sydney,Beijing,Cairo" class="form-control" id="bs-tagsinput-6">
            <input type="text" value="Amsterdam,Washington,Sydney,Beijing,Cairo" class="form-control" id="bs-tagsinput-7">
            <input type="text" value="Amsterdam,Washington,Sydney,Beijing,Cairo" class="form-control" id="bs-tagsinput-8">

            <!-- States -->

            <div class="form-group is-valid">
                <input type="text" value="Amsterdam,Washington,Sydney,Beijing,Cairo" data-role="tagsinput" class="form-control">
            </div>
            <div class="form-group is-invalid">
                <input type="text" value="Amsterdam,Washington,Sydney,Beijing,Cairo" data-role="tagsinput" class="form-control">
            </div>
        </div>
    </div>
@endsection