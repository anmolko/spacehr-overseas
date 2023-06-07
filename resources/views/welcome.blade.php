@extends('frontend.layouts.master')
@section('title') Home @endsection
@section('css')

@endsection
@section('content')
    @if(count($sliders) > 0)
        <div class="rts-banner-area banner-three">
            <div class="swiper mySwiperh3_banner">
                <div class="swiper-wrapper">
                    @foreach(@$sliders as $slider)
                        <div class="swiper-slide">
                            <div class="bg_banner-three bg_image rts-section-gap" style="background-image:url({{ asset('/images/sliders/'.$slider->image) }})">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="banner-three-inner">
                                                <span class="subtitle-banner">{{@$slider->subheading ?? ''}}</span>
                                                <!-- type headline start-->
                                                <h1 class="title cd-headline clip is-full-width">
                                                    {{@$slider->heading ?? ''}}
                                                </h1>
                                                <p class="disc">
                                                    {{@$slider->caption1 ?? ''}}
                                                </p>
                                                @if(@$slider->link)
                                                    <div class="button-group">
                                                        <a href="{{@$slider->link ?? ''}}" class="rts-btn btn-primary-3">{{@$slider->button ?? 'Start Exploring'}}</a>
                                                    </div>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    @endif

    @if(!empty($homepage_info->welcome_description))
        <div class="rts-about-area rts-section-gap bg-about-sm-shape">
            <div class="container">
                <div class="row g-5 align-items-center">
                    <!-- about left -->
                    <div class="col-lg-6 col-md-12 col-sm-12 col-12 order-lg-1 order-md-2 order-sm-2 order-2 mt_md--50 mt_sm--50">
                        <div class="rts-title-area">
                            <p class="pre-title">
                                {{$homepage_info->welcome_subheading ?? ''}}
                            </p>
                            <h2 class="title">{{$homepage_info->welcome_heading ?? ''}}</h2>
                        </div>
                        <div class="about-inner">
                            <p class="disc fs-18 text-justify">
                                {{ ucfirst(@$homepage_info->welcome_description) }}
                            </p>
                            <a href="#" class="rts-btn btn-primary-3 color-h-black">Get Started</a>
                        </div>
                    </div>
                    <!-- about right -->

                    <!-- about-right Start-->
                    <div class="col-lg-6 col-md-12 col-sm-12 col-12 order-lg-2 order-md-1 order-sm-1 order-1">
                        <div class="about-one-thumbnail">
                            <img src="{{ @$homepage_info->welcome_image ? asset('/images/home/welcome/'.@$homepage_info->welcome_image):''}}" alt="">
                        </div>
                    </div>
                    <!-- about-right end -->
                </div>
            </div>
        </div>
    @endif

    @if(count($latestServices) > 0)

        <div class="rts-service-area rts-section-gapTop pb--200 service-two-bg bg_image">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="rts-title-area service text-center">
                            <p class="pre-title">
                                Our Services
                            </p>
                            <h2 class="title">What we provide</h2>
                        </div>
                    </div>
                </div>
                <div class="row g-5 service padding-controler">
                    @foreach(@$latestServices as $index=>$service)
                        <div class="col-xl-4 col-md-6 col-sm-12 col-12 pb--140 pb_md--100">
                            <div class="service-two-inner">
                                <a href="{{route('service.single',$service->slug)}}" class="thumbnail">
                                    <img class="lazy" data-src="{{asset('/images/service/thumb/thumb_'.@$service->banner_image)}}" alt="Business_image"></a>
                                <div class="body-content">
                                    <div class="hidden-area">
                                        <h5 class="title">{{ucwords(@$service->title)}}</h5>
                                        <p class="dsic">
                                           {{ elipsis(strip_tags($service->description))}}
                                        </p>
                                        <a class="rts-read-more-two color-primary" href="{{route('service.single',$service->slug)}}">Read More<i class="fa fa-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    @endif

    <!-- business goal area -->
    <div class="rts-business-goal mt--0 rts-section-gapBottom">
        <div class="container">
            <div class="row">
                <!-- business goal left -->
                <div class="col-lg-6">
                    <div class="business-goal-one">
                        <img src="assets/images/business-goal/01.jpg" alt="Business_Goal">
                        <img class="small" src="assets/images/business-goal/sm-01.jpg" alt="Business_Goal">
                    </div>
                </div>
                <!-- business goal right -->

                <!-- right area business -->
                <div class="col-lg-6 mt--35 mt_md--70 mt_sm--70">
                    <div class="business-goal-right">
                        <div class="rts-title-area business text-start pl--30">
                            <p class="pre-title">
                                JUST A CONSULTANCY
                            </p>
                            <h2 class="title">We know how to manage
                                business globally</h2>
                        </div>
                        <div class="rts-business-goal pl--30">
                            <div class="single-goal">
                                <img src="assets/images/business-goal/icon/01.svg" alt="business_Icone" class="thumb">
                                <div class="goal-wrapper">
                                    <h6 class="title">Best Business Consulting</h6>
                                    <p class="disc">Fusce condimentum mattis placerat odio donec lacus porta torquent,
                                        mauris gravida rutrum</p>
                                </div>
                            </div>
                            <div class="single-goal">
                                <img src="assets/images/business-goal/icon/02.svg" alt="business_Icone" class="thumb">
                                <div class="goal-wrapper">
                                    <h6 class="title">24/7 Customer Support</h6>
                                    <p class="disc">Fusce condimentum mattis placerat odio donec lacus porta torquent,
                                        mauris gravida rutrum</p>
                                </div>
                            </div>
                            <div class="goal-button-wrapper mt--70">
                                <a href="contactus.html" class="rts-btn btn-primary color-h-black">Contact Us</a>
                                <div class="vedio-icone">
                                    <a id="play-video" class="video-play-button" href="#">
                                        <span></span>
                                        <span class="outer-text">Watch Video</span>
                                    </a>
                                    <div id="video-overlay" class="video-overlay">
                                        <a class="video-overlay-close">×</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- right area business ENd -->
            </div>
        </div>
    </div>
    <!-- business goal area End -->

    <!-- rts-counter up area start -->
    <div class="rts-counter-up-area rts-section-gap counter-bg">
        <div class="container">
            <div class="row">
                <!-- counter up area -->
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="single-counter">
                        <img src="assets/images/counterup/icon/01.svg" alt="Business_counter">
                        <div class="counter-details">
                            <h2 class="title"><span class="counter animated fadeInDownBig">858</span></h2>
                            <p class="disc">Successful Projects</p>
                        </div>
                    </div>
                </div>
                <!-- counter up area -->
                <!-- counter up area -->
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="single-counter pl--10 justify-content-center two pl--30">
                        <img src="assets/images/counterup/icon/02.svg" alt="Business_counter">
                        <div class="counter-details">
                            <h2 class="title"><span class="counter animated fadeInDownBig">650</span></h2>
                            <p class="disc">Media Activities</p>
                        </div>
                    </div>
                </div>
                <!-- counter up area -->
                <!-- counter up area -->
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="single-counter pl--10 justify-content-center three pl--50">
                        <img src="assets/images/counterup/icon/03.svg" alt="Business_counter">
                        <div class="counter-details">
                            <h2 class="title"><span class="counter animated fadeInDownBig">567</span></h2>
                            <p class="disc">Skilled Experts</p>
                        </div>
                    </div>
                </div>
                <!-- counter up area -->
                <!-- counter up area -->
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="single-counter pl--10 justify-content-end four">
                        <img src="assets/images/counterup/icon/04.svg" alt="Business_counter">
                        <div class="counter-details">
                            <h2 class="title happy"><span class="counter animated fadeInDownBig">28</span></h2>
                            <p class="disc">Happy Clients</p>
                        </div>
                    </div>
                </div>
                <!-- counter up area -->
            </div>
        </div>
    </div>
    <!-- rts-counter up area end -->

    <!-- start gallery section -->
    <div class="rts-gallery-area rts-section-gap gallery-bg bg_image">
        <div class="container">
            <div class="row">
                <div class="rts-title-area gallery text-start pl_sm--20">
                    <p class="pre-title">
                        Popular Projects
                    </p>
                    <h2 class="title">Our Completed Projects</h2>
                </div>
            </div>
            <div class="row mt--45">
                <div class="col-12">
                    <div class="swiper mygallery mySwipers">
                        <div class="swiper-wrapper gallery">
                            <div class="swiper-slide">
                                <div class="row g-5 w-g-100">
                                    <div class="col-lg-7 col-md-12 col-sm-12 col-12">
                                        <div class="thumbnail-gallery">
                                            <img src="assets/images/gallery/gallery-01.jpg" alt="business-images">
                                        </div>
                                    </div>
                                    <div class="col-lg-5 col-md-12 col-sm-12 col-12">
                                        <div class="bg-right-gallery">
                                            <div class="icon">
                                                <img src="assets/images/gallery/icon/01.svg" alt="Business-gallery">
                                            </div>
                                            <a href="#">
                                                <h4 class="title">Pro Business Solution</h4>
                                            </a>
                                            <span>Case Study, Growth</span>
                                            <p class="disc">Ornare etiam laoreet dictumst nisl quisque scelerisque cras
                                                ut porta interdum purus mattis iaculis litora turpis torquent posuere.
                                            </p>
                                            <a class="rts-btn btn-primary" href="project-details.html">View Project</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="row g-5 w-g-100">
                                    <div class="col-lg-7">
                                        <div class="thumbnail-gallery">
                                            <img src="assets/images/gallery/gallery-02.jpg" alt="business-images">
                                        </div>
                                    </div>
                                    <div class="col-lg-5">
                                        <div class="bg-right-gallery">
                                            <div class="icon">
                                                <img src="assets/images/gallery/icon/01.svg" alt="Business-gallery">
                                            </div>
                                            <a href="#">
                                                <h4 class="title">Finbiz Pro Business</h4>
                                            </a>
                                            <span>Case Study, Growth</span>
                                            <p class="disc">In the literal sense, the term “Business” means the state of
                                                being busy. But it is a very wide connotation of business.</p>
                                            <a class="rts-btn btn-primary" href="project-details.html">View Project</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="row g-5 w-g-100">
                                    <div class="col-lg-7">
                                        <div class="thumbnail-gallery">
                                            <img src="assets/images/gallery/gallery-03.jpg" alt="business-images">
                                        </div>
                                    </div>
                                    <div class="col-lg-5">
                                        <div class="bg-right-gallery">
                                            <div class="icon">
                                                <img src="assets/images/gallery/icon/01.svg" alt="Business-gallery">
                                            </div>
                                            <a href="#">
                                                <h4 class="title">Pro Solution Business</h4>
                                            </a>
                                            <span>Case Study, Growth</span>
                                            <p class="disc">But a very wide of business because it
                                                covers every human activity. Business is really concerned with the
                                                production.
                                            </p>
                                            <a class="rts-btn btn-primary" href="project-details.html">View Project</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- start gallery section -->

    <!-- start trusted client section -->
    <div class="rts-trusted-client rts-section-gapBottom">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="title-area-client text-center">
                        <p class="client-title">Our Trusted Clients</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="client-wrapper-one">
                    <a href="#"><img src="assets/images/client/01.png" alt="business_finbiz"></a>
                    <a href="#"><img src="assets/images/client/02.png" alt="business_finbiz"></a>
                    <a href="#"><img src="assets/images/client/03.png" alt="business_finbiz"></a>
                    <a href="#"><img src="assets/images/client/04.png" alt="business_finbiz"></a>
                    <a href="#"><img src="assets/images/client/05.png" alt="business_finbiz"></a>
                    <a href="#"><img src="assets/images/client/06.png" alt="business_finbiz"></a>
                </div>
            </div>
        </div>
    </div>
    <!-- end trusted client section -->

    <!-- start team section -->
    <div class="rts-team-area rts-section-gap bg-team">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="rts-title-area team text-center">
                        <p class="pre-title">
                            Professionals Team
                        </p>
                        <h2 class="title">Professionals Team</h2>
                    </div>
                </div>
            </div>
            <div class="row g-5 mt--0">

                <div class="swiper mySwiperh1_team">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="team-single-one-start">
                                <div class="team-image-area">
                                    <a href="team-details.html">
                                        <img src="assets/images/team/tm/01.jpg" alt="Business_Team_single">
                                        <div class="team-social">
                                            <div class="main">
                                                <i class="fal fa-plus"></i>
                                            </div>
                                            <div class="team-social-one">
                                                <i class="fab fa-youtube"></i>
                                                <i class="fab fa-twitter"></i>
                                                <i class="fab fa-instagram"></i>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="single-details">
                                    <a href="team-details.html">
                                        <h5 class="title">Archer Graham</h5>
                                    </a>
                                    <p>Founder</p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="team-single-one-start">
                                <div class="team-image-area">
                                    <a href="team-details.html">
                                        <img src="assets/images/team/tm/02.jpg" alt="Business_Team_single">
                                        <div class="team-social">
                                            <div class="main">
                                                <i class="fal fa-plus"></i>
                                            </div>
                                            <div class="team-social-one">
                                                <i class="fab fa-youtube"></i>
                                                <i class="fab fa-twitter"></i>
                                                <i class="fab fa-instagram"></i>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="single-details">
                                    <a href="team-details.html">
                                        <h5 class="title">Amelia Clover</h5>
                                    </a>
                                    <p>Co-Founder</p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="team-single-one-start">
                                <div class="team-image-area">
                                    <a href="team-details.html">
                                        <img src="assets/images/team/tm/03.jpg" alt="Business_Team_single">
                                        <div class="team-social">
                                            <div class="main">
                                                <i class="fal fa-plus"></i>
                                            </div>
                                            <div class="team-social-one">
                                                <i class="fab fa-youtube"></i>
                                                <i class="fab fa-twitter"></i>
                                                <i class="fab fa-instagram"></i>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="single-details">
                                    <a href="team-details.html">
                                        <h5 class="title">Beckett Hayden</h5>
                                    </a>
                                    <p>Deputy Manager</p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="team-single-one-start">
                                <div class="team-image-area">
                                    <a href="team-details.html">
                                        <img src="assets/images/team/tm/04.jpg" alt="Business_Team_single">
                                        <div class="team-social">
                                            <div class="main">
                                                <i class="fal fa-plus"></i>
                                            </div>
                                            <div class="team-social-one">
                                                <i class="fab fa-youtube"></i>
                                                <i class="fab fa-twitter"></i>
                                                <i class="fab fa-instagram"></i>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="single-details">
                                    <a href="team-details.html">
                                        <h5 class="title">Julian Wyat</h5>
                                    </a>
                                    <p>Finance Manager</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end team section -->

    <!-- rts features area start -->
    <div class="rts-feature-area rts-section-gap">
        <div class="container-fluid padding-controler plr--120">
            <div class="row bg-white-feature  pt--120 pb--120">
                <div class="col-xl-6 col-lg-12">
                    <div class="feature-left-area">
                        <img src="assets/images/feature/01.png" alt="">
                    </div>
                </div>
                <div class="col-xl-6 col-lg-12">
                    <div class="rts-title-area feature text-start pl--30 pl_sm--0">
                        <p class="pre-title">
                            Boost Your Business Today
                        </p>
                        <h2 class="title feature-title">Most Reliable Efficient <br>
                            Consulting Agency</h2>
                        <p>Porttitor ornare fermentum aliquam pharetra ut facilisis gravida risus suscipit feugiat fusce
                            conubia ridiculus tristique solving parturient natoque vulputate risu hasellus quam
                            tincidunt posuere aliquam accumsan</p>

                    </div>

                    <div class="feature-one-wrapper pl--30 mt--40 pl_sm--0">
                        <div class="single-feature-one">
                            <i class="fal fa-check"></i>
                            <p>Fast Growing Sells</p>
                        </div>
                        <div class="single-feature-one">
                            <i class="fal fa-check"></i>
                            <p>24/7 Quality Services</p>
                        </div>
                        <div class="single-feature-one">
                            <i class="fal fa-check"></i>
                            <p>Expert Members</p>
                        </div>
                        <div class="single-feature-one">
                            <i class="fal fa-check"></i>
                            <p>Best Quality Services</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- rts features area end -->

    <!-- start client feed back section -->
    <div class="rts-client-feedback">
        <div class="container">
            <div class="row">
                <!-- start testimonials area -->
                <div class="col-lg-7">
                    <div class="rts-title-area reviews text-start pl--30 pt--70">
                        <p class="pre-title">
                            Our Testimonials
                        </p>
                        <h2 class="title">Client’s Feedbacks</h2>

                        <!-- swiper area start -->
                        <div class="swiper mySwipertestimonial">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="testimonial-inner">
                                        <p class="disc text-start">
                                            “Consectetur adipiscing elit velit porta sapien purus erat nec, a ornare
                                            laoreet sem gravida accumsan in commodo aliquet nascetur maecenas. Sem
                                            tempus hendrerit diam mauris leo magna sociosqu viverra, accumsan massa
                                            tristique egestas cum sodales hac lacinia feugiat scelerisque porttitor”
                                        </p>
                                        <div class="testimonial-bottom-one">
                                            <div class="thumbnail">
                                                <img src="assets/images/testimonials/02.png" alt="business-testimonials">
                                            </div>
                                            <div class="details">
                                                <a href="#">
                                                    <h5 class="title">David Smith</h5>
                                                </a>
                                                <span>JHKL Owner</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="testimonial-inner">
                                        <p class="disc text-start">
                                            “Consectetur adipiscing elit velit porta sapien purus erat nec, a ornare
                                            laoreet sem gravida accumsan in commodo aliquet nascetur maecenas. Sem
                                            tempus hendrerit diam mauris leo magna sociosqu viverra, accumsan massa
                                            tristique egestas cum sodales hac lacinia feugiat scelerisque porttitor”
                                        </p>
                                        <div class="testimonial-bottom-one">
                                            <div class="thumbnail">
                                                <img src="assets/images/testimonials/02.png" alt="business-testimonials">
                                            </div>
                                            <div class="details">
                                                <a href="#">
                                                    <h5 class="title">David Smith</h5>
                                                </a>
                                                <span>JHKL Owner</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="testimonial-inner">
                                        <p class="disc text-start">
                                            “Consectetur adipiscing elit velit porta sapien purus erat nec, a ornare
                                            laoreet sem gravida accumsan in commodo aliquet nascetur maecenas. Sem
                                            tempus hendrerit diam mauris leo magna sociosqu viverra, accumsan massa
                                            tristique egestas cum sodales hac lacinia feugiat scelerisque porttitor”
                                        </p>
                                        <div class="testimonial-bottom-one">
                                            <div class="thumbnail">
                                                <img src="assets/images/testimonials/02.png" alt="business-testimonials">
                                            </div>
                                            <div class="details">
                                                <a href="#">
                                                    <h5 class="title">David Smith</h5>
                                                </a>
                                                <span>JHKL Owner</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-button-next"></div>
                            <div class="swiper-button-prev"></div>
                        </div>
                        <!-- swiper area end -->
                    </div>
                </div>
                <!-- end testimonials are -->
                <!-- images area -->
                <div class="col-lg-5">
                    <div class="rts-test-one-image-inner">
                        <img src="assets/images/testimonials/01.png" alt="business_testimobials">
                    </div>
                </div>
                <!-- image area end -->
            </div>
        </div>
    </div>
    <!-- start client feed back section End -->

    <!-- blog area start -->
    <div class="rts-blog-area rts-section-gap bg-secondary">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="title-area text-center">
                        <span>Blog Posts</span>
                        <h2 class="title">News & Updates</h2>
                    </div>
                </div>
            </div>
            <div class="g-5 mt--20">
                <div class="swiper mySwiperh1_blog">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="single-blog-one-wrapper">
                                <div class="thumbnail">
                                    <img src="assets/images/blog/01.jpg" alt="business_Blog">
                                    <div class="blog-badge">
                                        <span>25.05.2023</span>
                                    </div>
                                </div>
                                <div class="blog-content">
                                    <p><span>Business Solution </span>/ by David Dolean</p>
                                    <a href="blog-details.html">
                                        <h5 class="title">The quick settle tips of the new
                                            ages exist </h5>
                                    </a>
                                    <a class="rts-read-more btn-primary" href="blog-details.html"><i
                                            class="far fa-arrow-right"></i>Read
                                        More</a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="single-blog-one-wrapper">
                                <div class="thumbnail">
                                    <img src="assets/images/blog/02.jpg" alt="business_Blog">
                                    <div class="blog-badge">
                                        <span>25.05.2023</span>
                                    </div>
                                </div>
                                <div class="blog-content">
                                    <p><span>Business Solution </span>/ by David Dolean</p>
                                    <a href="blog-details.html">
                                        <h5 class="title">Old generation settle tips of the new
                                            ages upps ! </h5>
                                    </a>
                                    <a class="rts-read-more btn-primary" href="blog-details.html"><i
                                            class="far fa-arrow-right"></i>Read
                                        More</a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="single-blog-one-wrapper">
                                <div class="thumbnail">
                                    <img src="assets/images/blog/03.jpg" alt="business_Blog">
                                    <div class="blog-badge">
                                        <span>25.05.2023</span>
                                    </div>
                                </div>
                                <div class="blog-content">
                                    <p><span>Business Solution </span>/ by David Dolean</p>
                                    <a href="blog-details.html">
                                        <h5 class="title">Monkey Form settle tips of the new
                                            ages end </h5>
                                    </a>
                                    <a class="rts-read-more btn-primary" href="blog-details.html"><i
                                            class="far fa-arrow-right"></i>Read
                                        More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- blog area end -->
@endsection
@section('js')
    <script src="{{asset('assets/frontend/js/lightbox.min.js')}}"></script>
@endsection
