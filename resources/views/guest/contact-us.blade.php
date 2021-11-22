@extends('layouts.guest')

@section('content')
 <!-- .breadcrumb-area -->
 <section class="breadcrumb-area" style="background-image: url('{{ asset("assets/img/banners/banner-vision.jpg") }}');">
    <div class="container">
        <div class="breadcrumb-text">
            <span class="wow fadeInLeft">Keep In Touch</span>
            <h2 class="page-title wow fadeInLeft" data-wow-delay="0.2s">Contact Us</h2>

            <!-- .breadcrumb-nav -->
            <ul class="breadcrumb-nav wow fadeInRight">
                <li><a href="{{ route('index') }}">Home</a></li>
                <li class="active">Contact</li>
            </ul>
        </div>
    </div>
</section>
<!-- /.breadcrumb-area -->

<!-- .text-block -->
<section class="contact-part pt-115 pb-115">
    <div class="container">
        <!-- Contact Info -->
        <div class="contact-info">
            <div class="row row-eq-height justify-content-center">
                <div class="col-md-4 wow fadeInUp">
                    <div class="info-box">
                        <div class="icon"><i class="flaticon-home"></i></div>
                        <div class="desc">
                            <h4>Office Address</h4>
                            <p>25th Floor Tower 1, Insular Life Centre, Insular Drive, Filinvest Corporate City, Alabang, Muntinlupa City</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 wow fadeInUp" data-wow-delay=".2s">
                    <div class="info-box">
                        <div class="icon"><i class="flaticon-phone"></i></div>
                        <div class="desc">
                            <h4>Phone Number</h4>
                            <p>(+63 2) 8836.5000<br />(+63 918) 836.5000</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 wow fadeInUp" data-wow-delay=".3s">
                    <div class="info-box">
                        <div class="icon"><i class="flaticon-message"></i></div>
                        <div class="desc">
                            <h4>Email Address</h4>
                            <p><a href="mailto:info@landco.ph">info@landco.ph</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- /.text-block -->

<!-- .text-block -->
<section class="contact-part pb-115 wow fadeInUp">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3864.1400903544363!2d121.03654025040956!3d14.419086685315252!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397d03432bb5059%3A0x92df13249c748e13!2sInsular%20Life%20Corporate%20Center!5e0!3m2!1sen!2sph!4v1618232365747!5m2!1sen!2sph" style="border: 0; width: 100%; height: 400px;" allowfullscreen="" loading="lazy"></iframe>
            </div>
        </div>
    </div>
</section>
<!-- /.text-block -->

<!-- .text-block -->
<section class="contact-part pb-115">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="contact-form">
                    <form method="POST" id="contact-form" name="form-validate">
                        <div class="row">
                            <div class="col-md-6 wow fadeInUp">
                                <div class="input-group mb-30">
                                    <span class="icon"><i class="far fa-user"></i></span>
                                    <input type="text" id="fullname" name="fullname" placeholder="Your Full Name" required>
                                </div>
                            </div>
                            <div class="col-md-6 wow fadeInUp" data-wow-delay=".2s">
                                <div class="input-group mb-30">
                                    <span class="icon"><i class="far fa-envelope"></i></span>
                                    <input type="email" id="email" name="email" placeholder="Enter Email Address" required>
                                </div>
                            </div>
                            <div class="col-md-6 wow fadeInUp">
                                <div class="row mb-30">
                                    <div class="inputs-filed input-dropdown col-md-4 col-area">
                                        <select name="area_code" id="area_code" required>
                                            <option value="+63" selected>+63</option>
                                            <option value="+61">+61</option>
                                            <option value="+1">+1</option>
                                            <option value="+86">+86</option>
                                            <option value="+49">+49</option>
                                            <option value="+852">+852</option>
                                            <option value="+62">+62</option>
                                            <option value="+39">+39</option>
                                            <option value="+81">+81</option>
                                            <option value="+60">+60</option>
                                            <option value="+65">+65</option>
                                            <option value="+886">+886</option>
                                            <option value="+66">+66</option>
                                            <option value="+44">+44</option>
                                            <option value="+1">+1</option>
                                        </select>
                                    </div>
                                    <div class="input-group col-md-8 col-number">
                                        <span class="icon" style="left: 35px;"><i class="far fa-phone"></i></span>
                                        <input type="tel" id="phone" name="phone" class="" placeholder="Contact Number" required>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 wow fadeInUp" data-wow-delay=".2s">
                                <div class="inputs-filed input-dropdown mb-30" style="height: 70px;">
                                    <select name="subject" id="subject" required>
                                        <option disabled selected>Select Subject</option>
                                        <option value="Sales Inquiry">Sales Inquiry</option>
                                        <option value="Account Inquiry">Account Inquiry</option>
                                        <option value="Customer Service related Inquiry">Customer Service related Inquiry</option>
                                        <option value="Landco Privilege Club Inquiry">Landco Privilege Club Inquiry</option>
                                        <option value="Booking and Reservation">Booking &amp; Reservation</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-12 wow fadeInUp">
                                <div class="input-group textarea mb-30">
                                    <span class="icon"><i class="far fa-pen"></i></span>
                                    <textarea type="text" id="message" name="message" placeholder="Enter messages" required></textarea>
                                </div>
                            </div>
                            <div class="col-12 text-center wow fadeInUp">
                                <button type="submit" class="main-btn btn-filled"><span class="txt" id="submitBtn">Send Message</span></button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- /.text-block -->
@endsection

@section('scripts')
<script src="https://www.google.com/recaptcha/api.js" async defer></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<script src="https://smtpjs.com/v3/smtp.js"></script>
<script src="{{ asset('assets/js/contact.js') }}"></script>
@endsection