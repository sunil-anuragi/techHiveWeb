 @extends('layout.main')

@section('title') {{ 'Contatc | '.env('APP_NAME') }} @endsection

@push('after-css')
@endpush
@section('content')

    <main>
        <!-- breadcrumb area start -->
        <section class="tp-breadcrumb-area p-relative z-index-1" data-background="{{asset('public/template/assets/img/breadcrumb/breadcrumb-bg.jpg')}}">
            <div class="tp-breadcrumb-bg-shape">
                <img class="tp-breadcrumb-bg-shape-1" src="{{asset('public/template/assets/img/breadcrumb/breadcrumb-shape1.png')}}" alt="">
                <img class="tp-breadcrumb-bg-shape-2" src="{{asset('public/template/assets/img/breadcrumb/breadcrumb-shape2.png')}}" alt="">
            </div>
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-5">
                        <div class="tp-breadcrumb-content">
                            <h2 class="tp-breadcrumb-title">contact us</h2>
                            <p class="tp-breadcrumb-body"><span><a class="home" href="index.html">Home <span class="spacing">/</span> </a></span>contact us</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- breadcrumb area end -->



        <!-- conatct area start -->
        <section class="tp-contact-area pt-120">
            <div class="container">
                <div class="row">
                    <div class="tp-section-title-wrapper mb-35 wow fadeInUp">
                        <span class="tp-section-subtitle">HOW CAN WE HELP YOU?</span>
                        <h3 class="tp-section-title">HAVE A PROJECT IN YOUR MIND <br>
                            GET IN TOUCH!</h3>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-7 col-lg-6">
                        <div class="tp-contact-page-thumb wow fadeInUp">
                            <img src="{{asset('public/template/assets/img/contact/contact-us-img.jpg')}}" alt="">
                        </div>
                    </div>
                    <div class="col-xl-5 col-lg-6">
                        <div class="tp-contact-page-wrapper ml-80 wow fadeInUp">
                            <div class="tp-contact-page-content mb-25">
                                <h4 class="tp-contact-page-title">kEEP IN TOUCH</h4>
                                <a class="tp-contact-page-paragrap" href="https://www.google.com/maps/@41.6758525,-86.2531698,18.17z">401 Central Park, 24th Floor, <br>Orchard View, London</a>
                            </div>
                            <div class="tp-contact-page-content mb-25">
                                <h4 class="tp-contact-page-title">free customer care</h4>
                                <a class="tp-contact-page-paragrap" href="tel:888021562546">+888 02156 2546</a>
                                <a class="tp-contact-page-paragrap" href="tel:999235623164">+999 23562 3164</a>
                            </div>
                            <div class="tp-contact-page-content mb-35">
                                <h4 class="tp-contact-page-title">need live support</h4>
                                <a class="tp-contact-page-paragrap" href="mailto:teczaofficial@mail.com">teczaofficial@mail.com</a>
                                <a class="tp-contact-page-paragrap" href="mailto:teczainfo@mail.com">teczainfo@mail.com</a>
                            </div>
                            <div class="tp-contact-page-content d-flex">
                                <p class="tp-contact-page-paragrap opacity-100">Connect On :</p>
                                <div class="tp-contact-page-social">
                                    <a href="#"><i class="flaticon-facebook"></i></a>
                                    <a href="#"><i class="flaticon-instagram"></i></a>
                                    <a href="#"><i class="flaticon-social"></i></a>
                                    <a href="#"><i class="flaticon-pinterest"></i></a>
                                </div>
                            </div>
                        </div>  
                    </div>
                </div>
            </div>
        </section>
        <!-- conatct area end -->
        <!-- maps area start -->
        <div class="tp-map-2-area">
            <div class="tp-map-2-content">
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d3178401.37203209!2d35.68689745030553!3d38.926089619386694!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sbd!4v1696137917870!5m2!1sen!2sbd" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
        <!-- maps area end -->        
        <!-- conatct form area start -->
        <section class="tp-contact-last-area pt-100 pb-120">
           <div class="container">
				<div class="row">
					<div class="tp-postbox-contact-reply text-center">
						<h3 class="tp-postbox-contact-title two pb-45 wow fadeInUp">Let’s Get in Touch</h3>
						<form id="contactForm" method="POST">
							@csrf
							<div class="row">
								<div class="col-md-6">
									<div class="tp-postbox-contact-input">
										<input name="name" type="text" placeholder="Your Name*" >
									</div>
								</div>
								<div class="col-md-6">
									<div class="tp-postbox-contact-input">
										<input name="email" type="email" placeholder="Your E-mail*" >
									</div>
								</div>
								<div class="col-md-12">
									<div class="tp-postbox-contact-input">
										<input name="website" type="text" placeholder="Website*">
									</div>
								</div>
								<div class="col-md-12">
									<div class="tp-postbox-contact-input">
										<textarea name="message" placeholder="Write Your Comment*" ></textarea>
									</div>
								</div>
								<div class="col-md-12">
									<div class="tp-postbox-contact-input-btn">
										<button class="tp-btn" type="submit"><span>Send your Message</span></button>
									</div>
								</div>
							</div>
						</form>
						<div id="formResponse" style="margin-top: 20px;"></div>
					</div>
				</div>
			</div>
        </section>
	</main>
@endsection

@push('after-js')
<script>

$('#contactForm').on('submit', function(e) {
    e.preventDefault();

    // Remove existing error messages
    $('#formResponse').html('');
    $('.tp-postbox-contact-input .error-message').remove();

    let name = $('input[name="name"]').val().trim();
    let email = $('input[name="email"]').val().trim();
    let website = $('input[name="website"]').val().trim();
    let message = $('textarea[name="message"]').val().trim();

    let hasError = false;

    // Helper function to show error below input
    function showError(selector, message) {
        $(selector).parent().append('<div class="error-message text-danger" style="font-size:14px; margin-top:4px;">' + message + '</div>');
    }

    // Name validation
    if (name === '') {
        showError('input[name="name"]', 'Please enter the name.');
        hasError = true;
    }

    // Email validation
    if (email === '') {
        showError('input[name="email"]', 'Please enter the email.');
        hasError = true;
    } else if (!/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email)) {
        showError('input[name="email"]', 'Enter a valid email address.');
        hasError = true;
    }

    // Website validation
    if (website === '') {
        showError('input[name="website"]', 'Please enter the website.');
        hasError = true;
    }

    // Message validation
    if (message === '') {
        showError('textarea[name="message"]', 'Please enter the message.');
        hasError = true;
    }

    if (hasError) return;

    // Submit with AJAX if no error
    $.ajax({
        url: "{{ route('contact.store') }}",
        type: "POST",
        data: $(this).serialize(),
        headers: {'X-CSRF-TOKEN': '{{ csrf_token() }}'},
        success: function(response) {
            if(response.success){
                $('#formResponse').html('<div class="alert alert-success" id="successMessage">'+response.message+'</div>');
                $('#contactForm')[0].reset();
				 // Auto-close the success message after 5 seconds
				setTimeout(function() {
					$('#successMessage').fadeOut('slow', function() {
						$(this).remove(); // Optional: remove the element from DOM
					});
				}, 3000); // 3000ms = 3 seconds
            }
        },
        error: function(xhr) {
            if (xhr.status === 422) {
                let errors = xhr.responseJSON.errors;
                $.each(errors, function(field, messages) {
                    let selector = $('[name="' + field + '"]');
                    showError(selector, messages[0]);
                });
            } else {
                $('#formResponse').html('<div class="alert alert-danger">Something went wrong. Please try again.</div>');
            }
        }
    });
});
</script>





@endpush