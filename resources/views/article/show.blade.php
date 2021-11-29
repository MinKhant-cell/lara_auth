<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-12 col-lg-6">
            <div class="my-5">
                <a class="btn btn-outline-primary" href="{{ route('article.index') }}">Back</a>
                @foreach(\App\Models\Article::all() as $article)
                    <div class="card mb-4">
                        <div class="card-body">
                            <h4>{{ $article->name }}</h4>
                            <p>{{ $article->description }}</p>
                            <div>
                                <a href="{{ route('article.edit',$article->id) }}" class="btn btn-outline-warning">Edit</a>
                                <form class="d-inline-block" action="{{ route('article.destroy',$article->id) }}" method="post">
                                    @csrf
                                    @method('delete')
                                    <button class="btn btn-outline-danger">Delete</button>
                                </form>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
</body>
</html>
