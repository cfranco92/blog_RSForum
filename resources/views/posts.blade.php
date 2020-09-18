{{-- Developed by Cristian Franco Bedoya --}}
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            @foreach($posts as $post)
            <div class="card mb-4">
                @if ($post->image)
                    <img src="{{ $post->get_image }}" class="card-img-top">
                @elseif ($post->iframe)
                    <div class="embed-responsive embed-responsive-16by9">
                        {!! $post->getIframe() !!}
                    </div>
                @endif
                <div class="card-body">
                    <h5 class="card-title">{{ $post->getTitle() }}</h5>
                    <p class="card-text">
                        {{ $post->get_excerpt }}
                        <a href="{{ route('post', $post) }}"> {{ __('posts.reedMore') }}</a>
                    </p>
                    <p class="text-muted mb-0">
                        <em>
                            &ndash; {{ $post->user->getName() }}
                        </em>
                        {{ $post->created_at->format('d M Y') }}
                    </p>
                </div>
            </div>
            @endforeach()
            {{ $posts->links() }}
        </div>
    </div>
</div>
@endsection
