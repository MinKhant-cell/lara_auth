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
                <form class="" action="{{ route('article.update',$article->id) }}" method="post">
                    @csrf
                    @method('put')
                    <div>
                        <label for="" class="form-label">Article</label>
                        <input type="text" class="form-control" name="name" value="{{ $article->name }}">
                    </div>

                    <div>
                        <label for="" class="form-label">Category</label>
                        <select class="form-select" name="category" >
                            @foreach(\App\Models\Category::all() as $category)
                                <option value="{{ $category->id }}" {{ $category->id == $article->category_id?"selected":"" }}>{{ $category->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div>
                        <label for="" class="form-label">Description</label>
                        <textarea name="description" rows="7" class="form-control">{{ $article->description }}</textarea>
                    </div>

                    <div>
                        <button class="btn btn-outline-info">Update Article</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</body>
</html>
