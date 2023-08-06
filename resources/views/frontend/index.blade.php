<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
    <link rel="icon" href="img/icon.png">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="{{ asset('bootstrap.min.css') }}">
<!--style css-->
	<link rel="stylesheet" type="text/css" href="{{ asset('frontend/assets/style.css') }}">

    <link rel="stylesheet" href="{{asset('https://code.jquery.com/ui/1.13.0/themes/base/jquery-ui.css')}}">

<!---fontawesome--->
	<link rel="stylesheet" href="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/assets/all.css') }}">

<link href="{{ asset('https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css') }}" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<!---aos--->
  	<script src="{{ asset('https://unpkg.com/aos@next/dist/aos.js') }}"></script>
	<link rel="stylesheet" href="{{ asset('https://unpkg.com/aos@next/dist/aos.css') }}" />



<!---owl-carousel---->
	<link rel="stylesheet" href="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css') }}" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css') }}" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<!--jquery-->
	<script src="{{ asset('https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js') }}"></script>
    <script src="{{ asset('https://code.jquery.com/jquery-3.5.0.js') }}"></script>
<!--java scripts-->
	<script src="{{ asset('frontend/js/myScript.js') }}"></script>
</head>



<body>
	<div class="main-container">
       <div class="hero-section container-fluid">
            <header class="header">
                <ul class="main-menu">
                    <i class="fa-solid fa-xmark close-menu-icon"></i>
                     <li><a class="menu-link" href="index.html">الرئيسية</a></li>
                 <div class="accordion accordion-flush" id="accordionFlushExample">
                   <div class="accordion-item">
                     <h2 class="accordion-header" id="flush-headingOne">
                       <button class="accordion-button collapsed shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                         من نحن
                       </button>
                     </h2>
                     <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                       <div class="accordion-body">
                           <li><a class="menu-link" href="about-center.html">عن المركز</a></li>
                           <li><a class="menu-link" href="about-founder.html">عن المؤسس</a></li>
                         </div>
                     </div>
                   </div>
                 </div>
                     <li><a class="menu-link" href="services1.html">الخدمات القانونية</a></li>
                     <li><a class="menu-link" href="services2.html">الخدمات الفنية</a></li>
                     <li><a class="menu-link" href="services3.html">الاستشارات ودراسة الجدوى</a></li>
                     <li><a class="menu-link" href="services4.html">خدمات متنوعة</a></li>
                     <li><a class="menu-link" href="photo-gallery.html">معرض الصور</a></li>
                     <li><a class="menu-link" href="news.html">الأخبار</a></li>

                     <li><a class="menu-link" href="contact_us.html">اتصل بنا</a></li>
                 </ul>
                <div class="container header-wrap">
                <div class="header-inner row navbar navbar-default">
               <div class="col-6 header-menu">
                 <a class="hamburgler">
                    <img src="img/menu-icon.png">
                </a>
               </div>
               <div class="col-6 logo-container">
                <a href="index.html"><img class="logo" src="{{ asset('frontend/img/logo-light.png') }}"></a>
               </div>
            </div>
            </div>
            </header>

            <div class="hero-section-inner">
                <div class="owl-one owl-carousel owl-theme owl-container">
                <div class="item item1">
<!--                    <img class="slider-product" src="img/hero-section-bg.jpg">-->
                    <h1 data-aos="fade-up">تواصل معنا للاستفادة من الاستشارات المجانية !</h1>
                    <p data-aos="fade-up">نسعى أن نكون المركز المتخصص الأول لتقديم خدمات إستشارية وتدريبية وإدارية متميزة</p>
                </div>
                <div class="item item2">
                    <h1 data-aos="fade-up">تواصل معنا للاستفادة من الاستشارات المجانية !</h1>
                    <p data-aos="fade-up">نسعى أن نكون المركز المتخصص الأول لتقديم خدمات إستشارية وتدريبية وإدارية متميزة</p>
                    </div>
                </div>
            </div>


        <div class="news_marquee" >  <marquee direction="right"> <p >تشرف مكتب المستشار الدكتور مهندس بحري عبدالرزاق بن هاشم المدني والذي يعتبر مالكه اول سعودي يحصل على اعلى شهادة في مجال الهندسة البحرية من الاكاديمية العربية للنقل البحري</p></marquee></div>
    </div>
        <div class="services-section">
            <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 services-wrap" data-aos="fade-up" >
                    <div class="service" >
                        <img class="service-icon" src="img/law-services.png">
                        <a href="#">الخدمات القانونية</a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 services-wrap" data-aos="fade-up" data-aos-delay="300">
                    <div class="service">
                        <img class="service-icon" src="img/artistic-services.png">
                        <a href="#">الخدمات الفنية</a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 services-wrap" data-aos="fade-up" data-aos-delay="600">
                    <div class="service">
                        <img class="service-icon" src="img/consaltants-icon.png">
                        <a href="#">الاستشارات ودراسة الجدوى</a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 services-wrap" data-aos="fade-up" data-aos-delay="900">
                    <div class="service">
                        <img class="service-icon" src="img/Freen-Shipping-icon-1.png">
                        <a href="#">خدمات متنوعة</a>
                    </div>
                </div>

            </div>
            </div>

        </div>


        <div class="who-are-we-section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 manager-img">
                        <img src="img/manager-img.png"  data-aos="fade-left" data-aos-delay="300">
                    </div>
                    <div class="col-lg-8 who-are-we-info">
                        <div data-aos="fade-right">
                        <h4 class="who-we-title">مـن نحن</h4>
                        <h5 class="sub-title">مكتب المستشار الدكتور مهندس بحري عبدالرزاق بن هاشم المدني </h5>
                        <p>يتشرف مكتب المستشار الدكتور مهندس بحري عبدالرزاق بن هاشم المدني والذي يعتبر مالكه اول سعودي يحصل على اعلى شهادة في مجال الهندسة البحرية من الاكاديمية العربية للنقل البحري بالإسكندرية بمصر منذ اكثر من 44 عاماً ، كما حصل على عدة دبلومات و دورات تصل الى اكثر من 100 دبلوم و دورة في مجالات مختلفة وعلى مدى سنوات الخبرة والعمل لدى العديد من الشركات الكبرى مثل بترومين وسمارك و شركة ارامكو السعودية (26 سنة) إضافة لذلك توفر كوادر عمل ذو خبرات و كفاءات عالية من جنسيات مختلفة لتقديم أفضل الخدمات وبجودة عالية.
                        </p>

                        <a class="btn more-btn shadow-none grow">المزيــد</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="our-vision-section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7 our-vision-info">
                        <div class="our-vision-inner" data-aos="fade-up" >
                            <img class="our-vision-icon" src="img/vision-icon1.png">
                            <div class="our-vision-text">
                                <h5 class="our-vision-title">عميلنا</h5>
                                <p>أهم شخص لدينا وهو محور تركيزنا وإهتمامنا ورعايتنا.الإعتناء بفهم حاجات ورغبات العميل هو سبيلنا الأساسي في تلبيتها والعناية به. مصالح عميلنا تسبق مصالحنا .. فنحن نعتني بأدائنا قبل أن نطالب بحقوقنا.</p>
                            </div>
                        </div>
                        <div class="our-vision-inner" data-aos="fade-up" data-aos-delay="300">
                            <img class="our-vision-icon" src="img/vision-icon2.png">
                            <div class="our-vision-text">
                                <h5 class="our-vision-title">مقومات النجاح</h5>
                                <p>مكتبنا يمتلك فريق عمل على مستوى عالي من الدقة والاحترافية والكفاءة في كافت المجلات القانونية والقضائية واعمال المحاماة.
                                </p>
                            </div>
                        </div>
                        <div class="our-vision-inner" data-aos="fade-up" data-aos-delay="600">
                            <img class="our-vision-icon" src="img/vision-icon3.png">
                            <div class="our-vision-text">
                                <h5 class="our-vision-title">مهمتنا</h5>
                                <p>مكتبنا يمتلك فريق عمل على مستوى عالي من الدقة والاحترافية والكفاءة في كافت المجلات القانونية والقضائية ودراسات الجدوى.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 our-vision-img">
                        <div class="our-vision-pic"><img src="img/marine-img.png" data-aos="fade-down-right"></div>
                    </div>
                </div>
            </div>
        </div>

        <div class="contact-us-section">
            <div class="container">
                <div class="contact-us-inner" data-aos="zoom-in">
                    <h1>تواصل معنا للاستفادة من الاستشارات المجانية !</h1>
                    <h6>نحن خبراء ذوو خبرة يفهمون أن خدماتها تتغير ،
                        <br>
                    وهم شركاء حقيقيون يهتمون بنجاحك. يقدم فريقنا نهجًا استشاريًا حول القانون البحري.</h6>
                   <a href="tel:123456789" class="btn more-btn shadow-none grow">اتصل الآن</a>
                </div>
            </div>
        </div>

        <div class="news-section">
            <div class="container">
                <h4 class="green-title" data-aos="fade-up">الأخبــار والمقــــالات </h4>
                <div class="row">
                <div class="col-lg-4 col-md-12 news-wrap" data-aos="fade-up">
                    <div class="news-div">
                        <img class="news-thumbnail" src="img/news-thumbnail1.png">
                        <div class="date-views">
                            <i class="fa-solid fa-calendar-days date-veiws-icon"></i>
                            <p class="date">22/02/020</p>
                            <i class="fa-solid fa-eye date-veiws-icon"></i>
                            <p class="views-number">22</p>
                        </div>
                        <h5 class="news-title">شحوط السفينة العملاقة مسؤولية من</h5>
                        <p class="news-text">ومن هنا وجب على المصمم أن يضع نصوصا مؤقتة على التصميم ليظهر للعميل الشكل كاملاً،دور مولد النص العربى أن يوفر على المصمم عناء البحث ع</p>

                        <a class="more-news" href="#"><i class="fa-solid fa-circle-plus more-news-icon"></i></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 news-wrap" data-aos="fade-up">
                    <div class="news-div">
                        <img class="news-thumbnail" src="img/news-thumbnail2.png">
                        <div class="date-views">
                            <i class="fa-solid fa-calendar-days date-veiws-icon"></i>
                            <p class="date">22/02/020</p>
                            <i class="fa-solid fa-eye date-veiws-icon"></i>
                            <p class="views-number">22</p>
                        </div>
                        <h5 class="news-title">التطوع .. يعزز روح التعاون والعطاء</h5>
                        <p class="news-text">ومن هنا وجب على المصمم أن يضع نصوصا مؤقتة على التصميم ليظهر للعميل الشكل كاملاً،دور مولد النص العربى أن يوفر على المصمم عناء البحث ع</p>

                        <a class="more-news" href="#"><i class="fa-solid fa-circle-plus more-news-icon"></i></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 news-wrap" data-aos="fade-up">
                    <div class="news-div">
                        <img class="news-thumbnail" src="img/news-thumbnail3.png">
                        <div class="date-views">
                            <i class="fa-solid fa-calendar-days date-veiws-icon"></i>
                            <p class="date">22/02/020</p>
                            <i class="fa-solid fa-eye date-veiws-icon"></i>
                            <p class="views-number">22</p>
                        </div>
                        <h5 class="news-title">مارلوج 10 .. توصيات تواجه التحديات في النقل البحري والموانئ</h5>
                        <p class="news-text">ومن هنا وجب على المصمم أن يضع نصوصا مؤقتة على التصميم ليظهر للعميل الشكل كاملاً،دور مولد النص العربى أن يوفر على المصمم عناء البحث ع</p>

                        <a class="more-news" href="#"><i class="fa-solid fa-circle-plus more-news-icon"></i></a>
                    </div>
                </div>
                </div>
            </div>
        </div>

        <div class="footer">
            <div class="container">
                <div class="join-mailing-list" data-aos="flip-up">
                    <p>الاشتــــراك فـــي القائمـــة البــــريديــة</p>
                    <a href="#"><img src="img/join-arrow.png"></a>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-6 multiple-footer-inners">
                        <div class="footer-inner">
                            <img class="footer-icon" src="img/location.png">
                            <p class="p-footer">شارع الأمير سلطان أمام الآيه
                            مول- جده - السعودية</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 multiple-footer-inners">
                        <div class="footer-inner">
                                <img class="footer-icon" src="img/clock.png">
                                <div>
                                <p class="p-footer">السبـــــــــــــــــــت : 9 ص - 5  م</p>
                                <p class="p-footer">الاحد الى الخميس : 9 ص - 10 م</p>
                                </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 multiple-footer-inners">
                        <div class="footer-inner">
                                <img class="footer-icon" src="img/email.png">
                                <a class="p-footer" href="mailto:info@theammc.com">info@theammc.com</a>
                        </div>
                        <div class="footer-inner">
                                <i class="fa-solid fa-phone footer-icon"></i>
                                <a class="p-footer"href="tel:00966506666516">(00966) 506666516</a>
                        </div>

                    </div>
                </div>
            </div>
             <a class="p-footer credits" href="{{ asset('https://alliance-sa.com/index_ar') }}">جميـع الحقـوق محفوظة 2023  © تصميم وبرمجة تكامل الرؤى</a>
        </div>

        </div>
<!----end of main container----->
<script src="{{ asset('frontend/js/bootstrap.min.js') }}"></script>
<!----owl-carousel--->
<script src="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js') }}" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

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
