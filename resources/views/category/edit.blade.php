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
                <form action="{{ route('category.update',$category->id) }}" method="post">
                    @csrf
                    @method('put')
                    <div class="">
                        <label for="" class="form-label">Category</label>
                        <input type="text" class="form-control" name="name" value="{{ $category->name }}">
                    </div>
                    <button class="btn btn-outline-success">Update Category</button>
                </form>

                <table class="table table-striped table-bordered">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Category</th>
                        <th>Controls</th>
                        <th>Created_at</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach(\App\Models\Category::all() as $category)
                        <tr>
                            <td>{{ $category->id }}</td>
                            <td>{{ $category->name }}</td>
                            <td>
                                <a href="{{ route('category.edit',$category->id) }}" class="btn btn-outline-warning">Edit</a>
                                <form action="{{ route('category.destroy',$category->id) }}" method="post">
                                    @csrf
                                    @method('delete')
                                    <button class="btn btn-outline-danger">Delete</button>
                                </form>
                            </td>
                            <td>{{ $category->created_at }}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
</body>
</html>
