@extends('layouts.guest')

@section('content')	
<section class="slider">
    <div class="container">
        <div class="row justify-content-center align-items-center">
            <div class="col-md-6 text-center">
                <img src="{{ asset('assets/img/logo_beachtowns.png') }}" class="banner-logo mb-4" alt="Logo">
                <ul>
                    <li data-animation="fadeInUp" data-delay="1.1s">
                        <a class="main-btn btn-filled" href="{{ route('projects') }}">Take A Tour</a>
                        <a class="main-btn btn-border" href="#" data-toggle="modal" data-target="#modal_beachtowns">Play Video</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- .about-section -->
<section class="about-section pt-115">
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-lg-6 col-md-10">
                <div class="row about-features-boxes">
                    <div class="col-sm-6">
                        <img src="{{ asset('assets/img/introduction/introduction-1.jpg') }}" alt="Image" class="intro-img-1 wow fadeInUp" />
                    </div>
                    <div class="col-sm-6">
                        <img src="{{ asset('assets/img/introduction/introduction-2.jpg') }}" alt="Image" class="intro-img-2 wow fadeInUp" data-wow-delay="0.2s" />
                    </div>
                    <div class="col-sm-6">
                        <img src="{{ asset('assets/img/introduction/introduction-3.jpg') }}" alt="Image" class="intro-img-3 wow fadeInUp" data-wow-delay="0.4s" />
                    </div>
                    <div class="col-sm-6">
                        <img src="{{ asset('assets/img/introduction/introduction-4.jpg') }}" alt="Image" class="intro-img-4 wow fadeInUp" data-wow-delay="0.6s" />
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-8 col-sm-10">
                <div class="abour-text pl-50 pr-50">
                    <div class="section-title mb-30 wow fadeInRight">
                        <span class="title-tag">Introducing</span>
                        <h2 class="mb-0">Landco Beachtowns, creating the new standard for luxury beachside living</h2>
                    </div>
                    <p class="wow fadeInRight" data-wow-delay="0.2s">It’s your modern hometown conveniently waiting for you, amidst sun and sea.</p>
                    <p class="wow fadeInRight" data-wow-delay="0.4s">Landco Beachtowns are master planned residential and resort communities, driven by a powerful vision to create beachside living destinations for the urban pioneers.</p>
                    <p class="wow fadeInRight" data-wow-delay="0.6s">Conveniently close to city centers.</p>
                    <a href="{{ route('beachtowns') }}" class="main-btn btn-filled mt-20 mb-20 wow fadeInRight" data-wow-delay="0.6s">Explore Now</a>
                </div>
            </div>
        </div>
    </div>
    <div class="about-right-bottom">
        <div class="about-bottom-img">
            <img src="{{ asset('assets/img/backgrounds/3.jpg') }}" alt="">
        </div>
    </div>
</section>
<!-- /.about-section -->

<!-- .featured-project -->
<section class="text-block pt-115 pb-115">
    <div class="container">
        <div class="row align-items-center justify-content-center justify-content-lg-between">
            <div class="col-lg-6 wow fadeInLeft" data-wow-delay=".3s">
                <div class="block-text mb-small">
                    <div class="section-title mb-20">
                        <span class="title-tag">Landco BeachTowns</span>
                        <h3>Setting the new standard of living</h3>
                    </div>
                    <p>An exciting development is taking shape in the prosperous enclaves of Batangas and Davao. A beachside concept whose time has come. Introducing Landco BeachTowns. Its your modern hometown conveniently waiting for you amidst Sun and Sea. Landco BeachTowns are masterplanned residential and resort communities.</p>
                    <p>Driven by a powerful vision to create beachside living destinations. For the urban pioneers just a driving distance away from city centers. As a subsidiary of Metro Pacific, Landco is poised to expand its place in leisure developments. From high end residential communities like Punta Fuego to masterplanned tourism communities in Calatagan, Laiya and Samal, Davao.</p>
                </div>
            </div>
            <div class="col-lg-5 col-md-10 wow fadeInRight" data-wow-delay=".5s">
                <div class="video-wrap" style="background-image: url('{{ asset("assets/img/img-beachtown.jpg") }}');"></div>
            </div>
        </div>
    </div>
</section>
<!-- /.featured-project -->

<!-- .featured-project -->
<section class="text-block">
    <div class="container">
        <div class="cta-inner">
            <div class="row justify-content-between align-items-center">
                <div class="col-lg-5 wow fadeInLeft">
                    <h4>LANDCO BeachTowns are rising over hundreds of hectares of prime real estate</h4>
                    <ul class="list-check enlarge hidden">
                        <li><h5>With seaside residential homes</h5></li>
                        <li><h5>Beach side retail establishments</h5></li>
                        <li><h5>World class hotels and condominiums</h5></li>
                        <li><h5>Themed restaurants</h5></li>
                    </ul>
                    <ul class="list-check enlarge">
                        <li><h5>With seaside residential communities</h5></li>
                        <li><h5>Leisure Tourism Estates</h5></li>
                        <li><h5>World-class hotels and serviced condominiums</h5></li>
                        <li><h5>Themed resort amenities</h5></li>
                    </ul>
                </div>
                <div class="col-lg-6 wow fadeInRight">
                    <p>It's a confluence of breathtaking sights With the immediacy of technology<br />
                    A partnership of nature with world class infrastructure and modernity<br />
                    A feast for your eyes are beautiful promenades<br />
                    Inviting Cocoons And lush gardens<br />
                    The perfect environment for the discerning investor or the imaginative homeowner<br />
                    To build a dream beach place Or start a resort business</p>
                    <p>Landco BeachTowns in beautiful historic calatagan, sunkissed windswept Laiya and wonderfully rustic Samal, Davao
                    Are prime residential, tourism and business hubs where living and working are brought together in a new improved norm, sharing space, sharing ideas, sharing dreams, living, working and thriving together in a special beach setting</p>
                    <p><strong>Landco BeachTowns, setting the new standard of living</strong></p>
                    <p><strong>Life as it should be</strong></p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- /.featured-project -->

<!-- .section-map -->
<section class="section-map for-screen wow fadeInUp" style="background-image: url('{{ asset("assets/img/img-ocean.jpg") }}'); ">
    <div class="container">
        <div id="slider_map" class="row justify-content-end align-items-center carousel slide" data-ride="carousel">
            <div class=" card-marker-details">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="card">
                            <div class="card-body">
                                <h2 class="mb-4 hidden">CaSoBe</h2>
                                <img src="{{ asset('assets/img/projects/casobe/logo-white.png') }}" class="img-fluid" alt="CaSoBe" />
                                <p>There’s a magical place in the shores of Calatagan called CaSoBe.</p>
                                <a href="{{ route('casobe') }}" class="main-btn mt-4" tabindex="0">Explore</a>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="card">
                            <div class="card-body">
                                <img src="{{ asset('assets/img/projects/club-laiya/logo-white.png') }}" class="img-fluid" alt="Club Laiya" />
                                <p>At the heart of Batangas, at the wind swept shores of Laiya, lies exotic and alluring Club Laiya.</p>
                                <a href="{{ route('club_laiya') }}" class="main-btn mt-4" tabindex="0">Explore</a>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="card">
                            <div class="card-body">
                                <img src="{{ asset('assets/img/projects/costa-azalea/logo-white.png') }}" class="img-fluid" alt="Costa Azalea" />
                                <p>Playa Azalea is a first-class luxury development that brings out the best of Samal’s natural beauty.</p>
                                <a href="{{ route('costa_azalea') }}" class="main-btn mt-4" tabindex="0">Explore</a>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="card">
                            <div class="card-body">
                                <img src="{{ asset('assets/img/projects/playa-laiya/logo-white.png') }}" class="img-fluid" alt="Playa Laiya" />
                                <p>Playa Laiya is our master-planned exclusive seaside residential community in Laiya, San Juan, Batangas.</p>
                                <a href="{{ route('playa_laiya') }}" class="main-btn mt-4" tabindex="0">Explore</a>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="card">
                            <div class="card-body">
                                <img src="{{ asset('assets/img/projects/playa-calatagan/logo-white.png') }}" class="img-fluid" alt="Playa Calatagan" />
                                <p>Playa Calatagan Village is a master-planned exclusive seaside residential community in Calatagan, Batangas.</p>
                                <a href="{{ route('playa_calatagan') }}" class="main-btn mt-4" tabindex="0">Explore</a>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="card">
                            <div class="card-body">
                                <img src="{{ asset('assets/img/projects/playa-azalea/logo-white.png') }}" class="img-fluid" alt="Playa Azalea" />
                                <p>A master-planned exclusive seaside community located in Barangay Limao, Island Garden City of Samal, Davao del Norte.</p>
                                <a href="{{ route('playa_azalea') }}" class="main-btn mt-4" tabindex="0">Explore</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="floating-cloud cloud-1"><img src="{{ asset('assets/img/img-cloud-1.png') }}" alt="" /></div>
            <div class="floating-cloud cloud-4"><img src="{{ asset('assets/img/img-cloud-2.png') }}" alt="" /></div>
            <div class="floating-cloud cloud-6"><img src="{{ asset('assets/img/img-cloud-2.png') }}" alt="" /></div>
            
            <div class="col-md-10">
                <div class="position-relative">
                    <ol class="carousel-indicators">
                        <li data-target="#slider_map" data-slide-to="0" class="icon-map-marker marker-1 active">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512"><path d="M172.268 501.67C26.97 291.031 0 269.413 0 192 0 85.961 85.961 0 192 0s192 85.961 192 192c0 77.413-26.97 99.031-172.268 309.67-9.535 13.774-29.93 13.773-39.464 0zM192 272c44.183 0 80-35.817 80-80s-35.817-80-80-80-80 35.817-80 80 35.817 80 80 80z"/></svg>
                        </li>
                        <li data-target="#slider_map" data-slide-to="1" class="icon-map-marker marker-2">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512"><path d="M172.268 501.67C26.97 291.031 0 269.413 0 192 0 85.961 85.961 0 192 0s192 85.961 192 192c0 77.413-26.97 99.031-172.268 309.67-9.535 13.774-29.93 13.773-39.464 0zM192 272c44.183 0 80-35.817 80-80s-35.817-80-80-80-80 35.817-80 80 35.817 80 80 80z"/></svg>
                        </li>
                        <li data-target="#slider_map" data-slide-to="2" class="icon-map-marker marker-3">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512"><path d="M172.268 501.67C26.97 291.031 0 269.413 0 192 0 85.961 85.961 0 192 0s192 85.961 192 192c0 77.413-26.97 99.031-172.268 309.67-9.535 13.774-29.93 13.773-39.464 0zM192 272c44.183 0 80-35.817 80-80s-35.817-80-80-80-80 35.817-80 80 35.817 80 80 80z"/></svg>
                        </li>
                        <li data-target="#slider_map" data-slide-to="3" class="icon-map-marker marker-4">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512"><path d="M172.268 501.67C26.97 291.031 0 269.413 0 192 0 85.961 85.961 0 192 0s192 85.961 192 192c0 77.413-26.97 99.031-172.268 309.67-9.535 13.774-29.93 13.773-39.464 0zM192 272c44.183 0 80-35.817 80-80s-35.817-80-80-80-80 35.817-80 80 35.817 80 80 80z"/></svg>
                        </li>
                        <li data-target="#slider_map" data-slide-to="4" class="icon-map-marker marker-5">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512"><path d="M172.268 501.67C26.97 291.031 0 269.413 0 192 0 85.961 85.961 0 192 0s192 85.961 192 192c0 77.413-26.97 99.031-172.268 309.67-9.535 13.774-29.93 13.773-39.464 0zM192 272c44.183 0 80-35.817 80-80s-35.817-80-80-80-80 35.817-80 80 35.817 80 80 80z"/></svg>
                        </li>
                        <li data-target="#slider_map" data-slide-to="5" class="icon-map-marker marker-6">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512"><path d="M172.268 501.67C26.97 291.031 0 269.413 0 192 0 85.961 85.961 0 192 0s192 85.961 192 192c0 77.413-26.97 99.031-172.268 309.67-9.535 13.774-29.93 13.773-39.464 0zM192 272c44.183 0 80-35.817 80-80s-35.817-80-80-80-80 35.817-80 80 35.817 80 80 80z"/></svg>
                        </li>
                    </ol>
                    
                    <!-- Map -->
                    <img src="{{ asset('assets/img/philippine-map.png') }}" class="img-fluid philippine-map" alt="" />
                </div>
            </div>
        </div>
    </div>
</section>
<!-- /.section-map -->

<!-- .section-map -->
<section class="section-map for-mobile wow fadeInUp" style="background-image: url('{{ asset("assets/img/img-ocean.jpg") }}'); ">
    <div class="container">
        <div id="slider_map_mobile" class="row justify-content-end align-items-center carousel slide" data-ride="carousel">
            <div class=" card-marker-details">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="card">
                            <div class="card-body">
                                <h2 class="mb-4 hidden">CaSoBe</h2>
                                <img src="{{ asset('assets/img/projects/casobe/logo-white.png') }}" class="img-fluid" alt="CaSoBe" />
                                <p>There’s a magical place in the shores of Calatagan called CaSoBe.</p>
                                <a href="{{ route('casobe') }}" class="main-btn mt-4" tabindex="0">Explore</a>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="card">
                            <div class="card-body">
                                <img src="{{ asset('assets/img/projects/club-laiya/logo-white.png') }}" class="img-fluid" alt="Club Laiya" />
                                <p>At the heart of Batangas, at the wind swept shores of Laiya, lies exotic and alluring Club Laiya.</p>
                                <a href="{{ route('club_laiya') }}" class="main-btn mt-4" tabindex="0">Explore</a>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="card">
                            <div class="card-body">
                                <img src="{{ asset('assets/img/projects/costa-azalea/logo-white.png') }}" class="img-fluid" alt="Costa Azalea" />
                                <p>Playa Azalea is a first-class luxury development that brings out the best of Samal’s natural beauty.</p>
                                <a href="{{ route('costa_azalea') }}" class="main-btn mt-4" tabindex="0">Explore</a>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="card">
                            <div class="card-body">
                                <img src="{{ asset('assets/img/projects/playa-laiya/logo-white.png') }}" class="img-fluid" alt="Playa Laiya" />
                                <p>Playa Laiya is our master-planned exclusive seaside residential community in Laiya, San Juan, Batangas.</p>
                                <a href="{{ route('playa_laiya') }}" class="main-btn mt-4" tabindex="0">Explore</a>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="card">
                            <div class="card-body">
                                <img src="{{ asset('assets/img/projects/playa-calatagan/logo-white.png') }}" class="img-fluid" alt="Playa Calatagan" />
                                <p>Playa Calatagan Village is a master-planned exclusive seaside residential community in Calatagan, Batangas.</p>
                                <a href="{{ route('playa_calatagan') }}" class="main-btn mt-4" tabindex="0">Explore</a>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="card">
                            <div class="card-body">
                                <img src="{{ asset('assets/img/projects/playa-azalea/logo-white.png') }}" class="img-fluid" alt="Playa Azalea" />
                                <p>A master-planned exclusive seaside community located in Barangay Limao, Island Garden City of Samal, Davao del Norte.</p>
                                <a href="{{ route('playa_azalea') }}" class="main-btn mt-4" tabindex="0">Explore</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-md-10">
                <div class="position-relative">
                    <ol class="carousel-indicators">
                        <li data-target="#slider_map_mobile" data-slide-to="0" class="icon-map-marker marker-1 active">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512"><path d="M172.268 501.67C26.97 291.031 0 269.413 0 192 0 85.961 85.961 0 192 0s192 85.961 192 192c0 77.413-26.97 99.031-172.268 309.67-9.535 13.774-29.93 13.773-39.464 0zM192 272c44.183 0 80-35.817 80-80s-35.817-80-80-80-80 35.817-80 80 35.817 80 80 80z"/></svg>
                        </li>
                        <li data-target="#slider_map_mobile" data-slide-to="1" class="icon-map-marker marker-2">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512"><path d="M172.268 501.67C26.97 291.031 0 269.413 0 192 0 85.961 85.961 0 192 0s192 85.961 192 192c0 77.413-26.97 99.031-172.268 309.67-9.535 13.774-29.93 13.773-39.464 0zM192 272c44.183 0 80-35.817 80-80s-35.817-80-80-80-80 35.817-80 80 35.817 80 80 80z"/></svg>
                        </li>
                        <li data-target="#slider_map_mobile" data-slide-to="2" class="icon-map-marker marker-3">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512"><path d="M172.268 501.67C26.97 291.031 0 269.413 0 192 0 85.961 85.961 0 192 0s192 85.961 192 192c0 77.413-26.97 99.031-172.268 309.67-9.535 13.774-29.93 13.773-39.464 0zM192 272c44.183 0 80-35.817 80-80s-35.817-80-80-80-80 35.817-80 80 35.817 80 80 80z"/></svg>
                        </li>
                        <li data-target="#slider_map_mobile" data-slide-to="3" class="icon-map-marker marker-4">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512"><path d="M172.268 501.67C26.97 291.031 0 269.413 0 192 0 85.961 85.961 0 192 0s192 85.961 192 192c0 77.413-26.97 99.031-172.268 309.67-9.535 13.774-29.93 13.773-39.464 0zM192 272c44.183 0 80-35.817 80-80s-35.817-80-80-80-80 35.817-80 80 35.817 80 80 80z"/></svg>
                        </li>
                        <li data-target="#slider_map_mobile" data-slide-to="4" class="icon-map-marker marker-5">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512"><path d="M172.268 501.67C26.97 291.031 0 269.413 0 192 0 85.961 85.961 0 192 0s192 85.961 192 192c0 77.413-26.97 99.031-172.268 309.67-9.535 13.774-29.93 13.773-39.464 0zM192 272c44.183 0 80-35.817 80-80s-35.817-80-80-80-80 35.817-80 80 35.817 80 80 80z"/></svg>
                        </li>
                        <li data-target="#slider_map_mobile" data-slide-to="5" class="icon-map-marker marker-6">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512"><path d="M172.268 501.67C26.97 291.031 0 269.413 0 192 0 85.961 85.961 0 192 0s192 85.961 192 192c0 77.413-26.97 99.031-172.268 309.67-9.535 13.774-29.93 13.773-39.464 0zM192 272c44.183 0 80-35.817 80-80s-35.817-80-80-80-80 35.817-80 80 35.817 80 80 80z"/></svg>
                        </li>
                    </ol>
                    
                    <!-- Map -->
                    <img src="{{ asset('assets/img/philippine-map.png') }}" class="img-fluid philippine-map" alt="" />
                </div>
            </div>
        </div>
    </div>
</section>
<!-- /.section-map -->

<!-- .room-slider -->
<section class="section-legacy room-slider mb-100">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="section-title  wow fadeInLeft">
                    <span class="title-tag">Explore</span>
                    <h2 class="mb-0">Our Legacy Projects</h2>
                </div>
            </div>
        </div>
    </div>
    <div class="container pb-30">
        <!-- .feature-room-slider -->
        <div class="row room-gird-loop mt-50 feature-room-slider">
            <div class="col-lg-4 wow fadeInUp">
                <div class="room-box">
                    <div class="room-img-wrap">
                        <div class="room-img" style="background-image: url('{{ asset("assets/img/projects/ponderosa-leisure-farms/legacy-img.jpg") }}');"></div>
                    </div>
                    <div class="room-desc">
                        <h2 class="title mb-1"><a href="{{ route('projects.parks') }}">Parks</a></h2>
                        <p>Living at the Ponderosa Leisure Farms affords you a lifestyle of ease and leisure.</p>
                        <a href="{{ route('projects.parks') }}" class="main-btn btn-border mt-1">Explore</a>
                    </div>
                </div>
            </div>
             <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.2s">
                <div class="room-box">
                    <div class="room-img-wrap">
                        <div class="room-img" style="background-image: url('{{ asset("assets/img/projects/canyon-woods/legacy-img.jpg") }}');"></div>
                    </div>
                    <div class="room-desc">
                        <h2 class="title mb-1"><a href="{{ route('projects.peaks') }}">Peaks</a></h2>
                        <p>Landco future developments that will showcase mountainside developments overlooking nature.</p>
                        <a href="{{ route('projects.peaks') }}" class="main-btn btn-border mt-1">Explore</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.4s">
                <div class="room-box">
                    <div class="room-img-wrap">
                        <div class="room-img" style="background-image: url('{{ asset("assets/img/projects/peninsula-de-punta-fuego/legacy-img.jpg") }}');"></div>
                    </div>
                    <div class="room-desc">
                        <h2 class="title mb-1"><a href="{{ route('projects.shores') }}">Shores</a></h2>
                        <p>Peninsula de Punta Fuego is a premiere luxury seaside residential community situated on 88 hectares of pristine coastline in Nasugbu, Batangas.</p>
                        <a href="{{ route('projects.shores') }}" class="main-btn btn-border mt-1">Explore</a>
                    </div>
                </div>
            </div>   
        </div>
    </div>	
</section>
<!-- /.room-slider -->

<!-- .booking-form -->
<section class="booking-form pb-100 wow hidden fadeInUp">
    <div class="container">
        <div class="booking-form-inner">
            <form action="#">
                <div class="row align-items-end">
                    <div class="col-md-5">
                        <div class="inputs-filed mt-30">
                            <label for="guests">Search Projects</label>
                            <select name="location" id="location">
                                <option value="" disabled selected>Select Location</option>
                                <option value="">All Location</option>
                                <option value="">Bacolod</option>
                                <option value="">Boracay</option>
                                <option value="">Cebu</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="inputs-filed mt-30">
                            <label for="guests">&nbsp;</label>
                            <select name="type" id="type">
                                <option value="" disabled selected>Select Type</option>
                                <option value="">High Rise Condomimiums</option>
                                <option value="">Med Rise Condomimiums</option>
                                <option value="">Low Rise Condomimiums</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="inputs-filed mt-30">
                            <button type="submit">Search</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>
<!-- /.booking-form -->

<!-- .room-slider -->
<section class="room-slider section-gallery mb-100 wow fadeInUp">
    <div class="container-fluid p-0">
        <div class="row rooms-slider-one">
            <div class="col"><div class="slider-img" style="background-image: url('{{ asset("assets/img/projects/project-1.jpg") }}');"></div></div>
            <div class="col"><div class="slider-img" style="background-image: url('{{ asset("assets/img/projects/project-2.jpg") }}');"></div></div>
            <div class="col"><div class="slider-img" style="background-image: url('{{ asset("assets/img/projects/project-3.jpg") }}');"></div></div>
            <div class="col"><div class="slider-img" style="background-image: url('{{ asset("assets/img/projects/project-1.jpg") }}');"></div></div>
            <div class="col"><div class="slider-img" style="background-image: url('{{ asset("assets/img/projects/project-2.jpg") }}');"></div></div>
        </div>
    </div>
    <div class="rooms-content-wrap">
        <div class="container">
            <div class="row justify-content-center justify-content-md-start">
                <div class="col-xl-4 col-lg-5 col-sm-8">
                    <div class="room-content-box">
                        <div class="room-content-slider">
                            <div class="single-content">
                                <a href="{{ route('casobe') }}"><img src="{{ asset('assets/img/logos/logo-casobe-reverse.png') }}" class="logo-filter" alt="" /></a>
                                <h3><a href="{{ route('casobe') }}">CaSoBe</a></h3>
                                <p>There’s a magical place in the shores of Calatagan called CaSoBe. It’s alluring siren song calls out to beach and adventure lovers alike</p>
                                <a href="{{ route('casobe') }}">Discover</a>
                            </div>
                            <div class="single-content">
                                <a href="{{ route('club_laiya') }}" aria-label="Club Laiya"><img src="{{ asset('assets/img/logos/logo-club-laiya-reverse.png') }}" class="logo-filter" alt="" /></a>
                                <h3><a href="{{ route('club_laiya') }}">Club Laiya</a></h3>
                                <p>At the heart of Batangas, at the wind swept shores of Laiya, lies exotic and alluring Club Laiya.</p>
                                <a href="{{ route('club_laiya') }}">Discover</a>
                            </div>
                            <div class="single-content">
                                <a href="{{ route('playa_azalea') }}"><img src="{{ asset('assets/img/logos/logo-costa-azalea.png') }}" class="logo-filter" alt="" /></a>
                                <h3><a href="{{ route('playa_azalea') }}">Playa Azalea</a></h3>
                                <p>A master-planned exclusive seaside community located in Barangay Limao, Island Garden City of Samal, Davao del Norte.</p>
                                <a href="{{ route('playa_azalea') }}">Discover</a>
                            </div>
                            <div class="single-content">
                                <a href="{{ route('casobe') }}"><img src="{{ asset('assets/img/logos/logo-casobe-reverse.png') }}" class="logo-filter" alt="" /></a>
                                <h3><a href="{{ route('casobe') }}">CaSoBe</a></h3>
                                <p>There’s a magical place in the shores of Calatagan called CaSoBe. It’s alluring siren song calls out to beach and adventure lovers alike</p>
                                <a href="{{ route('casobe') }}">Discover</a>
                            </div>
                            <div class="single-content">
                                <a href="{{ route('club_laiya') }}" aria-label="Club Laiya"><img src="{{ asset('assets/img/logos/logo-club-laiya-reverse.png') }}" class="logo-filter" alt="" /></a>
                                <h3><a href="{{ route('club_laiya') }}">Club Laiya</a></h3>
                                <p>At the heart of Batangas, at the wind swept shores of Laiya, lies exotic and alluring Club Laiya.</p>
                                <a href="{{ route('club_laiya') }}">Discover</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>		
</section>
<!-- /.room-slider -->

<!-- .connect -->
<section class="section-connect">
    <div class="container">
        <div class="inner-section">
            <div class="row align-items-center justify-content-between h-100">
                <div class="col-md-7">
                    <h5 class="mb-1">Get account updates and more via Email and SMS</h5>
                    <h6 class="mb-0">Register now to provide and start receiving our updates!</h6>
                </div>
                <div class="col-md-4 text-right">
                    <a class="main-btn btn-filled" href="#" data-toggle="modal" data-target="#modal_connect">Get Connected</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- /.connect -->

<!-- .latest-news -->
@if(count($pubs) > 0)
<section class="latest-news section">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-8 col-sm-7 wow fadeInLeft">
                <div class="section-title">
                    <span class="title-tag">WHAT'S NEW</span>
                    <h2 class="mb-0">Latest from the Blog</h2>
                </div>
            </div>
            <div class="col-lg-6 col-md-4 col-sm-5 d-none d-sm-block wow fadeInRight">
                <div class="latest-post-arrow arrow-style text-right"></div>
            </div>
        </div>
        
        <!-- .latest-post-slider -->
        <div class="row latest-post-slider mt-50 wow fadeInUp">
            @foreach ($pubs as $key => $value)
                @php
                    if (!is_null($value->meta_link)) {
                        $link = $value->meta_link;
                    } else {
                        $link = route('details', $value->permalink);
                    }
                @endphp
                @if ($value->category->category_name === 'Blogs')
                    <div class="col-lg-4">
                        <div class="latest-post-box">
                            <div class="card">
                                <a href="{{ $link }}" @if(!is_null($value->meta_link)) target="_blank" rel="noopener" @endif class="card-img-top">
									<img src="{{ asset("storage/files/".$value->file->file_name) }}" alt="Image">
								</a>
                                <div class="card-body">
                                    <h5 class="mb-0"><a href="{{ $link }}" @if(!is_null($value->meta_link)) target="_blank" rel="noopener" @endif>{{ Str::limit($value->title, 60) }}</a></h5>
                                </div>
                            </div>
                        </div>
                    </div>
                @endif
            @endforeach
        </div>
    </div>
</section>
@endif
<!-- /.latest-news -->
@endsection

@push('scripts')
<script src="{{ asset('assets/js/slideshow.js') }}"></script>
<script>
    $(window).on('load', function() {
        $('#modal_connect').modal('show');
        
    });
    setTimeout(function() {
        $('#modal_connect').modal('hide');
    }, 15000);
    $("#modal_beachtowns").on('hidden.bs.modal', function (e) {
        $("#modal_beachtowns iframe").attr("src", $("#modal_beachtowns iframe").attr("src"));
    });
</script>
<script>
    document.addEventListener('DOMContentLoaded', () => {
        easy_background(".slider", {
            slide: ["{{ asset('assets/img/slides/slide-laiya.jpg') }}", "{{ asset('assets/img/slides/slide-casobe.jpg') }}"],
            delay: [5000, 5000]
        });		
    });
</script>
@endpush