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
                        <form class="col-12" id="planningPhase" class="sf-border" action="{{ route('newProject.store') }}" method="post">

                            <!--DEFINE PROFILE-->
                            <fieldset>
                                <legend>Evaluator Profile</legend>
                                <div class="col-lg-6 col-xs-6">
                                    <div class="form-group">
                                        <label for="nameProfile">Name</label>
                                        <input class="form-control"} type="text" id="nameProfile" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="emailProfile">Email</label>
                                        <input class="form-control" type="email" id="emailProfile" required>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6 col-md-3 ml-2">
                                        <button type="button" class="btn btn-block bg-gradient-primary btn-sm"><i class="fas fa-plus mr-2"></i>Add profile</button>
                                    </div>
                                </div>
                            </fieldset>

                            <!--DEFINE INFORMED CONSENT TERM -->
                            <fieldset>
                                <legend>Define Informed Consent Term</legend>
                                <div class="col-lg-6 col-xs-6 pt-lg-3">
                                    <div class="form-group">
                                        <input type="radio" name="term" value="informedTerm" id="informedTerm">
                                        <label for="informedTerm">Informed Consent Term</label>
                                    </div>
                                    <div class="form-group">
                                        <input type="radio" name="term" value="dataAccess" id="dataAccess">
                                        <label for="dataAcces">Data Access Agreement</label>
                                    </div>

                                    <div class="form-group">
                                        <input type="radio" name="term" value="bothTerms" id="bothTerms">
                                        <label for="informedTerm">Both</label>
                                    </div>
                                </div>
                            </fieldset>

                            <!--DEFINE INFORMED CONSENT TERM -->
                            <fieldset>
                                <legend>Define data type of the study</legend>
                                <div class="col-lg-6 col-xs-6 pt-lg-3">
                                    <div class="form-group">
                                        <input type="radio" name="dataType" value="quantiData" id="quantiData">
                                        <label for="quantiData">Quantitative</label>
                                    </div>
                                    <div class="form-group">
                                        <input type="radio" name="dataType" value="qualiData" id="qualiData">
                                        <label for="qualiData">Qualitative</label>
                                    </div>
                                </div>
                            </fieldset>

                            <!--DEFINE INSTRUMENTS OF DATA GATHERING -->
                            <fieldset>
                                <legend>Define instruments of data gathering</legend>
                                <div class="col-lg-6 col-xs-6 pt-lg-3">
                                    <div class="form-group">
                                        <input type="checkbox" name="instrument" value="heuristicCheck" id="heuristicCheck">
                                        <label for="heuristicCheck">Heuristic Evaluation Checklist for DSL</label>
                                    </div>
                                    <div class="form-group">
                                        <input type="checkbox" name="instrument" value="usabilityCheck" id="usabilityCheck">
                                        <label for="usabilityCheck">Usability Questionnaire</label>
                                    </div>
                                    <div class="form-group">
                                        <input type="checkbox" name="instrument" value="scriptInterview" id="scriptInterview">
                                        <label for="scriptInterview">Script Interview</label>
                                    </div>
                                    <div class="form-group">
                                        <input type="checkbox" name="instrument" value="profileQuestionnaire" id="profileQuestionnaire">
                                        <label for="profileQuestionnaire">Profile Questionnaire</label>
                                    </div>
                                </div>
                            </fieldset>

                            <!--- DEFINE INSTRUMENTS OF INSTRUCTIONS AND TRAINING --->
                            <fieldset>
                                <legend>Define Instruments of Instructions and Training </legend>

                                <label class="text-center">Describe or upload files of the instruments</label>

                                <div class="col-lg-12 col-xs-6 pt-lg-3">
                                    <div class="form-group">
                                        <div class="form-group">
                                            <label for="languagePresentation">Language Presentation:</label>
                                            <input class="form-control-file" type="file" id="languagePresentation" >
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="form-group">
                                            <label for="dslGuide">DSL Guide:</label>
                                            <input class="form-control-file" type="file" id="dslGuide" >
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-lg-6 col-xs-12">
                                                <label for="artifactName">Arctifact name:</label>
                                                <input class="form-control" type="text" id="artifactName" >
                                            </div>
                                            <div class="col-lg-6 col-xs-12">
                                                <label for="dslGuide">File:</label>
                                                <input class="form-control-file pt-1 overflow-" type="file" id="dslGuide" >
                                            </div>
                                            <div class="form-group">
                                                <div class="col-sm-6 col-md-12 mt-3">
                                                    <button type="button" class="btn btn-block bg-gradient-primary btn-sm"><i class="fas fa-plus mr-2"></i>Add file</button>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </fieldset>

                            <!--- DEFINE USE SCENARIOS --->
                            <fieldset>
                                <legend>Define Use Scenarios</legend>
                                <div class="row justify-content-center pt-lg-3">
                                    <table class="table-bordered col-md-8 p-1">
                                        <tbody>
                                        <tr>
                                            <td><label for="scenarioId">Scenario ID:</label></td>
                                            <td><input class="form-control" type="text" id="scenarioId" ></td>
                                        </tr>
                                        <tr>
                                            <td><label for="scenarioName">Scenario Name:</label></td>
                                            <td><input class="form-control" type="text" id="scenarioName" ></td>
                                        </tr>
                                        <tr>
                                            <td><label for="scenarioDesc">Description:</label></td>
                                            <td><textarea class="form-control" type="text" id="scenarioDesc" ></textarea></td>
                                        </tr>
                                        <tr>
                                            <td><label for="scenarioGoals">Goals:</label></td>
                                            <td><textarea class="form-control" type="text" id="scenarioGoals" ></textarea></td>
                                        </tr>
                                        <tr>
                                            <td><label for="scenarioTime">Expected time:</label></td>
                                            <td><input class="form-control" type="time" id="scenarioTime" ></td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="row justify-content-center">
                                    <div class="col-sm-12 col-md-3 mt-3 ">
                                        <button type="button" class="btn btn-block bg-gradient-primary btn-sm"><i class="fas fa-plus mr-2"></i>Add scenario</button>
                                    </div>
                                </div>
                            </fieldset>

                            <!--DEFINE EXECUTION PLACE -->
                            <fieldset>
                                <legend>Define Execution Place</legend>
                                <div class="col-lg-5 col-xs-6 pt-lg-3">
                                    <div class="form-group">
                                        <input type="radio" name="execPlace" value="lab" id="lab">
                                        <label for="lab">Laboratory</label>
                                    </div>
                                    <div class="form-group">
                                        <input type="radio" name="execPlace" value="remote" id="remote">
                                        <label for="remote">Remotely (Virtual)</label>
                                    </div>
                                    <div class="form-group">
                                        <input type="radio" name="execPlace" value="industry" id="industry">
                                        <label for="industry">Industry / Natural Environment</label>
                                    </div>
                                    <div class="form-group">
                                        <label for="placeDesc">Description:</label>
                                        <textarea  class="form-control textarea-autosize"  id="placeDesk" ></textarea>
                                    </div>
                                </div>
                            </fieldset>

                            <!--DEFINE DATA STORAGE -->
                            <fieldset>
                                <legend>Define Data Storage</legend>
                                <div class="col-lg-6 col-xs-6 pt-lg-3">
                                    <div class="form-group">
                                        <input type="radio" name="storageType" value="repositorySt" id="repositorySt">
                                        <label for="repositorySt">Data Repository</label>
                                    </div>
                                    <div class="form-group">
                                        <input type="radio" name="storageType" value="docStorage" id="docStorage">
                                        <label for="docStorage">Printed Documents</label>
                                    </div>
                                </div>
                            </fieldset>

                            <!--DEFINE STUDY REPORTING -->
                            <fieldset>
                                <legend>Define Study Reporting</legend>
                                <div class="col-lg-6 col-xs-6 pt-lg-3">
                                    <div class="form-group">
                                        <input type="radio" name="reportType" value="scienticPub" id="scienticPub">
                                        <label for="scienticPub">Scientific Publications</label>
                                    </div>
                                    <div class="form-group">
                                        <input type="radio" name="reportType" value="techReport" id="techReport">
                                        <label for="techReport">Technical Report</label>
                                    </div>
                                </div>
                            </fieldset>

                        </form>
                </div>
        </div>
    </div>
</div>



@stop

@section('adminlte_js')
    <script>
        var sfw;
        $(document).ready(function () {
            sfw = $("#planningPhase").stepFormWizard({
                showNav: 'right',
                height: '500',
                duration: 550,
                onNext: function (i) {
                    var valid = $("#planningPhase").parsley().validate('block' + i);
                    sfw.refresh();
                    return valid;
                },
                onFinish: function () {
                    var valid = $("#planningPhase").parsley().validate();
                    window.open("{{('/analysis')}}", false);
                    return valid;

                },

            });
            sfw.navNumber(0,'P1')
            sfw.navNumber(1,'P2')
            sfw.navNumber(2,'P3')
            sfw.navNumber(3,'P7')
            sfw.navNumber(4,'P8')
            sfw.navNumber(5,'P8')
            sfw.navNumber(6,'P9')
            sfw.navNumber(7,'P10')
            sfw.navNumber(8,'P11')

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
