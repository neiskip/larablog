@extends('layouts.layout' , ['title' => 'Главная страница'])
@section('content')
      @if(isset($_GET['search']))
        <?php $searchResNum = count($posts);?>
            @if($searchResNum>0)
              <h2>Результаты поиска по запросу "{{$_GET['search']}}".</h2>
              <p class="lead">{{$searchResNum==1 ? 'Найден' : 'Всего найдено' }} {{$searchResNum}} @if($searchResNum%10===1 && $searchResNum>11)пост
                @elseif(($searchResNum%10>1 && $searchResNum%10<5) || ($searchResNum>1 && $searchResNum<5))поста
                @else постов@endif.</p>
            @else
                <h2>По запросу "{{strip_tags($_GET['search'])}}" ничего не найдено</h2>
                <a href="{{route('post.index')}}" class="btn btn-outline-primary">Отобразить все посты</a>
            @endif
        @endif
        <div class="row">
            @foreach ($posts as $post)

            <div class="col-6">
                <div class="card">
                    <div class="card-header"><h2>{{$post->short_title}}</h2></div>
                    <div class="card-body">
                        <div class="card-img" style="background-image: url({{$post->img ?? asset('img/no_img.jpg')}})"></div>
                        <div class="card-author">Автор: {{$post->name}}</div>
                        <a href="{{route('post.show', ['post' => $post->post_id])}}" class="btn btn-outline-primary">Смотреть полностью</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    <div class="container">
        @if(!isset($_GET['search']))
        {{$posts->links()}}
        @endif
@endsection
