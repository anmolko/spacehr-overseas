@extends('frontend.layouts.master')
@section('title')  Page Not Found @endsection
@section('content')

    <div class="rts-breadcrumb-area breadcrumb-bg bg_image">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 breadcrumb-1">
                    <h1 class="title">Not found</h1>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                    <div class="bread-tag">
                        <a href="/">Home</a>
                        <span> / </span>
                        <a href="#" class="active">404 Error</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="rts-404-area rts-section-gap">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="404wrapper text-center">
                        <div class="thumbnail">
                            <img class="lazy" data-src="{{ asset('assets/frontend/images/contact/shape/404.png') }}" alt="">
                        </div>
                        <h2 class="title mt--40">
                            Oops! Nothing Was Found
                        </h2>
                        <p class="disc">Sorry, we could not find the page you where looking for. We suggest <br> that you
                            return to homepage.</p>
                        <a class="rts-btn btn-primary" href="/">Back To Homepage</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
