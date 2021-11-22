@extends('layouts.guest')

@section('content')
    <!-- .breadcrumb-area -->
    <section class="breadcrumb-area" style="background-image: url('{{ asset("assets/img/banners/banner-vision.jpg") }}');">
        <div class="container">
            <div class="breadcrumb-text">
                <span class="wow fadeInLeft">We Are Here To Help You</span>
                <h2 class="page-title wow fadeInLeft" data-wow-delay="0.2s">Frequently Asked Questions</h2>

				<!-- .breadcrumb-nav -->
                <ul class="breadcrumb-nav wow fadeInRight">
                    <li><a href="{{ route('index') }}">Home</a></li>
                    <li class="active">FAQ</li>
                </ul>
            </div>
        </div>
    </section>
    <!-- /.breadcrumb-area -->
	
	<!-- .text-block -->
	<section class="contact-part pt-115 pb-115">
        <div class="container">
			<div class="row">	
				<div class="col-md-8">
					<div class="accordion" id="accordion_faq">
						<!-- -->
						<div class="card wow fadeInUp">
							<div class="card-header" id="heading_1">
								<h2 class="mb-0">
									<button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#faq_1">
										I am interested in applying for a job at Landco, where can I send my resume?
									</button>
								</h2>
							</div>

							<div id="faq_1" class="collapse show" data-parent="#accordion_faq">
								<div class="card-body">
									Thank you for expressing your interest in Landco. You may send your resume to <a href="mailto:careers@landco.ph">careers@landco.ph</a>. We’ll review your credentials in line with our current vacancies. Should we find your qualifications suited for our openings, we will be in touch. Good luck!
								</div>
							</div>
						</div>
						
						<!-- -->
						<div class="card wow fadeInUp">
							<div class="card-header" id="heading_2">
								<h2 class="mb-0">
									<button class="btn btn-link" type="button" data-toggle="collapse" data-target="#faq_2">
										I am interested in becoming an accredited broker, how do I go about becoming one?
									</button>
								</h2>
							</div>

							<div id="faq_2" class="collapse" data-parent="#accordion_faq">
								<div class="card-body">
									Please send us your credentials at info@landco.ph so we can endorse to our Broker Group. You may also call our Trunk line at (+632) 8836-5000 so we can connect you with our Sales Team if they are available.
								</div>
							</div>
						</div>
						
						<!-- -->
						<div class="card wow fadeInUp">
							<div class="card-header" id="heading_3">
								<h2 class="mb-0">
									<button class="btn btn-link" type="button" data-toggle="collapse" data-target="#faq_3">
										I'm interested in buying property, how do I get in touch with Landco?
									</button>
								</h2>
							</div>

							<div id="faq_3" class="collapse" data-parent="#accordion_faq">
								<div class="card-body">
									Thank you for expressing interest in our project/s. It would be our pleasure to assist you via our Customer Service Hotline at (+632) 8836-5000 or via email at <a href="mailto:info@landco.ph">info@landco.ph</a>. Please specify the project development you are interested in and provide your contact information and our sales manager will reach out immediately.
								</div>
							</div>
						</div>
						
						<!-- -->
						<div class="card wow fadeInUp">
							<div class="card-header" id="heading_4">
								<h2 class="mb-0">
									<button class="btn btn-link" type="button" data-toggle="collapse" data-target="#faq_4">
										I am not a property owner, may I use the beach club facilities?
									</button>
								</h2>
							</div>

							<div id="faq_4" class="collapse" data-parent="#accordion_faq">
								<div class="card-body">
									Amenities at Landco projects, except Aquaria Water Park and Crusoe cabins in Calatagan are for the exclusive use of our property owners. If you have a friend or a relative who is a property owner, you can request an endorsement letter that will grant you access to the project’s amenities. For any questions, please contact our Customer Service Hotline at (+632) 8836-5000 or via email at <a href="mailto:info@landco.ph">info@landco.ph</a>.
								</div>
							</div>
						</div>
						
						<!-- -->
						<div class="card wow fadeInUp">
							<div class="card-header" id="heading_5">
								<h2 class="mb-0">
									<button class="btn btn-link" type="button" data-toggle="collapse" data-target="#faq_5">
										I am a property owner, how do I use/make a booking for the beach club facilities?
									</button>
								</h2>
							</div>

							<div id="faq_5" class="collapse" data-parent="#accordion_faq">
								<div class="card-body">
									For the comfort and enjoyment of our lot owners and guests, we highly encourage pre-booking 2 to 3 days in advance. You may call our Customer Service Hotline at (+632) 836 5000 from Mondays to Fridays except during holidays. Our hotline is open from 8:30 am to 5:30 pm. You can also send us an email at <a href="mailto:info@landco.ph">info@landco.ph</a>. Please provide your name, property details, project of interest, date of booking, no. of pax in attendance, and your contact information so we can endorse you to our beach club concierge.
								</div>
							</div>
						</div>
						
						<!-- -->
						<div class="card wow fadeInUp">
							<div class="card-header" id="heading_6">
								<h2 class="mb-0">
									<button class="btn btn-link" type="button" data-toggle="collapse" data-target="#faq_6">
										How can I make a payment alternatively in the Philippines?
									</button>
								</h2>
							</div>

							<div id="faq_6" class="collapse" data-parent="#accordion_faq">
								<div class="card-body">
									For our clients’ convenience, below are the payment channels that are currently available:
									<br /><br />
									1. International Remittance Centers through Union Bank and Philippine National Bank (copy of proof of remittance to be sent to Landco Customer Service)
									<br /><br />
									2. Bills Payment Facility at Union Bank, Philippine National Bank, Security Bank
									<br /><br />
									3. Qwikwire payment: https://realestate.aqwire.io/landco
									<br /><br />
									For any questions, please contact our Customer Service Hotline at (+632) 8836-5000 or via email at <a href="mailto:info@landco.ph">info@landco.ph</a>.
								</div>
							</div>
						</div>
						
						<!-- -->
						<div class="card wow fadeInUp">
							<div class="card-header" id="heading_7">
								<h2 class="mb-0">
									<button class="btn btn-link" type="button" data-toggle="collapse" data-target="#faq_7">
										How can I make a payment alternatively outside of the Philippines?
									</button>
								</h2>
							</div>

							<div id="faq_7" class="collapse" data-parent="#accordion_faq">
								<div class="card-body">
									If you are overseas, you can make payments via your bank or remittance center.
									<br /><br />
									For bank payments:
									<br /><br />
									Bank: Union Bank of the Philippines Swift/Bank Code: UBPHPHMM Beneficiary Account Name: Landco Pacific Corporation Beneficiary Account no.: 102030005345 Beneficiary Account Branch: BF Homes, Paranaque For remittance center payments:
									<br /><br />
									Bank: Philippine National Bank (PNB) Swift/Bank Code: PNBMPHMM Beneficiary Account Name: Landco Pacific Corporation Beneficiary Account no.: 213149200069 Beneficiary Account Branch: PNB Bldg., Diosdado Macapagal Ave., Pasay
									<br /><br />
									As this is reflected in our accounts as a deposit transaction, upon payment, please send us a copy of your payment slip to <a href="mailto:info@landco.ph">info@landco.ph</a> so that we can in turn facilitate posting and official receipt issuance. Kindly take note that this payment arrangement is applicable for active accounts only and as an interim solution until check replacements are issued.
								</div>
							</div>
						</div>
						
						<!-- -->
						<div class="card wow fadeInUp">
							<div class="card-header" id="heading_8">
								<h2 class="mb-0">
									<button class="btn btn-link" type="button" data-toggle="collapse" data-target="#faq_8">
										I have fully paid my property, what are the next steps?
									</button>
								</h2>
							</div>

							<div id="faq_8" class="collapse" data-parent="#accordion_faq">
								<div class="card-body">
									Upon confirmation of full payment, please expect to receive your DOAS (Deed of Absolute Sale) at your registered address. Kindly ensure that your registered mailing address is updated. This will be accompanied by the Transfer Fee and any due RPT (Real Estate Property Tax) billings. The title transfer processing turnaround time is 12 months commencing upon settlement of the transfer fees and Real Estate Property Tax, the return of the signed DOAS (Deed of Absolute Sale), and compliance with other requirements.
								</div>
							</div>
						</div>
						
						<!-- -->
						<div class="card wow fadeInUp">
							<div class="card-header" id="heading_9">
								<h2 class="mb-0">
									<button class="btn btn-link" type="button" data-toggle="collapse" data-target="#faq_9">
										How do I claim my title?
									</button>
								</h2>
							</div>

							<div id="faq_9" class="collapse" data-parent="#accordion_faq">
								<div class="card-body">
									We will contact you once your title and tax declaration are ready to be released. Releasing at our head office is strictly by appointment. Our releasing is scheduled (excluding holidays) from Tuesdays to Thursdays at 8:30 am to 5:30 pm. Our company address is located at:
									<br /><br />
									25F Insular Life Corporate Centre Tower 1, Insular Life Drive, Filinvest Corporate Center Alabang, Muntinlupa City 1781
									<br /><br />
									Please give us at least 1 working day ahead of your appointment date to prepare your document kit and ensure accommodation. You may contact us at (+632) 8836-5000 or send us an email at <a href="mailto:info@landco.ph">info@landco.ph</a> for your preferred date and time of visit. Do take note of some important reminders on claiming:
									<br /><br />
									Photocopies of 2 valid IDs (with 3 specimen signatures) will be needed to claim your title and tax declaration. If you wish to send a representative, the following items are needed for verification purposes:
									<br /><br />
									1. Authorization letter signed by all the property owners indicating the representative’s authority to claim.
									<br /><br />
									2. Clear photocopy of two (2) government issued valid IDs (not expired) with picture and signature of the property owner(s). Three (3) copies of specimen signatures should appear alongside the IDs..
									<br /><br />
									3. Clear photocopy of two (2) government issued valid IDs (not expired) with picture and signature of the representative. Three (3) copies of specimen signatures should appear alongside the IDs.”
								</div>
							</div>
						</div>
						
						<!-- -->
						<div class="card wow fadeInUp">
							<div class="card-header" id="heading_10">
								<h2 class="mb-0">
									<button class="btn btn-link" type="button" data-toggle="collapse" data-target="#faq_10">
										I would like to know my payment status. How can I request for a statement of account/ledger?
									</button>
								</h2>
							</div>

							<div id="faq_10" class="collapse" data-parent="#accordion_faq">
								<div class="card-body">
									You may call our Customer Service Hotline at (+632) 8836-5000 from Mondays to Fridays except during holidays. Our hotline is open from 8:30 am to 5:30 pm. You can also send us an email at <a href="mailto:info@landco.ph">info@landco.ph</a>. Please provide your name and property details upon making your request so we can quickly revert with your statement of account.
								</div>
							</div>
						</div>
						
						<!-- -->
						<div class="card wow fadeInUp">
							<div class="card-header" id="heading_11">
								<h2 class="mb-0">
									<button class="btn btn-link" type="button" data-toggle="collapse" data-target="#faq_11">
										I have other inquiries/concerns not covered by your FAQs. Where can I raise my concerns?
									</button>
								</h2>
							</div>

							<div id="faq_11" class="collapse" data-parent="#accordion_faq">
								<div class="card-body">
									You may call our Customer Service Hotline at (+632) 8836-5000 from Mondays to Fridays except during holidays. Our hotline is open from 8:30 am to 5:30 pm. You can also send us an email at <a href="mailto:info@landco.ph">info@landco.ph</a>. Kindly provide your name and property details when you contact us so that we can quickly relay the needed information.
								</div>
							</div>
						</div>
					</div>
				</div>
				
				<!-- .sidebar -->
				<div class="col-md-4 sidebar">
					<!-- Contact Info -->
					<div class="contact-info">
						<div class="info-box wow fadeInUp">
							<div class="icon"><i class="flaticon-home"></i></div>
							<div class="desc">
								<h4>Office Address</h4>
								<p>25th Floor Tower 1, Insular Life Centre, Insular Drive, Filinvest Corporate City, Alabang, Muntinlupa City</p>
							</div>
						</div>
						<div class="info-box wow fadeInUp">
							<div class="icon"><i class="flaticon-phone"></i></div>
							<div class="desc">
								<h4>Phone Number</h4>
								<p>(+632) 8836-5000 <br> (+63 918) 8365000</p>
							</div>
						</div>
						<div class="info-box wow fadeInUp">
							<div class="icon"><i class="flaticon-message"></i></div>
							<div class="desc">
								<h4>Email Address</h4>
								<p>info@landco.ph </p>
							</div>
						</div>
					</div>
				</div>
				<!-- /.sidebar -->
			</div>
        </div>
    </section>
	<!-- /.text-block -->
@endsection