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

        <div class="row row-cols-xl-2 row-cols-lg-2 row-cols-md-2 row-cols-1 g-3">
            <div class="col">
                <a href="{{ route('password') }}">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div class="icon-c-md warning">
                                    <i class="bi bi-lock-fill text-white"></i>
                                </div>
                                <div class="ms-3">
                                    <div class="fw-bold">Password</div>
                                    <small>Change your password</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col">
                <a href="{{ route('files') }}">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div class="icon-c-md success">
                                    <i class="bi bi-image-fill"></i>
                                </div>
                                <div class="ms-3">
                                    <div class="fw-bold">Files</div>
                                    <small>Manage your uploaded images </small>
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