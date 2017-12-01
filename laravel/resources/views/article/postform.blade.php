@extends('/layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading"><h3>Upload Form</h3></div>

                    <div class="panel-body">

                    </div>
                    <div class="container">
                        <form method="POST" action="article">
                            <div class="form-group">
                                <label class="form-group">Title</label>
                                <br>
                                <input class="form-group" type="text" name="article_title" required><br>
                            </div>
                            <div class="form-group">
                                <label class="form-group">Text</label>
                                <br>
                                <textarea name="article_textContent" class="form-contol"></textarea>
                            </div>
                            <!--div class="form-group">
                                <button class="btn btn-primary">Upload image</button>
                            </div-->
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                    <div class="panel-body">
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
