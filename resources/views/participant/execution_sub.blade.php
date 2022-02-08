@extends('adminlte::page')

@section('Execution Phase', 'Usa-DSL Tool')
@section('adminlte_css')
    <link rel="stylesheet" href="{{asset('vendor/form-wizard/step-form-wizard/css/step-form-wizard-all.css')}}"
          type="text/css" media="screen, projection">
    <link rel="stylesheet"
          href="{{asset('vendor/form-wizard/plugins/mcustom-scrollbar/jquery.mCustomScrollbar.min.css')}}">
    <link rel="stylesheet"
          href="{{asset('vendor/form-wizard/plugins/parsley/parsley.css')}}">
@stop


@section('content_header')
    <h1 class="m-0 ml-3 text-dark">Execution</h1>
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
                    <form class="col-12" id="executionSubjects" class="sf-border">
                        <!--COLLECT SIGNATURE-->
                        <fieldset>
                            <legend>Informed Consent Term</legend>
                            <div class="row justify-content-center">
                                <div class="col-9 text-left">
                                    <p class="text-justify">
                                        Subject: Date:
                                        You are being invited to participate in the research
                                        , under the responsibility of the
                                        master student/research , under the
                                        guidance of Professor
                                        Dr(a). .
                                        You will participate in a (Empirical Study Method
                                        (SE)) that will review and discuss documents
                                        related to the (DSL) . There will be a questionnaire
                                        application, which will record your profile and collect information about your
                                        appreciation of the . The information obtained
                                        through this research will be confidential and we will ensure the
                                        confidentiality of your participation. Thus, the disclosed data will not allow
                                        any identification.
                                        Your participation is voluntary and if you decide not to participate or you want
                                        to cancel your participation at any time, you have the absolute freedom to do
                                        so.
                                        Even without having direct benefits in participating, indirectly you will be
                                        contributing to the understanding of the phenomenon studied and to the
                                        production of scientific knowledge.
                                        Any questions regarding the research can be made through the researchers’
                                        emails:
                                    </p>
                                    <div class="row justify-content-center pt-5">
                                        <p> STATEMENT OF CONSENT OF THE SUBJECT OF THE RESEARCH </p>
                                        <p>I agree to participate in this study and I declare that I have read the
                                            details described in this document. I understand that I am free to accept or
                                            refuse, and that I can interrupt my participation at any time without giving
                                            a reason why. I agree that the data collected will be used for the purpose
                                            described above. I understand the information presented in this CONSENT
                                            TERMS. I had the opportunity to ask questions and all my questions were
                                            answered. I will receive a signed and dated copy of this FREE AND CLARIFIED
                                            CONSENT Document.
                                        </p>
                                    </div>
                                    <div class="row justify-content-center">
                                        <label class="radio-inline">
                                            <input type="radio" name="avalAnswer" value="avalY">
                                            Accept
                                        </label>
                                        <label class="radio-inline pl-5">
                                            <input type="radio" name="avalAnswer" value="avalN">
                                            Decline
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </fieldset>

                        <!--CHECK AVAILABILITY-->
                        <fieldset>
                            <legend>Check Availability in the Evaluation</legend>
                            <div class="row justify-content-center">
                                <div class="col-5 text-center">
                                    <p class="font-italic">Dear participant, please confirm your participation and
                                        inform availability to carry out the evaluation within the period offered</p>
                                </div>
                            </div>
                            <div class="row justify-content-center">
                                <div class="pt-5 col-5 text-center">
                                    <p class="font-weight-bold">The evaluation takes place in the period of:</p>
                                </div>
                            </div>

                            <div class="row justify-content-center">
                                <div class="pt-3 col-5 text-center">
                                    <p>20/01/2022 to 20/02/2022</p>
                                </div>
                            </div>
                            <div class="row justify-content-center pt-5">
                                <p>Are you sure you will be able to participate in the evaluation?</p>
                            </div>
                            <div class="row justify-content-center">
                                <label class="radio-inline">
                                    <input type="radio" name="avalAnswer" value="avalY">
                                    Yes
                                </label>
                                <label class="radio-inline pl-5">
                                    <input type="radio" name="avalAnswer" value="avalN">
                                    No
                                </label>
                            </div>

                        </fieldset>

                        <fieldset>
                            <legend>Check Availability in the Evaluation Experiment</legend>

                            <div class="row justify-content-center">
                                <div class="pt-5 col-5 text-center">
                                    <p class="font-weight-bold">Select the dates and times of the sessions below in
                                        which you are available to participate:</p>
                                </div>
                            </div>

                            <div class="row justify-content-center">
                                <div class="pt-3 col-5 text-center">
                                    <p>Session 1 (3h)</p>
                                    <label class="radio">
                                        <input type="radio" name="seshAnswer" value="day1">
                                        20/01/2022 08:00
                                    </label>
                                    <br>
                                    <label class="radio">
                                        <input type="radio" name="seshAnswer" value="day2">
                                        21/01/2022 09:00
                                    </label>
                                    <br>
                                    <label class="radio">
                                        <input type="radio" name="seshAnswer" value="day3">
                                        22/01/2022 14:00
                                    </label>
                                </div>

                                <div class="pt-3 col-5 text-center">
                                    <p>Session 2 (3h)</p>
                                    <label class="radio">
                                        <input type="radio" name="seshAnswer" value="day1">
                                        20/01/2022 08:00
                                    </label>
                                    <br>
                                    <label class="radio">
                                        <input type="radio" name="seshAnswer" value="day2">
                                        21/01/2022 09:00
                                    </label>
                                    <br>
                                    <label class="radio">
                                        <input type="radio" name="seshAnswer" value="day3">
                                        22/01/2022 14:00
                                    </label>
                                </div>
                            </div>
                            <div class="row justify-content-center pt-5">
                                <p>Are you sure you will be able to participate in the evaluation?</p>
                            </div>
                            <div class="row justify-content-center">
                                <label class="radio-inline">
                                    <input type="radio" name="avalAnswer" value="avalY">
                                    Yes
                                </label>
                                <label class="radio-inline pl-5">
                                    <input type="radio" name="avalAnswer" value="avalN">
                                    No
                                </label>
                            </div>
                        </fieldset>


                        <fieldset>
                            <legend>Profile Questionnaire</legend>

                            <div class="pt-5">
                                <div class="pt-2 ">
                                    <p>1. Have you ever used a Domain Specific Language (DSL)?</p>
                                    <div class="form-group">

                                        <label class="radio-inline primary pr-lg-2">
                                            <input name="option" type="radio" value="yes"
                                                   >
                                            Yes
                                        </label>

                                        <label class="radio-inline primary px-lg-2">
                                            <input name="option" type="radio" aria-selected="true"
                                                   value="no">
                                            No
                                        </label>
                                    </div>
                                </div>
                                <div class="pt-2">
                                    <p>2. Have you ever created a Domain Specific Language (DSL)?*</p>
                                    <div class="form-group">

                                        <label class="radio-inline primary pr-lg-2">
                                            <input name="option" type="radio" value="yes"
                                                   >
                                            Yes
                                        </label>

                                        <label class="radio-inline primary px-lg-2">
                                            <input name="option" type="radio" aria-selected="true"
                                                   value="no">
                                            No
                                        </label>
                                    </div>
                                </div>
                                <div class="pt-2">
                                    <p>3. What empirical studies have you participated in? *</p>
                                    <div class="form-group">

                                        <label class="checkbox primary pr-lg-2">
                                            <input name="studies" type="checkbox" value="caseStudy"
                                                   >
                                            Case Study
                                        </label>

                                        <label class="checkbox primary px-lg-2">
                                            <input name="studies" type="checkbox" aria-selected="true"
                                                   value="controlledExperiment">
                                            Controlled Experiment
                                        </label>
                                    </div>
                                </div>

                            </div>

                        </fieldset>


                        <fieldset>
                            <legend>Get Instruments of Instructions and Training </legend>

                            <label class="pt-5 row justify-content-center">Download instruments and perform the use cenario</label>

                            <div class="col-lg-12 col-xs-6 pt-lg-5">
                                <div class="row justify-content-center">
                                    <div class="form-group">
                                        <label id="languagePresentation">Language Presentation:</label>
                                        <button class="btn btn-primary"><i class="fa fa-download"></i> Download</button>
                                    </div>
                                </div>
                                <div class="row justify-content-center">
                                    <div class="form-group">
                                        <label id="dslGuide">DSL Guide:</label>
                                        <button class="btn btn-primary"><i class="fa fa-download"></i>Download</button>
                                    </div>
                                </div>
                            </div>
                        </fieldset>

                        <fieldset>
                            <legend>Perform Use Cenarios</legend>

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
                        </fieldset>
                        <fieldset>
                            <legend>Checklist</legend>
                                <h:form id="checklist" class="sf-border col-12">
                                    <fieldset>
                                        <legend>Heuristic Checklist</legend>
                                    </fieldset>
                                    <fieldset>
                                        <legend>h2</legend>
                                    </fieldset>
                                </h:form>
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
            sfw = $("#executionSubjects").stepFormWizard({
                showNav: 'right',
                height: '600',
                duration: 550,
            });
            sfw.navNumber(0, 'E2')
            sfw.navNumber(1, 'E5')
            sfw.navNumber(2, 'E5')
            sfw.navNumber(3, 'E1')
            sfw.navNumber(4, 'E8')
            sfw.navNumber(5, 'E9')

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
    <script>
        var hck;
        $(document).ready(function () {
            hck = $("#checklist").stepFormWizard({
                showNav: 'top',
                height: '600',
                duration: 550,
            });
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
