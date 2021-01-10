@extends('layouts.master')
@section('title')
    Contact
@endsection
@section('content')
    <!-- Slider Area Start -->
    <section class="slider-area gallery-slider-area">
        <div class="sliderr">
            <div class="single-slide" style="background-image:url({{asset('public/assets/img/slider/Couple-2.jpg')}})">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="slide-table">
                                <div class="slide-tablecell">
                                    <h2>Contact</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Slider Area End -->
    <!-- Contact AREA START -->
    <section class="contact-area pb-100">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="single-con-info pt-50 pb-50">
                        <h6>SYLHET OFFICE</h6>
                        <p class="con-text">52 Hazaribagh, Shahi Eidgah, Sylhet</p>
                        <p><span>Phone:</span>  +8801671621860</p>
                        <p><span>Email:</span> info@photographs.com</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="contact-form-area">
                        <h4>Fill out the form & we'll be in touch soon!</h4>
                        <form action="#">
                            <div class="single-input">
                                <input type="text" placeholder="Your Name"/>
                                <input type="text" placeholder="Your Email Address"/>
                            </div>
                            <div class="single-input s-2">
                                <input type="text" placeholder="Your Mobile Number"/>
                                <input type="text" placeholder="Your Subject"/>
                            </div>
                            <textarea name="" id="" cols="30" rows="10" placeholder="Your Message"></textarea>
                            <div class="con-form-adiv"><a href="#">Send Message</a></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
