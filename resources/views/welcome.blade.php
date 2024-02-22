@extends('app')
@section('content')
    <div class="container mt-5">
        <div class="row">
            @foreach($posts as $post)
                <div class="col-lg-4">
                    <a href="{{ route('post_detail_page', ['post' => $post->id]) }}" style="text-decoration: inherit">
                        <div class="card mb-3" style="max-width: 540px;">
                            <div class="row g-0">
                                <div class="col-md-4">
                                    <img src="{{ asset('storage/' .  $post->image) }}" class="img-fluid rounded-start"
                                         alt="...">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title">{{ $post->title }}</h5>
                                        <p class="card-text">{{ Str::limit($post->description, 200) }}</p>
                                        <p class="card-text"><small class="text-muted">By {{ $post->user->name }}</small>
                                        </p>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </div>

@endsection
