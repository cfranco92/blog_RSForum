{{-- Developed by Cristian Franco Bedoya --}}
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    {{ __('postsindex.items') }}
                    <a href="{{ route('posts.create') }}" class="btn btn-sm btn-primary float-right">{{ __('postsindex.create') }}</a>
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <table class="table">
                        <thead>
                            <tr>
                                <th>{{ __('postsindex.id') }}</th>
                                <th>{{ __('postsindex.title') }}</th>
                                <th colspan="2">&nbsp;</th>
                            </tr>
                            <tbody>
                                @foreach ($posts as $post)
                                    <tr>
                                        <td>{{ $post->getId() }}</td>    
                                        <td>{{ $post->getTitle() }}</td>
                                        <td>
                                            <a href="{{ route('posts.edit', $post) }}" class="btn btn-primary btn-sm">
                                                {{ __('postsindex.edit') }}
                                            </a>
                                        </td>
                                        <td>
                                            <form action="{{ route('posts.destroy', $post) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <input 
                                                    type="submit" 
                                                    value="{{ __('postsindex.delete') }}" 
                                                    class="btn btn-sm btn-danger"
                                                    onclick="return confirm('{{ __('postsindex.confirmationMessage') }}')"
                                                >
                                            </form>
                                        </td>
                                    </tr>    
                                @endforeach
                            </tbody>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
