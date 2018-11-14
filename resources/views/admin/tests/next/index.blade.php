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
                <a href="{{route('next.create')}}" class="btn btn-success">Добавить</a>
              </div>
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>ID</th>
                  <th>Orentation</th>
                  <th>1</th>
                  <th>2</th>
                  <th>3</th>
                  <th>4</th>
                  <th>5</th>
                  <th>6</th>
                  <th>7</th>
                  <th>8</th>
                  <th>9</th>
                  <th>10</th>
                  <th>10</th>
                  <th>12</th>
                  <th>13</th>
                  <th>14</th>
                  <th>15</th>
                  <th>16</th>
                  <th>17</th>
                  <th>18</th>
                  <th>19</th>
                  <th>20</th>
                </tr>
                </thead>
                <tbody>
                @foreach($nexts as $next)
                <tr>
                  <td>{{$next->id}}</td>
                  <td>{{$next->orentation->orentation}}</td>
                  <td>{{$next->first}}</td>
                  <td>{{$next->second}}</td>
                  <td>{{$next->third}}</td>
                  <td>{{$next->four}}</td>
                  <td>{{$next->five}}</td>
                  <td>{{$next->six}}</td>
                  <td>{{$next->seven}}</td>
                  <td>{{$next->eight}}</td>
                  <td>{{$next->nine}}</td>
                  <td>{{$next->ten}}</td>
                  <td>{{$next->eleven}}</td>
                  <td>{{$next->twelve}}</td>
                  <td>{{$next->thirteen}}</td>
                  <td>{{$next->fourteen}}</td>
                  <td>{{$next->fifteen}}</td>
                  <td>{{$next->sixteen}}</td>
                  <td>{{$next->seventeen}}</td>
                  <td>{{$next->eighteen}}</td>
                  <td>{{$next->nineteen}}</td>
                  <td>{{$next->twenty}}</td>
                  <td>
                  <a href="{{route('next.edit', $next->id)}}" class="fa fa-pencil"></a>

                  {{Form::open(['route'=>['next.destroy', $next->id], 'method'=>'delete'])}}
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
