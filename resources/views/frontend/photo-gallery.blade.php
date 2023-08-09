@extends('layouts.frontend')
@section('content')
    
<div class="hero-section-inner container">

    <h1 class="page-title">معرض الصور</h1>
</div>
</div>
<div class="single-service-section">
    <div class="container">
        <div class="row">
            <div class="photo-gallery-wrap">
                @foreach($photos as $photo)
                    @foreach($photo->gallery as $img)
                        <a class="gallery-img" href="{{ $img->getUrl() }}" data-lightbox="image-1">
                            <img class="photo-gallery-img" src="{{ $img->getUrl('preview') }}">
                        </a>
                    @endforeach
                @endforeach 
            </div>
        </div>
    </div>
</div>
@endsection