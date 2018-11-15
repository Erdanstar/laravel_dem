@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card-group">
                <div class="card">
                    <div class="card-body text-center">
                        <h4 class="mb-0"><strong>{{$count}}</strong></h4>
                        <small class="text-muted-light">Все вопросы</small>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body text-center">
                        <h4 class="text-primary mb-0"><strong>{{$left}}</strong></h4>
                        <small class="text-muted-light">Осталось</small>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-header bg-white">
                    <div class="media align-items-center">
                        <div class="media-left">
                            <h4 class="mb-0"><strong>#9</strong></h4>
                        </div>
                        <div class="media-body">
                            <h4 class="card-title">
                                Github command to deploy comits?
                            </h4>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="custom-control custom-radio">
                        <input type="radio" id="customRadio1" name="customRadio" class="custom-control-input">
                        <label class="custom-control-label" for="customRadio1">{{$answers[0]->answer}}</label>
                    </div>
                    <div class="custom-control custom-radio">
                        <input type="radio" id="customRadio1" name="customRadio" class="custom-control-input">
                        <label class="custom-control-label" for="customRadio1">{{$answers[1]->answer}}</label>
                    </div>
                </div>
                <div class="card-footer">
                    <a href="#" class="btn btn-white">Skip</a>
                    <a href="#" class="btn btn-success float-right">Submit <i class="material-icons btn__icon--right">send</i></a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
