@extends('layouts.guest')

@section('content')
<!-- .breadcrumb-area -->
<section class="breadcrumb-area" style="background-image: url('{{ asset("assets/img/banners/banner-about.jpg") }}');">
    <div class="container">
        <div class="breadcrumb-text">
            <span class="wow fadeInLeft">Job Opportunities</span>
            <h2 class="page-title wow fadeInLeft" data-wow-delay="0.2s">{{ $career_details->title }}</h2>

            <!-- .breadcrumb-nav -->
            <ul class="breadcrumb-nav wow fadeInRight">
                <li><a href="{{ route('index') }}">Home</a></li>
                <li><a href="{{ route('careers') }}">Careers</a></li>
                <li class="active">{{ $career_details->title }}</li>
            </ul>
        </div>
    </div>
</section>
<!-- /.breadcrumb-area -->

 <!-- .blog-section -->
<section class="blog-section pt-120 pb-120">
    <div class="container">
        <div class="row justify-content-center">
             <div class="col-lg-8 wow fadeInUp">
                <div class="news-details-box">
                    <div class="entry-content">
                        {!! $career_details->content !!}
                    </div>
                </div>
            </div>
            
            <!-- Blog Sidebar -->
            <div class="col-lg-4 col-md-8 col-sm-10">
                <div class="sidebar">
                    <!-- About Author Widget -->
                    <div class="widget about-author-widget mb-40 wow fadeInUp" data-wow-delay="0.2s">
                        <h5 class="widget-title">Landco Pacific Corporation</h5>
                        <div class="author-box">
                            <img src="{{ asset('assets/img/author.png') }}" alt="author">
                            <h6>Luxury Living Redefined.</h6>
                            <p>We envision places of leisure in which life can come alive in all its breathtaking fullness and beauty.</p>
                        </div>
                    </div>
                    <!-- Social Icon Widget -->
                    <div class="widget socail-widget mb-40 wow fadeInUp">
                        <h5 class="widget-title">Never Miss News</h5>
                        <ul>
                            <li><a href="https://www.facebook.com/LandcoPacificCorporation/" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="https://www.instagram.com/landco_official/?hl=en" target="_blank"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="https://www.youtube.com/user/landcoofficial" target="_blank"><i class="fab fa-youtube-square"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- .blog-section -->
@endsection