 <!-- preloader -->

 {{-- <div id="preloader">
            <div id="loading-center">
                <div class="loader">
                    <div class="loader-outter"></div>
                    <div class="loader-inner"></div>
                </div>
            </div>
        </div> --}}
 <!-- preloader-end -->

 {{-- Right sidebar --}}


 <!--<nav class="social">-->
 <!--    <ul>-->
 <!--        <li><a target="_blank" href="ref"><b>ERP Login</b> <i class="fa fa-sign-in" aria-hidden="true"></i> </a></li>-->
 <!--        <li><a target="_blank" href="tel:+8801790700404"><i class="fa fa-phone"></i><b>+88 01790 700 404</b></a></li>-->
 <!--        <li><a target="_blank" href="mailto:info@audit.com.bd">-->
 <!--                <i class="fa fa-envelope-o" aria-hidden="true"></i>-->
 <!--                <b>info@audit.com.bd</b></a></li>-->
 <!--        <li><a target="_blank" href="ref"><i class="fa fa-users" aria-hidden="true"></i><b> Apply Now</b></a></li>-->
 <!--        <li><a target="_blank" href="http://tax.aaconsultingtech.com"><i class="fa fa-calculator" aria-hidden="true"></i><b>Tax Calculator-->
 <!--                </b></a></li>-->
 <!--    </ul>-->
 <!--</nav>-->

 <nav class="social">
     <ul>
         <li class="twitter">
             <a target="_blank" href="http://103.84.36.211/myWeb01/CoronaLive"><b>Member's Login</b> <i
                     class="fa fa-sign-in" aria-hidden="true"></i> &nbsp;
                 &nbsp; </a>
         </li>
         <li class="facebook">
             <a target="_blank" href="tel:+8801790700404"><b>+88 01790700404</b> <i class="fa fa-phone"></i></a>
             &nbsp; &nbsp;
         </li>
         <li class="google-plus">
             <a target="_blank" href="mailto:info@audit.com.bd"><b>info@audit.com.bd</b> <i class="fa fa-envelope-o"
                     aria-hidden="true"></i></a>
             &nbsp; &nbsp;
         </li>
         <li class="instagram">
             <a target="_blank" href="{{ url('/professional') }}"><b> Apply Now</b> <i class="fa fa-users" aria-hidden="true"></i></a>
             &nbsp; &nbsp;
         </li>
         <li class="instagram">
             <a target="_blank" href="http://tax.aaconsultingtech.com"><b>Tax Calculator</b> <i class="fa fa-calculator"
                     aria-hidden="true"></i></a>
             &nbsp; &nbsp;
         </li>

         <li class="instagram">
             <a href="{{ url('faqs') }}"><b>FAQs</b> <i class="fa fa-question" aria-hidden="true"></i></a>
             &nbsp; &nbsp;
         </li>

     </ul>
 </nav>



 {{-- whatsapp --}}

 <div class="whatsapp">
     <a target="_blank" href="https://wa.link/ekaudu"><i class="fa-brands fa-whatsapp"></i></a>
 </div>
 <div class="chatbot">
     <a href=""><img src="{{ asset('frontend/assets/images/chatbot.jpg') }}" alt="chatbot"></a>
 </div>
 <!-- Scroll-top -->
 <button class="scroll-top scroll-to-target" data-target="html">
     <i class="fas fa-angle-up"></i>
 </button>

 <!-- Scroll-top-end-->

 <!-- header-area -->
 <section id="sticky-header" class="transparent-heade header-style-two">
     <div class="container custom-container">
         <div class="heder-top-wrap">
             <div class="row align-items-center">
                 <div class="col-lg-7">
                     <div class="header-top-left">
                         <ul class="list-wrap">

                             <li><i class="flaticon-mail"></i><a
                                     href="mailto:
                                        info@audit.com.bd ">
                                     {{ $setting->email }} </a></li>
                             <li class="header-contact-two">
                                 <div class="icon">
                                     <i class="flaticon-phone-call text-white"></i>
                                 </div>
                                 <div class="content text-white">
                                     <a href="tel:+8801790700404"> <span class="text-white">Hot Line:
                                             {{ $setting->phone }}</span> </a>

                                 </div>
                             </li>
                         </ul>
                     </div>
                 </div>
                 <div class="col-xl-5 col-lg-5 col-md-5 ">
                     <div class="header-top-right">
                         <div class="header-social">
                             <ul class="list-wrap">
                                 <li><a href="{{ $setting->facebook }} "><i class="fab fa-facebook-f"></i></a></li>
                                 <li><a href="{{ $setting->twitter }}"><i class="fab fa-twitter"></i></a></li>
                                 <li><a href="{{ $setting->linkedin }}"><i class="fab fa-linkedin-in"></i></a></li>
                                 <li><a href="{{ $setting->googleplus }}"><i class="fa-brands fa-google-plus-g"></i></a>
                                 </li>

                             </ul>
                         </div>
                         <div class="header-top-btn headertop_border">
                             <a target="_blank" href="http://tax.aaconsultingtech.com/"><i class="fa fa-calculator"
                                     aria-hidden="true"></i>Tax Calculator</a>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
         <div class="menu-area">
             <div class="row">
                 <div class="col-12">
                     <div class="mobile-nav-toggler"><i class="fas fa-bars"></i></div>
                     <div class="menu-wrap">
                         <nav class="menu-nav">
                             <div class="logo">
                                 <a href="{{ url('/') }}"><img
                                         src="{{ asset('backendsite/images/' . $setting->logo) }}" alt="Logo"></a>
                             </div>
                             <div class="navbar-wrap main-menu d-none d-lg-flex">
                                 <ul class="navigation">
                                     <li class="{{ request()->routeIs('/') }} "><a
                                             href="{{ url('/') }}">Home</a>
                                     </li>
                                     <li class="menu-item-has-children"><a href="#">About Us</a>
                                         <ul class="sub-menu mega-menu">
                                             <li>
                                                 <ul class="mega-sub-menu">
                                                     <li class="{{ request()->routeIs('company-profile') }}"><a
                                                             href="{{ url('company-profile') }}">Company Profile</a>
                                                     </li>
                                                     <li class="{{ request()->routeIs('meet-our-team') }}"> <a
                                                             href="{{ url('meet-our-team') }}">Meet Our Team</a></li>
                                                     <li> <a href="{{ url('affiliation') }}">Affiliation</a></li>
                                                     <li> <a href="{{ url('enlistment') }}">Enlistment</a></li>
                                                     <li> <a href="{{ url('membership') }}">Membership</a></li>
                                                     <li> <a href="{{ url('standards') }}">Standards </a></li>
                                                 </ul>
                                             </li>
                                             <li>
                                                 <ul class="mega-sub-menu">
                                                     <h3> About us</h3>
                                                     <p>We are passionate about our philosopy</p>
                                                     <li>

                                                 </ul>
                                             </li>
                                         </ul>
                                     </li>
                                     <li class="menu-item-has-children"><a href="#"> Services</a>
                                         <ul class="sub-menu mega-menu">
                                             <li>
                                                 <ul class="mega-sub-menu">
                                                     <li class="active"><a href="{{ url('audit-assurance') }}">Audit
                                                             &
                                                             Assurance</a></li>
                                                     <li> <a href="{{ url('taxation-vat') }}">Taxation & VAT</a></li>
                                                     <li> <a href="{{ url('advisory') }}">Advisory</a></li>
                                                     <li> <a href="{{ url('secretarial-licensing-compliance') }}">Secretarial,
                                                             licensing & compliance</a></li>
                                                     <li> <a href="{{ url('business-service') }}">Business
                                                             Services</a>
                                                     </li>
                                                     <li> <a href="{{ url('human-resource-services') }}">Human
                                                             Resources & others Services</a></li>

                                                     <li> <a href="{{ url('training-development') }}">Training &
                                                             Development</a>
                                                     </li>
                                                     <li> <a href="{{ url('actuarial') }}">
                                                        IAK Actuarial Service </a>
                                                     </li>
                                                     <li> <a href="{{ url('ipr') }}">IPR Service</a>
                                                     </li>
                                                 </ul>
                                             </li>
                                             <li>
                                                 <ul class="mega-sub-menu">
                                                     <h3>Our Services</h3>
                                                     <li>
                                                 </ul>
                                             </li>
                                         </ul>
                                     </li>
                                     <li class="menu-item-has-children"><a href="#">Client</a>
                                         <ul class="sub-menu mega-menu">
                                             <li>
                                                 <ul class="mega-sub-menu">
                                                     <li class="active"><a
                                                             href="{{ url('financial-institutions') }}">Financial
                                                             Institutions</a></li>
                                                     <li><a href="{{ url('listed-companies') }}"> Govt./Semi-Govt.
                                                         </a>
                                                     </li>
                                                     <li><a href="{{ url('foreign-client') }}">Foreign Clients</a>
                                                     </li>
                                                     <li><a href="{{ url('all-listed-clients') }}">Listed Clients</a>
                                                     </li>
                                                     {{-- <li><a href="{{ url('international-clients') }}">International
                                                             Clients</a>
                                                     </li> --}}
                                                 </ul>
                                             </li>
                                             <ul class="mega-sub-menu">
                                                 <h3> Our Valued Client </h3>
                                                 <li>
                                             </ul>
                                         </ul>



                                     </li>
                                     <li class="menu-item-has-children"><a href="#">Resources</a>
                                         <ul class="sub-menu mega-menu">
                                             <li>
                                                 <ul class="mega-sub-menu">
                                                     <li class="active"><a
                                                             href="{{ url('newsletter') }}">Newsletter</a></li>
                                                     <li><a href="{{ url('blogs') }}">Blog</a></li>
                                                     <li><a href="{{ url('publication') }}">Publications</a></li>
                                                     <li><a href="{{ url('gallery') }}">Gallery</a></li>
                                                     <li><a href="{{ url('events') }}">Events</a></li>
                                                 </ul>
                                             </li>
                                             {{-- <li>
                                                 <ul class="mega-sub-menu">
                                                     <h3>Resources</h3>
                                                     <li>
                                                 </ul>
                                             </li> --}}
                                         </ul>
                                     </li>
                                     <li class="menu-item-has-children"><a href="#">Career</a>
                                         <ul class="sub-menu ">
                                             <li>
                                                 <ul class="mega-sub-menu">
                                                     <li class="active"><a
                                                             href="{{ url('professional') }}">Professional</a>
                                                     </li>
                                                     <li class=""><a
                                                             href="{{ url('articleship') }}">Articleship</a>
                                                     </li>
                                                 </ul>
                                             </li>
                                         </ul>
                                     </li>
                                     </li>
                                     <li><a href="{{ url('regulators') }}">Regulators</a></li>
                                     <li><a href="{{ url('contact') }}">Contact Us</a></li>
                                     &nbsp;
                                     <li class="header-search"><a href="#"><i class="flaticon-search"></i></a>
                                     </li>
                                 </ul>
                                 {{--
                                 <div class="header-action d-none d-xl-block" style="z-index: 9999999999">
                                    <ul class="list-wrap">
                                        <li class="header-search"><a href="#"><i class="flaticon-search"></i></a>
                                        </li>
                                        <li class="offcanvas-menu">
                                            <a href="#" class="menu-tigger">
                                                <span></span>
                                                <span></span>
                                                <span></span>
                                            </a>
                                        </li>
                                    </ul>
                                </div> --}}

                             </div>

                             {{-- <div class="header-action d-none d-xl-block">
                                 <ul class="list-wrap">
                                     <li class="header-search"><a href="#"><i class="flaticon-search"></i></a>
                                     </li>
                                     <li class="offcanvas-menu">
                                         <a href="#" class="menu-tigger">
                                             <span></span>
                                             <span></span>
                                             <span></span>
                                         </a>
                                     </li>
                                 </ul>
                             </div> --}}

                         </nav>
                     </div>



                     <!-- Mobile Menu  -->
                     <div class="mobile-menu">
                         <nav class="menu-box">
                             <div class="close-btn"><i class="fas fa-times"></i></div>
                             <div class="nav-logo">
                                 <a href="index.html"><img src="{{ asset('frontend/assets/images/logo.png') }}"
                                         alt="Logo"></a>
                             </div>
                             <div class="mobile-search">

                                 <form action="{{ route('search') }}" method="GET">
                                     <input type="text" placeholder="Search here" id="search" name="search">
                                     <button><i class="flaticon-search"></i></button>
                                 </form>
                             </div>
                             <div class="menu-outer">
                                 <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
                             </div>
                             <div class="social-links">

                                 <ul class="clearfix">
                                     <a class="" target="_blank" href="http://tax.aaconsultingtech.com"><i
                                             class="fa fa-calculator"aria-hidden="true"></i> &nbsp; Tax Calculator
                                     </a>

                                 </ul>

                                 <ul class="clearfix list-wrap">
                                     <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                     <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                     <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                     <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                     <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                                 </ul>
                             </div>
                         </nav>
                     </div>
                     <div class="menu-backdrop"></div>
                     <!-- End Mobile Menu -->

                 </div>
             </div>
         </div>
     </div>
     <!-- header-search -->
     <div class="search-popup-wrap" tabindex="-1" role="dialog" aria-hidden="true">
         <div class="search-close">
             <span><i class="fas fa-times"></i></span>
         </div>
         <div class="search-wrap text-center">
             <div class="container">
                 <div class="row">
                     <div class="col-12">
                         <h2 class="title">Search Here</h2>
                         <div class="search-form">

                             <form action="{{ route('search') }}" method="GET">
                                 <input type="text" placeholder="Type keywords here" id="search"
                                     name="search">
                                 <button type="submit" class="search-btn"><i class="fas fa-search"></i></button>
                             </form>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>


     <!-- header-search-end -->

     <!-- offCanvas-menu -->
     <div class="extra-info">
         <div class="close-icon menu-close">
             <button><i class="far fa-window-close"></i></button>
         </div>
         <div class="logo-side mb-30">
             <a href="index.html"><img src="{{ asset('frontend/assets/images/logo.png') }}" alt="Logo"></a>
         </div>
         <div class="side-info mb-30">
             <div class="contact-list mb-30">
                 <h4>Office Address</h4>
                 <p>Z-Tower” (5th Floor), Plot # 4, Road # 132, 54, Gulshan Avenue, <br> Gulshan- 1, Dhaka- 1212,
                     Bangladesh</p>
             </div>
             <div class="contact-list mb-30">
                 <h4>Phone Number</h4>
                 <p>+88 02 9027738</p>
                 <p>+88 01790 700 404</p>
             </div>
             <div class="contact-list mb-30">
                 <h4>Email Address</h4>
                 <p> info@audit.com.bd</p>
             </div>
             <div class="contact-list mb-30">
                 <h4>Open Hours:</h4>
                 <p> Sat – Thu: 09 am – 05 pm,
                     <br> Friday: CLOSED
                 </p>
             </div>
         </div>
         <div class="social-icon-right mt-30">
             <a href="#"><i class="fab fa-facebook-f"></i></a>
             <a href="#"><i class="fab fa-twitter"></i></a>
             <a href="#"><i class="fab fa-google-plus-g"></i></a>
             <a href="#"><i class="fab fa-instagram"></i></a>
         </div>
     </div>
     <div class="offcanvas-overly"></div>
     <!-- offCanvas-menu-end -->

 </section>
 <!-- header-area-end -->


 @push('scripts')
 @endpush
