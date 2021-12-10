<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Landco CMS Admin</title>
    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('css/app.min.css') }}">
</head>
<body>
    <div id="app">
        <header>
            <nav class="navbar navbar-light">
                <div class="container-fluid">
                    <a class="navbar-brand">Nav</a>
                    <a href="javascript:void(0);" class="button secondary" id="toggle-menu" aria-label="Sidebar Toggler"><i class="bi bi-list text-dark"></i></a>
                    <ul class="nav-menu">
                        <li class="nav-item dropdown">
                            <a class="nav-link d-flex align-items-center" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <div class="icon-c primary">{{ Auth::user()->initials }}</div>
                            </a>
                            <ul class="dropdown-menu mt-2" aria-labelledby="navbarDropdownMenuLink" style="margin-left: -200px; width: 250px;">
                                <li>
                                    <div class="p-4 d-grid justify-items-center text-center dot-overlay">
                                        <div class="icon-c-md primary">{{ Auth::user()->initials }}</div>
                                        <span class="mt-2">{{ Auth::user()->name }}</span>
                                        <span class="font-size-sm">{{ Auth::user()->email }}</span>
                                    </div>
                                </li>
                                <li><a href="{{ route('password') }}" class="dropdown-item"><i class="bi bi-shield-lock"></i> Change Password</a></li>
                                <li>
                                    <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();" class="dropdown-item"><i class="bi bi-box-arrow-in-right"></i> Logout</a>
                                </li>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <div class="sidebar open">
            <div class="logo-details">
                <i class="bi bi-shop-window icon"></i>
                <div class="logo_name">Landco</div>
                <i class="bi bi-list" id="toggle-sidebar"></i>
            </div>
            <ul class="nav-list pl-0">
                <li>
                    <a href="{{ route('home') }}" class="sidebar-item {{ Helper::activeMenu('home') }}">
                        <i class="bi bi-grid-fill"></i>
                        <span class="links_name">Dashboard</span>
                    </a>
                </li>
                <li class="sidenav-heading text-muted">{{ __('Content') }}</li>
                <li>
                    <a href="{{ route('pub_index') }}" class="sidebar-item {{ Helper::activeMenu('admin/publications*') }}">
                        <i class="bi bi-newspaper"></i>
                        <span class="links_name">Publications</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('careers.index') }}" class="sidebar-item {{ Helper::activeMenu('admin/careers*') }}">
                        <i class="bi bi-people"></i>
                        <span class="links_name">Careers</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('settings') }}" class="sidebar-item {{ Helper::activeMenu('admin/settings*') }}">
                        <i class="bi bi-gear"></i>
                        <span class="links_name">Settings</span>
                    </a>
                </li>
            </ul>
        </div>
        <main>
            @yield('content')
        </main>
        <footer>
            <div class="container-fluid">
                <div class="footer-bottom">
                    <span>Copyright &copy; 2021. All Rights Reserved.</span>
                </div>
            </div>
        </footer>
    </div>

    <!-- Sidebar Overlay -->
    <div class="sidebar-overlay"></div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/custom.js') }}" defer></script>
    @stack('scripts')
</body>
</html>
