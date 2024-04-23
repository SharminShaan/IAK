@extends('frontend.layouts.master')
@section('content')
    <!-- breadcrumb-area -->
    <section class="breadcrumb-area breadcrumb-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-content">
                        <h2 class="title" data-aos="fade-down" data-aos-delay="0">Meet Our Team</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb" data-aos="fade-up" data-aos-delay="0">
                                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Meet Our Team</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <div class="breadcrumb-shape-wrap">
            <img src="{{ asset('frontend/assets/img/images/breadcrumb_shape01.png') }}" alt="">
            <img src="{{ asset('frontend/assets/img/images/breadcrumb_shape02.png') }}" alt="">
        </div>
    </section>
    <!-- breadcrumb-area-end -->
    <section class="team-area team-bg" data-background="{{ asset('frontend/assets/img/bg/team_bg.jpg') }}">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6 col-lg-8">
                    <div class="section-title text-center mb-50">
                        <span class="sub-title">Skilled Team Members</span>
                        <h2 class="title">Our experts will satisfy you</h2>
                        {{-- <p>We are passionate about helping our clients, while at the same time developing our people’s potential.</p> --}}
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- meet our team-area 1 -->
    <section class="about-area-six">
        @foreach ($teams as $team)
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-4 col-md-3">
                    <div class="about-img-six meetteam">
                        <img src="{{ asset('/backendsite/teamimg/' . $team->image)}}" class="img-fluid" alt="team">
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="about-content-six">
                        <div class="section-title section-title-three mb-30 tg-heading-subheading animation-style1">
                            <span class="sub-title tg-element-title"> {{ $team->designation }} </span>
                            <h2 class="title tg-element-title"> {{ $team->name }} </h2>


                        </div>
                        <p> {{ $team->short_text }} </p>
                        <div class="about-list">
                            <ul class="list-wrap meet_wrap">
                                <li><i class="fas fa-arrow-right"></i>Year of experience: {{ $team->experience }} <br></li>
                                <li><i class="fas fa-arrow-right"></i>Specialization: {{ $team->specialization }}</li>
                                <li><i class="flaticon-mail"></i> <strong></strong><a class="text-lowercase"
                                        href="#"> {{ $team->email }} </a></strong>
                                </li> &nbsp;
                                <li><i class="flaticon-phone-call"></i> <a href="">{{ $team->phone }}</a>
                                </li>
                            </ul>
                            <p>{{ $team->short_description }}</p>
                        </div>

                    </div>
                </div>
            </div>
            <p class="">{{ $team->long_description }}</p>
        </div>
        &nbsp; <hr>
        @endforeach

    </section>
    {{-- <!-- meet our team-area end 1 -->
          <!-- meet our team-area 2 -->
          <section class="about-area-six">
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-lg-8">
                        <div class="about-content-six">
                            <div class="section-title section-title-three mb-30 tg-heading-subheading animation-style1">
                                <span class="sub-title tg-element-title">Senior Partner</span>
                                <h2 class="title tg-element-title">A.K.M Kamrul Islam, FCA, FCS</h2>
                            </div>
                            <p>Mr. Islam is the Senior Partner of the Firm and he graduated with Honors and Master's in
                                accounting from University of Dhaka and the Fellow member of The Institute of Chartered
                                Accountants of Bangladesh (ICAB), the Fellow member of The Institute of Chartered Secretaries of Bangladesh (ICSB), Associate Member of Information System Audit and Control Association (ISACA), USA and Associate Member of the International Institute of Internal Auditors,
                                Florida, USA and VAT Consultant Enlisted by National Board of Revenue</p>
                        <div class="about-list">
                                <ul class="list-wrap meet_wrap">
                                    <li><i class="fas fa-arrow-right"></i>Year of experience: 36 years</li>
                                    <li><i class="fas fa-arrow-right"></i>Specialization: Statutory & Internal Audit</li>
                                    <li><i class="fas fa-arrow-right"></i>Performance Audit and Business Valuation & Advisory and Direct & Indirect Tax</li>
                                    <li><i class="flaticon-mail"></i> <strong></strong><a class="text-lowercase" href="mailto:kamrul@audit.com.bd ">   kamrul@audit.com.bd</a></strong></li>
                                    <li><i class="flaticon-phone-call"></i>  <a href="tel: +88 02 9027738" >+88 02 9027738
                                    </a></li>

                                </ul>
                            </div>
                            <p>Mr. Islam was also the Director (nominated by The Government of Bangladesh) of Sonali Bank Limited (The largest Public Bank in
                                Bangladesh), Janata Bank Limited for his dynamic and spectacular leadership. He was also the Ombudsmen of Sonali Bank Limited
                                and for some extent the Chairman of Sonali Bank Limited and Janata Bank Limited.</p>

                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4">
                        <div class="about-img-six meetteam">
                            <img src="{{ asset('frontend/assets/images/kamrul-islampic.jpg.png')}}" class="img-fluid" alt="A.K.M Kamrul Islam, FCA, FCS">
                            <img src="{{ asset('frontend/assets/img/images/h5_about_shape01.png')}}"  alt="A.K.M Kamrul Islam, FCA, FCS">

                        </div>
                    </div>

                </div>
                    <p class="mt-5">Mr. Islam proactively
                        contributed especially to the areas of Statutory Audit, Internal Audit, Financial Statements
                        Preparation, Business Advisory, Corporate Finance, Bookkeeping, Due Diligence, Liquidation,
                        Tax Accounting and Advisory and Compliance Services and he worked on various clients
                        especially in the areas Banks, Insurance and Financial Institutions, Multinational Companies, Manufacturing Companies, Service
                        Oriented Companies, Private and Group of Companies, Non-Government Organizations, and Development agencies in the field of
                        audit and advisory services.</p>
            </div>

        </section>
        <!-- meet our team-area end 2 -->
         <!-- meet our team-area 3 -->
         <section class="about-area-six">
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-lg-4 col-md-4">
                        <div class="about-img-six meetteam">
                            <img src="{{ asset('frontend/assets/images/rezwanullah.png')}}" class="img-fluid" alt="Muhammad Rizwanullah, FCA">
                            <img src="{{ asset('frontend/assets/img/images/h5_about_shape01.png')}}"  alt="Muhammad Rizwanullah, FCA">

                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="about-content-six">
                            <div class="section-title section-title-three mb-30 tg-heading-subheading animation-style1">
                                <span class="sub-title tg-element-title">Principal Partner</span>
                                <h2 class="title tg-element-title">Muhammad Rizwanullah, FCA</h2>
                            </div>
                            <p>Mr. Rizwanullah is the Fellow Member of the Institute of Chartered Accountants in England &
                                Wales (FCA similar to CPA), member of Association of Chartered Accountants in US (ACAUS),
                                member of Association of Former International Civil Servants in New York and Geneva (AFICS)</p>
                        <div class="about-list">
                                <ul class="list-wrap meet_wrap">
                                    <li><i class="fas fa-arrow-right"></i>Year of experience: 37 years<br></li>
                                    <li><i class="fas fa-arrow-right"></i>Specialization: Management of foreign funded organization &</li>
                                    <li><i class="fas fa-arrow-right"></i>Advisory and Direct & Indirect Tax  </li>
                                    <li><i class="flaticon-mail"></i> <strong></strong><a class="text-lowercase" href="mailto:rizwanullah@audit.com.bd">  rizwanullah@audit.com.bd</a></strong></li>
                                    <li><i class="flaticon-phone-call"></i>  <a href="tel: +88 02 9027738" >+88 02 9027738   </a></li>

                                </ul>
                            </div>
                            <p>He has vast experience in Professional Accounting/Audit/Finance, Management of UN/ Humanitarian Organization /Consultancy & Income Tax Services. Working & Living Experience in Europe,
                                Africa, Asia and North America</p>
                        </div>
                    </div>
                </div>
            </div>

        </section>
     <!-- meet our team-area end 3 -->
     <!-- meet our team-area 4 -->
     <section class="about-area-six">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-8">
                    <div class="about-content-six">
                        <div class="section-title section-title-three mb-30 tg-heading-subheading animation-style1">
                            <span class="sub-title tg-element-title"> Partner</span>
                            <h2 class="title tg-element-title">Saleem Arungzeb Ahmed, FCA</h2>
                        </div>
                        <p>Mr. Islam is the Senior Partner of the Firm and he graduated with Honors and Master's in
                            Mr. Ahmed is the Fellow Member of Institute of Chartered Accountants of Bangladesh and Associate Member of ICAEW, England and graduated from Dhaka University, Bachelor of Commerce.</p>
                    <div class="about-list">
                            <ul class="list-wrap meet_wrap">
                                <li><i class="fas fa-arrow-right"></i>Year of experience: 38 years</li>
                                <li><i class="fas fa-arrow-right"></i>Specialization: Strategic Financial & Sustainable Reporting</li>
                                <li><i class="fas fa-arrow-right"></i>Business Valuation and Tax Planning</li>
                                <li><i class="flaticon-mail"></i> <strong></strong><a class="text-lowercase" href="mailto:saleem@audit.com.bd"> saleem@audit.com.bd</a></strong></li>
                                <li><i class="flaticon-phone-call"></i>  <a href="tel: +88 02 9027738" >+88 02 9027738  </a></li>

                            </ul>
                        </div>
                        <p> He has wide experience and expertise in the areas Management Accounting, Financial Management, Financial Reporting, Managerial Finance, IFRS, UK GAAP, US GAAP, Equity Valuation,
                            Career Development, Risk Management, Personal Finance, Financial Planning, Audit & Assurance
                            Services, Liquidation, Tax planning, Strategic Financial Planning.</p>

                    </div>
                </div>
                <div class="col-lg-4 col-md-4">
                    <div class="about-img-six meetteam">
                        <img src="{{ asset('frontend/assets/images/saleem.png')}}" class="img-fluid" alt="ASaleem Arungzeb Ahmed, FCA">
                        <img src="{{ asset('frontend/assets/img/images/h5_about_shape01.png')}}"  alt="ASaleem Arungzeb Ahmed, FCA">

                    </div>
                </div>
            </div>
        </div>

    </section>
    <!-- meet our team-area end 4 -->
       <!-- meet our team-area 5 -->
       <section class="about-area-six">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-4 col-md-4">
                    <div class="about-img-six meetteam">
                        <img src="{{ asset('frontend/assets/images/jibon.png')}}" class="img-fluid" alt="Muhammad Rizwanullah, FCA">
                        <img src="{{ asset('frontend/assets/img/images/h5_about_shape01.png')}}"  alt="Muhammad Rizwanullah, FCA">

                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="about-content-six">
                        <div class="section-title section-title-three mb-30 tg-heading-subheading animation-style1">
                            <span class="sub-title tg-element-title">Director</span>
                            <h2 class="title tg-element-title">Jibon Chandra Das, CA Finalist</h2>
                        </div>
                        <p>Mr. Das is a CA Finalist of The Institute of Chartered Accountants of Bangladesh (ICAB). He
                            obtained his BBA and MBA from the Department of Accounting, University of Jagannath. He
                            is also an Income Tax Practitioner, ITP (Obtained from the National Board of Revenue, GoB)
                            and Member, Dhaka Taxes Bar Association and Member, Bangladesh VAT Professionals
                            Forum, , Member, Bangladesh - Japan Training Institute (BJTI), Member, The Institute of Internal Auditors, Bangladesh (IIAB), and Life Member, Bangladesh Accounting Association (BAA)</p>
                    <div class="about-list">
                            <ul class="list-wrap meet_wrap">
                                <li><i class="fas fa-arrow-right"></i>Year of experience: 15 years<br></li>
                                <li><i class="fas fa-arrow-right"></i>Specialization: Statutory Audit, IASs & IFRSs, Regulatory Compliance</li>
                                <li><i class="fas fa-arrow-right"></i>Direct & Indirect Tax and Tax Planning </li>

                            </ul>
                        </div>
                        <p>During his affiliation with IAK, Mr. Das worked on various clients especially in the areas Multinational Companies, Manufacturing Companies, Service Oriented Companies, Private and Group of Companies, Non-Government
                            Organizations, and Development agencies in the field of audit and advisory services. He keenly attained expertise in the areas of Compliance Management of BSEC, Bangladesh Bank, IDRA, NBR, BIDA, RJSC, ICAB, FRC et</p>
                    </div>
                </div>
            </div>
        </div>

    </section>
 <!-- meet our team-area end 5 -->
    <!-- meet our team-area 6 -->
    <section class="about-area-six">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-8">
                    <div class="about-content-six">
                        <div class="section-title section-title-three mb-30 tg-heading-subheading animation-style1">
                            <span class="sub-title tg-element-title"> Director (Audit & Assurance)                            </span>
                            <h2 class="title tg-element-title">Shubhra Paul, ACA</h2>
                        </div>
                        <p>Mr. Paul is an Associate Chartered Accountant (ACA) and member of The Institute of Chartered Accountants of Bangladesh (ICAB). He obtained his BBA and MBA from the Department
                            of Finance & Banking, University of Rajshahi. He is also an Income Tax Practitioner, ITP
                            (Obtained from the National Board of Revenue, GoB) and Member, Dhaka Taxes Bar Association and Member, Bangladesh VAT Professionals Forum.</p>
                    <div class="about-list">
                            <ul class="list-wrap meet_wrap">
                                <li><i class="fas fa-arrow-right"></i>Year of experience: 12 years</li>
                                <li><i class="fas fa-arrow-right"></i>Specialization: Statutory Audit, IASs & IFRSs, Management Accounting</li>
                                <li><i class="fas fa-arrow-right"></i>Regulatory Compli-ance & Direct & Indirect Tax</li>

                            </ul>
                        </div>
                        <p> During his professional career Mr. Paul have acquired experiences in the fields of accounts,
                            finance, taxation, auditing & secretarial matters. Arrange long-term as well as short-term
                            funds & loan for enhancing the current & potential business growth of the concern entity. Prepared and reviewed company annual
                            financial statements, submission of Annual Income Tax Return, yearly budget plan, new project profile, maintaining liaison with local
                            legal authorities, dealing with government officials regarding Taxation & VAT affairs</p>

                    </div>
                </div>
                <div class="col-lg-4 col-md-4">
                    <div class="about-img-six meetteam">
                        <img src="{{ asset('frontend/assets/images/shubhra.png')}}" class="img-fluid" alt="Shubhra Paul, ACA">

                    </div>
                </div>
            </div>
        </div>

    </section>
    <!-- meet our team-area end 6 -->
      <!-- meet our team-area 7 -->
      <section class="about-area-six">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-4 col-md-4">
                    <div class="about-img-six meetteam">
                        <img src="{{ asset('frontend/assets/images/rezaul.jpg')}}" class="img-fluid" alt="Md. Rezaul Haq, ACA">
                        <img src="{{ asset('frontend/assets/img/images/h5_about_shape01.png')}}"  alt="Md. Rezaul Haq, ACA">

                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="about-content-six">
                        <div class="section-title section-title-three mb-30 tg-heading-subheading animation-style1">
                            <span class="sub-title tg-element-title">Director</span>
                            <h2 class="title tg-element-title">Md. Rezaul Haq, ACA  </h2>
                        </div>
                        <p>Mr. Haq is an Associate Chartered Accountant (ACA) and member of The Institute of Chartered Accountants of Bangladesh (ICAB). He obtained his BBA and MBA from Department of
                            Accounting & Information Systems, University of Dhaka and achieved Dean’s Honor Award in
                            MBA, Faculty of Business Studies, University of Dhaka .</p>
                    <div class="about-list">
                            <ul class="list-wrap meet_wrap">
                                <li><i class="fas fa-arrow-right"></i>Year of experience: 11 years<br></li>
                                <li><i class="fas fa-arrow-right"></i>Specialization: Statutory Audit, IASs & IFRSs, Business Valuation</li>
                                <li><i class="fas fa-arrow-right"></i>Business Process Design, Preparation of Standard Operating Procedures </li>

                            </ul>
                        </div>
                        <p>Mr. Haq proactively contributed especially to the areas of Statutory Audit, Internal Audit, Business Valuation Financial Statements Preparation, Fiduciary Review, Special Audit, and Advisory and Compliance Services and he worked on various clients especially in the areas Banks, Insurance and Financial Institutions,
                            Multinational Companies, Manufacturing Companies, Service Oriented Companies, Private and Group of Companies, Non-Government Organizations, and Development agencies in the field of audit and advisory services.</p>
                    </div>
                </div>
            </div>
        </div>

    </section>
 <!-- meet our team-area end 7 --> --}}
@endsection
