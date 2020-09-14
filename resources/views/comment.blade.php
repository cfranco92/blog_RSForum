@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card mb-4">
                <div class="card-body">
                    <p class="card-text">
                        {{ $comment->description }}
                    </p>
                    <p class="text-muted mb-0">
                        <em>
                            &ndash; {{ $comment->user->name }}
                        </em>
                        {{ $comment->created_at->format('d M Y') }}
                    </p>
                    <div class="row p-5">
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
                    </div>

                    <br><br><hr>
                    <h5 class="card-title">Create reply</h5>
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
                            <label>Description *</label>
                            <textarea name="description" rows="6" class="form-control" required></textarea>
                        </div>
                        <div class="form-group">
                            <input name="comment_id" value="{{$comment->id}}" type="hidden" required>
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
