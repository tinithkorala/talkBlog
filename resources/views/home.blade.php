@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>


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


        {{-- Post controllers --}}
        <div class="col-md-8 pt-2">
            <div class="card">

                <div class="card-header">Post Controllers</div>

                <div class="p-2 d-flex">
                        <a href="{{ route('post.create') }}" class="btn btn-dark mx-1">Create Post</a>
                        <a href="{{ route('post.list', ['id' => auth()->id()]) }}" class="btn btn-dark mx-1">Posts List</a>
                </div>
                
            </div>
        </div>
        {{-- blog controllers --}}


    </div>
</div>

<script>
    $("#success-alert").fadeTo(2000, 500).slideUp(500, function(){
        $("#success-alert").slideUp(500);
    });
</script>
@endsection
