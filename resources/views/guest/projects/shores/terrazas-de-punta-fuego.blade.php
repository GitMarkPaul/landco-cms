@extends('layouts.guest')

@section('content')
<!-- .breadcrumb-area -->
<section class="breadcrumb-area" style="background-image: url('{{ asset("assets/img/banners/banner-vision.jpg") }}');">
    <div class="container">
        <div class="breadcrumb-text">
            <h2 class="page-title wow fadeInLeft" data-wow-delay="0.2s">Terrazas de Punta Fuego</h2>

            <!-- .breadcrumb-nav -->
            <ul class="breadcrumb-nav wow fadeInRight">
                <li><a href="{{ route('index') }}">Home</a></li>
                <li><a href="{{ route('projects') }}">Projects</a></li>
                <li class="active">Terrazas de Punta Fuego</li>
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
                    <img src="{{ asset('assets/img/projects/terrazas-de-punta-fuego/main-img.jpg') }}" alt="images">
                </div>
                <div class="offer-desc">
                    <div class="title-wrap pb-0">
                        <div class="title col-lg-8 wow fadeInLeft">
                            <h2>The premiere luxury seaside getaway in the Philippines</h2>
                        </div>
                        <div class="price col-lg-4 wow fadeInRight" data-wow-delay=".2s">                                
                            <img src="{{ asset('assets/img/projects/terrazas-de-punta-fuego/logo.png') }}" alt="images">
                        </div>
                    </div>
                    <div class="row justify-content-between wow fadeInUp">
                        <div class="col-lg-6">
                            <div class="offer-text">
                                <p>Experience a bold combination of Filipino design and hospitality with world-class luxury at Terrazas de Punta Fuego, a pristine beach destination located in the Philippine summer seaside capital of Nasugbu, Batangas.</p>
                                <p>Only a few hours south of Manila, the Terrazas de Punta Fuego was expertly crafted to be the ultimate vacation home for the discerning luxury traveler in the Philippines. Enjoy fine white sand and clear blue waters. Soak in the summer sun and feel the cool ocean breeze kiss your cheeks.</p>
                                <p>Your Terrazas de Punta Fuego home offers majestic twin views of the Batangas mountain range and the West Philippine Sea.</p>
                                
                                <blockquote class="quote-card">
                                    <p>Experience a bold combination of Filipino design and hospitality with world-class luxury at Terrazas de Punta Fuego.</p>
                                </blockquote>									
                            </div>
                        </div>
                        <div class="col-lg-5">
                            <div class="offer-feature">
                                <h4>Your exclusive entrance to a seaside wonderland</h4>
                                <p>Every homeowner at the Terrazas de Punta Fuego community may avail of an associate membership at the very exclusive Club Punta Fuego, a premiere seaside club that allows you to enjoy a variety of seaside activities to satisfy any discerning individual.</p>
                                <p>Imagine taking a few rounds of golf or going on an early morning stroll along the nine-hole Nelson-Haworth-designed executive golf course which boasts of a majestic view of the West Philippine Sea. Indulge in aqua sports like diving, snorkeling, jet skiing and kayaking. Frolic on a private cove in one of our two beaches or take a boat out sailing. The double infinity pool overlooking Sunset Cove is perfect for an afternoon swim while enjoying the sunset. After a day full of fun activities, you can enjoy the gastronomic delights served at Café San Diego or go al fresco in Il Jardineto at the Lower Beach Club.</p>
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
                   <img src="{{ asset('assets/img/projects/terrazas-de-punta-fuego/amenities-img.jpg') }}" alt="images">
                </div>
            </div>
            <div class="col-lg-5 col-md-8 col-sm-10 wow fadeInRight" data-wow-delay=".5s">
                <div class="block-text">
                    <div class="section-title mb-20">
                        <h2>Truly tropical luxury living</h2>
                    </div>
                    <p>Aside from Club Punta Fuego, Terrazas de Punta Fuego offers a range of amenities for sun worshipers and their families. Take a dip in the infinity pool, pamper yourself with a massage at the Asian-inspired cabanas or enjoy a lazy day at the Boardwalk.</p>
                    <p>Terrazas de Punta Fuego is guaranteed to make everyday more fun and exciting. Enjoy classic Filipino and seafood fare at Café Sol. Experience our other outdoor amenities including De Los Picos Pavilion, De Los Picos Linear Park, Dela Cresta View Deck and the Beach Club.</p>
                    
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
            <div class="col-lg-12 wow fadeInLeft">
                <div class="block-text">
                    <div class="section-title mb-20">
                        <h2 class="fc-white">Features and Amenities</h2>
                    </div>						
                
                    <div class="row">
                        <div class="col-md-4">
                            <h5 class="text-white mb-0">De Los Picos Pavilion</h5>
                            <p>Located along Dela Cresta is a 6,000 sqm central park which is accessible to the homeowners of Terrazas. It is intended to be a focal destination point with a playground, infinity pools and wide open areas where kids can freely run around safely.</p>

                            <h5 class="text-white mb-0">De Los Picos Linear Park</h5>
                            <p>Right along the De Los Picos cliff is a 5-meter wide Linear Park stretching approximately 700 meters while passing through the De Los Picos Pavilion. This effectively preserves Dela Cresta views for all lot owners to enjoy. It is intended for biking, jogging or even for a leisurely stroll while enjoying the view.</p>
                        </div>
                        <div class="col-md-4">
                            <h5 class="text-white mb-0">Dela Cresta View Deck</h5>
                            <p>Offering magnificent views of the sea, this a cantilevered view deck located along the Dela Cresta line of Terrazas de Punta Fuego.</p>

                            <h5 class="text-white mb-0">The Beach Club &amp; Boardwalk</h5>
                            <p>Dine in style with the sumptuous meal in Café del Sol. Enjoy a free form cascading pool known as the “Turtle Pool.” Choose among 28 inter-linked beachfront cabanas and a juice bar, perfect for lounging and viewing the sunset. The Club also offers air-conditioned locker room facilities.</p>
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
                    <img src="{{ asset('assets/img/projects/terrazas-de-punta-fuego/quick-fact-img.jpg') }}" alt="images">
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
                                <p>Brgy. Natipuan, Nasugbu, Batangas</p>
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
                                <p>92 hectares</p>
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
                 <img src="{{ asset('assets/img/projects/terrazas-de-punta-fuego/construction-img.jpg') }}" alt="images">
            </div>
            <div class="col-lg-6 wow fadeInRight" data-wow-delay=".3s">
                <div class="block-text">
                    <div class="section-title mb-20">
                        <h2>Construction<br />Updates</h2>
                    </div>						
                    <table class="table">
                        <tr>
                            <td>Roadworks</td>
                            <td>Ph1, 1B, 2, 3</td>
                            <td>100% Completed</td>
                        </tr>
                        <tr>
                            <td>Waterline</td>
                            <td>Ph1, 1B, 2, 3</td>
                            <td>100% Completed</td>
                        </tr>
                        <tr>
                            <td>Sewerline</td>
                            <td>Ph1, 2<br />Ph1B<br />Ph3</td>
                            <td>100% Completed<br />96% Completed<br />94% Completed</td>
                        </tr>
                        <tr>
                            <td>Drainage</td>
                            <td>Ph1, 2<br />Ph1B<br />Ph3</td>
                            <td>100% Completed<br />98% Completed<br />99% Completed</td>
                        </tr>
                        <tr>
                            <td>Electrical</td>
                            <td>Ph1<br />Ph2<br />Ph1B<br />Ph3</td>
                            <td>100% Completed<br />98% Completed<br />76% Completed<br />72% Completed</td>
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
    
<!-- .section-gallery -->
<section class="section-gallery instagram-feed-section">
    <div class="container-fluid p-0">
        <div class="instagram-slider">
            <div class="image wow fadeInUp">
                <a href="{{ asset('assets/img/projects/terrazas-de-punta-fuego/gallery/1.jpg') }}" class="insta-popup">
                    <img src="{{ asset('assets/img/projects/terrazas-de-punta-fuego/gallery/1.jpg') }}" alt="instagram-feed">
                </a>
            </div>
            <div class="image wow fadeInUp" data-wow-delay=".2s">
                <a href="{{ asset('assets/img/projects/terrazas-de-punta-fuego/gallery/2.jpg') }}" class="insta-popup">
                    <img src="{{ asset('assets/img/projects/terrazas-de-punta-fuego/gallery/2.jpg') }}" alt="instagram-feed">
                </a>
            </div>
            <div class="image wow fadeInUp" data-wow-delay=".3s">
                <a href="{{ asset('assets/img/projects/terrazas-de-punta-fuego/gallery/3.jpg') }}" class="insta-popup">
                    <img src="{{ asset('assets/img/projects/terrazas-de-punta-fuego/gallery/3.jpg') }}" alt="instagram-feed">
                </a>
            </div>
            <div class="image wow fadeInUp" data-wow-delay=".4s">
                <a href="{{ asset('assets/img/projects/terrazas-de-punta-fuego/gallery/4.jpg') }}" class="insta-popup">
                    <img src="{{ asset('assets/img/projects/terrazas-de-punta-fuego/gallery/4.jpg') }}" alt="instagram-feed">
                </a>
            </div>                
        </div>
    </div>
</section>
<!-- /.section-gallery -->
@endsection