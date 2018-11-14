@extends('admin.layouts.app_admin')

@section('content')
  <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>
          Изменить статью
          <small>приятные слова..</small>
        </h1>
      </section>

      <!-- Main content -->
      <section class="content">
          {{Form::open([
      'route'	=> ['answers.update', $answer->id]
      'method' => 'put'
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
                          <label for="exampleInputEmail1">Номер ответа</label>
                          <input type="number" class="form-control" id="exampleInputEmail1" min="1" max="20" placeholder="Номер ответа" name="answer_number" value="{{old('number')}}">
                      </div>
                      <div class="form-group">
                          <label for="exampleInputEmail1">Полный текст ответа</label>
                          <textarea name="answer" id="" cols="30" placeholder="Полный текст" rows="10" class="form-control"></textarea>
                      </div>
                  </div>
              </div>
          </div>
          <!-- /.box-body -->
          <div class="box-footer">
              <a href="{{route('answers.index')}}" class="btn btn-default">Назад</a>
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
