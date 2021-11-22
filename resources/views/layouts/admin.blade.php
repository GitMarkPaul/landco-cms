<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Trietrade Fintech Philippines - Send Payments, Pay Online, Merchant Account">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>CMS | Admin Account</title>
    <!-- Global Styles -->
    <link rel="stylesheet" href="{{ mix('css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
</head>
<body>
    <div id="app" class="app">
        <!-- Start: Header -->
        <header class="tf-header">
            <div class="container-fluid">
                <nav class="tf-navbar">
                    <div class="d-flex align-items-center">
                        <a href="javascript:void(0);" id="sidebar-toggle">
                            <div class="tf-box-icon-primary">
                                <i class="bi bi-list"></i>
                            </div>
                        </a>
                        <img src="{{ asset('img/logo.png') }}" class="logo" alt="">
                        <span class="tf-merchant-name fw-bold">Landco</span>
                    </div>
                    <ul class="tf-navbar-menu">
                        <li class="tf-navbar-items tf-nav-user-wrapper">
                            <div class="btn-group">
								<a href="#" class="tf-nav-user" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
									<div class="tf-symbol-circle tf-bg-warning-accent">
                                        <span class="tf-text-primary fw-bold">{{ mb_substr(Auth::user()->username, 0, 1) }}</span>
                                    </div>
                                    <div class="tf-nav-user-wrapper">
                                        <span class="tf-navbar-name">{{ Auth::user()->username }}</span>
                                        <span class="tf-navbar-email">{{ Auth::user()->email }}</span>
                                    </div>
								</a>
								<ul class="dropdown-menu dropdown-menu-end dropdown-menu-dark" aria-labelledby="dropdownMenuButton1">
                                    <li>
                                        <a class="dropdown-item" href="{{ route('password') }}">
                                            <i class="bi bi-globe2"></i>
                                            <span class="ms-2">Website Details</span>
                                        </a>
                                    </li>
                                    <li>
										<a class="dropdown-item" href="{{ route('password') }}">
                                            <i class="bi bi-key-fill"></i>
											<span class="ms-2">Change Password</span>
										</a>
									</li>
									<li>
										<a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                                            <i class="bi bi-box-arrow-in-right"></i>
											<span class="ms-2">Logout</span>
										</a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                            @csrf
                                        </form>
									</li>
								</ul>
							</div>
                        </li>
                    </ul>
                </nav>
            </div>
        </header>
        <!-- End: Header -->

        <div class="row g-4">
            <div class="col-xl-2 col-lg-3 col-md-12 col-12">
                <div id="sidebar-overlay"></div>
                <!-- Start: Aside -->
                <aside class="tf-aside" id="sidebar-wrapper">
                    <div class="container-fluid">
                        <ul class="tf-aside-menu">
                            <li class="tf-aside-heading">Main Navigation</li>
                            <li class="tf-aside-items">
                                <a href="{{ route('home') }}">
                                    <i class="bi bi-grid-fill"></i>
                                    <span class="{{ Request::is('home') ? 'text-primary fw-bold' : ''}}">Dashboard</span>
                                </a>
                            </li>
                            <li class="tf-aside-heading">CMS</li>
                            <li class="tf-aside-items {{ Request::is('admin/publications/listing') || Request::is('admin/publications/create') || Request::is('admin/publications/category') ? 'tf-active' : ''}}">
                                <a data-bs-toggle="collapse" href="#blogs" role="button" aria-expanded="false" aria-controls="blogs">
                                    <i class="bi bi-newspaper"></i>
                                    <span>Blogs</span>
                                    <i class="bi bi-chevron-down aside-chevron-down"></i>
                                </a>

                                <div class="collapse show" id="blogs">
                                    <ul class="tf-aside-collapse">
                                        <li>
                                            <a href="{{ route('pub_index') }}">
                                                <span class="{{ Request::is('admin/publications/listing') ? 'text-primary fw-bold' : ''}}">Blog Listing</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{ route('pub_create') }}">
                                                <span class="{{ Request::is('admin/publications/create') ? 'text-primary fw-bold' : ''}}">Create New Blog</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{ route('pub_cat_index') }}">
                                                <span class="{{ Request::is('admin/publications/category') ? 'text-primary fw-bold' : ''}}">Blog Categories</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{ route('pub_archive') }}">
                                                <span class="{{ Request::is('admin/publications/archives') ? 'text-primary fw-bold' : ''}}">Blog Archives</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="tf-aside-items">
                                <a href="{{ route('careers.index') }}">
                                    <i class="bi bi-people"></i>
                                    <span class="{{ Request::is('admin/careers') ? 'text-primary fw-bold' : ''}}">Careers</span> 
                                </a>
                            </li>
                            <li class="tf-aside-items">
                                <a href="{{ route('settings') }}">
                                    <i class="bi bi-gear-fill"></i>
                                    <span class="{{ Request::is('admin/settings/index') ? 'text-primary fw-bold' : ''}}">Settings</span> 
                                </a>
                            </li>
                        </ul>
                    </div>
                </aside>
                <!-- End: Aside -->
            </div>

            <div class="col-xl-10 col-lg-9 col-md-12 col-12">
                <!-- Start: Main Container -->
                <main class="tf-main">
                    @yield('content')
                </main>
                <!-- End: Main Container -->
            </div>
        </div>
    </div>

    <!-- Global Scripts -->
    <script src="{{ asset('js/scripts.js') }}"></script>
    <script src="{{ mix('js/app.js') }}" defer></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    @stack('scripts')
    @yield('scripts')
</body>
</html>