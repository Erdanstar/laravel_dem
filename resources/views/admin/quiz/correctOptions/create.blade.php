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
    'route'	=> 'options.store'
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
                        <label>Выберите тест</label>
                        {{Form::select('quiz_id',
                      $quizzes,
                      null,
                      ['class' => 'form-control select2'])
                    }}
                    </div>
                    <div class="form-group">
                        <label>Выберите вопрос</label>
                        {{Form::select('question_id',
                      $questions,
                      null,
                      ['class' => 'form-control select2'])
                    }}
                    </div>
                    <div class="form-group">
                        <label>Выберите Ориентацию</label>
                        {{Form::select('orentation_id',
                      $orentations,
                      null,
                      ['class' => 'form-control select2'])
                    }}
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Правильный ответ</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Ответ" name="correct" value="{{old('option_text')}}">
                    </div>
                </div>
            </div>
            <!-- /.box-body -->
            <div class="box-footer">
                <a href="{{route('corrects.index')}}" class="btn btn-default">Назад</a>
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
