@extends('app')
@section('content')
    <div class="container mt-3 mb-5">
        <div class="container-fluid text-center">
            <img src="{{ asset('storage/' .  $post->image) }}" class="card-img-top" alt="..." style="width: 10vw">
        </div>
        <div class="card mb-3">
            <div class="card-body">
                <h5 class="card-title">{{ $post->title }}</h5>
                <p class="card-text">{{ $post->description }}</p>
                <p class="card-text"><small class="text-muted">By {{ $post->user->name }}
                        - {{ $post->created_at }}</small></p>
            </div>
        </div>
        <hr>
        @foreach($post->sections as $section)
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title"># {{ $section->title }}</h5>
                    <h6 class="card-subtitle mb-2 text-muted">{{$section->description}}</h6>
                    <p class="card-text">
                        {!! $section->content !!}
                    </p>
                </div>
            </div>
        @endforeach
    </div>
@endsection
