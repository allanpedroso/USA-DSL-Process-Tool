@extends('adminlte::page')

@section('Execution Phase', 'Usa-DSL Tool')
@section('adminlte_css')
    <link rel="stylesheet" href="{{asset('vendor/form-wizard/step-form-wizard/css/step-form-wizard-all.css')}}"
          type="text/css" media="screen, projection">
    <link rel="stylesheet"
          href="{{asset('vendor/form-wizard/plugins/mcustom-scrollbar/jquery.mCustomScrollbar.min.css')}}">
    <link rel="stylesheet"
          href="{{asset('vendor/form-wizard/plugins/parsley/parsley.css')}}">
    <script src="{{asset('vendor/steps/jquery.steps.js')}}"></script>
    <link rel="stylesheet"
          href="{{asset('vendor/steps/jquery.steps.css')}}">

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
                            <legend>Get Instruments of Instructions and Training</legend>

                            <label class="pt-5 row justify-content-center">Download instruments and perform the use
                                cenario</label>

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
                                        <td><input class="form-control" type="text" id="scenarioId"></td>
                                    </tr>
                                    <tr>
                                        <td><label for="scenarioName">Scenario Name:</label></td>
                                        <td><input class="form-control" type="text" id="scenarioName"></td>
                                    </tr>
                                    <tr>
                                        <td><label for="scenarioDesc">Description:</label></td>
                                        <td><textarea class="form-control" type="text" id="scenarioDesc"></textarea>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><label for="scenarioGoals">Goals:</label></td>
                                        <td><textarea class="form-control" type="text" id="scenarioGoals"></textarea>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><label for="scenarioTime">Expected time:</label></td>
                                        <td><input class="form-control" type="time" id="scenarioTime"></td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </fieldset>
                        <fieldset>
                            <legend>Questionnaire Post-Evaluation</legend>
                            <div id="checklistEvalPost">
                                <form action="">
                                    <h1>H1</h1>
                                    <div>
                                        <p class="card-subtitle p-4 mt-2">Visibility of system status </p>
                                        <table class="table table-responsive-lg">
                                            <thead>
                                            <tr>
                                                <th scope="col" class="align-middle">Question</th>
                                                <th scope="col" class="align-middle text-center">Apply</th>
                                                <th scope="col" class="align-middle align-content-center">Not apply</th>
                                                <th scope="col" class="align-middle">Description of each error occurrence</th>
                                                <th scope="col" class="align-middle">Severity (Check each of the problems found)</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr class=" text-justify">
                                                <td>Does the Graphical DSL provide immediate and adequate feedback on its status for each user action? For example, after an include or exclude task the language displays a commit message?</td>
                                                <td class="justify-content-center"><div class="form-check"><input class="form-check-input text-center"  type="radio" name="q1h1apply" value="apply"></div></td>
                                                <td><div class="form-check"><input class="form-check-input text-center"  type="radio" name="q1h1apply" value="ntapply"></div></td>
                                                <td><textarea name="descError" rows="4"></textarea></td>
                                                <td><select class="form-control text-center" name="severity" id="severity">
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                        <option value="4">4</option>
                                                        <option value="5">5</option>
                                                    </select></td>
                                            </tr>
                                            <tr>
                                                <td>Does the Textual DSL provide immediate and adequate feedback on its status for each user action? For example, after an include or exclude task the language displays a commit message?	</td>
                                                <td><div class="form-check"><input class="form-check-input"  type="radio" name="q2h1apply" value="apply"></div></td>
                                                <td class="text-center"><div class="form-check"><input class="form-check-input d-block"  type="radio" name="q2h1apply" value="ntapply"></div></td>
                                                <td><textarea name="descError" rows="4"></textarea></td>
                                                <td><select class="form-control text-center" name="severity" id="severity">
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                        <option value="4">4</option>
                                                        <option value="5">5</option>
                                                    </select></td>
                                            </tr>
                                            <tr>
                                                <td>Do the elements available for the user specifically execute only one command? For example, the "undo" button only performs undo actions.	</td>
                                                <td><div class="form-check"><input class="form-check-input"  type="radio" name="q3h1apply" value="apply"></div></td>
                                                <td><div class="form-check"><input class="form-check-input"  type="radio" name="q3h1apply" value="ntapply"></div></td>
                                                <td><textarea name="descError" rows="4"></textarea></td>
                                                <td><select class="form-control text-center" name="severity" id="severity">
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                        <option value="4">4</option>
                                                        <option value="5">5</option>
                                                    </select></td>
                                            </tr>
                                            <tr>
                                                <td>Do all alert and error messages that DSL (Textual or Grafica) provides stay on the screen long enough to be read more than once or (preferably) until the user chooses to close them?	</td>
                                                <td><div class="form-check"><input class="form-check-input"  type="radio" name="q4h1apply" value="apply"></div></td>
                                                <td><div class="form-check"><input class="form-check-input"  type="radio" name="q4h1apply" value="ntapply"></div></td>
                                                <td><textarea name="descError" rows="4"></textarea></td>
                                                <td><select class="form-control text-center" name="severity" id="severity">
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                        <option value="4">4</option>
                                                        <option value="5">5</option>
                                                    </select></td>
                                            </tr>
                                            <tr>
                                                <td>Are the Textual and Graphical DSLs structured in a coupled way? For example, if the user changes something on the Textual DSL, this change must be observed on the Graphical DSL and if the user changes something on the Visual DSL, this change must be observed on the Textual DSL.</td>
                                                <td><div class="form-check"><input class="form-check-input" type="radio" name="q5h1apply" value="apply"></div></td>
                                                <td><div class="form-check"><input class="form-check-input"  type="radio" name="q5h1apply" value="ntapply"></div></td>
                                                <td><textarea name="descError" rows="4"></textarea></td>
                                                <td><select class="form-control text-center" name="severity" id="severity">
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                        <option value="4">4</option>
                                                        <option value="5">5</option>
                                                    </select></td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <h1>H2</h1>

                                    <div> <table class="table table-responsive-lg">
                                            <p class="card-subtitle p-4 mt-2">Match between language and the real world domain  </p>
                                            <thead>
                                            <tr>
                                                <th scope="col" class="align-middle">Question</th>
                                                <th scope="col" class="align-middle text-center">Apply</th>
                                                <th scope="col" class="align-middle align-content-center">Not apply</th>
                                                <th scope="col" class="align-middle">Description of each error occurrence</th>
                                                <th scope="col" class="align-middle">Severity (Check each of the problems found)</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr class=" text-justify">
                                                <td>Does the Graphical DSL provide immediate and adequate feedback on its status for each user action? For example, after an include or exclude task the language displays a commit message?</td>
                                                <td class="justify-content-center"><div class="form-check"><input class="form-check-input text-center"  type="radio" name="q1h1apply" value="apply"></div></td>
                                                <td><div class="form-check"><input class="form-check-input text-center"  type="radio" name="q1h1apply" value="ntapply"></div></td>
                                                <td><textarea name="descError" rows="4"></textarea></td>
                                                <td><select class="form-control text-center" name="severity" id="severity">
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                        <option value="4">4</option>
                                                        <option value="5">5</option>
                                                    </select></td>
                                            </tr>
                                            <tr>
                                                <td>Does the Textual DSL provide immediate and adequate feedback on its status for each user action? For example, after an include or exclude task the language displays a commit message?	</td>
                                                <td><div class="form-check"><input class="form-check-input"  type="radio" name="q2h1apply" value="apply"></div></td>
                                                <td class="text-center"><div class="form-check"><input class="form-check-input d-block"  type="radio" name="q2h1apply" value="ntapply"></div></td>
                                                <td><textarea name="descError" rows="4"></textarea></td>
                                                <td><select class="form-control text-center" name="severity" id="severity">
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                        <option value="4">4</option>
                                                        <option value="5">5</option>
                                                    </select></td>
                                            </tr>
                                            <tr>
                                                <td>Do the elements available for the user specifically execute only one command? For example, the "undo" button only performs undo actions.	</td>
                                                <td><div class="form-check"><input class="form-check-input"  type="radio" name="q3h1apply" value="apply"></div></td>
                                                <td><div class="form-check"><input class="form-check-input"  type="radio" name="q3h1apply" value="ntapply"></div></td>
                                                <td><textarea name="descError" rows="4"></textarea></td>
                                                <td><select class="form-control text-center" name="severity" id="severity">
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                        <option value="4">4</option>
                                                        <option value="5">5</option>
                                                    </select></td>
                                            </tr>
                                            <tr>
                                                <td>Do all alert and error messages that DSL (Textual or Grafica) provides stay on the screen long enough to be read more than once or (preferably) until the user chooses to close them?	</td>
                                                <td><div class="form-check"><input class="form-check-input"  type="radio" name="q4h1apply" value="apply"></div></td>
                                                <td><div class="form-check"><input class="form-check-input"  type="radio" name="q4h1apply" value="ntapply"></div></td>
                                                <td><textarea name="descError" rows="4"></textarea></td>
                                                <td><select class="form-control text-center" name="severity" id="severity">
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                        <option value="4">4</option>
                                                        <option value="5">5</option>
                                                    </select></td>
                                            </tr>
                                            <tr>
                                                <td>Are the Textual and Graphical DSLs structured in a coupled way? For example, if the user changes something on the Textual DSL, this change must be observed on the Graphical DSL and if the user changes something on the Visual DSL, this change must be observed on the Textual DSL.</td>
                                                <td><div class="form-check"><input class="form-check-input" type="radio" name="q5h1apply" value="apply"></div></td>
                                                <td><div class="form-check"><input class="form-check-input"  type="radio" name="q5h1apply" value="ntapply"></div></td>
                                                <td><textarea name="descError" rows="4"></textarea></td>
                                                <td><select class="form-control text-center" name="severity" id="severity">
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                        <option value="4">4</option>
                                                        <option value="5">5</option>
                                                    </select></td>
                                            </tr>
                                            </tbody>
                                        </table></div>
                                    <h1>H3</h1>
                                    <div></div>
                                    <h1>H4</h1>
                                    <div></div>
                                    <h1>H5</h1>
                                    <div></div>
                                    <h1>H6</h1>
                                    <div></div>
                                    <h1>H7</h1>
                                    <div></div>
                                    <h1>H8</h1>
                                    <div></div>
                                </form>

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
        $(function(){
            $("#checklistEvalPost").steps({titleTemplate: "#title#" });
        });

    </script>

    <script>
        var sfw;
        $(document).ready(function () {
            sfw = $("#executionSubjects").stepFormWizard({
                showNav: 'right',
                height: '800',
                duration: 550,
            });
            sfw.navNumber(0, 'E2')
            sfw.navNumber(1, 'E5')
            sfw.navNumber(2, 'E5')
            sfw.navNumber(3, 'E1')
            sfw.navNumber(4, 'E8')
            sfw.navNumber(5, 'E9a')
            sfw.navNumber(6, 'E9d')



        })

        $(document).ready(function () {
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-steps/1.1.0/jquery.steps.js" integrity="sha512-gH0SqyjTN7WJAtki1UvqOkhWi3WsF9LY05BMwdcSq6QdFDXrXeXy0q8iP0YmBXCqo7OnSgdIPrC5Vqn8/KRu/Q==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script type="text/javascript">jQuery("#planningPhase").parsley();</script>
    <script type="text/javascript" src="{{asset('js/main.js')}}"></script>
    <script src="{{asset('vendor/form-wizard/plugins/jquery-2.1.4.min.js')}}"></script>
    <script src="{{asset('vendor/steps/jquery.steps.js')}}"></script>
    <script src="{{asset('vendor/form-wizard/step-form-wizard/js/step-form-wizard.js')}}"></script>
    <script
        src="{{asset('vendor/form-wizard/plugins/mcustom-scrollbar/jquery.mCustomScrollbar.concat.min.js')}}"></script>
    <script src="{{asset('vendor/form-wizard/plugins/parsley/parsley.min.js')}}"></script>
    <script src="{{asset('vendor/form-wizard/plugins/jquery-validation/jquery.validate.min.js')}}"></script>
@stop
