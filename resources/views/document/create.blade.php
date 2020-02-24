
@extends('layouts.app', ['activePage' => 'document', 'titlePage' => __('Document')])
@section('content')
    <div class="content">
        <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
        <div class="container-fluid">
            @csrf

            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header ">
                            <h4 class="card-title ">Ajouter un nouveau document</h4>
                        </div>
                        <div class="card-body">
                            <div class="col-md-12 text-right" style="padding:5px;">
                                <a href="{{ route('document') }}" class="btn btn-sm btn-warning">{{ __('Revenir en arriére') }}</a>
                            </div>

                            <form action="/document/create" enctype="multipart/form-data" method="post">
                                @csrf
                                <div class="row">

                                    <label for="client" class="col-md-3 col-form-label ">Nom du client</label>
                                    <div class="col-sm-7" style="padding: 5px;">
                                        <div class="input-group" >

                                            <input id="client" name="client" type="text" class="form-control" placeholder="Client"/>

                                        </div>
                                        <script type="text/javascript">
                                            $(document).ready(function() {
                                                $( "#client" ).autocomplete({

                                                    source: function(request, response) {
                                                        $.ajax({
                                                            url: "{{url('autocompletededed')}}",
                                                            data: {
                                                                term : request.term
                                                            },
                                                            dataType: "json",
                                                            success: function(data){
                                                                var resp = $.map(data,function(obj){

                                                                    return obj.name;

                                                                });
                                                                response(resp)
                                                                ;}});},
                                                    minLength: 1
                                                });});


                                        </script>

                                    </div>
                                </div>
                                <div class="row">

                                    <label for="repertoire" class="col-md-3 col-form-label ">Nom du repertoire</label>
                                    <div class="col-sm-7" style="padding: 5px;">
                                        <div class="input-group">

                                            <input id="repertoire" name="repertoire" type="text" class="form-control" placeholder="Repertoire"/>

                                        </div>
                                            <script type="text/javascript">
                                                $(document).ready(function() {
                                                    $( "#repertoire" ).autocomplete({

                                                        source: function(request, response) {
                                                            $.ajax({
                                                                url: "{{url('autocomplete')}}",
                                                                data: {
                                                                    term : request.term
                                                                },
                                                                dataType: "json",
                                                                success: function(data){
                                                                    var resp = $.map(data,function(obj){

                                                                        return obj.repertoire;

                                                                    });
                                                                    response(resp)
                                                                    ;}});},
                                                        minLength: 1
                                                    });});

                                            </script>

                                    </div>
                                </div>
                                <div class="row">

                                    <label for="document" class="col-md-3 col-form-label ">Nom du Document</label>
                                    <div class="col-sm-7" style="padding: 5px;">
                                        <div class="input-group">

                                            <input id="document" name="document" type="text" class="form-control" placeholder="Document"/>

                                        </div>
                                        <script type="text/javascript">
                                            $(document).ready(function() {
                                                $( "#document" ).autocomplete({

                                                    source: function(request, response) {
                                                        $.ajax({
                                                            url: "{{url('autocompleted')}}",
                                                            data: {
                                                                term : request.term
                                                            },
                                                            dataType: "json",
                                                            success: function(data){
                                                                var resp = $.map(data,function(obj){

                                                                    return obj.document;

                                                                });
                                                                response(resp)
                                                                ;}});},
                                                    minLength: 1
                                                });});


                                        </script>

                                    </div>
                                </div>
                                <div class type="row">
                                    <label for="document" class="col-md-3 col-form-label ">Comptabilisé</label>
                                    <div class="col-sm-7" style="padding: 5px;">

                                        <div>
                                            <input type="radio" checked=false name="compta"> Oui
                                            <input type="radio" name="compta"> Non
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <label for="file" class="col-md-3 col-form-label ">Ajouter un document</label>
                                    <div class="col-sm-7" style="padding: 5px;">
                                        <input type="file" class="form-control-file" id="file" name="file">
                                    </div>

                                </div>
                                <div class="row pt-4">
                                    <button  type="submit" class="btn btn-warning">Ajouter nouveau document</button>

                                </div>


                            </form>

                        </div>


                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header ">
                            <h4 class="card-title ">Voici vos document</h4>
                        </div>
                        <div class="card-body">
                            <div class="col-md-12 text-right">
                                <a href="{{ route('document') }}" class="btn btn-sm btn-warning">{{ __('Revenir en arriére') }}</a>
                            </div>

                            <div class="col-8">


                                    <a type="" href="/storage/uploads/PR.055.DO.AD.TCB.001 Procédure de traitement du courrier de la banque.pdf" target="_blank">PR.055.DO.AD.TCB.001 Procédure de traitement du courrier de la banque</a>
                            </div>
                        </div>


                    </div>

                </div>
            </div>



    </div>
    </div>

@endsection


