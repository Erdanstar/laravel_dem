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
    'route'	=> 'orentations.store'
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
                        <label>Выберите test</label>
                        {{Form::select('quiz_id',
                      $quizzes,
                      null,
                      ['class' => 'form-control select2'])
                    }}
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Orentation</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Ответ" name="title" value="{{old('title')}}">
                    </div>
                </div>
            </div>
            <!-- /.box-body -->
            <div class="box-footer">
                <a href="{{route('orentations.index')}}" class="btn btn-default">Назад</a>
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
