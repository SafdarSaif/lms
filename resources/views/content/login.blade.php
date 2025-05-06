<!-- meta tags and other links -->
<!DOCTYPE html>
<html lang="en" data-theme="light">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Learning Management System - Sign Up</title>
    <link rel="icon" type="image/png" href="assets/images/favicon.png" sizes="16x16">
    <!-- remix icon font css  -->
    <link rel="stylesheet" href="assets/css/remixicon.css">
    <!-- Bootstrap css -->
    <link rel="stylesheet" href="assets/css/lib/bootstrap.min.css">
    <!-- main css -->
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>

    <section class="auth bg-base d-flex flex-wrap">
        <div class="auth-left d-lg-block d-none">
            <div class="d-flex align-items-center flex-column h-100 justify-content-center">
                <img src="assets/images/auth/auth-img.png" alt="Auth illustration">
            </div>
        </div>
        <div class="auth-right py-32 px-24 d-flex flex-column justify-content-center">
            <div class="max-w-464-px mx-auto w-100">
                <div>
                    <a href="/" class="mb-40 max-w-290-px">
                        <img src="assets/images/logo.png" alt="Logo">
                    </a>
                    <h4 class="mb-12">Sign Up to your Account</h4>
                    <p class="mb-32 text-secondary-light text-lg">Welcome back! please enter your detail</p>
                </div>

                @if (session('status'))
                    <div class="mb-4 font-medium text-sm text-green-600">
                        {{ session('status') }}
                    </div>
                @endif

                @if ($errors->any())
                    <div class="alert alert-danger mb-4">
                        <ul class="mb-0">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form action="{{ route('login') }}" method="POST">
                    @csrf
                    {{-- <div class="icon-field mb-16">
                        <span class="icon top-50 translate-middle-y">
                            <iconify-icon icon="f7:person"></iconify-icon>
                        </span>
                        <input type="text" id="name" name="name" class="form-control h-56-px bg-neutral-50 radius-12"
                            placeholder="Full Name" value="{{ old('name') }}" required autofocus>
                    </div> --}}

                    <div class="icon-field mb-16">
                        <span class="icon top-50 translate-middle-y">
                            <iconify-icon icon="mage:email"></iconify-icon>
                        </span>
                        <input type="email" id="email" name="email" class="form-control h-56-px bg-neutral-50 radius-12"
                            placeholder="Email Address" value="{{ old('email') }}" required>
                    </div>

                    <div class="mb-16">
                        <div class="position-relative">
                            <div class="icon-field">
                                <span class="icon top-50 translate-middle-y">
                                    <iconify-icon icon="solar:lock-password-outline"></iconify-icon>
                                </span>
                                <input type="password" class="form-control h-56-px bg-neutral-50 radius-12"
                                    placeholder="Password" id="password" name="password" required>
                            </div>
                            <span class="toggle-password ri-eye-line cursor-pointer position-absolute end-0 top-50 translate-middle-y me-16 text-secondary-light"
                                data-toggle="#password"></span>
                        </div>
                    </div>

                    <div class="mb-16">
                        <div class="position-relative">
                            <div class="icon-field">
                                <span class="icon top-50 translate-middle-y">
                                    <iconify-icon icon="solar:lock-password-outline"></iconify-icon>
                                </span>
                                <input type="password" class="form-control h-56-px bg-neutral-50 radius-12"
                                    placeholder="Confirm Password" id="password_confirmation" name="password_confirmation" required>
                            </div>
                            <span class="toggle-password ri-eye-line cursor-pointer position-absolute end-0 top-50 translate-middle-y me-16 text-secondary-light"
                                data-toggle="#password_confirmation"></span>
                        </div>
                        <span class="mt-12 text-sm text-secondary-light">Your password must have at least 8 characters</span>
                    </div>

                    <div class="mb-24">
                        <div class="form-check style-check d-flex align-items-start">
                            <input class="form-check-input border border-neutral-300 mt-4" type="checkbox"
                                value="1" id="terms" name="terms" required>
                            <label class="form-check-label text-sm" for="terms">
                                I agree to the
                                <a href="" class="text-primary-600 fw-semibold">Terms & Conditions</a>
                                and
                                <a href="" class="text-primary-600 fw-semibold">Privacy Policy</a>
                            </label>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary text-sm btn-sm px-12 py-16 w-100 radius-12 mt-16">
                        Sign Up
                    </button>

                    <div class="mt-32 center-border-horizontal text-center">
                        <span class="bg-base z-1 px-4">Or sign up with</span>
                    </div>

                    <div class="mt-32 d-flex align-items-center gap-3">
                        <a href=""
                            class="fw-semibold text-primary-light py-16 px-24 w-50 border radius-12 text-md d-flex align-items-center justify-content-center gap-12 line-height-1 bg-hover-primary-50">
                            <iconify-icon icon="ic:baseline-facebook"
                                class="text-primary-600 text-xl line-height-1"></iconify-icon>
                            Facebook
                        </a>
                        <a href=""
                            class="fw-semibold text-primary-light py-16 px-24 w-50 border radius-12 text-md d-flex align-items-center justify-content-center gap-12 line-height-1 bg-hover-primary-50">
                            <iconify-icon icon="logos:google-icon"
                                class="text-primary-600 text-xl line-height-1"></iconify-icon>
                            Google
                        </a>
                    </div>

                    <div class="mt-32 text-center text-sm">
                        <p class="mb-0">Already have an account? 
                            <a href="" class="text-primary-600 fw-semibold">Sign In</a>
                        </p>
                    </div>
                </form>
            </div>
        </div>
    </section>

    <!-- jQuery library js -->
    <script src="assets/js/lib/jquery-3.7.1.min.js"></script>
    <!-- Bootstrap js -->
    <script src="assets/js/lib/bootstrap.bundle.min.js"></script>
    <!-- Iconify Font js -->
    <script src="assets/js/lib/iconify-icon.min.js"></script>

    <script>
        // Password toggle functionality
        document.querySelectorAll('.toggle-password').forEach(function(element) {
            element.addEventListener('click', function() {
                this.classList.toggle('ri-eye-off-line');
                const input = document.querySelector(this.getAttribute('data-toggle'));
                input.type = input.type === 'password' ? 'text' : 'password';
            });
        });
    </script>

</body>

</html>