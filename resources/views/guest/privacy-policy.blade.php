@extends('layouts.guest')

@section('content')
<!-- .breadcrumb-area -->
<section class="breadcrumb-area" style="background-image: url('{{ asset("assets/img/banners/banner-about.jpg") }}');">
    <div class="container">
        <div class="breadcrumb-text">
            <span class="wow fadeInLeft">Landco Beachtowns</span>
            <h2 class="page-title wow fadeInLeft" data-wow-delay="0.2s">Privacy Policy</h2>

            <!-- .breadcrumb-nav -->
            <ul class="breadcrumb-nav wow fadeInRight">
                <li><a href="{{ route('index') }}">Home</a></li>
                <li class="active">Privacy Policy</li>
            </ul>
        </div>
    </div>
</section>
<!-- /.breadcrumb-area -->

<!-- .text-block -->
<section class="text-block pt-115 pb-115">
    <div class="container">
        <div class="row align-items-center justify-content-center wow fadeInLeft" data-wow-delay=".3s">
            <div class="col-md-12 wow fadeInRight" data-wow-delay=".5s">
                <div class="block-text">
                    <div class="section-title mb-20">
                        <h3>Under Construction</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- /.text-block -->
@endsection