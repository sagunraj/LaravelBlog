@extends('main')
@section('content')
    <div class="row">
            <div class="col-md-12">
                <div class="jumbotron">
                <h1>Welcome to my blog!</h1>
                <p class="lead">Thank you for visiting. This is my test website with Laravel.</p>
                <p><a class="btn btn-primary btn-lg" href="#" role="button">Popular Posts</a></p>
            </div>
        </div>
    </div>
        <div class="row">
            <div class="col-md-8">
                <div class="post">
                    <h3>Post Title</h3>
                    <p>This is the content of the post title that you just posted.</p>
                    <a href="#" class="btn btn-primary">Read more</a>
                </div>
                <hr/>
                <div class="post">
                    <h3>Post Title</h3>
                    <p>This is the content of the post title that you just posted.</p>
                    <a href="#" class="btn btn-primary">Read more</a>
                </div>
                <hr/>
                <div class="post">
                    <h3>Post Title</h3>
                    <p>This is the content of the post title that you just posted.</p>
                    <a href="#" class="btn btn-primary">Read more</a>
                </div>
                <hr/>
                <div class="post">
                    <h3>Post Title</h3>
                    <p>This is the content of the post title that you just posted.</p>
                    <a href="#" class="btn btn-primary">Read more</a>
                </div>
                <hr/>
            </div>
            <div class="col-md-3 col-md-offset-1">
                <h2>Sidebar</h2>
            </div>
        </div>
@endsection