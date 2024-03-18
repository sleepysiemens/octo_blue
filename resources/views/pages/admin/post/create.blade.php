@extends('Layouts.admin')
@section('blog')
    active
@endsection
@section('content')
    <h1>Новый пост</h1>
    <a href="{{route('admin.post.index')}}">назад</a>
    <div class="container">
        <form method="post" action="{{route('admin.post.store')}}">
            @csrf
            <div class="form-group mt-3">
                <label class="form-control-label ms-2" for="url">Url</label>
                <input type="text" class="form-control" id="url" name="url" required>
            </div>
            <div class="form-group mt-3">
                <label class="form-control-label ms-2" for="title">Title</label>
                <input type="text" class="form-control" id="title" name="title" required>
            </div>
            <div class="form-group mt-3">
                <label class="form-control-label ms-2" for="keywords">Keywords</label>
                <input type="text" class="form-control" id="keywords" name="keywords" required>
            </div>
            <div class="form-group mt-3">
                <label class="form-control-label ms-2" for="description">Description</label>
                <textarea class="form-control" id="description" name="description" required rows="5"></textarea>
            </div>
            <button class="mt-3 btn-primary btn">
                Создать
            </button>
        </form>
    </div>
@endsection
