@extends('Layouts.admin')
@section('main')
    active
@endsection

@section('content')
    <h1>Главная</h1>
    <div class="container">
        <form method="post" action="{{route('admin.update')}}">
            @csrf
            @method('patch')
            <div class="form-group mt-3">
                <label class="form-control-label ms-2" for="title">Title</label>
                <input type="text" class="form-control" id="title" name="title" value="{{$title}}" required>
            </div>
            <div class="form-group mt-3">
                <label class="form-control-label ms-2" for="description">Description</label>
                <textarea id="summernote" name="description" required>{{$description}}</textarea>
            </div>
            <div class="form-group mt-3">
                <label class="form-control-label ms-2" for="keywords">Keywords</label>
                <textarea id="summernote1" name="keywords" required>{{$keywords}}</textarea>
            </div>
            <button class="mt-3 btn-primary btn">
                Обновить
            </button>
        </form>
    </div>
<hr>
    <div class="container pt-5">
        <div class="card">
            <div class="card-body">
                <h3>Прайс</h3>
                <div class="row mt-3">
                    <div class="col-auto">
                        <a href="{{route('price.download')}}" target="_blank">Скачать прайс</a>
                    </div>
                    <form method="post" action="{{route('admin.file')}}" enctype="multipart/form-data" class="col">
                        @csrf
                        <input type="file" name="file" required>
                        <button type="submit" class="btn btn-primary">Загрузить</button>
                    </form>
                </div>
            </div>
        </div>

    </div>

@endsection
