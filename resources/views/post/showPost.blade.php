@extends('layouts.app')

@section('content')
<div class="container">


    @isset($post)

        <div class="card mb-3">
            <img src="{{ asset('/storage/photos/'.$post->imagePath) }}" class="card-img-top" alt="...">
            <div class="card-body">
            <h5 class="card-title">{{ $post->title }}</h5>
            <p class="card-text">{{ $post->description }}</p>
            <p class="card-text"><small class="text-muted">Last updated {{ date('jS M Y', strtotime( $post->updated_at)) }}</small></p>
            </div>
        </div>
        
    @endisset
    

</div>

{{-- <script>
    $("#success-alert").fadeTo(2000, 500).slideUp(500, function(){
        $("#success-alert").slideUp(500);
    });
</script> --}}
@endsection
