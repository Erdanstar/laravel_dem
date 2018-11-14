@extends('admin.layouts.app_admin')

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Тест профориентация
            <small>Общая информация профориентация</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Главная</a></li>
            <li class="active">Тест профориентация</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-md-3">
                <div class="panel panel-default">
                    <div class="panel-heading">Тест сұрақтары</div>
                    <div class="panel-wrapper collapse in">
                        <div class="panel-body">
                            <p>Қазіргі уақытта 20 тест жауаптары бар</p>
                             <a href="{{route('answers.index')}}" class="btn btn-custom m-t-10 collapseble">Қарау</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
