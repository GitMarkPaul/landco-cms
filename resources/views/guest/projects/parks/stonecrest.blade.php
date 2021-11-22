@extends('layouts.guest')

@section('content')
<!-- .breadcrumb-area -->
<section class="breadcrumb-area" style="background-image: url('{{ asset("assets/img/banners/banner-vision.jpg") }}');">
    <div class="container">
        <div class="breadcrumb-text">
            <h2 class="page-title wow fadeInLeft" data-wow-delay="0.2s">Stonecrest </h2>

            <!-- .breadcrumb-nav -->
            <ul class="breadcrumb-nav wow fadeInRight">
                <li><a href="{{ route('index') }}">Home</a></li>
                <li><a href="{{ route('projects') }}">Projects</a></li>
                <li class="active">Stonecrest</li>
            </ul>
        </div>
    </div>
</section>
<!-- /.breadcrumb-area -->

<!-- main content -->
<section class="offers-area pt-120 pb-60">
    <div class="container">
        <div class="offer-boxes-loop">
            <div class="offer-box">
                <div class="thumb wow fadeInUp">
                    <img src="{{ asset('assets/img/projects/stonecrest/main-img.jpg') }}" alt="images">
                </div>
                <div class="offer-desc">
                    <div class="title-wrap pb-0">
                        <div class="title col-lg-8 wow fadeInLeft">
                            <h2>The Best Reason to Live Down South</h2>
                        </div>
                        <div class="price col-lg-4 wow fadeInRight" data-wow-delay=".2s">                                
                            <img src="{{ asset('assets/img/projects/stonecrest/logo.png') }}" alt="images">
                        </div>
                    </div>
                    <div class="row justify-content-between wow fadeInUp">
                        <div class="col-lg-6">
                            <div class="offer-text">
                                <p>Inspired by the sun-kissed architecture and free-spirited lifestyle of the Southern California suburbs, Stonecrest is a perfectly orchestrated residential development in San Pedro, Laguna.</p>
                                <p>Setting the standard for a relaxed countryside living, Stonecrest allows families to enjoy the comforts of modern amenities in the suburbs. Stonecrest properties are perched on a majestic slope, providing homeowners with an unparalleled scenic view of Laguna de Bay and the Manila Southwoods golf course.</p>
                                <p>Each neighborhood affords its homeowners with unequalled comfort and security. Private cul-de-sacs, wide tree-lined streets, sprawling gardens, attractive front-yard landscaping and verdant greenery create an appealing atmosphere of exclusivity. The quality pavement and underground facilities underscore Stonecrest’s commitment to a truly hassle-free environment.</p>									
                            </div>
                        </div>
                        <div class="col-lg-5">
                            <div class="offer-feature">
                               <blockquote class="quote-card">
                                    <p>Each neighborhood affords its homeowners with unequalled comfort and security. Private cul-de-sacs, wide tree-lined streets, sprawling gardens, attractive front-yard landscaping and verdant greenery create an appealing atmosphere of exclusivity. </p>
                                </blockquote>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end of main content -->

<!-- .text-block -->
<section class="text-block with-bg pt-115 pb-115" style="background-image: url('{{ asset("assets/img/bg/02.jpg") }}');">
    <div class="container">
        <div class="row justify-content-center wow fadeInLeft" data-wow-delay=".3s">
            <div class="col-lg-7">
                <div class="text-img text-center text-lg-left mb-small">
                   <img src="{{ asset('assets/img/projects/stonecrest/img-1.jpg') }}" alt="images">
                </div>
            </div>
            <div class="col-lg-5 col-md-8 col-sm-10 wow fadeInRight" data-wow-delay=".5s">
                <div class="block-text">
                    <div class="section-title mb-20">
                        <h2>Topnotch Resort- Type Amenities Within Your Reach</h2>
                    </div>
                    <p>Stonecrest provides a variety of amenities for fun-loving families, sun worshipers and sports enthusiasts alike. A clubhouse inspired by the Southern Californian architecture and lifestyle is an attractive venue for parties and functions. Enjoy a variety of sports facilities, including a free-form swimming pool, basketball and tennis courts and a football field.</p>
                    <p>Enjoy the truly unique and comfortable lifestyle you deserve at Stonecrest!</p>
                    
                    <blockquote class="quote-card">
                        <p>Terrazas de Punta Fuego is guaranteed to make everyday more fun and exciting..</p>
                    </blockquote>						
                </div>
            </div>
        </div>
    </div>
</section>
<!-- /.text-block -->

<!-- features -->
<section class="section-amenities text-block bg-blue with-pattern">
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-lg-5 wow fadeInLeft">
                <div class="block-text">
                    <div class="section-title mb-20">
                        <h2 class="fc-white">Features and Amenities</h2>
                    </div>						
                
                    <ul class="list-icon">
                        <li>Clubhouse</li>
                        <li>Badminton court</li>
                        <li>Adult and kiddie pools with sunken deck</li>
                        <li>Pavilion</li>
                        <li>Kiddie play area</li>
                        <li>Basketball court</li>
                        <li>Football field</li>
                     </ul>
                </div>
            </div>
            <div class="col-lg-6 col-md-10 order-1 order-lg-2 wow fadeInRight" data-wow-delay=".3s">
                 <img src="{{ asset('assets/img/projects/stonecrest/img-1.jpg') }}" alt="images">
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
                    <img src="{{ asset('assets/img/projects/stonecrest/quick-fact-img.jpg') }}" alt="images">
                </div>
                <div class="col-lg-6 col-md-10 col-sm-11 col-10 order-1 order-lg-2 wow fadeInUp">
                    <h3>Quick Facts</h3>

                    <!-- feature loop -->
                    <div class="cta-features">							
                        <!-- feature box -->
                        <div class="single-feature mb-0 wow fadeInUp">
                            <div class="icon">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                    <path d="M560 160c-2 0-4 .4-6 1.2L384 224l-10.3-3.6C397 185.5 416 149.2 416 123 416 55 358.7 0 288 0S160 55.1 160 123c0 11.8 4 25.8 10.4 40.6L20.1 216C8 220.8 0 232.6 0 245.7V496c0 9.2 7.5 16 16 16 2 0 4-.4 6-1.2L192 448l172 60.7c13 4.3 27 4.4 40 .2L555.9 456c12.2-4.9 20.1-16.6 20.1-29.7V176c0-9.2-7.5-16-16-16zM176 419.8L31.9 473l-1.3-226.9L176 195.6zM288 32c52.9 0 96 40.8 96 91 0 27-38.1 88.9-96 156.8-57.9-67.9-96-129.8-96-156.8 0-50.2 43.1-91 96-91zm80 444.2l-160-56.5V228.8c24.4 35.3 52.1 68 67.7 85.7 3.2 3.7 7.8 5.5 12.3 5.5s9-1.8 12.3-5.5c12.8-14.5 33.7-39.1 54.3-66.9l13.4 4.7zm32 .2V252.2L544.1 199l1.3 226.9zM312 128c0-13.3-10.8-24-24-24s-24 10.7-24 24c0 13.2 10.8 24 24 24s24-10.7 24-24z" />
                                </svg>
                            </div>
                            <div class="cta-desc">
                                <h4 class="mb-0">Location</h4>
                                <p>San Pedro, Laguna</p>
                            </div>
                        </div>
                        
                        <!-- feature box -->
                        <div class="single-feature mb-0 wow fadeInUp" data-wow-delay=".2s">
                            <div class="icon">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                    <path d="M337.782 434.704l-73.297 73.782c-4.686 4.686-12.284 4.686-16.971 0l-73.296-73.782c-4.686-4.686-4.686-12.284 0-16.97l7.07-7.07c4.686-4.686 12.284-4.686 16.971 0L239 451.887h1V272H60.113v1l41.224 40.741c4.686 4.686 4.686 12.284 0 16.971l-7.071 7.07c-4.686 4.686-12.284 4.686-16.97 0L3.515 264.485c-4.686-4.686-4.686-12.284 0-16.971l73.782-73.297c4.686-4.686 12.284-4.686 16.971 0l7.071 7.071c4.686 4.686 4.686 12.284 0 16.971L60.113 239v1H240V60.113h-1l-40.741 41.224c-4.686 4.686-12.284 4.686-16.971 0l-7.07-7.071c-4.686-4.686-4.687-12.284 0-16.97l73.297-73.782c4.686-4.686 12.284-4.686 16.971 0l73.297 73.782c4.686 4.686 4.686 12.284 0 16.971l-7.071 7.071c-4.686 4.686-12.284 4.686-16.971 0L273 60.113h-1V240h179.887v-1l-41.224-40.741c-4.686-4.686-4.686-12.284 0-16.971l7.071-7.07c4.686-4.686 12.284-4.686 16.97 0l73.782 73.297c4.687 4.686 4.686 12.284 0 16.971l-73.782 73.297c-4.686 4.686-12.284 4.686-16.97 0l-7.071-7.07c-4.686-4.686-4.686-12.284 0-16.971L451.887 273v-1H272v179.887h1l40.741-41.224c4.686-4.686 12.284-4.686 16.971 0l7.07 7.071c4.686 4.685 4.686 12.283 0 16.97z"/>
                                </svg>
                            </div>
                            <div class="cta-desc">
                                <h4 class="mb-0">Total Project Area</h4>
                                <p>40 hectares</p>
                            </div>
                            <div class="inquire-box">
                                <a href="{{ route('contact_us') }}" class="main-btn btn-filled">Inquire Now</a>
                            </div>
                        </div>							
                    </div>
                </div>
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
                 <img src="{{ asset('assets/img/projects/stonecrest/construction-img.jpg') }}" alt="images">
            </div>
            <div class="col-lg-6 wow fadeInRight" data-wow-delay=".3s">
                <div class="block-text">
                    <div class="section-title mb-20">
                        <h2>Construction<br />Updates</h2>
                    </div>						
                    <table class="table">
                        <tr>
                            <td>Roadworks</td>
                            <td>100% Completed</td>
                        </tr>
                        <tr>
                            <td>Waterline</td>
                            <td>100% Completed</td>
                        </tr>
                        <tr>
                            <td>Sewerline</td>
                            <td>100% Completed</td>
                        </tr>
                        <tr>
                            <td>Drainage</td>
                            <td>100% Completed</td>
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