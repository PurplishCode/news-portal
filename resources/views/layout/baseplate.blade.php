<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
@include('source.style')
@include('source.script')
</head>
<body>
    @include('layout.navbar')
    @include('layout.sidebar')
@yield('content')
<script src="./resources/js/app.js"></script>
</body>
</html>
