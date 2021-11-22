@extends('layouts.guest')

@section('content')
<!-- .breadcrumb-area -->
<section class="breadcrumb-area" style="background-image: url('{{ asset("assets/img/banners/banner-vision.jpg") }}');">
    <div class="container">
        <div class="breadcrumb-text">
            <h2 class="page-title wow fadeInLeft" data-wow-delay="0.2s">Waterwood Park</h2>

            <!-- .breadcrumb-nav -->
            <ul class="breadcrumb-nav wow fadeInRight">
                <li><a href="{{ route('index') }}">Home</a></li>
                <li><a href="{{ route('projects') }}">Projects</a></li>
                <li class="active">Waterwood Park</li>
            </ul>
        </div>
    </div>
</section>
<!-- /.breadcrumb-area -->

<!-- main content -->
<section class="offers-area project-content pt-120 pb-60">
    <div class="container">
        <div class="offer-boxes-loop">
            <div class="offer-box">
                <div class="thumb wow fadeInUp">
                    <img src="{{ asset('assets/img/projects/waterwood-park/main-img.jpg') }}" alt="images">
                </div>
                <div class="offer-desc">
                    <div class="title-wrap pb-0">
                        <div class="title col-lg-8 wow fadeInLeft">
                            <h2>The Most Exclusive Community in Bulacan</h2>
                        </div>
                        <div class="price col-lg-4 wow fadeInRight" data-wow-delay=".2s">                                
                            <img src="{{ asset('assets/img/projects/waterwood-park/logo.png') }}" alt="images">
                        </div>
                    </div>
                    <div class="row justify-content-between wow fadeInUp">
                        <div class="col-lg-12">
                            <div class="offer-text">
                                <p>Waterwood Park is an exclusive residential subdivision set on 70 hectares of prime land. The first and only ecologically-engineered development in Baliaug Bulacan, Waterwood Park is an exclusive residential subdivision that combines a harmonious blend of natural elements, inspired by contemporary American architecture.</p>
                                <p>Its modern amenities create a refreshing environment for Bulacan’s most esteemed. The gated community at Waterwood Park provides a range of sports and recreational amenities set in lush greenery and natural splendor. Unique pocket parks, stately trees lining the wide open roads and immaculately maintained village architecture allow Waterwood homeowners to embrace Baliuag’s premier residential community.</p>
                                <p>Waterwood Park raises the standard for quality village management, unprecedented exclusivity, superior land value, efficient security and high-quality community facilities. It is Bulacan’s most preferred subdivision and the benchmark of a premier lifestyle development.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end of main content -->

<!-- features -->
<section class="section-amenities text-block bg-blue with-pattern">
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-md-12">
                <div class="block-text">
                    <div class="section-title mb-20 wow fadeInLeft">
                        <h2 class="fc-white">Features and Amenities</h2>
                    </div>						
                    <div class="row">
                        <div class="col-md-4 wow fadeInLeft" data-wow-delay=".2s">
                            <h5 class="fc-white" class="fc-white">Features</h5>
                            <ul class="list-icon">
                                <li>Landscaped entrance gate</li>
                                <li>Tree-lined sidewalks</li>
                                <li>Underground drainage</li>
                                <li>24-hour water supply</li>
                                <li>24-hour security</li>
                                <li>Perimeter fence</li>
                                <li>Professional Property Management</li>
                            </ul>
                        </div>
                        <div class="col-md-4 wow fadeInLeft" data-wow-delay=".3s">
                            <h5 class="fc-white">Amenities</h5>
                            <ul class="list-icon">
                                <li>Clubhouse</li>
                                <li>Junior Olympic-sized Swimming Pool &amp; Kiddie Pool</li>
                                <li>Grand Ballroom</li>
                                <li>Covered Basketball and Tennis Courts</li>
                                <li>Parks and Playground</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="pattern-wrap">
        <div class="pattern"></div>
    </div>
</section>
<!-- features ends -->

<!-- map -->
<section class="cta-section quick-facts pt-115 pb-100">
    <div class="container">
        <div class="cta-inner">
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-8 col-sm-9 col-10 order-2 order-lg-1 wow fadeInLeft">
                    <img src="{{ asset('assets/img/projects/waterwood-park/quick-fact-img.jpg') }}" alt="images">
                </div>
                <div class="col-lg-6 col-md-10 col-sm-11 col-10 order-1 order-lg-2 wow fadeInUp">
                    <h3>Quick Facts</h3>

                    <!-- feature loop -->
                    <div class="cta-features">							
                        <!-- feature box -->
                        <div class="single-feature mb-0 wow fadeInUp" data-wow-delay=".3s">
                            <div class="icon">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                    <path d="M560 160c-2 0-4 .4-6 1.2L384 224l-10.3-3.6C397 185.5 416 149.2 416 123 416 55 358.7 0 288 0S160 55.1 160 123c0 11.8 4 25.8 10.4 40.6L20.1 216C8 220.8 0 232.6 0 245.7V496c0 9.2 7.5 16 16 16 2 0 4-.4 6-1.2L192 448l172 60.7c13 4.3 27 4.4 40 .2L555.9 456c12.2-4.9 20.1-16.6 20.1-29.7V176c0-9.2-7.5-16-16-16zM176 419.8L31.9 473l-1.3-226.9L176 195.6zM288 32c52.9 0 96 40.8 96 91 0 27-38.1 88.9-96 156.8-57.9-67.9-96-129.8-96-156.8 0-50.2 43.1-91 96-91zm80 444.2l-160-56.5V228.8c24.4 35.3 52.1 68 67.7 85.7 3.2 3.7 7.8 5.5 12.3 5.5s9-1.8 12.3-5.5c12.8-14.5 33.7-39.1 54.3-66.9l13.4 4.7zm32 .2V252.2L544.1 199l1.3 226.9zM312 128c0-13.3-10.8-24-24-24s-24 10.7-24 24c0 13.2 10.8 24 24 24s24-10.7 24-24z" />
                                </svg>
                            </div>
                            <div class="cta-desc">
                                <h4 class="mb-0">Location</h4>
                                <p>Barangay Pagala &amp; Catulinan, Baliuag, Bulacan</p>
                            </div>
                        </div>
                        
                        <!-- feature box -->
                        <div class="single-feature mb-0 wow fadeInUp" data-wow-delay=".3s">
                            <div class="icon">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                    <path d="M337.782 434.704l-73.297 73.782c-4.686 4.686-12.284 4.686-16.971 0l-73.296-73.782c-4.686-4.686-4.686-12.284 0-16.97l7.07-7.07c4.686-4.686 12.284-4.686 16.971 0L239 451.887h1V272H60.113v1l41.224 40.741c4.686 4.686 4.686 12.284 0 16.971l-7.071 7.07c-4.686 4.686-12.284 4.686-16.97 0L3.515 264.485c-4.686-4.686-4.686-12.284 0-16.971l73.782-73.297c4.686-4.686 12.284-4.686 16.971 0l7.071 7.071c4.686 4.686 4.686 12.284 0 16.971L60.113 239v1H240V60.113h-1l-40.741 41.224c-4.686 4.686-12.284 4.686-16.971 0l-7.07-7.071c-4.686-4.686-4.687-12.284 0-16.97l73.297-73.782c4.686-4.686 12.284-4.686 16.971 0l73.297 73.782c4.686 4.686 4.686 12.284 0 16.971l-7.071 7.071c-4.686 4.686-12.284 4.686-16.971 0L273 60.113h-1V240h179.887v-1l-41.224-40.741c-4.686-4.686-4.686-12.284 0-16.971l7.071-7.07c4.686-4.686 12.284-4.686 16.97 0l73.782 73.297c4.687 4.686 4.686 12.284 0 16.971l-73.782 73.297c-4.686 4.686-12.284 4.686-16.97 0l-7.071-7.07c-4.686-4.686-4.686-12.284 0-16.971L451.887 273v-1H272v179.887h1l40.741-41.224c4.686-4.686 12.284-4.686 16.971 0l7.07 7.071c4.686 4.685 4.686 12.283 0 16.97z"/>
                                </svg>
                            </div>
                            <div class="cta-desc">
                                <h4 class="mb-0">Total Project Area</h4>
                                <p>70 hectares</p>
                            </div>
                        </div>
                        
                        <!-- feature box -->
                        <div class="single-feature mb-0 wow fadeInUp" data-wow-delay=".3s">
                            <div class="icon">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                    <path d="M497.941 225.941L286.059 14.059A48 48 0 0 0 252.118 0H48C21.49 0 0 21.49 0 48v204.118a48 48 0 0 0 14.059 33.941l211.882 211.882c18.745 18.745 49.137 18.746 67.882 0l204.118-204.118c18.745-18.745 18.745-49.137 0-67.882zm-22.627 45.255L271.196 475.314c-6.243 6.243-16.375 6.253-22.627 0L36.686 263.431A15.895 15.895 0 0 1 32 252.117V48c0-8.822 7.178-16 16-16h204.118c4.274 0 8.292 1.664 11.314 4.686l211.882 211.882c6.238 6.239 6.238 16.39 0 22.628zM144 124c11.028 0 20 8.972 20 20s-8.972 20-20 20-20-8.972-20-20 8.972-20 20-20m0-28c-26.51 0-48 21.49-48 48s21.49 48 48 48 48-21.49 48-48-21.49-48-48-48z"/>
                                </svg>
                            </div>
                            <div class="cta-desc">
                                <h4 class="mb-0">Price</h4>
                                <p><strong>PHP 1,900,000 – 4,000,000</strong><br />(average lot size is 120 to 240 square meters)</p>
                            </div>
                            <div class="inquire-box">
                                <a href="inquire.html" class="main-btn btn-filled">Inquire Now</a>
                            </div>
                        </div>	
                    </div>						
                </div>					
            </div>
            <div class="wow fadeInUp" data-wow-delay=".2s">
                <img class="mt-50" src="{{ asset('assets/img/projects/waterwood-park/waterwood-roadmap.jpg') }}" alt="images" />
            </div>
        </div>
    </div>
</section>
<!-- map ends -->

<!-- .section-construction -->
<section class="text-block section-construction mb-150 wow fadeInUp">
    <div class="container">
        <div class="row align-items-center justify-content-center no-gutters">
            <div class="col-lg-6 wow fadeInLeft" data-wow-delay=".2s">
                 <img src="{{ asset('assets/img/projects/waterwood-park/construction-img.jpg') }}" alt="images">
            </div>
            <div class="col-lg-6 wow fadeInRight" data-wow-delay=".3s">
                <div class="block-text">
                    <div class="section-title mb-20">
                        <h2>Construction<br />Updates</h2>
                    </div>						
                    <table class="table">
                        <tr>
                            <td>Roadworks</td>
                            <td>Phase 1, 2A-G<br />Phase 3A, 3C-E<br />Phase 4B, 4E<br />Phase 4A<br />Phase 4C<br />Phase 3B</td>
                            <td>100% Completed<br />100% Completed<br />100% Completed<br />90% Completed<br />80% Completed<br />70% Completed</td>
                        </tr>
                        <tr>
                            <td>Waterline</td>
                            <td>Phase 1, 2A-G<br />Phase 3A, 3C-E<br />Phase 4B, 4E<br />Phase 4A<br />Phase 4C</td>
                            <td>100% Completed<br />100% Completed<br />100% Completed<br />90% Completed<br />80% Completed</td>
                        </tr>
                        <tr>
                            <td>Drainage</td>
                            <td>Phase 1, 2A-G<br />Phase 3A, 3C-E<br />Phase 4B, 4E<br />Phase 4C</td>
                            <td>100% Completed<br />100% Completed<br />100% Completed<br />80% Completed</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="pattern-wrap">
        <div class="pattern"></div>
    </div>
</section>
<!-- /.section-construction -->
@endsection