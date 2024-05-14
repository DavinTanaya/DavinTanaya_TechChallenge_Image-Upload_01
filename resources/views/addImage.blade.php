@extends('layout')

@section('content')
    <form method="POST" action="{{route('create.image')}}" class="content" enctype="multipart/form-data">
        @csrf
        <h1>Upload new image</h1>
        <div class="input-group mb-3">
            <span class="input-group-text" id="inputGroup-sizing-default">Title</span>
            <input type="text" class="form-control" aria-label="Sizing example input" name="title" aria-describedby="inputGroup-sizing-default" required>
        </div>

        <div class="input-group mb-3">
            <span class="input-group-text" id="inputGroup-sizing-default">Description</span>
            <input type="text" class="form-control" aria-label="Sizing example input" name="description" aria-describedby="inputGroup-sizing-default" required>
        </div>

        <div class="input-group mb-3">
            <span class="input-group-text" id="inputGroup-sizing-default">Image</span>
            <input type="file" class="form-control" name="itempic" required>
        </div>
        <button type="submit" class="btn btn-success">Upload</button>  
    </form>
@endsection