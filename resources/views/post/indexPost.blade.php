@extends('layouts.app')

@section('content')

    <div class="container">

        <div class="row mb-2">

            <div class="col-md-3">
                <h2>Create Blog</h2>
            </div>

        </div>

        <div class="row">

            <form action="{{ route('post.store') }}" method="POST" enctype="multipart/form-data"> 
                @csrf
                <div class="mb-3">
                    <label for="title" class="form-label">Title</label>
                    <input type="text" name="title" id="title" class="form-control">
                    @error('title')
                        <small class="fw-bold text-danger">{{ $message }}</small>    
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label">Description</label>
                    <textarea name="description" id="description" cols="30" rows="10" class="form-control"></textarea>
                    @error('description')
                        <small class="fw-bold text-danger">{{ $message }}</small>    
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="image" class="form-label">Image</label>
                    <input type="file" name="image" id="image" class="form-control">
                    @error('image')
                        <small class="fw-bold text-danger">{{ $message }}</small>    
                    @enderror
                </div>

                <button type="submit" class="btn btn-success">Submit Post</button>

            </form>

        </div>

    </div>

@endsection