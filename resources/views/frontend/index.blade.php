@extends('layouts.frontend')
@section('content')

<div class="hero-section-inner">
    <div class="owl-one owl-carousel owl-theme owl-container">
        <div class="item item1">
            <!-- <img class="slider-product" src="img/hero-section-bg.jpg">-->
            <h1 data-aos="fade-up">تواصل معنا للاستفادة من الاستشارات المجانية !</h1>
            <p data-aos="fade-up">نسعى أن نكون المركز المتخصص الأول لتقديم خدمات إستشارية وتدريبية وإدارية
                متميزة</p>
        </div>
        <div class="item item2">
            <h1 data-aos="fade-up">تواصل معنا للاستفادة من الاستشارات المجانية !</h1>
            <p data-aos="fade-up">نسعى أن نكون المركز المتخصص الأول لتقديم خدمات إستشارية وتدريبية وإدارية
                متميزة</p>
        </div>
    </div>
</div>


<div class="news_marquee">
    <marquee direction="right">
        <p>تشرف مكتب المستشار الدكتور مهندس بحري عبدالرزاق بن هاشم المدني والذي يعتبر مالكه اول سعودي يحصل
            على اعلى شهادة في مجال الهندسة البحرية من الاكاديمية العربية للنقل البحري</p>
    </marquee>
</div>
</div>
<div class="services-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6 services-wrap" data-aos="fade-up">
                <div class="service">
                    <img class="service-icon" src="{{asset('frontend/img/law-services.png')}}">
                    <a href="#">الخدمات القانونية</a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 services-wrap" data-aos="fade-up" data-aos-delay="300">
                <div class="service">
                    <img class="service-icon" src="{{asset('frontend/img/artistic-services.png')}}">
                    <a href="#">الخدمات الفنية</a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 services-wrap" data-aos="fade-up" data-aos-delay="600">
                <div class="service">
                    <img class="service-icon" src="{{asset('frontend/img/consaltants-icon.png')}}">
                    <a href="#">الاستشارات ودراسة الجدوى</a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 services-wrap" data-aos="fade-up" data-aos-delay="900">
                <div class="service">
                    <img class="service-icon" src="{{asset('frontend/img/Freen-Shipping-icon-1.png')}}">
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
                <img src="{{asset('frontend/img/manager-img.png')}}" data-aos="fade-left" data-aos-delay="300">
            </div>
            <div class="col-lg-8 who-are-we-info">
                <div data-aos="fade-right">
                    <h4 class="who-we-title">مـن نحن</h4>
                    <h5 class="sub-title">مكتب المستشار الدكتور مهندس بحري عبدالرزاق بن هاشم المدني </h5>
                    <p>يتشرف مكتب المستشار الدكتور مهندس بحري عبدالرزاق بن هاشم المدني والذي يعتبر مالكه اول
                        سعودي يحصل على اعلى شهادة في مجال الهندسة البحرية من الاكاديمية العربية للنقل البحري
                        بالإسكندرية بمصر منذ اكثر من 44 عاماً ، كما حصل على عدة دبلومات و دورات تصل الى اكثر من
                        100 دبلوم و دورة في مجالات مختلفة وعلى مدى سنوات الخبرة والعمل لدى العديد من الشركات
                        الكبرى مثل بترومين وسمارك و شركة ارامكو السعودية (26 سنة) إضافة لذلك توفر كوادر عمل ذو
                        خبرات و كفاءات عالية من جنسيات مختلفة لتقديم أفضل الخدمات وبجودة عالية.
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
                <div class="our-vision-inner" data-aos="fade-up">
                    <img class="our-vision-icon" src="{{asset('frontend/img/vision-icon1.png')}}">
                    <div class="our-vision-text">
                        <h5 class="our-vision-title">عميلنا</h5>
                        <p>أهم شخص لدينا وهو محور تركيزنا وإهتمامنا ورعايتنا.الإعتناء بفهم حاجات ورغبات العميل
                            هو سبيلنا الأساسي في تلبيتها والعناية به. مصالح عميلنا تسبق مصالحنا .. فنحن نعتني
                            بأدائنا قبل أن نطالب بحقوقنا.</p>
                    </div>
                </div>
                <div class="our-vision-inner" data-aos="fade-up" data-aos-delay="300">
                    <img class="our-vision-icon" src="{{asset('frontend/img/vision-icon2.png')}}">
                    <div class="our-vision-text">
                        <h5 class="our-vision-title">مقومات النجاح</h5>
                        <p>مكتبنا يمتلك فريق عمل على مستوى عالي من الدقة والاحترافية والكفاءة في كافت المجلات
                            القانونية والقضائية واعمال المحاماة.
                        </p>
                    </div>
                </div>
                <div class="our-vision-inner" data-aos="fade-up" data-aos-delay="600">
                    <img class="our-vision-icon" src="{{asset('frontend/img/vision-icon3.png')}}">
                    <div class="our-vision-text">
                        <h5 class="our-vision-title">مهمتنا</h5>
                        <p>مكتبنا يمتلك فريق عمل على مستوى عالي من الدقة والاحترافية والكفاءة في كافت المجلات
                            القانونية والقضائية ودراسات الجدوى.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-5 our-vision-img">
                <div class="our-vision-pic"><img src="{{asset('frontend/img/marine-img.png')}}"
                        data-aos="fade-down-right"></div>
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
                وهم شركاء حقيقيون يهتمون بنجاحك. يقدم فريقنا نهجًا استشاريًا حول القانون البحري.
            </h6>
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
                    <img class="news-thumbnail" src="{{asset('frontend/img/news-thumbnail1.png')}}">
                    <div class="date-views">
                        <i class="fa-solid fa-calendar-days date-veiws-icon"></i>
                        <p class="date">22/02/020</p>
                        <i class="fa-solid fa-eye date-veiws-icon"></i>
                        <p class="views-number">22</p>
                    </div>
                    <h5 class="news-title">شحوط السفينة العملاقة مسؤولية من</h5>
                    <p class="news-text">ومن هنا وجب على المصمم أن يضع نصوصا مؤقتة على التصميم ليظهر للعميل
                        الشكل كاملاً،دور مولد النص العربى أن يوفر على المصمم عناء البحث ع</p>

                    <a class="more-news" href="#"><i class="fa-solid fa-circle-plus more-news-icon"></i></a>
                </div>
            </div>
            <div class="col-lg-4 col-md-12 news-wrap" data-aos="fade-up">
                <div class="news-div">
                    <img class="news-thumbnail" src="{{asset('frontend/img/news-thumbnail2.png')}}">
                    <div class="date-views">
                        <i class="fa-solid fa-calendar-days date-veiws-icon"></i>
                        <p class="date">22/02/020</p>
                        <i class="fa-solid fa-eye date-veiws-icon"></i>
                        <p class="views-number">22</p>
                    </div>
                    <h5 class="news-title">التطوع .. يعزز روح التعاون والعطاء</h5>
                    <p class="news-text">ومن هنا وجب على المصمم أن يضع نصوصا مؤقتة على التصميم ليظهر للعميل
                        الشكل كاملاً،دور مولد النص العربى أن يوفر على المصمم عناء البحث ع</p>

                    <a class="more-news" href="#"><i class="fa-solid fa-circle-plus more-news-icon"></i></a>
                </div>
            </div>
            <div class="col-lg-4 col-md-12 news-wrap" data-aos="fade-up">
                <div class="news-div">
                    <img class="news-thumbnail" src="{{asset('frontend/img/news-thumbnail3.png')}}">
                    <div class="date-views">
                        <i class="fa-solid fa-calendar-days date-veiws-icon"></i>
                        <p class="date">22/02/020</p>
                        <i class="fa-solid fa-eye date-veiws-icon"></i>
                        <p class="views-number">22</p>
                    </div>
                    <h5 class="news-title">مارلوج 10 .. توصيات تواجه التحديات في النقل البحري والموانئ</h5>
                    <p class="news-text">ومن هنا وجب على المصمم أن يضع نصوصا مؤقتة على التصميم ليظهر للعميل
                        الشكل كاملاً،دور مولد النص العربى أن يوفر على المصمم عناء البحث ع</p>

                    <a class="more-news" href="#"><i class="fa-solid fa-circle-plus more-news-icon"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection