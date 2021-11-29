@extends('master')
@section('title,"My Test')
@endsection
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-6">
                <div class="my-5">
                    <form action="{{ route('category.store') }}" method="post">
                        @csrf
                        <div class="">
                            <label for="" class="form-label">Category</label>
                            <input type="text" class="form-control" name="name">
                        </div>
                        <button class="btn btn-outline-primary">Add Category</button>
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
@endsection
