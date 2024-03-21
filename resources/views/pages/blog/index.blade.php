@extends('Layouts.wrapper')

@section('title'){{$blog_post->title}}@endsection

@section('description'){{$blog_post->description}}@endsection

@section('keywords'){{$blog_post->keywords}}@endsection

@section('content')
    @include('pages.blog.blocks.welcome')
    @include('pages.blog.blocks.text')
@endsection
