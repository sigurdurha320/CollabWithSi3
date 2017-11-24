@extends('/layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"><h3>{{$article->title}}</h3></div>

                <div class="panel-body">
                    	
                </div>
                <div class="panel-body">
                	@foreach($article->comments as $comment)
                		<li>{{$comment->contents}}</li>
                	@endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection