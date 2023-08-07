<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
    <link rel="icon" href="{{asset('frontend/img/icon.png')}}">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('frontend/assets/bootstrap.min.css')}}">
    <!--style css-->
        <link rel="stylesheet" type="text/css" href="{{asset('frontend/assets/style.css')}}">
        
        <link rel="stylesheet" href="//code.jquery.com/ui/1.13.0/themes/base/jquery-ui.css">
        
    <!---fontawesome--->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="{{asset('frontend/assets/all.css')}}">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" >
        
    <!---aos--->
        <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
        <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

        
        
    <!---owl-carousel---->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        
    <!--jquery-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> 
        <script src="https://code.jquery.com/jquery-3.5.0.js"></script>
    <!--java scripts-->
        <script src="{{asset('frontend/js/myScript.js')}}"></script>
</head>

<body>
    <div class="main-container">
        <div class="hero-section-subpages about-center-page container-fluid">
            <header class="header">
                <ul class="main-menu">
                    <i class="fa-solid fa-xmark close-menu-icon"></i>
                    <li><a class="menu-link" href="{{route('frontend.home')}}">الرئيسية</a></li>
                    <div class="accordion accordion-flush" id="accordionFlushExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingOne">
                                <button class="accordion-button collapsed shadow-none" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false"
                                    aria-controls="flush-collapseOne">
                                    من نحن
                                </button>
                            </h2>
                            <div id="flush-collapseOne" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <li><a class="menu-link" href="{{route('frontend.about')}}">عن المركز</a></li>
                                    <li><a class="menu-link" href="{{route('frontend.aboutfounder')}}">عن المؤسس</a></li>
                                </div>
                            </div>
                        </div>
                    </div>
                    <li><a class="menu-link" href="{{route('frontend.law-service')}}">الخدمات القانونية</a></li>
                    <li><a class="menu-link" href="{{route('frontend.art-service')}}">الخدمات الفنية</a></li>
                    <li><a class="menu-link" href="{{route('frontend.consult-service')}}">الاستشارات ودراسة الجدوى</a></li>
                    <li><a class="menu-link" href="{{route('frontend.various-service')}}">خدمات متنوعة</a></li>
                    <li><a class="menu-link" href="{{route('frontend.gallary')}}">معرض الصور</a></li>
                    <li><a class="menu-link" href="{{route('frontend.news')}}">الأخبار</a></li>

                    <li><a class="menu-link" href="contact_us.html">اتصل بنا</a></li>
                </ul>
                <div class="container header-wrap">
                    <div class="header-inner row navbar navbar-default">
                        <div class="col-6 header-menu">
                            <a class="hamburgler">
                                <img src="{{asset('frontend/img/menu-icon.png')}}">
                            </a>
                        </div>
                        <div class="col-6 logo-container">
                            <a href="index.html"><img class="logo" src="{{asset('frontend/img/logo-light.png')}}"></a>
                        </div>
                    </div>
                </div>
            </header>

              @yield('content')
        @php
            use App\Models\AboutUs ; 
            $data = AboutUs::find(1);
            
        @endphp
        <div class="footer">
            <div class="container">
                <div class="join-mailing-list" data-aos="flip-up">
                    <p>الاشتــــراك فـــي القائمـــة البــــريديــة</p>
                    <a href="#"><img src="{{asset('frontend/img/join-arrow.png')}}"></a>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-6 multiple-footer-inners">
                        <div class="footer-inner">
                            <img class="footer-icon" src="{{asset('frontend/img/location.png')}}">
                            <p class="p-footer">شارع الأمير سلطان أمام الآيه 
                            مول- جده - السعودية</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 multiple-footer-inners">
                        <div class="footer-inner">
                                <img class="footer-icon" src="{{asset('frontend/img/clock.png')}}">
                                <div>
                                <p class="p-footer">السبـــــــــــــــــــت : 9 ص - 5  م</p>
                                <p class="p-footer">الاحد الى الخميس : 9 ص - 10 م</p>
                                </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 multiple-footer-inners">
                        <div class="footer-inner">
                                <img class="footer-icon" src="{{asset('frontend/img/email.png')}}">
                                <a class="p-footer" href="mailto:info@theammc.com">{{$data->email}}</a>
                        </div>
                        <div class="footer-inner">
                                <i class="fa-solid fa-phone footer-icon"></i>
                                <a class="p-footer"href="tel:00966506666516">(00966) 506666516</a>
                        </div>
                    
                    </div>
                </div>
            </div>
             <a class="p-footer credits" href="https://alliance-sa.com/index_ar">جميـع الحقـوق محفوظة 2023  © تصميم وبرمجة تكامل الرؤى</a>
        </div>
    </div>
    <!----end of main container----->
    @yield('scripts')

    <script src="{{asset('frontend/js/bootstrap.min.js')}}"></script>
    <!----owl-carousel--->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        
    <script>
    $('.owl-one').owlCarousel({
        loop:true,
        margin:0,
        autoplay:true,
        autoplayTimeout:3000,
        nav:true,
        dots:false,
        rtl:true,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:1
            },
            1000:{
                items:1
            }
        }
    })
    </script>
        <script>
    AOS.init({ 
        once: 'true',
        duration: 1000,  

        });
    </script> 
</body>
</html>