@include('source.style')
@include('source.script')

<aside class="sidebar" id="sidebar">
    <ul class="sidebar-nav" id="sidebar-nav">
        @if (Auth::check())
        @if (auth()->user()->level === 'admin')

        <li class="nav-heading">Admin Menu</li>
        <li class="nav-item">
            <div class="nav-link collapse"><a href="{{ route('home-admin.view') }}"><i class="bi bi-grid"></i>Dashboard</a></div>
        </li>

        <li class="nav-item">
            <div class="nav-link collapse"><a href="{{ route('data-pengguna.view') }}"><i class="bi bi-person"></i>Data Pengguna</a></div>
        </li>

        <li class="nav-item">
            <div class="nav-link collapse"><a href="{{ route('data-berita.view') }}"><i class="bi bi-envelope"></i>Data Berita</a></div>
        </li>

        <li class="nav-heading">Content</li>
        <li class="nav-item">
            <div class="nav-link collapse"><a href="{{ route('berita-terkini.view') }}"><i class="bi bi-newspaper"></i>Berita Terkini</a></div>
        </li>


        <li class="nav-heading">Others</li>
        <li class="nav-item">
            <div class="nav-link collapse"><a href="{{ route('logout') }}"><i class="bi bi-signout"></i>Logout</a></div>
        </li>
        @elseif (auth()->user()->level === 'users')

        <li class="nav-heading">Your Menu</li>
        <li class="nav-item">
            <div class="nav-link collapse"><a href="{{ route('berita-terkini.view') }}"><i class="bi bi-newspaper"></i>Berita Terkini</a></div>
        </li>

        <li class="nav-item">
            <div class="nav-link collapse"><a href="{{ route('about-us.view') }}"><i class="bi bi-question"></i>About Us</a></div>
        </li>

        <li class="nav-header">Others</li>
        <li class="nav-item">
            <div class="nav-link collapse"><a href="{{ route('logout') }}"><i class="bi bi-signout"></i>Logout</a></div>
        </li>
        @endif
        @else
        <li class="nav-heading">Guest Menu</li>
        <li class="nav-item">
            <div class="nav-link collapse"><a href="{{ route('berita-terkini.view') }}"><i class="bi bi-newspaper"></i>Berita Terkini</a></div>
        </li>

        <li class="nav-item">
            <div class="nav-link collapse"><a href="{{ route('berita-terkini.view') }}"><i class="bi bi-question"></i>About Us</a></div>
        </li>
        <li class="nav-header">Others</li>
        <li class="nav-item">
            <div class="nav-link collapse"><a href="{{ route('logout') }}"><i class="bi bi-signout"></i>Logout</a></div>
        </li>
        @endif
    </ul>
</aside>
