@extends('layouts.app')

@section('content')
<div class="container">


    @isset($allPosts)

        @foreach ($allPosts as $post)
        <div class="row">
            <div class="card mb-3" style="max-width: 500px;">
                <div class="row g-0">
                    <div class="col-md-6">
                    <img src="{{ asset('/storage/photos/'.$post->imagePath) }}" class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-6">
                    <div class="card-body">
                        <h4 class="card-title"><b>{{ $post->title }}</b></h4>
                        <p class="card-text">
                            <?php
                                $description = $post->description;
                                $subStringVal = substr($description, 0, 80);
                                echo $subStringVal.'...';
                            ?>
                        </p>
                        <p class="card-text"><small class="text-muted">Last updated {{ date('jS M Y', strtotime($post->updated_at)) }}</small></p>
                        <a href="{{ route('post.show', ['post' => $post->id]) }} ">Read More</a>
                    </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
        
    @endisset
    

</div>

{{-- <script>
    $("#success-alert").fadeTo(2000, 500).slideUp(500, function(){
        $("#success-alert").slideUp(500);
    });
</script> --}}
@endsection
