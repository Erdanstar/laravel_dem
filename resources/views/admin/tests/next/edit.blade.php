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
    'route'	=>	['next.update', $next->id],
    'method'	=>	'put'
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
              <label for="exampleInputEmail1">Ориентация</label>
              {{Form::select('orentation_id',
              	$orentations,
              	null,
              	['class' => 'form-control select2'])
              }}
              <label for="exampleInputEmail1">1</label>
              <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Название" name="first" value="{{old('first')}}">
              <label for="exampleInputEmail1">2</label>
              <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Название" name="second" value="{{old('second')}}">
              <label for="exampleInputEmail1">3</label>
              <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Название" name="third" value="{{old('third')}}">
              <label for="exampleInputEmail1">4</label>
              <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Название" name="four" value="{{old('four')}}">
              <label for="exampleInputEmail1">5</label>
              <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Название" name="five" value="{{old('five')}}">
              <label for="exampleInputEmail1">6</label>
              <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Название" name="six" value="{{old('six')}}">
              <label for="exampleInputEmail1">7</label>
              <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Название" name="seven" value="{{old('seven')}}">
              <label for="exampleInputEmail1">8</label>
              <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Название" name="eight" value="{{old('eight')}}">
              <label for="exampleInputEmail1">9</label>
              <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Название" name="nine" value="{{old('nine')}}">
              <label for="exampleInputEmail1">10</label>
              <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Название" name="ten" value="{{old('ten')}}">
              <label for="exampleInputEmail1">11</label>
              <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Название" name="eleven" value="{{old('eleven')}}">
              <label for="exampleInputEmail1">12</label>
              <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Название" name="twelve" value="{{old('twelve')}}">
              <label for="exampleInputEmail1">13</label>
              <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Название" name="thirteen" value="{{old('thirteen')}}">
              <label for="exampleInputEmail1">14</label>
              <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Название" name="fourteen" value="{{old('fourteen')}}">
              <label for="exampleInputEmail1">15</label>
              <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Название" name="fifteen" value="{{old('fifteen')}}">
              <label for="exampleInputEmail1">16</label>
              <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Название" name="sixteen" value="{{old('sixteen')}}">
              <label for="exampleInputEmail1">17</label>
              <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Название" name="seventeen" value="{{old('seventeen')}}">
              <label for="exampleInputEmail1">18</label>
              <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Название" name="eighteen" value="{{old('eighteen')}}">
              <label for="exampleInputEmail1">19</label>
              <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Название" name="nineteen" value="{{old('nineteen')}}">
              <label for="exampleInputEmail1">20</label>
              <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Название" name="twenty" value="{{old('twenty')}}">
            </div>
          </div>
        </div>
      </div>
        <!-- /.box-body -->
        <div class="box-footer">
          <a href="{{route('next.index')}}" class="btn btn-default">Назад</a>
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
