@extends('layout')

@section('content')
    <div class="container mt-4">
        <h1>Photo Gallery</h1>
        <div class="d-flex justify-content-end">
            <div class="text-right mb-3">
                <a href="{{route('create.image.form')}}" class="text-light bg-success btn btn-lg">Upload new image</a>
            </div>
        </div>
    </div>
    <div class="row">
        @foreach ($images as $image)
            <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
                <img style="width: 300px" src="{{ asset('storage/' . $image->image_path) }}" alt="" class="image-item" data-toggle="modal" data-target="#exampleModal{{ $image->id }}">
            </div>
                        
            <div class="modal fade" id="exampleModal{{ $image->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">{{$image->title}}</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <img style="width: 300px" src="{{ asset('storage/' . $image->image_path) }}" alt="{{$image->title}}">
                        <h5>{{$image->description}}</h5>
                    </div>
                    <div class="modal-footer justify-content-center">
                        <form method="POST" action="{{route('delete', ['id' => $image->id])}}">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger btn-sm cart_remove"><i class="bi bi-trash"></i></button>
                        </form>
                    </div>
                </div>
                </div>
            </div>        
        @endforeach
    </div>    
@endsection