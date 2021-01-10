@extends('layouts.master')
@section('title')
    Who We Are
@endsection
@section('content')
    <!-- Slider Area Start -->
    <section class="slider-area who-slider-area">
        <div class="sliderr">
            <div class="single-slide" style="background-image:url({{asset('public/assets/img/XPRO0418.jpeg')}})">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="slide-table">
                                <div class="slide-tablecell">
                                    <h2>Who We Are</h2>
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
                        <h2>Who We Are</h2>
                        
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
    <!-- why aurora area start -->
    <section class="why-aurora">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 col-md-7">
                    <div class="single-why-aurora">
                        <h4>WHY PHOTOGRAPHS</h4>
                        <ul>
                            <li>Educated and highly skilled photographers and cinematographers lead by J.H. Shuvo, who has already won multiple international awards from WPPA, PPAC & WPPI.</li>
                            <li>Pro Level Gears & Equipments.</li>
                            <li>Own Post Processing Panel Facility with strong professionals & expert editors.</li>
                            <li>We believe in treating our customers with respect and faith.</li>
                            <li>We grow through creativity, invention and innovation.</li>
                            <li>We integrate honesty, integrity and business ethics into all aspects of our business functioning.</li>
                            <li>Our photographers have chosen their passion as their profession.</li>
                            <li>Strong Quality Control Management.</li>
                            <li>Aordability for all.</li>
                            <li>Dedicated After Sales Support Team.</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-5 col-md-5">
                    <div class="single-why-aurora">
                        <img src="{{asset('public/assets/img/about-ceo.png')}}" alt="" />
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