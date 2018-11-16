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
    'route'	=> 'questions.store'
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
                    <label>Test</label>
                    {{Form::select('quiz_id',
                      $quizzes,
                      null,
                      ['class' => 'form-control select2'])
                    }}
                  </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Текст вопроса</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" name="question_text" value="{{old('question_text')}}">
                    </div>
                      <div class="form-group">
                          <label for="exampleInputEmail1">Добавьте 1 ответ</label>
                          <input type="text" class="form-control" id="exampleInputEmail1" name="option_text1" value="{{old('option_text')}}">
                      </div>
                      <div class="form-group">
                          <label for="exampleInputEmail1">Добавьте 2 ответ</label>
                          <input type="text" class="form-control" id="exampleInputEmail1" name="option_text2" value="{{old('option_text')}}">
                      </div>
                      <div class="form-group">
                          <label for="exampleInputEmail1">Добавьте 3 ответ</label>
                          <input type="text" class="form-control" id="exampleInputEmail1" name="option_text3" value="{{old('option_text')}}">
                      </div>
                </div>
            </div>
            <!-- /.box-body -->
            <div class="box-footer">
                <a href="{{route('quiz.index')}}" class="btn btn-default">Назад</a>
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
