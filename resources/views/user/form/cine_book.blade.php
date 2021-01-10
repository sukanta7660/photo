@extends('layouts.master')
@section('title')
    Cinematography Package Booking
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
                                    <h2>Cinematography Package Booking</h2>
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
    <!-- Contact AREA START -->
    <section class="contact-area pb-100">
        <div class="container">
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-6">
                    <div class="single-con-info pt-50 pb-50">
                        <h6>{{$table->packageName}}</h6>
                        <p class="con-text">Number of Prints: {{$table->videographers}}</p>
                        <p>Recording Quality: {{$table->vdo_quality}}</p>
                        <p>Videographer: {{$table->photographers}}</p>
                        <p>Hours: {{$table->hours}}</p>
                        <p>{{money($table->amount)}}</p>
                    </div>
                </div>
                <div class="col-md-3"></div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="contact-form-area">
                        <h4>Fill out the form & Book your best choice!</h4>
                        @if ($errors->any())
                            <div style="margin: 20px;" class="alert alert-danger">
                                <ul style="list-style: circle">
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <form action="{{action('User\PackageBookingController@cine_book')}}" method="post" enctype="multipart/form-data">
                            {{csrf_field()}}
                            <input type="hidden" name="cinepackageID" value="{{$table->cinepackageID}}">
                            <input type="hidden" name="packageName" value="{{$table->packageName}}">
                            <div class="single-input">
                                <label style="color: #898282;margin-left: 10px;font-size: 13px;" for="phone">Name</label>
                                <input name="customerName" value="{{Auth::user()->name}}" type="text" placeholder="Your Name"/>
                                <label style="color: #898282;margin-left: 10px;font-size: 13px;" for="phone">Email</label>
                                <input name="customerEmail" value="{{Auth::user()->email}}" type="email" placeholder="Your Email"/>
                                <label style="color: #898282;margin-left: 10px;font-size: 13px;" for="phone">Address</label>
                                <input name="address" type="text" placeholder="Your Address"/>
                            </div>
                            <div class="single-input s-2">
                                <label style="color: #898282;margin-left: 10px;font-size: 13px;" for="phone">Mobile</label>
                                <input name="phone" id="phone" type="text" placeholder="Your Mobile Number"/>
                                <label style="color: #898282;margin-left: 10px;font-size: 13px;" for="phone">Total Amount</label>
                                <input name="amount" type="number" value="{{$table->amount}}" min="0" placeholder="Amount"/>
                                <label style="color: #898282;margin-left: 10px;font-size: 13px;" for="phone">Event Date</label>
                                <input name="event_date" type="date" placeholder="Your Event Date"/>
                            </div>
                            <label style="color: #898282;margin-left: 10px;font-size: 13px;" for="message">Any other requirements? Then write here ( optional )</label>
                            <textarea name="message" id="message" cols="30" rows="10" placeholder="Your Message"></textarea>
                            <div class="form-group" style="margin-top: 10px">
                                <label for="exampleFormControlSelect2" style="color: #898282;font-size: 14px;">Choose Videographer ( optional )</label>
                                <select name="photographer" class="form-control" id="exampleFormControlSelect2">
                                    <option value="">Choose Videographer</option>
                                    @foreach($photographeer as $row)
                                        <option value="{{$row->name}}">{{$row->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <hr>

    <!-- For demo purpose -->
    <div class="row mb-4">
        <div class="col-lg-8 mx-auto text-center">
            <h1 style="
    color: #665f5f;
    font-size: 23px;
    padding: 10px;
    border: 1px dotted;
    font-weight: 500;
" class="display-4">Make Payment</h1>
        </div>
    </div> <!-- End -->
    <div class="row">
        <div class="col-lg-6 mx-auto">
            <div class="card ">
                <div class="card-header">
                    <div class="bg-white shadow-sm pt-4 pl-2 pr-2 pb-2">
                        <!-- Credit card form tabs -->
                        <ul role="tablist" class="nav bg-light nav-pills rounded nav-fill mb-3">
                            <li class="nav-item"> <a data-toggle="pill" href="#credit-card" class="nav-link "> <i class="fas fa-credit-card mr-2"></i> Credit Card </a> </li>
                            <li class="nav-item"> <a data-toggle="pill" href="#paypal" class="nav-link active"> <i class="fab fa-paypal mr-2"></i> Paypal </a> </li>
                            <li class="nav-item"> <a data-toggle="pill" href="#net-banking" class="nav-link "> <i class="fas fa-mobile-alt mr-2"></i> Net Banking </a> </li>
                        </ul>
                    </div> <!-- End -->
                    <!-- Credit card form content -->
                    <div class="tab-content">
                        <!-- credit card info-->
                        <div id="credit-card" class="tab-pane fade pt-3">
                            <form role="form">
                                <div class="form-group"> <label for="username">
                                        <h6>Card Owner</h6>
                                    </label> <input type="text" name="username" placeholder="Card Owner Name" class="form-control "> </div>
                                <div class="form-group"> <label for="cardNumber">
                                        <h6>Card number</h6>
                                    </label>
                                    <div class="input-group"> <input type="text" name="cardNumber" placeholder="Valid card number" class="form-control ">
                                        <div class="input-group-append"> <span class="input-group-text text-muted"> <i class="fab fa-cc-visa mx-1"></i> <i class="fab fa-cc-mastercard mx-1"></i> <i class="fab fa-cc-amex mx-1"></i> </span> </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-8">
                                        <div class="form-group"> <label><span class="hidden-xs">
                                                    <h6>Expiration Date</h6>
                                                </span></label>
                                            <div class="input-group"> <input type="number" placeholder="MM" name="" class="form-control" > <input type="number" placeholder="YY" name="" class="form-control" > </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group mb-4"> <label data-toggle="tooltip" title="Three digit CV code on the back of your card">
                                                <h6>CVV <i class="fa fa-question-circle d-inline"></i></h6>
                                            </label> <input type="text"  class="form-control"> </div>
                                    </div>
                                </div>
                                <div class="card-footer"> <button type="button" class="subscribe btn btn-primary btn-block shadow-sm"> Confirm Payment </button>
                            </form>
                        </div>
                    </div> <!-- End -->
                    <!-- Paypal info -->
                    <div id="paypal" class="tab-pane active fade show pt-3">
                        <h6 class="pb-2">Select your paypal account type</h6>
                        <div class="form-group "> <label class="radio-inline"> <input type="radio" name="optradio" checked> Domestic </label> <label class="radio-inline"> <input type="radio" name="optradio" class="ml-5">International </label></div>
                        <p> <button type="button" class="btn btn-primary "><i class="fab fa-paypal mr-2"></i> Log into my Paypal</button> </p>
                        <p class="text-muted"> Note: After clicking on the button, you will be directed to a secure gateway for payment. After completing the payment process, you will be redirected back to the website to view details of your order. </p>
                    </div> <!-- End -->
                    <!-- bank transfer info -->
                    <div id="net-banking" class="tab-pane fade pt-3">
                        <div class="form-group "> <label for="Select Your Bank">
                                <h6>Select your Bank</h6>
                            </label> <select class="form-control" id="ccmonth">
                                <option value="" selected disabled>--Please select your Bank--</option>
                                <option>Bank 1</option>
                                <option>Bank 2</option>
                                <option>Bank 3</option>
                                <option>Bank 4</option>
                                <option>Bank 5</option>
                                <option>Bank 6</option>
                                <option>Bank 7</option>
                                <option>Bank 8</option>
                                <option>Bank 9</option>
                                <option>Bank 10</option>
                            </select> </div>
                        <div class="form-group">
                            <p> <button type="button" class="btn btn-primary "><i class="fas fa-mobile-alt mr-2"></i> Proceed Pyment</button> </p>
                        </div>
                        <p class="text-muted">Note: After clicking on the button, you will be directed to a secure gateway for payment. After completing the payment process, you will be redirected back to the website to view details of your order. </p>
                    </div> <!-- End -->
                    <!-- End -->
                </div>
            </div>
        </div>
    
                            <div class="con-form-adiv">
                                <button class="btn btn-sm btn-success" type="submit">Book</button>
                                <a style=" padding-top: 5px; padding-bottom: 7px; padding-right:7px; padding-left:7px;background-color: #b90000;" href="{{ URL::previous() }}">Cancel</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
