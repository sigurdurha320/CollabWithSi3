@extends('/layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"><h3>{{$article->title}}</h3></div>
                <div class="panel-body">
                    @if(!is_null($article->image_id))
                        <div>
                            <img src="/img/{{$article->image_id}}">
                        </div>
                    @endif
                    @if(!is_null($article->textContent))
                        <div>
                            {{$article->textContent}}
                        </div>
                    @endif
                </div>

                <div class="panel-body">
                    <form method="POST" action="/comment/{{$article->id}}">
                        <div class="form-group">
                            <textarea name="contents" class="form-contol"></textarea>
                        </div>
                        <div class="form-group">
                            <button class="btn btn-primary" type="submit">add comment</button>
                        </div>  
                    </form>
                    <ul class="panel-body">
                        @foreach($article->comments as $comment)
                            <li>{{$comment->contents}}</li>
                        @endforeach
                    </ul>
                </div>
                
            </div>
        </div>
    </div>
</div>
@endsection