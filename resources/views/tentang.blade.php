<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h2>Tentang</h2>
{{-- Link dengan URL --}}
<a href="{{ url('/cv') }}">Portofolio</a>
<a href="{{ url('/') }}">Home</a>
<hr>
<a href="{{ route('cv-saya') }}">Portofolio</a>
<a href="{{ route('home') }}">Home</a>
</body>
</html>
