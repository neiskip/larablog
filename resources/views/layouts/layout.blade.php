<?php
 preg_match('/([a-z]*)@/i', Route::getCurrentRoute()->getActionName(), $matches);
 $controllerName = $matches[1];
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{$title}}</title>
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="shortcut icon" href="{{asset('img/favicon.png')}}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.0/font/bootstrap-icons.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
          <div class="container collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="col-6 navbar-nav">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="/">Главная</a>
              </li>
              @if(Route::currentRouteName() != 'login' && Route::currentRouteName() != 'register' && !str_contains(strtolower(URL::current()),'dashboard'))
              <li class="nav-item offset-3">
                <a class="nav-link active" aria-current="page" href="{{route('post.create')}}">Создать пост</a>
              </li>
            </ul>
            <form class="d-flex form-inline" action="{{route('post.index')}}">
              <input class="form-control me-2" name="search" type="search" placeholder="Найти..." aria-label="Search">
              <button class="btn btn-outline-success" type="submit">Поиск</button>
            </form>
            @endif
            <ul class="navbar-nav">
                <!-- Authentication Links -->
                @guest
                    @if (Route::has('login'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Войти') }}</a>
                        </li>
                    @endif

                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Регистрация') }}</a>
                        </li>
                    @endif
                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }}
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown" id="dropdown-list">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                {{ __('Выйти') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest
            </ul>
          </div>
        </div>
      </nav>
    <div class="container">
        @if($errors->any())
        @foreach ($errors->all() as $error)
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            {{$error}}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endforeach
        @endif
        @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{session('success')}}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif
        @yield('content')
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    {{-- <script src="{{asset('js/app.js')}}"></script> --}}
    <script>$( ".dropdown" ).mouseover(function() {
       $("#dropdown-list").css('display', 'inline-block');
      });
      $( ".dropdown" ).mouseleave(function() {
       $("#dropdown-list").css('display', 'none');
      });
      </script>
      @if(Route::currentRouteName() == 'post.edit' || Route::currentRouteName() == 'post.create')
      <script src="{{asset('ckeditor/ckeditor.js')}}"></script>
      <script type="text/javascript">
          ClassicEditor.create( document.querySelector( '.ckeditor' ) )
            .catch( error => {
            console.error( error );
            } );
      </script>
      @endif
</body>
</html>
