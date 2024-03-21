@extends('Layouts.wrapper')

@section('title'){{$title}}@endsection

@section('keywords'){{$keywords}}@endsection

@section('description'){{$description}}@endsection

@section('content')
    @include('pages.form-submit.blocks.welcome')
@endsection
