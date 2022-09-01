@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">            
            <div class="row">
                <div class="col-xl-6 mx-auto">
                    <form action="{{ route('posts.update', $post->id) }}" method="post">
                        @csrf
                        @method('PUT')
                        <div class="card">
                            <div class="card-header">
                                <h5 class="card-title"> Atualizar Postagem </h5>
                            </div>
            
                            <div class="card-body">
                                <div class="form-group my-3">
                                    <label for="title"> Título </label>
                                    <input type="text" name="title" id="title" class="form-control" placeholder="Title" value="{{ $post ? $post->title : '' }}" />
                                </div>
            
                                <div class="form-group my-3">
                                    <label for="description"> Descrição </label>
                                    <textarea name="description" id="description" class="form-control" rows="6" placeholder="Description">{{ $post ? $post->description : '' }}</textarea>
                                </div>
            
                                <div class="form-group">
                                    <button type="submit" class="btn btn-success"> Atualizar </button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
