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
                <div class="card-header">{{ __('Dashboard') }}</div>
                <div class="card-body">
                    <div class="form-group my-3">
                        <label for="title"> Título </label>
                        <input type="text" name="title" id="title" readonly disabled class="form-control"
                            value="{{ $post ? $post->title : '' }}" />
                    </div>
    
                    <div class="form-group my-3">
                        <label for="description"> Descrição </label>
                        <textarea name="description" id="description" readonly disabled class="form-control"
                            placeholder="Description">{{ $post->description }}</textarea>
                    </div>
    
                    <div class="form-group">
                        <a href="{{ route('dashboard') }}" class="btn btn-success"> Back </a>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
</div>
@endsection
