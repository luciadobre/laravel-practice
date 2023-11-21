<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Random Photo</title>
</head>
<body>
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
</body>
</html>
