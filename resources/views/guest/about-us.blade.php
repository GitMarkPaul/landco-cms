@extends('layouts.guest')

@section('content')
<!-- .breadcrumb-area -->
<section class="breadcrumb-area" style="background-image: url('{{ asset("assets/img/banners/banner-about.jpg") }} ');">
    <div class="container">
        <div class="breadcrumb-text">
            <span class="wow fadeInLeft">The Company</span>
            <h2 class="page-title wow fadeInLeft" data-wow-delay="0.2s">About Us</h2>

            <!-- .breadcrumb-nav -->
            <ul class="breadcrumb-nav wow fadeInRight">
                <li><a href="{{ route('index') }}">Home</a></li>
                <li class="active">About Us</li>
            </ul>
        </div>
    </div>
</section>
<!-- /.breadcrumb-area -->

<!-- .text-block -->
<section class="text-block pt-115 pb-115">
    <div class="container">
        <div class="row align-items-center justify-content-center wow fadeInLeft" data-wow-delay=".3s">
            <div class="col-lg-7">
                <div class="text-img text-center text-lg-left mb-small">
                    <img src="{{ asset('assets/img/about/2.jpg') }}" alt="Image" class="hidden" />
                    <iframe src="https://www.youtube.com/embed/tiIDbgWmSqg" title="Landco Corporate Video" style="width: 100%; height: 400px;" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
            </div>
            <div class="col-lg-5 col-md-8 col-sm-10 wow fadeInRight" data-wow-delay=".5s">
                <div class="block-text">
                    <div class="section-title mb-20">
                        <span class="title-tag">Take a tour</span>
                        <h3>We are Landco, and luxury living is our expertise</h3>
                    </div>
                    <p>For more than 25 years, we have delighted in creating world-class leisure communities, breathtaking resort-inspired condominiums and luxury home communities.</p>
                    <p>As a pioneer upscale real estate developer in the Philippines, we are passionate about offering innovative and outstanding lifestyle products and experiences that revolutionize the way Filipinos live.</p>
                    <p>We envision places of leisure in which life can come alive in all its breathtaking fullness and beauty.</p>
                    <p>Our vision is encapsulated in two words: “Pioneering Landscapes” and every Landco Pacific property is a testament to this vision. </p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- /.text-block -->

<!-- .text-block -->
<section class="text-block with-bg pt-115 pb-115" style="background-image: url('{{ asset("assets/img/backgrounds/2.jpg") }} ');">
    <div class="container">
        <div class="row align-items-center justify-content-center justify-content-lg-between">
            <div class="col-lg-5 col-md-8 col-sm-10 wow fadeInLeft" data-wow-delay=".3s">
                <div class="block-text mb-small">
                    <div class="section-title mb-20">
                        <h2>Indulge in a lifestyle experience that reflects your aspirations.</h2>
                    </div>
                    <p> Savor the relaxing ambiance of our Leisure Communities that provide a welcome escape from the hustle and bustle of the urban jungle. Delight in the resort-in-the-city feel of our Resort-inspired Condominiums. Enjoy the peace and tranquility of a homey and fulfilled family life in our Luxury Home Communities.</p>
                    <p>Our flagship development, Peninsula de Punta Fuego in Nasugbu, Batangas, is the country’s first private and exclusive seaside residential resort, blending the wonders of sand, sky and sea with world-class resort amenities.</p>
                </div>
            </div>
            <div class="col-lg-6 col-md-10 wow fadeInRight" data-wow-delay=".5s">
                <div class="text-img text-center text-lg-left mb-small">
                    <img src="{{ asset('assets/img/about/3.jpg') }}" alt="Image">
                </div>
            </div>
        </div>
    </div>
</section>
<!-- /.text-block -->

<!-- .about-section -->
<section class="about-section pt-115 pb-115 bg-black mb-0">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 wow fadeInLeft">
                <div class="about-img">
                    <img src="{{ asset('assets/img/about/5.jpg') }}" alt="images">
                </div>
            </div>
            <div class="col-lg-6 wow fadeInRight">
                <div class="about-text">
                    <h3>Landco will help you find your dream home.</h3>
                    <p>Every day, we explore new living concepts that respond to your changing emotional and practical needs, fuelled by a passion to provide Filipinos with the luxurious, truly enjoyable lifestyle that they deserve.</p>
                    <p>Whether you are looking to strike a balance between freedom and responsibility or sink into the perfect union of family and career, we at Landco will help you find your dream home.</p>
                    <a href="{{ route('contact_us') }}" class="main-btn btn-filled mb-4">Inquire Now</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- /.about-section -->

<!-- .text-block -->
<section class="latest-news pt-115 pb-115">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="section-title text-center wow fadeInUp">
                    <h2>Management Committee</h2>
                    <p class="mt-40">Innovative and excellent leaders with years of experience in upscale real estate development in the Philippines, Landco’s management team is committed to breaking new ground and pushing the envelope towards creating new and exciting Filipino leisure living experiences.</p>
                </div>
            </div>
        </div>
        
        <!-- Latest post loop -->
        <div class="row justify-content-center">              
            <div class="testimonials mt-60 mb-20">
                <div class="row justify-content-center">
                    <!-- -->
                    <div class="col-md-12">
                        <!-- -->
                        <div class="row">
                            <div class="col-lg-6 wow fadeInUp">
                                <div class="testimonial-box">
                                    <div class="client-img">
                                        <img src="{{ asset('assets/img/management/1.png') }}" alt="images">
                                    </div>
                                    <h3>Erickson Y. Manzano</h3>
                                    <span class="clinet-post">President &amp; CEO</span>
                                </div>
                            </div>
                            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.2s">
                                <div class="testimonial-box">
                                    <div class="client-img">
                                        <img src="{{ asset('assets/img/management/2.png') }}" alt="images">
                                    </div>
                                    <h3>Vivian S. Liban</h3>
                                    <span class="clinet-post">Chief Finance Officer</span>
                                </div>
                            </div>
                        </div>
                        <!-- / -->
                    </div>
                    <!-- / -->						
                </div>
            </div>
        </div>
    </div>
</section>
<!-- /.text-block -->

<!-- .text-block -->
<section class="text-block with-bg pt-115 pb-115" style="background-image: url('{{ asset("assets/img/backgrounds/2.jpg") }}');">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="section-title text-center wow fadeInUp">
                    <h2>Board of Directors</h2>
                    <p class="mt-40 mb-5">Our board of directors is composed of several of the country’s finest minds in business and real estate, known for their business acumen, rich sense of history and passion for offering the best to the Filipino consumer.</p>
                </div>
            </div>
        </div>
        
        <div class="row justify-content-center">
            <div class="col-md-4 wow fadeInUp">
                <div class="testimonial-box">
                    <h5 class="mb-0">Manuel V. Pangilinan</h5>
                    <span class="clinet-post mb-0">Chairman</span>
                </div>
            </div>
            <div class="col-md-4 wow fadeInUp" data-wow-delay=".2s">
                <div class="testimonial-box">
                    <h5 class="mb-0">Alfred Xerez-Burgos, Jr.</h5>
                    <span class="clinet-post mb-0">Vice Chairman</span>
                </div>
            </div>
            <div class="col-md-4 wow fadeInUp" data-wow-delay=".3s">
                <div class="testimonial-box">
                    <h5 class="mb-0">Alfred Xerez-Burgos III</h5>
                    <span class="clinet-post mb-0 hidden">Director</span>
                </div>
            </div>
            <div class="col-md-4 wow fadeInUp" data-wow-delay=".4s">
                <div class="testimonial-box">
                    <h5 class="mb-0">Jose Ma. K. Lim</h5>
                    <span class="clinet-post mb-0 hidden">Director</span>
                </div>
            </div>
            <div class="col-md-4 wow fadeInUp" data-wow-delay=".5s">
                <div class="testimonial-box">
                    <h5 class="mb-0">Albert Martin V. Villa-Real</h5>
                    <span class="clinet-post mb-0 hidden">Director</span>
                </div>
            </div>
            <div class="col-md-4 wow fadeInUp" data-wow-delay=".6s">
                <div class="testimonial-box">
                    <h5 class="mb-0">Vivian S. Liban</h5>
                    <span class="clinet-post mb-0">CFO / Treasurer</span>
                </div>
            </div>
            <div class="col-md-4 wow fadeInUp" data-wow-delay=".6s">
                <div class="testimonial-box">
                    <h5 class="mb-0">Dionne Marie M. Sanchez</h5>
                    <span class="clinet-post mb-0">Corporate Secretary</span>
                </div>
            </div>
            <div class="col-md-4 wow fadeInUp" data-wow-delay=".6s">
                <div class="testimonial-box">
                    <h5 class="mb-0">Romilinda C. Sibal</h5>
                    <span class="clinet-post mb-0">Assistant Corporate Secretary</span>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- /.text-block -->

<!-- .text-block -->
<section class="text-block pt-115 pb-115">
    <div class="container">
        <div class="row align-items-center justify-content-center wow fadeInLeft" data-wow-delay=".3s">
            <div class="col-lg-7">
                <div class="text-img text-center text-lg-left mb-small">
                    <img src="{{ asset('assets/img/about/3.jpg') }}" alt="Image">
                </div>
            </div>
            <div class="col-lg-5 col-md-8 col-sm-10 wow fadeInRight" data-wow-delay=".5s">
                <div class="block-text">
                    <div class="section-title mb-20">
                        <span class="title-tag">Mission</span>
                        <h2>Discover a life of leisure with Landco</h2>
                    </div>
                    <p>For us at Landco, leisure living is all about balance, relationships and unforgettable moments.</p>
                    <p>Landco believes that leisure is living life at your own pace, aligning your heart, mind and spirit with what you hold dear.</p>
                    <p>A life of leisure gives birth to great ideas, lifelong relationships, life-changing decisions and precious moments that lead to unforgettable memories.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- /.text-block -->

<!-- .text-block -->
<section class="text-block with-bg pt-115 pb-115" style="background-image: url('{{ asset("assets/img/backgrounds/2.jpg") }}');">
    <div class="container">
        <div class="row align-items-center justify-content-center justify-content-lg-between">
            <div class="col-lg-5 col-md-8 col-sm-10 wow fadeInLeft" data-wow-delay=".3s">
                <div class="block-text mb-small">
                    <div class="section-title mb-20">
                        <span class="title-tag">Vision</span>
                        <h3>A pioneer and innovator of leisure living in the Philippines for over 25 years.</h3>
                    </div>
                    <p>Our vision and passion to create unique experiences that reflect your aspirations. Whether you desire to escape the urban jungle in the relaxing ambience of our leisure communities, or experience the languid pace of our resort-inspired condominiums, or make memories and build relationships in our luxury home communities, we are confident you will find the lifestyle you seek at Landco.
                    </p>
                </div>
            </div>
            <div class="col-lg-6 col-md-10 wow fadeInRight" data-wow-delay=".5s">
                <img src="{{ asset('assets/img/about/1.jpg') }}" alt="Image" />
            </div>
        </div>
    </div>
</section>
<!-- /.text-block -->
@endsection