
@extends('layouts.layout', ['title' => 'Панель администратора'])
@section('content')
<nav>
    <div class="nav nav-tabs" id="nav-tab" role="tablist">
      <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Пользователи</a>
    </div>
  </nav>
  <div class="tab-content" id="nav-tabContent">
    <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
        <div class="row">
            <table class="table">
                <thead class="thead-light">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Имя</th>
                        <th scope="col">E-Mail</th>
                        <th scope="col">User ID</th>
                        <th scope="col">Дата подтверждения E-Mail</th>
                        <th scope="col">created_at</th>
                        <th scope="col">updated_at</th>
                        <th scope="col">- -</th>

                    </tr>
                </thead>
                <tbody>
                    <?php $i=0; ?>
                    @foreach ($users as $user)
                    <tr>
                        <th scope="col">{{++$i}}</th>
                        <td scope="col">{{$user->name}}</td>
                        <td scope="col">{{$user->email}}</td>
                        <td scope="col">{{$user->id}}</td>
                        <td scope="col">{{$user->email_verified_at ?? 'NULL'}}</td>
                        <td scope="col">{{$user->created_at}}</td>
                        <td scope="col">{{$user->updated_at}}</td>
                        <td scope="col">{{--<a href="{{route('admin.edit', ['id' => $user->id])}}" class="mr-2 bi bi-pencil-square"></a>--}}
                            <div class="actions">
                                <a href="#" class="delete-action" onclick="if (confirm('Точно удалить?')){
                                                                            $(this).siblings('form').submit();
                                                                            }
                                                                            return false;"><i class="bi bi-trash"></i></a>
                                {{ Form::open(['url' => route('admin.destroy', ['id'=>$user->id]), 'method' => 'delete']) }}
                                {{ Form::close() }}
                            </div>
                            </td>
                    </tr>
                    @endforeach
                </tbody>

            </table>
            <div class="col-3"><a href="{{route('admin.create')}}" class="btn btn-outline-success" style="width: 40%;">+</a></div>
        </div>
    </div>
  </div>
@endsection
