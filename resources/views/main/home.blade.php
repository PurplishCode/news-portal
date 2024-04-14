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
<main>
    @can('is-editor')
    <div class="d-flex justify-content-end p-3"><a href="{{ route('create-post.view') }}" class="btn btn-md btn-success">POST</a>
        </div>
    @endcan
    <section class="news-list">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="first-news">
                        ha
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="list-news">
                        Hhaha
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>



    @endsection
</body>
</html>
