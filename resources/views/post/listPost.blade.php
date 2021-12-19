@extends('layouts.app')

@section('content')
<div class="container">

    <div class="row mb-2">

        <div class="col-md-3">
            <h2>Posts List</h2>
        </div>

    </div>

    <div class="col-md-8">
        <div class="card-body">
            @if (session('success_status'))
                <div class="alert alert-success" role="alert" id="success-alert">
                    {{ session('success_status') }}
                </div>
            @endif
        </div>
    </div>

    <h1>{{ Auth::user()->id; }}</h1>


    <div class="row mb-2">

        <div class="col-md-8">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Title</th>
                        <th scope="col">Created User</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($postsList as $key => $post)
                        <tr>
                            <th scope="row">{{ $key+1 }}</th>
                            <td>{{ $post->title }}</td>
                            <td>{{ $post->user->name }}</td>
                            <td class="d-flex">
                                <div class="mx-1">
                                    <a class="btn btn-warning" href="{{ route('post.edit', ['post' => $post->id]) }}"><i class="fas fa-edit"></i></a>
                                </div>
                                <div class="mx-1">
                                @if (isset(Auth::user()->id) && Auth::user()->usertype == '1')
                                    <form action="{{ route('post.destroy', ['post' => $post->id]) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger"><i class="fas fa-trash-alt"></i></button>
                                    </form>  
                                @endif
                                </div>
                            </td>
                        </tr>
                    @endforeach
                    
                </tbody>
            </table>
        </div>

    </div>

</div>

<script>
    $("#success-alert").fadeTo(2000, 500).slideUp(500, function(){
        $("#success-alert").slideUp(500);
    });

</script>
@endsection
