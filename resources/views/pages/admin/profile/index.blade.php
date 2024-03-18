@extends('Layouts.admin')
@section('main')
    active
@endsection

@section('content')
    <h1>Аккаунт</h1>
    <div class="container">
        <form method="post" action="{{route('admin.profile.update')}}">
            @csrf
            @method('patch')
            <div class="form-group mt-3">
                <label class="form-control-label ms-2" for="email">Email</label>
                <input type="email" class="form-control" id="email" name="email" value="{{auth()->user()->email}}" required>
            </div>

            @if($error)
                <div class="form-group mt-3">
                    <p class="col bg-red rounded p-2 opacity-75">Пароли не совпадают</p>
                </div>
            @endif
            @if($succ)
                <div class="form-group mt-3">
                    <p class="col bg-green rounded p-2 opacity-75">Данные обновлены</p>
                </div>
            @endif

            <div class="form-group mt-3">
                <label class="form-control-label ms-2" for="password">Пароль</label>
                <input type="password" class="form-control" id="password" name="password" required>
            </div>
            <div class="form-group mt-3">
                <label class="form-control-label ms-2" for="password2">Повтор Пароля</label>
                <input type="password" class="form-control" id="password2" name="password2" required>
            </div>
            <button class="mt-3 btn-primary btn">
                Обновить
            </button>
        </form>
    </div>

@endsection
