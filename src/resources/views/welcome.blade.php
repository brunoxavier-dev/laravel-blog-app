@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="row">
                <div class="col-xl-12 text-end">
                    <a href="{{ route('posts.create') }}" class="btn btn-primary"> Nova Postagem</a>
                </div>
            </div>
            <div class="card my-3">
                <div class="card-header">{{ __('Blog Creators') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <table class="table">
                        <thead>
                            <tr>
                                <th width="20%">Título</th>
                                <th width="80%">Descrição</th>
                            <tr>
                        </thead>

                        <tbody>
                            @forelse ($posts as $post)
                                <tr>
                                    <td>{{ $post->title }}</td>
                                    <td>{{ $post->description }}</td>                                    
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="4">
                                        <p class="text-danger text-center fw-bold"> No post found! </p>
                                    </td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
