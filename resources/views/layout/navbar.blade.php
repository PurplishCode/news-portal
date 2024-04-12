@include('source.style')
@include('source.script')

<header class="header d-flex align-items-center" id="header">
    <div class="d-flex justify-content-between align-items-center">
        <a href="{{ url('/') }}" class="logo d-flex justify-content-center align-items-center">
        <img src="{{ asset('assets/logo.PNG') }}" alt="" style="height:50px">
        <span class="d-lg-block d-none px-3">VNews</span>
        </a>
        <i class="bi bi-list toggle-sidebar-btn"></i>
    </div>
    @if (Auth::check())
<nav class="header-nav ms-auto px-3">{{ auth()->user()->username }}</nav>
    @else
    <nav class="header-nav ms-auto px-2">
        <a class="btn btn-md btn-success" href="{{ route('login') }}">Login</a>
        <a class="btn btn-md btn-success" href="{{ route('register.view') }}">Register</a>

    </nav>
@endif
</header>
