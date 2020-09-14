@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card mb-4">
                @if ($post->image)
                    <img src="{{ $post->get_image }}" class="card-img-top">
                @endif
                <div class="card-body">
                    <h5 class="card-title">{{ $post->title }}</h5>
                    @if ($post->iframe)
                        <div class="embed-responsive embed-responsive-16by9">
                            {!! $post->iframe !!}
                        </div>
                    @endif
                    <p class="card-text">
                        {{ $post->body }}
                    </p>
                    <p class="text-muted mb-0">
                        <em>
                            &ndash; {{ $post->user->name }}
                        </em>
                        {{ $post->created_at->format('d M Y') }}
                    </p>
                    <div class="row p-5">
                        <div class="col-md-12">
                            <ul id="errors">
                                    <b>Comments:</b><br />
                                    @foreach($post->comments as $comment)
                                        {{ $comment->get_description }}<br />
                                        <em>
                                            &ndash; {{ $comment->user->name }}
                                            {{ $comment->created_at->format('d M Y') }}
                                        </em>
                                        {{-- <div class="row p-5"> --}}
                                            <div class="col-md-12">
                                                <ul id="errors">
                                                        <b>Replies:</b><br />
                                                        @foreach($comment->replies as $reply)
                                                            {{ $reply->get_description }}<br />
                                                            <em>
                                                                &ndash; {{ $reply->user->name }}
                                                                {{ $reply->created_at->format('d M Y') }}
                                                            </em>
                                                            <hr>
                                                        @endforeach
                                                </ul>
                                            </div>
                                        {{-- </div> --}}
                                        <p class="card-text">
                                            <a href="{{ route('comment', $comment) }}">Reply Comment</a>
                                        </p>
                                        <hr>
                                    @endforeach
                            </ul>
                        </div>
                    </div>

                    <br><br><hr>
                    <h5 class="card-title">Create comment</h5>
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <form 
                        action="{{ route('comments.store') }}"
                        method="POST"
                        enctype="multipart/form-data"
                    >
                        <div class="form-group">
                            <label>Description *</label>
                            <textarea name="description" rows="6" class="form-control" required></textarea>
                        </div>
                        <div class="form-group">
                            <input name="post_id" value="{{$post->id}}" type="hidden" required>
                        </div>
                        <div class="form-group">
                            @csrf
                            <input type="submit" value="Send" class="btn btn-sm btn-primary">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
