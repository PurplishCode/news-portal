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
<div class="wrapper">
<div class="card" style="padding:20px; width:400px">
<h4 class="d-flex justify-content-center mt-3 fw-bold">
    CREATE POST
</h4>

<form action="" class="form-group pt-3" method="POST">
    @csrf
    <div class="row">
        <div class="col-md-6">
            <label for="title" class="fw-bold">Post Title:</label>
            <input type="text" class="form-control" name="title" placeholder="Title">
        </div>
        <div class="col-md-6">
            <label for="title"></label>
            <input type="text" class="form-control" name="title" placeholder="Title">
        </div>
    </div>

</form>

</div>
</div>
@endsection
</body>
</html>
