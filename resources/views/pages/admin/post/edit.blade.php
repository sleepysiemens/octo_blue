@extends('Layouts.admin')
@section('blog')
    active
@endsection
@section('content')
    <h1>Новый пост</h1>
    <a href="{{route('admin.post.index')}}">назад</a>
    <div class="container">
        <form method="post" action="{{route('admin.post.update', $blog_post)}}">
            @csrf
            @method('patch')
            <div class="form-group mt-3">
                <label class="form-control-label ms-2" for="url">Url</label>
                <input type="text" class="form-control" id="url" name="url" value="{{$blog_post->url}}" required>
            </div>
            <div class="form-group mt-3">
                <label class="form-control-label ms-2" for="title">Title</label>
                <input type="text" class="form-control" id="title" name="title" value="{{$blog_post->title}}" required>
            </div>
            <div class="form-group mt-3">
                <label class="form-control-label ms-2" for="keywords">Keywords</label>
                <input type="text" class="form-control" id="keywords" name="keywords" value="{{$blog_post->keywords}}" required>
            </div>
            <div class="form-group mt-3">
                <label class="form-control-label ms-2" for="description">Description</label>
                <textarea class="form-control" id="description" name="description" required rows="5">{{$blog_post->description}}</textarea>
            </div>
            <div class="form-group mt-3">
                <label class="form-control-label ms-2" for="description">Text</label>
                <textarea id="summernote" name="text">{{$blog_post->text}}</textarea>
            </div>
            <button class="mt-3 btn-primary btn">
                Обновить
            </button>
        </form>
    </div>
@endsection
