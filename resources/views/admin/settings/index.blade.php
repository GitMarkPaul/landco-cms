@extends('layouts.admin')

@section('content')
<section>
    <div class="container">
        <!-- Start: Breadcrumb -->
        <nav class="breadcrumb-nav" aria-label="breadcrumb">
            <h4 class="breadcrumb-heading">Settings</h4>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Accounts</li>
            </ol>
        </nav>
        <!-- End: Breadcrumb -->

        <div class="row row-cols-xl-1 g-2">
            <div class="col">
                <a href="{{ route('website_details') }}">
                    <div class="tf-card">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div class="bg-icon bg-light">
                                    <i class="bi bi-globe"></i>
                                </div>
                                <div class="ms-4">
                                    <h4 class="card-title">Website Details</h4>
                                    <span>Manage websites information </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col">
                <a href="{{ route('password') }}">
                    <div class="tf-card">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div class="bg-icon bg-light">
                                    <i class="bi bi-key-fill"></i>
                                </div>
                                <div class="ms-4">
                                    <h4 class="card-title">Password</h4>
                                    <span>Change your password</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col">
                <a href="{{ route('password') }}">
                    <div class="tf-card">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div class="bg-icon bg-light">
                                    <i class="bi bi-person-fill"></i>
                                </div>
                                <div class="ms-4">
                                    <h4 class="card-title">Profile</h4>
                                    <span>Manage your profile account</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col">
                <a href="{{ route('files') }}">
                    <div class="tf-card">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div class="bg-icon bg-light">
                                    <i class="bi bi-image-fill"></i>
                                </div>
                                <div class="ms-4">
                                    <h4 class="card-title">Files</h4>
                                    <span>Manage your uploaded images</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col">
                <a href="{{ route('files') }}">
                    <div class="tf-card">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div class="bg-icon bg-light">
                                    <i class="bi bi-people-fill"></i>
                                </div>
                                <div class="ms-4">
                                    <h4 class="card-title">Users</h4>
                                    <span>Manage users and authorization</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>
@endsection