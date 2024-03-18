@extends('Layouts.wrapper')

@section('title')
    {{$title}}
@endsection

@section('description')
    {{$description}}
@endsection

@section('content')
    @include('pages.main.blocks.welcome')
    @include('pages.main.blocks.about')
    @include('pages.main.blocks.features')
    @include('pages.main.blocks.table')
    @include('pages.main.blocks.form')
    @include('pages.main.blocks.news')
@endsection
