@extends('admin.layouts.app_admin')

@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Blank page
        <small>it all starts here</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Главная</a></li>
        <li class="active">Посты</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Default box -->
      <div class="box">
            <div class="box-header">
              <h3 class="box-title">Листинг сущности</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="form-group">
                <a href="{{route('answers.create')}}" class="btn btn-success">Добавить</a>
              </div>
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>ID</th>
                  <th>Ответы</th>
                  <th>Номер вопроса</th>
                  <th>Номер ответа</th>
                </tr>
                </thead>
                <tbody>
                @foreach($answers as $answer)
                <tr>
                  <td>{{$answer->id}}</td>
                  <td>{{$answer->answer}}</td>
                  <td>{{$answer->question_number}}</td>
                  <td>{{$answer->answer_number}}</td>
                  <td>
                  <a href="{{route('answers.edit', $answer->id)}}" class="fa fa-pencil"></a>

                  {{Form::open(['route'=>['answers.destroy', $answer->id], 'method'=>'delete'])}}
                    <button onclick="return confirm('are you sure?')" type="submit" class="delete">
                     <i class="fa fa-remove"></i>
                    </button>

                     {{Form::close()}}
                  </td>
                </tr>
                @endforeach
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
      <!-- /.box -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection
