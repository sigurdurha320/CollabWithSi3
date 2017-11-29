@extends('/layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading"><h3>Upload Form</h3></div>

                    <div class="panel-body">

                    </div>
                    <form method="POST">
                        <label class="form-group">Title</label>
                        <input class="form-group" type="text" name="article.title"><br>
                        <div class="form-group">
                            <textarea name="contents" class="form-contol"></textarea>
                        </div>
                        <div class="form-group">
                            <button type="submit">Submit</button>
                        </div>
                    </form>
                    <div class="panel-body">
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection




/*[article.id, article.title, article.user_id, article.image_id, article.textContent, article.privacy]
[image.id, image.img]*/