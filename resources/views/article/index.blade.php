@extends('master')
@section('title')
@endsection
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-6">
                <div class="my-5">
                    <a class="btn btn-outline-primary" href="{{ route('article.create') }}">Add</a>
                    @foreach($articles as $article)
                        <div class="card mb-4">
                            <div class="card-body">
                                <h4>{{ $article->name }}</h4>
                                <div>
                                    <p class="badge bg-primary">
                                        {{ $article->category->name  }}
                                    </p>
                                </div>
                                <p>{{ \Illuminate\Support\Str::words($article->description,30) }}</p>
                                @isset($article->photo)
                                    @foreach($article->photo as $photo)
                                        <img src="{{ asset('storage/images/'.$photo->name) }}" class="article-photo" alt="">
                                    @endforeach
                                @endisset

                                <div>
                                    <a href="{{ route('article.edit',$article->id) }}" class="btn btn-outline-warning">Edit</a>
                                    <a href="{{ route('article.show',$article->id) }}" class="btn btn-outline-info">Show</a>
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

@endsection
