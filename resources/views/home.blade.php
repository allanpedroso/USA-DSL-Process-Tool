@extends('adminlte::page')


@section('content_header')

    <div class="card">
        <div class="card-header">
            <h1 class="card-title">
                Home
            </h1>
        </div>

        <div id="homeDesc" class="card-body">
            <div class="callout callout-info callout2">
                <h5>Introduction of <strong>Usa-DSL Tool</strong></h5>
                <div class="col-9">
                    <p class="text-justify">The Usa-dsl Tool is a tool built to guide the Usa-DSL Process. All flows present in the process were mapped into the tool, in order to facilitate its execution. All the steps and elements that this tool is based on can be consulted in embed Usa-DSL Process page below.</p>
                </div>
            </div>
        </div>


        <div class="row">
            <div class="col-12">
                <div style=" height: 800px; overflow: hidden">
                    <iframe src="http://lesse.com.br/usa-dsl/" width="100%" height="900px" style="border: none; position: relative; top: -90px; border-radius: 20px "></iframe>
                </div>
            </div>
        </div>

    </div>



@stop
