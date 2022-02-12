@extends('adminlte::page')

@section('New Project', 'Usa-DSL Tool')
@section('adminlte_css')
    <link rel="stylesheet" href="{{asset('vendor/form-wizard/step-form-wizard/css/step-form-wizard-all.css')}}"
          type="text/css" media="screen, projection">
    <link rel="stylesheet"
          href="{{asset('vendor/form-wizard/plugins/mcustom-scrollbar/jquery.mCustomScrollbar.min.css')}}">
    <link rel="stylesheet"
          href="{{asset('vendor/form-wizard/plugins/parsley/parsley.css')}}">
@stop


@section('content_header')
    <h1 class="m-0 ml-3 text-dark">New Project</h1>
@stop

@section('content')


    <style>
        @import url('https://fonts.googleapis.com/css2?family=Barlow:wght@400;500;600&display=swap');

        body {
            font-family: 'Barlow', sans-serif;
        }
    </style>


    <div class="container">
        <div class="row">
            <div class="col-12 col-xs-12 w-50 p-2">
                <form id="eval_register" class="sf-border" action="{{ route('newProject.store') }}" method="post">
                    <fieldset>
                        <legend>Evaluation and Study Types</legend>
                        <div class="row pt-lg-5">
                            <div class="col-lg-6 col-xs-6">
                                <label>Select the usability evaluation type</label>
                                <br>
                                <input type="radio" id="usabilityEval" onclick="javascript:radioSelection();"
                                       name="evalType" value="usabilityEval" data-parsley-group="block0" required  data-parsley-errors-container="radio-errors">
                                <label for="usabilityEval">Usability Evaluation</label>
                                <br>
                                <input type="radio" id="heuristicEval" onclick="javascript:radioSelection();"
                                       name="evalType" value="heuristicEval" data-parsley-group="block0" required data-parsley-errors-container="radio-errors">
                                <label for="heuristicEval">Heuristic Evaluation</label>
                                <div id="radio-errors" style="position:absolute"></div>
                                <div class="form-group pt-lg-5">
                                    <label>Select the empirical method study</label>
                                    <br>
                                    <div id="surveyOp" style="visibility: hidden">
                                        <input id="radioSurvey" type="radio" name="empiricalMethod" value="survey" data-parsley-group="block0" required>
                                        <label>Survey</label>
                                    </div>
                                    <div id="caseStudyOp" style="visibility: hidden">
                                        <input type="radio" name="empiricalMethod" value="caseStudy"data-parsley-group="block0" required>
                                        <label>Case Study</label>
                                        <br>
                                    </div>
                                    <div id="experimentOp" style="visibility: hidden">
                                        <input type="radio" name="empiricalMethod" value="experiment" data-parsley-group="block0" required>
                                        <label>Experiment</label>
                                        <br>
                                    </div>
                                    <div id="quasiExperimentOp" style="visibility: hidden">
                                        <input type="radio" name="empiricalMethod" value="quasiExperiment" data-parsley-group="block0" required>
                                        <label>Quasi-Experiment</label>
                                        <br>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </fieldset>
                    <fieldset>
                        <legend>Study Information</legend>
                        <div class="col-lg-6 col-xs-6">
                            <div class="form-group">
                                <label for="reponsibleResearcher">Responsible researcher</label>
                                <input class="form-control" value="{{Auth::user()->name}} {{Auth::user()->surname}}" type="text" id="reponsibleResearcher" data-parsley-group="block1" required>
                            </div>
                            <div class="form-group">
                                <label for="languageEval">Language to be evaluated</label>
                                <input class="form-control" type="text" id="languageEval" data-parsley-group="block1" required>
                            </div>
                            <div class="form-group">
                                <label for="evalObjective">Evaluation objective</label>
                                <input class="form-control" type="text" id="evalObjective" data-parsley-group="block1" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-3 col-xs-3">
                                <div class="form-group">
                                    <label for="evalDateStart">Date to start</label>
                                    <input class="form-control" name="start_date" value="{{ old('start_date') }}" type="date" id="evalDateStart" data-parsley-group="block1" required>
                                    @if($errors->has('start_date'))
                                        <span class="text-danger">{{ $errors->first('start_date') }}</span>
                                    @endif
                                </div>
                            </div>

                            <div class="col-lg-3 col-xs-3 px-lg-2">
                                <div class="form-group">
                                    <label for="evalDateEnd">Date to end</label>
                                    <input class="form-control"  name="end_date" value="{{ old('end_date') }}" type="date" id="evalDateEnd"  data-parsley-group="block1" required>
                                    @if($errors->has('end_date'))
                                        <span class="text-danger">{{ $errors->first('end_date') }}</span>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-xs-3">
                            <div class="form-group">
                                <label for="institutionComp">Institution or company</label>
                                <input class="form-control" type="text" id="institutionComp" data-parsley-group="block1" required>
                            </div>
                            <div class="form-group">
                                <label for="evalTitle">Evaluation title</label>
                                <input class="form-control" type="text" id="evalTitle" data-parsley-group="block1" required>
                            </div>
                            <div class="form-group">
                                <label> DSL Type to be evaluated</label><br>
                                <label class="radio-inline primary pr-lg-2">
                                    <input type="radio" name="dslType" value="dslTextual" data-parsley-group="block1" required data-parsley-errors-container="#types-errors">
                                    Textual
                                </label>
                                <label class="radio-inline px-lg-2">
                                    <input type="radio" name="dslType" value="dslGraphic" data-parsley-group="block1" required data-parsley-errors-container="#types-errors">
                                    Graphic
                                </label>
                                <label class="radio-inline px-lg-2">
                                    <input type="radio" name="dslType" value="dslBoth" data-parsley-group="block1" required data-parsley-errors-container="#types-errors">
                                    Textual and graphic
                                </label>
                                <div id="types-errors"></div>
                            </div>
                        </div>

                    </fieldset>
                </form>
            </div>
        </div>
    </div>





@stop

@section('adminlte_js')


    <script>
        var sfw;
        $(document).ready(function () {

            if($(window).width > 300){
                sfw = $("#eval_register").stepFormWizard({
                    showNav: 'right',
                    height: 600,
                    showNavNumbers: true,
                    onNext: function (i) {
                        var valid = $("#eval_register").parsley().validate('block' + i);
                        sfw.refresh();
                        return valid;
                    },
                    onFinish: function (i) {
                        var valid = $("#eval_register").parsley().validate();
                        window.open("{{('/planning')}}", false);
                        return valid;

                    },
                });
            } else {
                sfw = $("#eval_register").stepFormWizard({
                    showNav: 'top',
                    height: 'auto',
                    showNavNumbers: true,
                    onNext: function (i) {
                        var valid = $("#eval_register").parsley().validate('block' + i);
                        sfw.refresh();
                        return valid;
                    },
                    onFinish: function (i) {
                        var valid = $("#eval_register").parsley().validate();
                        window.open("{{('/planning')}}", false);
                        return valid;

                    },
                });
            }


        })
        $(document).ready(function () {
            $(".sf-step").mCustomScrollbar({
                theme: "dark-3",
                scrollButtons: {
                    enable: true
                }

            });
        });
    </script>
    <script>
        function radioSelection() {
            if (document.getElementById('usabilityEval').checked) {
                document.getElementById('surveyOp').style.visibility = 'visible';
                document.getElementById('caseStudyOp').style.visibility = 'visible';
                document.getElementById('experimentOp').style.visibility = 'visible';
                document.getElementById('quasiExperimentOp').style.visibility = 'visible';

            } else if (document.getElementById('heuristicEval').checked) {
                document.getElementById('surveyOp').style.visibility = 'visible';
                document.getElementById('caseStudyOp').style.visibility = 'hidden';
                document.getElementById('experimentOp').style.visibility = 'hidden';
                document.getElementById('quasiExperimentOp').style.visibility = 'hidden';
                radioSurvey = document.getElementById('radioSurvey');
                radioSurvey.checked = true;
            };
        }
    </script>
    <script type="text/javascript">jQuery("#eval_register").parsley();</script>
    <script type="text/javascript" src="{{asset('js/main.js')}}"></script>
    <script src="{{asset('vendor/form-wizard/plugins/jquery-2.1.4.min.js')}}"></script>
    <script src="{{asset('vendor/form-wizard/step-form-wizard/js/step-form-wizard.js')}}"></script>
    <script
        src="{{asset('vendor/form-wizard/plugins/mcustom-scrollbar/jquery.mCustomScrollbar.concat.min.js')}}"></script>
    <script src="{{asset('vendor/form-wizard/plugins/parsley/parsley.min.js')}}"></script>
    <script src="{{asset('vendor/form-wizard/plugins/jquery-validation/jquery.validate.min.js')}}"></script>
@stop
