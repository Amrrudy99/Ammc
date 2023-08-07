@extends('layouts.frontend')
@section('content')
<div class="hero-section-inner container">

    <h1 class="page-title">{{$service->name}}</h1>
</div>
</div>
<div class="single-service-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-6" data-aos="fade-left">
                <p class="p-text1">
                    {{$service->description}}
                 </p>
                <ul class="organizations-list">
                    <li> دراسات الجدوى الاقتصادية للمشاريع التجارية والصناعية والبحرية . </li>
                    <li> دراسات لإنشاء شركات ملاحية . </li>
                    <li> دراسة الجدوى الاقتصادية للدخول في المنافسات العامة والتجهيز لدخول في منافسات نقل وبيع
                        وشراء البترول ومشتقاته . </li>
                    <li> عمل دراسات الجدوى الاقتصادية لإقامة الأكاديميات البحرية ومراكزالتدريب. </li>
                    <li> تقييم أداء وإعادة هيكلة الشركات الملاحية </li>
                </ul>
            </div>
            <div class="col-lg-6 service-pic-wrap" data-aos="fade-right">
                <img class="services-img" src="{{ $service->media }}">
            </div>
        </div>
    </div>
</div>
@endsection
