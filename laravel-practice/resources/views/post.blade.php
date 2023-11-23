@extends('layouts.app')

@section('post')
    <h1>{{ $post->title }}</h1>
    <p>{{ $post->body }}</p>
@endsection
