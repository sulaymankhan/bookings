<!DOCTYPE html>
<html lang="en" data-theme="light">
	<head>
		<title>Create Password</title>

		<!-- Required meta tags -->
		<meta charset="utf-8" />
		<meta
			name="viewport"
			content="width=device-width, initial-scale=1, shrink-to-fit=no"
		/>

		<!-- Bootstrap CSS v5.2.0 -->
		<link
			href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css"
			rel="stylesheet"
			integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx"
			crossorigin="anonymous"
		/>

		<!-- Datepicker -->
		<link
			rel="stylesheet"
			href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css"
		/>
		<link
			rel="stylesheet"
			href="https://cdnjs.cloudflare.com/ajax/libs/flatpickr/4.6.13/plugins/monthSelect/style.min.css"
			integrity="sha512-V7B1IY1DE/QzU/pIChM690dnl44vAMXBidRNgpw0mD+hhgcgbxHAycRpOCoLQVayXGyrbC+HdAONVsF+4DgrZA=="
			crossorigin="anonymous"
			referrerpolicy="no-referrer"
		/>

		<!-- Odometer -->
		<link
			rel="stylesheet"
			href="https://cdnjs.cloudflare.com/ajax/libs/odometer.js/0.4.7/themes/odometer-theme-default.css"
			integrity="sha512-kMPqFnKueEwgQFzXLEEl671aHhQqrZLS5IP3HzqdfozaST/EgU+/wkM07JCmXFAt9GO810I//8DBonsJUzGQsQ=="
			crossorigin="anonymous"
			referrerpolicy="no-referrer"
		/>

		<!-- Stylesheet -->
		<link rel="stylesheet" href="{{url('public/css/style.css')}}" />
	</head>
	<body
		class="es-bg-gray-50 es-text-gray-900 es-text-normal es-font-mulish onboarding-page position-relative"
	>
		<div class="es-navbar es-z-50">
			<nav class="navbar navbar-expand-lg es-h-20 bg-white es-drop-shadow">
				<div class="container-xxl">
					<div class="d-flex align-items-center justify-content-between w-100">
						<div class="d-flex align-items-center">
							<a href="#" class="">
								<img src="{{url('public/images/logo.svg')}}" alt="" class="es-h-8" />
							</a>
						</div>
						<div>
							<a
								href="#"
								class="text-decoration-none es-text-gray-900 es-font-500"
							>
								<div class="d-flex align-items-center gap-2 gap-md-3">
									<img
										src="{{url('public/images/left-arrow.png')}}"
										width="16"
										height="16"
										alt=""
									/>
									<div>
										<span class="d-none d-md-inline-block">Back to&nbsp;</span
										><span class="text-decoration-underline"
											>empressspa.com</span
										>
									</div>
								</div>
							</a>
						</div>
					</div>
				</div>
			</nav>
		</div>
		<div class="hero-image es-z-0"></div>
		<div class="container-xxl es-z-10 position-relative">
			<form action="{{ url('password/confirm') }}" method="post">
			   @csrf
			    <div class="row position-relative">
			        <div class="col-lg-6 es-pt-20 es-pb-24">
			            <div class="es-mb-8">
			                <div class="es-header-3 es-font-600 es-mb-3">Create Password</div>
			            </div>
			            <div class="es-mb-8">
			                <div class="es-mb-5">
			                    <input
			                        id="email_address"
			                        type="text"
			                        name="email"
			                        class="form-control es-input mt-2"
			                        placeholder="Email Address"
			                        value="{{ old('email') }}" 
			                    />
			                    @error('email')
			                        <div class="es-input-error-message">{{ $message }}</div>
			                    @enderror
			                </div>
			                <div class="es-mb-5 d-flex">
			                    <input
			                        id="password"
			                        type="password"
			                        name="password"
			                        class="form-control es-input"
			                        placeholder="Create your new password"
			                    />
			                    <input type="hidden" name="token" value="{{ $token }}">
			                    <button
			                        id="toggle-password"
			                        type="button"
			                        class="d-flex align-items-center bg-transparent border-0 es--ml-12 es-outline-none"
			                    >
			                        <img
			                            src="{{ url('public/images/eye-dark.png') }}"
			                            alt="Toggle Password Visibility"
			                        />
			                    </button>
			                    @error('password')
			                        <div class="es-input-error-message">{{ $message }}</div>
			                    @enderror
			                </div>
			                <div class="es-mb-5 d-flex">
			                    <input
			                        id="confirm_password"
			                        type="password"
			                        name="password_confirmation"
			                        class="form-control es-input"
			                        placeholder="Confirm your new password"
			                    />
			                    <button
			                        id="toggle-confirm-password"
			                        type="button"
			                        class="d-flex align-items-center bg-transparent border-0 es--ml-12 es-outline-none"
			                    >
			                        <img
			                            src="{{ url('public/images/eye-dark.png') }}"
			                            alt="Toggle Password Visibility"
			                        />
			                    </button>
			                    @error('password_confirmation')
			                        <div class="es-input-error-message">{{ $message }}</div>
			                    @enderror
			                </div>
			            </div>
			            <div>
			                <button type="submit" class="es-btn w-100 es-mb-8">
			                    Reset Password
			                </button>
			            </div>
			        </div>
			        <div class="col-lg-6 hero-text">
			            <div class="hero-text-bg"></div>
			            <div class="w-100 h-100">
			                <div class="hero-text-content">
			                    <div class="es-mb-8">
			                        <img src="{{ url('public/images/logo-white.svg') }}" alt="" />
			                    </div>
			                    <div class="es-mb-8">
			                        <div class="es-header-2 es-font-600 text-white es-font-inter es-mb-5">
			                            Limited Time Offer: Exclusive<br />Empress Spa Package
			                        </div>
			                        <div class="es-text-xl text-white">
			                            Only a Few Seats Left! Reserve Your Spot Today and<br />Indulge
			                            in Pure Relaxation!
			                        </div>
			                    </div>
			                    <div class="d-flex es-mb-8">
			                        <div class="es-px-5 es-py-2 bg-white d-flex align-items-center gap-2 rounded-2">
			                            <span class="es-text-xl es-font-600">2000</span>
			                            <span>Seats Remaining</span>
			                        </div>
			                    </div>
			                    <div class="text-white d-flex es-gap-7 text-center">
			                        <div>
			                            <div class="es-text-15xl es-font-500 es-font-inter">02</div>
			                            <div class="es-font-500">MONTHS</div>
			                        </div>
			                        <div>
			                            <div class="es-text-15xl es-font-500 es-font-inter">14</div>
			                            <div class="es-font-500">DAYS</div>
			                        </div>
			                        <div>
			                            <div class="es-text-15xl es-font-500 es-font-inter">20</div>
			                            <div class="es-font-500">HOURS</div>
			                        </div>
			                        <div>
			                            <div class="es-text-15xl es-font-500 es-font-inter odometer">44</div>
			                            <div class="es-font-500">MINUTES</div>
			                        </div>
			                    </div>
			                </div>
			            </div>
			        </div>
			    </div>
			</form>

		</div>

		<!-- Bootstrap JavaScript Libraries -->
		<script
			src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
			integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa"
			crossorigin="anonymous"
		></script>

		<!-- Datepicker -->
		<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
		<script src="https://cdn.jsdelivr.net/npm/flatpickr/dist/plugins/monthSelect/index.js"></script>

		<!-- Odometer -->
		<script
			src="https://cdnjs.cloudflare.com/ajax/libs/odometer.js/0.4.7/odometer.min.js"
			integrity="sha512-v3fZyWIk7kh9yGNQZf1SnSjIxjAKsYbg6UQ+B+QxAZqJQLrN3jMjrdNwcxV6tis6S0s1xyVDZrDz9UoRLfRpWw=="
			crossorigin="anonymous"
			referrerpolicy="no-referrer"
		></script>

		<script>
			flatpickr(".flatpickr", {
				plugins: [
					new monthSelectPlugin({
						shorthand: true,
						dateFormat: "m/y",
						altFormat: "F Y",
					}),
				],
			});

			// Reference: https://github.com/livebloggerofficial/Counter-Animation
            const createOdometer = (el, value) => {
                const odometer = new Odometer({
                    el: el,
                    value: 44,
                });

                let hasRun = false;

                const options = {
                    threshold: [0, 0.9],
                };

                const callback = (entries, observer) => {
                    entries.forEach((entry) => {
                    if (entry.isIntersecting) {
                        if (!hasRun) {
                        odometer.update(value);
                        hasRun = true;
                        }
                    }
                    });
                };

                const observer = new IntersectionObserver(callback, options);
                observer.observe(el);
            };

            setTimeout(() => {
                const subscribersOdometer = document.querySelector(".odometer");
                createOdometer(subscribersOdometer, 45);
            }, 1000);

			document.addEventListener("DOMContentLoaded", function () {
				function togglePasswordVisibility(
					inputId,
					buttonId,
					eyeDarkSrc,
					eyeLightSrc,
				) {
					const passwordInput = document.getElementById(inputId);
					const toggleButton = document.getElementById(buttonId);
					const eyeIcon = toggleButton.querySelector("img");

					toggleButton.addEventListener("click", function () {
						if (passwordInput.type === "password") {
							passwordInput.type = "text";
							eyeIcon.src = eyeLightSrc;
						} else {
							passwordInput.type = "password";
							eyeIcon.src = eyeDarkSrc;
						}
					});
				}

				togglePasswordVisibility(
					"password",
					"toggle-password",
					"{{url('public/images/eye-dark.png')}}",
					"{{url('public/images/eye-off-dark.png')}}",
				);

				togglePasswordVisibility(
					"confirm_password",
					"toggle-confirm-password",
					"{{url('public/images/eye-dark.png')}}",
					"{{url('public/images/eye-off-dark.png')}}",
				);
			});
		</script>
	</body>
</html>