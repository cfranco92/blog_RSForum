{{-- Developed by Santiago Ramón Álvarez Gómez --}}
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card mb-4">
                <div class="card-body">
                    <p class="card-text">
                        {{ $comment->getDescription() }}
                    </p>
                    <p class="text-muted mb-0">
                        <em>
                            &ndash; {{ $comment->user->getName() }}
                        </em>
                        {{ $comment->created_at->format('d M Y') }}
                    </p>
                    <div class="row p-5">
                        <div class="col-md-12">
                            <ul id="errors">
                                    <b>{{ __('comment.replies') }}</b><br />
                                    @foreach($comment->replies as $reply)
                                        {{ $reply->get_description }}<br />
                                        <em>
                                            &ndash; {{ $reply->user->getName() }}
                                            {{ $reply->created_at->format('d M Y') }}
                                        </em>
                                        <hr>
                                    @endforeach
                            </ul>
                        </div>
                    </div>

                    <br><br><hr>
                    <h5 class="card-title">{{ __('comment.create')}}</h5>
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <form 
                        action="{{ route('replies.store') }}"
                        method="POST"
                        enctype="multipart/form-data"
                    >
                        <div class="form-group">
                            <label>{{ __('comment.description') }}</label>
                            <textarea name="description" rows="6" class="form-control" required></textarea>
                        </div>
                        <div class="form-group">
                            <input name="comment_id" value="{{$comment->getId()}}" type="hidden" required>
                        </div>
                        <div class="form-group">
                            @csrf
                            <input type="submit" value="{{ __('comment.buttonSend') }}" class="btn btn-sm btn-primary">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
