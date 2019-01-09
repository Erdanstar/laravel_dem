@extends('admin.layouts.app_admin')

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Добавить статью
            <small>приятные слова..</small>
        </h1>
    </section>

    <!-- Main content -->
    <section class="content">
        {{Form::open([
    'route'	=> 'status.store'
  ])}}
        <!-- Default box -->
        <div class="box">
            <div class="box-header with-border">
                <h3 class="box-title">Добавляем статью</h3>
                @include('admin.layouts.errors')
            </div>
            <div class="box-body">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Название</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Название" name="title" value="{{old('title')}}">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Описание</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Описание" name="description" value="{{old('description')}}">
                    </div>
                    <div class="form-group">
                      <label>Test</label>
                      {{Form::select('quiz_id',
                      	$quizzes,
                      	null,
                      	['class' => 'form-control select2'])
                      }}
                    </div>
                </div>
            </div>
            <!-- /.box-body -->
            <div class="box-footer">
                <a href="{{route('status.index')}}" class="btn btn-default">Назад</a>
                <button class="btn btn-success pull-right">Добавить</button>
            </div>
            <!-- /.box-footer-->
        </div>
        <!-- /.box -->
        {{Form::close()}}
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
@endsection
