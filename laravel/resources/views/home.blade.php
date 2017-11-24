@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                @foreach($articles as $article)
                    <div class="panel-heading"><a href="/article/{{ $article->id}}"><h3>{{$article->title}}</h3></a></div>
                    <div class="panel-body">
                       stuff
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection
