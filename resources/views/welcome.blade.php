<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <x-google-analytics />

    <!-- Title -->
    <title>LaravelHelp - Expert Laravel Consulting & Audits</title>

    <!-- SEO Meta Tags -->
    <x-seo-meta />



    <!-- === CSS CDNs & StyleSheets === -->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.5.0/fonts/remixicon.css" rel="stylesheet"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/odometer.js/0.4.8/themes/odometer-theme-default.min.css"/>

    {{-- Pointing to assets from the public directory --}}
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}"/>
    <link rel="stylesheet" href="{{ asset('assets/css/swiper-bundle.min.css') }}"/>
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}"/>
    <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}"/>
</head>

<body>

<!-- ===== offcanvas Area Start ===== -->
<div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
    <div class="offcanvas-header">
        <div class="ofcanvus__logo">
            <img src="./assets/img/logo/logo2.png" alt="">
        </div>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>

    <div class="offcanvas-body flex-column d-flex justify-content-between">
        <div class="offcanvas__menu w-100">
            <div class="offcanvas__nav w-100 mb-5">
                <ul>
                    <li><a href="">Home</a></li>
                    <li><a href="">Problems</a></li>
                    <li><a href="">Benefits</a></li>
                    <li><a href="">About Me</a></li>
                    <li><a href="">Schedule</a></li>
                    <li><a href="">Contact Me</a></li>
                </ul>
            </div>
        </div>

        <div class="d-block w-100 offcanvas__bottom">
            {{-- Added modal trigger attributes --}}
            <button type="button"
                    class="btn btn-main w-100"
                    data-bs-toggle="modal"
                    data-bs-target="#modal-help-me-now">
                Help me NOW!
            </button>
        </div>
    </div>
</div>
<!-- ===== offcanvas Area End ===== -->


<!-- ===== Header Area Start ===== -->
<header class="header sticky-header">
    <div class="container">
        <div class="header__wrapper d-flex align-items-center justify-content-between">
            <!-- header-logo -->
            <div class="header__logo">
                <a href="#home">
                    {{-- Added inline style to constrain logo height --}}
                    <img src="{{ asset('assets/img/logo/logo2.png') }}" alt="logo" style="max-height: 40px; width: auto;"/>
                </a>
            </div>
            <!-- header-logo--end -->

            <!-- header-end -->
            <div class="header__end d-flex align-items-center justify-content-center">
                <!-- header__nav -->
                <div class="header__nav d-none d-xl-block">
                    <ul class="d-flex gap-4 mx-auto header__nav-menu">
                        <li><a class="p-3" href="#home">Home</a></li>
                        <li><a class="p-3" href="#problems">Problems</a></li>
                        <li><a class="p-3" href="#benefits">Benefits</a></li>
                        <li><a class="p-3" href="#about">About Me</a></li>
                        <li><a class="p-3" href="#schedule">Schedule</a></li>
                        <li><a class="p-3" href="#contact">FAQ</a></li>
                    </ul>
                </div>
                <!-- header__nav--end -->


            </div>
            <!-- header-end--end -->


            <!-- header-links -->
            <div class="header__links d-flex align-items-center">

                <button type="button"
                        class="btn btn-main btn-header d-none d-xl-inline-block fs-16"
                        data-bs-toggle="modal"
                        data-bs-target="#modal-help-me-now" {{-- Corrected target --}}
                >
                    Help me NOW!
                </button>

                <button type="button" class="header__menuBar d-xl-none" type="button" data-bs-toggle="offcanvas"
                        data-bs-target="#offcanvasExample" aria-controls="offcanvasExample">
                    <i class="ri-menu-2-line"></i>

                </button>

            </div>
            <!-- header-links--end -->
        </div>
    </div>
</header>
<!-- ===== Header Area End ===== -->


<!-- ====== Main Area Start ======= -->
<main>

    <!-- === Hero Section Start === -->
    <section id="home" class="section hero overflow-hidden">

        <div class="hero__ingradient hero__ingradient-1"></div>
        <div class="hero__ingradient hero__ingradient-2"></div>
        <div class="container position-relative z-1">
            <div class="row">
                <div class="col-lg-12">
                    <div class="hero__content text-center flex-column d-flex align-items-center">
                        <span class="hero__badge d-inline-flex align-items-center gap-2 text-primary fw-semibold rounded-pill px-3 py-2 mb-3"
                              style="background-color: rgba(220, 53, 69, 0.08); border: 1px solid rgba(220, 53, 69, 0.25); font-size: 0.95rem;">
                            <i class="ri-sparkling-2-line"></i> AI-Powered Laravel Development
                        </span>
                        <h1 class="fs-1 fw-bold pb-1 hero__title position-relative">
                            Is your Laravel app <span class="text-primary">slow,</span> <br
                                    class="d-none d-md-inline-block">
                            <span class="text-primary d-inline-block ms-0 ms-lg-5 ps-0 ps-lg-3">outdated</span> or
                            full of bugs?
                        </h1>

                        <p class="hero__desc fs-5 mt-3 mt-lg-4 mb-1 pb-1">
                            <span class="fw-semibold text-secondary">Laravel audits &amp; development</span> — specialized for payment platforms, payouts &amp; fintech integrations.
                        </p>

                        <p class="hero__desc fs-5 mb-2 mb-lg-3 pb-1">
                            Book a free Laravel code audit and get actionable insights in just 60 minutes.
                        </p>


                        <!-- Hero Form -->
                        <div class="hero__form-wrapper mt-4 ps-0 ms-0 mb-1 mb-lg-3">
                            <form action="" class="hero__form">
                                <div class="row g-3">
                                    <div class="col-lg-6">
                                        <input class="email px-4 py-3 bg-white" type="email" placeholder="Enter your email">
                                    </div>
                                    <div class="col-lg-6">
                                        {{-- Removed data-bs-toggle and data-bs-target, opens booking page --}}
                                        <button type="button"
                                                onclick="bookConsultation(); return false;"
                                                class="btn btn-main hero__form-btn"
                                                style="white-space: nowrap; min-width: 250px; width: 250px;">
                                            Schedule Free Consultation
                                        </button>
                                    </div>
                                </div>
                            </form>
                            <div class="d-flex align-items-center justify-content-center my-4 gap-3">
                                <div style="height: 1px; width: 60px; background-color: #6c757d;"></div>
                                <span class="text-secondary fs-6">or send me an email to</span>
                                <div style="height: 1px; width: 60px; background-color: #6c757d;"></div>
                            </div>
                            <div class="d-flex justify-content-center align-items-center gap-2 flex-wrap">
                                <span id="contact-email" class="fs-5 fw-semibold text-primary user-select-all">afpinedac@gmail.com</span>
                            </div>
                        </div>


                        <!-- Time Block -->
                        <div
                                class="hero__time-wrapper d-md-flex flex-wrap gap-4 justify-content-center align-items-center mt-3 mt-5">


                            <div class="time__block d-flex px-1 align-items-center gap-3">
                                    <span class="time__block-icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                             viewBox="0 0 24 24" fill="none">
                                            <path
                                                    d="M12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22Z"
                                                    stroke="#F8F9FA" stroke-width="2"/>
                                            <path d="M8 12L11 15L16 9" stroke="#F8F9FA" stroke-width="2"
                                                  stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                    </span>
                                <p class="text-secondary fs-16">
                                    60-minute free consultation
                                </p>
                            </div>

                            <div class="date__block d-flex px-1 align-items-center gap-3 mt-2 mt-sm-3 mt-md-0">
                                    <span class="time__block-icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                             viewBox="0 0 24 24" fill="none">
                                            <path
                                                    d="M12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22Z"
                                                    stroke="#F8F9FA" stroke-width="2"/>
                                            <path d="M12 6V12L16 14" stroke="#F8F9FA" stroke-width="2"
                                                  stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                    </span>

                                <p class="text-secondary fs-16">
                                    Actionable insights guaranteed
                                </p>
                            </div>

                            <div class="ai__block d-flex px-1 align-items-center gap-3 mt-2 mt-sm-3 mt-md-0">
                                    <span class="time__block-icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                             viewBox="0 0 24 24" fill="none">
                                            <path
                                                    d="M12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22Z"
                                                    stroke="#F8F9FA" stroke-width="2"/>
                                            <path d="M13 7L9.5 12.5H12L11 17L14.5 11.5H12L13 7Z" stroke="#F8F9FA"
                                                  stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                    </span>

                                <p class="text-secondary fs-16">
                                    AI-accelerated development
                                </p>
                            </div>
                        </div>


                        <!-- Hero Buttons -->
                        <div
                                class="hero__btn-wrapper d-flex gap-1 justify-content-center align-items-center flex-wrap">
                            {{-- Updated button to trigger Google Calendar booking page, kept original text --}}
                            <button type="button"
                                    onclick="bookConsultation(); return false;"
                                    class="btn btn-outline">
                                Hire My Services
                            </button>
                        </div>

                        <!-- Open to Work -->
                        <p class="hero__cv-note mt-4 mb-0 fs-6 text-secondary">
                            <i class="ri-briefcase-line text-primary"></i>
                            Looking for a lead for your team, or someone with the knowledge and experience to move projects forward?
                            <br class="d-none d-md-inline-block">
                            Open to full-time roles — senior Laravel developer, tech lead, or hands-on CTO.
                            <a href="{{ url('/cv.pdf') }}" target="_blank" rel="noopener" class="text-primary fw-semibold text-decoration-underline">Download my CV</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- === Hero Section End === -->


    <!-- ========= Fact Section Start ========== -->
    <section class="section achievement bg-primary">
        <h3
                class="section__subtitle fw-semibold mx-auto position-absolute d-flex align-items-center justify-content-center fs-4 text-primary bg-white animated-border">
            <div class="border-effect"></div>
            <svg xmlns="http://www.w3.org/2000/svg" width="35" height="37" viewBox="0 0 35 37" fill="none">
                <path
                        d="M34.2745 8.67189C34.2873 8.7197 34.2938 8.76901 34.2938 8.81859V16.5241C34.2938 16.7255 34.188 16.9114 34.0161 17.0115L27.6561 20.7353V28.1155C27.6561 28.2143 27.6306 28.3114 27.5821 28.3969C27.5337 28.4824 27.4639 28.5536 27.3799 28.6031L14.1033 36.3747C14.0729 36.3921 14.0398 36.4033 14.0066 36.4154C13.9942 36.4195 13.9825 36.4272 13.9694 36.4308C13.8766 36.4556 13.779 36.4556 13.6862 36.4308C13.6709 36.4267 13.6571 36.4181 13.6427 36.4126C13.6122 36.4012 13.5805 36.3915 13.5516 36.3747L0.2777 28.6029C0.19335 28.5537 0.123262 28.4827 0.0745061 28.3972C0.0257499 28.3116 5.028e-05 28.2144 0 28.1155V4.99892C0 4.94825 0.00696594 4.89908 0.0192903 4.8514C0.0234431 4.8352 0.0330882 4.82048 0.0387145 4.80427C0.0490295 4.77485 0.0588086 4.7446 0.0739461 4.71723C0.084261 4.69897 0.0993985 4.68426 0.111857 4.66737C0.127798 4.64489 0.142266 4.62174 0.160886 4.60199C0.176828 4.58592 0.197591 4.57393 0.215542 4.5599C0.235636 4.54301 0.253453 4.52475 0.276226 4.5114L6.91409 0.625668C6.99814 0.576484 7.09341 0.550598 7.19039 0.550598C7.28736 0.550598 7.38263 0.576484 7.46668 0.625668L14.1039 4.5114H14.1052C14.1273 4.52557 14.1461 4.54301 14.166 4.55921C14.184 4.57324 14.2041 4.58592 14.2199 4.60144C14.2393 4.62174 14.2531 4.64503 14.2696 4.66737C14.2814 4.68426 14.2973 4.69897 14.307 4.71723C14.3228 4.74529 14.3317 4.77485 14.3429 4.8044C14.3484 4.82048 14.358 4.8352 14.3622 4.85209C14.3749 4.8999 14.3814 4.94935 14.3816 4.99892V19.4371L19.9123 16.1988V8.81791C19.9123 8.76888 19.9192 8.71888 19.9317 8.67189C19.9365 8.65499 19.9455 8.64029 19.951 8.62421C19.9621 8.59466 19.9717 8.56427 19.9869 8.53704C19.9972 8.51878 20.0123 8.50407 20.0243 8.48718C20.0407 8.4647 20.0545 8.44154 20.0738 8.42179C20.0899 8.40572 20.1099 8.39373 20.1278 8.3797C20.1486 8.36281 20.1665 8.34456 20.1886 8.33121L26.8272 4.44547C26.9112 4.39622 27.0065 4.3703 27.1035 4.3703C27.2004 4.3703 27.2957 4.39622 27.3797 4.44547L34.0169 8.33121C34.0404 8.34524 34.0583 8.36281 34.0791 8.37888C34.0962 8.39305 34.1163 8.40572 34.1323 8.42111C34.1516 8.44154 34.1654 8.4647 34.1818 8.48718C34.1944 8.50407 34.2096 8.51878 34.2194 8.53704C34.2352 8.56427 34.2441 8.59466 34.2551 8.62421C34.2614 8.64029 34.2704 8.65499 34.2745 8.67189ZM33.1875 16.199V9.79133L30.8647 11.1509L27.656 13.0296V19.4372L33.1875 16.199ZM26.5503 27.7904V21.3782L23.3939 23.2113L14.3809 28.4421V34.9143L26.5503 27.7904ZM1.10638 5.97152V27.7904L13.2744 34.9137V28.4428L6.91771 24.7845L6.9157 24.7831L6.91302 24.7817C6.89159 24.7691 6.8735 24.7509 6.85354 24.7355C6.83613 24.7213 6.81617 24.7101 6.80103 24.6945L6.79969 24.6925C6.78174 24.6749 6.76928 24.6532 6.75414 24.6335C6.74021 24.6145 6.72374 24.5984 6.71262 24.5788L6.71195 24.5766C6.69949 24.5556 6.69185 24.5303 6.68288 24.5065C6.6739 24.4853 6.66225 24.4656 6.65662 24.4432C6.64979 24.4166 6.64845 24.3877 6.64564 24.3603C6.64296 24.3394 6.63733 24.3182 6.63733 24.2971V9.20994L3.42912 7.33042L1.10638 5.97152ZM7.19112 1.76199L1.66097 4.99892L7.18978 8.23572L12.7191 4.99811L7.18978 1.76199H7.19112ZM10.067 21.9627L13.2751 20.0848V5.97152L10.9526 7.33124L7.74358 9.20981V23.323L10.067 21.9627ZM27.1034 5.5818L21.574 8.81859L27.1034 12.0555L32.6321 8.81791L27.1034 5.5818ZM26.5501 13.0296L23.3414 11.1509L21.0188 9.79133V16.199L24.2269 18.077L26.5503 19.4372L26.5501 13.0296ZM13.827 27.4695L21.9373 22.7613L25.9915 20.4085L20.4662 17.1738L14.1045 20.8979L8.30648 24.2922L13.827 27.4695Z"
                    fill="#DC3545"/>
            </svg>

            <span>
                    My Achievements
                </span>
        </h3>

        <div class="container">
            <div
                    class="achivement__wrapper mx-auto d-flex justify-content-center align-items-center flex-wrap gap-4">

                {{-- Ensure full width, space between, and NO wrapping --}}
                <div
                        class="achivement__counts w-100 d-flex justify-content-between align-items-center row-gap-3 odometer-trigger">

                    {{-- Removed px-md-5 and mb-sm-0 --}}
                    <div class="achivement__count-item text-center mb-3">
                        <h2 class="fs-2 fw-bold text-white">
                            <span class="odometer" data-target="15">0</span> +
                        </h2>
                        <p class="text-white fs-20 fw-medium">Years Experience</p>
                    </div>

                    {{-- Removed px-md-5 and mb-sm-0 --}}
                    <div class="achivement__count-item text-center mb-3">
                        <h2 class="fs-2 fw-bold text-white">
                            <span class="odometer" data-target="45">0</span> +
                        </h2>
                        <p class="text-white fs-20 fw-medium">Projects Built</p>
                    </div>

                     {{-- Removed px-md-5 and mb-sm-0 --}}
                    <div class="achivement__count-item text-center mb-3">
                        <h2 class="fs-2 fw-bold text-white">
                            <span class="odometer" data-target="2.5">0</span> k
                        </h2>
                        <p class="text-white fs-20 fw-medium">Github Stars</p>
                    </div>
                </div>

                {{-- Removed Case Studies Button --}}
                {{-- <button class="btn bg-white arrow__btn-anim"><span>Our Case studies</span> <span
                            class="overflow-hidden"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="16"
                                                         viewBox="0 0 18 16" fill="none">
                                <path
                                        d="M9.06581 0L7.65581 1.41L13.2358 7H1.06581V9H13.2358L7.65581 14.59L9.06581 16L17.0658 8L9.06581 0Z"
                                        fill="#212529"/>
                            </svg></span></button> --}}


            </div>
        </div>
    </section>
    <!-- ========= Fact Section End ========== -->


    <!-- ======== Challenges Section Start ========= -->
    <section id="problems" class="section challenges overflow-hidden">
        <div class="container">
            <h3
                    class="section__subtitle section__subtitle-2 fw-semibold mx-auto position-relative d-flex align-items-center justify-content-center  mx-auto fs-4 text-primary bg-white animated-border">


                <div class="border-effect"></div>


                <svg xmlns="http://www.w3.org/2000/svg" width="35" height="37" viewBox="0 0 35 37" fill="none">
                    <path
                            d="M34.2745 8.67189C34.2873 8.7197 34.2938 8.76901 34.2938 8.81859V16.5241C34.2938 16.7255 34.188 16.9114 34.0161 17.0115L27.6561 20.7353V28.1155C27.6561 28.2143 27.6306 28.3114 27.5821 28.3969C27.5337 28.4824 27.4639 28.5536 27.3799 28.6031L14.1033 36.3747C14.0729 36.3921 14.0398 36.4033 14.0066 36.4154C13.9942 36.4195 13.9825 36.4272 13.9694 36.4308C13.8766 36.4556 13.779 36.4556 13.6862 36.4308C13.6709 36.4267 13.6571 36.4181 13.6427 36.4126C13.6122 36.4012 13.5805 36.3915 13.5516 36.3747L0.2777 28.6029C0.19335 28.5537 0.123262 28.4827 0.0745061 28.3972C0.0257499 28.3116 5.028e-05 28.2144 0 28.1155V4.99892C0 4.94825 0.00696594 4.89908 0.0192903 4.8514C0.0234431 4.8352 0.0330882 4.82048 0.0387145 4.80427C0.0490295 4.77485 0.0588086 4.7446 0.0739461 4.71723C0.084261 4.69897 0.0993985 4.68426 0.111857 4.66737C0.127798 4.64489 0.142266 4.62174 0.160886 4.60199C0.176828 4.58592 0.197591 4.57393 0.215542 4.5599C0.235636 4.54301 0.253453 4.52475 0.276226 4.5114L6.91409 0.625668C6.99814 0.576484 7.09341 0.550598 7.19039 0.550598C7.28736 0.550598 7.38263 0.576484 7.46668 0.625668L14.1039 4.5114H14.1052C14.1273 4.52557 14.1461 4.54301 14.166 4.55921C14.184 4.57324 14.2041 4.58592 14.2199 4.60144C14.2393 4.62174 14.2531 4.64503 14.2696 4.66737C14.2814 4.68426 14.2973 4.69897 14.307 4.71723C14.3228 4.74529 14.3317 4.77485 14.3429 4.8044C14.3484 4.82048 14.358 4.8352 14.3622 4.85209C14.3749 4.8999 14.3814 4.94935 14.3816 4.99892V19.4371L19.9123 16.1988V8.81791C19.9123 8.76888 19.9192 8.71888 19.9317 8.67189C19.9365 8.65499 19.9455 8.64029 19.951 8.62421C19.9621 8.59466 19.9717 8.56427 19.9869 8.53704C19.9972 8.51878 20.0123 8.50407 20.0243 8.48718C20.0407 8.4647 20.0545 8.44154 20.0738 8.42179C20.0899 8.40572 20.1099 8.39373 20.1278 8.3797C20.1486 8.36281 20.1665 8.34456 20.1886 8.33121L26.8272 4.44547C26.9112 4.39622 27.0065 4.3703 27.1035 4.3703C27.2004 4.3703 27.2957 4.39622 27.3797 4.44547L34.0169 8.33121C34.0404 8.34524 34.0583 8.36281 34.0791 8.37888C34.0962 8.39305 34.1163 8.40572 34.1323 8.42111C34.1516 8.44154 34.1654 8.4647 34.1818 8.48718C34.1944 8.50407 34.2096 8.51878 34.2194 8.53704C34.2352 8.56427 34.2441 8.59466 34.2551 8.62421C34.2614 8.64029 34.2704 8.65499 34.2745 8.67189ZM33.1875 16.199V9.79133L30.8647 11.1509L27.656 13.0296V19.4372L33.1875 16.199ZM26.5503 27.7904V21.3782L23.3939 23.2113L14.3809 28.4421V34.9143L26.5503 27.7904ZM1.10638 5.97152V27.7904L13.2744 34.9137V28.4428L6.91771 24.7845L6.9157 24.7831L6.91302 24.7817C6.89159 24.7691 6.8735 24.7509 6.85354 24.7355C6.83613 24.7213 6.81617 24.7101 6.80103 24.6945L6.79969 24.6925C6.78174 24.6749 6.76928 24.6532 6.75414 24.6335C6.74021 24.6145 6.72374 24.5984 6.71262 24.5788L6.71195 24.5766C6.69949 24.5556 6.69185 24.5303 6.68288 24.5065C6.6739 24.4853 6.66225 24.4656 6.65662 24.4432C6.64979 24.4166 6.64845 24.3877 6.64564 24.3603C6.64296 24.3394 6.63733 24.3182 6.63733 24.2971V9.20994L3.42912 7.33042L1.10638 5.97152ZM7.19112 1.76199L1.66097 4.99892L7.18978 8.23572L12.7191 4.99811L7.18978 1.76199H7.19112ZM10.067 21.9627L13.2751 20.0848V5.97152L10.9526 7.33124L7.74358 9.20981V23.323L10.067 21.9627ZM27.1034 5.5818L21.574 8.81859L27.1034 12.0555L32.6321 8.81791L27.1034 5.5818ZM26.5501 13.0296L23.3414 11.1509L21.0188 9.79133V16.199L24.2269 18.077L26.5503 19.4372L26.5501 13.0296ZM13.827 27.4695L21.9373 22.7613L25.9915 20.4085L20.4662 17.1738L14.1045 20.8979L8.30648 24.2922L13.827 27.4695Z"
                            fill="#DC3545"/>
                </svg>

                <span>
                        Your Challenges
                    </span>


            </h3>


            <h2 class="section__title fs-3 fw-bold text-hea text-center mt-3 mt-lg-5 pt-3 bottom-to-top-anim">
                Are you struggling with any of these?
            </h2>


            <!-- Challenges -->
            <div class="challenges__items mt-3 mt-lg-5 pt-3">

                <div class="challenges__item d-flex align-items-center radius-8 stacky__card">

                    <div class="challenges__item-img">
                        <img src="./assets/img/icons-img/problem-icon-1.png" alt="image" class="img-fluid">
                    </div>

                    <div>
                        <h4 class="fs-5 fw-bold text-secondary challenges__item-title">
                            Upgrading PHP / Laravel
                        </h4>
                        <p class="fs-16">
                            Stuck on an old version? I can help with safe, tested upgrades.
                        </p>
                    </div>

                    <div class="challenges__item-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="8" height="6" viewBox="0 0 8 6" fill="none">
                            <path d="M1 3L3 5L6.33333 1" stroke="white" stroke-width="2" stroke-linecap="round"
                                  stroke-linejoin="round"/>
                        </svg>
                    </div>

                </div>


                <div class="challenges__item d-flex align-items-center radius-8 stacky__card">

                    <div class="challenges__item-img">
                        <img src="./assets/img/icons-img/problem-icon-2.png" alt="image" class="img-fluid">
                    </div>

                    <div>
                        <h4 class="fs-5 fw-bold text-secondary challenges__item-title">
                            No automated tests
                        </h4>
                        <p class="fs-16">
                            Ship with confidence using proper test coverage.
                        </p>
                    </div>

                    <div class="challenges__item-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="8" height="6" viewBox="0 0 8 6" fill="none">
                            <path d="M1 3L3 5L6.33333 1" stroke="white" stroke-width="2" stroke-linecap="round"
                                  stroke-linejoin="round"/>
                        </svg>
                    </div>

                </div>


                <div class="challenges__item d-flex align-items-center radius-8 stacky__card">

                    <div class="challenges__item-img">
                        <img src="./assets/img/icons-img/problem-icon-3.png" alt="image" class="img-fluid">
                    </div>

                    <div>
                        <h4 class="fs-5 fw-bold text-secondary challenges__item-title">
                            Recurring bugs
                        </h4>
                        <p class="fs-16">
                            Eliminate those frustrating issues that keep coming back.
                        </p>
                    </div>

                    <div class="challenges__item-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="8" height="6" viewBox="0 0 8 6" fill="none">
                            <path d="M1 3L3 5L6.33333 1" stroke="white" stroke-width="2" stroke-linecap="round"
                                  stroke-linejoin="round"/>
                        </svg>
                    </div>

                </div>


                <div class="challenges__item d-flex align-items-center radius-8 stacky__card">

                    <div class="challenges__item-img">
                        <img src="./assets/img/icons-img/problem-icon-4.png" alt="image" class="img-fluid">
                    </div>

                    <div>
                        <h4 class="fs-5 fw-bold text-secondary challenges__item-title">
                            Security issues
                        </h4>
                        <p class="fs-16">
                            Protect your application and user data with security best practices.
                        </p>
                    </div>

                    <div class="challenges__item-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="8" height="6" viewBox="0 0 8 6" fill="none">
                            <path d="M1 3L3 5L6.33333 1" stroke="white" stroke-width="2" stroke-linecap="round"
                                  stroke-linejoin="round"/>
                        </svg>
                    </div>

                </div>


                <div class="challenges__item d-flex align-items-center radius-8 stacky__card">

                    <div class="challenges__item-img">
                        <img src="./assets/img/icons-img/problem-icon-5.png" alt="image" class="img-fluid">
                    </div>

                    <div>
                        <h4 class="fs-5 fw-bold text-secondary challenges__item-title">
                            Slow performance
                        </h4>
                        <p class="fs-16">
                            Speed up your app with performance optimization.
                        </p>
                    </div>

                    <div class="challenges__item-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="8" height="6" viewBox="0 0 8 6" fill="none">
                            <path d="M1 3L3 5L6.33333 1" stroke="white" stroke-width="2" stroke-linecap="round"
                                  stroke-linejoin="round"/>
                        </svg>
                    </div>

                </div>


                <div class="challenges__item d-flex align-items-center radius-8 stacky__card">

                    <div class="challenges__item-img">
                        <img src="./assets/img/icons-img/problem-icon-6.png" alt="image" class="img-fluid">
                    </div>

                    <div>
                        <h4 class="fs-5 fw-bold text-secondary challenges__item-title">
                            Messy architecture
                        </h4>
                        <p class="fs-16">
                            Implement clean, maintainable code structure.
                        </p>
                    </div>

                    <div class="challenges__item-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="8" height="6" viewBox="0 0 8 6" fill="none">
                            <path d="M1 3L3 5L6.33333 1" stroke="white" stroke-width="2" stroke-linecap="round"
                                  stroke-linejoin="round"/>
                        </svg>
                    </div>

                </div>


                <div class="challenges__item d-flex align-items-center radius-8 stacky__card end-card">

                    <div class="challenges__item-img">
                        <img src="./assets/img/icons-img/problem-icon-7.png" alt="image" class="img-fluid">
                    </div>

                    <div>
                        <h4 class="fs-5 fw-bold text-secondary challenges__item-title">
                            Outdated dependencies
                        </h4>
                        <p class="fs-16">
                            Update safely with compatibility checks.
                        </p>
                    </div>

                    <div class="challenges__item-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="8" height="6" viewBox="0 0 8 6" fill="none">
                            <path d="M1 3L3 5L6.33333 1" stroke="white" stroke-width="2" stroke-linecap="round"
                                  stroke-linejoin="round"/>
                        </svg>
                    </div>

                </div>


                <div class="challenges__item d-flex align-items-center radius-8 stacky__card">

                    <div class="challenges__item-img">
                        <img src="./assets/img/icons-img/problem-icon-1.png" alt="image" class="img-fluid">
                    </div>

                    <div>
                        <h4 class="fs-5 fw-bold text-secondary challenges__item-title">
                            Payment integrations breaking
                        </h4>
                        <p class="fs-16">
                            Webhooks, transfers or balances hard to reconcile? I stabilize payment &amp; bank integrations.
                        </p>
                    </div>

                    <div class="challenges__item-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="8" height="6" viewBox="0 0 8 6" fill="none">
                            <path d="M1 3L3 5L6.33333 1" stroke="white" stroke-width="2" stroke-linecap="round"
                                  stroke-linejoin="round"/>
                        </svg>
                    </div>

                </div>


                <div class="challenges__item d-flex align-items-center radius-8 stacky__card">

                    <div class="challenges__item-img">
                        <img src="./assets/img/icons-img/problem-icon-2.png" alt="image" class="img-fluid">
                    </div>

                    <div>
                        <h4 class="fs-5 fw-bold text-secondary challenges__item-title">
                            KYC / compliance &amp; payment security
                        </h4>
                        <p class="fs-16">
                            Struggling with KYB/KYC onboarding, reconciliation or securing money-movement flows? I've shipped it in production.
                        </p>
                    </div>

                    <div class="challenges__item-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="8" height="6" viewBox="0 0 8 6" fill="none">
                            <path d="M1 3L3 5L6.33333 1" stroke="white" stroke-width="2" stroke-linecap="round"
                                  stroke-linejoin="round"/>
                        </svg>
                    </div>

                </div>


            </div>


            <div
                    class="btn-group d-flex justify-content-center align-items-center gap-3 mt-4 mt-lg-5 pt-2 pt-lg-3 ">
                {{-- Changed button to trigger Google Calendar booking page --}}
                <button type="button"
                        onclick="bookConsultation(); return false;"
                        class="btn btn-main mx-auto">
                    Fix These Issues Now
                </button>
            </div>
        </div>
    </section>
    <!-- ======== Challenges Section End ========= -->


    <!-- ======= Offer Section Start ========== -->
    <section id="benefits" class="section offer-section overflow-hidden">
        <div class="container">
            <h3
                    class="section__subtitle section__subtitle-2 fw-semibold mx-auto position-relative d-flex align-items-center justify-content-center  mx-auto fs-4 text-primary bg-white animated-border">

                <div class="border-effect"></div>

                <svg xmlns="http://www.w3.org/2000/svg" width="35" height="37" viewBox="0 0 35 37" fill="none">
                    <path
                            d="M34.2745 8.67189C34.2873 8.7197 34.2938 8.76901 34.2938 8.81859V16.5241C34.2938 16.7255 34.188 16.9114 34.0161 17.0115L27.6561 20.7353V28.1155C27.6561 28.2143 27.6306 28.3114 27.5821 28.3969C27.5337 28.4824 27.4639 28.5536 27.3799 28.6031L14.1033 36.3747C14.0729 36.3921 14.0398 36.4033 14.0066 36.4154C13.9942 36.4195 13.9825 36.4272 13.9694 36.4308C13.8766 36.4556 13.779 36.4556 13.6862 36.4308C13.6709 36.4267 13.6571 36.4181 13.6427 36.4126C13.6122 36.4012 13.5805 36.3915 13.5516 36.3747L0.2777 28.6029C0.19335 28.5537 0.123262 28.4827 0.0745061 28.3972C0.0257499 28.3116 5.028e-05 28.2144 0 28.1155V4.99892C0 4.94825 0.00696594 4.89908 0.0192903 4.8514C0.0234431 4.8352 0.0330882 4.82048 0.0387145 4.80427C0.0490295 4.77485 0.0588086 4.7446 0.0739461 4.71723C0.084261 4.69897 0.0993985 4.68426 0.111857 4.66737C0.127798 4.64489 0.142266 4.62174 0.160886 4.60199C0.176828 4.58592 0.197591 4.57393 0.215542 4.5599C0.235636 4.54301 0.253453 4.52475 0.276226 4.5114L6.91409 0.625668C6.99814 0.576484 7.09341 0.550598 7.19039 0.550598C7.28736 0.550598 7.38263 0.576484 7.46668 0.625668L14.1039 4.5114H14.1052C14.1273 4.52557 14.1461 4.54301 14.166 4.55921C14.184 4.57324 14.2041 4.58592 14.2199 4.60144C14.2393 4.62174 14.2531 4.64503 14.2696 4.66737C14.2814 4.68426 14.2973 4.69897 14.307 4.71723C14.3228 4.74529 14.3317 4.77485 14.3429 4.8044C14.3484 4.82048 14.358 4.8352 14.3622 4.85209C14.3749 4.8999 14.3814 4.94935 14.3816 4.99892V19.4371L19.9123 16.1988V8.81791C19.9123 8.76888 19.9192 8.71888 19.9317 8.67189C19.9365 8.65499 19.9455 8.64029 19.951 8.62421C19.9621 8.59466 19.9717 8.56427 19.9869 8.53704C19.9972 8.51878 20.0123 8.50407 20.0243 8.48718C20.0407 8.4647 20.0545 8.44154 20.0738 8.42179C20.0899 8.40572 20.1099 8.39373 20.1278 8.3797C20.1486 8.36281 20.1665 8.34456 20.1886 8.33121L26.8272 4.44547C26.9112 4.39622 27.0065 4.3703 27.1035 4.3703C27.2004 4.3703 27.2957 4.39622 27.3797 4.44547L34.0169 8.33121C34.0404 8.34524 34.0583 8.36281 34.0791 8.37888C34.0962 8.39305 34.1163 8.40572 34.1323 8.42111C34.1516 8.44154 34.1654 8.4647 34.1818 8.48718C34.1944 8.50407 34.2096 8.51878 34.2194 8.53704C34.2352 8.56427 34.2441 8.59466 34.2551 8.62421C34.2614 8.64029 34.2704 8.65499 34.2745 8.67189ZM33.1875 16.199V9.79133L30.8647 11.1509L27.656 13.0296V19.4372L33.1875 16.199ZM26.5503 27.7904V21.3782L23.3939 23.2113L14.3809 28.4421V34.9143L26.5503 27.7904ZM1.10638 5.97152V27.7904L13.2744 34.9137V28.4428L6.91771 24.7845L6.9157 24.7831L6.91302 24.7817C6.89159 24.7691 6.8735 24.7509 6.85354 24.7355C6.83613 24.7213 6.81617 24.7101 6.80103 24.6945L6.79969 24.6925C6.78174 24.6749 6.76928 24.6532 6.75414 24.6335C6.74021 24.6145 6.72374 24.5984 6.71262 24.5788L6.71195 24.5766C6.69949 24.5556 6.69185 24.5303 6.68288 24.5065C6.6739 24.4853 6.66225 24.4656 6.65662 24.4432C6.64979 24.4166 6.64845 24.3877 6.64564 24.3603C6.64296 24.3394 6.63733 24.3182 6.63733 24.2971V9.20994L3.42912 7.33042L1.10638 5.97152ZM7.19112 1.76199L1.66097 4.99892L7.18978 8.23572L12.7191 4.99811L7.18978 1.76199H7.19112ZM10.067 21.9627L13.2751 20.0848V5.97152L10.9526 7.33124L7.74358 9.20981V23.323L10.067 21.9627ZM27.1034 5.5818L21.574 8.81859L27.1034 12.0555L32.6321 8.81791L27.1034 5.5818ZM26.5501 13.0296L23.3414 11.1509L21.0188 9.79133V16.199L24.2269 18.077L26.5503 19.4372L26.5501 13.0296ZM13.827 27.4695L21.9373 22.7613L25.9915 20.4085L20.4662 17.1738L14.1045 20.8979L8.30648 24.2922L13.827 27.4695Z"
                            fill="#DC3545"/>
                </svg>

                <span>
                        What I Offer
                    </span>
            </h3>


            <h2
                    class="section__title fs-3 fw-bold text-hea text-center mt-3 mt-lg-5 pt-1 pt-lg-2 bottom-to-top-anim">
                What You Get With a Free Audit
            </h2>

            <p class="fs-20 text-center mt-2 mt-lg-3">Schedule your free 60-minute consultation and receive expert
                insights tailored <br class="d-none d-md-flex"> to your application.</p>


            <div class="offers__wrapper mt-3 mt-lg-5 pt-lg-2">
                <div class="row g-3 g-lg-4">
                    <div class="col-lg-12">

                        <div class="offer__item bottom-to-top-anim align-items-center radius-8 d-none d-lg-flex">

                            <div class="offer__item-img flex-shrink-0">
                                <img src="./assets/img/icons-img/offer-icon-1.png" alt="image" class="img-fluid">
                            </div>

                            <div>
                                <h4 class="fs-5 fw-bold text-secondary offer__item-title mb-2 pb-2">
                                    Personalized Code Review
                                </h4>
                                <p class="fs-16 text-secondary">
                                    Get a detailed analysis of your specific codebase and architecture
                                </p>
                            </div>

                            <div class="offer__item-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="8" height="6" viewBox="0 0 8 6"
                                     fill="none">
                                    <path d="M1 3L3 5L6.33333 1" stroke="white" stroke-width="2"
                                          stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </div>

                        </div>


                        <div class="offer__item offer__item-padding d-lg-none  radius-8">


                            <div class="d-flex align-items-center gap-3">

                                <div class="offer__item-img">
                                    <img src="./assets/img/icons-img/offer-icon-1.png" alt="image"
                                         class="img-fluid">
                                </div>

                                <h4 class="fs-5 fw-bold text-secondary offer__item-title mb-2">
                                    Personalized Code Review
                                </h4>

                            </div>

                            <p class="fs-16 ms-3 pl-2 text-secondary">
                                Get a detailed analysis of your specific codebase and architecture
                            </p>

                            <div class="offer__item-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="8" height="6" viewBox="0 0 8 6"
                                     fill="none">
                                    <path d="M1 3L3 5L6.33333 1" stroke="white" stroke-width="2"
                                          stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </div>

                        </div>


                    </div>


                    <div class="col-lg-6">
                        <div class="offer__item offer__item-padding  radius-8 left-to-right-anim">


                            <div class="d-flex align-items-center gap-3">

                                <div class="offer__item-img">
                                    <img src="./assets/img/icons-img/offer-icon-2.png" alt="image"
                                         class="img-fluid">
                                </div>

                                <h4 class="fs-5 fw-bold text-secondary offer__item-title mb-2">
                                    Performance Insights
                                </h4>

                            </div>

                            <p class="fs-16 ms-3 pl-2 text-secondary">
                                Discover bottlenecks and optimization opportunities in<br
                                        class="d-none d-lg-inline-block"> your system
                            </p>

                            <div class="offer__item-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="8" height="6" viewBox="0 0 8 6"
                                     fill="none">
                                    <path d="M1 3L3 5L6.33333 1" stroke="white" stroke-width="2"
                                          stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </div>

                        </div>
                    </div>


                    <div class="col-lg-6">
                        <div class="offer__item right-to-left-anim  radius-8">


                            <div class="d-flex gap-3 align-items-center">

                                <div class="offer__item-img">
                                    <img src="./assets/img/icons-img/offer-icon-3.png" alt="image"
                                         class="img-fluid">
                                </div>

                                <h4 class="fs-5 fw-bold text-secondary offer__item-title mb-2">
                                    No Commitment
                                </h4>

                            </div>

                            <p class="fs-16 ms-3 pl-2 text-secondary mt-1">
                                Zero obligation and no spam - just actionable insights
                            </p>

                            <div class="offer__item-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="8" height="6" viewBox="0 0 8 6"
                                     fill="none">
                                    <path d="M1 3L3 5L6.33333 1" stroke="white" stroke-width="2"
                                          stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </div>

                        </div>
                    </div>


                    <div class="col-lg-6">
                        <div class="offer__item  left-to-right-anim radius-8">


                            <div class="d-flex gap-3 align-items-center">

                                <div class="offer__item-img">
                                    <img src="./assets/img/icons-img/offer-icon-4.png" alt="image"
                                         class="img-fluid">
                                </div>

                                <h4 class="fs-5 fw-bold text-secondary offer__item-title mb-2">
                                    15+ Years Experience
                                </h4>

                            </div>

                            <p class="fs-16 ms-3 pl-2 text-secondary mt-1">
                                Benefit from over a decade of Laravel expertise
                            </p>

                            <div class="offer__item-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="8" height="6" viewBox="0 0 8 6"
                                     fill="none">
                                    <path d="M1 3L3 5L6.33333 1" stroke="white" stroke-width="2"
                                          stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </div>

                        </div>
                    </div>


                    <div class="col-lg-6">
                        <div class="offer__item right-to-left-anim radius-8">


                            <div class="d-flex gap-3 align-items-center">

                                <div class="offer__item-img">
                                    <img src="./assets/img/icons-img/offer-icon-5.png" alt="image"
                                         class="img-fluid">
                                </div>

                                <h4 class="fs-5 fw-bold text-secondary offer__item-title mb-2">
                                    Flexible Delivery
                                </h4>

                            </div>

                            <p class="fs-16 ms-3 pl-2 text-secondary mt-1">
                                Choose between a video call or detailed written feedback
                            </p>

                            <div class="offer__item-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="8" height="6" viewBox="0 0 8 6"
                                     fill="none">
                                    <path d="M1 3L3 5L6.33333 1" stroke="white" stroke-width="2"
                                          stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </div>

                        </div>
                    </div>


                </div>
            </div>


            <div class="btn-group d-flex justify-content-center align-items-center gap-3 mt-4 mt-lg-5 pt-3 pt-lg-3">
                {{-- Changed button to trigger Google Calendar booking page --}}
                <button type="button"
                        onclick="bookConsultation(); return false;"
                        class="btn btn-main mx-auto">
                    Book Your Free Audit
                </button>
            </div>


        </div>
    </section>
    <!-- ======= Offer Section End ========== -->


    <!-- ========= Why Choose Us Section Start ========== -->
    <section id="about" class="section choose-us overflow-hidden">
        <div class="container">
            <h3
                    class="section__subtitle section__subtitle-2 fw-semibold mx-auto position-relative d-flex align-items-center justify-content-center  mx-auto fs-4 text-primary bg-white animated-border">

                <div class="border-effect"></div>

                <svg xmlns="http://www.w3.org/2000/svg" width="35" height="37" viewBox="0 0 35 37" fill="none">
                    <path
                            d="M34.2745 8.67189C34.2873 8.7197 34.2938 8.76901 34.2938 8.81859V16.5241C34.2938 16.7255 34.188 16.9114 34.0161 17.0115L27.6561 20.7353V28.1155C27.6561 28.2143 27.6306 28.3114 27.5821 28.3969C27.5337 28.4824 27.4639 28.5536 27.3799 28.6031L14.1033 36.3747C14.0729 36.3921 14.0398 36.4033 14.0066 36.4154C13.9942 36.4195 13.9825 36.4272 13.9694 36.4308C13.8766 36.4556 13.779 36.4556 13.6862 36.4308C13.6709 36.4267 13.6571 36.4181 13.6427 36.4126C13.6122 36.4012 13.5805 36.3915 13.5516 36.3747L0.2777 28.6029C0.19335 28.5537 0.123262 28.4827 0.0745061 28.3972C0.0257499 28.3116 5.028e-05 28.2144 0 28.1155V4.99892C0 4.94825 0.00696594 4.89908 0.0192903 4.8514C0.0234431 4.8352 0.0330882 4.82048 0.0387145 4.80427C0.0490295 4.77485 0.0588086 4.7446 0.0739461 4.71723C0.084261 4.69897 0.0993985 4.68426 0.111857 4.66737C0.127798 4.64489 0.142266 4.62174 0.160886 4.60199C0.176828 4.58592 0.197591 4.57393 0.215542 4.5599C0.235636 4.54301 0.253453 4.52475 0.276226 4.5114L6.91409 0.625668C6.99814 0.576484 7.09341 0.550598 7.19039 0.550598C7.28736 0.550598 7.38263 0.576484 7.46668 0.625668L14.1039 4.5114H14.1052C14.1273 4.52557 14.1461 4.54301 14.166 4.55921C14.184 4.57324 14.2041 4.58592 14.2199 4.60144C14.2393 4.62174 14.2531 4.64503 14.2696 4.66737C14.2814 4.68426 14.2973 4.69897 14.307 4.71723C14.3228 4.74529 14.3317 4.77485 14.3429 4.8044C14.3484 4.82048 14.358 4.8352 14.3622 4.85209C14.3749 4.8999 14.3814 4.94935 14.3816 4.99892V19.4371L19.9123 16.1988V8.81791C19.9123 8.76888 19.9192 8.71888 19.9317 8.67189C19.9365 8.65499 19.9455 8.64029 19.951 8.62421C19.9621 8.59466 19.9717 8.56427 19.9869 8.53704C19.9972 8.51878 20.0123 8.50407 20.0243 8.48718C20.0407 8.4647 20.0545 8.44154 20.0738 8.42179C20.0899 8.40572 20.1099 8.39373 20.1278 8.3797C20.1486 8.36281 20.1665 8.34456 20.1886 8.33121L26.8272 4.44547C26.9112 4.39622 27.0065 4.3703 27.1035 4.3703C27.2004 4.3703 27.2957 4.39622 27.3797 4.44547L34.0169 8.33121C34.0404 8.34524 34.0583 8.36281 34.0791 8.37888C34.0962 8.39305 34.1163 8.40572 34.1323 8.42111C34.1516 8.44154 34.1654 8.4647 34.1818 8.48718C34.1944 8.50407 34.2096 8.51878 34.2194 8.53704C34.2352 8.56427 34.2441 8.59466 34.2551 8.62421C34.2614 8.64029 34.2704 8.65499 34.2745 8.67189ZM33.1875 16.199V9.79133L30.8647 11.1509L27.656 13.0296V19.4372L33.1875 16.199ZM26.5503 27.7904V21.3782L23.3939 23.2113L14.3809 28.4421V34.9143L26.5503 27.7904ZM1.10638 5.97152V27.7904L13.2744 34.9137V28.4428L6.91771 24.7845L6.9157 24.7831L6.91302 24.7817C6.89159 24.7691 6.8735 24.7509 6.85354 24.7355C6.83613 24.7213 6.81617 24.7101 6.80103 24.6945L6.79969 24.6925C6.78174 24.6749 6.76928 24.6532 6.75414 24.6335C6.74021 24.6145 6.72374 24.5984 6.71262 24.5788L6.71195 24.5766C6.69949 24.5556 6.69185 24.5303 6.68288 24.5065C6.6739 24.4853 6.66225 24.4656 6.65662 24.4432C6.64979 24.4166 6.64845 24.3877 6.64564 24.3603C6.64296 24.3394 6.63733 24.3182 6.63733 24.2971V9.20994L3.42912 7.33042L1.10638 5.97152ZM7.19112 1.76199L1.66097 4.99892L7.18978 8.23572L12.7191 4.99811L7.18978 1.76199H7.19112ZM10.067 21.9627L13.2751 20.0848V5.97152L10.9526 7.33124L7.74358 9.20981V23.323L10.067 21.9627ZM27.1034 5.5818L21.574 8.81859L27.1034 12.0555L32.6321 8.81791L27.1034 5.5818ZM26.5501 13.0296L23.3414 11.1509L21.0188 9.79133V16.199L24.2269 18.077L26.5503 19.4372L26.5501 13.0296ZM13.827 27.4695L21.9373 22.7613L25.9915 20.4085L20.4662 17.1738L14.1045 20.8979L8.30648 24.2922L13.827 27.4695Z"
                            fill="#DC3545"/>
                </svg>

                <span>
                        Why Choose Me?
                    </span>
            </h3>


            <div class="row choose__content gx-0 gy-5 align-items-center">
                <div class="col-lg-3 ">
                    <div class="left__part text-center text-lg-start left-to-right-anim">
                        <div class="img pb-1">
                            <img class="img-fluid radius-8 choose__us-img" src="./assets/img/me.png" alt="">
                        </div>


                        <div
                                class="developer border-card radius-16 shadow-1 py-4 px-2  d-flex gap-3 align-items-center mt-4">
                            <div class="">
                                <img class="developer-img img-fluid" src="./assets/img/me.png" alt="img">
                            </div>

                            <div class="developer__details">
                                <p class="mb-1" style="font-size: 0.85rem;">
                                    <a href="https://ieeexplore.ieee.org/stamp/stamp.jsp?tp=&arnumber=8990106" target="_blank" rel="noopener noreferrer" class="text-primary d-inline-flex align-items-center">
                                        <i class="ri-file-pdf-line me-1"></i> IEEE article
                                    </a>
                                </p>
                                <h4 class="fs-20 fw-bold text-secondary text-start">
                                    Andrés Pineda, Ph.D.
                                </h4>

                                <p class="text-secondary fs-14">
                                    Software Architect
                                </p>
                            </div>

                        </div>


                        <div class="developer__socials-group pt-2">

                            <a href="https://twitter.com/afpinedac" target="_blank" rel="noopener noreferrer" class="developer__social-link">
                                <div
                                        class="developer__social border-card radius-16 shadow-1  d-flex gap-3 align-items-center mt-3">
                                    <div class="developer__social-icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="16"
                                             viewBox="0 0 20 16" fill="none">
                                            <path
                                                    d="M20.01 1.89C19.27 2.21 18.47 2.42 17.65 2.53C18.5 2.03 19.15 1.24 19.45 0.3C18.65 0.77 17.77 1.09 16.84 1.28C16.1 0.49 15.03 0 13.86 0C11.59 0 9.76001 1.81 9.76001 4.04C9.76001 4.36 9.79001 4.67 9.85001 4.96C6.45 4.79 3.43 3.19 1.4 0.74C1.05 1.34 0.84 2.03 0.84 2.77C0.84 4.18 1.57 5.42 2.66 6.13C2 6.12 1.35 5.93 0.81 5.63V5.67C0.81 7.63 2.23 9.26 4.09 9.64C3.76 9.73 3.39 9.77 3.01 9.77C2.75 9.77 2.48 9.76 2.23 9.7C2.76 11.3 4.27 12.48 6.06 12.51C4.67 13.59 2.89 14.23 0.98 14.23C0.64 14.23 0.32 14.21 0 14.17C1.83 15.34 3.98 16 6.3 16C13.85 16 17.97 9.85 17.97 4.51C17.97 4.33 17.96 4.16 17.95 3.99C18.77 3.42 19.45 2.71 20.01 1.89Z"
                                                    fill="#212529"/>
                                        </svg>
                                    </div>

                                    <div class="developer__social-username">

                                        <p class="text-secondary fs-16">
                                            @afpinedac
                                        </p>

                                    </div>

                                </div>
                            </a>


                            <a href="https://github.com/afpinedac" target="_blank" rel="noopener noreferrer" class="developer__social-link">
                                <div
                                        class="developer__social border-card radius-16 shadow-1  d-flex gap-3 align-items-center mt-3">
                                    <div class="developer__social-icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                             viewBox="0 0 20 20" fill="none">
                                            <path
                                                    d="M10 0.246582C4.475 0.246582 0 4.72158 0 10.2466C0 14.6716 2.8625 18.4091 6.8375 19.7341C7.3375 19.8216 7.525 19.5216 7.525 19.2591C7.525 19.0216 7.5125 18.2341 7.5125 17.3966C5 17.8591 4.35 16.7841 4.15 16.2216C4.0375 15.9341 3.55 15.0466 3.125 14.8091C2.775 14.6216 2.275 14.1591 3.1125 14.1466C3.9 14.1341 4.4625 14.8716 4.65 15.1716C5.55 16.6841 6.9875 16.2591 7.5625 15.9966C7.65 15.3466 7.9125 14.9091 8.2 14.6591C5.975 14.4091 3.65 13.5466 3.65 9.72158C3.65 8.63408 4.0375 7.73408 4.675 7.03408C4.575 6.78408 4.225 5.75908 4.775 4.38408C4.775 4.38408 5.6125 4.12158 7.525 5.40908C8.325 5.18408 9.175 5.07158 10.025 5.07158C10.875 5.07158 11.725 5.18408 12.525 5.40908C14.4375 4.10908 15.275 4.38408 15.275 4.38408C15.825 5.75908 15.475 6.78408 15.375 7.03408C16.0125 7.73408 16.4 8.62158 16.4 9.72158C16.4 13.5591 14.0625 14.4091 11.8375 14.6591C12.2 14.9716 12.5125 15.5716 12.5125 16.5091C12.5125 17.8466 12.5 18.9216 12.5 19.2591C12.5 19.5216 12.6875 19.8341 13.1875 19.7341C17.1375 18.4091 20 14.6591 20 10.2466C20 4.72158 15.525 0.246582 10 0.246582Z"
                                                    fill="#212529"/>
                                        </svg>
                                    </div>

                                    <div class="developer__social-username">

                                        <p class="text-secondary fs-16">
                                            github.com/afpinedac
                                        </p>

                                    </div>

                                </div>
                            </a>





                        </div>

                    </div>

                </div>

                <div class="col-lg-9">
                    <div class="right__part ps-0 ps-lg-5 right-to-left-anim">
                        <h2 class="text-secondary fs-3 fw-bold">
                            Transforming Laravel Applications for Over a Decade
                        </h2>

                        <p class="fs-20 mt-2 mt-lg-4">
                            I help companies build scalable, maintainable Laravel applications that stand the test
                            of time. My approach combines technical excellence with practical business
                            understanding.
                        </p>

                        <div class="mt-4">
                            <div class="row g-3 g-lg-4 align-items-stretch">
                                <div class="col-lg-6">
                                    <div class="border-card h-100 choose__card shadow-1 radius-16">
                                        <div class="d-flex gap-3 align-items-center">
                                            <div class="choose__card-icon">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50"
                                                     viewBox="0 0 50 50" fill="none">
                                                    <path
                                                            d="M10.6453 3.75928L8.44531 5.95615L11.7188 9.22803L13.9156 7.03115L10.6453 3.75928ZM39.3563 3.75928L36.0828 7.03115L38.2812 9.22803L41.5531 5.95772L39.3563 3.75928ZM25 4.73428C24.4844 4.73844 23.9635 4.77178 23.4375 4.83428H23.3906C17.0531 5.56084 12.0094 10.6812 11.1328 16.9905C10.4328 22.0687 12.5266 26.6733 16.0156 29.639C17.4426 30.8572 18.4079 32.5285 18.75 34.3733V43.7483H22.3125C22.8562 44.6812 23.8484 45.3108 25 45.3108C26.1516 45.3108 27.1437 44.6812 27.6875 43.7483H31.25V37.4983H31.3969V35.6421C31.3969 33.3515 32.5875 31.0421 34.5219 29.2468C37.1094 26.6562 39.0625 22.9765 39.0625 18.7499C39.0625 11.0312 32.7094 4.6624 25 4.73428ZM25 7.85928C31.0391 7.7749 35.9375 12.7187 35.9375 18.7499C35.9375 22.0218 34.4219 24.903 32.3234 26.9999L32.3734 27.0499C30.2889 28.9735 28.9407 31.564 28.5609 34.3749H21.7266C21.3828 31.6968 20.2344 29.1046 18.0641 27.2452C15.3031 24.9015 13.6578 21.3702 14.2078 17.3827C14.8906 12.4608 18.8844 8.50303 23.7781 7.96084C24.1822 7.9048 24.5891 7.87142 24.9969 7.86084L25 7.85928ZM3.125 18.7499V21.8749H7.8125V18.7499H3.125ZM42.1875 18.7499V21.8749H46.875V18.7499H42.1875ZM11.7188 31.3968L8.44688 34.6671L10.6453 36.8655L13.9141 33.5937L11.7188 31.3968ZM38.2812 31.3968L36.0844 33.5937L39.3547 36.8655L41.5531 34.6671L38.2812 31.3968ZM21.875 37.4999H28.125V40.6249H21.875V37.4999Z"
                                                            fill="#212529"/>
                                                </svg>
                                            </div>

                                            <h3 class="fs-32 fw-bold text-secondary">
                                                <span>15</span>+
                                            </h3>
                                        </div>

                                        <h4 class="fs-20 fw-bold text-secondary mt-3">
                                            Years Experience
                                        </h4>

                                        <p class="fs-16 mt-2">
                                            Deep expertise in Laravel and PHP ecosystem
                                        </p>

                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="border-card h-100 choose__card shadow-1 radius-16">
                                        <div class="d-flex gap-3 align-items-center">
                                            <div class="choose__card-icon">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="34" height="43"
                                                     viewBox="0 0 34 43" fill="none">
                                                    <path
                                                            d="M9.485 37.29C8.94 35.665 8.47417 34.0108 8.0875 32.3275C7.7025 30.6441 7.42167 28.9375 7.245 27.2075L3.97 29.3975C3.74667 29.5591 3.57834 29.7441 3.465 29.9525C3.35167 30.1608 3.29584 30.3925 3.2975 30.6475V39.24C3.2975 39.4 3.35334 39.5125 3.465 39.5775C3.57667 39.6425 3.6975 39.6425 3.8275 39.5775L9.485 37.29ZM16.51 3.85248C13.9967 6.74581 12.2 9.73165 11.12 12.81C10.04 15.8883 9.5 19.2483 9.5 22.89C9.5 25.4866 9.72917 27.9825 10.1875 30.3775C10.6458 32.7725 11.25 34.98 12 37H22C22.75 34.9816 23.3542 32.7741 23.8125 30.3775C24.2708 27.9808 24.5 25.485 24.5 22.89C24.5 19.2483 23.96 15.8883 22.88 12.81C21.8 9.73165 20.0033 6.74498 17.49 3.84998C17.3967 3.75665 17.3175 3.68748 17.2525 3.64248C17.1858 3.59581 17.1017 3.57248 17 3.57248C16.8983 3.57248 16.8142 3.59581 16.7475 3.64248C16.6808 3.68915 16.6017 3.75831 16.51 3.84998M17 23.25C15.945 23.25 15.0567 22.8883 14.335 22.165C13.6117 21.4433 13.25 20.555 13.25 19.5C13.25 18.445 13.6117 17.5566 14.335 16.835C15.0583 16.1133 15.9467 15.7516 17 15.75C18.0533 15.7483 18.9417 16.11 19.665 16.835C20.3883 17.5566 20.75 18.445 20.75 19.5C20.75 20.555 20.3883 21.4433 19.665 22.165C18.9417 22.8866 18.0533 23.2483 17 23.25ZM24.515 37.3375L30.1725 39.625C30.3008 39.69 30.4217 39.6816 30.535 39.6C30.6467 39.52 30.7025 39.4 30.7025 39.24V30.7C30.7025 30.4433 30.6458 30.2033 30.5325 29.98C30.4208 29.755 30.2525 29.5625 30.0275 29.4025L26.755 27.21C26.5783 28.94 26.2967 30.655 25.91 32.355C25.525 34.0533 25.06 35.7125 24.515 37.3375ZM18.4575 1.38498C21.3792 4.32165 23.5333 7.59248 24.92 11.1975C26.3067 14.8025 27 18.7883 27 23.155C27 23.3466 27.0083 23.5466 27.025 23.755C27.0417 23.9633 27.0333 24.18 27 24.405L31.3375 27.3275C31.9175 27.6891 32.3733 28.1725 32.705 28.7775C33.0367 29.3825 33.2025 30.0225 33.2025 30.6975V40.5225C33.2025 41.2391 32.9025 41.7991 32.3025 42.2025C31.7008 42.6058 31.0633 42.6725 30.39 42.4025L23.265 39.5H10.6875L3.5625 42.355C2.88917 42.625 2.26 42.5583 1.675 42.155C1.09 41.7516 0.798336 41.1925 0.800003 40.4775V30.65C0.800003 29.9766 0.957503 29.3366 1.2725 28.73C1.5875 28.125 2.035 27.6416 2.615 27.28L7 24.355V23.155C7 18.7883 7.69334 14.8025 9.08 11.1975C10.465 7.59248 12.6192 4.32165 15.5425 1.38498C15.7375 1.17665 15.9625 1.02581 16.2175 0.93248C16.4725 0.839147 16.7333 0.79248 17 0.79248C17.2667 0.79248 17.5275 0.839147 17.7825 0.93248C18.0375 1.02581 18.2625 1.17831 18.4575 1.38498Z"
                                                            fill="#212529"/>
                                                </svg>
                                            </div>

                                            <h3 class="fs-32 fw-bold text-secondary">
                                                <span>45</span>+
                                            </h3>
                                        </div>

                                        <h4 class="fs-20 fw-bold text-secondary mt-3">
                                            Projects Launched
                                        </h4>

                                        <p class="fs-16 mt-2">
                                            From startups to enterprise solutions
                                        </p>

                                    </div>
                                </div>

                                <div class="col-lg-12">
                                    <div class="radius-16 shadow-1 border-card p-3 text-center">

                                        <h4 class="text-center fs-20 fw-bold text-secondary my-3">
                                            Follow industry best practices and standards.
                                        </h4>
                                        <img src="./assets/img/choose-banner.png" class="img-fluid" alt="">

                                    </div>
                                </div>


                            </div>

                        </div>

                    </div>
                </div>
            </div>


        </div>
    </section>
    <!-- ========= Why Choose Us Section End ========== -->


    <!-- ========= Tech Stack Section Start ========== -->
    <section class="section tech-stack overflow-hidden" style="padding-bottom: 120px;">
        <div class="container">
            <h3
                    class="section__subtitle section__subtitle-2 fw-semibold mx-auto position-relative d-flex align-items-center justify-content-center mx-auto fs-4 text-primary bg-white animated-border">

                <div class="border-effect"></div>

                <svg xmlns="http://www.w3.org/2000/svg" width="35" height="37" viewBox="0 0 35 37" fill="none">
                    <path
                            d="M34.2745 8.67189C34.2873 8.7197 34.2938 8.76901 34.2938 8.81859V16.5241C34.2938 16.7255 34.188 16.9114 34.0161 17.0115L27.6561 20.7353V28.1155C27.6561 28.2143 27.6306 28.3114 27.5821 28.3969C27.5337 28.4824 27.4639 28.5536 27.3799 28.6031L14.1033 36.3747C14.0729 36.3921 14.0398 36.4033 14.0066 36.4154C13.9942 36.4195 13.9825 36.4272 13.9694 36.4308C13.8766 36.4556 13.779 36.4556 13.6862 36.4308C13.6709 36.4267 13.6571 36.4181 13.6427 36.4126C13.6122 36.4012 13.5805 36.3915 13.5516 36.3747L0.2777 28.6029C0.19335 28.5537 0.123262 28.4827 0.0745061 28.3972C0.0257499 28.3116 5.028e-05 28.2144 0 28.1155V4.99892C0 4.94825 0.00696594 4.89908 0.0192903 4.8514C0.0234431 4.8352 0.0330882 4.82048 0.0387145 4.80427C0.0490295 4.77485 0.0588086 4.7446 0.0739461 4.71723C0.084261 4.69897 0.0993985 4.68426 0.111857 4.66737C0.127798 4.64489 0.142266 4.62174 0.160886 4.60199C0.176828 4.58592 0.197591 4.57393 0.215542 4.5599C0.235636 4.54301 0.253453 4.52475 0.276226 4.5114L6.91409 0.625668C6.99814 0.576484 7.09341 0.550598 7.19039 0.550598C7.28736 0.550598 7.38263 0.576484 7.46668 0.625668L14.1039 4.5114H14.1052C14.1273 4.52557 14.1461 4.54301 14.166 4.55921C14.184 4.57324 14.2041 4.58592 14.2199 4.60144C14.2393 4.62174 14.2531 4.64503 14.2696 4.66737C14.2814 4.68426 14.2973 4.69897 14.307 4.71723C14.3228 4.74529 14.3317 4.77485 14.3429 4.8044C14.3484 4.82048 14.358 4.8352 14.3622 4.85209C14.3749 4.8999 14.3814 4.94935 14.3816 4.99892V19.4371L19.9123 16.1988V8.81791C19.9123 8.76888 19.9192 8.71888 19.9317 8.67189C19.9365 8.65499 19.9455 8.64029 19.951 8.62421C19.9621 8.59466 19.9717 8.56427 19.9869 8.53704C19.9972 8.51878 20.0123 8.50407 20.0243 8.48718C20.0407 8.4647 20.0545 8.44154 20.0738 8.42179C20.0899 8.40572 20.1099 8.39373 20.1278 8.3797C20.1486 8.36281 20.1665 8.34456 20.1886 8.33121L26.8272 4.44547C26.9112 4.39622 27.0065 4.3703 27.1035 4.3703C27.2004 4.3703 27.2957 4.39622 27.3797 4.44547L34.0169 8.33121C34.0404 8.34524 34.0583 8.36281 34.0791 8.37888C34.0962 8.39305 34.1163 8.40572 34.1323 8.42111C34.1516 8.44154 34.1654 8.4647 34.1818 8.48718C34.1944 8.50407 34.2096 8.51878 34.2194 8.53704C34.2352 8.56427 34.2441 8.59466 34.2551 8.62421C34.2614 8.64029 34.2704 8.65499 34.2745 8.67189ZM33.1875 16.199V9.79133L30.8647 11.1509L27.656 13.0296V19.4372L33.1875 16.199ZM26.5503 27.7904V21.3782L23.3939 23.2113L14.3809 28.4421V34.9143L26.5503 27.7904ZM1.10638 5.97152V27.7904L13.2744 34.9137V28.4428L6.91771 24.7845L6.9157 24.7831L6.91302 24.7817C6.89159 24.7691 6.8735 24.7509 6.85354 24.7355C6.83613 24.7213 6.81617 24.7101 6.80103 24.6945L6.79969 24.6925C6.78174 24.6749 6.76928 24.6532 6.75414 24.6335C6.74021 24.6145 6.72374 24.5984 6.71262 24.5788L6.71195 24.5766C6.69949 24.5556 6.69185 24.5303 6.68288 24.5065C6.6739 24.4853 6.66225 24.4656 6.65662 24.4432C6.64979 24.4166 6.64845 24.3877 6.64564 24.3603C6.64296 24.3394 6.63733 24.3182 6.63733 24.2971V9.20994L3.42912 7.33042L1.10638 5.97152ZM7.19112 1.76199L1.66097 4.99892L7.18978 8.23572L12.7191 4.99811L7.18978 1.76199H7.19112ZM10.067 21.9627L13.2751 20.0848V5.97152L10.9526 7.33124L7.74358 9.20981V23.323L10.067 21.9627ZM27.1034 5.5818L21.574 8.81859L27.1034 12.0555L32.6321 8.81791L27.1034 5.5818ZM26.5501 13.0296L23.3414 11.1509L21.0188 9.79133V16.199L24.2269 18.077L26.5503 19.4372L26.5501 13.0296ZM13.827 27.4695L21.9373 22.7613L25.9915 20.4085L20.4662 17.1738L14.1045 20.8979L8.30648 24.2922L13.827 27.4695Z"
                            fill="#DC3545"/>
                </svg>

                <span>
                    Tools I Master
                </span>
            </h3>

            <h2 class="section__title fs-3 fw-bold text-hea text-center mt-3 mt-lg-5 pt-1 pt-lg-2 bottom-to-top-anim">
                Technologies I Use to Optimize Your Laravel Apps
            </h2>

            <p class="fs-20 text-center mt-2 mt-lg-3">From debugging to deployment, I leverage the best tools <br class="d-none d-md-flex"> in the Laravel ecosystem.</p>

            <div class="tech-categories mt-4 mt-lg-5 pt-lg-2">
                <div class="row g-4">

                    <!-- Core Stack -->
                    <div class="col-md-6 col-lg-4">
                        <div class="tech-category h-100 p-4 border rounded-3">
                            <h4 class="text-secondary fs-6 fw-semibold mb-3">Core Stack</h4>
                            <div class="d-flex flex-wrap gap-3 justify-content-center">
                                <div class="tech-logo-item text-center">
                                    <img src="{{ asset('assets/img/tech-logos/php.svg') }}" alt="PHP" width="40" height="40">
                                    <span class="d-block mt-1 small">PHP</span>
                                </div>
                                <div class="tech-logo-item text-center">
                                    <img src="{{ asset('assets/img/tech-logos/laravel.svg') }}" alt="Laravel" width="40" height="40">
                                    <span class="d-block mt-1 small">Laravel</span>
                                </div>
                                <div class="tech-logo-item text-center">
                                    <img src="{{ asset('assets/img/tech-logos/livewire.svg') }}" alt="Livewire" width="40" height="40">
                                    <span class="d-block mt-1 small">Livewire</span>
                                </div>
                                <div class="tech-logo-item text-center">
                                    <img src="{{ asset('assets/img/tech-logos/inertia.svg') }}" alt="Inertia.js" width="40" height="40">
                                    <span class="d-block mt-1 small">Inertia</span>
                                </div>
                                <div class="tech-logo-item text-center">
                                    <img src="{{ asset('assets/img/tech-logos/alpinejs.svg') }}" alt="Alpine.js" width="40" height="40">
                                    <span class="d-block mt-1 small">Alpine</span>
                                </div>
                                <div class="tech-logo-item text-center">
                                    <img src="{{ asset('assets/img/tech-logos/vuejs.svg') }}" alt="Vue.js" width="40" height="40">
                                    <span class="d-block mt-1 small">Vue.js</span>
                                </div>
                                <div class="tech-logo-item text-center">
                                    <img src="{{ asset('assets/img/tech-logos/react.svg') }}" alt="React" width="40" height="40">
                                    <span class="d-block mt-1 small">React</span>
                                </div>
                                <div class="tech-logo-item text-center">
                                    <img src="{{ asset('assets/img/tech-logos/tailwindcss.svg') }}" alt="Tailwind" width="40" height="40">
                                    <span class="d-block mt-1 small">Tailwind</span>
                                </div>
                                <div class="tech-logo-item text-center">
                                    <img src="{{ asset('assets/img/tech-logos/composer.svg') }}" alt="Composer" width="40" height="40">
                                    <span class="d-block mt-1 small">Composer</span>
                                </div>
                                <div class="tech-logo-item text-center">
                                    <img src="{{ asset('assets/img/tech-logos/javascript.svg') }}" alt="JavaScript" width="40" height="40">
                                    <span class="d-block mt-1 small">JavaScript</span>
                                </div>
                                <div class="tech-logo-item text-center">
                                    <img src="{{ asset('assets/img/tech-logos/nodejs.svg') }}" alt="Node.js" width="40" height="40">
                                    <span class="d-block mt-1 small">Node.js</span>
                                </div>
                                <div class="tech-logo-item text-center">
                                    <img src="{{ asset('assets/img/tech-logos/python.svg') }}" alt="Python" width="40" height="40">
                                    <span class="d-block mt-1 small">Python</span>
                                </div>
                                <div class="tech-logo-item text-center">
                                    <img src="{{ asset('assets/img/tech-logos/java.svg') }}" alt="Java" width="40" height="40">
                                    <span class="d-block mt-1 small">Java</span>
                                </div>
                                <div class="tech-logo-item text-center">
                                    <img src="{{ asset('assets/img/tech-logos/bootstrap.svg') }}" alt="Bootstrap" width="40" height="40">
                                    <span class="d-block mt-1 small">Bootstrap</span>
                                </div>
                                <div class="tech-logo-item text-center">
                                    <img src="{{ asset('assets/img/tech-logos/sass.svg') }}" alt="Sass" width="40" height="40">
                                    <span class="d-block mt-1 small">Sass</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Infrastructure & DevOps -->
                    <div class="col-md-6 col-lg-4">
                        <div class="tech-category h-100 p-4 border rounded-3">
                            <h4 class="text-secondary fs-6 fw-semibold mb-3">Infrastructure & DevOps</h4>
                            <div class="d-flex flex-wrap gap-3 justify-content-center">
                                <div class="tech-logo-item text-center">
                                    <img src="{{ asset('assets/img/tech-logos/laravel-forge-icon.png') }}" alt="Laravel Forge" width="40" height="40">
                                    <span class="d-block mt-1 small">Forge</span>
                                </div>
                                <div class="tech-logo-item text-center">
                                    <img src="{{ asset('assets/img/tech-logos/nginx.svg') }}" alt="Nginx" width="40" height="40">
                                    <span class="d-block mt-1 small">Nginx</span>
                                </div>
                                <div class="tech-logo-item text-center">
                                    <img src="{{ asset('assets/img/tech-logos/docker.svg') }}" alt="Docker" width="40" height="40">
                                    <span class="d-block mt-1 small">Docker</span>
                                </div>
                                <div class="tech-logo-item text-center">
                                    <img src="{{ asset('assets/img/tech-logos/redis.svg') }}" alt="Redis" width="40" height="40">
                                    <span class="d-block mt-1 small">Redis</span>
                                </div>
                                <div class="tech-logo-item text-center">
                                    <img src="{{ asset('assets/img/tech-logos/mysql.svg') }}" alt="MySQL" width="40" height="40">
                                    <span class="d-block mt-1 small">MySQL</span>
                                </div>
                                <div class="tech-logo-item text-center">
                                    <img src="{{ asset('assets/img/tech-logos/postgresql.svg') }}" alt="PostgreSQL" width="40" height="40">
                                    <span class="d-block mt-1 small">PostgreSQL</span>
                                </div>
                                <div class="tech-logo-item text-center">
                                    <img src="{{ asset('assets/img/tech-logos/mongodb.svg') }}" alt="MongoDB" width="40" height="40">
                                    <span class="d-block mt-1 small">MongoDB</span>
                                </div>
                                <div class="tech-logo-item text-center">
                                    <img src="{{ asset('assets/img/tech-logos/elasticsearch.svg') }}" alt="Elasticsearch" width="40" height="40">
                                    <span class="d-block mt-1 small">Elastic</span>
                                </div>
                                <div class="tech-logo-item text-center">
                                    <img src="{{ asset('assets/img/tech-logos/meilisearch.svg') }}" alt="MeiliSearch" width="40" height="40">
                                    <span class="d-block mt-1 small">MeiliSearch</span>
                                </div>
                                <div class="tech-logo-item text-center">
                                    <img src="{{ asset('assets/img/tech-logos/algolia.svg') }}" alt="Algolia" width="40" height="40">
                                    <span class="d-block mt-1 small">Algolia</span>
                                </div>
                                <div class="tech-logo-item text-center">
                                    <img src="{{ asset('assets/img/tech-logos/aws.svg') }}" alt="AWS" width="40" height="40">
                                    <span class="d-block mt-1 small">AWS</span>
                                </div>
                                <div class="tech-logo-item text-center">
                                    <img src="{{ asset('assets/img/tech-logos/gcp.svg') }}" alt="Google Cloud" width="40" height="40">
                                    <span class="d-block mt-1 small">GCP</span>
                                </div>
                                <div class="tech-logo-item text-center">
                                    <img src="{{ asset('assets/img/tech-logos/digitalocean.svg') }}" alt="DigitalOcean" width="40" height="40">
                                    <span class="d-block mt-1 small">DO</span>
                                </div>
                                <div class="tech-logo-item text-center">
                                    <img src="{{ asset('assets/img/tech-logos/github.svg') }}" alt="GitHub" width="40" height="40">
                                    <span class="d-block mt-1 small">GitHub</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Payments & Fintech -->
                    <div class="col-md-6 col-lg-4">
                        <div class="tech-category h-100 p-4 border rounded-3">
                            <h4 class="text-secondary fs-6 fw-semibold mb-3">Payments & Fintech</h4>
                            <div class="d-flex flex-wrap gap-3 justify-content-center">
                                <div class="tech-logo-item text-center">
                                    <img src="{{ asset('assets/img/tech-logos/stripe.svg') }}" alt="Stripe" width="40" height="40">
                                    <span class="d-block mt-1 small">Stripe</span>
                                </div>
                                <div class="tech-logo-item text-center">
                                    <img src="{{ asset('assets/img/tech-logos/paypal.svg') }}" alt="PayPal" width="40" height="40">
                                    <span class="d-block mt-1 small">PayPal</span>
                                </div>
                                <div class="tech-logo-item text-center">
                                    <img src="{{ asset('assets/img/tech-logos/braintree.svg') }}" alt="Braintree" width="40" height="40">
                                    <span class="d-block mt-1 small">Braintree</span>
                                </div>
                                <div class="tech-logo-item text-center">
                                    <i class="ri-bank-line" style="font-size: 34px; line-height: 40px; display: inline-block; height: 40px; color: #DC3545;" aria-label="Plaid"></i>
                                    <span class="d-block mt-1 small">Plaid</span>
                                </div>
                            </div>
                            <p class="small text-center mt-3 mb-0" style="color: #6c757d;">+ Astra · Checkbook · Synctera · ZumRails · Avalara</p>
                        </div>
                    </div>

                    <!-- Debugging & Profiling -->
                    <div class="col-md-6 col-lg-4">
                        <div class="tech-category h-100 p-4 border rounded-3">
                            <h4 class="text-secondary fs-6 fw-semibold mb-3">Debugging & Profiling</h4>
                            <div class="d-flex flex-wrap gap-3 justify-content-center">
                                <div class="tech-logo-item text-center">
                                    <img src="{{ asset('assets/img/tech-logos/xdebug.png') }}" alt="Xdebug" width="40" height="40">
                                    <span class="d-block mt-1 small">Xdebug</span>
                                </div>
                                <div class="tech-logo-item text-center">
                                    <img src="{{ asset('assets/img/tech-logos/blackfire.png') }}" alt="Blackfire" width="40" height="40">
                                    <span class="d-block mt-1 small">Blackfire</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Testing & Quality -->
                    <div class="col-md-6 col-lg-4">
                        <div class="tech-category h-100 p-4 border rounded-3">
                            <h4 class="text-secondary fs-6 fw-semibold mb-3">Testing & Quality</h4>
                            <div class="d-flex flex-wrap gap-3 justify-content-center">
                                <div class="tech-logo-item text-center">
                                    <img src="{{ asset('assets/img/tech-logos/pest.svg') }}" alt="Pest" width="40" height="40">
                                    <span class="d-block mt-1 small">Pest</span>
                                </div>
                                <div class="tech-logo-item text-center">
                                    <img src="{{ asset('assets/img/tech-logos/phpunit.svg') }}" alt="PHPUnit" width="40" height="40">
                                    <span class="d-block mt-1 small">PHPUnit</span>
                                </div>
                                <div class="tech-logo-item text-center">
                                    <img src="{{ asset('assets/img/tech-logos/postman.svg') }}" alt="Postman" width="40" height="40">
                                    <span class="d-block mt-1 small">Postman</span>
                                </div>
                                <div class="tech-logo-item text-center">
                                    <img src="{{ asset('assets/img/tech-logos/k6.svg') }}" alt="k6" width="40" height="40">
                                    <span class="d-block mt-1 small">k6</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Monitoring -->
                    <div class="col-md-6 col-lg-4">
                        <div class="tech-category h-100 p-4 border rounded-3">
                            <h4 class="text-secondary fs-6 fw-semibold mb-3">Monitoring</h4>
                            <div class="d-flex flex-wrap gap-3 justify-content-center">
                                <div class="tech-logo-item text-center">
                                    <img src="{{ asset('assets/img/tech-logos/sentry.svg') }}" alt="Sentry" width="40" height="40">
                                    <span class="d-block mt-1 small">Sentry</span>
                                </div>
                                <div class="tech-logo-item text-center">
                                    <img src="{{ asset('assets/img/tech-logos/newrelic.svg') }}" alt="New Relic" width="40" height="40">
                                    <span class="d-block mt-1 small">New Relic</span>
                                </div>
                                <div class="tech-logo-item text-center">
                                    <img src="{{ asset('assets/img/tech-logos/datadog.svg') }}" alt="Datadog" width="40" height="40">
                                    <span class="d-block mt-1 small">Datadog</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Development Tools & AI -->
                    <div class="col-md-6 col-lg-4">
                        <div class="tech-category h-100 p-4 border rounded-3">
                            <h4 class="text-secondary fs-6 fw-semibold mb-3">IDEs & AI Tools</h4>
                            <div class="d-flex flex-wrap gap-3 justify-content-center">
                                <div class="tech-logo-item text-center">
                                    <img src="{{ asset('assets/img/tech-logos/phpstorm.svg') }}" alt="PHPStorm" width="40" height="40">
                                    <span class="d-block mt-1 small">PHPStorm</span>
                                </div>
                                <div class="tech-logo-item text-center">
                                    <img src="{{ asset('assets/img/tech-logos/vscode.svg') }}" alt="VS Code" width="40" height="40">
                                    <span class="d-block mt-1 small">VS Code</span>
                                </div>
                                <div class="tech-logo-item text-center">
                                    <img src="{{ asset('assets/img/tech-logos/cursor.svg') }}" alt="Cursor" width="40" height="40">
                                    <span class="d-block mt-1 small">Cursor</span>
                                </div>
                                <div class="tech-logo-item text-center">
                                    <img src="{{ asset('assets/img/tech-logos/claude.svg') }}" alt="Claude" width="40" height="40">
                                    <span class="d-block mt-1 small">Claude</span>
                                </div>
                                <div class="tech-logo-item text-center">
                                    <img src="{{ asset('assets/img/tech-logos/gemini.svg') }}" alt="Gemini" width="40" height="40">
                                    <span class="d-block mt-1 small">Gemini</span>
                                </div>
                                <div class="tech-logo-item text-center">
                                    <i class="ri-plug-line" style="font-size: 34px; line-height: 40px; display: inline-block; height: 40px; color: #DC3545;" aria-label="MCP Servers"></i>
                                    <span class="d-block mt-1 small">MCP Servers</span>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <style>
        .tech-logo-item {
            transition: all 0.3s ease;
        }
        .tech-logo-item:hover {
            transform: scale(1.1);
        }
    </style>
    <!-- ========= Tech Stack Section End ========== -->


    <!-- ========= Payments & Fintech Section Start ========== -->
    <section id="fintech" class="section fintech-section overflow-hidden" style="padding-bottom: 120px;">
        <div class="container">
            <h3 class="section__subtitle section__subtitle-2 fw-semibold mx-auto position-relative d-flex align-items-center justify-content-center mx-auto fs-4 text-primary bg-white animated-border">
                <div class="border-effect"></div>
                <i class="ri-bank-card-line fs-3"></i>
                <span>Payments &amp; Fintech</span>
            </h3>

            <h2 class="section__title fs-3 fw-bold text-hea text-center mt-3 mt-lg-5 pt-1 pt-lg-2 bottom-to-top-anim">
                Deep expertise in payments &amp; fintech platforms
            </h2>

            <p class="fs-20 text-center mt-2 mt-lg-3">Years shipping production money-movement systems <br class="d-none d-md-flex"> — from payout engines to bank &amp; card integrations.</p>

            <div class="row g-4 mt-3 mt-lg-4">
                <div class="col-md-6 col-lg-3">
                    <div class="fintech-card h-100 p-4 border rounded-3 text-center">
                        <i class="ri-exchange-dollar-line text-primary" style="font-size: 44px;"></i>
                        <h4 class="fs-5 fw-bold text-secondary mt-3 mb-2">Payment &amp; bank integrations</h4>
                        <p class="fs-16 mb-0">Stripe, PayPal, Plaid, Astra, Checkbook, Synctera, ZumRails and more — webhooks, transfers, reconciliation and onboarding.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="fintech-card h-100 p-4 border rounded-3 text-center">
                        <i class="ri-wallet-3-line text-primary" style="font-size: 44px;"></i>
                        <h4 class="fs-5 fw-bold text-secondary mt-3 mb-2">Payout &amp; wallet engines</h4>
                        <p class="fs-16 mb-0">Event sourcing payout engines processing instant payments, wallet pre-funding, and zero-downtime migrations of real balances.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="fintech-card h-100 p-4 border rounded-3 text-center">
                        <i class="ri-shield-check-line text-primary" style="font-size: 44px;"></i>
                        <h4 class="fs-5 fw-bold text-secondary mt-3 mb-2">Compliance &amp; security</h4>
                        <p class="fs-16 mb-0">KYB/KYC onboarding, PCI-aware architectures, and fixing critical issues — auth bypass, unsigned JWT, payment tampering.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="fintech-card h-100 p-4 border rounded-3 text-center">
                        <i class="ri-node-tree text-primary" style="font-size: 44px;"></i>
                        <h4 class="fs-5 fw-bold text-secondary mt-3 mb-2">Fintech domain modeling</h4>
                        <p class="fs-16 mb-0">Domain-Driven Design for money-math: distributions, reporting, ledgers and provider-agnostic abstractions with high test coverage.</p>
                    </div>
                </div>
            </div>

            <div class="btn-group d-flex justify-content-center align-items-center gap-3 mt-4 mt-lg-5 pt-2">
                <button type="button" onclick="bookConsultation(); return false;" class="btn btn-main mx-auto">
                    Talk About Your Payments Project
                </button>
            </div>
        </div>
    </section>

    <style>
        .fintech-card {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            background-color: #fff;
        }
        .fintech-card:hover {
            transform: translateY(-6px);
            box-shadow: 0 12px 28px rgba(220, 53, 69, 0.12);
        }
    </style>
    <!-- ========= Payments & Fintech Section End ========== -->


    <!-- ======== Work Together Section Start =========== -->
    <section id="schedule" class="section work-together bg-primary">

        <h3
                class="section__subtitle fw-semibold mx-auto position-absolute d-flex align-items-center justify-content-center fs-4 text-primary bg-white animated-border">

            <div class="border-effect"></div>
            <svg xmlns="http://www.w3.org/2000/svg" width="35" height="37" viewBox="0 0 35 37" fill="none">
                <path
                        d="M34.2745 8.67189C34.2873 8.7197 34.2938 8.76901 34.2938 8.81859V16.5241C34.2938 16.7255 34.188 16.9114 34.0161 17.0115L27.6561 20.7353V28.1155C27.6561 28.2143 27.6306 28.3114 27.5821 28.3969C27.5337 28.4824 27.4639 28.5536 27.3799 28.6031L14.1033 36.3747C14.0729 36.3921 14.0398 36.4033 14.0066 36.4154C13.9942 36.4195 13.9825 36.4272 13.9694 36.4308C13.8766 36.4556 13.779 36.4556 13.6862 36.4308C13.6709 36.4267 13.6571 36.4181 13.6427 36.4126C13.6122 36.4012 13.5805 36.3915 13.5516 36.3747L0.2777 28.6029C0.19335 28.5537 0.123262 28.4827 0.0745061 28.3972C0.0257499 28.3116 5.028e-05 28.2144 0 28.1155V4.99892C0 4.94825 0.00696594 4.89908 0.0192903 4.8514C0.0234431 4.8352 0.0330882 4.82048 0.0387145 4.80427C0.0490295 4.77485 0.0588086 4.7446 0.0739461 4.71723C0.084261 4.69897 0.0993985 4.68426 0.111857 4.66737C0.127798 4.64489 0.142266 4.62174 0.160886 4.60199C0.176828 4.58592 0.197591 4.57393 0.215542 4.5599C0.235636 4.54301 0.253453 4.52475 0.276226 4.5114L6.91409 0.625668C6.99814 0.576484 7.09341 0.550598 7.19039 0.550598C7.28736 0.550598 7.38263 0.576484 7.46668 0.625668L14.1039 4.5114H14.1052C14.1273 4.52557 14.1461 4.54301 14.166 4.55921C14.184 4.57324 14.2041 4.58592 14.2199 4.60144C14.2393 4.62174 14.2531 4.64503 14.2696 4.66737C14.2814 4.68426 14.2973 4.69897 14.307 4.71723C14.3228 4.74529 14.3317 4.77485 14.3429 4.8044C14.3484 4.82048 14.358 4.8352 14.3622 4.85209C14.3749 4.8999 14.3814 4.94935 14.3816 4.99892V19.4371L19.9123 16.1988V8.81791C19.9123 8.76888 19.9192 8.71888 19.9317 8.67189C19.9365 8.65499 19.9455 8.64029 19.951 8.62421C19.9621 8.59466 19.9717 8.56427 19.9869 8.53704C19.9972 8.51878 20.0123 8.50407 20.0243 8.48718C20.0407 8.4647 20.0545 8.44154 20.0738 8.42179C20.0899 8.40572 20.1099 8.39373 20.1278 8.3797C20.1486 8.36281 20.1665 8.34456 20.1886 8.33121L26.8272 4.44547C26.9112 4.39622 27.0065 4.3703 27.1035 4.3703C27.2004 4.3703 27.2957 4.39622 27.3797 4.44547L34.0169 8.33121C34.0404 8.34524 34.0583 8.36281 34.0791 8.37888C34.0962 8.39305 34.1163 8.40572 34.1323 8.42111C34.1516 8.44154 34.1654 8.4647 34.1818 8.48718C34.1944 8.50407 34.2096 8.51878 34.2194 8.53704C34.2352 8.56427 34.2441 8.59466 34.2551 8.62421C34.2614 8.64029 34.2704 8.65499 34.2745 8.67189ZM33.1875 16.199V9.79133L30.8647 11.1509L27.656 13.0296V19.4372L33.1875 16.199ZM26.5503 27.7904V21.3782L23.3939 23.2113L14.3809 28.4421V34.9143L26.5503 27.7904ZM1.10638 5.97152V27.7904L13.2744 34.9137V28.4428L6.91771 24.7845L6.9157 24.7831L6.91302 24.7817C6.89159 24.7691 6.8735 24.7509 6.85354 24.7355C6.83613 24.7213 6.81617 24.7101 6.80103 24.6945L6.79969 24.6925C6.78174 24.6749 6.76928 24.6532 6.75414 24.6335C6.74021 24.6145 6.72374 24.5984 6.71262 24.5788L6.71195 24.5766C6.69949 24.5556 6.69185 24.5303 6.68288 24.5065C6.6739 24.4853 6.66225 24.4656 6.65662 24.4432C6.64979 24.4166 6.64845 24.3877 6.64564 24.3603C6.64296 24.3394 6.63733 24.3182 6.63733 24.2971V9.20994L3.42912 7.33042L1.10638 5.97152ZM7.19112 1.76199L1.66097 4.99892L7.18978 8.23572L12.7191 4.99811L7.18978 1.76199H7.19112ZM10.067 21.9627L13.2751 20.0848V5.97152L10.9526 7.33124L7.74358 9.20981V23.323L10.067 21.9627ZM27.1034 5.5818L21.574 8.81859L27.1034 12.0555L32.6321 8.81791L27.1034 5.5818ZM26.5501 13.0296L23.3414 11.1509L21.0188 9.79133V16.199L24.2269 18.077L26.5503 19.4372L26.5501 13.0296ZM13.827 27.4695L21.9373 22.7613L25.9915 20.4085L20.4662 17.1738L14.1045 20.8979L8.30648 24.2922L13.827 27.4695Z"
                        fill="#DC3545"/>
            </svg>

            <span>
                    Let's Work Together
                </span>
        </h3>


        <div class="container">
            <div class="container-mini mx-auto" style="margin-top: 50px !important; margin-bottom: 50px !important;">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="work__content">
                            <h2 class="fs-3 fw-bold text-secondary">
                                Let's fix your Laravel headaches together — <span class="text-primary">for
                                        free.</span>
                            </h2>

                            <div class="work__content-list mt-3">

                                <div class="d-flex work__content-list-item mb-3 gap-3">
                                    <div class="work__content-item-icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="8" height="7"
                                             viewBox="0 0 8 7" fill="none">
                                            <path d="M1 3.5L3 5.5L6.33333 1.5" stroke="#F8F9FA" stroke-width="2"
                                                  stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                    </div>

                                    <p class="fs-18">
                                        60-minute consultation call
                                    </p>
                                </div>

                                <div class="d-flex work__content-list-item mb-3 gap-3">
                                    <div class="work__content-item-icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="8" height="7"
                                             viewBox="0 0 8 7" fill="none">
                                            <path d="M1 3.5L3 5.5L6.33333 1.5" stroke="#F8F9FA" stroke-width="2"
                                                  stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                    </div>

                                    <p class="fs-18">
                                        Actionable recommendations
                                    </p>
                                </div>


                                <div class="d-flex work__content-list-item mb-3 gap-3">
                                    <div class="work__content-item-icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="8" height="7"
                                             viewBox="0 0 8 7" fill="none">
                                            <path d="M1 3.5L3 5.5L6.33333 1.5" stroke="#F8F9FA" stroke-width="2"
                                                  stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                    </div>

                                    <p class="fs-18">
                                        No strings attached
                                    </p>
                                </div>
                            </div>


                        </div>
                    </div>

                    <div class="col-lg-6 pe-lg-5">

                        <div class="book__card p-4 border-card radius-16 shadow-1">
                            <h3 class="fs-5 fw-bold text-secondary">
                                Book Your Free Call
                            </h3>
                            {{-- Removed form tag, changed button type and added onclick --}}
                            {{-- <form action="" class="book__form mt-4"> --}}
                                {{-- <input type="email" placeholder="Enter your email"> --}}

                                <button type="button"
                                        onclick="bookConsultation(); return false;"
                                        class="btn btn-main mt-3 w-100"> {{-- Added w-100 for consistency --}}
                                    Book My Free Call
                                </button>

                            {{-- </form> --}}

                        </div>
                    </div>
                </div>


                <div
                        class="fact bottom-to-top-anim d-md-flex gap-2 gap-lg-4 mt-3 mt-5 pt-1 pt-lg-3 flex-wrap flex-md-nowrap justify-content-center">

                    <div class="fact__item d-flex align-items-center gap-2 gap-lg-3 pe-3 pe-lg-4">
                        <div class="fact__item-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 50 50"
                                 fill="none">
                                <path
                                        d="M10.6453 3.75928L8.44531 5.95615L11.7188 9.22803L13.9156 7.03115L10.6453 3.75928ZM39.3563 3.75928L36.0828 7.03115L38.2812 9.22803L41.5531 5.95772L39.3563 3.75928ZM25 4.73428C24.4844 4.73844 23.9635 4.77178 23.4375 4.83428H23.3906C17.0531 5.56084 12.0094 10.6812 11.1328 16.9905C10.4328 22.0687 12.5266 26.6733 16.0156 29.639C17.4426 30.8572 18.4079 32.5285 18.75 34.3733V43.7483H22.3125C22.8562 44.6812 23.8484 45.3108 25 45.3108C26.1516 45.3108 27.1437 44.6812 27.6875 43.7483H31.25V37.4983H31.3969V35.6421C31.3969 33.3515 32.5875 31.0421 34.5219 29.2468C37.1094 26.6562 39.0625 22.9765 39.0625 18.7499C39.0625 11.0312 32.7094 4.6624 25 4.73428ZM25 7.85928C31.0391 7.7749 35.9375 12.7187 35.9375 18.7499C35.9375 22.0218 34.4219 24.903 32.3234 26.9999L32.3734 27.0499C30.2889 28.9735 28.9407 31.564 28.5609 34.3749H21.7266C21.3828 31.6968 20.2344 29.1046 18.0641 27.2452C15.3031 24.9015 13.6578 21.3702 14.2078 17.3827C14.8906 12.4608 18.8844 8.50303 23.7781 7.96084C24.1822 7.9048 24.5891 7.87142 24.9969 7.86084L25 7.85928ZM3.125 18.7499V21.8749H7.8125V18.7499H3.125ZM42.1875 18.7499V21.8749H46.875V18.7499H42.1875ZM11.7188 31.3968L8.44688 34.6671L10.6453 36.8655L13.9141 33.5937L11.7188 31.3968ZM38.2812 31.3968L36.0844 33.5937L39.3547 36.8655L41.5531 34.6671L38.2812 31.3968ZM21.875 37.4999H28.125V40.6249H21.875V37.4999Z"
                                        fill="#212529"/>
                            </svg>
                        </div>

                        <div class="fact__item-content">
                            <h3 class="fs-5 fw-bold text-secondary">
                                <span>15</span>+
                            </h3>
                            <p>
                                Years Experience
                            </p>
                        </div>

                    </div>


                    <div class="fact__item d-flex align-items-center gap-2 gap-lg-3 pe-3 pe-lg-4">
                        <div class="fact__item-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" viewBox="0 0 60 60"
                                 fill="none">
                                <path
                                        d="M22.485 45.29C21.94 43.665 21.4742 42.0108 21.0875 40.3275C20.7025 38.6441 20.4217 36.9375 20.245 35.2075L16.97 37.3975C16.7467 37.5591 16.5783 37.7441 16.465 37.9525C16.3517 38.1608 16.2958 38.3925 16.2975 38.6475V47.24C16.2975 47.4 16.3533 47.5125 16.465 47.5775C16.5767 47.6425 16.6975 47.6425 16.8275 47.5775L22.485 45.29ZM29.51 11.8525C26.9967 14.7458 25.2 17.7316 24.12 20.81C23.04 23.8883 22.5 27.2483 22.5 30.89C22.5 33.4866 22.7292 35.9825 23.1875 38.3775C23.6458 40.7725 24.25 42.98 25 45H35C35.75 42.9816 36.3542 40.7741 36.8125 38.3775C37.2708 35.9808 37.5 33.485 37.5 30.89C37.5 27.2483 36.96 23.8883 35.88 20.81C34.8 17.7316 33.0033 14.745 30.49 11.85C30.3967 11.7566 30.3175 11.6875 30.2525 11.6425C30.1858 11.5958 30.1017 11.5725 30 11.5725C29.8983 11.5725 29.8142 11.5958 29.7475 11.6425C29.6808 11.6891 29.6017 11.7583 29.51 11.85M30 31.25C28.945 31.25 28.0567 30.8883 27.335 30.165C26.6117 29.4433 26.25 28.555 26.25 27.5C26.25 26.445 26.6117 25.5566 27.335 24.835C28.0583 24.1133 28.9467 23.7516 30 23.75C31.0533 23.7483 31.9417 24.11 32.665 24.835C33.3883 25.5566 33.75 26.445 33.75 27.5C33.75 28.555 33.3883 29.4433 32.665 30.165C31.9417 30.8866 31.0533 31.2483 30 31.25ZM37.515 45.3375L43.1725 47.625C43.3008 47.69 43.4217 47.6816 43.535 47.6C43.6467 47.52 43.7025 47.4 43.7025 47.24V38.7C43.7025 38.4433 43.6458 38.2033 43.5325 37.98C43.4208 37.755 43.2525 37.5625 43.0275 37.4025L39.755 35.21C39.5783 36.94 39.2967 38.655 38.91 40.355C38.525 42.0533 38.06 43.7125 37.515 45.3375ZM31.4575 9.38498C34.3792 12.3216 36.5333 15.5925 37.92 19.1975C39.3067 22.8025 40 26.7883 40 31.155C40 31.3466 40.0083 31.5466 40.025 31.755C40.0417 31.9633 40.0333 32.18 40 32.405L44.3375 35.3275C44.9175 35.6891 45.3733 36.1725 45.705 36.7775C46.0367 37.3825 46.2025 38.0225 46.2025 38.6975V48.5225C46.2025 49.2391 45.9025 49.7991 45.3025 50.2025C44.7008 50.6058 44.0633 50.6725 43.39 50.4025L36.265 47.5H23.6875L16.5625 50.355C15.8892 50.625 15.26 50.5583 14.675 50.155C14.09 49.7516 13.7983 49.1925 13.8 48.4775V38.65C13.8 37.9766 13.9575 37.3366 14.2725 36.73C14.5875 36.125 15.035 35.6416 15.615 35.28L20 32.355V31.155C20 26.7883 20.6933 22.8025 22.08 19.1975C23.465 15.5925 25.6192 12.3216 28.5425 9.38498C28.7375 9.17665 28.9625 9.02581 29.2175 8.93248C29.4725 8.83915 29.7333 8.79248 30 8.79248C30.2667 8.79248 30.5275 8.83915 30.7825 8.93248C31.0375 9.02581 31.2625 9.17831 31.4575 9.38498Z"
                                        fill="#212529"/>
                            </svg>
                        </div>

                        <div class="fact__item-content">
                            <h3 class="fs-5 fw-bold text-secondary">
                                <span>45</span>+
                            </h3>
                            <p>
                                Projects Delivered
                            </p>
                        </div>

                    </div>


                    <div class="fact__item d-flex align-items-center gap-2 gap-lg-3 pe-3 pe-lg-4">
                        <div class="fact__item-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 50 50"
                                 fill="none">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                      d="M11.4167 3.96441C11.3691 3.72793 11.241 3.51528 11.0542 3.36273C10.8674 3.21018 10.6334 3.1272 10.3922 3.12793C10.151 3.12867 9.91755 3.21309 9.73166 3.36678C9.54577 3.52046 9.41897 3.7339 9.3729 3.97066V3.97482L9.36665 3.99566C9.339 4.13602 9.30774 4.27565 9.2729 4.4144C9.18131 4.78791 9.07498 5.15764 8.95415 5.52274C8.65207 6.4269 8.24165 7.3144 7.77082 7.78941C7.29999 8.26232 6.41665 8.67899 5.51249 8.98732C5.01218 9.15579 4.5031 9.29697 3.98749 9.41024L3.96665 9.4144C3.72898 9.46062 3.51482 9.58819 3.36101 9.77518C3.20719 9.96218 3.12332 10.1969 3.12381 10.439C3.12431 10.6812 3.20913 10.9156 3.36371 11.1019C3.51829 11.2883 3.73296 11.415 3.97082 11.4602H3.97499L3.99582 11.4665C4.13619 11.4941 4.27581 11.5254 4.41457 11.5602C4.69999 11.6311 5.09374 11.7352 5.5229 11.879C6.42707 12.1811 7.31457 12.5915 7.78957 13.0623C8.26249 13.5332 8.67915 14.4165 8.98749 15.3207C9.15596 15.821 9.29714 16.33 9.4104 16.8457L9.41457 16.8665C9.46079 17.1042 9.58836 17.3183 9.77535 17.4721C9.96234 17.626 10.1971 17.7098 10.4392 17.7093C10.6813 17.7088 10.9157 17.624 11.1021 17.4694C11.2885 17.3149 11.4152 17.1002 11.4604 16.8623V16.8582L11.4667 16.8373C11.4943 16.697 11.5256 16.5573 11.5604 16.4186C11.6312 16.1332 11.7354 15.7394 11.8792 15.3102C12.1812 14.4061 12.5917 13.5186 13.0625 13.0436C13.5333 12.5707 14.4167 12.154 15.3208 11.8457C15.8211 11.6772 16.3302 11.536 16.8458 11.4227L16.8667 11.4186C17.1043 11.3724 17.3185 11.2448 17.4723 11.0578C17.6261 10.8708 17.71 10.6361 17.7095 10.3939C17.709 10.1518 17.6242 9.91741 17.4696 9.73105C17.315 9.54468 17.1004 9.41798 16.8625 9.37274H16.8583L16.8375 9.36649C16.6971 9.33884 16.5575 9.30758 16.4187 9.27274C16.0452 9.18114 15.6755 9.07481 15.3104 8.95399C14.4062 8.6519 13.5187 8.24149 13.0437 7.77066C12.5708 7.29982 12.1542 6.41649 11.8458 5.51232C11.6774 5.01202 11.5362 4.50294 11.4229 3.98732L11.4167 3.96441ZM13.325 10.4061C12.6937 10.1102 12.0604 9.72899 11.575 9.24774C11.0917 8.76857 10.7083 8.13732 10.4083 7.50816C10.1104 8.13941 9.72915 8.77274 9.2479 9.25815C8.76874 9.74149 8.13749 10.1248 7.50832 10.4248C8.13957 10.7227 8.7729 11.104 9.25832 11.5852C9.74165 12.0644 10.125 12.6957 10.425 13.3248C10.7229 12.6936 11.1042 12.0602 11.5854 11.5748C12.0646 11.0915 12.6958 10.7061 13.325 10.4061ZM39.5833 6.77065C39.9977 6.77065 40.3952 6.93527 40.6882 7.2283C40.9812 7.52133 41.1458 7.91875 41.1458 8.33316V8.85399H41.6667C42.0811 8.85399 42.4785 9.01861 42.7715 9.31163C43.0645 9.60466 43.2292 10.0021 43.2292 10.4165C43.2292 10.8309 43.0645 11.2283 42.7715 11.5213C42.4785 11.8144 42.0811 11.979 41.6667 11.979H41.1458V12.4998C41.1458 12.9142 40.9812 13.3117 40.6882 13.6047C40.3952 13.8977 39.9977 14.0623 39.5833 14.0623C39.1689 14.0623 38.7715 13.8977 38.4785 13.6047C38.1854 13.3117 38.0208 12.9142 38.0208 12.4998V11.979H37.5C37.0856 11.979 36.6882 11.8144 36.3951 11.5213C36.1021 11.2283 35.9375 10.8309 35.9375 10.4165C35.9375 10.0021 36.1021 9.60466 36.3951 9.31163C36.6882 9.01861 37.0856 8.85399 37.5 8.85399H38.0208V8.33316C38.0208 7.91875 38.1854 7.52133 38.4785 7.2283C38.7715 6.93527 39.1689 6.77065 39.5833 6.77065ZM24.975 12.8748C24.2896 13.7707 23.5125 15.1561 22.3646 17.2123L21.7854 18.254L21.6729 18.454C21.1521 19.3977 20.6771 20.2498 19.9125 20.829C19.1375 21.4186 18.1958 21.629 17.175 21.8582L16.9583 21.9061L15.8333 22.1623C13.6 22.6665 12.1104 23.0082 11.0937 23.4082C10.1083 23.7977 9.97707 24.0852 9.92707 24.2457C9.87082 24.4248 9.82707 24.7707 10.4167 25.7102C11.0208 26.6665 12.0417 27.8665 13.5583 29.6415L14.3271 30.5394L14.4687 30.7061C15.1729 31.5248 15.7979 32.2561 16.0875 33.1811C16.3729 34.1019 16.2771 35.0644 16.1708 36.1602L16.15 36.3811L16.0312 37.5811C15.8021 39.9457 15.6521 41.5519 15.7021 42.6998C15.7542 43.8457 15.9937 44.079 16.1042 44.1644C16.1896 44.229 16.4208 44.3977 17.4458 44.1019C18.4917 43.804 19.8917 43.1644 21.9812 42.2019L23.0354 41.7165L23.2437 41.6207C24.1917 41.1832 25.075 40.7727 26.0417 40.7727C27.0083 40.7727 27.8917 41.1811 28.8417 41.6207L29.0479 41.7165L30.1021 42.2019C32.1917 43.1644 33.5917 43.804 34.6375 44.104C35.6625 44.3957 35.8937 44.229 35.9792 44.1644C36.0896 44.0811 36.3292 43.8477 36.3812 42.6998C36.4333 41.5519 36.2812 39.9457 36.05 37.5811L35.9354 36.3811L35.9146 36.1582C35.8062 35.0644 35.7104 34.1019 35.9979 33.1811C36.2854 32.2561 36.9104 31.5248 37.6146 30.7061L37.7562 30.5394L38.525 29.6415C40.0437 27.8665 41.0646 26.6665 41.6667 25.7102C42.2583 24.7707 42.2125 24.4248 42.1562 24.2457C42.1062 24.0852 41.975 23.7977 40.9896 23.4082C39.9729 23.0082 38.4833 22.6665 36.2521 22.1623L35.125 21.9061L34.9083 21.8582C33.8875 21.629 32.9458 21.4186 32.1708 20.8311C31.4062 20.2477 30.9333 19.3977 30.4104 18.4561L30.2979 18.254L29.7187 17.2123C28.5729 15.1561 27.7937 13.7686 27.1083 12.8748C26.4229 11.9811 26.1292 11.979 26.0417 11.979C25.9542 11.979 25.6583 11.9832 24.975 12.8748ZM22.4937 10.9748C23.35 9.85607 24.4521 8.85399 26.0417 8.85399C27.6292 8.85399 28.7333 9.85607 29.5896 10.9748C30.4312 12.0727 31.3187 13.6623 32.3854 15.579L33.0271 16.7332C33.7333 17.9977 33.8854 18.2082 34.0604 18.3415C34.2271 18.4665 34.4417 18.5498 35.8146 18.8582L37.0708 19.1436C39.1375 19.6102 40.8687 20.0019 42.1333 20.5019C43.4562 21.0227 44.6729 21.8144 45.1396 23.3186C45.6042 24.8061 45.075 26.1602 44.3104 27.3748C43.5708 28.5477 42.3979 29.9227 40.9833 31.5748L40.1312 32.5707C39.2042 33.6561 39.0521 33.8769 38.9812 34.1102C38.9062 34.3477 38.9042 34.6332 39.0437 36.0811L39.1729 37.404C39.3875 39.6123 39.5646 41.4415 39.5021 42.8415C39.4396 44.2665 39.1125 45.7082 37.8687 46.654C36.5979 47.6186 35.1292 47.4957 33.7771 47.1082C32.4708 46.7332 30.8521 45.9873 28.9167 45.0977L27.7417 44.5561C26.45 43.9623 26.2333 43.8977 26.0417 43.8977C25.85 43.8977 25.6333 43.9602 24.3417 44.5561L23.1667 45.0977C21.2292 45.9873 19.6125 46.7332 18.3062 47.1082C16.9542 47.4957 15.4854 47.6186 14.2146 46.654C12.9708 45.7082 12.6437 44.2665 12.5812 42.8415C12.5187 41.4415 12.6958 39.6123 12.9104 37.404L13.0375 36.0811C13.1792 34.6332 13.1771 34.3498 13.1021 34.1102C13.0312 33.8769 12.8792 33.6561 11.9521 32.5707L11.1 31.5748C9.68749 29.9227 8.51249 28.5477 7.7729 27.3748C7.00832 26.1602 6.48124 24.8061 6.94374 23.3186C7.4104 21.8123 8.62707 21.0227 9.9479 20.5019C11.2146 20.0019 12.9458 19.6102 15.0125 19.1436L16.2687 18.8582C17.6417 18.5477 17.8583 18.4665 18.0229 18.3415C18.1979 18.2082 18.35 17.9977 19.0562 16.7332L19.6979 15.579C20.7667 13.6623 21.6521 12.0727 22.4937 10.9748Z"
                                      fill="#212529"/>
                            </svg>
                        </div>

                        <div class="fact__item-content">
                            <h3 class="fs-5 fw-bold text-secondary">
                                <span>25</span>k
                            </h3>
                            <p>
                                GitHub Stars
                            </p>
                        </div>

                    </div>

                </div>
            </div>
        </div>

    </section>
    <!-- ======== Work Together Section End =========== -->


    <!-- ========= Testimonial Section Start ======== -->
    <section class="testimonial section">
        <div class="container">
            <div class="testimonial-container">
                <div class="swiper">
                    <!-- Additional required wrapper -->
                    <div class="swiper-wrapper">
                        <!-- Slides -->

                        <div class="swiper-slide">
                            {{-- Testimonial 1 --}}
                            <div class="testimonial__slide shadow-1 border-card m-3 m-lg-4">
                                <div class="d-flex align-items-start testimonial__content">
                                    <div>
                                        <span class="testimonial__icon">"</span>
                                    </div>
                                    <p class="p-3 fs-32">
                                        "Our legacy Laravel app was becoming a bottleneck. The insights from the initial audit were spot-on, and the subsequent performance optimization work <span class="fw-bold text-secondary">dramatically reduced our server load</span> and sped up key user actions."
                                    </p>
                                </div>
                                <div class="d-flex align-items-center justify-content-between mt-2">
                                    <div>
                                        <h4 class="fw-bold testimonial__author-title text-secondary">
                                            Michael Ross
                                        </h4>
                                        <p class="testimonial__author-tag">
                                            Lead Developer, Innovate Solutions
                                        </p>
                                    </div>
                                    <div class="p-2">
                                        <button class="fs-5 fw-bold testimonial__btn">
                                            +40% Performance
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide">
                             {{-- Testimonial 2 --}}
                            <div class="testimonial__slide shadow-1 border-card m-3 m-lg-4">
                                <div class="d-flex align-items-start testimonial__content">
                                    <div>
                                        <span class="testimonial__icon">"</span>
                                    </div>
                                    <p class="p-3 fs-32">
                                        "We were stuck on an old PHP and Laravel version. The team handled the <span class="fw-bold text-secondary">entire upgrade process smoothly</span>, including addressing breaking changes and ensuring our test suite passed. Highly recommended for complex upgrades."
                                    </p>
                                </div>
                                <div class="d-flex align-items-center justify-content-between mt-2">
                                    <div>
                                        <h4 class="fw-bold text-secondary">
                                            Kristin Rivera
                                        </h4>
                                        <p class="testimonial__author-tag">
                                            Prooject Manager, Startup Hub
                                        </p>
                                    </div>
                                    <div class="p-2">
                                        <button class="fs-5 fw-bold testimonial__btn">
                                            Upgraded to Latest LTS
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide">
                             {{-- Testimonial 3 --}}
                            <div class="testimonial__slide shadow-1 border-card m-3 m-lg-4">
                                <div class="d-flex align-items-start testimonial__content">
                                    <div>
                                        <span class="testimonial__icon">"</span>
                                    </div>
                                    <p class="p-3 fs-32">
                                        "The free audit quickly identified architectural issues we suspected but couldn't pinpoint. The follow-up refactoring resulted in <span class="fw-bold text-secondary">cleaner, more maintainable code</span> and fewer recurring bugs. Great communication throughout."
                                    </p>
                                </div>
                                <div class="d-flex align-items-center justify-content-between mt-2">
                                    <div>
                                        <h4 class="fw-bold text-secondary">
                                            Scott Boruta
                                        </h4>
                                        <p class="testimonial__author-tag">
                                            Founder, SaaS Platform Co.
                                        </p>
                                    </div>
                                    <div class="p-2">
                                        <button class="fs-5 fw-bold testimonial__btn">
                                            Code Quality Improved
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div


                    <div
                            class="testimonial__control mt-4 mt-lg-5 d-flex align-items-center justify-content-center gap-2">

                        <div class="testimonial__prev  d-flex align-items-center justify-content-center">
                            <i class="ri-arrow-left-line"></i>

                        </div>

                        <div>
                            <div class="swiper-pagination position-relative"></div>
                        </div>

                        <div class="testimonial__next active d-flex align-items-center justify-content-center">
                            <i class="ri-arrow-right-line"></i>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row text-center px-3">
                <div
                        class="cta d-lg-flex mx-auto align-items-center justify-content-center border-card radius-16 flex-wrap bottom-to-top-anim">
                    <img src="./assets/img/me.png" alt="" class="cta__img">

                    <p class="mt-3 mt-lg-0">
                        join <span class="text-secondary fw-bold">the companies</span> who improved their Laravel
                        applications
                    </p>
                    {{-- Updated button to trigger Google Calendar booking page --}}
                    <button type="button"
                            onclick="bookConsultation(); return false;"
                            class="btn btn-main cta__btn mt-3 mt-lg-0">
                        Book Your Free Call
                    </button>
                </div>
            </div>
        </div>
    </section>
    <!-- ========= Testimonial Section End ======== -->


    <!-- ========= Faq Section Start ========== -->
    <section id="contact" class="section faq faq--section position-relative overflow-hidden">
        <div class="container">
            <h3
                    class="section__subtitle section__subtitle-2 fw-semibold mx-auto position-relative d-flex align-items-center justify-content-center  mx-auto fs-4 text-primary bg-white animated-border">

                <div class="border-effect"></div>
                <svg xmlns="http://www.w3.org/2000/svg" width="35" height="37" viewBox="0 0 35 37" fill="none">
                    <path
                            d="M34.2745 8.67189C34.2873 8.7197 34.2938 8.76901 34.2938 8.81859V16.5241C34.2938 16.7255 34.188 16.9114 34.0161 17.0115L27.6561 20.7353V28.1155C27.6561 28.2143 27.6306 28.3114 27.5821 28.3969C27.5337 28.4824 27.4639 28.5536 27.3799 28.6031L14.1033 36.3747C14.0729 36.3921 14.0398 36.4033 14.0066 36.4154C13.9942 36.4195 13.9825 36.4272 13.9694 36.4308C13.8766 36.4556 13.779 36.4556 13.6862 36.4308C13.6709 36.4267 13.6571 36.4181 13.6427 36.4126C13.6122 36.4012 13.5805 36.3915 13.5516 36.3747L0.2777 28.6029C0.19335 28.5537 0.123262 28.4827 0.0745061 28.3972C0.0257499 28.3116 5.028e-05 28.2144 0 28.1155V4.99892C0 4.94825 0.00696594 4.89908 0.0192903 4.8514C0.0234431 4.8352 0.0330882 4.82048 0.0387145 4.80427C0.0490295 4.77485 0.0588086 4.7446 0.0739461 4.71723C0.084261 4.69897 0.0993985 4.68426 0.111857 4.66737C0.127798 4.64489 0.142266 4.62174 0.160886 4.60199C0.176828 4.58592 0.197591 4.57393 0.215542 4.5599C0.235636 4.54301 0.253453 4.52475 0.276226 4.5114L6.91409 0.625668C6.99814 0.576484 7.09341 0.550598 7.19039 0.550598C7.28736 0.550598 7.38263 0.576484 7.46668 0.625668L14.1039 4.5114H14.1052C14.1273 4.52557 14.1461 4.54301 14.166 4.55921C14.184 4.57324 14.2041 4.58592 14.2199 4.60144C14.2393 4.62174 14.2531 4.64503 14.2696 4.66737C14.2814 4.68426 14.2973 4.69897 14.307 4.71723C14.3228 4.74529 14.3317 4.77485 14.3429 4.8044C14.3484 4.82048 14.358 4.8352 14.3622 4.85209C14.3749 4.8999 14.3814 4.94935 14.3816 4.99892V19.4371L19.9123 16.1988V8.81791C19.9123 8.76888 19.9192 8.71888 19.9317 8.67189C19.9365 8.65499 19.9455 8.64029 19.951 8.62421C19.9621 8.59466 19.9717 8.56427 19.9869 8.53704C19.9972 8.51878 20.0123 8.50407 20.0243 8.48718C20.0407 8.4647 20.0545 8.44154 20.0738 8.42179C20.0899 8.40572 20.1099 8.39373 20.1278 8.3797C20.1486 8.36281 20.1665 8.34456 20.1886 8.33121L26.8272 4.44547C26.9112 4.39622 27.0065 4.3703 27.1035 4.3703C27.2004 4.3703 27.2957 4.39622 27.3797 4.44547L34.0169 8.33121C34.0404 8.34524 34.0583 8.36281 34.0791 8.37888C34.0962 8.39305 34.1163 8.40572 34.1323 8.42111C34.1516 8.44154 34.1654 8.4647 34.1818 8.48718C34.1944 8.50407 34.2096 8.51878 34.2194 8.53704C34.2352 8.56427 34.2441 8.59466 34.2551 8.62421C34.2614 8.64029 34.2704 8.65499 34.2745 8.67189ZM33.1875 16.199V9.79133L30.8647 11.1509L27.656 13.0296V19.4372L33.1875 16.199ZM26.5503 27.7904V21.3782L23.3939 23.2113L14.3809 28.4421V34.9143L26.5503 27.7904ZM1.10638 5.97152V27.7904L13.2744 34.9137V28.4428L6.91771 24.7845L6.9157 24.7831L6.91302 24.7817C6.89159 24.7691 6.8735 24.7509 6.85354 24.7355C6.83613 24.7213 6.81617 24.7101 6.80103 24.6945L6.79969 24.6925C6.78174 24.6749 6.76928 24.6532 6.75414 24.6335C6.74021 24.6145 6.72374 24.5984 6.71262 24.5788L6.71195 24.5766C6.69949 24.5556 6.69185 24.5303 6.68288 24.5065C6.6739 24.4853 6.66225 24.4656 6.65662 24.4432C6.64979 24.4166 6.64845 24.3877 6.64564 24.3603C6.64296 24.3394 6.63733 24.3182 6.63733 24.2971V9.20994L3.42912 7.33042L1.10638 5.97152ZM7.19112 1.76199L1.66097 4.99892L7.18978 8.23572L12.7191 4.99811L7.18978 1.76199H7.19112ZM10.067 21.9627L13.2751 20.0848V5.97152L10.9526 7.33124L7.74358 9.20981V23.323L10.067 21.9627ZM27.1034 5.5818L21.574 8.81859L27.1034 12.0555L32.6321 8.81791L27.1034 5.5818ZM26.5501 13.0296L23.3414 11.1509L21.0188 9.79133V16.199L24.2269 18.077L26.5503 19.4372L26.5501 13.0296ZM13.827 27.4695L21.9373 22.7613L25.9915 20.4085L20.4662 17.1738L14.1045 20.8979L8.30648 24.2922L13.827 27.4695Z"
                        fill="#DC3545"/>
            </svg>

            <span>
                    Still Have Questions?
                </span>
        </h3>

        <div class="faq__title">
            <h2
                    class="section__title fs-3 fw-bold text-hea text-center mt-3 mt-lg-5 pt-2 pt-lg-3 mb-2 mb-lg-3 bottom-to-top-anim">
                Common Questions
            </h2>
            <p>Everything you need to know about the free consultation and my services</p>
        </div>

        <div class="faq__wrapper position-relative">

            <div class="faq__content mb-4 mb-lg-5">
                <div class="accordion faq" id="accordionExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header ">
                            <button class="accordion-button fs-5 text-secondary fw-bold" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true"
                                    aria-controls="collapseOne">
                                What happens during the free 60-minute audit?
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse show"
                             data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p>
                                    It's a focused session where we discuss your Laravel application's pain points (performance, bugs, outdated code, etc.). You can share your screen, show specific code snippets, or describe the issues. I'll provide initial analysis, identify potential root causes, and suggest actionable steps you can take. You'll leave with valuable insights, whether you decide to hire me or not.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button fs-5 text-secondary fw-bold collapsed" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false"
                                    aria-controls="collapseTwo">
                                Do I need to give you access to my code for the free audit?
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse"
                             data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p>
                                    No, full access is not required for the initial 60-minute audit. You can share specific code snippets via screenshare or describe the problems you're facing. If we decide to work together on a larger project, we can discuss secure access methods then, often via a temporary, read-only account on your Git repository.
                                </p>
                            </div>
                        </div>
                    </div>


                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button fs-5 text-secondary fw-bold collapsed" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false"
                                    aria-controls="collapseThree">
                                What kind of Laravel problems can you help with?
                            </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse"
                             data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p>
                                    I specialize in tackling common Laravel issues like slow performance (database queries, N+1 problems, caching), upgrading older Laravel/PHP versions, fixing complex bugs, improving application architecture for maintainability, implementing automated tests, enhancing security, and updating outdated dependencies safely.
                                </p>
                            </div>
                        </div>
                    </div>


                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button fs-5 text-secondary fw-bold collapsed" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false"
                                    aria-controls="collapseFour">
                                How much do your services cost after the free audit?
                            </button>
                        </h2>
                        <div id="collapseFour" class="accordion-collapse collapse"
                             data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p>
                                    Pricing depends on the project scope and complexity. After the free audit, if you're interested in proceeding, we'll discuss your specific needs and I can provide a detailed proposal with clear deliverables and pricing options (e.g., hourly rate, fixed project fee, or retainer).
                                </p>
                            </div>
                        </div>
                    </div>


                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button fs-5 text-secondary fw-bold collapsed" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false"
                                    aria-controls="collapseFive">
                                Do you work with teams or just solo developers?
                            </button>
                        </h2>
                        <div id="collapseFive" class="accordion-collapse collapse"
                             data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p>
                                    I work with both! I can augment existing development teams by providing specialized Laravel expertise, help train your team on best practices, or take on specific refactoring/optimization tasks. I also work directly with businesses or solo developers who need dedicated help improving their Laravel applications.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button fs-5 text-secondary fw-bold collapsed" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false"
                                    aria-controls="collapseSix">
                                What is the "Help Me Now" service and how does it differ from the free audit?
                            </button>
                        </h2>
                        <div id="collapseSix" class="accordion-collapse collapse"
                             data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p>
                                    The "Help Me Now" service is a **paid, 1-hour priority consultation session** designed for urgent issues that require immediate attention. It costs $120 USD and allows you to book a dedicated slot quickly on my Google Calendar booking page for in-depth troubleshooting or guidance.
                                </p>
                                <p class="mt-2">
                                    The free audit is a 60-minute introductory call to discuss your application's general health, identify potential areas for improvement, and see if we're a good fit to work together on larger tasks. It doesn't guarantee immediate problem-solving for urgent situations like the "Help Me Now" session does.
                                </p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <div class="faq__bottom text-center">
                <div class="cardBox d-sm-flex">
                    <div class="cardBox__content">
                        <p>Have more questions or ready to start?</p>
                    </div>
                    <a href="{{ config('config.booking_url') }}" target="_blank" rel="noopener" onclick="bookConsultation(); return false;" class="btn btn-main btn--sm mt-3 mt-sm-0">
                        Book a Free Call
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
    <!-- ========= Faq Section End ========== -->

    <!-- ========= News letter Section Start ========== -->
    <section class="section newsletter newsletter--section bg-primary ">
        <div class="container">
            <h3
                    class="section__subtitle fw-semibold mx-auto position-relative d-flex align-items-center justify-content-center  mx-auto fs-4 text-primary bg-white animated-border">

                <div class="border-effect"></div>
                <svg xmlns="http://www.w3.org/2000/svg" width="35" height="37" viewBox="0 0 35 37" fill="none">
                    <path
                            d="M34.2745 8.67189C34.2873 8.7197 34.2938 8.76901 34.2938 8.81859V16.5241C34.2938 16.7255 34.188 16.9114 34.0161 17.0115L27.6561 20.7353V28.1155C27.6561 28.2143 27.6306 28.3114 27.5821 28.3969C27.5337 28.4824 27.4639 28.5536 27.3799 28.6031L14.1033 36.3747C14.0729 36.3921 14.0398 36.4033 14.0066 36.4154C13.9942 36.4195 13.9825 36.4272 13.9694 36.4308C13.8766 36.4556 13.779 36.4556 13.6862 36.4308C13.6709 36.4267 13.6571 36.4181 13.6427 36.4126C13.6122 36.4012 13.5805 36.3915 13.5516 36.3747L0.2777 28.6029C0.19335 28.5537 0.123262 28.4827 0.0745061 28.3972C0.0257499 28.3116 5.028e-05 28.2144 0 28.1155V4.99892C0 4.94825 0.00696594 4.89908 0.0192903 4.8514C0.0234431 4.8352 0.0330882 4.82048 0.0387145 4.80427C0.0490295 4.77485 0.0588086 4.7446 0.0739461 4.71723C0.084261 4.69897 0.0993985 4.68426 0.111857 4.66737C0.127798 4.64489 0.142266 4.62174 0.160886 4.60199C0.176828 4.58592 0.197591 4.57393 0.215542 4.5599C0.235636 4.54301 0.253453 4.52475 0.276226 4.5114L6.91409 0.625668C6.99814 0.576484 7.09341 0.550598 7.19039 0.550598C7.28736 0.550598 7.38263 0.576484 7.46668 0.625668L14.1039 4.5114H14.1052C14.1273 4.52557 14.1461 4.54301 14.166 4.55921C14.184 4.57324 14.2041 4.58592 14.2199 4.60144C14.2393 4.62174 14.2531 4.64503 14.2696 4.66737C14.2814 4.68426 14.2973 4.69897 14.307 4.71723C14.3228 4.74529 14.3317 4.77485 14.3429 4.8044C14.3484 4.82048 14.358 4.8352 14.3622 4.85209C14.3749 4.8999 14.3814 4.94935 14.3816 4.99892V19.4371L19.9123 16.1988V8.81791C19.9123 8.76888 19.9192 8.71888 19.9317 8.67189C19.9365 8.65499 19.9455 8.64029 19.951 8.62421C19.9621 8.59466 19.9717 8.56427 19.9869 8.53704C19.9972 8.51878 20.0123 8.50407 20.0243 8.48718C20.0407 8.4647 20.0545 8.44154 20.0738 8.42179C20.0899 8.40572 20.1099 8.39373 20.1278 8.3797C20.1486 8.36281 20.1665 8.34456 20.1886 8.33121L26.8272 4.44547C26.9112 4.39622 27.0065 4.3703 27.1035 4.3703C27.2004 4.3703 27.2957 4.39622 27.3797 4.44547L34.0169 8.33121C34.0404 8.34524 34.0583 8.36281 34.0791 8.37888C34.0962 8.39305 34.1163 8.40572 34.1323 8.42111C34.1516 8.44154 34.1654 8.4647 34.1818 8.48718C34.1944 8.50407 34.2096 8.51878 34.2194 8.53704C34.2352 8.56427 34.2441 8.59466 34.2551 8.62421C34.2614 8.64029 34.2704 8.65499 34.2745 8.67189ZM33.1875 16.199V9.79133L30.8647 11.1509L27.656 13.0296V19.4372L33.1875 16.199ZM26.5503 27.7904V21.3782L23.3939 23.2113L14.3809 28.4421V34.9143L26.5503 27.7904ZM1.10638 5.97152V27.7904L13.2744 34.9137V28.4428L6.91771 24.7845L6.9157 24.7831L6.91302 24.7817C6.89159 24.7691 6.8735 24.7509 6.85354 24.7355C6.83613 24.7213 6.81617 24.7101 6.80103 24.6945L6.79969 24.6925C6.78174 24.6749 6.76928 24.6532 6.75414 24.6335C6.74021 24.6145 6.72374 24.5984 6.71262 24.5788L6.71195 24.5766C6.69949 24.5556 6.69185 24.5303 6.68288 24.5065C6.6739 24.4853 6.66225 24.4656 6.65662 24.4432C6.64979 24.4166 6.64845 24.3877 6.64564 24.3603C6.64296 24.3394 6.63733 24.3182 6.63733 24.2971V9.20994L3.42912 7.33042L1.10638 5.97152ZM7.19112 1.76199L1.66097 4.99892L7.18978 8.23572L12.7191 4.99811L7.18978 1.76199H7.19112ZM10.067 21.9627L13.2751 20.0848V5.97152L10.9526 7.33124L7.74358 9.20981V23.323L10.067 21.9627ZM27.1034 5.5818L21.574 8.81859L27.1034 12.0555L32.6321 8.81791L27.1034 5.5818ZM26.5501 13.0296L23.3414 11.1509L21.0188 9.79133V16.199L24.2269 18.077L26.5503 19.4372L26.5501 13.0296ZM13.827 27.4695L21.9373 22.7613L25.9915 20.4085L20.4662 17.1738L14.1045 20.8979L8.30648 24.2922L13.827 27.4695Z"
                            fill="#DC3545"/>
                </svg>

                <span>
                        Ready to Get Started?
                    </span>
            </h3>

            <div class="newsletter__wrapper position-relative">
                <img src="assets/img/icons-img/newsletter-obj.svg" class="newsletter-obj-1 position-absolute"
                     alt="">
                <img src="assets/img/icons-img/newsletter-obj.svg" class="newsletter-obj-2 position-absolute"
                     alt="">
                <div class="newsletter__content text-center">
                    <h2 class="bottom-to-top-anim">Is your application plagued by...</h2>
                    <p class="fs-5 text-secondary fw-medium" style="min-height: 1.5em;"><span id="common-problems"></span></p>
                    <a href="#schedule" class="btn btn-main mt-3">Get Your Free Laravel Audit</a>
                </div>
            </div>
        </div>
    </section>
    <!-- ========= News letter Section End ========== -->

</main>
<!-- ====== Main Area End ======= -->


<!-- ========= Footer Section Start ========== -->
<footer class="footer footer--section">
    {{--<div class="footer__top">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 mt-lg-0">
                    <div class="footer__widget">
                        <h4>Quick Links</h4>
                        <ul class="footer__menu">
                            <li>
                                <a href="">Schedule Consultation</a>
                            </li>
                            <li>
                                <a href="">Hire My Services</a>
                            </li>
                            <li>
                                <a href="">View Success Stories</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6  mt-4 mt-lg-0">
                    <div class="footer__widget">
                        <h4>Services</h4>
                        <ul class="footer__menu">
                            <li>
                                <a href="">Code Audit</a>
                            </li>
                            <li>
                                <a href="">Performance Optimization</a>
                            </li>
                            <li>
                                <a href="">Architecture Review</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6  mt-4 mt-lg-0">
                    <div class="footer__widget">
                        <h4>Connect</h4>
                        <ul class="footer__menu">
                            <li>
                                <a href="">hello@example.com</a>
                            </li>
                            <li>
                                <a href="">GitHub</a>
                            </li>
                            <li>
                                <a href="">Twitter</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mt-4 mt-lg-0">
                    <div class="footer__widget">
                        <h4>Newsletter</h4>
                        <div class="footer__newsletter">
                            <p>Get Laravel tips and insights directly to your inbox</p>
                            <form action="">
                                <input type="text" placeholder="Enter your email">
                                <button type="submit" class="submit" data-toggle="tooltip" data-placement="top"
                                        title="Send">
                                    <svg width="23" height="18" viewBox="0 0 23 18" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path d="M1 9L8.875 17L22 1" stroke="#F8F9FA" stroke-width="2"
                                              stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>

                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>--}}
    <div class="footer__bottom">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div
                            class="d-sm-flex align-items-center justify-content-between text-center text-md-start">
                        <p>© {{date('Y')}} LaravelHelp. All rights reserved.</p>
                        {{--<ul
                                class="footer__bottom-menu mt-1 mt-lg-0 d-flex align-items-center justify-content-center justify-content-md-start">
                            <li><a href="">Privacy Policy</a></li>
                            <li><a href="">Terms of Service</a></li>
                        </ul>--}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- ========= Footer Section End ========== -->


<!-- ============  Vertically centered modal ==============-->

<x-modal-help-me-now/>


<!-- Google Calendar booking page - fires Google Ads conversion on click -->
<script>
function bookConsultation() {
    if (typeof gtag === 'function') {
        gtag('event', 'conversion', {
            'send_to': 'AW-799679405/2NUBCMPYrdgbEK3HqP0C',
            'value': 1.0,
            'currency': 'COP'
        });
    }
    window.open('{{ config('config.booking_url') }}', '_blank', 'noopener');
}
</script>

<script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
<script src="assets/js/bootstrap.bundle.min.js"></script>
<script src="assets/js/jquery.waypoints.min.js"></script>
<script src="assets/js/swiper-bundle.min.js"></script>
<script src="assets/js/script.js"></script>
<script src="assets/js/plugin.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js"
        integrity="sha512-7eHRwcbYkK4d9g/6tD/mhkf++eoTHwpNM9woBxtPUBWm67zeAfFC+HrdoE2GanKeocly/VxeLvIqwvCdk7qScg=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/ScrollTrigger.min.js"
        integrity="sha512-onMTRKJBKz8M1TnqqDuGBlowlH0ohFzMXYRNebz+yOcc5TQr/zAKsthzhuv0hiyUKEiQEQXEynnXCvNTOk50dg=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<!-- Odometer -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/odometer.js/0.4.8/odometer.min.js"></script>

<!-- <script src="assets/js/split-type.js"></script> -->
<script src="assets/js/mygsap.js"></script>

<!-- Typed.js CDN -->
<script src="https://unpkg.com/typed.js@2.1.0/dist/typed.umd.js"></script>

{{-- Typed.js Initialization --}}
<script>
    document.addEventListener('DOMContentLoaded', () => {
        // --- Typed.js Initialization ---
        const problems = [
            "Slow database queries?",
            "N+1 Issues?",
            "Outdated dependencies?",
            "Messy architecture?",
            "A lack of tests?",
            "Security vulnerabilities?",
            "High server costs?"
        ];
        const typedElement = document.getElementById('common-problems');
        if (typedElement) {
            try {
                new Typed('#common-problems', {
                    strings: problems,
                    typeSpeed: 50,
                    backSpeed: 30,
                    backDelay: 1500,
                    startDelay: 500,
                    loop: true,
                    showCursor: true,
                    cursorChar: '|',
                });
            } catch (e) { console.error("Error initializing Typed.js:", e); }
        } else { console.warn("Typed.js target element '#common-problems' not found."); }
    });
</script>

</body>

</html>
