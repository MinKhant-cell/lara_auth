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
@include('navbar')

<div class="container">
    <div class="row">
        <div class="col-12 col-lg-6">
            <div class="my-5">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form class="" action="{{ route('article.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div>
                        <label for="" class="form-label">Article</label>
                        <input type="text" class="form-control @error('name') is-invalid  @enderror" name="name"  value="{{ old('name') }}">
                        @error('name') <small class="text-danger">{{ $message }}</small> @enderror
                    </div>

                    <div>
                        <label for="" class="form-label">Category</label>
                        <select class="form-select" name="category" >
                            @foreach(\App\Models\Category::all() as $category)
                                <option value="{{ $category->id }}" {{ $category->id == old('category')?'selected': "" }}>{{ $category->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div>
                        <label for="" class="form-label my-3">Upload Photo</label>
                        <input type="file" class="form-control mb-3" name="photo[]" multiple>
                    </div>
                    <div>
                        <label for="" class="form-label">Description</label>
                        <textarea name="description" rows="7" class="form-control">{{ old('description') }}</textarea>
                    </div>

                    <div>
                        <button class="btn btn-outline-primary">Post Article</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</body>
</html>
