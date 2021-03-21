@extends('layouts.layout', ['title' => "Создать пользователя"])
@section('content')

<form action="{{route('admin.store')}}" method="post" enctype="multipart/form-data">
    @csrf
    <h3>Создать пользователя</h3>
    <div class="form-group row">
        <label for="name" class="col-sm-2 col-form-label">Имя пользователя</label>
        <div class="col-3">
          <input type="text" class="form-control"  name="name" required value="{{old('name') ?? $user->name ?? ''}}">
        </div>
    </div>
    <div class="form-group row">
        <label for="name" class="col-sm-2 col-form-label">E-Mail</label>
        <div class="col-3">
          <input type="email" class="form-control"  name="email" required value="{{old('email') ?? $user->email ?? ''}}">
        </div>
    </div>
    
    <div class="form-group row">
        <label for="password" class="col-sm-2 col-form-label">{{ __('Пароль') }}</label>
        <div class="col-3">
            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>

    <div class="form-group row">
        <label for="password-confirm" class="col-sm-2 col-form-label">{{ __('Подтверждение пароля') }}</label>
        <div class="col-3">
            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
        </div>
    </div>
    <input type="submit" value="Создать пользователя" class="btn btn-outline-success btn__confirm">
</form>
@endsection
