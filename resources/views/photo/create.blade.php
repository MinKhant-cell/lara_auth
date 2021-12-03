@extends('master')
@section('title') Upload Photo @stop
@section('content')

    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="col-6">
                    <div class="my-5">
                        <form action="{{ route('photo.store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <label for="" class="form-label my-3">Upload Photo</label>
                            <input type="file" class="form-control mb-3" name="photo[]" multiple>
                            <button class="btn btn-outline-primary">Upload</button>
                        </form>

                        {{ asset('storage/images/61a5676a263a7_photo.jpg') }}
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
