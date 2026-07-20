<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <title>Privacy Policy - LaravelHelp</title>


    <!-- === CSS CDNs & StyleSheets === -->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.5.0/fonts/remixicon.css" rel="stylesheet"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/odometer.js/0.4.8/themes/odometer-theme-default.min.css"/>

    {{-- Pointing to assets from the public directory --}}
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}"/>
    <link rel="stylesheet" href="{{ asset('assets/css/swiper-bundle.min.css') }}"/>
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}"/>
    <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}"/>
    <style>
        /* Add some padding for content clarity */
        .content-section {
            padding-top: 120px; /* Adjust as needed based on header height */
            padding-bottom: 60px;
        }
        .content-section h2 {
            margin-bottom: 1.5rem;
            color: var(--color-secondary); /* Match theme heading color if available */
        }
         .content-section h3 {
            margin-top: 2rem;
            margin-bottom: 1rem;
            color: var(--color-secondary);
            font-size: 1.25rem;
        }
         .content-section p, .content-section li {
             color: var(--color-text-secondary); /* Match theme text color */
             line-height: 1.7;
         }
         .content-section ul {
            list-style: disc;
            padding-left: 20px;
         }
    </style>
</head>

<body>

{{-- Reusing Header Structure --}}
<header class="header sticky-header">
    <div class="container">
        <div class="header__wrapper d-flex align-items-center justify-content-between">
            <div class="header__logo">
                <a href="{{ url('/') }}#home">
                    <img src="{{ asset('assets/img/logo/logo.png') }}" alt="logo"/>
                </a>
            </div>
            <div class="header__end d-flex align-items-center justify-content-center">
                <div class="header__nav d-none d-xl-block">
                     <ul class="d-flex gap-4 mx-auto header__nav-menu">
                        <li><a class="p-3" href="{{ url('/') }}#home">Home</a></li>
                        <li><a class="p-3" href="{{ url('/') }}#problems">Problems</a></li>
                        <li><a class="p-3" href="{{ url('/') }}#benefits">Benefits</a></li>
                        <li><a class="p-3" href="{{ url('/') }}#about">About Us</a></li>
                        <li><a class="p-3" href="{{ url('/') }}#schedule">Schedule</a></li>
                        <li><a class="p-3" href="{{ url('/') }}#contact">FAQ</a></li>
                    </ul>
                </div>
            </div>
             <div class="header__links d-flex align-items-center">
                <button type="button"
                        class="btn btn-main btn-header d-none d-xl-inline-block fs-16"
                        data-bs-toggle="modal"
                        data-bs-target="#modal-help-me-now">
                    Help me NOW!
                </button>
                <button type="button" class="header__menuBar d-xl-none" type="button" data-bs-toggle="offcanvas"
                        data-bs-target="#offcanvasExample" aria-controls="offcanvasExample">
                    <i class="ri-menu-2-line"></i>
                </button>
            </div>
        </div>
    </div>
</header>
{{-- Offcanvas Structure (Optional but good for consistency) --}}
<div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
    <div class="offcanvas-header">
         <div class="ofcanvus__logo">
             <a href="{{ url('/') }}#home"><img src="{{ asset('assets/img/logo/logo.png') }}" alt=""></a>
         </div>
         <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
     </div>
     <div class="offcanvas-body flex-column d-flex justify-content-between">
         <div class="offcanvas__menu w-100">
             <div class="offcanvas__nav w-100 mb-5">
                 <ul>
                    <li><a href="{{ url('/') }}#home">Home</a></li>
                    <li><a href="{{ url('/') }}#problems">Problems</a></li>
                    <li><a href="{{ url('/') }}#benefits">Benefits</a></li>
                    <li><a href="{{ url('/') }}#about">About Us</a></li>
                    <li><a href="{{ url('/') }}#schedule">Schedule</a></li>
                    <li><a href="{{ url('/') }}#contact">FAQ</a></li>
                 </ul>
             </div>
         </div>
         <div class="d-block w-100 offcanvas__bottom">
             <button type="button" class="btn btn-main w-100" data-bs-toggle="modal" data-bs-target="#modal-help-me-now">
                 Help me NOW!
             </button>
         </div>
     </div>
</div>

<!-- ====== Main Content Area Start ======= -->
<main class="content-section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <h2 class="text-center fw-bold">Privacy Policy</h2>
                <p class="text-center text-muted mb-5">Last updated: {{ date('F j, Y') }}</p>

                <p>Welcome to LaravelHelp. Your privacy is critically important to us. This Privacy Policy document outlines the types of personal information that is received and collected by LaravelHelp and how it is used.</p>

                <h3>1. Information We Collect</h3>
                <ul>
                    <li><strong>Personal Information:</strong> When you schedule a consultation, use our contact forms, or sign up for our newsletter, we may collect personally identifiable information, such as your name, email address, and potentially company name or project details you provide.</li>
                    <li><strong>Usage Data:</strong> We may collect information on how the Service is accessed and used ("Usage Data"). This Usage Data may include information such as your computer's Internet Protocol address (e.g., IP address), browser type, browser version, the pages of our Service that you visit, the time and date of your visit, the time spent on those pages, unique device identifiers, and other diagnostic data.</li>
                    <li><strong>Cookies and Tracking Technologies:</strong> We use cookies and similar tracking technologies to track the activity on our Service and hold certain information. You can instruct your browser to refuse all cookies or to indicate when a cookie is being sent.</li>
                </ul>

                <h3>2. How We Use Your Information</h3>
                <ul>
                    <li>To provide and maintain our Service (e.g., scheduling consultations via Google Calendar).</li>
                    <li>To notify you about changes to our Service.</li>
                    <li>To provide customer support.</li>
                    <li>To gather analysis or valuable information so that we can improve our Service.</li>
                    <li>To monitor the usage of our Service.</li>
                    <li>To detect, prevent and address technical issues.</li>
                    <li>To send you newsletters, marketing or promotional materials, and other information that may be of interest to you (if you opt-in).</li>
                </ul>

                 <h3>3. Data Sharing and Disclosure</h3>
                 <p>We do not sell, trade, or otherwise transfer your personally identifiable information to outside parties except under the following circumstances:</p>
                 <ul>
                    <li><strong>Service Providers:</strong> We may employ third-party companies and individuals (like Google Calendar for scheduling, Google Analytics for usage data, email providers) to facilitate our Service, provide the Service on our behalf, or assist us in analyzing how our Service is used. These third parties have access to your Personal Information only to perform these tasks on our behalf and are obligated not to disclose or use it for any other purpose.</li>
                    <li><strong>Legal Requirements:</strong> We may disclose your Personal Information if required to do so by law or in response to valid requests by public authorities.</li>
                 </ul>
                
                 <h3>4. Data Security</h3>
                 <p>The security of your data is important to us but remember that no method of transmission over the Internet or method of electronic storage is 100% secure. While we strive to use commercially acceptable means to protect your Personal Information, we cannot guarantee its absolute security.</p>

                 <h3>5. Your Data Protection Rights</h3>
                 <p>Depending on your location, you may have the following rights regarding your personal information:</p>
                 <ul>
                    <li>The right to access – You have the right to request copies of your personal data.</li>
                    <li>The right to rectification – You have the right to request that we correct any information you believe is inaccurate or complete information you believe is incomplete.</li>
                    <li>The right to erasure – You have the right to request that we erase your personal data, under certain conditions.</li>
                    <li>The right to restrict processing – You have the right to request that we restrict the processing of your personal data, under certain conditions.</li>
                    <li>The right to object to processing – You have the right to object to our processing of your personal data, under certain conditions.</li>
                    <li>The right to data portability – You have the right to request that we transfer the data that we have collected to another organization, or directly to you, under certain conditions.</li>
                 </ul>
                 <p>If you make a request, we have one month to respond to you. If you would like to exercise any of these rights, please contact us.</p>

                <h3>6. Third-Party Links</h3>
                <p>Our Service may contain links to other sites that are not operated by us (e.g., Google Calendar). If you click on a third-party link, you will be directed to that third party's site. We strongly advise you to review the Privacy Policy of every site you visit. We have no control over and assume no responsibility for the content, privacy policies, or practices of any third-party sites or services.</p>

                <h3>7. Children's Privacy</h3>
                <p>Our Service does not address anyone under the age of 18 ("Children"). We do not knowingly collect personally identifiable information from anyone under the age of 18. If you are a parent or guardian and you are aware that your Child has provided us with Personal Data, please contact us. If we become aware that we have collected Personal Data from children without verification of parental consent, we take steps to remove that information from our servers.</p>

                <h3>8. Changes to This Privacy Policy</h3>
                <p>We may update our Privacy Policy from time to time. We will notify you of any changes by posting the new Privacy Policy on this page. You are advised to review this Privacy Policy periodically for any changes. Changes to this Privacy Policy are effective when they are posted on this page.</p>

                <h3>9. Contact Us</h3>
                <p>If you have any questions about this Privacy Policy, please contact us:</p>
                <ul>
                    <li>By email: [Your Contact Email Address Here - e.g., privacy@laravelhelp.com]</li>
                    {{-- Or add other contact methods --}}
                </ul>

            </div>
        </div>
    </div>
</main>
<!-- ====== Main Content Area End ======= -->

{{-- Reusing Footer Structure --}}
<footer class="footer footer--section">
    <div class="footer__top">
        <div class="container">
             <div class="row">
                 <div class="col-lg-3 col-md-6 mt-lg-0">
                     <div class="footer__widget">
                         <h4>Quick Links</h4>
                         <ul class="footer__menu">
                             <li>
                                 <a href="{{ config('config.booking_url') }}" target="_blank" rel="noopener">Schedule Consultation</a>
                             </li>
                             <li>
                                 <a href="{{ config('config.booking_url') }}" target="_blank" rel="noopener">Hire My Services</a>
                             </li>
                             <li>
                                 <a href="{{ url('/') }}#testimonials">View Success Stories</a> {{-- Assuming testimonials have an ID or are part of a section --}}
                             </li>
                         </ul>
                     </div>
                 </div>
                 <div class="col-lg-3 col-md-6  mt-4 mt-lg-0">
                    <div class="footer__widget">
                        <h4>Services</h4>
                        <ul class="footer__menu">
                            <li>
                                <a href="{{ url('/') }}#benefits">Code Audit</a>
                            </li>
                            <li>
                                <a href="{{ url('/') }}#problems">Performance Optimization</a>
                            </li>
                            <li>
                                <a href="{{ url('/') }}#about">Architecture Review</a>
                            </li>
                        </ul>
                    </div>
                </div>
                 <div class="col-lg-3 col-md-6  mt-4 mt-lg-0">
                     <div class="footer__widget">
                         <h4>Connect</h4>
                         <ul class="footer__menu">
                             <li>
                                 <a href="mailto:[Your Contact Email Address Here]">[Your Contact Email Address Here]</a>
                             </li>
                             <li>
                                 <a href="#">GitHub</a> {{-- Add your GitHub link --}}
                             </li>
                             <li>
                                 <a href="#">Twitter</a> {{-- Add your Twitter link --}}
                             </li>
                         </ul>
                     </div>
                 </div>
                 <div class="col-lg-3 col-md-6 mt-4 mt-lg-0">
                     <div class="footer__widget">
                         <h4>Newsletter</h4>
                         <div class="footer__newsletter">
                             <p>Get Laravel tips and insights directly to your inbox</p>
                             <form action=""> {{-- Add your newsletter form action --}}
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
     </div>
    <div class="footer__bottom">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div
                            class="footer__bottom-wrapper d-sm-flex align-items-center justify-content-between text-center text-md-start">
                        <p>© {{ date('Y') }} LaravelHelp. All rights reserved.</p> {{-- Dynamic year --}}
                        <ul
                                class="footer__bottom-menu mt-1 mt-lg-0 d-flex align-items-center justify-content-center justify-content-md-start">
                            <li><a href="{{ url('/privacy-policy') }}">Privacy Policy</a></li>
                            <li><a href="{{ url('/terms-of-service') }}">Terms of Service</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

{{-- Include Modals used in header/offcanvas --}}
<x-modal-help-me-now/>

{{-- Include JS --}}
<script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
<script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery.waypoints.min.js') }}"></script>
<script src="{{ asset('assets/js/swiper-bundle.min.js') }}"></script>
<script src="{{ asset('assets/js/script.js') }}"></script>
<script src="{{ asset('assets/js/plugin.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/ScrollTrigger.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/odometer.js/0.4.8/odometer.min.js"></script>

{{-- No Livewire or Typed.js needed on this static page --}}

</body>
</html> 