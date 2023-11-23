@extends('layouts.app')

@section('post')
    @if(isset($post))
        <h1>{{ $post->title }}</h1>
        <p>{{ $post->body }}</p>
    @else
        <p>Post not found</p>
    @endif

    {{-- {{ dd($post) }} --}}
@endsection
