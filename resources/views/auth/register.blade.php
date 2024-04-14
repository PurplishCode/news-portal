<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
@include('source.style')
@include('source.script')
<body>

    <section>
        <main class="d-flex justify-content-center align-items-center min-vh-100 p-3">
            <div class="card" style="width: 500px; border:1px solid black;">
                <form action="{{ route('post.register') }}" method="POST" class="form-group">
                    @csrf
                    <div class="d-flex justify-content-center text-center"><h5 class="lead my-2 fw-bold">Sign up Your Account!</h5></div>

                    <div class="d-flex justify-content-center text-center"><p class="text-muted">Join in the superfest of news.</p></div>
<div class="py-1 mt-3 px-4">
    <label for="" class="label">Username:</label><input type="text" class="form-control" name="username" placeholder="Your Username">
</div>
    <div class="py-1 mt-3 px-4">
        <label for="" class="label">Email:</label><input type="text" class="form-control" name="email" placeholder="user@gmail.com">
        <small class="text-muted form-text">We won't share your email with anyone.</small>
    </div>
        <div class="mt-3 px-4">
            <label for="" class="label">Password:</label><input type="password" class="form-control" name="password" placeholder="Your Password"></div>
<div class="py-3 mt-3 px-4">
    <button class="btn btn-md btn-primary w-100" type="submit">Submit</button>
</div>

<div class="divider mx-4">

<div class="card-text my-2">Already have an account? <a href="{{ route('login') }}">Sign in!</a></div>
@if (session('errors'))
<div class="alert alert-danger mx-4">{{ session()->all() }}</div>
@endif
</div>
</form>
            </div>
        </main>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>

</html>
