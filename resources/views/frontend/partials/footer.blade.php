 <!-- footer-area -->
 <footer>
     <div class="footer-area-two footer-bg-two" data-background="{{ asset('frontend/assets/img/bg/h2_footer_bg.jpg') }}">
         <div class="footer-top-two">
             <div class="container">
                 <div class="row">
                     <div class="col-lg-4 col-md-7">
                         <div class="footer-widget">
                             <div class="fw-logo">
                                 <a href="#"><img src="{{ asset('backendsite/images/' . $setting->logo) }}"
                                         alt="ISLAM AFTAB KAMRUL logo"></a>
                             </div>
                             <div class="footer-content">
                                 <div class="footer-info">
                                     <ul class="list-wrap">

                                         <li>
                                             <div class="icon">
                                                 <i class="fa-solid fa-location-dot"></i>
                                             </div>
                                             <div class="content">
                                                 {{ $setting->address }}
                                             </div>
                                         </li>

                                         <li>
                                             <div class="icon">
                                                 <i class="fa-solid fa-location-dot"></i>
                                             </div>
                                             <div class="content">
                                                 {{ $setting->paragraph }}
                                             </div>
                                         </li>

                                         <li>
                                             <div class="icon">
                                                 <i class="flaticon-clock"></i>
                                             </div>
                                             <div class="content">
                                                 <p>{{ $setting->opening }}</p>
                                             </div>
                                         </li>

                                     </ul>
                                 </div>
                             </div>
                         </div>
                     </div>
                     <div class="col-lg-2 col-md-5 col-sm-6">
                         <div class="footer-widget">
                             <h4 class="fw-title">Menu</h4>
                             <div class="footer-link">
                                 <ul class="list-wrap">
                                     <li><a href="#">Our Company</a></li>
                                     <li><a href="#">Careers</a></li>
                                     <li><a href="#">Media</a></li>
                                     <li><a href="#">Our Blog</a></li>
                                 </ul>
                             </div>
                         </div>
                     </div>
                     <div class="col-lg-2 col-md-5 col-sm-6">
                         <div class="footer-widget">
                             <h4 class="fw-title">Quick Links</h4>
                             <div class="footer-link">
                                 <ul class="list-wrap">
                                     <li><a href="#">Services</a></li>
                                     <li><a href="#">Client</a></li>
                                     <li><a href="#">Articleship</a></li>
                                     <li><a href="#">Events</a></li>
                                 </ul>
                             </div>
                         </div>
                     </div>

                     <div class="col-lg-4 col-md-7">
                         <div class="footer-widget">
                             <h4 class="fw-title">Our Newsletter</h4>
                             <div class="footer-newsletter">
                                 <p>Sign up to Privitar’s weekly newsletter to get the latest updates.</p>
                                 {{-- <form action="#">
                                     <input type="email" placeholder="enter your e-mail">
                                     <button type="submit">Subscribe</button>
                                 </form> --}}

                                 <form action="{{ route('subscribe') }}" method="post">
                                     @csrf
                                     <input type="email" placeholder="enter your e-mail" name="email">
                                     @error('email')
                                         <span class="text-danger" onblur="alert('Error has')">{{ $message }}</span>
                                     @enderror
                                     <button type="submit">Subscribe</button>
                                 </form>

                                 {{-- success message  --}}
                                 <div class="text-center">
                                     @if (Session::has('success'))
                                         <div class="alert alert-success" id="alert" onblur="errorAlert()">
                                             {{ Session::get('success') }}
                                         </div>
                                     @endif
                                 </div>

                                 <div class="footer-social footer-social-two">
                                     <ul class="list-wrap">
                                         <li><a href="{{ $setting->facebook }} "><i class="fab fa-facebook-f"></i></a>
                                         </li>
                                         <li><a href="{{ $setting->twitter }}"><i class="fab fa-twitter"></i></a></li>
                                         <li><a href="{{ $setting->linkedin }}"><i class="fab fa-linkedin-in"></i></a>
                                         </li>
                                         <li><a href="{{ $setting->googleplus }}"><i
                                                     class="fa-brands fa-google-plus-g"></i></a></li>
                                         <li><a href=" {{ $setting->youtube }}"><i class="fab fa-youtube"></i></a></li>
                                     </ul>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
         <div class="footer-bottom-two">
             <div class="container">
                 <div class="row">
                     <div class="col-lg-12">
                         <div class="copyright-text-two text-center">
                             <p>Copyright © {{ date('Y') }} All Rights Reserved. | Design & Developed By <a
                                     target="_blank" href="https://aaconsultingtech.com/">A & A Consulting Limited</a>
                             </p>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </footer>
 <!-- footer-area-end -->


 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
     integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
 </script>

 <script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI="
     crossorigin="anonymous"></script>


 <script type="text/javascript">
     $("document").ready(function() {
         setTimeout(function() {
             $("div.alert").remove();
         }, 3000);
     });

     function errorAlert() {
         var myText = "Already Exist!";
         alert(myText);
     }
 </script>
