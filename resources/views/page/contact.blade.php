@section('page')
		Contact
@endsection
@section('head')
	<style>
		.contact-page-area .contact-wrap {
  		background: #fff;
  		padding: 30px 20px;
		}
	</style>
@endsection

@include('include.header')
@include('include.link-head-menu')

		<div class="site-main-container">
			<!-- Start top-post Area -->
			<section class="top-post-area pt-10">
				<div class="container no-padding">

					@include('include.flash-message')


					<div class="row">
						<div class="col-lg-12">
							<div class="hero-nav-area">
								<h1 class="text-white">Contact Us</h1>
								<p class="text-white link-nav"><a href="{{ route('home') }}">Home </a>  <span class="lnr lnr-arrow-right"></span><a href="{{ route('contact') }}">Contact Us </a></p>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- End top-post Area -->

			<!-- Start contact-page Area -->
			<section class="contact-page-area pt-50 pb-80">
				<div class="container">
					<div class="row contact-wrap">

						{{-- <div class="map-wrap" style="width:100%; height: 445px;" id="map"></div> --}}

						<div class="col-lg-3 d-flex flex-column address-wrap">
							<div class="single-contact-address d-flex flex-row">
								<div class="icon">
									<span class="lnr lnr-home"></span>
								</div>
								<div class="contact-details">
									<h5>Los Angeles, USA</h5>
									<p>
										56/8, Rocky beach road
									</p>
								</div>
							</div>
							<div class="single-contact-address d-flex flex-row">
								<div class="icon">
									<span class="lnr lnr-phone-handset"></span>
								</div>
								<div class="contact-details">
									<h5>00 (440) 9865 562</h5>
									<p>Mon to Fri 9am to 6 pm</p>
								</div>
							</div>
							<div class="single-contact-address d-flex flex-row">
								<div class="icon">
									<span class="lnr lnr-envelope"></span>
								</div>
								<div class="contact-details">
									<h5>support@colorlib.com</h5>
									<p>Send us your query</p>
								</div>
							</div>
						</div>

						<div class="col-lg-9">
							<form class="form-area contact-form text-right" id="myForm" action="{{ url('/contact') }}" method="post">
								@include('include.form-error')
								@csrf()
								<div class="row">
									<div class="col-lg-6">
										<input name="name" placeholder="Enter your name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your name'" class="common-input mb-20 form-control" required="" type="text" value="{{ old('name') }}">
										
										<input name="email" placeholder="Enter email address" pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{1,63}$" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'" class="common-input mb-20 form-control" required="" type="email" value="{{ old('email') }}">

										<input name="subject" placeholder="Enter subject" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter subject'" class="common-input mb-20 form-control" required="" type="text" value="{{ old('subject') }}">
									</div>
									<div class="col-lg-6">
										<textarea class="common-textarea form-control" name="message" placeholder="Enter Messege" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Messege'" required="">{{ old('message') }}</textarea>
									</div>
									<div class="col-lg-12">
										<div class="alert-msg" style="text-align: left;"></div>
										<button class="primary-btn primary" style="float: right;" type="submit">Send Message</button>
									</div>
								</div>
							</form>
						</div>

					</div>
				</div>
			</section>
			<!-- End contact-page Area -->
		</div>
		
@include('include.link-footer-menu')

@include('include.footer')