@extends('layouts.admin')

@section('content')
 <!-- Content Header (Page header) -->
 <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Пользователь</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Главная</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

   <!-- Main content -->
   <section class="content">
    <div class="container-fluid">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-12">
            <div class="card">
            <div class="card-header d-flex p-3" >
              <div class="mr-3">
                <a href="{{route('admin.user.edit', $user->id)}}" class="btn btn-primary">Редактировать</a>
              </div>
                <form action="{{route('admin.user.destroy', $user->id)}}" method="post">
                  @csrf
                  @method('delete')
                  <input type="submit" class="btn btn-danger" value="Удалить">
                </form>
                <a href="{{route('admin.user.edit', $user->id)}}" class="btn btn-success ml-3">Запросить смену пароля</a>
            </div>
            
            <div class="card-body table-responsive p-0">
            <table class="table table-hover text-nowrap">

            <tbody>
            <tr>
                <td>ID</td>
                <td>{{ substr($user->id, 0, 9) . str_repeat('*', strlen($user->id) - 17) . substr($user->id, -8) }}</td>
            </tr>

            <tr>
              <td>Имя</td>
              <td>{{$user->name}}</td>
            </tr>

            <tr>
              <td>Фамилия</td>
              <td>{{$user->surname}}</td>
            </tr>

            <tr>
              <td>Отчество</td>
              <td>{{$user->patronymic}}</td>
            </tr>

            <tr>
              <td>Email</td>
              <td>{{$user->email}}</td>
            </tr>

            <tr>
              <td>Телефон</td>
              <td>{{$user->phone}}</td>
            </tr>

            <tr>
              <td>Дата рождения</td>
              <td>{{$user->birth_date}}</td>
            </tr>

            <tr>
              <td>Комментарий</td>
              <td>{{$user->comment}}</td>
            </tr>

            <tr>
              <td>Уровень допуска</td>
              <td>{{$user->role->name}}</td>
            </tr>

            
            </tbody>
            </table>
            </div>
            
            </div>
            
            </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>
  <!-- /.content -->
@endsection