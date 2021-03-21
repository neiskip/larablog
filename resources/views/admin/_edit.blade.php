@extends('layouts.layout', ['title' => "Редактирование"])
@section('content')

<form action="{{route('admin.update', ['id' => $user->id])}}" method="post" enctype="multipart/form-data">
    @csrf
    @method('PATCH')
    <h3>Редактировать пользователя</h3>
    @include('admin._form')

    <div class="form-check">
        <input type="checkbox" class="form-check-input" id="exampleCheck1" name="email_verified" {{$user->email_verified_at ? 'checked' : ''}}>
        <label class="form-check-label" for="exampleCheck1">E-Mail подвтержден</label>
      </div>
    <input type="submit" value="Редактировать пользователя" class="btn btn-outline-success btn__confirm">
</form>
@endsection
