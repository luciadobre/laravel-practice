@extends('layout')

@section('random-photo')

<h1>Random Unsplash Photo</h1>
<button id="loadPhoto">Load Random Photo</button>
<div id="photoContainer"></div>

<script>
    document.getElementById('loadPhoto').addEventListener('click', function () {
        fetch('/random-photo')
            .then(response => response.json())
            .then(data => {
                document.getElementById('photoContainer').innerHTML = `<img src="${data.url}" alt="Random Photo">`;
            });
    });
</script>

@endsection

