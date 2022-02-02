@extends('web.layout')



@push('styles')
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/bootstrap.min.css')}}">

    <link rel="stylesheet" href="{{asset('assets/css/waves.min.css')}}" type="text/css" media="all">

    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/feather.css')}}">

    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/themify-icons.css')}}">

    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/icofont.css')}}">

    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/font-awesome.min.css')}}">

    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/jquery.steps.css')}}">

    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/pages.css')}}">
@endpush

@section('content')
                                    <div class="row">
                                        <div class="col-sm-12">

                                            <div class="card">
                                                <div class="card-header">
                                                    <h5>Usability Evaluation Project</h5>
                                                </div>
                                                <div class="card-block">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div id="wizard">
                                                                <section>
                                                                    <form class="wizard-form" id="example-advanced-form"
                                                                          action="#">
                                                                        <h3> General Info </h3>
                                                                        <fieldset>
                                                                            <div class="form-group row">
                                                                                <div class="col-md-4 col-lg-3">
                                                                                    <label for="respResearcher"
                                                                                           class="block">Responsible Researcher*:
                                                                                        </label>
                                                                                </div>
                                                                                <div class="col-md-8 col-lg-9">
                                                                                    <input id="respResearcher"
                                                                                           name="userName" type="text"
                                                                                           class="required form-control">
                                                                                </div>
                                                                            </div>
                                                                            <div class="form-group row">
                                                                                <div class="col-md-4 col-lg-3">
                                                                                    <label for="languageEval" class="block">Language to be evaluated*:
                                                                                        </label>
                                                                                </div>
                                                                                <div class="col-md-8 col-lg-9">
                                                                                    <input id="laguageEval" name="languageEval"
                                                                                           type="text"
                                                                                           class="required form-control">
                                                                                </div>
                                                                            </div>
                                                                            <div class="form-group row">
                                                                                <div class="col-md-4 col-lg-2">
                                                                                    <label for="evalObj"
                                                                                           class="block">Evaluation Objective*:</label>
                                                                                </div>
                                                                                <div class="col-md-8 col-lg-10">
                                                                                    <input id="evalObj"
                                                                                           name="evalObj"
                                                                                           class="form-control required">
                                                                                </div>
                                                                            </div>
                                                                            <div class="form-group row">
                                                                                <div class="col-md-4 col-lg-2">
                                                                                    <label for="dateStart"
                                                                                           class="block">Start date*:</label>
                                                                                </div>
                                                                                <div class="col-md-6 col-lg-2">
                                                                                    <input id="dateStart" name="dateStart"
                                                                                           class="form-control  required" type="date">
                                                                                </div>
                                                                                <div class="col-md-4 col-lg-2">
                                                                                    <label for="dateStart"
                                                                                           class="block">End date*:</label>
                                                                                </div>
                                                                                <div class="col-md-6 col-lg-2">
                                                                                    <input id="dateEnd" name="dateEnd"
                                                                                           class="form-control  required" type="date">
                                                                                </div>
                                                                            </div>
                                                                            <div class="form-group row">
                                                                                <div class="col-md-4 col-lg-3">
                                                                                    <label for="inst"
                                                                                           class="block">Institution or Company*:</label>
                                                                                </div>
                                                                                <div class="col-md-8 col-lg-9">
                                                                                    <input id="inst"
                                                                                           name="inst"
                                                                                           class="form-control required">
                                                                                </div>
                                                                            </div>
                                                                            <div class="form-group row">
                                                                                <div class="col-md-4 col-lg-3">
                                                                                    <label
                                                                                           class="block">DSL Type to be evaluated*:</label>
                                                                                </div>
                                                                                <div class="col-md-8 col-lg-9">
                                                                                    <div class="form-radio">
                                                                                            <div class="radio radiofill radio-primary radio-inline">
                                                                                                <label>
                                                                                                    <input class="radiofill" type="radio" id="dsl" name="member" value="textDsl" required="required">
                                                                                                    <i class="helper"></i>DSL Textual
                                                                                                </label>
                                                                                            </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </fieldset>
                                                                        <h3> General information </h3>
                                                                        <fieldset>
                                                                            <div class="form-group row">
                                                                                <div class="col-md-4 col-lg-2">
                                                                                    <label for="name-2" class="block">First
                                                                                        name *</label>
                                                                                </div>
                                                                                <div class="col-md-8 col-lg-10">
                                                                                    <input id="name-2" name="name"
                                                                                           type="text"
                                                                                           class="form-control required">
                                                                                </div>
                                                                            </div>
                                                                            <div class="form-group row">
                                                                                <div class="col-md-4 col-lg-2">
                                                                                    <label for="surname-2"
                                                                                           class="block">Last name
                                                                                        *</label>
                                                                                </div>
                                                                                <div class="col-md-8 col-lg-10">
                                                                                    <input id="surname-2" name="surname"
                                                                                           type="text"
                                                                                           class="form-control required">
                                                                                </div>
                                                                            </div>
                                                                            <div class="form-group row">
                                                                                <div class="col-md-4 col-lg-2">
                                                                                    <label for="phone-2" class="block">Phone
                                                                                        #</label>
                                                                                </div>
                                                                                <div class="col-md-8 col-lg-10">
                                                                                    <input id="phone-2" name="phone"
                                                                                           type="number"
                                                                                           class="form-control required phone">
                                                                                </div>
                                                                            </div>
                                                                            <div class="form-group row">
                                                                                <div class="col-md-4 col-lg-2">
                                                                                    <label for="date" class="block">Date
                                                                                        Of Birth</label>
                                                                                </div>
                                                                                <div class="col-md-8 col-lg-10">
                                                                                    <input id="date"
                                                                                           name="Date Of Birth"
                                                                                           type="text"
                                                                                           class="form-control required date-control">
                                                                                </div>
                                                                            </div>
                                                                            <div class="form-group row">
                                                                                <div class="col-md-4 col-lg-2">Select
                                                                                    Country
                                                                                </div>
                                                                                <div class="col-md-8 col-lg-10">
                                                                                    <select
                                                                                        class="form-control required">
                                                                                        <option>Select State</option>
                                                                                        <option>Gujarat</option>
                                                                                        <option>Kerala</option>
                                                                                        <option>Manipur</option>
                                                                                        <option>Tripura</option>
                                                                                        <option>Sikkim</option>
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                        </fieldset>
                                                                        <h3> Education </h3>
                                                                        <fieldset>
                                                                            <div class="form-group row">
                                                                                <div class="col-md-4 col-lg-2">
                                                                                    <label for="University-2"
                                                                                           class="block">University</label>
                                                                                </div>
                                                                                <div class="col-md-8 col-lg-10">
                                                                                    <input id="University-2"
                                                                                           name="University" type="text"
                                                                                           class="form-control required">
                                                                                </div>
                                                                            </div>
                                                                            <div class="form-group row">
                                                                                <div class="col-md-4 col-lg-2">
                                                                                    <label for="Country-2"
                                                                                           class="block">Country</label>
                                                                                </div>
                                                                                <div class="col-md-8 col-lg-10">
                                                                                    <input id="Country-2" name="Country"
                                                                                           type="text"
                                                                                           class="form-control required">
                                                                                </div>
                                                                            </div>
                                                                            <div class="form-group row">
                                                                                <div class="col-md-4 col-lg-2">
                                                                                    <label for="Degreelevel-2"
                                                                                           class="block">Degree level
                                                                                        #</label>
                                                                                </div>
                                                                                <div class="col-md-8 col-lg-10">
                                                                                    <input id="Degreelevel-2"
                                                                                           name="Degree level"
                                                                                           type="text"
                                                                                           class="form-control required phone">
                                                                                </div>
                                                                            </div>
                                                                            <div class="form-group row">
                                                                                <div class="col-md-4 col-lg-2">
                                                                                    <label for="datejoin" class="block">Date
                                                                                        Join</label>
                                                                                </div>
                                                                                <div class="col-md-8 col-lg-10">
                                                                                    <input id="datejoin"
                                                                                           name="Date Of Birth"
                                                                                           type="text"
                                                                                           class="form-control required">
                                                                                </div>
                                                                            </div>
                                                                        </fieldset>
                                                                        <h3> Work experience </h3>
                                                                        <fieldset>
                                                                            <div class="form-group row">
                                                                                <div class="col-md-4 col-lg-2">
                                                                                    <label for="Company-2"
                                                                                           class="block">Company:</label>
                                                                                </div>
                                                                                <div class="col-md-8 col-lg-10">
                                                                                    <input id="Company-2"
                                                                                           name="Company:" type="text"
                                                                                           class="form-control required">
                                                                                </div>
                                                                            </div>
                                                                            <div class="form-group row">
                                                                                <div class="col-md-4 col-lg-2">
                                                                                    <label for="CountryW-2"
                                                                                           class="block">Country</label>
                                                                                </div>
                                                                                <div class="col-md-8 col-lg-10">
                                                                                    <input id="CountryW-2"
                                                                                           name="Country" type="text"
                                                                                           class="form-control required">
                                                                                </div>
                                                                            </div>
                                                                            <div class="form-group row">
                                                                                <div class="col-md-4 col-lg-2">
                                                                                    <label for="Position-2"
                                                                                           class="block">Position</label>
                                                                                </div>
                                                                                <div class="col-md-8 col-lg-10">
                                                                                    <input id="Position-2"
                                                                                           name="Position" type="text"
                                                                                           class="form-control required">
                                                                                </div>
                                                                            </div>
                                                                        </fieldset>
                                                                    </form>
                                                                </section>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
@endsection


@push('scripts')
<script type="ce2668daaac54a74e9f6cdff-text/javascript" src="{{asset('assets/js/jquery.min.js')}}"></script>
<script type="ce2668daaac54a74e9f6cdff-text/javascript" src="{{asset('assets/js/jquery-ui.min.js')}}"></script>
<script type="ce2668daaac54a74e9f6cdff-text/javascript" src="{{asset('assets/js/popper.min.js')}}"></script>
<script type="ce2668daaac54a74e9f6cdff-text/javascript" src="{{asset('assets/js/bootstrap.min.js')}}"></script>

<script src="{{asset('assets/js/waves.min.js')}}" type="ce2668daaac54a74e9f6cdff-text/javascript"></script>

<script type="ce2668daaac54a74e9f6cdff-text/javascript" src="{{asset('assets/js/jquery.slimscroll.js')}}"></script>

<script type="ce2668daaac54a74e9f6cdff-text/javascript" src="{{asset('assets/js/modernizr.js')}}"></script>
<script type="ce2668daaac54a74e9f6cdff-text/javascript" src="{{asset('assets/js/css-scrollbars.js')}}"></script>

<script src="{{asset('assets/js/jquery.cookie.js')}}" type="ce2668daaac54a74e9f6cdff-text/javascript"></script>
<script src="{{asset('assets/js/jquery.steps.js')}}" type="ce2668daaac54a74e9f6cdff-text/javascript"></script>
<script src="{{asset('assets/js/jquery.validate.js')}}" type="ce2668daaac54a74e9f6cdff-text/javascript"></script>

<script src="{{asset('assets/js/underscore-min.js')}}" type="ce2668daaac54a74e9f6cdff-text/javascript"></script>
<script src="{{asset('assets/js/moment.min.js')}}" type="ce2668daaac54a74e9f6cdff-text/javascript"></script>
<script type="ce2668daaac54a74e9f6cdff-text/javascript" src="{{asset('assets/js/validate.js')}}"></script>


<script src="{{asset('assets/js/form-wizard.js')}}" type="ce2668daaac54a74e9f6cdff-text/javascript"></script>
<script src="{{asset('assets/js/pcoded.min.js')}}" type="ce2668daaac54a74e9f6cdff-text/javascript"></script>
<script src="{{asset('assets/js/vertical-layout.min.js')}}" type="ce2668daaac54a74e9f6cdff-text/javascript"></script>
<script src="{{asset('assets/js/jquery.mcustomscrollbar.concat.min.js')}}"
        type="ce2668daaac54a74e9f6cdff-text/javascript"></script>
<script type="ce2668daaac54a74e9f6cdff-text/javascript" src="{{asset('assets/js/script.js')}}"></script>
<script src="{{asset('assets/js/rocket-loader.min.js')}}" data-cf-settings="ce2668daaac54a74e9f6cdff-|49"
        defer=""></script>
@endpush
