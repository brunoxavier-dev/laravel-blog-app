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
                <div class="card-header">{{ __('Dashboard Blog Creators') }}</div>

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
                                <th width="60%">Descrição</th>
                                <th width="20%">Ações</th>
                            <tr>
                        </thead>

                        <tbody>
                            @forelse ($posts as $post)
                                <tr>
                                    <td>{{ $post->title }}</td>
                                    <td>{{ $post->description }}</td>
                                    <td>
                                        <form action="{{ route('posts.destroy', $post->id) }}" method="post">
                                            @csrf
                                            <a href="{{ route('posts.show', $post->id) }}" title="View" class="btn btn-sm btn-info ml-2"> Visualizar </a>
                                            <a href="{{ route('posts.edit', $post->id) }}" title="Edit" class="btn btn-sm btn-success"> Editar </a>
                
                                            @method('DELETE')
                                            <button type="submit" onclick="return confirm('Are you sure?');" title="Delete" class="btn btn-sm btn-danger"> Deletar </button>
                                        </form>
                                    </td>
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
