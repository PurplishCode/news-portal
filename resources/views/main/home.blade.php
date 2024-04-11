<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

</head>
<body>
@extends('layout.baseplate')
    @section('content')
    @if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>

    @endif

    <form action="{{ route('logout') }}" class="form-group" method="POST">@csrf <button class="btn btn-md btn-primary" type="submit">LOGOUT</button></form>
    @endsection
</body>
</html>
