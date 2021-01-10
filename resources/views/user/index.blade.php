@extends('layouts.master')
@section('title')
    Home
@endsection
@section('content')
    <!-- Slider Area Start -->
    <section class="slider-area" id="home">
        <div class="slider owl-carousel">
            <div class="single-slide" style="background-image:url({{asset('public/assets/img/slider/slide1.jpg')}})">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="slide-table">
                                <div class="slide-tablecell">
                                    <h2>We capture your memories forever</h2>
                                    
                                    <a href="{{action('User\GalleryController@index')}}" class="box-btn">view gallery<i class="fa fa-angle-double-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="single-slide" style="background-image:url({{asset('public/assets/img/slider/Couple-2.jpg')}})">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="slide-table">
                                <div class="slide-tablecell">
                                    <h2>Life is fun. You’ve got the picture to prove it</h2>
                                    
                                    <a href="{{action('User\GalleryController@index')}}" class="box-btn">view gallery <i class="fa fa-angle-double-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="single-slide" style="background-image:url({{asset('public/assets/img/slider/slide-3.jpg')}})">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="slide-table">
                                <div class="slide-tablecell">
                                    <h2>Photography is truth!</h2>
                                    
                                    <a href="{{action('User\GalleryController@index')}}" class="box-btn">view gallery <i class="fa fa-angle-double-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Slider Area End -->
    <!-- Experience area start -->
    <section class="experience-area pt-100 ">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="single-exp">
                        <img src="{{asset('public/assets/img/HP_Icon_Camera.png')}}" alt="img" />
                        <h2>Photography</h2>
                        <hr class="single-hr">
                        <p>The photographer of Photographss career has cultivated their unique ability of capturing moments and emotions in beautiful ways, a skill that perfectly translates into their work.A skill that perfectly translates into their work.</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="single-exp">
                        <img src="{{asset('public/assets/img/HP_Icon_Video.png')}}" alt="img" />
                        <h2>Videography</h2>
                        <hr class="single-hr">
                        <p>Staying on top of the latest tech, photographers holds a full Drone Operator’s licence allowing them to capture footage that would otherwise be impossible to achieve.A skill that perfectly translates into their work.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Experience area end -->
    <section class="about-area pt-100 pb-100">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="section-title text-center pb-50">
                        <h2>About Us</h2>
                        
                    </div>
                </div>
            </div>
            <div class="row">
                 <div class="col-md-3"></div>
                <div class="col-md-6">
                    <div class="about-img">
                        <img src="{{asset('public/assets/img/slider/slide1.jpg')}}" alt="" />
                    </div>
                </div>
                <div class="col-md-3"></div>
                <div class="col-md-12">
                    <div class="about-text">
                      <p>We specialize in wedding photography, corporate, family and senior portraits, often traveling to your destination to capture the perfect moment in the perfect place. We will be there with you every step of the way to guarantee your special moments are captured for all time.</p>
                      <p>To us photography is about people being real and then letting us paint a picture of that moment to remember it forever. This is the story that matters most: real people, real stories, real moments.

We are incredibly blessed to have a team of photographers who work with us on any given weekend. Please take a few minutes to get to know us.

We would love to visit with you by phone or in person and talk about your wedding, event, portrait session or video project. Please reach out to us through the Contact Page.</p>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- gallery area start -->
    <section class="gallery-area">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="section-title text-center pb-50">
                        <h2>Our Works</h2>
                        <p>We do photography with passion </p>
                    </div>
                </div>
            </div>
            <div class="row masonry-menu pt-50 pb-50">
                <div class="col-xl-12">
                    <div class="gallry-menu mb-30">
                        <button class="active" data-filter="*">All</button>
                        <button data-filter=".cat1">Weddings</button>
                        <button data-filter=".cat2">People</button>
                        <button data-filter=".cat3">Property</button>
                        <button data-filter=".cat4">Bithday</button>
                        <button data-filter=".cat5">Nature</button>
                        <button data-filter=".cat6">Baby</button>
                        <button data-filter=".cat7">Special</button>
                    </div>
                </div>
            </div>
            <div class="row gallery-active">
                <div class="col-md-4 grid-item cat2 cat4 cat7">
                    <div class="single-gallery mb-30">
                        <img src="{{asset('public/assets/img/masonry/1.jpg')}}" alt="img" />
                        <div class="overlay">
                            <div class="overlay-content">
                                <div class="gallery-header-social-1">
                                    <a href=""><i class="fa fa-facebook"></i></a>
                                    <a href=""><i class="fa fa-twitter"></i></a>
                                </div>
                                <div class="gallery-header-social-2">
                                    <a href=""><i class="fa fa-youtube"></i></a>
                                    <a href=""><i class="fa fa-google-plus"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 grid-item cat3 cat5 cat6 cat4">
                    <div class="single-gallery mb-30">
                        <img src="{{asset('public/assets/img/masonry/2.jpg')}}" alt="img" />
                        <div class="overlay">
                            <div class="overlay-content">
                                <div class="gallery-header-social-1">
                                    <a href=""><i class="fa fa-facebook"></i></a>
                                    <a href=""><i class="fa fa-twitter"></i></a>
                                </div>
                                <div class="gallery-header-social-2">
                                    <a href=""><i class="fa fa-youtube"></i></a>
                                    <a href=""><i class="fa fa-google-plus"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 grid-item cat1 cat5 cat2">
                    <div class="single-gallery mb-30">
                        <img src="{{asset('public/assets/img/masonry/3.jpg')}}" alt="img" />
                        <div class="overlay">
                            <div class="overlay-content">
                                <div class="gallery-header-social-1">
                                    <a href=""><i class="fa fa-facebook"></i></a>
                                    <a href=""><i class="fa fa-twitter"></i></a>
                                </div>
                                <div class="gallery-header-social-2">
                                    <a href=""><i class="fa fa-youtube"></i></a>
                                    <a href=""><i class="fa fa-google-plus"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 grid-item cat2 cat4 cat6 cat5">
                    <div class="single-gallery mb-30">
                        <img src="{{asset('public/assets/img/masonry/4.jpg')}}" alt="img" />
                        <div class="overlay">
                            <div class="overlay-content">
                                <div class="gallery-header-social-1">
                                    <a href=""><i class="fa fa-facebook"></i></a>
                                    <a href=""><i class="fa fa-twitter"></i></a>
                                </div>
                                <div class="gallery-header-social-2">
                                    <a href=""><i class="fa fa-youtube"></i></a>
                                    <a href=""><i class="fa fa-google-plus"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 grid-item cat1 cat5">
                    <div class="single-gallery mb-30">
                        <img src="{{asset('public/assets/img/masonry/5.jpg')}}" alt="img" />
                        <div class="overlay">
                            <div class="overlay-content">
                                <div class="gallery-header-social-1">
                                    <a href=""><i class="fa fa-facebook"></i></a>
                                    <a href=""><i class="fa fa-twitter"></i></a>
                                </div>
                                <div class="gallery-header-social-2">
                                    <a href=""><i class="fa fa-youtube"></i></a>
                                    <a href=""><i class="fa fa-google-plus"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 grid-item cat3 ">
                    <div class="single-gallery mb-30">
                        <img src="{{asset('public/assets/img/masonry/6.jpg')}}" alt="img" />
                        <div class="overlay">
                            <div class="overlay-content">
                                <div class="gallery-header-social-1">
                                    <a href=""><i class="fa fa-facebook"></i></a>
                                    <a href=""><i class="fa fa-twitter"></i></a>
                                </div>
                                <div class="gallery-header-social-2">
                                    <a href=""><i class="fa fa-youtube"></i></a>
                                    <a href=""><i class="fa fa-google-plus"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 grid-item cat3 cat4">
                    <div class="single-gallery mb-30">
                        <img src="{{asset('public/assets/img/masonry/12.jpg')}}" alt="img" />
                        <div class="overlay">
                            <div class="overlay-content">
                                <div class="gallery-header-social-1">
                                    <a href=""><i class="fa fa-facebook"></i></a>
                                    <a href=""><i class="fa fa-twitter"></i></a>
                                </div>
                                <div class="gallery-header-social-2">
                                    <a href=""><i class="fa fa-youtube"></i></a>
                                    <a href=""><i class="fa fa-google-plus"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 grid-item cat3 cat4 cat1 cat7 cat5">
                    <div class="single-gallery mb-30">
                        <img src="{{asset('public/assets/img/masonry/15.jpg')}}" alt="img" />
                        <div class="overlay">
                            <div class="overlay-content">
                                <div class="gallery-header-social-1">
                                    <a href=""><i class="fa fa-facebook"></i></a>
                                    <a href=""><i class="fa fa-twitter"></i></a>
                                </div>
                                <div class="gallery-header-social-2">
                                    <a href=""><i class="fa fa-youtube"></i></a>
                                    <a href=""><i class="fa fa-google-plus"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 grid-item cat3 cat4 cat6">
                    <div class="single-gallery mb-30">
                        <img src="{{asset('public/assets/img/masonry/8.jpg')}}" alt="img" />
                        <div class="overlay">
                            <div class="overlay-content">
                                <div class="gallery-header-social-1">
                                    <a href=""><i class="fa fa-facebook"></i></a>
                                    <a href=""><i class="fa fa-twitter"></i></a>
                                </div>
                                <div class="gallery-header-social-2">
                                    <a href=""><i class="fa fa-youtube"></i></a>
                                    <a href=""><i class="fa fa-google-plus"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- counterup area -->
    <section class="counter-up-area">
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <div class="single-counter">
                        <i class="fa fa-camera"></i>
                        <h2 class="counter">1040</h2>
                        <p>photos</p>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="single-counter">
                        <i class="fa fa-video-camera" aria-hidden="true"></i>
                        <h2 class="counter">304</h2>
                        <p>cinematographis</p>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="single-counter">
                        <i class="fa fa-trophy" aria-hidden="true"></i>
                        <h2 class="counter">234</h2>
                        <p>awards</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
