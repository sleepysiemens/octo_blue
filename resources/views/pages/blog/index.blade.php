@extends('Layouts.wrapper')

@section('title')
    {{$blog_post->title}}
@endsection

@section('content')
    @include('pages.blog.blocks.welcome')
    @include('pages.blog.blocks.text')
@endsection
