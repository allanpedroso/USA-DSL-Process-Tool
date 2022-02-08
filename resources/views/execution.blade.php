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
    <h1 class="m-0 ml-4 text-dark">Execution Phase</h1>
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
                        <form class="col-12" id="analysisPhase" class="sf-border" >

                            <!--PREPARE THE EVALUATION-->
                            <fieldset>
                                <legend>Prepare the evaluation</legend>
                                    <div class="col-12">
                                        <div class="row justify-content-center">
                                            <p class="font-italic r">Please, after checking the instruments and evaluation environment, and still need to upload tools or environments, use this space</p>
                                        </div>
                                    </div>

                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-lg-4 col-xs-12">
                                            <label for="artifactName">Tool/Environment name:</label>
                                            <input class="form-control" type="text" id="artifactName" >
                                        </div>
                                        <div class="col-lg-6 col-xs-12">
                                            <label for="dslGuide">File:</label>
                                            <input class="form-control-file pt-1 overflow-" type="file" id="dslGuide" >
                                        </div>
                                    </div>

                                    <div class="form-group pt-2">
                                        <div class="row">
                                            <div class="col-lg-4 col-xs-12">
                                                <label for="linkArtifact">Link:</label>
                                                <input class="form-control" type="text" id="linkArtifact" >
                                            </div>
                                        </div>

                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-sm-6 col-md-3">
                                                <button type="button" class="btn btn-block bg-gradient-primary btn-sm"><i class="fas fa-plus mr-2"></i>Add tool/environment</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-sm-6 col-md-6 pt-2">
                                                <label for="instructions">Instructions:</label>
                                                <textarea rows="5" type="text" class="form-control"></textarea>
                                            </div>
                                        </div>
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
            sfw = $("#analysisPhase").stepFormWizard({
                showNav: 'right',
                height: '550',
                duration: 550,
                onNext: function (i) {
                    var valid = $("#planningPhase").parsley().validate('block' + i);
                    sfw.refresh();
                    return valid;
                },
                onFinish: function () {
                    var valid = $("#planningPhase").parsley().validate();
                    sfw.refresh();
                    return valid;
                }
            });
            sfw.navNumber(0,'E5')

        })
        $(window).on('load', function () {
            $(".sf-step").mCustomScrollbar({
                theme: "dark-3",
                scrollButtons: {
                    enable: true
                }
            });
        });
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
