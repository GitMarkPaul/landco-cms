<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Trietrade Fintech Philippines - Send Payments, Pay Online, Merchant Account">
    <title>CMS | Admin Account</title>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <!-- Global Styles -->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
</head>
<body>
    <div class="tf-app">
        <!-- Start: Mobile Tabs -->
        <div class="tf-mobile-tabs-wrapper">
            <ul class="tf-mobile-tabs-menu">
                <li class="tf-mobile-tabs-items">
                    <a href="admin.html">
                        <ion-icon name="home-outline"></ion-icon>
                    </a>
                </li>
                <li class="tf-mobile-tabs-items">
                    <a href="my-qr-code.html">
                        <ion-icon name="qr-code-outline"></ion-icon>
                    </a>
                </li>
                <li class="tf-mobile-tabs-items">
                    <a href="transaction-history.html">
                        <ion-icon name="document-text-outline"></ion-icon>
                    </a>
                </li>
                <li class="tf-mobile-tabs-items">
                    <a href="profile.html">
                        <ion-icon name="person-outline"></ion-icon>
                    </a>
                </li>
            </ul>
        </div>
        <!-- End: Mobile Tabs -->
        
        <!-- Start: Header -->
        <header class="tf-header">
            <div class="container-fluid">
                <nav class="tf-navbar">
                    <div class="d-flex align-items-center">
                        <a href="javascript:void(0);" id="sidebar-toggle">
                            <div class="tf-box-icon-primary">
                                <ion-icon name="menu"></ion-icon>
                            </div>
                        </a>
                        <span class="tf-merchant-name">Admin Account</span>
                    </div>
                    <ul class="tf-navbar-menu">
                        <li class="tf-navbar-items tf-nav-user-wrapper">
                            <div class="btn-group">
								<a href="#" class="tf-nav-user" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
									<div class="tf-symbol-circle tf-bg-primary-accent">
                                        <span class="tf-text-primary fw-bold">A</span>
                                    </div>
                                    <div class="tf-nav-user-wrapper">
                                        <span class="tf-navbar-name">{{ Auth::user()->username }}</span>
                                        <span class="tf-navbar-email">{{ Auth::user()->email }}</span>
                                    </div>
								</a>
								<ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton1">
									<li>
                                        <div class="tf-merchant-offwrapper p-3">
                                            <div class="tf-symbol-circle-md tf-bg-primary-accent">
                                                <span class="tf-text-primary fw-bold">JD</span>
                                            </div>
                                            <div class="d-grid ms-3">
                                                <h6 class="d-flex align-items-center">{{ Auth::user()->name }}</h6>
                                                <span class="text-muted">+639275942058</span>
                                            </div>
                                        </div>
									</li>
                                    <li>
										<a class="dropdown-item" href="{{ route('password') }}">
                                            <div class="tf-bg-icon bg-light">
                                                <ion-icon name="key"></ion-icon>
                                            </div>
											<span class="ms-3">Change Password</span>
										</a>
									</li>
									<li>
										<a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                                            <div class="tf-bg-icon bg-light">
                                                <ion-icon name="log-out"></ion-icon>
                                            </div>
											<span class="ms-3 fw-bold text-danger">Logout</span>
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
                                    <ion-icon name="grid"></ion-icon>
                                    <span class="{{ Request::is('home') ? 'text-primary fw-bold' : ''}}">Dashboard</span>
                                </a>
                            </li>
                            <li class="tf-aside-heading">CMS</li>
                            <li class="tf-aside-items {{ Request::is('admin/publications/listing') || Request::is('admin/publications/create') || Request::is('admin/publications/category') ? 'tf-active' : ''}}">
                                <a data-bs-toggle="collapse" href="#blogs" role="button" aria-expanded="false" aria-controls="blogs">
                                    <ion-icon name="newspaper"></ion-icon>
                                    <span>Blogs</span>
                                    <ion-icon name="chevron-down-outline" class="tf-aside-chevron-down"></ion-icon>
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
                                <a href="{{ route('settings') }}">
                                    <ion-icon name="settings"></ion-icon>
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <!-- Icons -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    @yield('scripts')
</body>
</html>