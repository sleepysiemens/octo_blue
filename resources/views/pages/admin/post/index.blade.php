@extends('Layouts.admin')
@section('blog')
    active
@endsection
@section('content')
    <h1>Блог</h1>
    <div class="row mt-3">
        <a class="btn btn-primary col-2" href="{{route('admin.post.create')}}">
            Новый пост
        </a>
    </div>
    <div class="row mt-3">
        <div class="col-12 card rounded-4">
            <div class="card-body">
                <table class="w-100">
                    <tr class="border-bottom">
                        <th class="py-2">#</th>
                        <th class="py-2">Url</th>
                        <th class="py-2">Title</th>
                        <th class="py-2">Keywords</th>
                        <th class="py-2">Description</th>
                        <th class="py-2"></th>
                        <th class="py-2"></th>
                    </tr>
                    @foreach($blog_posts as $post)
                        <tr>
                            <td class="py-2">{{$post->id}}</td>
                            <td class="py-2">{{$post->url}}</td>
                            <td class="py-2">{{$post->title}}</td>
                            <td class="py-2">{{$post->keywords}}</td>
                            <td class="py-2">{{$post->description}}</td>
                            <td class="py-2"><a href="{{route('admin.post.edit',$post)}}"><i class="fas fa-pen"></i></a></td>
                            <td class="py-2">
                                <form method="post" action="{{route('admin.post.delete',$post)}}">
                                    @csrf
                                    @method('delete')
                                    <button class="btn"><i class="fas fa-trash-alt"></i></button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
@endsection
