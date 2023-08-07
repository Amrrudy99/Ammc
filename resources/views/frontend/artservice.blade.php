@extends('layouts.frontend')
@section('content')
<div class="hero-section-inner container">

    <h1 class="page-title">الخدمات الفنية</h1>
</div>
</div>
<div class="single-service-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-6" data-aos="fade-left">
                <ul class="organizations-list">
                    <li> عمل التصاميم الفنية والهندسية لبناء السفن حسب المتطلبات العالمية والأشراف على التنفيذ
                        في أحواض البناء العالمية . </li>
                    <li> الإشراف الهندسي والفني على إصلاح جميع أنواع السفن في الأحواض الجافة وورش الإصلاح وخدمات
                        الإصلاح تحت الماء وخدمات الغوص. </li>
                    <li> فحص ومعاينة للسفن والبضائع . </li>
                    <li> تقديم تقارير الإشراف والمعاينة على البضائع المتضررة. </li>
                </ul>
            </div>
            <div class="col-lg-6 service-pic-wrap" data-aos="fade-right">
                <img class="services-img" src="{{asset('frontend/img/service-pic1.jpg')}}">
            </div>
        </div>
    </div>
</div>
@endsection