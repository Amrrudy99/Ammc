@extends('layouts.frontend')
@section('content')
<div class="hero-section-inner container">

    <h1 class="page-title"> تواصل معنا</h1>
</div>
</div>
<div class="contact-page-list">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6">
                <div class="media single-contact-list">
                    <div class="media-left">
                        <img src="{{asset('frontend/img/phone.png')}}" alt="img">
                    </div>
                    <div class="media-body">
                        <h5>تواصل معنا</h5>
                        <h6>88 01234 2345 12</h6>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="media single-contact-list">
                    <div class="media-left">
                        <img src="{{asset('frontend/img/email1.png')}}" alt="img">
                    </div>
                    <div class="media-body">
                        <h5>البريد الإلكتروني</h5>
                        <h6>info@mail.com</h6>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="media single-contact-list">
                    <div class="media-left">
                        <img src="{{asset('frontend/img/address.png')}}" alt="img">
                    </div>
                    <div class="media-body">
                        <h5>العنوان</h5>
                        <h6>المملكة العربية السعودية</h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="contact-area">
    <div class="container">
        <div class="contact-inner-1">

            <div class="row">
                <div class="col-lg-8">
                    <img class="w-100" src="{{asset('frontend/img/4.png')}}" alt="img">
                </div>
                <div class="col-lg-4">
                    <div class="section-title mb-0">
                        <h6 class="sub-title">إبق على تواصل معنا</h6>

                        <form class="mt-4">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="single-input-inner style-border">
                                        <input type="text" placeholder="الإسم">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="single-input-inner style-border">
                                        <input type="text" placeholder="البريد الإلكتروني">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="single-input-inner style-border">
                                        <input type="text" placeholder="الهاتف">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="single-input-inner style-border">
                                        <input type="text" placeholder="عنوان الموضوع">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="single-input-inner style-border">
                                        <textarea placeholder="الرسالة"></textarea>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <a class="btn btn-black mt-0 w-100 border-radius-5" href="#">إرسال</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection