@extends('adminlte::page')

@section('Analysis Phase', 'Usa-DSL Tool')
@section('adminlte_css')
    <link rel="stylesheet" href="{{asset('vendor/form-wizard/step-form-wizard/css/step-form-wizard-all.css')}}"
          type="text/css" media="screen, projection">
    <link rel="stylesheet"
          href="{{asset('vendor/form-wizard/plugins/mcustom-scrollbar/jquery.mCustomScrollbar.min.css')}}">
    <link rel="stylesheet"
          href="{{asset('vendor/form-wizard/plugins/parsley/parsley.css')}}">
@stop


@section('content_header')
    <h1 class="m-0 ml-4 text-dark">Planning Phase</h1>
@stop

@section('content')


    <style>
        @import url('https://fonts.googleapis.com/css2?family=Barlow:wght@400;500;600&display=swap');

        body {
            font-family: 'Barlow', sans-serif;
        }
    </style>

    <div class="row">
        <div class="col-md-12">
                <div class="row">
                    <div class="col-md-12 col-xs-6 w-50 p-3">
                        <form class="col-12" id="analysisPhase" class="sf-border"  method="post">

                            <!--ANALYSE EVALUATOR PROFILE-->
                            <fieldset>
                                <legend>Analyse Evaluator Profile</legend>
                                <div class="col-lg-8 col-xs-6">
                                    <table class="table table-striped table-hover table-responsive-lg">
                                        <thead>
                                        <tr>
                                            <th scope="col">Name</th>
                                            <th class="text-center" scope="col">Profile Questionnaire</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>Maicon Bernardino</td>
                                            <td class="text-center"><button type="button" id="btnModalProfile" class="btn btn-primary" data-toggle="modal" data-target="#profileQuestionnaire"><i class="fas fa-folder-open mr-2"></i>Open</button></td>
                                        </tr>

                                        </tbody>
                                    </table>
                                </div>
                            </fieldset>

                        </form>
                    </div>
                </div>
    </div>


        <!-- Modal -->
        <div class="modal fade" id="profileQuestionnaire" tabindex="-1" role="dialog" aria-labelledby="profileQuestionnaire" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Maicon Bernardino da Silveira</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <h3 class="card-subtitle text-center">Profile Questionnaire</h3>

                        <div class="pt-5">
                            <div class="pt-2">
                                <p>1. Have you ever used a Domain Specific Language (DSL)?</p>
                                <div class="form-group">

                                    <label class="radio-inline primary pr-lg-2">
                                        <input name="option"  type="radio"  disabled="true" value="yes" checked="checked">
                                        Yes
                                    </label>

                                    <label class="radio-inline primary px-lg-2">
                                        <input name="option" type="radio" aria-selected="true"  disabled="true" value="no">
                                        No
                                    </label>
                                </div>
                            </div>
                            <div class="pt-2">
                                <p>2. Have you ever created a Domain Specific Language (DSL)?*</p>
                                <div class="form-group">

                                    <label class="radio-inline primary pr-lg-2">
                                        <input name="option"  type="radio"  disabled="true" value="yes" checked="checked">
                                        Yes
                                    </label>

                                    <label class="radio-inline primary px-lg-2">
                                        <input name="option" type="radio" aria-selected="true"  disabled="true" value="no">
                                        No
                                    </label>
                                </div>
                            </div>
                            <div class="pt-2">
                                <p>3. What empirical studies have you participated in? *</p>
                                <div class="form-group">

                                    <label class="checkbox primary pr-lg-2">
                                        <input name="studies"  type="checkbox"  disabled="true" value="caseStudy" checked="checked">
                                        Case Study
                                    </label>

                                    <label class="checkbox primary px-lg-2">
                                        <input name="studies" type="checkbox" aria-selected="true"  disabled="true" value="controlledExperiment">
                                        Controlled Experiment
                                    </label>
                                </div>
                            </div>

                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                </div>
            </div>
        </div>



@stop

@section('adminlte_js')
    <script>
        var sfw;
        $(document).ready(function () {
            sfw = $("#analysisPhase").stepFormWizard({
                showNav: 'right',
                height: '500',
                duration: 550,
                onNext: function (i) {
                    var valid = $("#planningPhase").parsley().validate('block' + i);
                    sfw.refresh();
                    return valid;
                },
                onFinish: function (k2k2qi) {
                    var valid = $("#planningPhase").parsley().validate();
                    sfw.refresh();
                    return valid;
                }
            });
            sfw.navNumber(0,'A1')

        })
        $(window).on('load', function () {
            $(".sf-step").mCustomScrollbar({
                theme: "dark-3",
                scrollButtons: {
                    enable: true
                }
            });
        });

        $('#profileQuestionnaire').on('shown.bs.modal', function () {
            $('#btnModalProfile').trigger('focus')
        })
    </script>
    <script type="text/javascript">jQuery("#planningPhase").parsley();</script>
    <script type="text/javascript" src="{{asset('js/main.js')}}"></script>
    <script src="{{asset('vendor/form-wizard/plugins/jquery-2.1.4.min.js')}}"></script>
    <script src="{{asset('vendor/form-wizard/step-form-wizard/js/step-form-wizard.js')}}"></script>
    <script
        src="{{asset('vendor/form-wizard/plugins/mcustom-scrollbar/jquery.mCustomScrollbar.concat.min.js')}}"></script>
    <script src="{{asset('vendor/form-wizard/plugins/parsley/parsley.min.js')}}"></script>
    <script src="{{asset('vendor/form-wizard/plugins/jquery-validation/jquery.validate.min.js')}}"></script>
@stop
